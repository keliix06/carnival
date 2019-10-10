@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Bid Totals</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{ $totalBids }}</h5>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">Total Paid</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{ $totalPayments }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <h5 class="card-header">Credit Card Payments</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{ $cc }}</h5>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <h5 class="card-header">Cash Payments</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{ $cash }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <h5 class="card-header">Check Payments</h5>
                    <div class="card-body">
                        <h5 class="card-title">${{ $check }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <meta http-equiv="refresh" content="10" />
@endsection
