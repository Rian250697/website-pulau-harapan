<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_handphone' => 'required',
            'jumlah_orang' => 'required',
            'tgl_pemesanan' => 'required',
            'paket_wisata' => 'required',
        ]);

        Booking::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'jumlah_orang' => $request->jumlah_orang,
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'paket_wisata' => $request->paket_wisata,
            'status' => "Not Accepted"
        ]);

        return redirect()->route('booking.create')->with('status', 'Terima kasih sudah mendaftar, Admin akan mengkonfirmasi pemesanan Anda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $statuses = ["Accepted", "Not Accepted"];
        $paket_wisata = ["2 Hari 1 Malam", "3 Hari 2 Malam"];
        return view('booking.edit', compact('booking', 'statuses', 'paket_wisata'));
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
            'nama' => 'required',
            'email' => 'required',
            'no_handphone' => 'required',
            'jumlah_orang' => 'required',
            'tgl_pemesanan' => 'required',
            'paket_wisata' => 'required',
            'status' => 'required',
        ]);

        Booking::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'jumlah_orang' => $request->jumlah_orang,
            'tgl_pemesanan' => $request->tgl_pemesanan,
            'paket_wisata' => $request->paket_wisata,
            'status' => $request->status,
        ]);

        return redirect()->route('booking.index')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);

        return redirect()->route('booking.index')->with('status', 'Data berhasil dihapus');
    }
}
