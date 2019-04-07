@extends('layout')

@section('content')
    <h1>Editar Usuario</h1>
    <form method="POST" action="/users/{{$user->id}}">
        @method('PATCH')
        @csrf
        <div>
            <label id="lbl_create_user_username" class="create_form_label" for="username">Usuario</label>
        <input type="text" name="username" placeholder="your username" value="{{$user->username}}">
        </div>
        <div>
            <label id="lbl_create_user_name" class="create_form_label" for="name">Nombre</label>
            <input type="text" name="name" placeholder="your name" value="{{$user->name}}">
        </div>
        <div>
            <label id="lbl_create_user_email" class="create_form_label" for="email">Mail</label>
            <input type="mail" name="email" placeholder="example@example.com" value="{{$user->email}}">
        </div>
        <div>
            <label id="lbl_create_user_password" class="create_form_label" for="password">Ingresar contraseña para confirmar los cambios</label>
            <input type="password" name="password" placeholder="" value="">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
        <div>
            <a href="/users">Cancelar</a>
        </div>
    </form>
    <form method="POST" action="/users/{{$user->id}}">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit">Borrar</button>
        </div>
    </form>
@endsection
