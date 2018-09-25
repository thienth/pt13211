<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from massive.markup.themebucket.net/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:54:46 GMT -->
<head>
    <meta charset="utf-8">
    <title>Blog grid 2</title>
    
    @include('layouts.client._share.top-asset')
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        @include('layouts.client._share.header')

        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase">Blog Listing grid - 2 </h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="#">Blog</a>
                    </li>
                    <li class="active">Blog Listing grid</li>
                </ol>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                @yield('content')
            </div>


        </section>
        <!--body content end-->

        @include('layouts.client._share.footer')

    </div>


    @include('layouts.client._share.bottom-asset')
</body>


<!-- Mirrored from massive.markup.themebucket.net/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:54:46 GMT -->
</html>
