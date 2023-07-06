@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Lokasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Lokasi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Lokasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/lokasi/update/'.$lokasi->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">KODE</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode" placeholder="" value="{{ $lokasi->alamat}}">
                    </div>
                  </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{ $lokasi->alamat}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="luas_lahan" class="col-sm-2 col-form-label">LUAS LAHAN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="luas_lahan" placeholder="luas lahan" value="{{ $lokasi->luas_lahan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="luas_bangunan" class="col-sm-2 col-form-label">LUAS BANGUNAN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="luas_bangunan" placeholder="luas bangunan" value="{{ $lokasi->luas_bangunan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="daya_listrik" class="col-sm-2 col-form-label">DAYA LISTRIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="daya_listrik" placeholder="daya listrik" value="{{ $lokasi->daya_listrik}}">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="submit" class="btn btn-default float-right">Clear</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
