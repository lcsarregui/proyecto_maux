@extends('layout')

@section('content')
    <h1>Crear un nuevo usuario</h1>
    @if ($errors->any())
        <div class="notification" style="background-color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/users">
        {{ csrf_field() }}
        <div>
            <label id="lbl_create_user_username" class="create_form_label" for="username">Username</label>
            <input type="text" name="username" placeholder="your username" value="{{ old('username') }}" >
        </div>
        <div>
            <label id="lbl_create_user_name" class="create_form_label" for="name">Name</label>
            <input type="text" name="name" placeholder="your name" value="{{ old('name') }}" >
        </div>
        <div>
            <label id="lbl_create_user_email" class="create_form_label" for="email">Mail</label>
            <input type="mail" name="email" placeholder="example@example.com" value="{{ old('email') }}" >
        </div>
        <div>
            <label id="lbl_create_user_password" class="create_form_label" for="password">Password</label>
            <input type="password" name="password" placeholder="your password" value="" >
        </div>
        <div>
            <button type="submit">Crear</button>
            <a href="/users">Cancelar</a>
        </div>
    </form>
@endsection
