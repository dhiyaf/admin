<div class="row" style="margin-bottom:10px; margin-top:-20px;">
<section class="content-header">
      <h1>
        Data Classifier
        <small>by Data Analyst</small>
      </h1>
    </section>
</div>

<div class="box">
    <div class="box-header">
        </div>     
<!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Uploader</th>
			    	<th>File Model</th>
					<th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($classifier as $item) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item->kode; ?></td>
                    <td><?php echo $item->nama; ?></td>
                    <td>pemilik</td>
                    <td>file</td>
                    <td>
                        <a href="<?php echo base_url('updateClassifier/'.$item->id)?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            <?php $i++; endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Uploader</th>
			    	<th>File Model</th>
					<th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- modal delete -->
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
                <a href="<?php echo base_url('deleteClassifier/'.$item->id);?>" class="btn btn-danger noborder-radius" data-toggle="tooltip" data-placement="top" title="">Delete</a></td>
            </div>
        </div>
<!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>