<!DOCTYPE html>
<html>
  <head> 
    <base href="/public" >
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
     <!-- @include("admin.body") -->updated
<div class="container">
    <h1 style="text-align:center">Edit Product </h1>
<form action="{{url('/updated',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1"> Product Title</label>
    <input type="text" value="{{$data->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter the title" required>
    
    <label for="exampleInputEmail1">Description :</label>
    <input type="text" value="{{$data->description}}" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter description" required>
   
    <label for="exampleInputEmail1">Price :</label>
    <input type="text" value="{{$data->price}}" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" required>
    
    <label for="discount_price">Discount Price</label>
    <input type="text" value="{{$data->discount_price}}" name="discount_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter discount price">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="text" value="{{$data->quantity}}" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter quantity" required>
    <label for="exampleInputEmail1">Category</label>
  <select name="category" style="color:black" class="category">
  
    <option value="{{$data->category}}" selected="">{{$data->category}}</option>
    @foreach($category as $category)
    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
    @endforeach
 
  </select><br>
    
    <label for="exampleInputEmail1">Image </label>
    <img src="/product/{{$data->image}}" >
    <input type="file" name="image"   >
  <button type="submit" style="color:black" class="btn btn-primary">Submit</button>
</form>
</div>
     
   
    <!-- JavaScript files-->
    @include("admin.script")
   
  </body>
</html>