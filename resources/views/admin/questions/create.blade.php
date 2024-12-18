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
                        <form id="contactForm" method="POST" action="{{ route('question.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group form-group-textarea">
                                        <!-- Message input-->
                                        <div class="row">
                                            <div class = "col"><label class="form-label">Question</label> <br>
                                                <input class="form-control" name="question" type="text"
                                                    value="{{ old('question') }}" maxlength="70">
                                            </div>
                                            <div class = "col"><label class="form-label">Answer</label> <br>
                                                <input class="form-control" name="answer" type="text"
                                                    value="{{ old('answer') }}" maxlength="220">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center text-white mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="text-center"><button class="btn btn-primary btn-xl w-50 text-uppercase"
                                    id="submitButton" type="submit">Submit</button></div>
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
