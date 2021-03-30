@extends('layout.mini')
@section('title')
Home
@endsection

@section('section')
    <h1>{{session('user_type')}}</h1>
    <h3 style="color:red">{{session('user')}}</h3>
    <p>Welcome Home</p>
    <a href="{{route('home.profile')}}"><button class="btn btn-success" style="margin:5px">Profile</button>
    <a href="{{route('home.customerlist')}}"><button class="btn btn-success" style="margin:5px">View Customer</button>
    <a href="{{route('home.medicinelist')}}"><button class="btn btn-success" style="margin:5px">View Medicine</button>
    <a href="{{route('home.searchmedicine')}}"><button class="btn btn-success" style="margin:5px">Search Medicine</button>
    <a href="{{route('home.confirmRequest')}}"><button class="btn btn-success" style="margin:5px">Accept Request</button>
    <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>
@endsection
