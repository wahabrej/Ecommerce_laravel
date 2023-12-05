<!DOCTYPE html>
<html>
<head>
      <!-- Basic -->
      <base href="/public" >
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

   </head>



<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include("Home.header");
        <!-- end header section -->
        <!-- slider section -->
        <!-- @include("Home.slider") -->
        <!-- end slider section -->
  
    <!-- why section -->
    <!-- @include("Home.why") -->
    <!-- end why section -->

    <!-- arrival section -->
    <!-- @include("Home.arrivale") -->
    <!-- end arrival section -->

    <!-- product section -->
    <div class="col-sm-6 col-md-4 col-lg-12 d-flex justify-content-center" style="margin:auto;width:50%;padding:50px">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_detail',$data->id)}}" class="option1">
                                  Product Detail
                                </a>
                                <a href="home/" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img style="background-size: contain, cover;" src="/product/{{$data->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                              Product Title :  {{$data->title}}
                               
                            </h5>
                            <p> {{$data->description}}</p>
                            
                            @if($data->discount_price !=null)
                            <h6>
                              Discount : $ {{$data->discount_price}}
                            </h6>
                            <h6 style="text-decoration:line-through;color:purple">$
                               Price: {{$data->price}}
                            </h6>
                            @else
                            <h6>
                                <p>  Discount : discount off</p>
                            </h6>
                            <h6 style="color:purple">
                            Price: ${{$data->price}}
                            </h6>
                            @endif
                            <p>Category Name: {{$data->category}}</p>
                            <p>Availability :{{$data->quantity}}</p>
                            <form action="{{url('add_cart',$data->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"> <input  type="number" name="quantity" value="1" min="1"></div>

                                    <div class="col-md-4"> <input type="submit" value="Add to Cart" ></div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
    <!-- <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="/product/{{$data->image}}"
                                        width="250" /> </div>
                                <div class="thumbnail text-center"> <img onclick="change_image(this)"
                                        src="/product/{{$data->image}}" width="70"> <img
                                        onclick="change_image(this)" src="/product/{{$data->image}}" width="70">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span
                                            class="ml-1">Back</span> </div> <i
                                        class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase">{{$data->title}}</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span
                                            class="act-price">$20</span>
                                        <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="about">{{$data->description}}
                                </p>
                                <div class="sizes mt-5">
                                    <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio"
                                            name="size" value="S" checked> <span>S</span> </label> <label class="radio">
                                        <input type="radio" name="size" value="M"> <span>M</span> </label> <label
                                        class="radio"> <input type="radio" name="size" value="L"> <span>L</span>
                                    </label> <label class="radio"> <input type="radio" name="size" value="XL">
                                        <span>XL</span> </label> <label class="radio"> <input type="radio" name="size"
                                            value="XXL"> <span>XXL</span> </label>
                                </div>
                                <div class="cart mt-4 align-items-center"> <button
                                        class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i
                                        class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- end product section -->

    <!-- subscribe section -->
    <!-- @include("Home.subscribe") -->
    <!-- end subscribe section -->
    <!-- client section -->
    <!-- @include("Home.client") -->
    <!-- end client section -->
    <!-- footer start -->

    @include("Home.footer")

    <!-- footer end -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>