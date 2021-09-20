@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="POST" action="/paiment">
                    @csrf
                    <div class="container w-75 my-5">
                        <div
                            class="row mb-3 d-md-flex justify-content-center border border-secondary border-3 rounded-3 pt-lg-5 px-4">
                            <div class="mb-3">
                                <label for="cardOwner" class="form-label">Card Owner</label>
                                <input type="text" class="form-control" id="cardOwner" name="cardOwner"
                                       placeholder="Card Owner Name">
                            </div>

                            <label for="cardNumber" class="form-label">Card Number</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="cardNumber" name="cardNumber"
                                       placeholder="Valid card number">
                                <span class="input-group-text" id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                            </svg>
                        </span>
                            </div>

                            <label for="month" class="form-label">Expiration Date</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" id="month" name="expirationMonth"
                                       placeholder="MM">
                                <input type="number" class="form-control" id="year" name="expirationYear"
                                       placeholder="YYYY">
                            </div>
                            <div class="mb-3">
                                <label for="ccv" class="form-label">CCV</label>
                                <input type="text" class="form-control" id="month" name="ccv" placeholder="CCV">
                            </div>
                            <input type="hidden" id="heuresCode" name="heuresCode" value="{{ $heuresCode }} ">
                            <input type="hidden" id="heuresConduite" name="heuresConduite" value="{{ $heuresConduite }}">
                            <input type="hidden" id="sommeinput" name="somme" value="{{ $somme }}">
                            <input type="hidden" id="sommeConduiteinput" name="sommeConduite" value="{{ $sommeConduite }} ">
                            <input type="hidden" id="sommeCodeinput" name="sommeCode" value="{{ $sommeCode }} ">
                            <div class="card-footer d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn btn-primary">Confirm Payment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-4 bg-secondary bg-gradient d-flex flex-column">
                <h2 class="fs-1 fw-bold text-white mt-4">Récapitulatif de commande :</h2>
                <div class="d-flex flex-column text-white">
                    <span class="fs-5 fw-bold text-decoration-underline"> Nombre d'heures de code (7dt/hr):</span>
                    <span class="fs-5 fw-bold">{{ $heuresCode }} heures</span>
                    <span class="fs-5 fw-bold mt-1">Prix code: {{ $sommeCode }} TND</span>
                    <span class="fs-5 fw-bold text-decoration-underline mt-3"> Nombre d'heures de conduite (20dt/hr):</span>
                    <span class="fs-5 fw-bold">{{ $heuresConduite }} heures</span>
                    <span class="fs-5 fw-bold mt-1">Prix conduite: {{ $sommeConduite }} TND</span>
                </div>
                <div class="mt-auto mb-2 mx-3">
                    <hr>
                    <span class="fs-2 fw-bold text-white">Total: </span>
                    <span class="fs-1 fw-bold text-success float-end">{{ $somme }} TND</span>
                </div>
            </div>
        </div>
    </div>
@endsection
