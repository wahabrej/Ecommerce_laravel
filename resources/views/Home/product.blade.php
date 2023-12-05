<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>

        <div class="row">
            @foreach ($products as $product)

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_detail',$product->id)}}" class="option1">
                                Product Detail
                            </a>
                            <!-- <a href="home/" class="option2">
                                Buy Now
                            </a> -->
                            <form action="{{url('add_cart',$product->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"> <input  type="number" name="quantity" value="1" min="1"></div>

                                    <div class="col-md-4"> <input type="submit" value="Add to Cart" ></div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="img-box">
                        <img style="background-size: contain, cover;" src="/product/{{$product->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$product->title}}
                        </h5>
                        <br>
                        @if($product->discount_price !=null)
                        <h6>$
                            {{$product->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through;color:purple">$
                            {{$product->price}}
                        </h6>
                        @else
                        <h6>
                            <p>discount off</p>
                        </h6>
                        <h6 style="color:purple">$
                            {{$product->price}}
                        </h6>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach



        </div>

        <div class="d-felx justify-content-center" style="width:100%;margin:auto">
            <div style="padding:20px;width:100%;margin:auto" class="d-felx justify-content-center">
                {{ $products->links() }}
            </div>



        </div>
        <!-- <div class="btn-box">
               <a href="home/">
               View All products
               </a>
            </div> -->
    </div>
</section>