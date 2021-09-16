@extends('layouts.app')
@section('content')
    <div class="">
        <form method="POST" action="/paiement">
            @csrf
            <div class="container w-50 my-5">
                <div class="row mb-3 d-md-flex justify-content-center border border-secondary border-3 rounded-3 pt-lg-5 px-4">
                    <div class="mb-3">
                        <label for="cardOwner" class="form-label">Card Owner</label>
                        <input type="text" class="form-control" id="cardOwner" name="cardOwner" placeholder="Card Owner Name">
                    </div>

                    <label for="cardNumber" class="form-label">Card Number</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Valid card number">
                        <span class="input-group-text" id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                            </svg>
                        </span>
                    </div>

                    <label for="month" class="form-label">Expiration Date</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" id="month" name="expirationMonth" placeholder="MM">
                        <input type="number" class="form-control" id="year" name="expirationYear" placeholder="YYYY">
                    </div>
                    <div class="mb-3">
                        <label for="ccv" class="form-label">CCV</label>
                        <input type="text" class="form-control" id="month" name="ccv" placeholder="CCV">
                    </div>
                    <div class="card-footer d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary">Confirm Payment</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
