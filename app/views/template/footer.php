<!-- Essential javascripts for application to work-->
<script src="<?php echo base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="<?php echo base_url('assets/'); ?>js/plugins/pace.min.js"></script>

<!-- Data table plugin-->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script> -->

<script src="<?php echo base_url('assets/datatable/datatables.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/select2.min.js"></script>
<script src="<?php echo base_url('assets/sweetalert/sweetalert2.all.min.js'); ?>"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<?php echo require_once('js.php'); ?>
</body>

</html>