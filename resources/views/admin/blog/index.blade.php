@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Blog') }}
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
                            <h3 class="card-title">Blogs DataTable</h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-success" href="{{ route('blog.create') }}" role="button">Add</a>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- /.card-body -->
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col"># of Likes</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @php
                                    use Carbon\Carbon;
                                @endphp
                                @foreach ($data as $blog)
                                    <tr>
                                        @php
                                            $createdDate = Carbon::parse($blog->created_at);
                                            $day = $createdDate->day;
                                            $month = $createdDate->format('F');
                                            $year = $createdDate->year;
                                            $fullDate = $createdDate->format('F j, Y');
                                        @endphp
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $blog->name }}</td>
                                        <td>{{ $blog->category }}</td>
                                        <td><img width="40" src="{{ asset($blog->image) }}"></td>
                                        <td>{!! $blog->content !!}</td>
                                        <td>{{ $blog->tag }}</td>
                                        <td>{{ $blog->likes }}</td>
                                        <td>{{ $fullDate }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('blog.edit', $blog->id) }}"
                                                role="button">Edit</a>

                                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf()
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</button>
                                            </form>

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
    {{ trans('main.Blog') }}
@endsection

@section('js')
@endsection
