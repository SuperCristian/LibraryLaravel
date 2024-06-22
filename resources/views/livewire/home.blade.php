<div class="container">
    <div class="card">

        <div class="card-header mb-3">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <h1 class="text-5xl font-bold">Home Page</h1>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Book') ? 'active' : '' }}" wire:navigate  href="{{ route('Book') }}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Categories') ? 'active' : '' }}" wire:navigate  href="{{ route('Category') }}">Category</a>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>

        <div class="card-body card-mbody text-white">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="text-3xl">Hello this is a Library System</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-content">
                            <p>
                                This is a simple laravel project with livewire, this is just a simple<br>
                                project with database for books
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
