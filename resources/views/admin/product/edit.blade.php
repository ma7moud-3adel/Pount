@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Product') }}
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
            margin-bottom: 10px
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Product Info</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action=" {{ route('product.update', $data->id) }} " enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">name</label> <br>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ $data->name }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Price</label> <br>
                                        <input class="form-control" name="price" type="number"
                                            value="{{ $data->price }}">
                                    </div>
                                    <div class = "col">
                                        {{-- <label class="form-label">Size</label> <br>
                                        <input class="form-control" name="size" type="text"
                                            value="{{ old('size') }}"> --}}

                                        <label for="selectSize">Size</label>
                                        <select class="form-control" id="selectSize" name="size">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">description</label> <br>
                                        {{-- <textarea class="form-control c" name="description" id="editor" value="{{ $data->description }}" rows="3"></textarea> --}}
                                        <input class="form-control c" name="description" type="text"
                                            value="{{ $data->description }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col border rounded-lg p-2"><label class="form-label" for="file">Image_01</label>
                                        <br>
                                        <input type="file" name="image" id="file" required>
                                        <img src="{{ asset($data->image) }}" alt="" width="75">
                                    </div>
                                    <div class="col border rounded-lg p-2"><label class="form-label" for="file">Image_02</label>
                                        <br>
                                        <input type="file" name="image_0" id="file" required>
                                        <img src="{{ asset($data->image_0) }}" alt="" width="75">
                                    </div>
                                    <div class="col border rounded-lg p-2"><label class="form-label" for="file">Image_03</label>
                                        <br>
                                        <input type="file" name="image_1" id="file" required>
                                        <img src="{{ asset($data->image_1) }}" alt="" width="75">
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
    {{ trans('main.Product') }}
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
