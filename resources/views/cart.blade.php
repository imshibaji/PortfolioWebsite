@extends('layouts.base')

@section('content')
<div class="container px-4">
    <div class="flex flex-col">
        <h3>Checkout</h3>
        <h4>If you have really need to join. Then you can avaliable the offer now.</h4>
        <div class="overflow-x-auto mb-4">
            <table class="table w-full">
            <thead>
                <tr>
                    <th class="w-10/12">Course Name</th>
                    <th class="w-2/12 text-right">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>
                        <h5>{{$data->course_name ?? 'No Selected'}}</h5>
                    </td>
                    <td class="text-right">₹ {{number_format($data->course_price ?? 0)}}</td>
                </tr>
                <tr>
                    <td class="flex justify-between">
                        <div class="flex sm:flex-row flex-col">
                            <div class="form-control mr-2">Coupon Code:</div>
                            <form class="flex" action="" method="POST">
                                @csrf
                                <input type="hidden" name="data" value="{{$token}}">
                                <input type="text" placeholder="coupon code" class="input input-sm input-bordered">
                                <button type="submit" class="btn btn-info btn-sm">Apply</button>
                            </form>
                        </div>
                        <div>Total:</div>
                    </td>
                    <td class="text-right">₹ {{ number_format($data->course_price ?? 0)}}</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>

    @auth
        <div class="flex items-center justify-end my-4 mb-16">
            <a class="btn btn-primary" href="{{route('paynow', ['amount'=> (($data->course_price ??0) *100), 'name' => $data->course_name ?? 'No Selected'])}}">Checkout Now</a>
        </div>
    @else
        <div class="divider"></div>
        <div class="w-full text-center">
            <h5>Already you are existing user then Login. And If you are the Register now.</h5>
        </div>
        <div class="divider"></div>
        <div class="flex lg:flex-row flex-col mb-5">
            @include('components.login', [
                'action' => 'login.checkout',
                'product_name' => $data->course_name ?? 'No Selected',
                'product_amt' => (($data->course_price ??0) *100)
            ])
            <div class="divider divider-vertical d-none"></div>
            @include('components.registration', [
                'action' => 'register.checkout',
                'product_name' => $data->course_name ?? 'No Selected',
                'product_amt' => (($data->course_price ??0) *100)
            ])
        </div>
    @endauth
</div>
@endsection
