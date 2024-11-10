@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Product') }}
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
                            <a class="btn btn-secondary" href="{{ route('product.show', $prevId) }}" role="button">Prev</a>
                            <a class="btn btn-success" href="{{ route('product.show', $nextId) }}" role="button">Next</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Count</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td><img width="35" src="{{ asset($data->image) }}"></td>
                                    <td>{{ $data->count }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('product.edit', $data->id) }}"
                                            role="button">Edit</a>

                                        <form action="{{ route('product.destroy', $data->id) }}" method="POST"
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
