@extends('front.layouts.master')

@section('con')

        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-right">تسجيل الدخول</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} text-right">
                            <label for="email" class="col-md-4 control-label">البريد الالكتروني</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} text-right">
                            <label for="password" class="col-md-4 control-label">كلمة السر</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox" text-right>
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    هل نسيت كلمة المرور؟
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
