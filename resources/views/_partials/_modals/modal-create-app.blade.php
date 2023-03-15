@php
$configData = Helper::appClasses();
@endphp
<!-- Create App Modal -->
<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body p-2">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center">
          <h3 class="mb-2">Create App</h3>
          <p>Provide data with this form to create your app.</p>
        </div>
        <!-- Property Listing Wizard -->
        <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
          <div class="bs-stepper-header border-0 p-1">
            <div class="step" data-target="#details">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="bx bx-file fs-5"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Details</span>
                  <span class="bs-stepper-subtitle">Enter Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#frameworks">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="bx bx-box fs-5"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Frameworks</span>
                  <span class="bs-stepper-subtitle">Select Framework</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#database">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="bx bx-data fs-5"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Database</span>
                  <span class="bs-stepper-subtitle">Select Database</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#billing">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="bx bx-credit-card fs-5"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Billing</span>
                  <span class="bs-stepper-subtitle">Payment Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#submit">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="bx bx-check fs-5"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Submit</span>
                  <span class="bs-stepper-subtitle">Submit</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content p-1">
            <form onSubmit="return false">
              <!-- Details -->
              <div id="details" class="content pt-3 pt-lg-0">
                <div class="mb-3">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Application Name">
                </div>
                <h5>Category</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="bx bx-file bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">CRM Application</h6>
                        <small class="text-muted">Scales with any business</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="bx bx-cart bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">eCommerce Platforms</h6>
                        <small class="text-muted">Grow Your Business With App</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="bx bx-laptop bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Online Learning platform</h6>
                        <small class="text-muted">Start learning today</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
              </div>

              <!-- Frameworks -->
              <div id="frameworks" class="content pt-3 pt-lg-0">
                <h5>Category</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="bx bxl-react bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">React Native</h6>
                        <small class="text-muted">Create truly native apps</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="bx bxl-angular bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Angular</h6>
                        <small class="text-muted">Most suited for your application</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="bx bxl-html5 bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">HTML</h6>
                        <small class="text-muted">Progressive Framework</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="bx bxl-vuejs bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">VueJs</h6>
                        <small class="text-muted">JS web frameworks</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <div class="col-12 d-flex justify-content-between mt-4">
                  <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
              </div>

              <!-- Database -->
              <div id="database" class="content pt-3 pt-lg-0">
                <div class="mb-3">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Database Name">
                </div>
                <h5>Select Database Engine</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="bx bxl-firebase bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Firebase</h6>
                        <small class="text-muted">Cloud Firestone</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="bx bxl-amazon bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">AWS</h6>
                        <small class="text-muted">Amazon Fast NoSQL Database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="bx bx-data bx-sm"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">MySQL</h6>
                        <small class="text-muted">Basic MySQL database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
              </div>

              <!-- billing -->
              <div id="billing" class="content">
                <div id="AppNewCCForm" class="row g-3 pt-3 pt-lg-0 mb-5" onsubmit="return false">
                  <div class="col-12">
                    <div class="input-group input-group-merge">
                      <input class="form-control app-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard" />
                      <span class="input-group-text cursor-pointer p-1" id="modalAppAddCard"><span class="app-card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <input type="text" class="form-control" placeholder="John Doe" />
                  </div>
                  <div class="col-6 col-md-3">
                    <input type="text" class="form-control app-expiry-date-mask" placeholder="MM/YY" />
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="input-group input-group-merge">
                      <input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask" maxlength="3" placeholder="654" />
                      <span class="input-group-text cursor-pointer" id="modalAppAddCardCvv2"><i class="text-muted bx bx-help-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="switch">
                      <input type="checkbox" class="switch-input" checked>
                      <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                      </span>
                      <span class="switch-label">Save card for future billing?</span>
                    </label>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between mt-4">
                  <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-right-arrow-alt bx-xs"></i></button>
                </div>
              </div>

              <!-- submit -->
              <div id="submit" class="content text-center pt-3 pt-lg-0">
                <h5 class="mb-2 mt-3">Submit</h5>
                <p>Submit to kick start your project.</p>
                <!-- image -->
                <img src="{{asset('assets/img/illustrations/girl-doing-yoga-'.$configData['style'].'.png')}}" alt="Create App img" width="300" class="img-fluid" data-app-light-img="illustrations/girl-doing-yoga-light.png" data-app-dark-img="illustrations/girl-doing-yoga-dark.png">
                <div class="col-12 d-flex justify-content-between mt-4 pt-2">
                  <button class="btn btn-label-secondary btn-prev"> <i class="bx bx-left-arrow-alt bx-xs me-sm-1 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-success btn-next btn-submit"> <span class="align-middle d-sm-inline-block d-none">Submit</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--/ Property Listing Wizard -->
    </div>
  </div>
</div>
<!--/ Create App Modal -->
