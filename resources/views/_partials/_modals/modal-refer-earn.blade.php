<!-- Refer & Earn Modal -->
<div class="modal fade" id="referAndEarn" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-refer-and-earn">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4">
          <h3>Refer & Earn</h3>
          <p class="text-center mb-5 w-75 m-auto">Invite your friend to {{config('variables.templateName')}}, if they sign up, you and your friend will get 30 days free trial.</p>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 px-4">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='bx bx-message-square-dots'></i>
              </div>
            </div>
            <div class="text-center">
              <h5>Send Invitation 🤟🏻</h5>
              <p class="mb-lg-0">Send your referral link to your friend</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-4">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='bx bx-detail'></i>
              </div>
            </div>
            <div class="text-center">
              <h5>Registration 👩🏻‍💻</h5>
              <p class="mb-lg-0">Let them register to our services</p>
            </div>
          </div>
          <div class="col-12 col-lg-4 px-4">
            <div class="d-flex justify-content-center mb-4">
              <div class="modal-refer-and-earn-step bg-label-primary">
                <i class='bx bx-gift'></i>
              </div>
            </div>
            <div class="text-center">
              <h5>Free Trial 🎉</h5>
              <p class="mb-0">Your friend will get 30 days free trial</p>
            </div>
          </div>
        </div>
        <hr class="my-5" />
        <h5>Invite your friends</h5>
        <form class="row g-3" onsubmit="return false">
          <div class="col-lg-10">
            <label class="form-label" for="modalRnFEmail">Enter your friend’s email address and invite them to join {{config('variables.templateName')}} 😍</label>
            <input type="text" id="modalRnFEmail" class="form-control" placeholder="example@domain.com" aria-label="example@domain.com">
          </div>
          <div class="col-lg-2 d-flex align-items-end">
            <button type="button" class="btn btn-primary">Send</button>
          </div>
        </form>
        <h5 class="mt-4">Share the referral link</h5>
        <form class="row g-3" onsubmit="return false">
          <div class="col-lg-9">
            <label class="form-label" for="modalRnFLink">You can also copy and send it or share it on your social media. 🥳</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalRnFLink" class="form-control" value="{{config('variables.creatorUrl')}}">
              <span class="input-group-text text-primary cursor-pointer" id="basic-addon33">Copy link</span>
            </div>
          </div>
          <div class="col-lg-3 d-flex align-items-end">
            <div class="btn-social">
              <button type="button" class="btn btn-icon btn-facebook mr-2"><i class="tf-icons bx bxl-facebook"></i></button>
              <button type="button" class="btn btn-icon btn-twitter mr-2"><i class="tf-icons bx bxl-twitter"></i></button>
              <button type="button" class="btn btn-icon btn-linkedin"><i class="tf-icons bx bxl-linkedin"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Refer & Earn Modal -->
