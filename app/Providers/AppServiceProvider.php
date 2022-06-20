<?php

namespace App\Providers;

use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->offerzone();
    }

    public function offerzone(){
        $options = Option::asArray(['offer_name','offer_amt','offer_type','offer_expire', 'usd_value', 'coupon_code','coupon_amt']);
        $date = Carbon::parse($options['offer_expire'] ?? '');
        $now = Carbon::now();
        $diff = $now->floatDiffInSeconds($date, false);
        // dd($diff);
        View::share('offer_name', $options['offer_name']);
        View::share('offer_amt', $options['offer_amt']);
        View::share('offer_type', $options['offer_type']);
        View::share('offer_expire', $date);
        View::share('usd_value', $options['usd_value']);
        View::share('coupon_code', $options['coupon_code']);
        View::share('coupon_amt', $options['coupon_amt']);
        View::share('diff', $diff);
    }
}
