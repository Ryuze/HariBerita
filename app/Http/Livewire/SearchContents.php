<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content;

class SearchContents extends Component
{
    public $searchTerm;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // Livewire lifecycle hook
    public function hydrate()
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $contents = Content::selectRaw('contents.id, users.name AS creator, title, post_time, editor, edited_time')
                    ->join('users', 'contents.user_id', '=', 'users.id')
                    ->where('title', 'like', '%' . $searchTerm . '%')
                    ->orderBy('post_time')
                    ->paginate(10);

        return view('livewire.search-contents', ['contents' => $contents]);
    }
}
