@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $penjual)
        Nama : {{ $penjual->nama }} <br>
        Keterangan: {{ $penjual->keterangan }} <br>
        <a href="{{ route('ubah_penjual', ['id' => $penjual->id]) }}">Ubah</a>
        <a href="{{ route('tampil_penjual', ['id' => $penjual->id]) }}">Tampil</a>

        <form action="{{ route('hapus_penjual', ['id' => $penjual->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection