@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Product --}}
                        <section id="learn" class="p-5">
                            <div class="container">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-md">
                                        <img src="https://noypigeeks.gumlet.io/wp-content/uploads/2018/06/asus-rog-phone-price-specs-features-availability.jpg?compress=true&quality=80&w=720&dpr=1.3"
                                            class="img-fluid" alt="Laptop img" />
                                    </div>
                                    <div class="col-md p-5">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <h2>ASUS ROG Phone</h2>

                                        <p>Price: <strong>$300</strong></p>
                                        <p class="lead">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Similique deleniti possimus magnam corporis ratione facere!
                                        </p>

                                        <form action="{{ route('processPaypal') }}" method="POST">
                                            @csrf

                                            <input type="hidden" name="amount" value="300">
                                            <button type="submit" class="btn btn-primary">
                                                Pay with PayPal
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
