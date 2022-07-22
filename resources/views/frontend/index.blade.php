@extends('layouts.app')
@section('title', 'Blog Website By Minh Hieu')
@section('meta_description', 'Blog Website By Minh Hieu')
@section('meta_keyword', 'Blog Website By Minh Hieu')
@section('content')
    <div class="bg-success py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach ($category_all as $cate)
                            <div class="item">
                                <a href="{{ url('tutorial/' . $cate->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img width="50" src="{{ asset('uploads/category/' . $cate->image) }}"
                                            alt="Image">
                                        <div class="card-body text-center">
                                            <h4 class="text-dark">{{ $cate->name }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 bg-gray">
        <div class="container">
            <div class="border text-center p-3">
                <h3>Advertise here</h3>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Minh Hieu Blog</h4>
                    <div class="underline"></div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis totam, illum dolore officia
                        ab, minima voluptatibus vel delectus odio harum, esse explicabo fugit consectetur magnam sit hic
                        accusamus vitae?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt debitis totam, illum dolore officia
                        ab, minima voluptatibus vel delectus odio harum, esse explicabo fugit consectetur magnam sit hic
                        accusamus vitae?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Category List</h4>
                    <div class="underline"></div>

                </div>

                @foreach ($category_all as $all_cate_item)
                    <div class="col-md-3">
                        <div class="card card-body mb-3">
                            <a href="{{ url('tutorial/' . $all_cate_item->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0">{{ $all_cate_item->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>

                </div>
                <div class="col-md-8">
                    @foreach ($latest_post as $latest_post_item)
                        <div class="card card-body bg-gray shadow mb-3">
                            <a href="{{ url('tutorial/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}"
                                class="text-decoration-none">
                                <h5 class="text-dark mb-0">{{ $latest_post_item->name }}</h5>
                            </a>
                            <h6>Posted On: {{$latest_post_item->created_at->format('d-m-Y')}}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border text-center p-3">
                        <h3>Advertise here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
