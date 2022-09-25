
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Good Luck</b>
    </div>
    <strong>Copyright &copy; 2022 <a href="">Mohamed Ashraf</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>

<!-- ./wrapper -->




<!-- jQuery -->
<script src="<?=URL?>Dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=URL?>Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=URL?>Dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=URL?>Dashboard/dist/js/demo.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=URL?>Dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- ChartJS -->
<script src="<?=URL?>Dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=URL?>Dashboard/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=URL?>Dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=URL?>Dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=URL?>Dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=URL?>Dashboard/plugins/moment/moment.min.js"></script>
<script src="<?=URL?>Dashboard/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=URL?>Dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=URL?>Dashboard/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=URL?>Dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })

  $(function () {
    // Summernote
    $('#summer').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
