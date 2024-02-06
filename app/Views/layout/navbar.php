<div class="bg-white row">
          <div class="col">
            <p class="text m-2">
              <img src="<?=base_url()?>public/images/shiseido_logo.png" width="130" />
            </p>
          </div>
          <div class="col">
            
              <div class="profile py-2">
                <div class="profile_details d-flex justify-content-end">
                  <div class="profile_content pr-3">
                    <p class="small mb-0">Welcome</p>
                    <p class="mb-0 font-weight-bold user-name"><?= session()->userdata['fname'].' '.session()->userdata['lname'] ?></p>
                  </div>
                  
                  <div class="">
                    <button class="btn p-0 dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?=base_url()?>public/images/profile.jpeg" alt="profile image">
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?=base_url()?>logout">Log Out</a>
                      
                    </div>
                  </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>
              </div>
          </div>
        </div>