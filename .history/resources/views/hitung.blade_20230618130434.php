
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['kriteriaa'] }}</th>
                    <th>{{ $widget2['kriteriaa'] }}</th>
                    <th>{{ $widget3['kriteriaa'] }}</th>
                    <th>{{ $widget4['kriteriaa'] }}</th>

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


                            <td>{{$kriteriaa->alamat / $C1max['kriteria']}}</td>
                            <td>{{$kriteriaa->luas_lahan / $C2max['kriteria']}}</td>
                            <td>{{$kriteriaa->luas_bangunan / $C3max['kriteria']}}</td>
                            <td>{{$kriteriaa->daya_listrik / $C4max['kriteria']}}</td>


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

                @foreach ($data as $kriteria)
                <tbody>
                    <td>{{$kriteria->kode}}</td>
                    {{-- hasil --}}
                    <tr>
                            <td>
                                {{(($kriteria->alamat / $C1max['kriteria'])*$widget1['kriteriaa'])+
                                (($kriteria->luas_lahan / $C2max['kriteria'])*$widget2['kriteriaa'])+
                                (($kriteria->luas_bangunan / $C3max['kriteria'])*$widget3['kriteriaa'])+
                                (($kriteria->daya_listrik / $C4max['kriteria'])*$widget4['kriteriaa'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

