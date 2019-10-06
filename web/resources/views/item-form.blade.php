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
                                <label for="item_number">Item Number</label>
                                <input type="number" class="form-control @error('item_number') is-invalid @enderror" required name="item_number" value="{{ $item_number }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" required id="name" placeholder="Enter name" name="name" value="{{ $name }}">
                            </div>

                            <div class="form-group">
                                <label for="estimated_value">Estimated Value</label>
                                <input type="number" class="form-control @error('estimated_value') is-invalid @enderror" required name="estimated_value" value="{{ $estimated_value }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="3" name="description">{{ $description }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="donor_id">Donor</label>
                                <select class="form-control" name="donor_id">
                                    @foreach($donors as $donor)
                                        <option value="{{ $donor->id }}" @if($donor->id === $donor_id) selected @endif>{{ $donor->name }}</option>
                                    @endforeach
                                </select>
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
