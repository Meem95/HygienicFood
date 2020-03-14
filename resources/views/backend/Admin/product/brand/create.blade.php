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
                        <div class="card-header">
                            <h3 class="card-title">Create New Brands</h3>
                        </div>
                        <!-- Main content -->
                        <section class="content">
                            <div class="row">
                                <div class="col-12">
                                    <!-- general form elements -->
                                    <div class="card card-info card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title float-left">Add Brands</h3>
                                            <div class="float-right">
                                                <a href="{{route('admin.brand.index')}}">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-backward"> </i>
                                                        Back
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" action="{{route('admin.brand.store')}}" method="post">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">Brands Name</label>
                                                    <input type="name" class="form-control" name="name" id="name" placeholder="Enter brand Name">
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
