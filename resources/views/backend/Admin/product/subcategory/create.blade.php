@extends('backend.layouts.master')
@section('title','Create')
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
                                            <h3 class="card-title float-left">Add Sub-Category</h3>
                                            <div class="float-right">
                                                <a href="{{route('admin.category.index')}}">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-backward"> </i>
                                                        Back
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.subcategory.store')}}" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">Sub-Category Name</label>
                                                    <input type="name" class="form-control" name="name" id="name" placeholder="Enter Department Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category_id">Category Name</label>
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="">Select one</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
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
