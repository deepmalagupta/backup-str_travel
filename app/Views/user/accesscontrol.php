<?= $this->extend('layout/main'); ?>

<?= $this->section('extra_head'); ?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?= PLUGINS ?>datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= PLUGINS ?>datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= PLUGINS ?>datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection(); ?>

<?= $this->section('body'); ?>
<?php 
$accesscontrol=getaccesscontrol(2,$userdata['roleid']);
?>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Data table Start -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- TO DO List -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Access Control</h3>
                <!-- <button class="btn btn-success" style="float: right; margin: -8px -15px;" id="add">Add Role</button> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                  <div class="form-group col-md-4">
                    <h5>User Role : </h5>
                  </div>
                  <div class="form-group col-md-4">
                    <div class="btn-group">  
                      <select name="role" id="role" class="btn btn-default" style="text-align: left;">
                        <option value="">--Select Role--</option>
                        <?php foreach($roles as $role){ ?>
                        <option value="<?php echo $role->id; ?>"><?php echo $role->role; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <button type="button" class="btn btn-info btn-flat" id="gobtn">Go!</button>
                  </div>
                </div>

                <div class="row" id="accessview" style="display:none;">
                  <div class="col-md-12">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title" id="rolename" value="">Rolename</h3>
                        <input type="hidden" name="roleid" id="roleid" value="">
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                        <div id="accordion">
                          <?php $module = allmodule(); 
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
                                    ?>

                                    <tr>
                                      <td class="col-md-1"><?php echo $sr; ?>.</td>
                                      <td class="col-md-6"><?php echo $menuname->menu; ?>
                                        <label id="updatestatus<?php echo $menuname->id; ?>" style="float: right;color: forestgreen;"></label>
                                      </td>
                                      <td class="col-md-1"><input type="checkbox" name="read<?php echo $menuname->id; ?>" id="read<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $menuname->id; ?>" action="read" moduleid="<?php echo $modulename->id; ?>"></td>
                                      <td class="col-md-1"><input type="checkbox" name="add<?php echo $menuname->id; ?>" id="add<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $menuname->id; ?>" action="add" moduleid="<?php echo $modulename->id; ?>"></td>
                                      <td class="col-md-1"><input type="checkbox" name="edit<?php echo $menuname->id; ?>" id="edit<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $menuname->id; ?>" action="edit" moduleid="<?php echo $modulename->id; ?>"></td>
                                      <td class="col-md-1"><input type="checkbox" name="delete<?php echo $menuname->id; ?>" id="delete<?php echo $menuname->id; ?>" class="menuaccessval" value="<?php echo $menuname->id; ?>" action="delete" moduleid="<?php echo $modulename->id; ?>"></td>
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
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endSection(); ?>


<?= $this->section('extra_foot'); ?>
  <!-- DataTables  & Plugins -->
<script src="<?= PLUGINS ?>datatables/jquery.dataTables.min.js"></script>
<script src="<?= PLUGINS ?>datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= PLUGINS ?>datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= PLUGINS ?>datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= PLUGINS ?>datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= PLUGINS ?>datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= PLUGINS ?>jszip/jszip.min.js"></script>
<script src="<?= PLUGINS ?>pdfmake/pdfmake.min.js"></script>
<script src="<?= PLUGINS ?>pdfmake/vfs_fonts.js"></script>
<script src="<?= PLUGINS ?>datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= PLUGINS ?>datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= PLUGINS ?>datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
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
  var baseUrl = "<?php echo BASEURL ?>";

/********************Show Add record view *********************/
  $("#gobtn").click(function(){
    // alert(this.value);
    var role =  $("#role option:selected").text(); 
    var roleid = $("#role").val()
    if(roleid > 0){
      $("#accessview").show();
      $("#rolename").html(role.toUpperCase());
      $("#roleid").val(roleid);

        var request = $.ajax({
          url: baseUrl+"fetchroleaccess",
          type: "POST",
          data: {roleid : roleid},
          dataType: "json"
        });

        request.done(function(data) {
          // console.log(data);
          $.each(data, function( index, value ) {
            // console.log( index + ": " + value.readaccess );
            if(value.readaccess=="1"){
              $("#read"+value.id).prop('checked',true);
            }else{
              $("#read"+value.id).prop('checked',false);
            }

            if(value.addaccess=="1"){
              $("#add"+value.id).prop('checked',true);
            }else{
              $("#add"+value.id).prop('checked',false);
            }

            if(value.editaccess=="1"){
              $("#edit"+value.id).prop('checked',true);
            }else{
              $("#edit"+value.id).prop('checked',false);
            }

            if(value.deleteaccess=="1"){
              $("#delete"+value.id).prop('checked',true);
            }else{
              $("#delete"+value.id).prop('checked',false);
            }
            
          });
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });

    }else{
      $(function() {
      var Toast = Swal.mixin({
        toast: true,
        // position: 'top-end',
        position: 'relative',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        icon: 'error',
        title: 'Kindly select Role.'
      })
    });
    }
  });
/********************Show Add record view *********************/

/********************Close Add record view *********************/
  $("#role").change(function(){
    var role =  $("#role option:selected").text(); 
    var roleid = $("#role").val()
    $("#rolename").html(role.toUpperCase());
    $("#roleid").val(roleid);
    $("#accessview").hide();
  });
/********************Show Add record view *********************/

/********************Show edit record view *********************/
  $(".edit").click(function(){
    var Id = '';
    Id=$(this).attr('value');

    var request = $.ajax({
      url: baseUrl+"roleeditbyid",
      type: "POST",
      data: {id : Id},
      dataType: "json"
    });

    request.done(function(data) {
      console.log(data);
      $("#id").val(data.id);
      $("#role").val(data.role);
      $("#isadmin").val(data.isadmin);
      $("#status").val(data.status);
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

    $("#addview").show();
  });
/********************Show edit record view *********************/

/********************delete record from master *********************/
   $(".delete").click(function(){
    var Id = '';
    Id=$(this).attr('value');

    var request = $.ajax({
      url: baseUrl+"deleterole",
      type: "POST",
      data: {id : Id},
      dataType: "json"
    });

    request.done(function(data) {
      console.log(data);
      if(data.status==200){
        // $('#example1').DataTable().ajax.reload();
        // var mytbl = $("#example1").DataTable();
        alert(data.msg);
        location.reload();
      }
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

  });
/********************delete record from master *********************/


/********************Insert/Update User Role Access *********************/
   $(".menuaccessval").click(function(){
    // var Id='';
    $("#updatestatus"+Id).hide();
    var Id=$(this).attr('value');
    var action=$(this).attr('action');
    var roleid = $("#roleid").val();
    var moduleid=$(this).attr('moduleid');
    var readval = $("#read"+Id).prop('checked');
    var currentval = $(this).prop('checked');
    // console.log(Id+'---'+action+'---'+roleid+'---'+readval+'---'+currentval);
    if(action!="read" && currentval=== true && readval=== false){
        $("#read"+Id).prop('checked',true);
    }else if(readval=== false){
        $("#read"+Id).prop('checked',false);
    }
    if(currentval=== true){
      var actionval= 1;
    }else{
      var actionval= 0;
    }
    var request = $.ajax({
      url: baseUrl+"changeaccess",
      type: "POST",
      data: {id : Id,roleid : roleid, moduleid : moduleid, action : action, val : actionval},
      dataType: "json"
    });

    request.done(function(data) {
      // console.log(data);
      if(data.status==200){
        // alert(data.msg);
        $("#updatestatus"+Id).show();
        $("#updatestatus"+Id).html(data.msg);
        setTimeout(function() { $("#updatestatus"+Id).hide(); }, 5000);
        // location.reload();
      }
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

  });
/********************Insert/Update User Role Access *********************/
  
});
</script>

<?= $this->endSection(); ?>