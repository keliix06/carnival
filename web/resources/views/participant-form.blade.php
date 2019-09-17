@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">
                        <form action="{{ $action }}" method="POST">
                            @if($method == 'POST')
                                @method('POST')
                            @else
                                @method('PUT')
                            @endif
                            @csrf

                            <div class="form-group">
                                <label for="bidder_number">Bidder Number</label>
                                <input type="number" class="form-control" id="bidder_number" placeholder="Enter bidder number" name="bidder_number" value="{{ $bidder_number }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $email }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control" id="phone" placeholder="Phone number" name="phone" value="{{ $email }}">
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
