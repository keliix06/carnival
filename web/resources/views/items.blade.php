@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <a href="{{ route('items.create') }}" class="btn btn-success">Add Item</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <table id="table" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Item Number</th>
                        <th>Name</th>
                        <th>Estimated Value</th>
                        <th>Description</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->item_number }}</td>
                            <td>{{ $item->name }}</td>
                            <td>${{ $item->estimated_value }}</td>
                            <td>{!! nl2br(e($item->description)) !!}</td>
                            <td><a href="{{ route('items.edit', $item->id) }}" class="btn btn-outline-info">Edit</a></td>
                            <td>
                                <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Do you really want to delete {{ $item->name }}?');">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('winners.create', ['item_id' => $item->id]) }}" class="btn btn-outline-success">Add Winner</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
