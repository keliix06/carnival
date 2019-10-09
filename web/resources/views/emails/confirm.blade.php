@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <p>Emails will be sent to the following users.</p>

                <p><a class="btn btn-outline-success" href="{{ route('emails.send') }}">Looks Good - Send The Emails</a></p>

                <ul>
                    @foreach($users as $user)
                        <li>{{$user->email}}</li>
                    @endforeacH
                </ul>
            </div>
        </div>
    </div>
@endsection
