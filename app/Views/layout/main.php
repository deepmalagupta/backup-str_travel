<?php

  $userdata=session()->userdata;
    if(empty($userdata)){
      header("Location: ".base_url());
      die;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <link href="<?=base_url()?>public/lib/animate/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <!-- Include SweetAlert2 from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <title><?= (isset($pageTitle)) ? $pageTitle : 'Shiseido Travel Retail'; ?></title>
    <style>
      .bg-grey{
        background-color: #eaeaea;
      }
    </style>
    <style></style>
    <?= $this->renderSection('extra_head');?>
  </head>
  <body>
    <!-- sidebar -->
    <?= view('layout/sidebar'); ?>

    <!-- main section start -->
      <section class="home-section container-fluid">
        <!-- header navbar start -->
        <?= view('layout/navbar'); ?>
        <!-- header navbar end -->

        <!-- main containe section start -->
        <?= $this->renderSection("body") ?>
      </section>

      <!-- Footer -->
      <?= view('layout/footer'); ?>

      <?= $this->renderSection('extra_foot');?>
  </body>
</html>
