@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Blog') }}
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
                        <h3 class="card-title">Update Blog</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">Name</label> <br>
                                        <input class="form-control" name="name" type="text"
                                            value="{{ $blog->name }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Category</label> <br>
                                        <input class="form-control" name="category" type="text"
                                            value="{{ $blog->category }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Likes</label> <br>
                                        <input class="form-control" name="likes" type="number"
                                            value="{{ $blog->likes }}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">Text</label> <br>
                                        <textarea class="form-control c" name="text" rows="3">{{ $blog->text }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class = "col"><label class="form-label">Content</label> <br>
                                        <textarea class="form-control c" name="content" id="editor" rows="3">{!! $blog->content !!}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"><label class="form-label" for="file">Image</label> <br>
                                        <input type="file" name="image" id="file" required>
                                    </div>
                                    <div class = "col"><label class="form-label">Tag</label> <br>
                                        <input class="form-control" name="tag" type="text"
                                            value="{{ $blog->tag }}">
                                    </div>
                                    <div class = "col"><label class="form-label">Sub Tags</label> <br>
                                        <input class="form-control" name="sub_tag" type="text"
                                            value="{{ $blog->sub_tag }}">
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
    {{ trans('main.Blog') }}
@endsection

@section('js')
@endsection
