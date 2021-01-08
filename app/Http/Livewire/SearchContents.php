<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content;

class SearchContents extends Component
{
    public $searchTerm;
    public $sortField = 'title';
    public $sortDirection = 'asc';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // Livewire lifecycle hook
    public function hydrate()
    {
        $this->gotoPage(1);
    }

    public function sortBy($field)
    {
        if ($this->sortField == $field)
        {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $contents = Content::selectRaw('contents.id, users.name AS creator, title, post_time, editor, edited_time')
                    ->join('users', 'contents.user_id', '=', 'users.id')
                    ->where('title', 'like', '%' . $searchTerm . '%')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate(10);

        return view('livewire.search-contents', ['contents' => $contents]);
    }
}
