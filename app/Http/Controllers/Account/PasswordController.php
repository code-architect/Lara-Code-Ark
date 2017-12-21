<?php

namespace App\Http\Controllers\Account;

use App\Http\Requests\Account\PasswordStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        // check if the given current password is correct
        if(!Hash::check($request->password_current, auth()->user()->password))
        {
            // Feedback to user and redirect
            $request->session()->flash('danger', 'Please provide correct current password');
            return redirect()->route('account.password.index');
        }

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        // Feedback to user and redirect
        $request->session()->flash('success', 'You have successfully changed your password');
        return redirect()->route('account.password.index');
    }
}
