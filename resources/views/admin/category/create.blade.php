@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Category') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add New Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="POST" action="{{ route('category.store') }}"enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                    <label class="form-label">slug</label>
                    <input name="slug" type="text" class="form-control" value="{{ old('slug') }}">
                    <label class="form-label">description</label>
                    <input name="description" type="text" class="form-control" value="{{ old('description') }}">
                    <label for="body">Image</label>
                    <input type="file" name="image" id="body" value="" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">

                    <label class="form-label">Status</label>
                    <input name="is_showin" type="checkbox"> <br>
                    <label class="form-label">Popular</label>
                    <input name="is_showin" type="checkbox"> <br>
                    <label class="form-label">Meta Title</label>
                    <input name="meta_title" type="text" class="form-control" value="{{ old('meta_title') }}">
                    <label class="form-label">Meta Description</label>
                    <input name="meta_description" type="text" class="form-control"
                        value="{{ old('meta_description') }}">
                    <label class="form-label">Meta Keywords</label>
                    <input name="meta_keywords" type="text" class="form-control" value="{{ old('meta_keywords') }}">
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
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
