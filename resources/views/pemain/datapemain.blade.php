@extends('pemain.show')

@section('content')

    <table class="table table-bordered border-black">
        <thead class="table-primary border-black">
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain_data as $index => $pemain)
                <tr>
                    <td>{{$pemain->id}}</td>
                    <td>{{$pemain->nama_pemain}}</td>
                    <td>{{$pemain->no_punggung}}</td>
                    <td>{{$pemain->posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
