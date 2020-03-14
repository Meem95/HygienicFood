@extends('backend.layouts.master')
@section('title','Blog-Edit')
@push('css')

@endpush

@section('content')

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- Main content -->
                        <section class="content">
                            <div class="row">
                                <div class="col-12">
                                    <!-- general form elements -->
                                    <div class="card card-info card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title float-left">Update Blog Category</h3>
                                            <div class="float-right">
                                                <a href="{{route('admin.blog-post.index')}}">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-backward"> </i>
                                                        Back
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.blog-post.update',$post->id)}}" method="post">
                                            @csrf
                                            @method("PUT")
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Post Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="title">Category Title</label>
                                                    <select name="category_id" id="category_id" class="form-control select2">
                                                        @foreach($categories as $cat)
                                                            <option value="{{$cat->id}}" {{$cat->id == $post->category_id ? 'selected': ''}}>{{$cat->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Post Description</label>
                                                    <textarea type="text" class="form-control textarea" name="description" id="description" placeholder="Enter Post Title">{!! $post->description !!}</textarea>
                                                </div>
                                                <div class="text-left">
                                                    <img class="profile-user-img img-fluid"
                                                         src="{{asset('uploads/post/'.$post->image)}}"
                                                         alt="User profile picture">
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Post Image</label>
                                                    <input type="file" class="form-control-file" name="image" id="image">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>

    @push('js')
        <!-- DataTables -->

    @endpush
@endsection
