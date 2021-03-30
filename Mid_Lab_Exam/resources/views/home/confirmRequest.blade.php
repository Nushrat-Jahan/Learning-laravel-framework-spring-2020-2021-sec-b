@extends('layout.mini')
@section('title')
Confirm Pending Request
@endsection

@section('section')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 align="center" style="padding:2%">CONFIRM MEDICINE REQUEST</h2>
                </div>
                    <div class="panel-body">
    <div align="center">
    <table class="table tableCustom table-striped" align="center">
        <thead>
            <tr>
                <th>CUSTOMER ID</th>
                <th>MEDICINE ID</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $cart)
            <tr>
               <td>{{$cart->user_id}}</td>
               <td>{{$cart->medicine_id}}</td>
               <td>{{$cart->quantity}}</td>
               <td>{{$cart->total}}</td>
               <td>{{$cart->request}}</td>
               <td><a href="{{route('home.acceptRequest',['uid'=>$cart->user_id,'mid'=>$cart->medicine_id])}}">
                <button class="btn btn-primary">Accept</button></a>
                <a href="{{route('home.denyRequest',['uid'=>$cart->user_id,'mid'=>$cart->medicine_id])}}"><button class="btn btn-info">Deny</button></a></td>
            </tr>
            @endforeach

        </tbody>
        </table>

            </div>
        </div>
    </div>
</div>

@endsection


