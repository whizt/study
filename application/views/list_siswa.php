     <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
	
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">trial</h3>
		  <a class="btn btn-primary" href="<?=site_url('siswa/tambah')?>" >Tambah </a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>alamat</th>
                  <th>jenis kelamin</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($data_siswa as $key => $siswa ){?>
                <tr>
                  <td><?=$siswa->nis;?></td>
                  <td><?=$siswa->nama;?></td>
                  <td><?=$siswa->tempat_lahir;?>, <?=$siswa->tanggal_lahir;?></td>
                  <td><?=$siswa->alamat;?></td>
                  <td><?=gender($siswa->jenis_kelamin);?></td>
                  <td>
					<a class="btn btn-danger" href="<?=site_url('siswa/do_delete/').$siswa->id?>" >Delete </a>
					<a class="btn btn-info" href="<?=site_url('siswa/view/').$siswa->id?>" >update </a>
				  </td>
                </tr>
				<?php }?>
                </tfoot>
              </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
	<!-- DataTables -->
<script src="<?=base_url()?>/assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>