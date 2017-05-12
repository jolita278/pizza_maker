@extends('admin.core')

@section('content')

    <table class="table table-condensed">
        <thead>
        <br/>
        <a href="{{route($routeNew)}}">
                <button>Naujas</button>
            </a><br/><br/>

        <tr>

            @foreach($list [0] as $key => $value)

                <th>{{$key}}</th>

            @endforeach
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
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

                <td><a href="{{route($routeShowDelete, $record['id'])}}">
                        <button>Peržiūrėti</button>
                    </a></td>

                <td><a href="{{route($routeEdit, $record['id'])}}">
                        <button>Koreguoti</button>
                    </a></td>

                <td><a onclick="deleteItem('{{route($routeShowDelete, $record['id'])}}')">
                        <button>Ištrinti</button>
                    </a></td>
            </tr>

        @endforeach

        </tbody>
    </table>

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
                dataType : 'json',
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
