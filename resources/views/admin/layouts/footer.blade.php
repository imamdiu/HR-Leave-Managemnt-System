 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- jQuery 3 -->
<script src="{{asset('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('public/admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('public/admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('public/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('public/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('public/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/admin/dist/js/demo.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('public/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>


<!-- DataTables -->
<script src="{{asset('public/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

   //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    $('#todaySdate').datepicker({
        format: "dd-mm-yyyy",
        //daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        $('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      $('#date').datepicker({
        format: "dd-mm-yyyy",
        //daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        //pair: $('#joindate'),
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        $('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      $('#last_leave_date').datepicker({
        format: "dd-mm-yyyy",
        //daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        //pair: $('#joindate'),
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        $('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      
      $('#fromdate').datepicker({
        format: "dd-mm-yyyy",
        daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        //pair: $('#joindate'),
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        $('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      
      $('#todate').datepicker({
        format: "dd-mm-yyyy",
        daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        
        autoclose: true,
        //minDate: '0',
        //maxDate: '+1Y+6M'
      })
      .on('change', function(ev) {
        
        var fromdate = $("#fromdate").data('datepicker').viewDate;
        var todate = $("#todate").data('datepicker').viewDate;
        todate.setDate(todate.getDate() + 1);
        
        // sort the weekends out
        var weekend_count = 0;
        for (i = fromdate.valueOf(); i <= todate.valueOf(); i+= 86400000) {
          var temp = new Date(i);
          if (temp.getDay() == 5) {
            weekend_count++;
          }
        }
          //var diff = ((endDate-startDate)/86400000) - weekend_count;;
          //$('#days').val(diff);
          //days=days+1;
          
        var diff = ((todate - fromdate) / 86400000) - weekend_count;
        $('#days').val(diff);
        //days=days+1;
        
      });
      
      $('#joindate').datepicker({
        format: "dd-mm-yyyy",
        daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        //$('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      
      $('#dateOfbirth').datepicker({
        format: "dd-mm-yyyy",
        //daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        //$('#todate').datepicker('setStartDate', $("#fromdate").val());
      });
      
      $('#joining_date').datepicker({
        format: "dd-mm-yyyy",
        //daysOfWeekDisabled: "5", //Disaable Weeken...............
        todayHighlight: 'TRUE',
        autoclose: true,
        //minDate: 0,
        //maxDate: '+1Y+6M'
        }).on('change', function(ev) {
        
        //$('#todate').datepicker('setStartDate', $("#fromdate").val());
      });

</script>