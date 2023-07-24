<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Work;
use Livewire\Component;

class FilterSearchComponent extends Component
{

    public $activeTab = 'all';
    public $search = 'all';

    public function render()
    {
        // Perform data filtering based on the active tab
        $categories =Category::query()->get();


        $items = Work::query();

        if ($this->search != 'all') {
            $items->where('category_id', $this->search);
        }
        $works = $items->with('category')->get();


        return view('livewire.filter-search-component', compact('categories','works'));
    }

    public function filterTab($search){
        $this->search=$search;
        $this->activeTab=$search;
        if($search=='all'){
            $this->activeTab='all';

        }

   }


}
