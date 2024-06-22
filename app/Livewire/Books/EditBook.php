<?php

namespace App\Livewire\Books;

use App\Models\BookModel;
use App\Models\CategoryModel;
use Livewire\Component;

class EditBook extends Component
{
    public $bookId;
    public $bookTitle;
    public $categoryId;
    public $edition;
    public $ISBN;
    public $datePublished;
    public $bookStatus;
    public $bookPrice;
    public $categories;



    public function mount($id)
    {
        $this->bookId = $id;
        $this->categories = CategoryModel::all();
        $this->loadBook();
    }

    public function loadBook()
    {
        $book = BookModel::find($this->bookId);
        if ($book) {
            $this->bookTitle = $book->bookTitle;
            $this->categoryId = $book->categoryID;
            $this->edition = $book->edition;
            $this->ISBN = $book->ISBN;
            $this->datePublished = $book->datePublished;
            $this->bookStatus = $book->bookStatus;
            $this->bookPrice = $book->bookPrice;
        }else{
            dd("Nothing");
        }
    }

    public function editBook()
    {
        $book = BookModel::find($this->bookId);
        if ($book) {
            $book->update([
                'bookTitle' => $this->bookTitle,
                'categoryID' => $this->categoryId,
                'edition' => $this->edition,
                'ISBN' => $this->ISBN,
                'datePublished' => $this->datePublished,
                'bookStatus' => $this->bookStatus,
                'bookPrice' => $this->bookPrice,
            ]);

            return $this->redirect('/book',navigate:true);
        }
    }
    
    public function render()
    {
        return view('livewire.books.edit-book');
    }
}
