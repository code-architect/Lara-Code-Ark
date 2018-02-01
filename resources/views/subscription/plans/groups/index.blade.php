@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/plan_options.css') }}" />
    <div class="row">
            @include('subscription.plans.plans_partials.group_plan_options')
    </div>
@endsection
