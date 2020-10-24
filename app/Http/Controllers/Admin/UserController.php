<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()){
            $query = User::all();
            return Datatables::of($query)
            ->addColumn('action', function($item){
            return 
                '<div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aksi
                    </button>
                    <div class="dropdown-menu">
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$item->id.'" class="dropdown-item change-user">Ubah</a>
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$item->id.'" class="dropdown-item delete text-danger">Hapus</a>
                    </div>
                </div>';
            })
            ->editColumn('roles', function ($item){
                if ($item->roles=='ADMIN'){
                    return'<span class="badge badge-danger">'.$item->roles.'</span>';
                }else{
                   return '<span class="badge badge-warning text-white">'.$item->roles.'</span>';
                }
            })
            ->rawColumns(['action','roles'])
            ->make();
    }
    return view('pages.admin.user.index');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data=$request->All();
        $data['password']=Hash::make($request->password);
        User::updateOrCreate(['id'=>$request->id],$data);
        return response()->json($data); 
    }

    /**a
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
        $where = array('id' => $id);
        $post  = User::where($where)->first();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id)->delete();
        return response()->json($data);
    }
}
