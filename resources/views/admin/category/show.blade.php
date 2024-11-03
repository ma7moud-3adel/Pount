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
                            <h3 class="card-title">Category Details Info</h3>
                        </div>
                        <div>
                            @php
                                $id = (int) $data->id;
                                $prevId = $id - 1;
                                $nextId = $id + 1;
                            @endphp
                            <a class="btn btn-secondary" href="{{ route('category.show', $prevId) }}" role="button">Prev</a>
                            <a class="btn btn-success" href="{{ route('category.show', $nextId) }}" role="button">Next</a>
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
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td><img src="{{ asset($datas->image) }}"></td>
                                    {{-- <td>
                                        @if ($data->is_showin)
                                            <span class="badge badge-success">Showing</span>
                                        @else
                                            <span class="badge badge-danger">Hidden</span>
                                        @endif
                                    </td> --}}
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('category.edit', $data->id) }}"
                                            role="button">Edit</a>

                                        <form action="{{ route('category.destroy', $data->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf()
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"
                                                onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card border-info mt-3 text-center">
                            <div class="card-header">Details</div>
                            <div class="card-body text-info">
                                <div style="height: 50px">
                                    <img src="{{ asset('assets/image' . session('image')) }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <div class="row mb-4">
                                                            <div class = "col"><label class="form-label">name</label> <br>
                                                                <input class="form-control" name="name" type="text"
                                                                    value="{{ $data->name }}"disabled>
                                                            </div>
                                                            <div class = "col"><label class="form-label">slug</label> <br>
                                                                <input class="form-control" name="slug" type="text"
                                                                    value="{{ $data->slug }}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class = "col"><label
                                                                    class="form-label">description</label> <br>
                                                                <input class="form-control c" name="description"
                                                                    type="text"
                                                                    value="{{ $data->description }}"disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <div class="row mb-4">
                                                            <div class = "col"><label class="form-label">Meta Title</label>
                                                                <br>
                                                                <input class="form-control" name="meta_title" type="text"
                                                                    value="{{ $data->meta_title }}"disabled>
                                                            </div>
                                                            <div class = "col"><label class="form-label">Meta
                                                                    Keywords</label> <br>
                                                                <input class="form-control" name="meta_keywords"
                                                                    type="text"
                                                                    value="{{ $data->meta_keywords }}"disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class = "col"><label class="form-label">Meta
                                                                    Description</label> <br>
                                                                <input class="form-control" name="meta_description"
                                                                    type="text" value="{{ $data->meta_description }}"
                                                                    disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $data->created_at }}
                            </div>
                        </div>
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
