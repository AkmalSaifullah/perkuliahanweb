<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Costomer;

class OrderController extends Controller
{
    public function buat()
    {
        return view("order.form-input");
    }

    public function simpan(Request $request)
    {
        $order = new Order();
        $order->nama = $request->get("nama");
        $order->keterangan = $request->get("keterangan");
        $order->save();

        return redirect(route("tampil_order", ['id' => $order->id]));
    }

    public function tampil($id)
    {
        $order = Order::find($id);

        return view("order.tampil")->with("order", $order);
    }

    public function semua()
    {
        $data = Order::all();
        return view("order.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("order.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $order = order::find($id);
        $order->nama = $request->get("nama");
        $order->keterangan = $request->get("keterangan");
        $order->save();

        return redirect(route("tampil_order", ['id' => $order->id]));
    }

    public function hapus($id)
    {
        Order::destroy($id);
        return redirect(route('semua_order'));
    }
}