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
                        <h3 class="card-title">Update Main Sitting</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body container p-3">
                        <form id="contactForm" method="POST" action="{{ route('sitting.update', $data->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <!-- Name input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" type="text" value="Name" disabled />
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" name="name" id="name" type="text"
                                                    data-sb-validations="required" value="{{ $data->name }}" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email address input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Email" disabled />
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" name="email" id="email" type="text"
                                                    placeholder="Email *" data-sb-validations="required,email"
                                                    value="{{ $data->email }}" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                            required.
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Phone number input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Phone Number" disabled />
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" name="phone_number" id="phone"
                                                    type="tel" placeholder="Phone *" data-sb-validations="required"
                                                    value="{{ $data->phone_number }}" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                            required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Phone number input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Address 01" disabled />
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" name="address_1" id="address" type="text"
                                                    placeholder="Address *" data-sb-validations="required"
                                                    value="{{ $data->address_1 }}" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                            required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Phone number input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Address 02" disabled />
                                            </div>
                                            <div class="col-8">
                                                <input class="form-control" name="address_2" id="address" type="text"
                                                    placeholder="Address *" data-sb-validations="required"
                                                    value="{{ $data->address_2 }}" />
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                            required.</div>
                                    </div>
                                    <div class="form-group form-group-textarea">
                                        <!-- Message input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Company Message" disabled />
                                            </div>
                                            <div class="col-8">
                                                <textarea class="form-control" name="company_message" id="message" placeholder="Message *"
                                                    data-sb-validations="required" rows="3">{{ $data->company_message }}</textarea>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                            required.
                                        </div>
                                    </div>
                                    <div class="form-group form-group-textarea">
                                        <!-- Message input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="About" disabled />
                                            </div>
                                            <div class="col-8">
                                                <textarea class="form-control" name="about" id="message" placeholder="About Company *"
                                                    data-sb-validations="required" rows="3">{{ $data->about }}</textarea>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                            required.
                                        </div>
                                    </div>
                                    <div class="form-group form-group-textarea">
                                        <!-- Message input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Code Pixel" disabled />
                                            </div>
                                            <div class="col-8">
                                                <textarea class="form-control" name="code_pixel" id="message" placeholder="About Company *"
                                                    data-sb-validations="required" rows="3">{{ $data->code_pixel }}</textarea>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                            required.
                                        </div>
                                    </div>
                                    <div class="form-group form-group-textarea">
                                        <!-- Message input-->
                                        <div class="row">
                                            <div class="col-4">
                                                <input class="form-control" value="Google Tag" disabled />
                                            </div>
                                            <div class="col-8">
                                                <textarea class="form-control" name="google_tag" id="message" placeholder="About Company *"
                                                    data-sb-validations="required" rows="3">{{ $data->google_tag }}</textarea>
                                            </div>
                                        </div>
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
