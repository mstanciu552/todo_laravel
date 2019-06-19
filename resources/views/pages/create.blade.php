@extends('pages.index')

@section('content')
    {!! Form::open(['url' => '/']) !!}

        <div class="form-group">
            {{ Form::label('todo', 'Todo', ['class' => 'awesome']) }}
            {{ Form::text('todo', '', ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
