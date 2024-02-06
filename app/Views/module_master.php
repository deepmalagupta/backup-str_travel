<?= $this->extend('layout/main'); ?>

<?= $this->section('extra_head'); ?>
<!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection(); ?>

<?= $this->section('body'); ?>
<?php 
// $accesscontrol=getaccesscontrol(4,$userdata['roleid']);
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Add Data Start --->
        <div class="row" id="addview" style="display:none;">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title htitle">Add Module</h3>
                <button type="button" class="btn btn-tool" id="close" style="float: right; font-size: 23px;margin-right: -20px;">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form action="addmodule" method="post" id="popform">
                <input type="hidden" name="moduleid" class="form-control" id="moduleid" value="">
                <div class="card-body">
                  <div class="row mb-2">
                    <div class="form-group col-md-4">
                      <label for="module">Module Name</label>
                      <input type="text" name="module" class="form-control" id="module" placeholder="Enter module name" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="order">Display order</label>
                      <input type="text" name="order" class="form-control" id="order" placeholder="Display Order" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="status">Status</label>
                      <select name="status" class="form-control" id="status">
                        <option value="0" selected="selected">Inactive</option>
                        <option value="1" >Active</option>
                        <!-- <option value="2" >Hide</option> -->
                      </select>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
              <div class="card-header">
                <h3 class="card-title">Module Master</h3>
                <?php //if($accesscontrol[0]->addaccess==1){ ?>
                <button class="btn btn-success" style="float: right; margin: -8px -15px;" id="add">Add Module</button>
                <?php //} ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Module Name</th>
                    <th>Display Order</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                     
                    $sr=1;
                    foreach($members as $key=>$module){
                      
                    ?>
                  <tr>
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $module['module_name']; ?></td>
                    <td><?php echo $module['orderid']; ?></td>
                    <td><?php echo ($module['status']==0)?'Inactive':'Active'; ?></td>
                    <td><?php echo $module['created_at']; ?></td>
                    <td>
                      <?php                        
                        // if($accesscontrol[0]->readaccess==1){ 
                      ?>
                          <!-- <a href="#" class="btn btn-success view" style="padding: 0rem 0rem;" value="<?php echo $module['id']; ?>"><i class="fas fa-eye"></i></a> -->
                      <?php
                        /*}
                        if($accesscontrol[0]->editaccess==1){*/
                      ?>
                          <a href="#" class="btn btn-warning edit" style="padding: 0rem 0rem;" value="<?php echo $module['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                      <?php
                        /*}
                        if($accesscontrol[0]->deleteaccess==1){*/
                      ?>
                          <a href="#" class="btn btn-danger delete" style="padding: 0rem 0rem;" value="<?php echo $module['id']; ?>"><i class="fas fa-trash"></i></a>
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
                    <th>module Name</th>
                    <th>Display Order</th>
                    <th>Status</th>
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
  var baseUrl = "<?= base_url() ?>";

/********************Show Add record view *********************/
  $(document).on('click','#add',function(){
    $('#popform')[0].reset();
    $(".htitle").html('Add Module');
    $("#addview").show();
  });
/********************Show Add record view *********************/

/********************Close Add record view *********************/
  $(document).on('click','#close',function(){

    $("#addview").hide();
    $(".htitle").html('Edit Module');
  });
/********************Show Add record view *********************/

/********************Show edit record view *********************/
 $(document).on('click','.edit',function(){
    var moduleId = '';
    moduleId=$(this).attr('value');
// alert(moduleId);
    var request = $.ajax({
      url: baseUrl+"module_editbyid",
      type: "POST",
      data: {id : moduleId},
      dataType: "json"
    });

    request.done(function(data) {
      $("#moduleid").val(data.id);
      $("#module").val(data.module_name);
      $("#order").val(data.orderid);
      $("#status").val(data.status);
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });

    $("#addview").show();
    $(".htitle").html('Edit Module');
  });
/********************Show edit record view *********************/

/********************delete record from master *********************/
  $(document).on('click','.delete',function(){
    var moduleId = '';
    moduleId=$(this).attr('value');

    var request = $.ajax({
      url: baseUrl+"deletemodule",
      type: "POST",
      data: {moduleid : moduleId},
      dataType: "json"
    });

    request.done(function(data) {
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

});
</script>

<?= $this->endSection(); ?>