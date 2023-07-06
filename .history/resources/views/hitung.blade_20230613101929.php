<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['lokasii'] }}</th>
                    <th>{{ $widget2['lokasii'] }}</th>
                    <th>{{ $widget3['lokasii'] }}</th>
                    <th>{{ $widget4['lokasii'] }}</th>
                    <th>{{ $widget5['lokasii'] }}</th>
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
                @foreach ($data as $kriteria)
                <tbody>
                    <tr>
                    <td>{{$kriteria->id}}</td>


                            <td>{{$kriteria->alamat / $C1max['kriteria']}}</td>
                            <td>{{$kriteria->luas_lahan / $C2max['kriteria']}}</td>
                            <td>{{$kriteria->luas_bangunan / $C3max['kriteria']}}</td>
                            <td>{{$kriteria->daya_listrik / $C4max['kriteria']}}</td>


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
        <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
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

                @foreach ($data as $kriteria)
                <tbody>
                    <td>{{$kriteria->id</td>
                    <tr>
                            {{-- hasil --}}
                            <td>
                                {{(($kriteria->alamat / $C1max['kriteria'])*$widget1['kriteria'])+
                                (($kriteria->luas_lahan / $C2max['kriteria'])*$widget2['kriteria'])+
                                (($kriteria->luas_bangunan / $C3max['kriteria'])*$widget3['kriteria'])+
                                (($kriteria->daya_listrik / $C4max['kriteria'])*$widget4['kriteria'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
