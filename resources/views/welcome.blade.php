@extends('layouts.main')
@section('custom-style')
    <style type="text/css">
        *{
            color: red;
        }
    </style>
@endsection
@section('content')
@include('_share.slide')

<div id="product">
    <div class="container">
        <div class="tittle-product">
            <h2>Sản phẩm mới</h2>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product4.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>

            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product2.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product1.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product4.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product3.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product4.jpg') }}" alt="">
            </div>
            <a class="title-name">Bánh nha</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>

    </div>
</div>
<div id="hot-product">
    <div class="container">
        <div class="tittle-product">
            <h2>Sản phẩm bán chạy</h2>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot1.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot2.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot3.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot4.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot5.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="img-height">
                <img src="{{ asset('img/product-hot1.jpg') }}" alt="">
            </div>
            <a class="title-name">Kẹo dẻo</a>
            <div class="text-center">
                <a class="promotional">100.000Đ</a>
            </div>
            <div class="footer-product">
                <a href="#" class="details">Xem chi tiết</a>
                <a href="#" class="buying">Mua hàng</a>
            </div>
        </div>

    </div>
</div>
@endsection

@section('js')
    
@endsection