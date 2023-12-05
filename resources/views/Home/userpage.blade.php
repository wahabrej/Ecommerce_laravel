<!DOCTYPE html>
<html>
@include("home.style")

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include("Home.header");
        <!-- end header section -->
        <!-- slider section -->
        @include("Home.slider")
        <!-- end slider section -->
    </div>
    <!-- why section -->
    @include("Home.why")
    <!-- end why section -->

    <!-- arrival section -->
    @include("Home.arrivale")
    <!-- end arrival section -->

    <!-- product section -->
    @include("Home.product")
    <!-- end product section
     -->
    <!-- subscribe section -->
    @include("Home.subscribe")
    <!-- end subscribe section -->
    <!-- client section -->
    @include("Home.client")
    <!-- end client section -->
    <!-- footer start -->

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