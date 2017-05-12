@extends('admin.core')

@section('adminIngredientsCreate')
    @if(isset($success_message))

        @foreach($success_message as $message)
            <div style="background:green; color:white"> {{$message}}!</div>
        @endforeach
    @endif

    @if(isset($error))

        @foreach($error as $err)
            <div style="background:red; color:white"> {{$err}}!</div>
        @endforeach

    @endif

    {!! Form::open(['url' => route($route)]) !!}
    <br>
    {{ Form::label('name', 'Pavadinimas')}}<br>
    {{Form::text('name')}}

    <br>
    {{ Form::label('calories', 'Kalorijos')}}<br>
    {{Form::text('calories')}}

    <br>
    <br>

    {{ Form::submit('Patvirtinti') }} {{--TODO:: button reset--}}

    {!! Form::close() !!}
@endsection