@extends('layouts.app')

@section('title', 'About Me - My Portfolio')

@section('content')

    <h1>About Me</h1>

    <h2>Aneen Muhammed</h2>

    <p>
        I am a BCA graduate interested in web development
        and building modern web applications.
    </p>

    <p>
        I enjoy creating practical web applications and
        learning new technologies.
    </p>


    <hr>


    <h2>Skills</h2>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>HTML & CSS</li>
        <li>JavaScript</li>
        <li>React</li>
        <li>MySQL</li>
        <li>Python</li>
        <li>SQL</li>
        <li>Git & GitHub</li>
    </ul>


    <hr>


    <h2>Education</h2>

    <h3>Bachelor of Computer Applications (BCA)</h3>

    <p>
        College of Applied Science IHRD, Kozhikode
    </p>

    <p>
        Calicut University • 2025
    </p>


    <hr>

    <h2>Certifications</h2>

<div>

    <div>
        <img
            src="{{ asset('images/certificates/mlearn-beyond-prompt.jpg') }}"
            alt="μLearn VJCET Beyond the Prompt Certificate"
            width="400"
        >

        <h3>Beyond the Prompt: 6 Game-Changing AI Tools in 60 Minutes</h3>
        <p>μLearn VJCET</p>
    </div>


    <div>
        <img
            src="{{ asset('images/certificates/genai-expert.jpg') }}"
            alt="Gen-AI Expert Certificate"
            width="400"
        >

        <h3>Certified Gen-AI Expert</h3>
        <p>LetsUpgrade, ITM Skills University & LISA AI</p>
    </div>


    <div>
        <img
            src="{{ asset('images/certificates/one-million-prompters.jpg') }}"
            alt="One Million Prompters Certificate"
            width="400"
        >

        <h3>One Million Prompters</h3>
        <p>Dubai Future Foundation</p>
    </div>


    <div>
        <img
            src="{{ asset('images/certificates/ai-aware-2025.png') }}"
            alt="AI Aware 2025 Badge"
            width="400"
        >

        <h3>AI Aware 2025</h3>
        <p>Intel & CBSE</p>
    </div>

</div>

   

        <h3>Social Media Marketing</h3>
        <p>Meta Blueprint</p>
    </div>

</div>

    

@endsection