@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Category') }}
@endsection
@section('css')
    <style>
        .form-label {
            color: #777;
            font-size: 18px;
            letter-spacing: 1.5px;
        }

        .check {
            border-radius: 15px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .c {
            margin-bottom: 10px
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Category Info</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action=" {{ route('category.update', $data->id) }} "
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">name</label> <br>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ $data->name }}">
                                    </div>
                                    <div class = "col"><label class="form-label">slug</label> <br>
                                        <input class="form-control" name="slug" type="text"
                                            value="{{ $data->slug }}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">description</label> <br>
                                        <input class="form-control c" name="description" type="text"
                                            value="{{ $data->description }}">
                                    </div>
                                    <div class = "col check"><label class="form-label">Status</label> <br>
                                        <input class="form-control" name="is_showin" type="checkbox"
                                            @if ($data->is_showin) checked @endif>
                                    </div>
                                    <div class = "col check"><label class="form-label">Popular</label> <br>
                                        <input class="form-control" name="is_popular" type="checkbox"
                                            @if ($data->is_popular) checked @endif>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">Meta Title</label> <br>
                                        <input class="form-control" name="meta_title" type="text"
                                            value="{{ $data->meta_title }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Meta Description</label> <br>
                                        <input class="form-control" name="meta_description" type="text"
                                            value="{{ $data->meta_description }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Meta Keywords</label> <br>
                                        <input class="form-control" name="meta_keywords" type="text"
                                            value="{{ $data->meta_keywords }}">
                                    </div>
                                </div>

                                <div><label class="form-label" for="file">Image</label> <br>
                                    <input type="file" name="image" id="file" required>
                                </div>

                            </div>
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('title_page')
    {{ trans('main.Category') }}
@endsection

@section('js')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            // });
        });
    </script>
@endsection
