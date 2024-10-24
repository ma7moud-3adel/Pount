@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Sitting') }}
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
                        <h3 class="card-title">All Sittings</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $datas)
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{ $i++ }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td scope="col">{{ $datas->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <td scope="col">{{ $datas->email }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Phone</th>
                                        <td scope="col">{{ $datas->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Address</th>
                                        <td scope="col">{{ $datas->address }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Message</th>
                                        <td scope="col">{{ $datas->company_message }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">About</th>
                                        <td scope="col">{{ $datas->about }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">
                                            <a class="btn w-25 btn-primary" href="{{ route('sitting.edit', $datas->id) }}"
                                                role="button">Edit</a>
                                        </th>
                                    </tr>
                                </tfoot>
                            @endforeach
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
    {{ trans('main.Sitting') }}
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
