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
                            <h3 class="card-title">DataTable with Categories</h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-success" href="{{ route('category.create') }}" role="button">Create</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
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
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $datas)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $datas->name }}</td>
                                        <td>{{ $datas->slug }}</td>
                                        <td>{{ $datas->description }}</td>
                                        <td><img width="40" src="{{ asset($datas->image) }}"></td>
                                        <td>
                                            @if ($datas->is_showin)
                                                <span class="badge badge-success">Showing</span>
                                            @else
                                                <span class="badge badge-danger">Hidden</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($datas->is_popular)
                                                <span class="badge badge-warning">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>
                                        {{-- <td>{{ $datas->meta_title }}</td>
                                        <td>{{ $datas->meta_description }}</td>
                                        <td>{{ $datas->meta_keywords }}</td> --}}
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('category.edit', $datas->id) }}"
                                                role="button">Edit</a>

                                            <a class="btn btn-info" href="{{ route('category.show', $datas->id) }}"
                                                target="_blank" role="button">View</a>

                                            <form action="{{ route('category.destroy', $datas->id) }}" method="POST"
                                                style="display: inline;">
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
