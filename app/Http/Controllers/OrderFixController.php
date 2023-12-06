<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class OrderFixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Pesanan.index', [
            'title' => "Orderan Masuk",
            'pesanan' => Pesanan::latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = Pesanan::with('pesanan_detail.barang')->find($id);
        return view('admin.Pesanan.show', [
            'title' => 'Show Pesanan',
            'pesanan' => $pesanan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Pesanan.edit', [
            'title' => "edit status orderan",
            'orderan' => pesanan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'status' => 'required',
        ]);

        pesanan::where('id', $id)->update($validateData);
        return redirect('pesanan')->with('success', 'Status Pesanan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus($id, $status)
    {
        $pesanan = Pesanan::find($id);

        if ($pesanan) {
            $pesanan->status = $status;
            $pesanan->save();

            return redirect()->back()->with('success', 'Status pesanan berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan.');
        }
    }
}
