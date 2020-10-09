<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()){
            $query = Category::all();
            return Datatables::of($query)
            ->addColumn('action', function($item){
            return 
                '<div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aksi
                    </button>
                    <div class="dropdown-menu">
                        <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$item->id.'" class="dropdown-item change-category">Ubah</a>
                        <form action="'.route('category.destroy',$item->id).'" method="POST">
                        '.method_field('delete').csrf_field().'
                        <button type="submit" class="dropdown-item text-danger">Hapus</button>
                    </div>
                </div>';
            })
            ->editColumn('photo', function ($item){
                return $item->photo ? '<img src="'.Storage::url("category/$item->photo").'" style="max-height:50px;"/>' : '';
            })
            ->rawColumns(['action','photo'])
            ->make();
    }
    return view('pages.admin.category.index');
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
    public function store(CategoryRequest $request)
    {
        $request=request();
        $data=$request->All();
        if ($request->hasFile('photo')){
            $slug=Str::slug($request['name']);
            $extFile=$request->photo->getClientOriginalExtension();
            $namaFile=$slug.'-'.time().".".$extFile;
            $request->photo->storeAs('public/category',$namaFile);
        }else{
             $namaFile='defaultPhoto.jpg';
        }
         $data=Category::create([
            'name'=>$request['name'],
            'photo'=>$namaFile,
            'slug'=>Str::slug($request->name),
        ]);


        // $data=$request->All();
        // $data['slug']=Str::slug($request->name);
        // $data['photo']=$request->file('photo')->store('assets/category', 'public');
        // Category::create($data);
        return response()->json($data); 
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
        $where = array('id' => $id);
        $post  = Category::where($where)->first();
     
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data=$request->all();
        $data['slug']=Str::slug($request->name);
        $data['photo']=$request->file('photo')->store('category','public');
        $item=Category::findorFail($id);
        $item->update($data);
        return redirect()->route('category.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Category::findOrFail($id);
        $item->delete();
        return redirect()->route('category.index');
        
    }
}
