@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['lokasi'] }}</th>
                    <th>{{ $widget2['lokasi'] }}</th>
                    <th>{{ $widget3['lokasi'] }}</th>
                    <th>{{ $widget4['lokasi'] }}</th>

                </tr>
            </thead>

        </table>

    </div>
</div>



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>

                    <th>ALAMAT</th>
                    <th>LUAS LAHAN</th>
                    <th>LUAS BANGUNAN</th>
                    <th>DAYA LISTRIK</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $kriteriaa)
                <tbody>
                    <tr>
                    <td>{{$kriteriaa->lokasialternatif}}</td>


                            <td>{{$kriteriaa->alamat / $C1max['lokasi']}}</td>
                            <td>{{$kriteriaa->luas_lahan / $C2max['lokasi']}}</td>
                            <td>{{$kriteriaa->luas_bangunan / $C3max['lokasi']}}</td>
                            <td>{{$kriteriaa->daya_listrik / $C4max['lokasi']}}</td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Hunian</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>hasil</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($data as $lokasi)
                <tbody>
                    <td>{{$lokasi->kode}}</td>
                    {{-- hasil --}}
                    <tr>
                            <td>
                                {{(($lokasi->alamat / $C1max['lokasi'])*$widget1['kriteriaa'])+
                                (($lokasi->luas_lahan / $C2max['lokasi'])*$widget2['kriteriaa'])+
                                (($lokasi->luas_bangunan / $C3max['lokasi'])*$widget3['kriteriaa'])+
                                (($lokasi->daya_listrik / $C4max['lokasi'])*$widget4['kriteriaa'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

