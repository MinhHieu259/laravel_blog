@extends('layouts.master')
@section('title', 'Create Post')
@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Add Posts
                <a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($category as $cateitem)
                            <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
                        @endforeach
                       
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input name="name" type="text" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input name="slug" type="text" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <input name="description" type="text" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input name="yt_iframe" type="text" class="form-control"/>
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input name="meta_title" type="text" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                  <textarea name="meta_Description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                  <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                </div>

                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" />
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary float-end">Save Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection