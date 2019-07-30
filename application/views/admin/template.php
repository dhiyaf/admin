<?php $this->view('template/header.php')?>
<?php $this->view('template/main_sidebar.php')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Main content -->
        <section class="content">
            <div class="row">

                 <?php $this->load->view('admin/'.$view_name); ?>

            </div>
        </section>
    </div>
</div>

<!-- /.content-wrapper -->

<?php $this->view('template/control_sidebar.php')?>
<?php $this->view('template/js.php') ?>
<script type="text/javascript">
</script>
<?php $this->view('template/footer.php')?>