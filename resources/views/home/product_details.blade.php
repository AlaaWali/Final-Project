<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/index.css">
</head>

<body>
    <!--- start navbar --->
    @include('home.navbar')
    <!--- end navbar --->

    <div class="col-12 col-lg-3 col-md-4 col-sm-6 py-3" style="margin:auto ">
        <div class="list-group position-relative">
            <img src="product/{{ $product->image }}" alt="">
            <div class="list-item">
                <h5>{{ $product->title }}</h5>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star star"></i>
                </div>
            </div>
            <div class="icons">
                <a href="#" class="add-to-card"><i class="fa-sharp fa-solid fa-heart cart"></i></a>
                <a href="#" class="add-to-card"><i class="fa fa-cart-shopping cart"></i></a>
                <a href="#" class="add-to-card"><i class="fa-solid fa-share-nodes cart"></i></a>
            </div>

            @if ($product->discount_price != null)
                <div class="sale" style="height: 9%">
                    <h4>%{{ $product->discount_price }}
                        OFF
                    </h4>
                </div>
            @endif

            <div class="price">
                <h5>${{ $product->price }}</h5>
            </div>

            <h6>Product Category : {{ $product->category }}</h6>

            <h6>Product Details : {{ $product->description }}</h6>

            <h6>Available Quantity : {{ $product->quantity }}</h6>

              <form action="{{ url('add_cart', $product->id) }}" method="POST">

                                @csrf

                                <div>
                                    <input type="number" name="quantity" value="1" min="1"
                                        style="width: 100px; height:30px;">


                                    <input class="btn btn-primary my-2" type="submit" value="Add To Cart"
                                        style="background-color: rgb(0, 102, 255)">
                                </div>

                            </form>


        </div>
    </div>





    <!--- start footer --->
    @include('home.footer')
    <!--- end footer --->
    
         <!--- start footer-bottom --->
      @include('home.footerbottom')
    <!--- end footer-bottom --->

    <script src="home/javascript/bootstrap.min.js"></script>
    <script src="home/javascript/index.js"></script>
</body>

</html>
