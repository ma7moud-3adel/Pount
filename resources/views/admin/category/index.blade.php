@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Category') }}
@endsection
@section('css')
    <style>
        .card-header::after {
            display: none;
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-success" href="{{ route('category.create') }}" role="button">Create</a>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    {{-- // (`name`, `slug`, `description`, `image`, `is_showin`, `is_popular`, `meta_title`, `meta_description`, `meta_keywords`) --}}
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Popular</th>
                                    {{-- <th scope="col">meta Title</th>
                                    <th scope="col">meta Description</th>
                                    <th scope="col">meta Keywords</th> --}}
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                    <tr>
                                        <th scope="row">{{ $datas->id }}</th>
                                        <td>{{ $datas->name }}</td>
                                        <td>{{ $datas->slug }}</td>
                                        <td>{{ $datas->description }}</td>
                                        {{-- <td>{{ $datas->image }}</td> --}}
                                        <td><img src="{{ asset('assets/image' . session('image')) }}"></td>
                                        {{-- <td><img src="{{ asset($datas->image) }}"></td> --}}
                                        <td>{{ $datas->is_showin }}</td>
                                        <td>{{ $datas->is_popular }}</td>
                                        {{-- <td>{{ $datas->meta_title }}</td>
                                        <td>{{ $datas->meta_description }}</td>
                                        <td>{{ $datas->meta_keywords }}</td> --}}
                                        <td>
                                            <a class="btn btn-primary" href="" role="button">Edit</a>

                                            <a class="btn btn-info" href="" target="_blank" role="button">View</a>

                                            <form action="" method="POST" style="display: inline;">
                                                @csrf()
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        });
    </script>
@endsection
