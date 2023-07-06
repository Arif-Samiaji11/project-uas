
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['kriteriaaa'] }}</th>
                    <th>{{ $widget2['kriteriaaa'] }}</th>
                    <th>{{ $widget3['kriteriaaa'] }}</th>
                    <th>{{ $widget4['kriteriaaa'] }}</th>

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
                @foreach ($data as $kriteriaaa)
                <tbody>
                    <tr>
                    <td>{{$kriteriaaa->lokasialternatif}}</td>


                            <td>{{$kriteriaaa->alamat / $C1max['lokasi']}}</td>
                            <td>{{$kriteriaaa->luas_lahan / $C2max['lokasi']}}</td>
                            <td>{{$kriteriaaa->luas_bangunan / $C3max['lokasi']}}</td>
                            <td>{{$kriteriaaa->daya_listrik / $C4max['lokasi']}}</td>


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
                                {{(($lokasi->alamat / $C1max['lokasi'])*$widget1['kriteriaaa'])+
                                (($lokasi->luas_lahan / $C2max['lokasi'])*$widget2['kriteriaaa'])+
                                (($lokasi->luas_bangunan / $C3max['lokasi'])*$widget3['kriteriaaa'])+
                                (($lokasi->daya_listrik / $C4max['lokasi'])*$widget4['kriteriaaa'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

