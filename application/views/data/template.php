<?php $this->view('template/header.php')?>
<?php $this->view('template/main_sidebar.php')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                 <?php $this->load->view('data/'.$view_name); ?>
            </div>
        </div>
    </section>
 </div>
<!-- /.content-wrapper -->

<?php $this->view('template/control_sidebar.php')?>
<?php $this->view('template/js.php') ?>
<script type="text/javascript">
</script>
<?php $this->view('template/footer.php')?>