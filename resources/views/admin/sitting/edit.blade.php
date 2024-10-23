@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Sitting') }}
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
                        <form id="contactForm" method="POST" action="{{ route('sitting.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row d-flex align-items-center mb-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <!-- Name input-->
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Your Name *" data-sb-validations="required"
                                            value="{{ $data->name }}" />
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email address input-->
                                        <input class="form-control" name="email" d="email" type="email"
                                            placeholder="Your Email *" data-sb-validations="required,email"
                                            value="{{ $data->email }}" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                            required.
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                        </div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Phone number input-->
                                        <input class="form-control" name="phone_number" id="phone" type="tel"
                                            placeholder="Your Phone *" data-sb-validations="required"
                                            value="{{ $data->phone_number }}" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                            required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-textarea mb-md-0">
                                        <!-- Message input-->
                                        <textarea class="form-control" name="about" id="message" placeholder="Your Message *" data-sb-validations="required"
                                            rows="5">{{ $data->about }}</textarea>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                            required.
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
                            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton"
                                    type="submit">Submit</button></div>
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
    {{ trans('main.Sitting') }}
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
