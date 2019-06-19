@extends('pages.index')


@section('content')
    <div class="jumbotron home">
        <h1 style="text-align: center">Home Page</h1>
        @if(Auth::check())
        <ul class="list-group">
                <li class="list-group-item mb-5">
                        {!! Form::open(['url' => '/todos']) !!}

                        <div class="form-group">
                            {{ Form::label('todo', 'Todo', ['class' => 'awesome']) }}
                            {{ Form::text('todo', '', ['class' => 'form-control']) }}
                        </div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                    {!! Form::close() !!}
                </li>
                @if(count($todos) > 0)
                    @foreach($todos as $todo)
                        <li class="list-group-item mb-5">
                            {{-- Edit button --}}
                            {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                <div class="form-group">
                                    {{ Form::label('todo', 'Todo', ['class' => 'awesome']) }}
                                    {{ Form::text('todo', '', ['class' => 'form-control', 'placeholder' => 'Edit this todo here']) }}
                                </div>
                                {{ Form::hidden('_method', 'PUT') }}
                                {{ Form::submit('Edit', ['class' => 'btn btn-primary m-auto', 'style' => 'display:block;']) }}
                            {!! Form::close() !!}


                            <p style="text-align:center;text-transform:uppercase;font-weight:700;font-size:2rem;" class="m-0 mt-5 mb-5">
                                {{ $todo->todo }}
                            </p>

                            {{-- Delete button --}}
                            {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'form-group']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('&times;', ['class' => 'btn btn-danger m-auto', 'style' => 'display:block;']) }}
                            {!! Form::close() !!}


                        </li>
                    @endforeach

                @else
                    <li class="list-group-item">Nothing to do yet!</li>
                @endif

            @else
                <div class="text-center mt-5">
                    <a href="/login" class="btn btn-primary mr-3">Login</a>
                    <a href="/register" class="btn btn-warning ml-3">Register</a>
                </div>
            @endif

        </ul>
    </div>

@endsection
