<?= $this->extend('layout/main'); ?>

<?= $this->section('extra_head'); ?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection(); ?>

<?= $this->section('body'); ?>
<?php 
// $accesscontrol=getaccesscontrol(3,$userdata['roleid']);
// $access = ['2'=>['1' => ['read','add','edit','delete']],'1'=>['1' => ['read','delete']]];

?>
 
    <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Add Data Start --->
        <div class="row" id="addview" style="display:none;">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="bg-light m-0 row">
                <div class="col-md-6 mt-2">
                  <div class="">
                <h3 class="card-title htitle">Add User</h3>
                
              </div>
                </div>
                <div class="col-md-6 mt-2">
                  <button type="button" class="btn btn-tool d-flex justify-content-end" id="close" style="font-size: 18px;">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                </div>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adduser" method="post" id="popform">
                <input type="hidden" name="id" class="form-control" id="id" value="">
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="form-group col-md-3">
                      <label for="user">User Full Name</label>
                    </div>
                    <div class="form-group col-md-3">
                      <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                    </div>
      
                    <div class="form-group col-md-3">
                      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <!-- <div class="form-group col-md-6">
                      <label for="role">Role</label>
                      <select name="role" class="form-control" id="role" required>
                        <option value="">--Select Role--</option>
                        <?php 
                        //$rolesArray=array();
                        //foreach($roles as $key=>$val){
                         // $rolesArray[$val->id] = $val->role;
                        ?>
                          <option value="<?php // echo $val->id; ?>"><?php //echo $val->role; ?></option>
                        <?php// } ?>
                      </select>
                    </div> -->
                    <div class="form-group col-md-6">
                      <label for="market">Market</label>
                      <select name="market" class="form-control" id="market" required>
                        <option value="">--Select Market--</option>
                        <?php $markets=allmarket(); $marketArray=array();
                        foreach($markets as $key=>$market){
                          $marketArray[$market->id] = $market->marketname;
                        ?>
                          <option value="<?php echo $market->id; ?>"><?php echo $market->marketname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="status">Status</label>
                      <select name="status" class="form-control" id="status">
                        <option value="0" selected="selected">Inactive</option>
                        <option value="1" >Active</option>
                        <!-- <option value="2" >Hide</option> -->
                      </select>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="form-group col-md-6">
                      <label for="status">Username</label>
                        <input type="email" name="username" class="form-control" id="username" placeholder="Username" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="status">Password</label>
                      <select name="password" class="form-control" id="password">
                          <option value="">-----</option>
                          <option value="1">Reset Default Password</option>
                    
                      </select>
                    </div>
                  </div>

                  <div class="row" id="accessview">
                  <div class="col-md-12">
                    <div class="card card-danger">
                      <div class="card-header">
                        <!-- <h3 class="card-title" id="rolename" value="">Rolename</h3>
                        <input type="hidden" name="roleid" id="roleid" value=""> -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                        <div id="accordion">
                          <?php 
                          
                          $module = allmodule(); 
                          foreach ($module as $key => $modulename) {
                          ?>
                          <div class="card card-success">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse<?php echo $modulename->id; ?>" aria-expanded="false">
                                  <?php echo $modulename->module_name; ?>
                                </a>
                              </h4>
                            </div>
                            <div id="collapse<?php echo $modulename->id; ?>" class="collapse" data-parent="#accordion" style="">
                              <div class="card-body">
                                <ul class="nav nav-treeview">
                                  
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th class="col-md-1">Sr.</th>
                                      <th class="col-md-6">Menu Name</th>
                                      <th class="col-md-1">View</th>
                                      <th class="col-md-1">Add</th>
                                      <th class="col-md-1">Edit</th>
                                      <th class="col-md-1">Delete</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                    $sr=1;
                                    $menu = allmenu($modulename->id); 
                                    
                                    foreach ($menu as $key => $menuname) {
                                      // print_r($roles);
                                      // echo $roles[0]->id;
                                       //  $access = checkaccess($roles[0]->id,$menuname->menuid);
                                        // echo '<pre>';print_r($access[$modulename->id][$menuname->id]);
                                      /*$read = in_array('read', $access[$modulename->id][$menuname->id])?'checked':'';
                                      $add = in_array('add', $access[$modulename->id][$menuname->id])?'checked':'';
                                      $edit = in_array('edit', $access[$modulename->id][$menuname->id])?'checked':'';
                                      $delete = in_array('delete', $access[$modulename->id][$menuname->id])?'checked':'';*/
                                    ?>

                                    <tr>
                                      <td class="col-md-1"><?php echo $sr; ?>.</td>
                                      <td class="col-md-6"><?php echo $menuname->menu; ?>
                                        <label id="updatestatus<?php echo $menuname->id; ?>" style="float: right;color: forestgreen;"></label>
                                      </td>
                                      <td class="col-md-1"><input type="checkbox" name="read<?php echo $menuname->id; ?>" id="read<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $modulename->id .'-'.$menuname->id.'-read'; ?>" action="read" moduleid="<?php echo $modulename->id; ?>"  ></td>
                                      <td class="col-md-1"><input type="checkbox" name="add<?php echo $menuname->id; ?>" id="add<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $modulename->id .'-'.$menuname->id.'-add'; ?>" action="add" moduleid="<?php echo $modulename->id; ?>" ></td>
                                      <td class="col-md-1"><input type="checkbox" name="edit<?php echo $menuname->id; ?>" id="edit<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $modulename->id .'-'.$menuname->id.'-edit'; ?>" action="edit" moduleid="<?php echo $modulename->id; ?>" ></td>
                                      <td class="col-md-1"><input type="checkbox" name="delete<?php echo $menuname->id; ?>" id="delete<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $modulename->id .'-'.$menuname->id.'-delete'; ?>" action="delete" moduleid="<?php echo $modulename->id; ?>" ></td>
                                    </tr>
                                    <?php $sr++; } ?>
                                
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
              
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>

                  <!-- <div class="row mb-2">
                    <div class="form-group col-md-6">
                      <label for="market">Market</label>
                      <select name="market" class="form-control" id="market" required>
                        <option value="">--Select Market--</option>
                        <?php $markets=allmarket(); $marketArray=array();
                        foreach($markets as $key=>$market){
                          $marketArray[$market->id] = $market->marketname;
                        ?>
                          <option value="<?php echo $market->id; ?>"><?php echo $market->marketname; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div> -->
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="bg-success border-success btn btn-primary text-white w-auto">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Add Data End --->

        <!-- Data table Start -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- TO DO List -->
            <div class="card card-primary">
              <div class="bg-light m-0 mt-0 row">
                <div class="col-md-6 pt-2">
                  <div class="">
                <h3 class="card-title"><?= $pageTitle ?></h3>
                <?php //  if($accesscontrol[0]->addaccess==1){ ?>
                
              </div>
                </div>
                <div class="col-md-6 pt-2 text-right">
                  <button class="bg-danger btn btn-success m-0 mt-0 w-auto" id="add">Add User</button>
                <?php // } ?>
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <!-- <th>User Role</th> -->
                    <th>Status</th>
                    <th>Market</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    
                    $sr=1;
                    foreach($data as $key=>$users){
                      
                    ?>
                  <tr>
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['fname']." ".$users['lname']; ?></td>
                    <td><?php echo $users['username']; ?></td>
                    <!-- <td><?php //echo $rolesArray[$users['roleid']]; ?></td> -->
                    <td><?php echo ($users['status']==0)?'Inactive':'Active'; ?></td>
                    <td><?php echo $marketArray[$users['market_id']]; ?></td>
                    <td><?php echo $users['created_at']; ?></td>
                    <td>
                      <?php
                        // print_r($accesscontrol[0]);
                        //if($accesscontrol[0]->readaccess==1){ 
                      ?>
                          <!-- <a href="#" class="btn btn-success view" style="padding: 0rem 0rem;" value="<?php echo $users['id']; ?>"><i class="fas fa-eye"></i></a> -->
                      <?php
                        /* }
                        if($accesscontrol[0]->editaccess==1){*/
                      ?>
                          <a href="#" class="btn btn-warning edit" style="padding: 0rem 0rem;" value="<?php echo $users['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                      <?php
                        /*}
                        if($accesscontrol[0]->deleteaccess==1){*/
                      ?>
                          <a href="#" class="btn btn-danger delete" style="padding: 0rem 0rem;" value="<?php echo $users['id']; ?>"><i class="fas fa-trash"></i></a>
                      <?php
                        // }
                      ?>
                    </td>
                  </tr>
                <?php $sr++; } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <!-- <th>User Role</th> -->
                    <th>Status</th>
                    <th>Market</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
        <!-- Data table Start -->

      </div><!-- /.container-fluid -->
    </section>
  


<?= $this->endSection(); ?>


<?= $this->section('extra_foot'); ?>
  <!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>public/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,"order": [[0, 'desc']],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(document).ready(function(){
  var baseUrl = "<?php echo base_url() ?>";

/********************Show Add record view *********************/
  $(document).on('click','#add',function(){
    $('#popform')[0].reset();
    $(".htitle").html('Add User');
    $("#addview").show();
    
  });
/********************Show Add record view *********************/

/********************Close Add record view *********************/
  $(document).on('click','#close',function(){
    $("#addview").hide();
  });
/********************Show Add record view *********************/

/********************Show edit record view *********************/
  $(document).on('click','.edit',function(){
    var Id = '';
    Id=$(this).attr('value');

    var request = $.ajax({
      url: baseUrl+"usereditbyid",
      type: "POST",
      data: {id : Id},
      dataType: "json"
    });

    request.done(function(data) {
      if(data.access != null)
      {
        // Iterate over the main object
        $.each(JSON.parse(data.access), function (key, value) {
             // Check if the value is an object
            if ($.isPlainObject(value)) {
                // Iterate over the keys and values in the sub-object
                $.each(value, function (subKey, subValue) {
                    if ($.isArray(subValue)) {
                        // Iterate over the array elements
                        $.each(subValue, function (index, action) {
                          var menuid = action + subKey;
                          $("#"+menuid).prop("checked", true);
                        });
                    } else {
                      var menuid = subValue + subKey;
                          $("#"+menuid).prop("checked", true);
                    }
                });
            }
        });
      }
            
      $("#id").val(data.id);
      $("#fname").val(data.fname);
      $("#lname").val(data.lname);
      // $("#role").val(data.roleid);
      $("#username").val(data.username);
      $("#status").val(data.status);
      $("#market").val(data.market_id);
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

    $("#addview").show();
    $(".htitle").html('Edit User');
  });
/********************Show edit record view *********************/

/********************delete record from master *********************/
   $(document).on('click','.delete',function(){
    var Id = '';
    Id=$(this).attr('value');

    var request = $.ajax({
      url: baseUrl+"deleteuser",
      type: "POST",
      data: {id : Id},
      dataType: "json"
    });

    request.done(function(data) {
      // console.log(data);
      if(data.status==200){
        alert(data.msg);
        location.reload();
      }
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

  });
/********************delete record from master *********************/

});
</script>

<?= $this->endSection(); ?>