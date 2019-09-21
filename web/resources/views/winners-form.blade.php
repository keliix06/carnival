@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mb-3">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ $action }}" method="POST">
                            @method('POST')
                            @csrf

                            <div class="form-group">
                                <label for="participant_id">Bidder</label>
                                <select class="form-control" name="participant_id" required>
                                    @foreach ($participants as $participant)
                                        <option value="{{ $participant->id }}">{{ $participant->bidder_number }} - {{ $participant->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="item_id">Item</label><br>
                                {{ $item->name }}
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="any" class="form-control @error('price') is-invalid @enderror" required name="price">
                            </div>

                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Existing Winners for {{ $item->name }}</div>

                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach ($currentWinners as $winner)
                                <li>{{ $winner->participant->bidder_number }} - {{ $winner->participant->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
