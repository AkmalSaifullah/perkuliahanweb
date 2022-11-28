@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $costomer)
        Nama : {{ $costomer->nama }} <br>
        Keterangan: {{ $costomer->keterangan }} <br>
        <a href="{{ route('ubah_costomer', ['id' => $costomer->id]) }}">Ubah</a>
        <a href="{{ route('tampil_costomer', ['id' => $costomer->id]) }}">Tampil</a>

        <form action="{{ route('hapus_costomer', ['id' => $costomer->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection