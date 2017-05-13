@extends('admin.core')

@section('adminIngredientsEdit')
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
    <div class="container">
        <h2>Koreguoti įrašą</h2>

        {!!Form::open(['url' => route($routeEdit, $item['id'])]) !!}
        <br>
        {{Form::label('name', 'Ingridiento pavadinimas')}}<br>
        {{Form::text('name', $item['name'])}}

        <br>
        {{Form::label('calories', 'Kalorijos')}}<br>
        {{Form::text('calories',$item['calories'])}}

        <br>
        <br>

        {{Form::submit('Patvirtinti') }} {{--TODO:: button reset--}}

        {!!Form::close() !!}

    </div>
@endsection


