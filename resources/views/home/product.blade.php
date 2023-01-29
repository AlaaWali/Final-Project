    <section id="featured" class="featured py-5">
        <div class="container">
            <div class="separator">
                <div class="line"></div>
                <h2>featured items</h2>
                <div class="line"></div>
            </div>

            <ul class="d-flex flex-wrap justify-content-center list-unstyled gap-5 featured-items ">
                <li>
                    <a class="text-decoration-none" href="#">All</a>
                </li>
                <li>
                    <a class="text-decoration-none" href="#">Men</a>
                </li>
                <li>
                    <a class="active" href="#">Women</a>
                </li>
                <li>
                    <a class="text-decoration-none" href="#">Kids</a>
                </li>
            </ul>

            <form action="{{url('product_search')}}" method="GET">

                @csrf

            <div class="d-flex justify-content-center py-2">

                <input style="width:400px;" class="py-2" type="text" name="search" Placeholder=" Search for something">

            </div>

            <div class="d-flex justify-content-center py-2">
                <input class="btn btn-danger rounded-0" type="submit" value="Search">
            </div>

            </form>

              @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible">

                        <a href="" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</a>

                        {{ session()->get('message') }}

                    </div>
                @endif


            <div class="featured-list row justify-content-center">

                @foreach ($product as $products)
                    <div class="col-12 col-lg-3 col-md-4 col-sm-6 py-3 ">
                        <div class="list-group position-relative">
                            <img src="product/{{ $products->image }}" alt="">
                            <div class="list-item">
                                <h5>{{ $products->title }}</h5>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star star"></i>
                                </div>
                            </div>
                            <div class="icons">
                                <a href="#" class="add-to-card"><i
                                        class="fa-sharp fa-solid fa-heart cart"></i></a>
                                <a href="#" class="add-to-card"><i class="fa fa-cart-shopping cart"></i></a>
                                <a href="#" class="add-to-card"><i class="fa-solid fa-share-nodes cart"></i></a>
                            </div>

                            <div class="py-2">
                                <a class="btn btn-danger" href="{{ url('product_details', $products->id) }}">Product
                                    Details</a>
                            </div>

                            <form action="{{ url('add_cart', $products->id) }}" method="POST">

                                @csrf

                                <div>
                                    <input type="number" name="quantity" value="1" min="1"
                                        style="width: 100px; height:30px;">


                                    <input class="btn btn-primary my-2" type="submit" value="Add To Cart"
                                        style="background-color: rgb(0, 102, 255)">
                                </div>

                            </form>

                            @if ($products->discount_price != null)
                                <div class="sale" style="height: 9%">
                                    <h4>{{ $products->discount_price }}%
                                        OFF
                                    </h4>
                                </div>
                            @endif

                            <div class="price">
                                <h5>${{ $products->price }}</h5>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
    </section>
