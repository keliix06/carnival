@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table id="table" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Bidder #</th>
                        <th>Name</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($winners as $winner)
                        <tr>
                            <td>{{ $winner->bidder_number }}</td>
                            <td>{{ $winner->name }}</td>
                            <td>
                                <ul class="list-unstyled">
                                    @foreach($winner->wonItems() as $item)
                                        <li>{{ $item->item->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>${{ $winner->total() }}</td>
                            <td>
                                @if($winner->hasPaid())
                                    <span class="text-success font-weight-bold">Already Paid</span>
                                @else
                                    <form action="{{ route('winners.update', $winner->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_type" value="{{ \App\AuctionWinner::PAYMENT_TYPE_CASH }}" checked>
                                            <label class="form-check-label">
                                                Cash
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment_type" value="{{ \App\AuctionWinner::PAYMENT_TYPE_CHECK }}">
                                            <label class="form-check-label">
                                                Check
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="payment_type" value="{{ \App\AuctionWinner::PAYMENT_TYPE_STRIPE }}">
                                            <label class="form-check-label">
                                                Stripe
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success">Mark Paid</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
