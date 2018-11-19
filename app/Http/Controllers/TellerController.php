<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Transaksi;
use App\Rekening;
use Carbon\Carbon;

class TellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaksi::latest('created_at')->get();

        return view('admin.teller.teller-index', compact('items'));
    }

    public function tarik()
    {
        return view('admin.teller.teller-tarik');
    }
    
    public function setor()
    {
        return view('admin.teller.teller-setor');
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
    public function store(Request $request, $id)
    {
        $data = new Transaksi();
        $data->nama = $request->nama;
        $data->nominal = $request->nominal;
        $data->jenis = $request->jenis;
        $data->rekening_id = $id;
        $data->created_at = Carbon::now();
        $data->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $norek = $request->no_rekening;
        $data = Rekening::where('no_rekening',$norek)->first();
        $id_rek = $data->id;
        
        if ($request->jenis == 'tarikan')
        {
            if (Hash::check($request->pin, $data->pin)) {
                $data->saldo = $data->saldo - $request->nominal;
                $data->save();
                $this->store($request, $id_rek);
                return redirect()->route('teller.index')->with('alert','Transaksi Berhasil Dilakukan!');
            }
            else {
                return back()->with('alert', 'PIN Salah!');
            }
        }else {
            $data->saldo = $data->saldo + $request->nominal;
            $data->save();
            $this->store($request, $id_rek);
            return redirect()->route('teller.index')->with('alert','Transaksi Berhasil Dilakukan!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::destroy($id);

        return back()->with('alert','Data Berhasil Dihapus!'); 
    }
}
