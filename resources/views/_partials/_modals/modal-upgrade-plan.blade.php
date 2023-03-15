<!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Upgrade Plan</h3>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
          <div class="col-sm-9">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="mx-md-n5 mx-n3">
      <div class="modal-body">
        <h6 class="mb-0">User current plan is standard plan</h6>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-2">
            <sup class="h5 pricing-currency fw-normal pt-2 mt-4 mb-0 me-1 text-primary">$</sup>
            <h1 class="fw-normal display-1 mb-0 text-primary">99</h1>
            <sub class="h5 pricing-duration mt-auto mb-3">/month</sub>
          </div>
          <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
