@extends('front-end.core')

@section('single')
    <div class="container">
        <h2>Užsakymas</h2>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Picos padas</th>
                <th>Sūris</th>
                <th>Ingridientai</th>
                <th>Komentarai</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$pizzaOrder['pad_data']['name']}}</td>
                    <td>{{$pizzaOrder['cheese_data']['name']}}</td>
                    <td>
                        @foreach ($pizzaOrder['pizza_ingredients_connection_data'] as $toppings)
                            {{$toppings['ingredients_data']['name'] . ', '}}
                        @endforeach
                    </td>
                    <td>{{$pizzaOrder['description']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection