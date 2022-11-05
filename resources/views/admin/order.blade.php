<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css');

    <style type="text/css">
        .title_des
        {
            text-align: center;
            font-size: 25px;
            font-weight:bold;
            padding-bottom:40px;
        }

        .table_des
        {
            border:2px solid white;
    
            margin:auto;
            text-align: center;
        }

        .th_des
        {
            background-color: #D1C0A8;
        }

        .img_size
        {
            width:auto;
            height:auto;
        }

        td
        {
            padding-right:5px;
        }

        .delivery
        {
            background-color:#00C7D6;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');
        <!-- partial -->
        @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_des">All Orders</h1>

                <div style="width=1px;">
                <table class="table_des">
                    <tr>
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Address</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Product_title</th>
                        <th style="padding: 10px;">Quantity</th>
                        <th style="padding: 10px;">Price</th>
                        <th style="padding: 10px;">Payment Status</th>
                        <th style="padding: 10px;">Delivery Status</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delivered</th>
                    </tr>

                    @foreach($order as $order)

                    <tr class="th_des">
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>
                            @if($order->delivery_status=='processing')

                            <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Change this item to delivered?')" class="btn btn-primary delivery">Delivered</a>

                            @else
                                <p style="color: green;">Delivered</p>

                            @endif
                        </td>
                    </tr>

                    @endforeach
                </table>
                </div>

                
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script');
        <!-- End custom js for this page -->
</body>

</html>