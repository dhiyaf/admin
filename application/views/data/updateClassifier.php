<div class="row" style="margin-bottom:10px; margin-top:-10px;">
<section class="content-header">
      <h1>
        Form Edit Data Classifier
        <small>by Data Analyst</small>
      </h1>
    </section>
</div>

<!-- Main content -->
<section class="content">
    <div class="row" >
<!-- left column -->
        <div class="col-md-7" style="margin-left:-15px;">
<!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data</h3>
                </div>
<!-- /.box-header -->
<!-- form start -->
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputkode" class="col-sm-2 control-label">Kode</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-key"></i>
                                    </div>
                                       <input type="kode" class="form-control" name="kode" placeholder="" value="<?php echo $detail->kode; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-line-chart"></i>
                                    </div>
                                      <input type="nama" class="form-control" name="nama" placeholder="" value="<?php echo $detail->nama; ?>">
                                </div>
                            </div>
                        </div>
                          <!-- /.form group -->
                    </div>
                                <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info" name="updateClassifier" value="updateClassifier" style="margin-left:100px;"> Update </button>
                        <button type="submit" class="btn btn-danger" name="back" value="back">Back</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
          <!-- /.box -->
      </div>
    </div>
</section>

