<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use Livewire\Component;

use App\Models\Customer;

class UserLists extends Component
{
    use WithPagination;

    public string $search = '';

    protected $queryString = ['search'];
    
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user-lists', [
            'customers' => Customer::where('name', 'like', '%'.$this->search.'%')->paginate(25)
        ]);
    }

    public function updated($proparty)
    {
        if($proparty === 'search'){
            $this->resetPage();
        }
    }
}
