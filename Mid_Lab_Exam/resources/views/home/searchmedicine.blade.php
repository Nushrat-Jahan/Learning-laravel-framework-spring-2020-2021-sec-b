<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>search medicine</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 align="center" style="padding:2%">SEARCH EXPECTED MEDICINE</h2>
            </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search...">
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


</body>
</html>


