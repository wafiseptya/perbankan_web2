<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Nasabah;
use App\Rekening;
use Carbon\Carbon;

class CSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Nasabah::latest('created_at')->with('rekening')->get();
        
        return view('admin.cs.cs-index', compact('items'));
    }

    public function newrek($id)
    {
        $norek = 63100101000;
        $data = new Rekening();
        $data->saldo = 0;
        $data->no_rekening = $norek + $id;
        $data->nasabah_id = $id;
        $data->pin = bcrypt('111111');
        $data->created_at = Carbon::now();
        $data->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cs.cs-bukarek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Nasabah();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_identitas = $request->no_identitas;
        $data->birth_place = $request->birth_place;
        $data->birth_date = $request->birth_date;
        $data->post_code = $request->post_code;
        $data->phone = $request->phone;
        $data->ibu_kandung = $request->ibu_kandung;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->pendapatan = $request->pendapatan;
        $data->pengeluaran = $request->pengeluaran;
        $data->created_at = Carbon::now();
        $data->save();
        $id = $data->id;
        $this->newrek($id);
        return redirect()->route('cs.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nasabah::where('id', $id)->with('rekening')->first();
        return view('admin.cs.cs-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Nasabah::where('id', $id)->first();
        return view('admin.cs.cs-edit', compact('data'));
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
        $data = Nasabah::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_identitas = $request->no_identitas;
        $data->birth_place = $request->birth_place;
        $data->birth_date = $request->birth_date;
        $data->post_code = $request->post_code;
        $data->phone = $request->phone;
        $data->ibu_kandung = $request->ibu_kandung;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->pendapatan = $request->pendapatan;
        $data->pengeluaran = $request->pengeluaran;
        $data->updated_at = Carbon::now();
        $data->save();
        $id = $data->id;
        return redirect()->route('cs.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nasabah::destroy($id);

        return back()->with('alert','Nasabah Berhasil Dihapus!'); 
    }
}
