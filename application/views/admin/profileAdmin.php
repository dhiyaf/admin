<!-- Profile Image -->
<div class="col-md-3">
<div class="box box-primary"s>
  <div class="box-body box-profile">
    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('./assets/dist/img/user2-160x160.jpg'); ?>" alt="User profile picture">
           <h3 class="profile-username text-center"><?php echo "Administrator"; ?></h3>
           <p class="text-muted text-center">Super User</p>
  </div>
  <!-- /.box-body -->
</div>
 <!-- /.box -->
</div>
 <!-- tab panel -->
<div class="col-md-9">
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#editMahasiswa" data-toggle="tab">Edit Akun</a></li>
      </ul>
    <div class="tab-content">
            <!-- /.tab-pane -->
      <div class="active tab-pane" id="editMahasiswa">
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Masukan Nama" name="nama" value="">
              </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Masukan username mahasiswa" name="username" value="">
              </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" placeholder="Masukan password mahasiswa" name="password" value="">
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="updateAdmin" value="updateAdmin">Simpan Data</button>
              <button type="submit" class="btn btn-info" name="mahasiswaUpdatePassword" value="mahasiswaUpdatePassword">Update password</button>
            </div>
          </div>
        </form>
      </div>
           <!-- /.tab-pane -->
           </div>
         <!-- /.tab-content -->
       </div>
       <!-- /.nav-tabs-custom -->

