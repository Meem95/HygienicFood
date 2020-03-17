@extends('backend.layouts.master')
@section('title','Blog-Category')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endpush

@section('content')


    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Post</h3>
                            <div class="float-right">
                                <a href="{{route('admin.blog-post.create')}}">
                                    <button class="btn btn-success">
                                        <i class="fa fa-plus-circle"></i>
                                        Add
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Blog-Post Name</th>
                                    <th>Category name</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogPosts as $key=>$post)
                                    @php
                                    $category=\App\BlogCategory::find($post->blog_category_id);

                                    @endphp
                                    <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$post-> title}}</td>
                                    <td>{{$category->name}}</td>
                                    <td> <img src="{{asset('uploads/post/'.$post->image)}}" width="80" height="40" alt=""> </td>

                                    <td>
                                        <a class="btn btn-info waves-effect" href="{{route('admin.blog-post.edit',$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger waves-effect" type="button"
                                                onclick="deleteCat({{$post->id}})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-{{$post->id}}" action="{{route('admin.blog-post.destroy',$post->id)}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>

                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#Id</th>
                                    <th>Blog-Post Name</th>
                                    <th>Category name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
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
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
        //sweet alert
        function deleteCat(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your Data is save :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
@endsection
