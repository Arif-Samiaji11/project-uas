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
                @foreach ($data as $lokasii)
                <tbody>
                    <tr>
                    <td>{{$Kriteria->kode}}</td>


                            <td>{{$lokasii->alamat / $C1max['kriteria']}}</td>
                            <td>{{$lokasii->luas_lahan / $C2max['kriteria']}}</td>
                            <td>{{$lokasii->luas_bangunan / $C3max['kriteria']}}</td>
                            <td>{{$lokasii->daya_listrik / $C4max['kriteria']}}</td>


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
                    <td>{{$Kriteria->kode}}</td>
                    {{-- hasil --}}
                    <tr>
                            <td>
                                {{(($Kriteria->alamat / $C1max['kriteria'])*$widget1['lokasii'])+
                                (($Kriteria->luas_lahan / $C2max['kriteria'])*$widget2['lokasii'])+
                                (($Kriteria->luas_bangunan / $C3max['kriteria'])*$widget3['lokasii'])+
                                (($Kriteria->daya_listrik / $C4max['kriteria'])*$widget4['lokasii'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
