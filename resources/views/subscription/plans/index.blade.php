@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="list-group">
                @foreach($plans as $plan)
                    <li class="list-group-item" >
                        <a href="#">{{ $plan->name }}</a>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
@endsection
