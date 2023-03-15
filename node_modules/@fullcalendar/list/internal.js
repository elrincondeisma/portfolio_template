'use strict';

Object.defineProperty(exports, '__esModule', { value: true });

var internal = require('@fullcalendar/core/internal');
var preact = require('@fullcalendar/core/preact');

class ListViewHeaderRow extends internal.BaseComponent {
    constructor() {
        super(...arguments);
        this.state = {
            textId: internal.getUniqueDomId(),
        };
    }
    render() {
        let { theme, dateEnv, options, viewApi } = this.context;
        let { cellId, dayDate, todayRange } = this.props;
        let { textId } = this.state;
        let dayMeta = internal.getDateMeta(dayDate, todayRange);
        // will ever be falsy?
        let text = options.listDayFormat ? dateEnv.format(dayDate, options.listDayFormat) : '';
        // will ever be falsy? also, BAD NAME "alt"
        let sideText = options.listDaySideFormat ? dateEnv.format(dayDate, options.listDaySideFormat) : '';
        let renderProps = Object.assign({ date: dateEnv.toDate(dayDate), view: viewApi, textId,
            text,
            sideText, navLinkAttrs: internal.buildNavLinkAttrs(this.context, dayDate), sideNavLinkAttrs: internal.buildNavLinkAttrs(this.context, dayDate, 'day', false) }, dayMeta);
        // TODO: make a reusable HOC for dayHeader (used in daygrid/timegrid too)
        return (preact.createElement(internal.ContentContainer, { elTag: "tr", elClasses: [
                'fc-list-day',
                ...internal.getDayClassNames(dayMeta, theme),
            ], elAttrs: {
                'data-date': internal.formatDayString(dayDate),
            }, renderProps: renderProps, generatorName: "dayHeaderContent", generator: options.dayHeaderContent || renderInnerContent, classNameGenerator: options.dayHeaderClassNames, didMount: options.dayHeaderDidMount, willUnmount: options.dayHeaderWillUnmount }, (InnerContent) => ( // TODO: force-hide top border based on :first-child
        preact.createElement("th", { scope: "colgroup", colSpan: 3, id: cellId, "aria-labelledby": textId },
            preact.createElement(InnerContent, { elTag: "div", elClasses: [
                    'fc-list-day-cushion',
                    theme.getClass('tableCellShaded'),
                ] })))));
    }
}
function renderInnerContent(props) {
    return (preact.createElement(preact.Fragment, null,
        props.text && (preact.createElement("a", Object.assign({ id: props.textId, className: "fc-list-day-text" }, props.navLinkAttrs), props.text)),
        props.sideText && ( /* not keyboard tabbable */preact.createElement("a", Object.assign({ "aria-hidden": true, className: "fc-list-day-side-text" }, props.sideNavLinkAttrs), props.sideText))));
}

const DEFAULT_TIME_FORMAT = internal.createFormatter({
    hour: 'numeric',
    minute: '2-digit',
    meridiem: 'short',
});
class ListViewEventRow extends internal.BaseComponent {
    render() {
        let { props, context } = this;
        let { options } = context;
        let { seg, timeHeaderId, eventHeaderId, dateHeaderId } = props;
        let timeFormat = options.eventTimeFormat || DEFAULT_TIME_FORMAT;
        return (preact.createElement(internal.EventContainer, Object.assign({}, props, { elTag: "tr", elClasses: [
                'fc-list-event',
                seg.eventRange.def.url && 'fc-event-forced-url',
            ], defaultGenerator: () => renderEventInnerContent(seg, context) /* weird */, seg: seg, timeText: "", disableDragging: true, disableResizing: true }), (InnerContent, eventContentArg) => (preact.createElement(preact.Fragment, null,
            buildTimeContent(seg, timeFormat, context, timeHeaderId, dateHeaderId),
            preact.createElement("td", { "aria-hidden": true, className: "fc-list-event-graphic" },
                preact.createElement("span", { className: "fc-list-event-dot", style: {
                        borderColor: eventContentArg.borderColor || eventContentArg.backgroundColor,
                    } })),
            preact.createElement(InnerContent, { elTag: "td", elClasses: ['fc-list-event-title'], elAttrs: { headers: `${eventHeaderId} ${dateHeaderId}` } })))));
    }
}
function renderEventInnerContent(seg, context) {
    let interactiveAttrs = internal.getSegAnchorAttrs(seg, context);
    return (preact.createElement("a", Object.assign({}, interactiveAttrs), seg.eventRange.def.title));
}
function buildTimeContent(seg, timeFormat, context, timeHeaderId, dateHeaderId) {
    let { options } = context;
    if (options.displayEventTime !== false) {
        let eventDef = seg.eventRange.def;
        let eventInstance = seg.eventRange.instance;
        let doAllDay = false;
        let timeText;
        if (eventDef.allDay) {
            doAllDay = true;
        }
        else if (internal.isMultiDayRange(seg.eventRange.range)) { // TODO: use (!isStart || !isEnd) instead?
            if (seg.isStart) {
                timeText = internal.buildSegTimeText(seg, timeFormat, context, null, null, eventInstance.range.start, seg.end);
            }
            else if (seg.isEnd) {
                timeText = internal.buildSegTimeText(seg, timeFormat, context, null, null, seg.start, eventInstance.range.end);
            }
            else {
                doAllDay = true;
            }
        }
        else {
            timeText = internal.buildSegTimeText(seg, timeFormat, context);
        }
        if (doAllDay) {
            let renderProps = {
                text: context.options.allDayText,
                view: context.viewApi,
            };
            return (preact.createElement(internal.ContentContainer, { elTag: "td", elClasses: ['fc-list-event-time'], elAttrs: {
                    headers: `${timeHeaderId} ${dateHeaderId}`,
                }, renderProps: renderProps, generatorName: "allDayContent", generator: options.allDayContent || renderAllDayInner, classNameGenerator: options.allDayClassNames, didMount: options.allDayDidMount, willUnmount: options.allDayWillUnmount }));
        }
        return (preact.createElement("td", { className: "fc-list-event-time" }, timeText));
    }
    return null;
}
function renderAllDayInner(renderProps) {
    return renderProps.text;
}

/*
Responsible for the scroller, and forwarding event-related actions into the "grid".
*/
class ListView extends internal.DateComponent {
    constructor() {
        super(...arguments);
        this.computeDateVars = internal.memoize(computeDateVars);
        this.eventStoreToSegs = internal.memoize(this._eventStoreToSegs);
        this.state = {
            timeHeaderId: internal.getUniqueDomId(),
            eventHeaderId: internal.getUniqueDomId(),
            dateHeaderIdRoot: internal.getUniqueDomId(),
        };
        this.setRootEl = (rootEl) => {
            if (rootEl) {
                this.context.registerInteractiveComponent(this, {
                    el: rootEl,
                });
            }
            else {
                this.context.unregisterInteractiveComponent(this);
            }
        };
    }
    render() {
        let { props, context } = this;
        let { dayDates, dayRanges } = this.computeDateVars(props.dateProfile);
        let eventSegs = this.eventStoreToSegs(props.eventStore, props.eventUiBases, dayRanges);
        return (preact.createElement(internal.ViewContainer, { elRef: this.setRootEl, elClasses: [
                'fc-list',
                context.theme.getClass('table'),
                context.options.stickyHeaderDates !== false ?
                    'fc-list-sticky' :
                    '',
            ], viewSpec: context.viewSpec },
            preact.createElement(internal.Scroller, { liquid: !props.isHeightAuto, overflowX: props.isHeightAuto ? 'visible' : 'hidden', overflowY: props.isHeightAuto ? 'visible' : 'auto' }, eventSegs.length > 0 ?
                this.renderSegList(eventSegs, dayDates) :
                this.renderEmptyMessage())));
    }
    renderEmptyMessage() {
        let { options, viewApi } = this.context;
        let renderProps = {
            text: options.noEventsText,
            view: viewApi,
        };
        return (preact.createElement(internal.ContentContainer, { elTag: "div", elClasses: ['fc-list-empty'], renderProps: renderProps, generatorName: "noEventsContent", generator: options.noEventsContent || renderNoEventsInner, classNameGenerator: options.noEventsClassNames, didMount: options.noEventsDidMount, willUnmount: options.noEventsWillUnmount }, (InnerContent) => (preact.createElement(InnerContent, { elTag: "div", elClasses: ['fc-list-empty-cushion'] }))));
    }
    renderSegList(allSegs, dayDates) {
        let { theme, options } = this.context;
        let { timeHeaderId, eventHeaderId, dateHeaderIdRoot } = this.state;
        let segsByDay = groupSegsByDay(allSegs); // sparse array
        return (preact.createElement(internal.NowTimer, { unit: "day" }, (nowDate, todayRange) => {
            let innerNodes = [];
            for (let dayIndex = 0; dayIndex < segsByDay.length; dayIndex += 1) {
                let daySegs = segsByDay[dayIndex];
                if (daySegs) { // sparse array, so might be undefined
                    let dayStr = internal.formatDayString(dayDates[dayIndex]);
                    let dateHeaderId = dateHeaderIdRoot + '-' + dayStr;
                    // append a day header
                    innerNodes.push(preact.createElement(ListViewHeaderRow, { key: dayStr, cellId: dateHeaderId, dayDate: dayDates[dayIndex], todayRange: todayRange }));
                    daySegs = internal.sortEventSegs(daySegs, options.eventOrder);
                    for (let seg of daySegs) {
                        innerNodes.push(preact.createElement(ListViewEventRow, Object.assign({ key: dayStr + ':' + seg.eventRange.instance.instanceId /* are multiple segs for an instanceId */, seg: seg, isDragging: false, isResizing: false, isDateSelecting: false, isSelected: false, timeHeaderId: timeHeaderId, eventHeaderId: eventHeaderId, dateHeaderId: dateHeaderId }, internal.getSegMeta(seg, todayRange, nowDate))));
                    }
                }
            }
            return (preact.createElement("table", { className: 'fc-list-table ' + theme.getClass('table') },
                preact.createElement("thead", null,
                    preact.createElement("tr", null,
                        preact.createElement("th", { scope: "col", id: timeHeaderId }, options.timeHint),
                        preact.createElement("th", { scope: "col", "aria-hidden": true }),
                        preact.createElement("th", { scope: "col", id: eventHeaderId }, options.eventHint))),
                preact.createElement("tbody", null, innerNodes)));
        }));
    }
    _eventStoreToSegs(eventStore, eventUiBases, dayRanges) {
        return this.eventRangesToSegs(internal.sliceEventStore(eventStore, eventUiBases, this.props.dateProfile.activeRange, this.context.options.nextDayThreshold).fg, dayRanges);
    }
    eventRangesToSegs(eventRanges, dayRanges) {
        let segs = [];
        for (let eventRange of eventRanges) {
            segs.push(...this.eventRangeToSegs(eventRange, dayRanges));
        }
        return segs;
    }
    eventRangeToSegs(eventRange, dayRanges) {
        let { dateEnv } = this.context;
        let { nextDayThreshold } = this.context.options;
        let range = eventRange.range;
        let allDay = eventRange.def.allDay;
        let dayIndex;
        let segRange;
        let seg;
        let segs = [];
        for (dayIndex = 0; dayIndex < dayRanges.length; dayIndex += 1) {
            segRange = internal.intersectRanges(range, dayRanges[dayIndex]);
            if (segRange) {
                seg = {
                    component: this,
                    eventRange,
                    start: segRange.start,
                    end: segRange.end,
                    isStart: eventRange.isStart && segRange.start.valueOf() === range.start.valueOf(),
                    isEnd: eventRange.isEnd && segRange.end.valueOf() === range.end.valueOf(),
                    dayIndex,
                };
                segs.push(seg);
                // detect when range won't go fully into the next day,
                // and mutate the latest seg to the be the end.
                if (!seg.isEnd && !allDay &&
                    dayIndex + 1 < dayRanges.length &&
                    range.end <
                        dateEnv.add(dayRanges[dayIndex + 1].start, nextDayThreshold)) {
                    seg.end = range.end;
                    seg.isEnd = true;
                    break;
                }
            }
        }
        return segs;
    }
}
function renderNoEventsInner(renderProps) {
    return renderProps.text;
}
function computeDateVars(dateProfile) {
    let dayStart = internal.startOfDay(dateProfile.renderRange.start);
    let viewEnd = dateProfile.renderRange.end;
    let dayDates = [];
    let dayRanges = [];
    while (dayStart < viewEnd) {
        dayDates.push(dayStart);
        dayRanges.push({
            start: dayStart,
            end: internal.addDays(dayStart, 1),
        });
        dayStart = internal.addDays(dayStart, 1);
    }
    return { dayDates, dayRanges };
}
// Returns a sparse array of arrays, segs grouped by their dayIndex
function groupSegsByDay(segs) {
    let segsByDay = []; // sparse array
    let i;
    let seg;
    for (i = 0; i < segs.length; i += 1) {
        seg = segs[i];
        (segsByDay[seg.dayIndex] || (segsByDay[seg.dayIndex] = []))
            .push(seg);
    }
    return segsByDay;
}

exports.ListView = ListView;
