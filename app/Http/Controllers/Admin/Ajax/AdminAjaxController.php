<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AdminAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::where('role', 'ADMIN')->orderBy('created_at', 'asc')->get();

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
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ], [
            'name' => 'Nama wajib di isi',
            'username' => 'Username wajib di isi',
            'email' => 'Email Wajib di isi',
            'role' => 'Role Wajib di isi',
            'password' => 'Password perlu di isi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $admin = [
                'name' => $request->name,
                'username' => $request->username,
                'role' => 'ADMIN',
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            Admin::create($admin);
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
        $data = Admin::where('id', $id)->first();
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
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ], [
            'name' => 'Nama wajib di isi',
            'username' => 'Username wajib di isi',
            'role' => 'Role wajib di isi',
            'email' => 'Email Wajib di isi',
            'password' => 'Password perlu di isi',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $admin = [
                'name' => $request->name,
                'username' => $request->username,
                'role' => 'ADMIN',
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            Admin::where('id', $id)->update($admin);
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
        Admin::where('id', $id)->delete();
    }
}

