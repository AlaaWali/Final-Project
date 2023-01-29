  <nav class="navbar navbar-expand-lg bg-light navbar-top">
        <div class="container">
            <span class="text">Free Shipping on All orders Over $75!</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Currency: Usd<i class="fa-solid fa-angle-down ms-3"></i></a>
                    </li>
                    <li class="nav-item cart">
                        <a class="nav-link" href="{{url('show_cart')}}"><i class="fa-solid fa-cart-shopping me-3"></i>My Cart(2)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!--- start search-bar --->
    <section class="search-bar">
        <div class="search">
            <input class="search-text" type="text" name="searchInput" placeholder="Search Here What You Need...."
                value="">
            <button class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </section>
    <!--- end search-bar --->