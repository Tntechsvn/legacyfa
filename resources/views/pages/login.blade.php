@extends('master')

@section('content')
    <div class="maincontent">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="POST" action="{{ route('login') }}">
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Sign In') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
