@extends('layout.mini')
@section('title')
Add to cart
@endsection

@section('section')
    <form method="POST" action="">
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">ALL MEDICINE LIST</h2>
            </div>
                <div class="panel-body">


    <div align="center">

    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>MEDICINE ID</th>
                <th>MEDICINE NAME</th>
                <th>MEDICINE TYPE</th>
                <th>MEDICINE PRICE</th>
                <th>QUANTITY</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->medicine_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->medicine_type}}</td>
                <td>{{$user->price}}</td>
                <td><input class="quantity" min="0" placeholder="0" name="quantity" value="1" type="number"></td>
                </tr>
            </tbody>
        </table>
            <span align="center"><a href="{{route('home.addtocart',['id'=>$user->medicine_id])}}"><button class="btn btn-danger">Confirm</button></a></span></div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection


