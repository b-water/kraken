<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AccountController extends Controller
{
    public function collection(Request $request) {
        return Inertia::render('Accounts', [
            'accounts' => Account::all()
        ]);
    }

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
