<div class="container md:max-w-[1100px]">
    <div class="card">

        <div class="card-header">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="text-5xl">Add Book</h1>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                        <a href="{{ route('Book') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                            Book List
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>

        <div class="card-body">
            <div>
                <form wire:submit.prevent="addBook">
                    <div class="mb-3">
                        <label for="bookTitle" class="form-label">Book Title</label>
                        <input type="text" wire:model="bookTitle" class="form-control" id="bookTitle" name="bookTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Status</label>
                        <select class="form-select" wire:model="categoryId" id="category" name="category" required>
                            <option value="">Select Option</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->categoryID }}">{{ $item->categoryName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edition" class="form-label">Edition</label>
                        <input type="number" wire:model="edition" class="form-control" id="edition" name="edition">
                    </div>
                    <div class="mb-3">
                        <label for="ISBN" class="form-label">ISBN</label>
                        <input type="text" wire:model="ISBN" class="form-control" id="ISBN" name="ISBN" required>
                    </div>
                    <div class="mb-3">
                        <label for="datePublished" class="form-label">Date Published</label>
                        <input type="date" wire:model="datePublished" class="form-control" id="datePublished" name="datePublished" required>
                    </div>
                    <div class="mb-3">
                        <label for="bookStatus" class="form-label">Status</label>
                        <select class="form-select" wire:model="bookStatus" id="bookStatus" name="bookStatus" required>
                            <option value="">Choose...</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bookPrice" class="form-label">Price</label>
                        <input type="number" wire:model="bookPrice" class="form-control" id="bookPrice" name="bookPrice" required>
                    </div>
                    <button class="btn btn-primary">Add Book</button>
                </form>
            </div>
        </div>
    </div> 

</div>