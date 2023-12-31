@extends('base')

@section('content')
    @include('widget.preloader')
    @include('widget.header')
    @include('widget.slider')
    @include('widget.schedule')
    @include('widget.video-profile')
    @include('widget.list-event')
    @include('widget.footer')
@endsection
