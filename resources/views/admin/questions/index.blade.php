@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Questions') }}
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
                            <h3 class="card-title">Questions</h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-success" href="{{ route('question.create') }}" role="button">Add</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Questions</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($data as $data)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $data->question }}</td>
                                        <td>{{ $data->answer }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('question.edit', $data->id) }}"
                                                role="button">Edit</a>
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
    {{ trans('main.Questions') }}
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
