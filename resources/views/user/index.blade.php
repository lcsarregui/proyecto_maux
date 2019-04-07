@extends('layout')

@section('content')
    <h1>Users</h1>
    <br>
    <div><a href="/users/create">Nuevo Usuario</a></div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        {{$user->username}}
                    </td>
                    <td>
                        <a href="/users/{{$user->id}}/edit">Editar/Borrar</a>
                    </td>
                    <td>
                        <a href="/users/{{$user->id}}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
