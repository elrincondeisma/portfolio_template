var numKeys = require("./num-keys");

function Storage(obj, set, clear) {
  this._obj = obj || {};
  this._set = set;
  this._clear = clear;

  this.length = 0;
}

var proto = Storage.prototype;

// html5 storage api

proto.setItem = function (k, v) {
  k = encodeURIComponent(k);
  this._obj[k] = v;

  this._updateLength();
  if (this._set) this._set(this._obj);
};

proto.getItem = function (k) {
  k = encodeURIComponent(k);
  return this._obj[k] === undefined ? null : this._obj[k];
};

proto.removeItem = function (k) {
  k = encodeURIComponent(k);
  delete this._obj[k];

  this._updateLength();
  if (this._set) this._set(this._obj);
};

proto.key = function (i) {
  var ctr = 0;
  for (var k in this._obj) {
    if (ctr === i) return decodeURIComponent(k);
    else ctr++;
  }

  return null;
};

proto.clear = function () {
  delete this["_obj"];

  if (this._clear) this._clear();
};

// private
proto._updateLength = function () {
  this.length = numKeys(this._obj);
};

module.exports = Storage;
