<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Content;

class HomepageController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('query');
   
                    $contents = DB::table('contents')
                    ->leftJoin('content_tags', 'contents.id', '=', 'content_tags.content_id')
                    ->select('contents.id', 'contents.title', 'contents.content', 'contents.image','contents.post_time', DB::RAW('GROUP_CONCAT(content_tags.tag_name) as tag_name'))
                    ->groupBy('contents.id', 'contents.title', 'contents.content', 'contents.image','contents.post_time')
                    ->where('title', 'like', '%'.$search.'%')
                    ->get();
        return view('homepage.search', compact('contents'));
    }

    public function show($id)
    {
        $contents = DB::table('contents')
                    ->selectRaw('users.name as name, title, content, image, post_time, tag_name')
                    ->join('users', 'contents.user_id', '=', 'users.id')
                    ->rightJoin('content_tags', 'contents.id', '=', 'content_tags.content_id')
                    ->where('contents.id', '=', $id)
                    ->get();

        return view('homepage.article', compact('contents'));
    }

    // tampilan data halaman awal
    public function display()
    {
        $contents = DB::table('contents')
                    ->leftJoin('content_tags', 'contents.id', '=', 'content_tags.content_id')
                    ->select('contents.id', 'contents.title', 'contents.content', 'contents.image', DB::RAW('GROUP_CONCAT(content_tags.tag_name) as tag_name'))
                    ->groupBy('contents.id', 'contents.title', 'contents.content', 'contents.image')
                    ->paginate(6);
        
        // dd($contents);
                   
        return view('index', compact('contents'));
    }
}
