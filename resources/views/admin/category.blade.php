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
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="admin/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <style class="text/css">
        .tableClass{
        align-item:right;
        text-align:center;
        justify-content:right;
        justify-item:right;
        margin-left:200px;
        }
      
    .div_center {
        align-item: right;
        justify-content: end;
     
        padding: 40px;
        margin-left: 300px;

    }
    .btn{
        align-item:right;
        text-align:center;
        justify-content:right;
        justify-item:right;
        color:black;
        margin-left:200px;

    }

    .div_center h1 {
        font-size: 40px;
        padding-bottom: 40px;
    }
    </style>
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

        <div class="main-panel" style="float:left;overflow:hidden">
            <div class="content-wrapper">
                <div class="div_center">
                    @if(session()->has("message"))
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert" arial-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <h1 style="text-align:center">Add Category</h1>
                    <form action="{{url('/add_category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"> 
                            <label for="exampleInputEmail1"></label>Categoray Name:</label>
                            <input style="align-item:center" type="text" class="category" name="category" aria-describedby="emailHelp"
                                placeholder="Enter Category">

                        </div>

                        <button  type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <center class="tableClass">
               
                    <table  class="table table-dark" border="2px solid black">
                        <thead>
                            <tr>
                               
                                <th scope="col">Category Name</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>

                               
                                <td>{{$data->category_name}}</td>
                                <td>
                                <a onclick="return confirm('Are you sure delete record')" href="{{url('delete_category',$data->id)}}" class="btn btn-secondary"> Delete</a>
                                    
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </center>

            </div>
        </div>

    </div>

    @include("admin.script")

</body>

</html>