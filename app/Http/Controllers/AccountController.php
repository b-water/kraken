<?php

namespace App\Http\Controllers;

use App\Models\Account;
use bwater\phpFinanzguru\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Throwable;

class AccountController extends Controller
{
    public function collection(Request $request) {
        return Inertia::render('AccountsPage', [
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

    public function import(Request $request) {
        if (!$request->hasFile('excel')) {
            return null;
        }

        $file = $request->file('excel');

        if ($file->isValid()) {
            try {
                $reader = new Reader($file->getRealPath());
                $collection = $reader->setCollection()->getCollection();
            } catch (Throwable $t) {
                die($t);
            }

            var_dump($collection);
        }
    }
}
