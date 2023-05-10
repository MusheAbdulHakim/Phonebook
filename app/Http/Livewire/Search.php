<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Search extends Component
{
    use WithPagination;

    public $searchTerm;


    public function render()
    {
        $searchTerm = '%'. $this->searchTerm. '%';
        return view('livewire.search',[
            'contacts' => Contact::where('firstname','like',$searchTerm)->orWhere('lastname','like', $searchTerm)->orWhere('phone','like', $searchTerm)->paginate(5)
        ]);
    }

}
