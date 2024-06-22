<?php

namespace App\Livewire\Books;

use App\Models\BookModel;
use App\Models\CategoryModel;
use Livewire\Component;

class BookAdd extends Component
{
    public $bookTitle;
    public $categoryId;
    public $edition;
    public $ISBN;
    public $datePublished;
    public $bookStatus;
    public $bookPrice;

    public function render()
    {
        $category = CategoryModel::all();
        return view('livewire.books.book-add', [
            'category'=> $category
        ]);
    }

    public function addBook()
    {
        try {

            $new_book = new BookModel;
            $new_book->bookTitle = $this->bookTitle;
            $new_book->categoryId = $this->categoryId;
            $new_book->edition = $this->edition;
            $new_book->ISBN = $this->ISBN;
            $new_book->datePublished = $this->datePublished;
            $new_book->bookStatus = $this->bookStatus;
            $new_book->bookPrice = $this->bookPrice;
            $new_book->save();

            return $this->redirect('/book',navigate:true);
        } catch (\Exception $th) {
            dd($th);
        }
    }
}
