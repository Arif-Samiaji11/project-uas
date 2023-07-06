@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Kriteria</li>
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
                <h3 class="card-title">Edit Data Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/kriteriaa/update/'.$kriteriaa->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="lokasialternatif" class="col-sm-2 col-form-label">LOKASI ALTERNATIF</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasialternatif" placeholder="lokasi alternatif" value="{{ $kriteria->lokasialternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria" class="col-sm-2 col-form-label">KRITERIA</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria" placeholder="luas lahan" value="{{ $kriteria->kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bobot" class="col-sm-2 col-form-label">BOBOT</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bobot" placeholder="luas bangunan" value="{{ $kriteria->bobot}}">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">JENIS</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="JENIS" value="{{ $kriteria->jenis}}">
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
