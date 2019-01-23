<?php

namespace App\Http\Controllers;

use App\Order;
use Auth;
use Illuminate\Http\Request;

// Controller untuk Order

class OrderController extends Controller
{
    //Fungsi Index/ Menampilkan Semua Data
    public function index() 
    {
        //syntax untuk menarik semua data dari database order
        return response()->json(Order::with(['product'])->get(),200);
    }

    //Fungsi untuk Mengirim Order dan Mengubah Status Orderan
    public function deliverOrder(Order $order)
    {
        //syntax untuk mengirim orderan/ items
        $order->is_delivered = true;
        $status = $order->save();

        return response()->json([
            'status'    => $status,
            'data'      => $order,
            'message'   => $status ? 'Order Delivered!' : 'Error Delivering Order'
        ]);
    }

    //Fungsi untuk Menambahkan Orderan
    public function store(Request $request)
    {
        //Fungsi untuk menambah/ Create sebuah orderan
        $order = Order::create([
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
            'quantity' => $request->quantity,
            'address' => $request->address
        ]);

        return response()->json([
            'status' => (bool) $order,
            'data'   => $order,
            'message' => $order ? 'Order Created!' : 'Error Creating Order'
        ]);
    }

    //Fungsi untuk menampilkan data yang dipilih
    public function show(Order $order)
    {
        return response()->json($order,200);
    }

    //Fungsi untuk melakukan Edit/ Update
    public function update(Request $request, Order $order)
    {
        $status = $order->update(
            $request->only(['quantity'])
        );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Order Updated!' : 'Error Updating Order'
        ]);
    }

    //Fungsi Untuk Menghapus Item
    public function destroy(Order $order)
    {
        $status = $order->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Order Deleted!' : 'Error Deleting Order'
        ]);
    }
}