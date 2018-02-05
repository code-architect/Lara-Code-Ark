<!--========== PAGE CONTENT ==========-->
<!-- Pricing List v4 -->
<div class="bg-color-sky-light">
    <div class="content-md container">
        <div class="row">
            @foreach($plans as $plan)
            <div class="col-md-4 md-margin-b-30">
                <!-- Pricing List v4 -->
                <div class="pricing-list-v4 radius-10">
                    <div class="pricing-list-v4-header">
                        <h4 class="pricing-list-v4-title">{{ $plan->name }}</h4>
                        <span class="pricing-list-v4-subtitle">Individual</span>
                    </div>
                    <div class="pricing-list-v4-content">
                        <div class="margin-b-40">
                            <span class="pricing-list-v4-price-sign"><i class="fa fa-dollar"></i></span>
                            <span class="pricing-list-v4-price">{{ $plan->price }}</span>
                            <span class="pricing-list-v4-price-info">Month</span>
                        </div>
                        @include('subscription.plans.plans_partials.plan_button')
                    </div>
                </div>
                <!-- End Pricing List v4 -->
            </div>

            @endforeach

            <div class="col-md-4 md-margin-b-30">
                <!-- Pricing List v4 -->
                <div class="pricing-list-v4 radius-10">
                    <div class="pricing-list-v4-header">
                        <h4 class="pricing-list-v4-title">Group Plans</h4>
                        <span class="pricing-list-v4-subtitle">Plans</span>
                    </div>
                    <div class="pricing-list-v4-content">
                        <div class="margin-b-40">
                            <span class="pricing-list-v4-price-sign"><i class="fa fa-dollar"></i></span>
                            <span class="pricing-list-v4-price">Get More</span>


                        </div>
                        <div class="center-block">

                            <a href="{{ route('plans.groups.index') }}" class="btn-dark-brd btn-base-sm radius-3">Get Details</a>
                        </div>
                    </div>
                </div>
                <!-- End Pricing List v4 -->
            </div>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Pricing List v4 -->


<!--========== END PAGE CONTENT ==========-->