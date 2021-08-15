@extends('0 vacation.layout')

@section('link')

@endsection

@section('content')
    @include('flash')
    @include('0 vacation.section.call_to_action')
    @include('0 vacation.section.services',[$services])
    {{-- @include('0 vacation.section.room') --}}
    {{-- @include('0 vacation.section.feedback') --}}
    @include('0 vacation.section.offer',[$offers])
    @include('0 vacation.section.banner')
    @include('0 vacation.section.bloglist',[$posts])

     @foreach ($services as $service)
        @include('0 vacation.modal.modal',['title'=>$service->title, 'id'=>$service->id,'content'=>$service->content])
    @endforeach
    @include('0 vacation.modal.modal-lg',['title'=>'Postuer', 'id'=>'postuler','content'=>'0 vacation.modal.postuler'])

@endsection

@section('script')

@endsection
