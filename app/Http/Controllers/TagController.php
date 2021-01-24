<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
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

        $request->session()->flash('status', "toastr.success('Tag berhasil ditambahkan.')");

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

      $request->session()->flash('status', "toastr.success('Tag berhasil diubah.')");

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
        Session::flash('status', "toastr.success('Tag berhasil dihapus.')");
        return response()->json([
          'success'=>"Tag terhapus."
        ]);
        return redirect()->back();
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
