<div class="row" style="margin-bottom:10px; margin-top:-20px;">
<section class="content-header">
      <h1>
        Data Company
        <small>by IDX</small>
      </h1>
    </section>
</div>
<div class="box">
    <div class="box-header">
    <a href="<?php echo base_url('createCompany'); ?>"><button type="button" class="btn btn-block btn-primary" style="width:90px; margin-left:8px;"><i class="fa fa-plus"></i> Add Data </button></a>     
<!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
					<th>Kode</th>
					<th>Nama</th>
			    	<th>Subsektor</th>
					<th>Website</th>
					<th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($company as $item) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item->kode; ?></td>
                    <td><?php echo $item->nama; ?></td>
                    <td><?php echo $item->subsektor; ?></td>
                    <td><?php echo $item->website; ?></td>
                    <td>
                        <a href="<?php echo base_url('updateCompany/'.$item->id)?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default"<?php echo $item->id;?>><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            <?php $i++; endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
					<th>Kode</th>
					<th>Nama</th>
			    	<th>Subsektor</th>
					<th>Website</th>
					<th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- modal delete -->
<?php foreach ($company as $item):?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Data</h4>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default noborder-radius" data-dismiss="modal">Close</button>
                <a href="<?php echo base_url('deleteCompany/'.$item->id);?>" class="btn btn-danger noborder-radius" data-toggle="tooltip" data-placement="top" title="">Delete</a></td>
            </div>
        </div>
<!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>
<?php endforeach;?>