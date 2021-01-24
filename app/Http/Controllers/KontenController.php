<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('konten.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('konten.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:contents,title',
            'content' => 'required',
            'image' => 'required|image|max:2000',
            'tags' => 'required|exists:tags,name'
        ]);

        // simpan gambar
        $imgName = time() . '.' . $validatedData['image']->extension();

        $validatedData['image']->storeAs('public/images', $imgName);

        //simpan konten
        Content::create([
            'user_id' => Auth::user()->id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imgName
        ]);

        $contentId = Content::selectRaw('id')
                        ->where('title', '=', $validatedData['title'])
                        ->get();

        //simpan tags
        foreach ($validatedData['tags'] as $tag)
        {
            DB::table('content_tags')->insert([
                'content_id' => $contentId[0]->id,
                'tag_name' => $tag
            ]);
        }

      //   return redirect('dashboard/konten')->with('alert', [
      //       'type' => 'success',
			// 'message' => 'Konten berhasil ditambahkan'
      //   ]);
      Session::flash('status', "toastr.success('Konten berhasil ditambahkan.')");
      return redirect('dashboard/konten');
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
        $contents = Content::findOrFail($id);
        $tags = Tag::all();
        $tagsPicked = DB::table('content_tags')
                    ->where('content_id', '=', $id)
                    ->get();

        return view('konten.edit', compact('contents', 'tags', 'tagsPicked'));
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|max:2000',
            'tags' => 'exists:tags,name'
        ]);

        if (isset($request->image))
        {
            // simpan gambar baru
            $imgName = time() . '.' . $validatedData['image']->extension();

            $validatedData['image']->storeAs('public/images', $imgName);

            // hapus gambar sebelumnya
            $imageOld = Content::selectRaw('image')
                    ->where('id', '=', $id)
                    ->get();

            if (file_exists(public_path('storage/images/' . $imageOld[0]->image)))
            {
                unlink(public_path('storage/images/' . $imageOld[0]->image));
            }

            // update db
            Content::where('id', $id)
                ->update([
                    'title' => $validatedData['title'],
                    'content' => $validatedData['content'],
                    'image' => $imgName,
                    'editor' => Auth::user()->name
                ]);
        }else {
            // update db
            Content::where('id', $id)
                ->update([
                    'title' => $validatedData['title'],
                    'content' => $validatedData['content'],
                    'editor' => Auth::user()->name
                ]);
        }

        //update tag
        if (isset($validatedData['tags']))
        {
            DB::table('content_tags')
                ->where('content_id', $id)
                ->delete();

            foreach ($validatedData['tags'] as $tag)
            {
                DB::table('content_tags')->insert([
                    'content_id' => $id,
                    'tag_name' => $tag
                ]);
            }
        }

      //   return redirect('dashboard/konten')->with('alert', [
      //       'type' => 'success',
			// 'message' => 'Konten berhasil diubah'
      //   ]);
      Session::flash('status', "toastr.success('Konten berhasil diubah.')");
      return redirect('dashboard/konten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus gambar
        $image = Content::selectRaw('image')
                    ->where('id', '=', $id)
                    ->get();

        if (file_exists(public_path('storage/images/' . $image[0]->image)))
        {
            unlink(public_path('storage/images/' . $image[0]->image));
        }

        DB::table('content_tags')
                ->where('content_id', $id)
                ->delete();

        Content::destroy($id);

      //   return redirect('dashboard/konten')->with('alert', [
      //       'type' => 'success',
			// 'message' => 'Konten berhasil dihapus'
      //   ]);
      Session::flash('status', "toastr.success('Konten berhasil dihapus.')");
      return redirect('dashboard/konten');
    }
}
