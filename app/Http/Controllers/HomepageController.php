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
        // dd($id);
        return view('/homepage/article');
    }

    // tampilan data halaman awal
    public function display()
    {
        $contents = DB::table('contents')
                    ->leftJoin('content_tags', 'contents.id', '=', 'content_tags.content_id')
                    ->paginate(9);

        return view('index', compact('contents'));
    }
}
