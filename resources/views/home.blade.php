@extends('layouts.app')

@section('title', 'Aneen Muhammed - Portfolio')

@section('content')

<style>

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #111827;
        color: #222;
    }

    .section {
    max-width: 1100px;
    margin: auto;
    padding: 60px 25px;
}

    /* HERO */

    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
    }

    .hero-text {
        flex: 1;
    }

    .hero-text h1 {
        font-size: 52px;
        margin: 10px 0;
    }

    .hero-text h2 {
        font-size: 25px;
        font-weight: normal;
        color: #555;
    }

    .hero-text p {
        font-size: 18px;
        line-height: 1.7;
        color: #666;
        max-width: 600px;
    }

    .hero-buttons {
        margin-top: 30px;
    }

    .btn {
        display: inline-block;
        padding: 13px 22px;
        margin-right: 10px;
        margin-bottom: 10px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-primary {
        background: #111827;
        color: white;
    }

    .btn-outline {
        border: 2px solid #black;
        color: #eeeeee;
    }

    .btn-whatsapp {
        background: #25D366;
        color: white;
    }

    .hero-image {
        flex: 0 0 350px;
        text-align: center;
    }

    .hero-image img {
        width: 320px;
        height: 320px;
        object-fit: cover;
        border-radius: 50%;
        border: 8px solid #f1f1f1;
    }

    /* SECTION */

    .section h2 {
        font-size: 36px;
        margin-bottom: 15px;
    }

    .section-intro {
        color: #666;
        line-height: 1.7;
        max-width: 750px;
    }

    /* SKILLS */

    .skills {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
    }

    .skill {
        padding: 12px 18px;
        background: #111827;
        background: #;
        border-radius: 6px;
        font-weight: bold;
    }

    /* PROJECTS */

    .projects-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 30px;
    }

    .project-card {
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        overflow: hidden;
        background: white;
    }

    .project-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .project-content {
        padding: 20px;
    }

    .project-content h3 {
        margin-top: 0;
    }

    .project-content p {
        color: #666;
        line-height: 1.6;
    }

    /* CERTIFICATES */

    .certificates {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 30px;
    }

    .certificate {
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 15px;
    }

    .certificate img {
        width: 100%;
        height: 250px;
        object-fit: contain;
    }

    /* CONTACT */

    .contact-box {
        background: #f5f6fa;
        padding: 35px;
        border-radius: 10px;
        margin-top: 30px;
    }

    .contact-box p {
        font-size: 17px;
    }

    /* MOBILE */

    @media (max-width: 768px) {

        .hero {
            flex-direction: column-reverse;
            text-align: center;
            padding-top: 50px;
        }

        .hero-image {
            flex: none;
        }

        .hero-image img {
            width: 240px;
            height: 240px;
        }

        .hero-text h1 {
            font-size: 38px;
        }

        .hero-text h2 {
            font-size: 21px;
        }

        .projects-grid,
        .certificates {
            grid-template-columns: 1fr;
        }

        .section {
            padding: 60px 20px;
        }

    }

</style>


{{-- ================= HERO ================= --}}

<section class="section hero">

    <div class="hero-text">

        <p>Hello, I'm</p>

        <h1>Aneen Muhammed</h1>

        <h2>MCA Student · BCA Graduate · PHP & Laravel Developer</h2>

        <p>
            I'm a BCA graduate currently pursuing my MCA, with a strong
            interest in web development and artificial intelligence.
            I enjoy building websites and web applications using PHP,
            Laravel, JavaScript and MySQL.
        </p>

        <p>
            Along with development, I love exploring AI tools, experimenting
            with generative AI, and creating AI-powered videos and visual
            content. I'm always curious to learn something new and turn
            ideas into something useful.
        </p>

        <div class="hero-buttons">

            <a href="{{ url('/projects') }}" class="btn btn-primary">
                View My Work
            </a>

            <a href="{{ asset('AneenResume.2026 (1).png') }}"
               class="btn btn-outline"
               target="_blank">
                My Resume
            </a>

            <a href="https://wa.me/918281294762"
               class="btn btn-whatsapp"
               target="_blank">
                WhatsApp Me
            </a>

        </div>

    </div>

    <div class="hero-image">

        <img src="{{ asset('aneenprofile.jpg') }}"
             alt="Aneen Muhammed">

    </div>

</section>

{{-- ================= ABOUT ================= --}}

<section class="section" id="about">

    <h2>About Me</h2>

    <p class="section-intro">
        I'm Aneen Muhammed, a BCA graduate and currently pursuing my
        MCA. I started my journey in computer applications with an
        interest in technology and gradually developed a passion for
        creating websites and web applications.
    </p>

    <p class="section-intro">
        My current focus is PHP and Laravel development. I enjoy
        working on projects where I can build something from scratch,
        understand how things work behind the scenes, and improve the
        user experience along the way.
    </p>

    <p class="section-intro">
        I'm also very interested in Artificial Intelligence and
        Generative AI. I like experimenting with different AI tools,
        exploring what they can do, and creating AI-generated videos
        and visual content.
    </p>

    <p class="section-intro">
        I'm still learning and improving every day. For me, development
        isn't just about writing code — it's about learning, experimenting,
        solving problems and turning ideas into something real.
    </p>

</section>


{{-- ================= SKILLS ================= --}}

<section class="section" id="skills">

    <h2>Skills</h2>

    <p class="section-intro">
        Technologies and tools I work with:
    </p>

    <div class="skills">

        <!-- Technical Skills -->
<span class="skill">HTML</span>
<span class="skill">CSS</span>
<span class="skill">JavaScript</span>
<span class="skill">React.js</span>
<span class="skill">Tailwind CSS</span>
<span class="skill">PHP</span>
<span class="skill">Laravel</span>
<span class="skill">Python</span>
<span class="skill">C</span>
<span class="skill">C++</span>
<span class="skill">MySQL</span>
<span class="skill">MongoDB</span>
<span class="skill">Firebase Firestore</span>
<span class="skill">Node.js</span>
<span class="skill">Express.js</span>
<span class="skill">REST APIs</span>
<span class="skill">MVC Architecture</span>
<span class="skill">Object-Oriented Programming (OOP)</span>
<span class="skill">Data Structures</span>
<span class="skill">SQL Operations</span>
<span class="skill">Blade</span>
<span class="skill">Git</span>
<span class="skill">GitHub</span>
<span class="skill">VS Code</span>
<span class="skill">Vite</span>
<span class="skill">npm</span>
<span class="skill">Composer</span>
<span class="skill">WAMP</span>
<span class="skill">Prompt Engineering</span>
<span class="skill">UI/UX Design</span>

<!-- Non-Technical Skills -->
<span class="skill">Communication</span>
<span class="skill">Problem Solving</span>
<span class="skill">Critical Thinking</span>
<span class="skill">Teamwork</span>
<span class="skill">Leadership</span>
<span class="skill">Adaptability</span>
<span class="skill">Quick Learner</span>
<span class="skill">Time Management</span>
<span class="skill">Creativity</span>
<span class="skill">Attention to Detail</span>
<span class="skill">Customer Handling</span>
<span class="skill">Self-Learning</span>
<span class="skill">Responsibility</span>
<span class="skill">Decision Making</span>
<span class="skill">Analytical Thinking</span>

    </div>

</section>

{{-- ================= PROJECTS ================= --}}

<section class="section" id="projects">

    <h2>Projects</h2>

    <p class="section-intro">
        Some of the projects I have developed.
    </p>

    <div class="projects-grid">

        @forelse($projects ?? [] as $project)

            <div class="project-card">

                @if($project->image)

                    <img src="{{ asset('storage/' . $project->image) }}"
                         alt="{{ $project->title }}">

                @endif

                <div class="project-content">

                    <h3>{{ $project->title }}</h3>

                    <p>
                        {{ $project->description }}
                    </p>

                    @if($project->technologies)
                        <p>
                            <strong>Technologies:</strong>
                            {{ $project->technologies }}
                        </p>
                    @endif

                    @if($project->live_url)

                        <a href="{{ $project->live_url }}"
                           target="_blank"
                           class="btn btn-primary">
                            Live Demo
                        </a>

                    @endif

                    @if($project->github_url)

                        <a href="{{ $project->github_url }}"
                           target="_blank"
                           class="btn btn-outline">
                            GitHub
                        </a>

                    @endif

                </div>

            </div>

        @empty

            <p>No projects added yet.</p>

        @endforelse

    </div>

</section>


{{-- ================= CERTIFICATES ================= --}}

<section class="section" id="certificates">

    <h2>Certifications</h2>

    <p class="section-intro">
        Certifications and achievements in AI and technology.
    </p>

    <div class="certificates">

        <div class="certificate">

            <img src="{{ asset('images/certificates/mlearn-beyond-prompt.jpg') }}"
                 alt="Beyond the Prompt Certificate">

            <h3>
                Beyond the Prompt: 6 Game-Changing AI Tools
            </h3>

            <p>μLearn VJCET</p>

        </div>


        <div class="certificate">

            <img src="{{ asset('images/certificates/genai-expert.jpg') }}"
                 alt="Gen-AI Expert Certificate">

            <h3>
                Certified Gen-AI Expert
            </h3>

            <p>
                LetsUpgrade, ITM Skills University & LISA AI
            </p>

        </div>


        <div class="certificate">

            <img src="{{ asset('images/certificates/one-million-prompters.jpg') }}"
                 alt="One Million Prompters Certificate">

            <h3>
                One Million Prompters
            </h3>

            <p>
                Dubai Future Foundation
            </p>

        </div>


        <div class="certificate">

            <img src="{{ asset('images/certificates/ai-aware-2025.png') }}"
                 alt="AI Aware 2025">

            <h3>
                AI Aware 2025
            </h3>

            <p>
                Intel & CBSE
            </p>

        </div>

    </div>

</section>


{{-- ================= CONTACT ================= --}}

<section class="section" id="contact">

    <h2>Let's Connect</h2>

    <p class="section-intro">
        Interested in working together or have a question?
        Feel free to contact me.
    </p>

    <div class="contact-box">

        <p>
            <strong>Email:</strong>
            <a href="mailto:aneenmuhammed1@gmail.com">
                aneenmuhammed1@gmail.com
            </a>
        </p>

        <p>
            <strong>WhatsApp:</strong>
            <a href="https://wa.me/918281294762"
               target="_blank">
                Message me on WhatsApp
            </a>
        </p>

        <br>

        <a href="{{ url('/contact') }}"
           class="btn btn-primary">
            Contact Form
        </a>

    </div>

</section>

@endsection