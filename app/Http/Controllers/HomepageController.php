<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function search(Request $request)
    {
        //izhari kerjain bagian ini
    }

    public function show($id)
    {
        //ini bagian ane, jangan ente sentuh
    }

    // tampilan data halaman awal
    public function display()
    {
        $contents = DB::table('contents')
        ->leftJoin('content_tags', 'contents.id', '=', 'content_tags.content_id')
        ->get();
        return view('index')->with('contents', $contents);
    }
}
