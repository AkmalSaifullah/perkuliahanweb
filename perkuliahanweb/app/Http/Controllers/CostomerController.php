<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costomer;

class CostomerController extends Controller
{
    public function buat()
    {
        return view("costomer.form-input");
    }

    public function simpan(Request $request)
    {
        $costomer = new Costomer();
        $costomer->nama = $request->get("nama");
        $costomer->keterangan = $request->get("keterangan");
        $costomer->save();

        return redirect(route("tampil_Costomer", ['id' => $costomer->id]));
    }

    public function tampil($id)
    {
        $costomer = Costomer::find($id);

        return view("costomer.tampil")->with("costomer", $costomer);
    }

    public function semua()
    {
        $data = Costomer::all();
        return view("costomer.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("costomer.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $costomer = costomer::find($id);
        $costomer->nama = $request->get("nama");
        $costomer->keterangan = $request->get("keterangan");
        $costomer->save();

        return redirect(route("tampil_costomer", ['id' => $costomer->id]));
    }

    public function hapus($id)
    {
        costomer::destroy($id);
        return redirect(route('semua_costomer'));
    }
}