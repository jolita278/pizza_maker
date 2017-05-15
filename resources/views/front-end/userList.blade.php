@extends('front-end.core')

@section('list')
    <div class="container">
        <h2>Užsakymų sąrašas</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Picos padas</th>
                    <th>Sūris</th>
                    <th>Ingridientai</th>
                    <th>Komentarai</th>
                    <th>Peržiūrėti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pizzaOrders as $order)
                <tr>
                    <td>{{$order['pad_data']['name']}}</td>
                    <td>{{$order['cheese_data']['name']}}</td>
                    <td>
                    @foreach ($order['pizza_ingredients_connection_data'] as $toppings)
                            {{$toppings['ingredients_data']['name'] . ', '}}
                    @endforeach
                    </td>
                    <td>{{$order['description']}}</td>
                    <td><a href="{{route($routeShow, $order['id'])}}"
                           class="btn btn-primary btn-sm">Peržiūrėti</a>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection