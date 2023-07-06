
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['krit'] }}</th>
                    <th>{{ $widget2['krit'] }}</th>
                    <th>{{ $widget3['krit'] }}</th>
                    <th>{{ $widget4['krit'] }}</th>

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
                @foreach ($data as $krit)
                <tbody>
                    <tr>
                    <td>{{$krit->lokasialternatif}}</td>


                            <td>{{$krit->alamat / $C1max['kriteria']}}</td>
                            <td>{{$krit->luas_lahan / $C2max['kriteria']}}</td>
                            <td>{{$krit->luas_bangunan / $C3max['kriteria']}}</td>
                            <td>{{$krit->daya_listrik / $C4max['kriteria']}}</td>


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
                                {{(($kriteria->alamat / $C1max['kriteria'])*$widget1['krit'])+
                                (($kriteria->luas_lahan / $C2max['kriteria'])*$widget2['krit'])+
                                (($kriteria->luas_bangunan / $C3max['kriteria'])*$widget3['krit'])+
                                (($kriteria->daya_listrik / $C4max['kriteria'])*$widget4['krit'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

