<div class="row" style="margin-bottom:10px; margin-top:-10px;">
<section class="content-header">
      <h1>
        Form Add Data Company
        <small>by Admin</small>
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
                    <h3 class="box-title">Add Data</h3>
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
                                     <input type="text" class="form-control" placeholder="Masukan Kode Perusahaan" name="kode">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-suitcase"></i>
                                    </div>
                                        <input type="text" class="form-control" placeholder="Masukan Nama Perusahaan" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subsektor" class="col-sm-2 control-label">Subsektor</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-gavel"></i>
                                    </div>
                                    <div class="input-group" style="width: 100%;">
                                        <select class="form-control select2" name="id_subsektor">
                                        <?php foreach ($sub as $item): ?>
                                        <option value="<?php echo $item->id; ?>"><?php echo $item->nama; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                     </div>
                                     </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-map-signs"></i>
                                    </div>
                                     <input type="text" class="form-control" placeholder="Masukan Alamat Perusahaan" name="alamat">                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="col-sm-2 control-label">Website</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa  fa-chain-broken"></i>
                                    </div>
                                     <input type="text" class="form-control" placeholder="Masukan Website Perusahaan" name="website">                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <div class="input-group form">
                                    <div class="input-group-addon">
                                         <i class="fa fa-laptop"></i>
                                    </div>
                                    <textarea type="deskripsi" class="form-control" name="deskripsi" placeholder="" rows="5"></textarea>                            </div>
                            </div>
                        </div>
                          <!-- /.form group -->
                    </div>
                                <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info" name="createCompany" value="createCompany" style="margin-left:100px;"> Submit </button>
                        <button type="submit" class="btn btn-warning" name="cancel" value="cancel">Cancel</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
          <!-- /.box -->
      </div>
    </div>
</section>

