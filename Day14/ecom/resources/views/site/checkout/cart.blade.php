@extends('site.layout')
@section('content') 
    <main class="bg_gray pattern">
            
        <div class="container margin_60_40">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8" style="background: white; padding:2%;">
                    <div class="box_booking_2 style_2">
                        <div class="head">
                            <div class="title">
                                <h3>Personal Details</h3>
                            </div>
                        </div>
                        <!-- /head -->
                        <div class="main">
                            <div class="form-group">
                                <label>First and Last Name</label>
                                <input class="form-control" value="{{ Auth::user()->name }}" readonly>
                            </div> 
                            <div class="form-group">
                                <label>Full Address</label>
                                <input class="form-control" name="address">
                            </div> 
                        </div>
                    </div>
                    <!-- /box_booking -->
                    <div class="box_booking_2 style_2">
                        <div class="head">
                            <div class="title">
                                <h3>Payment Method</h3>
                            </div>
                        </div>
                        <!-- /head -->
                        <div class="main">
                            <div class="payment_select">
                                <label class="container_radio">Credit Card
                                    <input type="radio" value="" checked name="payment_method">
                                    <span class="checkmark"></span>
                                </label>
                                <i class="icon_creditcard"></i>
                            </div>
                            <div class="form-group"> 
                                <label>
                                    Card
                                    <div id="card-element"></div>
                                </label> 
                                <label for="card-element">Card</label>
                                <div id="card-element"></div>
                            </div> 
                        </div> 
                    </div> 
                </div> 
                <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
                    <div class="box_booking"   style="background: white; padding:4%;">
                        <div class="head">
                            <h3>Order Summary</h3> 
                        </div>
                        <!-- /head -->
                        <div class="main">
                            <ul>
                                <li>Date: <span>{{ \Carbon\Carbon::now()->format('M d, Y') }}</span></li>
                                <li>Hour: <span>{{ \Carbon\Carbon::now()->format('h:i A') }}</span></li>
                                <li>Type<span>Delivery</span></li>
                            </ul>
                            <hr>
                            <ul class="clearfix">
                                @foreach($items as $item)
                                    <li>
                                        <b class="pull-right text-right">
                                            P {{ number_format($item->total, 2, '.', ',') }}
                                        </b><br>

                                        {{ $item->qty }}x {{ $item->name }}
                                        <br><br>
                                    </li> 
                                @endforeach
                            </ul>
                            
                            <ul class="clearfix">
                                <li>
                                    Subtotal: 
                                    <span>P {{ number_format($total, 2, '.', ',') }}</span>
                                </li>
                                <li>
                                    Delivery fee: 
                                    <span>P {{ number_format(100, 2, '.', ',') }}</span>
                                </li>
                                <li class="total">
                                    Total: 
                                    <span>P {{ number_format(($total + 100), 2, '.', ',') }}</span>
                                </li>
                            </ul>
                            <a href="" class="btn_1 full-width mb_5">Place Order</a> 
                        </div>
                    </div>
                    <!-- /box_booking -->
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
        
    </main>
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_PUB_KEY') }}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
  cardElement.mount('#card-element');
</script>
@endsection