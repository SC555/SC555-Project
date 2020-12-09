@extends('frontEnd.layouts.master')
@section('title','My Account Page')
@section('slider')
@endsection
@section('content')
<div class="container">
    <div class="container-fluid">
     
             <div class="widget-box">
                                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                                        <legend>History of my previous Orders</legend>
                                    </div>


                                    <div class="widget-content nopadding">

                                    
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Order id</th>
                                                <th>Shipping Address</th>
                                                <th>City</th>
                                                <th>States</th>
                                                <th>Country</th>
                                                <th>Shipping Charges</th>
                                                <th>Order Status</th>
                                                <th>payment Method</th>
                                                <th>Grand Total</th>
                                                <th>Date</th>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                
                                                    <tr class="gradeC">
                                                        <td>{{$order->id}}</td>
                                                        <td> {{$order->address}}  </td>
                                                        <td>{{$order->city}}</td>
                                                        <td> {{$order->state}} </td>
                                                        <td> {{$order->country}} </td>
                                                        <td> {{$order->shipping_charges	}} </td>
                                                        <td> {{$order->order_status}} </td>
                                                        <td> {{$order->payment_method}} </td>
                                                        <td> {{$order->grand_total}} </td>
                                                        <td> {{$order->created_at}} </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                
              </div>                 
    </div>
  </div>  
@endsection
