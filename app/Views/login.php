<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />

    <title>Shiseido Travel Retail</title>
  </head>
  <body class="hero_bg">
    <div class="login-page container-fluid">
      <div class="">
        <!-- login start -->
        <div class="row">
          <div class="col-md-6">
            <div class="left_text mt-5 p-4 text-white">
            <img class="" src="<?=base_url()?>public/images/shiseido-travel-logo.png">
            <h2 class="mt-4 main_head"><b>Online Dashboard</b></h2>
            <!-- <p class="mt-4" style="font-size:19px">Agency Brief</p>
            <p class="mt-5" style="font-size:19px">December 2023</p> -->
            <br>
            
            </div>
          </div>
          <div class="bg-white-left login-box mt-5 mx-auto p-4 text-center">
            <div class="mb-4">
              <img src="<?=base_url()?>public/images/shiseido-travel-logo_red.png" class="img-fluid" />
            </div>
            <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger error-message">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>



           <!-- <form class="mt-5"> -->
              <?= form_open(base_url("save_login")); ?>
              <div class="form-row align-items-center">
                <div class="col-auto w-100">
                  <label class="sr-only" for="inlineFormInputGroup"
                    >Username</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-danger">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" name="username" placeholder="Username" required />
                  </div>
                </div>

                <div class="col-auto w-100 mt-3">
                  <label class="sr-only" for="userPassword">Username</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-danger">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                      </div>
                    </div>
                    <input type="password" name="password" class="form-control" id="userPassword"placeholder="Password" required/>
                  </div>
                </div>

                <div class="col-auto w-100 mt-4">
                  <!-- <a href="dashboard.html"> -->
                    <button type="submit" class="btn btn-primary mb-2">
                      Submit
                    </button>
                  <!-- </a> -->
                </div>

                <div class="col-auto w-100 mt-5">
                  <button type="submit" class="btn btn-primary mb-2 bg-danger">
                    Login via SSO
                  </button>
                </div>
              </div>
            <!-- </form> -->
             <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="./public/js/script.js"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
  </body>
</html>
