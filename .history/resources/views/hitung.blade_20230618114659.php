
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

