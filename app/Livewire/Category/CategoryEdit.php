<?php

namespace App\Livewire\Category;

use App\Models\CategoryModel;
use Livewire\Component;

class CategoryEdit extends Component
{
    public $categoryName;
    public $categoryDescription;
    public $categoryStatus;
    public $categoryId;

    public function mount($id)
    {
        $this->categoryId = $id;
        $this->loadCategory();
    }

    public function loadCategory()
    {
        $category = CategoryModel::find($this->categoryId);
        if ($category) {
            $this->categoryName = $category->categoryName;
            $this->categoryDescription = $category->categoryID;
            $this->categoryStatus = $category->categoryStatus;
            
        }else{
            dd("Nothing");
        }
    }

    public function editCategory()
    {
        $category = CategoryModel::find($this->categoryId);

        if ($category) {
            $category->update([
                'categoryName' => $this->categoryName,
                'categoryDescription' => $this->categoryDescription,
                'categoryStatus' => $this->categoryStatus,
            ]);

            return $this->redirect('/categories',navigate:true);
        }else{
            dd("Nothing");
        }
    }

    public function render()
    {
        return view('livewire.category.category-edit');
    }
}
