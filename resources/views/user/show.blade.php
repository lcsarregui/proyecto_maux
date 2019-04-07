@extends('layout')

@section('content')
    <h1>Ver usuario</h1>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Name</td>
                <td>Mail</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->username}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/users/{{$user->id}}/edit">Editar</a>
    <a href="/users">Volver a Usuarios</a>
@endsection
