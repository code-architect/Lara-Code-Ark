<?php

namespace App\Http\Controllers\Subscription;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanGroupController extends Controller
{
    public function index()
    {
        $plans = Plan::active()->forGroups()->get();
        return view('subscription.plans.groups.index', compact('plans'));
    }
}
