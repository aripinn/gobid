<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class UserAjaxController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::orderBy('created_at', 'asc')->get();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function($data){
                return view('admin.component.button')->with('data',$data);
            })
            ->make(true);
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
        $validasi = Validator::make($request->all(), [
            'name' => 'required', 'string', 'max:255',
            'username' => 'required', 'unique:users', 'string', 'max:255',
            'phone' => 'required', 'max:12',
            'password' => 'required',
        ], [
            'name' => 'Nama wajib di isi',
            'username' => 'Username wajib di isi',
            'phone' => 'Nomor telepon Wajib di isi',
            'password' => 'Password perlu di isi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $user = [
                'name' => $request->name,
                'username' => $request->username,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ];
            User::create($user);
            return response()->json(['success' => 'Berhasil Menyimpan']);
        }

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
        $data = User::where('id', $id)->first();
        return response()->json(['result' => $data]);
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
        $validasi = Validator::make($request->all(), [
            'name' => 'required', 'string', 'max:255',
            'username' => 'required', 'unique:users', 'string', 'max:255',
            'phone' => 'required', 'max:12',
            'password' => 'required',
        ], [
            'name' => 'Nama wajib di isi',
            'username' => 'Username wajib di isi',
            'phone' => 'Nomor telepon Wajib di isi',
            'password' => 'Password perlu di isi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $user = [
                'name' => $request->name,
                'username' => $request->username,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ];
            User::where('id', $id)->update($user);
            return response()->json(['success' => 'Berhasil Mengupdate Data']);
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
        User::where('id', $id)->delete();
    }
}

