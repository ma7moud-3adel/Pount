@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Category') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex align-center justify-content-between">
            <h3 class="card-title">DataTable with default features</h3>
            <a class="btn btn-outline-success" href="{{ route('category.create') }}" role="button">Create</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table text-center mt-3">
                <thead>
                    <tr>
                        {{-- // (`name`, `slug`, `description`, `image`, `is_showin`, `is_popular`, `meta_title`, `meta_description`, `meta_keywords`) --}}
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Popular</th>
                        <th scope="col">meta Title</th>
                        <th scope="col">meta Description</th>
                        <th scope="col">meta Keywords</th>
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
                            <td>{{ $datas->image }}</td>
                            <td>{{ $datas->is_showin }}</td>
                            <td>{{ $datas->is_popular }}</td>
                            <td>{{ $datas->meta_title }}</td>
                            <td>{{ $datas->meta_description }}</td>
                            <td>{{ $datas->meta_keywords }}</td>
                            <td>
                                <a class="btn btn-info" href="" target="_blank" role="button">View</a>

                                <a class="btn btn-primary" href="" role="button">Edit</a>

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
