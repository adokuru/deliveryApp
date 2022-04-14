@extends('layouts.frontend')
@section('main')
    <style>
        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem;
            margin-top: 90px;
            margin-bottom: 90px;
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }

    </style>
    <header class="page-header" data-background="images/slide01.jpg">
        <div class="container">
            <h1>Tracker</h1>
            <p>Tracking ID: {{ $tracked->tracking_id }}</p>
        </div>
        <!-- end container -->
    </header>
    <div class="container">
        <article class="card">
            <header class="card-header"> My Orders / Tracking </header>
            <div class="card-body">
                <h6>Order ID: {{ $tracked->tracking_id }}</h6>
                <h6>Destination: {{ $tracked->to_address }}, {{ $tracked->to_city }}, {{ $tracked->to_state }}, {{ $tracked->to_country }}</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>{{ $tracked->expected_delivery_date }} </div>
                        <div class="col"> <strong>Shipping BY:</strong> <br> {{ $tracked->title }}, | <i class="fa fa-phone"></i> {{ $tracked->from_phone }} </div>
                        <div class="col"> <strong>Status:</strong> <br> {{ $tracked->status }} </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> {{ $tracked->tracking_id }} </div>
                    </div>
                </article>
                <div class="track">
                    <div class="step {{ $tracked->step >= 1 ? 'active' : '' }}"> <span class="icon"> <i class="fas {{ $tracked->step >= 1 ? 'fa-check' : 'fa-spinner' }}"></i> </span> <span class="text">Order Confirmed</span> </div>
                    <div class="step {{ $tracked->step >= 2 ? 'active' : '' }}"> <span class="icon"> <i class="fas {{ $tracked->step >= 2 ? 'fa-check' : 'fa-spinner' }}"></i> </span> <span class="text"> Order Shipped </span> </div>
                    <div class="step {{ $tracked->step >= 3 ? 'active' : '' }}"> <span class="icon"> <i class="fas {{ $tracked->step >= 3 ? 'fa-check' : 'fa-spinner' }}"></i> </span> <span class="text"> Order En Route </span> </div>
                    <div class="step {{ $tracked->step >= 4 ? 'active' : '' }}"> <span class="icon"> <i class="fas {{ $tracked->step >= 4 ? 'fa-check' : 'fa-spinner' }}"></i> </span> <span class="text">Ready for pickup</span> </div>
                </div>
            </div>
        </article>
    </div>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Decription</th>
                                    <th>Location</th>
                                    <th>status</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            @forelse ($tracked->TrackingLogs as $item)
                                <tbody class="table-body">
                                    <tr class="cell-1">
                                        <td>#{{ $tracked->tracking_id }}</td>
                                        <td >{{$item->description}}</td>
                                        <td>{{$item->location}}</td>
                                        <td><span class="badge badge-info">{{$item->status}}</span></td>
                                        <td>{{$item->time}}</td>
                                        <td>{{$item->date}}</td>
                                    </tr>
                                </tbody>
                            @empty

                            @endforelse

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
