@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/plan_options.css') }}" />
    <div class="row">

            {{--<ul class="list-group">--}}
                {{--@foreach($plans as $plan)--}}
                    {{--<li class="list-group-item" >--}}
                        {{--<a href="#">{{ $plan->name }}</a>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            @include('subscription.plans.plans_partials.plan_options')

    </div>
@endsection
