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
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tbody>
                    <tr>
                        @if ($item->kriteria->atribut = "benefit" != "benefit" )

                            <td>{{$item->nama }}</td>
                            <td>{{$C1min['produks'] }}</td>
                            <td>{{$C2min['produks'] }}</td>
                            <td>{{$C3min['produks'] }}</td>
                            <td>{{$C4min['produks'] }}</td>
                            <td>{{$C5min['produks'] }}</td>
                        @else
                            <td>{{$item->nama }}</td>
                            <td>{{$item->C1 / $C1max['produks']}}</td>
                            <td>{{$item->C2 / $C2max['produks']}}</td>
                            <td>{{$item->C3 / $C3max['produks']}}</td>
                            <td>{{$item->C4 / $C4max['produks']}}</td>
                            <td>{{$item->C5 / $C5max['produks']}}</td>
                        @endif
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

                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <td>{{$item->nama}}</td>
                            {{-- has --}}
                            <td>
                                {{(($item->C1 / $C1max['produks'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['produks'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['produks'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['produks'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['produks'])*$widget5['kriterias'])}}
                            </td>


                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary float-right" href="{{route('normalisasi.create')}}">Save Data</a>
    </div>
</div>
