<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function add(Request $request) {
        $account = Account::create(
            $this->validate($request, [
                'name' => ['required', 'max:50'],
                'reference' => ['required', 'max:50'],
                'currency' => ['required', 'integer'],
                'type' => ['required', 'integer'],
            ])
        );

        if ($account instanceof Account) {
            return Redirect::route('accounts');
        }
    }
}
