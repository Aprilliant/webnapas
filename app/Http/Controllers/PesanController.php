<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\PesananDetail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view('pesan.index', compact('barang'));
    }

    public function pesan(Request $request, $id)
    {
        $barang = Barang::where('id', $id)->first();
        if ($request->jumlah_pesan > $barang->stok) {
            // return redirect('/')->with('gagal', 'Profile updated!');
            return redirect('pesan/' . $id)->with('gagal', 'Jumlah yang Anda masukkan melebihi stok yang tersedia');
        }
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($cek_pesanan)) {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = Carbon::now();
            $pesanan->jumlah_harga = 0;
            $pesanan->status = 0;
            $pesanan->save();
        }


        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();

        if (empty($cek_pesanan_detail)) {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->barang_id = $barang->id;
            $pesanan_detail->pesanan_id = $pesanan_baru->id;
            $pesanan_detail->jumlah = $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $barang->harga * $request->jumlah_pesan;
            $pesanan_detail->save();
        } else {
            $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah + $request->jumlah_pesan;

            $pesan_detail_baru = $barang->harga * $request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga + $pesan_detail_baru;
            $pesanan_detail->update();
        }
        $pesan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesan->jumlah_harga = $pesan->jumlah_harga + $barang->harga * $request->jumlah_pesan;
        $pesan->update();



        return redirect('obat-obatan')->with('sukses', 'Berhasil Menambahkan Ke keranjang');
    }

    public function checkout()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_detail = [];
        if (!empty($pesanan)) {
            $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->get();
        }
        return view('pesan.checkout', compact('pesanan', 'pesanan_detail'));
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();
        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga - $pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();

        return redirect('checkout');
    }

    public function konfirmasi()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_detail as $psn) {
            $barang = Barang::where('id', $psn->barang_id)->first();
            $barang->stok = $barang->stok - $psn->jumlah;
            $barang->update();
        }

        return redirect('checkout');
    }

    public function Pembayaran(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    
        $order = Pesanan::create([
            'user_id' => Auth::user()->id,
            'tanggal' => now(),
            'jumlah_harga' => $request->total,
            'status' => 'bayar'
        ]);
    
        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->jumlah_harga,
            ),
            'customer_details' => array(
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ),
        );
    
        $snapToken = \Midtrans\Snap::getSnapToken($params);
    
        // Tambahkan kode berikut setelah pembuatan pesanan baru
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();
    
        $pesanan_detail = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_detail as $psn) {
            $barang = Barang::where('id', $psn->barang_id)->first();
            $barang->stok = $barang->stok - $psn->jumlah;
            $barang->update();
        }
    
        return response()->json(['snap_token' => $snapToken, 'order' => $order]);
    }
    
}
