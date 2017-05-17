@extends('admin.core')

@section('content')
    <div class="container">
        <h2>Picos komponentų sąrašas</h2>
        <table class="table table-hover">
            <thead>
            <br/>
            <a href="{{route($routeNew)}}" class="btn btn-primary btn-lg">Naujas</a>
            <br/><br/>

            <tr>

                @foreach($list [0] as $key => $value)

                    <th>{{$key}}</th>

                @endforeach

            </tr>

            </thead>
            <tbody>
            @foreach ($list as $key => $record)
                <tr>
                    @foreach ($record as $key => $value)
                        <td>
                            {{$value}}
                        </td>

                    @endforeach

                    <td><a href="{{route($routeShowDelete, $record['id'])}}"
                           class="btn btn-primary btn-sm">Peržiūrėti</a>
                    </td>

                    <td><a href="{{route($routeEdit, $record['id'])}}" class="btn btn-info btn-sm">Koreguoti</a>
                    </td>

                    <td><a onclick="deleteItem('{{route($routeShowDelete, $record['id'])}}')"
                           class="btn btn-info btn-sm">Ištrinti</a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('scripts')

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {
            $.ajax({
                url: route,
                dataType: 'json',
                type: 'DELETE',
                success: function () {
                    alert('DELETED');
                },
                error: function () {
                    alert('ERROR');
                }
            });
        }

    </script>
@endsection
