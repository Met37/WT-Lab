<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style type="text/css">
        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            padding:30px;
        }

        table, th, td
        {
            border: 1px solid black;
        }

        th
        {
            width:100px;
        }
        .th_des
        {
          font-size :15px;
          padding: 5px;
          background: #e8e0d5;
        }

        .img_des
        {
            height: auto;
            width: auto;
            padding:2px;
        }

        .total_des
        {
            font-size:20px;
            padding:40px;
            font-weight:bold;
        }

        .remove_col
        {
            width:40px;
            padding:20px;
        }

        .btn-danger
        {
            
            background: #BEBEBE;
            
        }

        .message
        {
            background: #ccfdcc;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section -->
        @include('home.header');
        <!-- slider section -->

        <!-- end slider section -->

        @if(session()->has('message'))

            <div class="alert alert-succcess message">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
             {{session()->get('message')}}

            </div>

@endif

    <!-- cart table section -->
    <div class="center">
        <table  style="width:650px;">
            <tr>
                <th class="th_des">Product Title</th>
                <th class="th_des">Product Quantity</th>
                <th class="th_des">Price</th>
                <th class="th_des">Image</th>
                <th class="th_des">Action</th>
            </tr>

            <?php
                $totalprice=0;
            ?>

            @foreach($cart as $cart)

            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td> <img class=img_des src="/product/{{$cart->image}}" alt=""> </td>
                <td class="remove_col"> <a class="btn btn-danger" onclick="return confirm('Do you want to remove this item?')" href="{{url('remove_cart', $cart->id)}}">x</a> </td>
            </tr>
            
            <?php $totalprice=$totalprice + $cart->price ?>

            @endforeach

        </table>

        <div>
            <h1 class=total_des>Total Price:  ${{$totalprice}}</h1>
        </div>

        <div>
            <h1 style="font-size:25px; padding-bottom:15px;">Proceed to order</h1>

            <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on delivery</a>
            <a href="" class="btn btn-danger">Pay using Bkash</a>
        </div>


    </div>


    <!-- footer start -->
    @include('home.footer');
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>