<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Existing Product</title>
</head>
<body style="margin-top:2%">
    <div align="center">

        <a href="{{route('product.index')}}"   ><button class="btn btn-danger" style="margin:2px">Product Home             </button></a>
        <a href="{{route('product.existing')}}"><button class="btn btn-danger" style="margin:2px">Existing Products</button></a>
        <a href="{{route('product.upcoming')}}"><button class="btn btn-danger" style="margin:2px">Upcoming Products</button></a>
        <a href="{{route('product.add')}}"     ><button class="btn btn-danger" style="margin:2px">Add Products     </button></a>
        <br>
        <a href="javascript:history.back()"     ><button class="btn btn-danger" style="margin:2px">Back    </button></a>
        <a href="{{route('logout')}}"     ><button class="btn btn-danger" style="margin:2px">Log out     </button></a>

    </div>
    <script>
        function check(){
           if(confirm("Are You Sure to delete this product?"))
           {
               return true;
           }
           else
           {
               return false;
           }
         }
    </script>
        <div style="margin-top:15px">
            <h2 align="center" padding="20px">EXITING PRODUCT INFORMATION</h2><br><br>

        </div>
        <div align="center">
            <p style="color:red">{{session('delete')}}</p>
            @if(request('sort'))

                <h4>Sort By:</h4>
                <a href="{{route('product.existing',['sort'=> request('sort'),'sortType'=>'asc'])}}">
                    <button class="btn btn-primary" style="margin:2px">Assending</button></a>
                <a href="{{route('product.existing',['sort'=> request('sort'),'sortType'=>'desc'])}}">
                    <button class="btn btn-primary" style="margin:2px">Dessending</button></a>
            @endif
                <br>
                <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">
                    <tr>
                    <th scope="col"><a href="{{route('product.existing',['sort'=>'id','sortType'=>request('sortType')])}}">PRODUCT ID</th>
                    <th scope="col"><a href="{{route('product.existing',['sort'=>'product_name','sortType'=>request('sortType')])}}">PRODUCT NAME</th>
                    <th scope="col"><a href="{{route('product.existing',['sort'=>'category','sortType'=>request('sortType')])}}">CATEGORY</th>
                    <th scope="col"><a href="{{route('product.existing',['sort'=>'unit_price','sortType'=>request('sortType')])}}">UNIT PRICE</th>
                    <th scope="col"> <a href="{{route('product.existing',['sort'=>'quantity','sortType'=>request('sortType')])}}">QUANTITY</a> </th>
                    <th scope="col"><a href="{{route('product.existing',['sort'=>'date_added','sortType'=>request('sortType')])}}">DATE ADDED</a></th>
                    <th scope="col">ACTION</th>
                    </tr>
                    @foreach ($list as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['product_name']}}</td>
                        <td>{{$product['category']}}</td>
                        <td>{{$product['unit_price']}}</td>
                        <td>{{$product['quantity']}}</td>
                        <td>{{$product['date_added']->format('d-m-Y')}}</td>
                        <td><a href="{{route('product.edit',['id'=>$product['id']])}}"><button class="btn btn-warning">Edit</button></a>
                            <a onclick="return check()" class='delete' href="{{route('product.delete',['id'=> $product['id']])}}"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{route('product.details',['product_id'=> $product['id'],'vendor_id'=> $product['vendor_id']])}}"><button class="btn btn-success">View Details</button></a></td>
                    </tr>
                        @endforeach
                </table>
            {{$list->links()}}
        </div>
</body>
</html>
