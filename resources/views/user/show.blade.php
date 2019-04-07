@extends('layout')

@section('content')
<div class="container">
    <h1>Ver usuario</h1>
    <div class="user-data">
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
    </div>
    <br>
    @if ($user->posts->count())
    <h3>Posts realizados por {{$user->name}}</h3>
    <div class="user-posts">
        <table class="posts">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection
