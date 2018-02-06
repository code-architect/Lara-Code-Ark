
    <div class="offer">
        <div class="row text-center section">
            <h2 class="labels">VARSITY STUDIOS INC.</h2>
            <h1 class="values">${{ $plan_data->price }}</h1>
            <h2 class="labels">TOTAL AMOUNT</h2>
        </div>
        <div class="row section">
            <div class="col-xs-6 right-border">
                <h2 class="text-center values no-pad">3.9%</h2>
                <h2 class="text-center labels no-pad">INTEREST RATE</h2>
            </div>
            <div class="col-xs-6">
                <h2 class="values text-center no-pad">15%</h2>
                <h2 class="labels no-pad text-center">APR</h2>
            </div>
        </div>
        <div class="row section">
            <div class="col-xs-4">
                <h2 class="labels text-left">LOAN TERM</h2>
            </div>
            <div class="col-xs-8">
                <h2 class="values-small text-right">36 Months</h2>
            </div>
        </div>
        <div class="row section">
            <div class="col-xs-5">
                <h2 class="labels text-left">SEMI-MONTHLY PAYMENT</h2>
            </div>
            <div class="col-xs-7">
                <h2 class="values-small text-right">$15,000</h2>
            </div>
        </div>
        <div class="row section">
            <div class="col-xs-4">
                <h2 class="labels text-left">TO BE TRANSFERRED</h2>
            </div>
            <div class="col-xs-8">
                <h2 class="values-small text-right">$145,000</h2>
            </div>
        </div>

        {{--<!-- Submit form start {{ route('subscription.store') }}-->--}}
        <form action="" method="post" class="from-horizontal">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('coupon') ? ' has-error' : '' }}">
                <div class="col-xs-4">
                    <label for="coupon" class="col-md-4 control-label">Coupon Code</label>
                </div>
                <div class="col-xs-8">
                    <input type="text" name="coupon" id="coupon" class="form-control" value="{{ old('coupon') }}">

                    @if($errors->has('coupon'))
                        <span class="help-block">
                            <strong>{{ $errors->first('coupon') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="pay">GET THIS PLAN</button>
            </div>

        </form>
        <!-- Submit form ends -->
        <div class="row section">

            <h2 class="labels text-center"><a href="{{ URL::previous() }}">Go Back To Plans</a></h2>
        </div>
    </div>
