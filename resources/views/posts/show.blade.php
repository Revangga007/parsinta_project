@extends('layouts.app')

@section('title',$post->title)

@section('content')
    <div class="container">
        {{$post->title}}
    </div>
@endsection