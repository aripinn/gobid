<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class StaffAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('role', 'Staff')->orderBy('created_at', 'asc')->get();

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
            'phone' => 'max:25',
            // 'email' => 'required',
            // 'role' => 'required',
            'password' => 'required',
        ], [
            'name' => 'Name is required!',
            'username' => 'Username is required!',
            'phone' => 'Phone Number exceeds 25 characters',
            // 'email' => 'Email Wajib di isi',
            // 'role' => 'Role Wajib di isi',
            'password' => 'Password is required!',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $admin = [
                'name' => $request->name,
                'username' => $request->username,
                'role' => 'Staff',
                'phone' => $request->phone,
                // 'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            User::create($admin);
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
            'phone' => 'max:25',
            // 'email' => 'required',
            // 'role' => 'required',
            'password' => 'required',
        ], [
            'name' => 'Name is required!',
            'username' => 'Username is required!',
            'phone' => 'Phone Number exceeds 25 characters',
            // 'email' => 'Email Wajib di isi',
            // 'role' => 'Role Wajib di isi',
            'password' => 'Password is required!',
        ]);

        if ($validasi->fails()) {
            return response()->json(['errors' => $validasi->errors()]);
        } else {
            
            $admin = [
                'name' => $request->name,
                'username' => $request->username,
                'role' => 'Staff',
                'phone' => $request->phone,
                // 'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            User::where('id', $id)->update($admin);
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

