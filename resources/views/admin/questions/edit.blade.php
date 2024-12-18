@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Questions') }}
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
                        <h3 class="card-title">Update Main Sitting</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body container p-3">
                        <form method="POST" action=" {{ route('question.update', $data->id) }} "
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="row">
                                    <div class = "col"><label class="form-label">Question</label> <br>
                                        <input class="form-control" name="question" type="text"
                                            value="{{ $data->question }}" maxlength="70">
                                    </div>
                                    <div class = "col"><label class="form-label">Answer</label> <br>
                                        <input class="form-control" name="answer" type="text"
                                            value="{{ $data->answer }}" maxlength="220">
                                    </div>
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
    {{ trans('main.Questions') }}
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
