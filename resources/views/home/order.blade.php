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
            width: 75%;
            padding: 50px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        .th_deg {
            padding: 10px;
            background-color: skyblue;
            font-size: 20px;
            font-weight: bold;
        }
    </style>


</head>

<body>
    <!--- start navbar-header --->
    @include('home.navbar')
    <!--- end navbar-header --->


    <div class="center">

        <table>
            <tr>
                <th class="th_deg">Product Title</th>

                <th class="th_deg">Quantity</th>

                <th class="th_deg">Price</th>

                <th class="th_deg">Payment Status</th>

                <th class="th_deg">Delivery Status</th>

                <th class="th_deg">Image</th>

                <th class="th_deg">Cancel Order</th>

            </tr>

            @foreach ($order as $order)
                <tr>

                    <td>{{ $order->product_title }}</td>

                    <td>{{ $order->quantity }}</td>

                    <td>{{ $order->price }}</td>

                    <td>{{ $order->payment_status }}</td>

                    <td>{{ $order->delivery_status }}</td>

                    <td>
                        <img height="100" width="180" src="product/{{ $order->image }}">
                    </td>

                    <td>
                        @if($order->delivery_status=='processing')

                        <a onclick="return confirm ('Are You Sure to Cancel this Order !!!')" class="btn btn-danger"
                        href="{{ url('cancel_order', $order->id) }}">Cancel Order</a>

                        @else

                        <p style="color: blue;">Not Allowed</p>


                    @endif

                    </td>

                </tr>
            @endforeach





        </table>

    </div>




    <script src="home/javascript/bootstrap.min.js"></script>
    <script src="home/javascript/index.js"></script>
</body>

</html>
