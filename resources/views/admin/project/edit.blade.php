@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Project') }}
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
            margin-bottom: 10px;
            margin-top: 10px
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Project Card</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('project.admin.update', $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="row mb-4 d-flex align-items-center justify-content-center">
                                    <div class = "col"><label class="form-label">title</label> <br>
                                        <input class="form-control" name="title" type="text"
                                            value="{{ $data->title }}">
                                    </div>
                                    <div class="col border rounded-lg p-2"><label class="form-label" for="file">Image :
                                        </label>
                                        <input type="file" name="image" id="file" required>
                                        <img src="{{ asset($data->image) }}" alt="" width="75">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">description</label> <br>
                                        {{-- <textarea class="form-control c" name="description" id="editor" value="{{ $data->description }}" rows="3"></textarea> --}}
                                        <input class="form-control c" name="description" type="text"
                                            value="{{ $data->description }}">
                                    </div>
                                </div>

                                {{-- <div class="col" id="editor">
                                        <p></p>
                                    </div> --}}

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
    {{ trans('main.Project') }}
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
