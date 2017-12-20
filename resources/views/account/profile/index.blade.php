@extends('account.layout.default')

@section('account.content')

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('account.profile.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', auth()->user()->name) }}">
                </div>

                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', auth()->user()->email) }}">
                </div>

                <button type="submit" class="btn btn-default">Update</button>

            </form>
        </div>
    </div>

@endsection
