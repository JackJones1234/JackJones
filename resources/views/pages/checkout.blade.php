@extends('layout.master')


@section('content')
    <div class="delivery-wrapper">
        <h1>delivery options</hi>
        <form action="">
            <div class="customer-name">
                <input type="text" placeholder="First name">
                <input type="text" placeholder="Last name">
            </div>
            <input type="text" placeholder="Enter your address">
            <div class="contact-info">
                <input type="text" placeholder="email">
                <input type="text" placeholder="telephone number">
            </div>
        </form>
    </div>
    <div class="cart-wrapper">
        <h1>shopping cart</h1>
        @include('common.cart')
    </div>
    <div class="payment-wrapper">
        <h1>payment</hi>
            <div class="payment-method-wrapper">
                <input type="radio" name="credit" id="">
                <label for="credit">credit card</label>

                <input type="radio" name="apple" id="">
                <label for="apple">apple pay</label>

                <input type="radio" name="google" id="">
                <label for="google">google pay</label>
            </div>
            <div class="payment-details-wrapper">
                <input type="text" placeholder="Name on card">
                <input type="text" placeholder="Card number">
                <h5>Expiration date</h5>
                <select name='expireMM' id='expireMM'>
                    <option value=''>Month</option>
                    <option value='01'>January</option>
                    <option value='02'>February</option>
                    <option value='03'>March</option>
                    <option value='04'>April</option>
                    <option value='05'>May</option>
                    <option value='06'>June</option>
                    <option value='07'>July</option>
                    <option value='08'>August</option>
                    <option value='09'>September</option>
                    <option value='10'>October</option>
                    <option value='11'>November</option>
                    <option value='12'>December</option>
                </select>
                <select name='expireYY' id='expireYY'>
                    <option value=''>Year</option>
                    <option value='22'>2022</option>
                    <option value='23'>2023</option>
                    <option value='24'>2025</option>
                    <option value='22'>2026</option>
                </select>
                <input class="card-expire-date" type="text"/>
            </div>

    </div>

@endsection
