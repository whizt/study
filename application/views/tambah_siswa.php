    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Siswa
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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

        <form role="form" method="post" action="<?=site_url('siswa/do_add')?>" >
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter">
                </div>
				
                <div class="form-group">
                  <label for="nis">nis</label>
                  <input type="numeric" class="form-control" id="nis" name="nis" placeholder="Enter">
                </div>
                <div class="form-group">
                  <label for="tempat_lahir">tempat lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter">
                </div>
				
                <div class="form-group">
                  <label for="tanggal_lahir">tanggal lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Enter">
                </div>
				
                <div class="form-group">
                  <label for="alamat">alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter">
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">jenis kelamin</label>
				  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Enter">
					<option value="0"> perempuan </option>
					<option value="1"> Laki - laki </option>
				  </select>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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