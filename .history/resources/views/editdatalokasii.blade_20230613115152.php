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
              <form method="POST" action="{{ url('/lokasii/update/'.$lokasii->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="lokasialternatif" class="col-sm-2 col-form-label">Lokasi Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasialternatif" placeholder="lokasi alternatif" value="{{ $lokasii->lokasialternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria" placeholder="kriteria" value="{{ $lokasii->kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bobot" placeholder="bobot" value="{{ $lokasii->bobot}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="jenis" value="{{ $lokasii->jenis}}">
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
