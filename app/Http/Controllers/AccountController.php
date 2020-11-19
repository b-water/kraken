<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

    public function add(Request $request) {
        $account = Account::create(
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'reference' => ['required', 'max:50'],
                'currency' => ['required', 'max:50', 'email'],
            ])
        );


    }


}
