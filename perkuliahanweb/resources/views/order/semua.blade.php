@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $order)
        Nama : {{ $order->nama }} <br>
        Keterangan: {{ $order->keterangan }} <br>
        <a href="{{ route('ubah_order', ['id' => $order->id]) }}">Ubah</a>
        <a href="{{ route('tampil_order', ['id' => $order->id]) }}">Tampil</a>

        <form action="{{ route('hapus_order', ['id' => $order->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection