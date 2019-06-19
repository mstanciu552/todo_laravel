@extends('index')

@section('content')
    <a href="/" class="btn btn-default">&larr;Go Back</a>
    <h1>{{ $todo->todo }}</h1>
@endsection
