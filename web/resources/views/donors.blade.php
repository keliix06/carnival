@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <a href="{{ route('donors.create') }}" class="btn btn-success">Add Donor</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <table id="table" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Notes</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($donors as $donor)
                        <tr>
                            <td>{{ $donor->name }}</td>
                            <td>{!! nl2br(e($donor->notes)) !!}</td>
                            <td><a href="{{ route('donors.edit', $donor->id) }}" class="btn btn-outline-info">Edit</a></td>
                            <td>
                                <form action="{{ route('donors.destroy', $donor->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
