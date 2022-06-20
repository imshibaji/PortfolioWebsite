<?php

namespace Modules\Payment\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class PaymentController extends Controller
{
    /**
     * Payment Status Function
     *
     * @param Request $req
     * @return void
     */
    public function home(Request $req){
        if($req->checkout == 'cancelled'){
            return redirect()->route('home.cancelled');
        }else if($req->checkout == 'incomplete'){
            return redirect()->route('home.failed');
        }else{
            return redirect()->route('home.success');
        }
    }
    /**
     * Cart Page
     *
     * @return void
     */
    public function cart($data)
    {
        $decode_data = json_decode(base64_decode($data));
        return view('cart', ['data' => $decode_data, 'token' => $data]);
        // return $decode_data;
    }

    public function login_checkout(LoginRequest $request)
    {
        $request->authenticate();

        if($request->session()->regenerate()){
            return redirect(route('paynow', [
                'amount'=> $request->product_amt,
                'name' => $request->product_name
            ]));
        }else{
            return back();
        }
    }


    public function register_checkout(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);


        return redirect(route('paynow', [
            'amount'=> $request->product_amt,
            'name' => $request->product_name
        ]));
    }

    public function one_time_pay(Request $request){
        // $stripeCustomer = $request->user()->createOrGetStripeCustomer();
        // return $request->user()->invoiceFor($request->name, $request->amount);
        return $request->user()->checkoutCharge($request->amount, $request->name, 1);

    }

    public function one_time_pay_invoice(Request $request){
        return $request->user()->invoiceFor($request->name, $request->amount);
    }

/**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function cancelled()
    {
        return view('payment::cancelled', [
            'title' => 'Payment is Cancelled'
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function failed()
    {
        return view('payment::failed', [
            'title' => 'Payment is Failed'
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function success()
    {
        return view('payment::success', [
            'title' => 'Payment is Success'
        ]);
    }

}
