<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('konten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|max:2000'
        ]);

        // simpan gambar
        $imgName = time() . '.' . $validatedData['image']->extension();
        
        $validatedData['image']->storeAs('public/images', $imgName);

        Content::create([
            'user_id' => Auth::user()->id,
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imgName
        ]);
        
        return redirect('dashboard/konten')->with('alert', [
            'type' => 'success',
			'message' => 'Konten berhasil ditambahkan'
        ]);
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

        return view('konten.edit', compact('contents'));
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
            'image' => 'image|max:2000'
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

        return redirect('dashboard/konten')->with('alert', [
            'type' => 'success',
			'message' => 'Konten berhasil diubah'
        ]);
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

        Content::destroy($id);

        return redirect('dashboard/konten')->with('alert', [
            'type' => 'success',
			'message' => 'Konten berhasil dihapus'
        ]);
    }
}
