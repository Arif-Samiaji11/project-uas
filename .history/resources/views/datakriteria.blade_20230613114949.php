@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA KRITERIA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DATA KRITERIA</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA LOKASI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('kriteria/add') }}" class="btn-sm btn-success">Tambah Data Lokasi +</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>ALAMAT</th>
                    <th>LUAS LAHAN</th>
                    <th>LUAS BANGUNAN</th>
                    <th>DAYA LISTRIK</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $kriteria)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $kriteria->alamat }}</td>
                    <td>{{ $kriteria->luas_lahan }}</td>
                    <td>{{ $kriteria->luas_bangunan }}</td>
                    <td>{{ $kriteria->daya_listrik }}</td>
                    <td>
                      <a href="{{ url('kriteria/edit/'.$kriteria->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('kriteria/delete/'.$kriteria->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
