<div class="container md:max-w-[1100px]">
    <div class="card">

        <div class="card-header">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="text-5xl">Add New Category</h1>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                        <a href="{{ route('Category') }}" wire:navigate class="btn btn-outline-primary me-2 mb-4 float-end">
                            Category List
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>

        <div class="card-body">
            <div>
                <form wire:submit.prevent="addCategory">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text"  wire:model="categoryName" class="form-control" id="categoryName" name="categoryName" required>
                    </div>
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <input type="text" wire:model="categoryDescription" class="form-control" id="categoryDescription" name="categoryDescription">
                    </div>
                    <div class="mb-3">
                        <label for="categoryStatus" class="form-label">Status</label>
                        <select class="form-select" wire:model="categoryStatus" id="categoryStatus" name="categoryStatus" required>
                            <option value="">Choose...</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div> 

</div>
