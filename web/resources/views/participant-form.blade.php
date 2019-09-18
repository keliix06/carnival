@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
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
                            @if($method == 'POST')
                                @method('POST')
                            @else
                                @method('PUT')
                            @endif
                            @csrf

                            <div class="form-group">
                                <label for="bidder_number">Bidder Number</label>
                                <input type="number" class="form-control @error('bidder_number') is-invalid @enderror" required id="bidder_number" placeholder="Enter bidder number" name="bidder_number" value="{{ $bidder_number }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" required id="name" placeholder="Enter name" name="name" value="{{ $name }}">
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" required id="email" placeholder="Enter email" name="email" value="{{ $email }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="phone" class="form-control @error('phone') is-invalid @enderror" required id="phone" placeholder="Phone number" name="phone" value="{{ $email }}">
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
