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
                                    @foreach($winner->wonItems as $item)
                                        <li>{{ $item->item->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>${{ $winner->wonItems->sum('price') / 100 }}</td>
                            <td>
                                @if($winner->hasPaid)
                                    <span class="text-success font-weight-bold">Already Paid</span>
                                @else
                                    <form action="{{ route('winners.update', $winner->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
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
