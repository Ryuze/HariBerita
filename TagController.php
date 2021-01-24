<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $tags = Tag::where('name','LIKE','%'.$request->cari.'%')->get();
        }else{
        $tags = Tag::all();
    }
        return view('dashboard.tag', ['tags' => $tags]);
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
        $this->validate($request,[
          'tag' => 'required'
        ]);

        Tag::create([
          'name' => $request->tag
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $tags = Tag::findOrFail($name);
        return response()->json([
  	      'data' => $tags
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $oldName)
    {
      $this->validate($request,[
        'editTag' => 'required'
      ]);

      $tag = Tag::find($oldName);
      $tag->name = $request->editTag;
      $tag->save();

      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        Tag::findOrFail($name)->delete();
        $request->session()->flash('status', "toastr.success('Data berhasil dihapus.')");
        // return $toast;
        // return redirect()->back();
    }

    public function destroyAll(Request $request)
    {
      $ids = $request->ids;
      Tag::whereIn('name',explode(",",$ids))->delete();
      return response()->json([
        'success'=>"Products Deleted successfully."
      ]);
    }
}