@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <a href="{{ route('participants.create') }}" class="btn btn-success">Add Participant</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table id="table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Bidder #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($participants as $participant)
                        <tr>
                            <td>{{ $participant->bidder_number }}</td>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->email }}</td>
                            <td>{{ $participant->phone }}</td>
                            <td><a href="{{ route('participants.edit', $participant->id) }}" class="btn btn-outline-info">Edit</a></td>
                            <td>
                                <form action="{{ route('participants.destroy', $participant->id) }}" method="POST">
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
