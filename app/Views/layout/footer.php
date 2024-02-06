<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="<?=base_url()?>public/js/bootstrap.min.js"></script> -->
    <script src="<?=base_url()?>public/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>public/js/script.js"></script>
   <script type="text/javascript" language="javascript">

      var idleMax = 15; // Logout after 15 minutes of IDLE
      var idleTime = 0;

      var idleInterval = setInterval("timerIncrement()", 60000);  // 1 minute interval    
      $( "body" ).mousemove(function( event ) {
          idleTime = 0; // reset to zero
      });

      // count minutes
      function timerIncrement() {
          idleTime = idleTime + 1;
          if (idleTime > idleMax) {
            console.log('logout');
            window.location="<?=base_url() ?>logout";
          }
      }       
    </script>
    <script>
    $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
         
        });
        $('.insightList').multiselect({
            selectAllText: true
        });
    });
 
    $(function() {
      $('.multiselect').addClass('custom-select');
      $('.caret').addClass('pl-3');
      $('.multiselect').addClass('border');
      $('.multiselect').addClass('rounded');
    });
    </script>
    <script>
      // Initiate the wowjs
  // new WOW().init();
    </script>