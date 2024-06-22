<?php

namespace App\Livewire\Category;

use App\Models\CategoryModel;
use Livewire\Component;

class Category extends Component
{

    public function render()
    {
        return view('livewire.category.category',[
          'category' => CategoryModel::all()
        ]);
    }

    public function delete($id)
    {
        try {
           CategoryModel::where('categoryID', $id)->delete();
           return $this->redirect('/categories',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
