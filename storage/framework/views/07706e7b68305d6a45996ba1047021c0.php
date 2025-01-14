<footer class="main-footer text-sm">
  <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a target="_blank" href="https://great.sch.id/">Great Crystal School & Course Center</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 1.0
   </div>
 </footer>


 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="<?php echo e(asset('template')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('template')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
 $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('template')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('template')); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('template')); ?>/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('template')); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('template')); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('template')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('template')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('template')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('template')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template')); ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('template')); ?>/dist/js/pages/dashboard.js"></script>

<!-- Select2 -->
<script src="<?php echo e(asset('template')); ?>/plugins/select2/js/select2.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e(asset('template')); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

<script src="<?php echo e(asset('template')); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e(asset('template')); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo e(asset('template')); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo e(asset('template')); ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo e(asset('template')); ?>/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('template')); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template')); ?>/dist/js/demo.js"></script>

<!-- FullCalendar JS -->
<script src="<?php echo e(asset('template/plugins/fullcalendar/main.min.js')); ?>"></script>


<!-- SweetAlert -->
<script src="<?php echo e(asset('template/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>

<script>
  $('.js-select2').select2({
    closeOnSelect : false,
    placeholder : "Click to select an option",
    theme: 'bootstrap4',
    allowHtml: true,
    allowClear: true,
    tags: true,
    searchInputPlaceholder: 'Search options'
  });

  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('#datemaskMonth').inputmask('mm/yyyy', { 'placeholder': 'mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationdateStudentDateExp').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationdateStudentDateReg').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationFatherBirthDate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationMotherBirthDate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationMotherBirthDate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationMotherBirthDate').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBrotherOrSisterBirthDate1').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBrotherOrSisterBirthDate2').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBrotherOrSisterBirthDate3').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBrotherOrSisterBirthDate4').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBrotherOrSisterBirthDate5').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBillFrom').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationBillTo').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('#reservationReportBillFrom').datetimepicker({
        format: 'MM/YYYY'
    });
    $('#reservationReportBillTo').datetimepicker({
        format: 'MM/YYYY'
    });
     
     //Date and time picker
     $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
 
     //Date range picker
     $('#reservation').daterangepicker()
     //Date range picker with time picker
     $('#reservationtime').daterangepicker({
       timePicker: true,
       timePickerIncrement: 30,
       locale: {
         format: 'MM/DD/YYYY hh:mm A'
       }
     })
     //Date range as a button
     $('#daterange-btn').daterangepicker(
       {
         ranges   : {
           'Today'       : [moment(), moment()],
           'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month'  : [moment().startOf('month'), moment().endOf('month')],
           'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
         },
         startDate: moment().subtract(29, 'days'),
         endDate  : moment()
       },
       function (start, end) {
         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
       }
     )
 
     //Timepicker
     $('#timepicker').datetimepicker({
       format: 'LT'
     })
 
     //Bootstrap Duallistbox
     $('.duallistbox').bootstrapDualListbox()
 
     //Colorpicker
     $('.my-colorpicker1').colorpicker()
     //color picker with addon
     $('.my-colorpicker2').colorpicker()
 
     $('.my-colorpicker2').on('colorpickerChange', function(event) {
       $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
     })
 
     $("input[data-bootstrap-switch]").each(function(){
       $(this).bootstrapSwitch('state', $(this).prop('checked'));
     })
 
   })
 
 </script>

<link rel="stylesheet" href="<?php echo e(asset('template')); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<script src="<?php echo e(asset('template')); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo e(asset('js/logout.js')); ?>" defer></script>
<?php /**PATH C:\xampp\htdocs\portalsiamik\resources\views/layouts/footer.blade.php ENDPATH**/ ?>