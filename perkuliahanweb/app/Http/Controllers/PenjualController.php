<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;

class PenjualController extends Controller
{
    public function buat()
    {
        return view("penjual.form-input");
    }

    public function simpan(Request $request)
    {
        $penjual = new Penjual();
        $penjual->nama = $request->get("nama");
        $penjual->keterangan = $request->get("keterangan");
        $penjual->save();

        return redirect(route("tampil_penjual", ['id' => $penjual->id]));
    }

    public function tampil($id)
    {
        $penjual = Penjual::find($id);

        return view("penjual.tampil")->with("penjual", $penjual);
    }

    public function semua()
    {
        $data = Penjual::all();
        return view("penjual.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("penjual.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $penjual = Penjual::find($id);
        $penjual->nama = $request->get("nama");
        $penjual->keterangan = $request->get("keterangan");
        $penjual->save();

        return redirect(route("tampil_penjual", ['id' => $penjual->id]));
    }

    public function hapus($id)
    {
        Penjual::destroy($id);
        return redirect(route('semua_penjual'));
    }
}
