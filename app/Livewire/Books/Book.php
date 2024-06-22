<?php

namespace App\Livewire\Books;

use App\Models\BookModel;
use App\Models\CategoryModel;
use Livewire\Component;
use Livewire\WithPagination;

class Book extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.books.book', [
            'book' => BookModel::with('category')->paginate(10)
        ]);
    }

    public function delete($id)
    {
        try {
           BookModel::where('bookID', $id)->delete();
           return $this->redirect('/book',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
