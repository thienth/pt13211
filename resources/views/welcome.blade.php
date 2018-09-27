@extends('layouts.client.main')
@section('content')
@php
    use Carbon\Carbon;
@endphp
<div class="container">
    <div class="row">
        <div class="post-list">
            @foreach ($posts as $p)

            @php
                $date = new Carbon($p->created_at);
                $created_at = $date->toFormattedDateString();
            @endphp
                
            <div class="col-md-6">
                <div class="post-single">
                    <ul class="post-cat">
                        <li><a href="#">interface</a>
                        </li>
                        <li><a href="#">standard</a>
                        </li>
                    </ul>
                    <div class="post-img">
                        <a href="#">
                            <img src="{{asset('massive/assets/img/post/p4.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="post-desk">
                        <h4 class="text-uppercase">
                            <a href="blog-single.html">{{ $p->title }}</a>
                        </h4>
                        <div class="date">
                            <a href="#" class="author">{{$p->author}}</a> {{$created_at}}
                        </div>
                        <p>
                            {{$p->short_desc}}
                        </p>
                        <a href="blog-single.html" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="col-md-12">
                <!--pagination-->
                <div class="text-center">
                    {{$posts->links()}}
                </div>
                <!--pagination-->
            </div>

        </div>
    </div>
</div>

@endsection