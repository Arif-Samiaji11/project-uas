<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['kriteria'] }}</th>
                    <th>{{ $widget2['kriteria'] }}</th>
                    <th>{{ $widget3['kriteria'] }}</th>
                    <th>{{ $widget4['kriteria'] }}</th>
                    <th>{{ $widget5['kriteria'] }}</th>
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

                            <td>{{$lokasii->nama }}</td>
                            <td>{{$lokasii->C1 / $C1max['lokasii']}}</td>
                            <td>{{$lokasii->C2 / $C2max['lokasii']}}</td>
                            <td>{{$lokasii->C3 / $C3max['lokasii']}}</td>
                            <td>{{$lokasii->C4 / $C4max['lokasii']}}</td>
                            <td>{{$lokasii->C5 / $C5max['lokasii']}}</td>

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

                @foreach ($data as $lokasii)
                <tbody>
                    <tr>
                        <td>{{$lokasii->nama}}</td>
                            {{-- hasil --}}
                            <td>
                                {{(($lokasii->C1 / $C1max['lokasii'])*$widget1['kriterias'])+
                                (($lokasii->C2 / $C2max['lokasii'])*$widget2['kriterias'])+
                                (($lokasii->C3 / $C3max['lokasii'])*$widget3['kriterias'])+
                                (($lokasii->C4 / $C4max['lokasii'])*$widget4['kriterias'])+
                                (($lokasii->C5 / $C5max['lokasii'])*$widget5['kriterias'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary float-right" href="{{route('normalisasi.create')}}">Save Data</a>
    </div>
</div>
