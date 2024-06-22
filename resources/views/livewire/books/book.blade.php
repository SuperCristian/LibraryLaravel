<div class="container md:max-w-[1100px]">
    <div class="card">

        <div class="card-header">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="text-5xl">Book List</h1>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                        <a href="{{ route('BookAdd') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                            Add Book
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Category') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                                Categories
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>

        <div class="card-body">
            <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Edition</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Published</th>
                        <th scope="col">Status</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->bookTitle}}</td>
                                <td>{{$item->category->categoryName}}</td>
                                <td>{{$item->edition}}</td>
                                <td>{{$item->ISBN}}</td>
                                <td>{{$item->datePublished}}</td>
                                <td>
                                    {{$item->bookStatus == 1 ? 'Active' : 'Inactive'}}
                                </td>
                                <td>{{$item->bookPrice}}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('BookEdit', ['id' => $item->bookID]) }}" class="btn btn-outline-primary">
                                            Edit <!-- Edit icon -->
                                        </a>

                
                                    
                                        <button wire:click="delete({{$item->bookID}})" wire:confirm="Are you sure you want to delete this book? " class="btn btn-outline-danger">
                                           Delete
                                        </button>
                                    </div>
                                </td>
                               </tr>
                        @endforeach
                    </tbody>

                </table>

                {{ $book->links() }}


        </div>
    </div>
    
</div>
