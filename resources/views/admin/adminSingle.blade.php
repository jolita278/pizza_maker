@extends('admin.core')

@section('adminSingle')
    <table class="table table-condensed">
        <thead>
        <br>
        </thead>
        <tbody>

        @foreach($single as $key => $value)
            <tr><td>{{$key}} </td>
                <td> {{$value}}</td>
        @endforeach

            </tr>
            <a href="{{route($routeEdit, $single['id'])}}">
                <button>Koreguoti</button>
            </a>
            <a onclick="deleteItem('{{route($routeShowDelete, $single['id'])}}')">
                <button>Ištrinti</button>
            </a>
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
