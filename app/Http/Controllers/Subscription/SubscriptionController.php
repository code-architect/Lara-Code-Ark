<?php

namespace App\Http\Controllers\Subscription;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        //check if the request is valid or not
        if($request->has('plan_id')){
            $plan_data = Plan::find($request->plan_id);
            if($plan_data != null){
                return view('subscription.index', compact('plan_data'));
            }else{
                return redirect()->route('plans.index');
            }
        }else{
            return redirect()->route('plans.index');
        }


    }
    //todo
    //Create a column in database name month or year, create a form for the admin to edit this

    public function store()
    {

    }
}
