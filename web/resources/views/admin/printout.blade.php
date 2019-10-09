@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($winners as $winner)
        <div class="row justify-content-center mb-4 border border-dark rounded p-3">
            <div class="col-12">
                    <h4 >#{{ $winner->bidder_number }} - {{ $winner->name }}</h4>

                    <ul>
                        @foreach($winner->wonItems() as $item)
                            <li>Item #{{ $item->item->item_number }} {{ $item->item->name }} - ${{ $item->price / 100 }}</li>
                        @endforeach
                    </ul>

                    <p>Total: ${{ $winner->total() }}</p>

                    @if($winner->hasPaid())
                        <p>Already Paid</p>
                    @else
                        <p>Not Paid</p>
                    @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection
