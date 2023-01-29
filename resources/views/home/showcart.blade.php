<!DOCTYPE html>
<html lang="en">

<head>
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

    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 50px;
        }


        table,
        th,
        td {
            border: 1px solid grey;

        }

        .th_deg {
            font-size: 25px;
            padding: 5px;
            background: skyblue;
        }

        .img_deg {
            height: 200px;
            width: 200px;
        }

        .total_deg {
            font-size: 20px;
            padding: 40px;
        }
    </style>
</head>

<body>

    <!--- start navbar --->
    @include('home.navbar')
    <!--- end navbar --->

       @if (session()->has('message'))
                   <div class="alert alert-success alert-dismissible">

                        <a href="" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</a>

                        {{ session()->get('message') }}

                        </div>

                @endif



    <div class="center">
        <table>

            <tr>

                <th class="th_deg">Product title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>


            </tr>

            <?php $totalprice = 0; ?>

            @foreach ($cart as $cart)
                <tr>

                    <td>{{ $cart->product_title }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>${{ $cart->price }}</td>
                    <td><img class="img_deg" src="/product/{{ $cart->image }}"></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this product ?')" href="{{url('/remove_cart',$cart->id)}}">Delete</td>

                </tr>

                <?php $totalprice = $totalprice + $cart->price; ?>
            @endforeach



        </table>


        <div>
            <h1 class="total_deg">Total Price : ${{ $totalprice }}</h1>
        </div>



        <div>

            <h1 style="font-size: 25px; padding-bottom:15px;">Proceed to Order</h1>

            <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>




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
