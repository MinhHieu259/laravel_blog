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
@endsection
