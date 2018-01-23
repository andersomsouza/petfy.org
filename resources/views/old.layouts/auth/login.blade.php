@extends('layouts.app')

@section('content')
    <div class="bgLoginFormLogin">
        <div class="shadow">
            <div class="loginContainer">
                <h1 class="login">Login</h1>
            </div>
            <form class="formLogin" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                        <label>E-mail</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <label>Senha</label>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="button">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
            <div class="signupContainer">
                <p>Ainda não possui <uma></uma> conta?</p>
                <h1 class="cadastro"><a href="/register">Cadastre-se!</a></h1>
            </div>
        </div>
    </div>
@endsection
