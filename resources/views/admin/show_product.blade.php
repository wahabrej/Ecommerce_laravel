<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="admin/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <style class="text/css">
        img{
            width:50px;
            height:50px;
        }
    </style>
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="admin/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      
      @include("admin.navber")
    </header>
   
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     
      @include("admin.sidber")
      <!-- Sidebar Navigation end-->
     <!-- @include("admin.body") -->
<div class="container">
    <h1 style="text-align:center;margin-bottom:60px;font-size:30px">All  Product List </h1>
<!-- On tables -->


<table class="table">
  <thead>
    <tr class="table-danger">
      
      <th scope="col">Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Diccount Price</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th  style="text-align:center" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
     
      <td>{{$data->title}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->discount_price}}</td>
      <td>{{$data->category}}</td>
      <td> <img src="/product/{{$data->image}}" ></td>
      <td><a href="{{url('product_delete',$data->id)}}" onclick="return confirm('are you sure want to delete data')" class="btn btn-primary">Delete</a></td>
      <td><a href="{{url('product_update',$data->id)}}" class="btn btn-secondary">Edit</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
   
    <!-- JavaScript files-->
    @include("admin.script")
   
  </body>
</html>