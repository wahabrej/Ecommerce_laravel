<!DOCTYPE html>
<html>
@include("home.style")
<style>
    .center{
        margin:auto;
        width:50%;
        margin-top:20px;
    }
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
  align-item:center;
}
</style>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include("Home.header");
        <!-- end header section -->
        <!-- slider section -->
        @include("Home.slider")
        <!-- end slider section -->
    </div>
  <div class="center container d-flex justify-content-center"> 
  <table class="table">
  <thead>
    <tr class="table-success">
    
    
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
     
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $totalprice=0; ?>
    @foreach($cart as $cart)
    <tr>
      
      <td>{{$cart->title}}</td>
      <td>{{$cart->price}}</td>
      <td>{{$cart->quantity}}</td>
      <td><img style="width:100px" src="/product/{{$cart->image}}"></td>
      <td><a href="{{url('/remove_cart',$cart->id)}}" class="btn btn-secondary">Remove</a></td>
    </tr>
    <tr>
      <?php $totalprice=$totalprice+$cart->price; ?>
    
     
    </tr>
    @endforeach
    <tr>
      <td colspan="5" class="text-right" style="color:blue"> Total Price= $ {{$totalprice}}</td>
    
     
    </tr>

  </tbody>
  
</table>


  </div>
  <div class="container d-flex justify-content-center">
    <a href="{{url('cash_order')}}" class="btn btn-primary" style="margin-right:30px">Cash On Delivery</a>
    <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
</div>

    @include("Home.footer")

    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="home/https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="home/https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
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