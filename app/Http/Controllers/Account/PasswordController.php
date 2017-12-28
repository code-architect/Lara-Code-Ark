<?php

namespace App\Http\Controllers\Account;

use App\Http\Requests\Account\PasswordStoreRequest;
use App\Mail\Account\PasswordUpdated;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function index()
    {
        return view('account.password.index');
    }


    /**
     * Checking and storing the new password
     * @param PasswordStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PasswordStoreRequest $request)
    {

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        Mail::to($request->user())->send(new PasswordUpdated());
        return redirect()->route('account.password.index')->withSuccess('You have successfully changed your password.');
    }
}
