@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Home') }}
@endsection
@section('content')
    {{ App::getLocale() }}
@endsection

@section('title_page')
    {{ trans('main.Dashboard_home') }}
@endsection
