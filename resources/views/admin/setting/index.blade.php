@extends('layouts.master')
@section('title', 'Blog Dashboard')
@section('content')
    <div class="container-fluid px-4">
        <div class="row mt-3">
            <div class="container">
                <div class="col-md-12">
                    @if (session('message'))
                        <h4 class="alert alert-warning">{{ session('message') }}</h4>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h1>Website Setting</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Website name</label>
                                    <input type="text" name="website_name"
                                        @if ($setting) value="{{ $setting->website_name }}" @endif
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Website logo</label>
                                    <input type="file" name="website_logo" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Website Favicon</label>
                                    <input type="file" name="website_favicon" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea rows="3" name="description" class="form-control"></textarea>
                                </div>

                                <h4>SEO - Meta Tags</h4>
                                <div class="mb-3">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Meta Keyword</label>
                                    <textarea rows="3" name="meta_keyword" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Meta Description</label>
                                    <textarea rows="3" name="meta_description" class="form-control"></textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
