@extends('layouts.app')

@section('content')
    <div class="registerLara">
        <div class="shadow">
            <h1 class="registrar">Cadastro</h1>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <label>Nome</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                @endif
                <label>E-mail</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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

                <label>Confirmar Senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="button">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
