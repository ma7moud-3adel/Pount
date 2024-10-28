<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column m-3">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center mt-5 mb-5">
                        <div class="mb-5"><img width="250" src="{{ asset($data->image) }}" alt=""></div>
                        <p class="lead text-gray-800mb-1">{{ $data->name }}</p>
                        <p class="text-gray-500 mb-3">{{ $data->description }}</p>
                        <a href="{{ route('home') }}">&larr; Back to home</a>

                        <div class="my-3">
                            {{-- @foreach ($comment as $c)
                                <form action="">
                                    <label>{{ $c->user_name ?? 'Anonymous' }}</label>
                                    <input type="text" class="form-control"
                                        value="{{ $c->content }}"@disabled(true)>
                                </form>
                            @endforeach --}}

                            <form method="POST" action="{{ route('comment.store') }}" class="d-flex">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                                <input type="text" name="content" class="form-control"
                                    placeholder="Enter Your comment">
                                <button class="btn btn-success">Submit</button>
                            </form>
                        </div>

                        <div class="border rounded-lg p-3">
                            @foreach ($data->comments as $comment)
                                <form action="">
                                    <label for="comment">{{ $comment->user_name ?? 'Anonymous' }}</label>
                                    <input type="text" class="form-control" id="comment"
                                        value="{{ $comment->content }}" disabled>
                                </form>
                            @endforeach

                            @if ($data->comments->isEmpty())
                                <p>لا توجد تعليقات متاحة.</p>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
