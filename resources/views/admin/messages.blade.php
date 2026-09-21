@extends('layouts.admin')

@section('content')

    <h1>Messages</h1>

    <p>Messages received from your portfolio contact form.</p>

    @if($messages->count() > 0)

        @foreach($messages as $message)

            <div class="card">

                <h3>{{ $message->name }}</h3>

                <p>
                    <strong>Email:</strong>
                    {{ $message->email }}
                </p>

                <p>
                    <strong>Message:</strong>
                </p>

                <p>
                    {{ $message->message }}
                </p>

                <small>
                    Received:
                    {{ $message->created_at->format('d M Y, h:i A') }}
                </small>

            </div>

        @endforeach

    @else

        <div class="card">

            <h3>No messages yet.</h3>

            <p>Messages from your contact form will appear here.</p>

        </div>

    @endif

@endsection