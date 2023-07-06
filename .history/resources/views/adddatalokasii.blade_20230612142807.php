@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add KRITERIA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add KRITERIA</li>
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
                <h3 class="card-title">Add KRITERIA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/kriteria/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="lokasialternatif" class="col-sm-2 col-form-label">KRITERIA Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasialternatif" placeholder="lokasi alternatif">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria" placeholder="kriteria">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bobot" placeholder="bobot">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="jenis">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan">
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
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
