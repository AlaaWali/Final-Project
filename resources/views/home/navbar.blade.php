    <nav class="navbar navbar-expand-lg sticky-top navbar-header">
        <div class="container">
            <h2 class="logo">Fashion</h2>
            <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#collection">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#featured">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trending">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#brand">Brand</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_cart') }}">Cart</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('show_order') }}">Order</a>
                    </li>




                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">

                                <x-app-layout>

                                </x-app-layout>

                            </li>


                            
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </li>

                        @endauth
                    @endif




                </ul>
            </div>
        </div>
    </nav>
