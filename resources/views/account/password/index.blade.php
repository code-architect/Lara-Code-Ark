@extends('account.layout.default')

@section('account.content')

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('account.password.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('password_current')?' has-error':'' }}">
                    <label for="password_current" class="control-label">Current Password</label>
                    <input type="password" name="password_current" id="password_current" class="form-control">

                    @if($errors->has('password_current'))
                        <spam class="help-block"><strong>{{ $errors->first('password_current') }}</strong></spam>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password')?' has-error':'' }}">
                    <label for="password" class="control-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control">

                    @if($errors->has('password'))
                        <spam class="help-block"><strong>{{ $errors->first('password') }}</strong></spam>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation')?' has-error':'' }}">
                    <label for="password_confirmation" class="control-label">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

                    @if($errors->has('password_confirmation'))
                        <spam class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></spam>
                    @endif
                </div>



                <button type="submit" class="btn btn-default">Change Password</button>

            </form>
        </div>
    </div>

@endsection
