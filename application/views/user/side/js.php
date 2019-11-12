<script src="<?php echo base_url() ?>master/client/assets/js/respond.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/plugins/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/plugins/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>master/client/assets/plugins/supersized.3.1.3.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/js/js.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/plugins/moment.min.js"></script>
<script src="<?php echo base_url() ?>master/client/assets/plugins/daterangepicker.js"></script>
<script>
$(function() {
  $('input[name="datetimes"]').daterangepicker({
     timePicker: true,
     startDate: moment().startOf('hour'),
     endDate: moment().startOf('hour').add(32, 'hour'),
     locale: {
       format: 'DD/MM/YYYY'
     }
   });
});
$(document).ready(function(){
  $(document).on("click","#done_travelers",function(){
    var adult = parseInt($("#adult_count").val());
    var child = parseInt($("#child_count").val());
    if (adult=="") {
      adult = 1;
    }
    if (child =="") {
      child = 0;
    }
    var total = adult+child;
    $("#adult_count").val(adult);
    $("#child_count").val(child);
    $("#travelers").val(total);
    $("#trv").val(total+" Person");
  })
})
</script>
