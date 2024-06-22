<?php

namespace App\Livewire\Category;

use App\Models\CategoryModel;
use Livewire\Component;

class CategoryAdd extends Component
{
    public $categoryName;
    public $categoryDescription;
    public $categoryStatus;

    public function render()
    {
        return view('livewire.category.category-add');
    }

    public function addCategory()
    {
        try {

            $new_category = new CategoryModel;
            $new_category->categoryName = $this->categoryName;
            $new_category->categoryDescription = $this->categoryDescription;
            $new_category->categoryStatus = $this->categoryStatus;
            $new_category->save();

            return $this->redirect('/categories',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
