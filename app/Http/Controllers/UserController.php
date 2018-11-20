<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.users.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, User::rules());
        
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $file = Input::file('avatar');
        $ext= $file->getClientOriginalExtension();
        $avatarFileName = 'avatar-'.time().'.'.$ext;
        request()->file('avatar')->move(public_path('avatar'), $avatarFileName);
        $filePath = '/avatar/'.$avatarFileName;
        $data->avatar = $filePath;
        $data->role = $request->role;
        $data->created_at = Carbon::now();
        $data->save();

        return redirect()->route('admin.index')->with('alert','User Berhasil Dibuat!');
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
        $item = User::findOrFail($id);

        return view('admin.users.edit', compact('item'));
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
        $this->validate($request, User::rules(true, $id));

        $data = User::findOrFail($id);

        $data->name = $request->name;
        $data->username = $request->username;
        if($request->password){
            $data->password = bcrypt($request->password);
        }
        if($request->avatar)
        {
            $file = Input::file('avatar');
            $ext= $file->getClientOriginalExtension();
            $avatarFileName = 'avatar-'.time().'.'.$ext;
            request()->file('avatar')->move(public_path('avatar'), $avatarFileName);
            $filePath = '/avatar/'.$avatarFileName;
            $data->avatar = $filePath;
        }
        $data->role = $request->role;
        $data->updated_at = Carbon::now();
        $data->save();

        return redirect()->route('admin.index')->with('alert','User Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('admin.index')->with('alert','User Berhasil Dihapus!'); 
    }
}

