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
                                <label for="name">Name</label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" required id="name" placeholder="Enter name" name="name" value="{{ $name }}">
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
