
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


                            <td>{{$kriteriaaa->alamat / $C1max['kriteriaa']}}</td>
                            <td>{{$kriteriaaa->luas_lahan / $C2max['kriteriaa']}}</td>
                            <td>{{$kriteriaaa->luas_bangunan / $C3max['kriteriaa']}}</td>
                            <td>{{$kriteriaaa->daya_listrik / $C4max['kriteriaa']}}</td>


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

                @foreach ($data as $kriteriaa)
                <tbody>
                    <td>{{$kriteriaa->kode}}</td>
                    {{-- hasil --}}
                    <tr>
                            <td>
                                {{(($kriteriaa->alamat / $C1max['kriteriaa'])*$widget1['kriteriaaa'])+
                                (($kriteriaa->luas_lahan / $C2max['kriteriaa'])*$widget2['kriteriaaa'])+
                                (($kriteriaa->luas_bangunan / $C3max['kriteriaa'])*$widget3['kriteriaaa'])+
                                (($kriteriaa->daya_listrik / $C4max['kriteriaa'])*$widget4['kriteriaaa'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

