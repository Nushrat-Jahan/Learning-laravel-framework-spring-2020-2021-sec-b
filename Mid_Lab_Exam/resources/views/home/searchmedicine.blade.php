@extends('layout.mini')
@section('title')
Search medicine
@endsection

@section('section')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">SEARCH EXPECTED MEDICINE</h2>
            </div>
            <div align="center">
                <p style="color:blue"> {{session('msg')}}</p>
                <p style="color:red"> {{session('delete')}}</p>
                <a href="{{route('home.showcart')}}"><button class="btn btn-success">Show cart</button></a>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search...">
                    </div>
                </div>

    <div align="center">
    <table class="table tableCustom" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CATEGORY</th>
                <th>TYPE</th>
                <th>PRICE</th>
                <th>VENDOR NAME</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        </table>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

     fetch_medicine_data();

     function fetch_medicine_data(query = '')
     {
      $.ajax({
       url:"{{ route('home.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);

       }
      })
     }

     $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_medicine_data(query);
     });

    });
    </script>
@endsection


