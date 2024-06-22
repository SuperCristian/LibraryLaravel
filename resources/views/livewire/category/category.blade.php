<div class="container md:max-w-[1100px]">
    <div class="card">

        <div class="card-header">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="text-5xl">Category List</h1>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                        <a href="{{ route('CategoryAdd') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                            Add Category
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Book') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                                Books
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
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->categoryName}}</td>
                                <td>{{$item->categoryDescription}}</td>
                                <td>{{$item->categoryStatus == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('CategoryEdit', ['id' => $item->categoryID]) }}" class="btn btn-outline-primary">
                                            Edit
                                        </a>

                
                                    
                                        <button wire:click="delete({{$item->categoryID}})" wire:confirm="Are you sure you want to delete this book? " class="btn btn-outline-danger">
                                           Delete
                                        </button>
                                    </div>
                                </td>
                               </tr>
                        @endforeach
                    </tbody>

                </table>


        </div>
    </div>
    
</div>
