@extends('layouts.app')

@section('title', 'Contact Me - My Portfolio')


@section('content')


<style>

    .contact-page {
        max-width: 900px;
        margin: auto;
        padding: 80px 50px;
    }

    .contact-page h1 {
        font-family: monospace;
        font-size: 45px;
        color: #fff;
    }

    .contact-page h1::before {
        content: "// ";
        color: #00ffaa;
    }

    .contact-page > p {
        color: #969ba5;
        font-size: 17px;
        margin-bottom: 35px;
    }

    .contact-form {
        max-width: 700px;
        padding: 30px;
        background: rgba(16, 18, 27, 0.85);
        border: 1px solid #29313a;
        border-left: 3px solid #00ffaa;
        border-radius: 8px;
    }

    .contact-form label {
        display: block;
        margin-bottom: 8px;
        color: #00ffaa;
        font-family: monospace;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 14px;
        margin-bottom: 22px;
        background: #090a0f;
        color: #fff;
        border: 1px solid #29313a;
        border-radius: 5px;
        font-size: 15px;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: #00ffaa;
        box-shadow: 0 0 12px rgba(0, 255, 170, 0.15);
    }

    .contact-form textarea {
        resize: vertical;
    }

    .contact-form button {
        padding: 13px 22px;
        background: #00ffaa;
        color: #07100c;
        border: none;
        border-radius: 5px;
        font-family: monospace;
        font-weight: bold;
        cursor: pointer;
    }

    .contact-form button:hover {
        box-shadow: 0 0 20px rgba(0, 255, 170, 0.4);
        transform: translateY(-2px);
    }

    .success-message {
        color: #00ffaa;
        margin-bottom: 20px;
    }

    @media (max-width: 700px) {
        .contact-page {
            padding: 60px 25px;
        }

        .contact-page h1 {
            font-size: 36px;
        }
    }

</style>


<div class="contact-page">

    <h1>Contact Me</h1>

    <p>
        Have a question or want to work together?
        Send me a message.
    </p>

    @if(session('success'))
        <p class="success-message">
            {{ session('success') }}
        </p>
    @endif

    <form action="{{ route('contact.store') }}"
          method="POST"
          class="contact-form">

        @csrf

        <label>Name</label>

        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            placeholder="Your Name"
        >

        <label>Email</label>

        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Your Email"
        >

        <label>Message</label>

        <textarea
            name="message"
            rows="6"
            placeholder="Write your message..."
        >{{ old('message') }}</textarea>

        <button type="submit">
            SEND MESSAGE →
        </button>

    </form>

</div>

@endsection