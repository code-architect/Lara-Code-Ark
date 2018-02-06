@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/subscription.css') }}" />
    <div class="row">

        @include('subscription.subscription_partial.subscription')
    </div>
@endsection
