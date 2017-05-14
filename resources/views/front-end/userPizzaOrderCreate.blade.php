@extends('front-end.core')
@section('pizzaOrderCreate')

{!! Form::open(['url' => route('app.pizzaOrders.create')]) !!}
{{Form::label('base', 'Picos padas:')}}
<br/>
{{Form::select('base', $pad)}}
<br/>
<br/>
{{Form::label('base', 'Sūris:')}}
<br/>
{{Form::select('cheese', $cheese)}}
<br/>
{{Form::label('ingredients', 'Ingridientai (ne daugiau, negu 3):')}}
<br/>
@foreach($ingredients as $key => $value)
    {{Form::checkbox('ingredients[]', $key)}}{{$value}}
    <br/>
@endforeach
<br/>
{{Form::label('description', 'Komentarai:')}}
<br/>
{{Form::textarea('description', null, ['size' => '30x5'])}}

<br/>
{{Form::submit('Užsakyti')}}
{!! Form::close() !!}
@endsection

