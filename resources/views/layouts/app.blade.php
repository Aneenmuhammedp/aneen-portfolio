<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Aneen Muhammed')</title>

    <style>

        /* =========================
           GLOBAL
        ========================= */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #090a0f;
            color: #eeeeee;
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        a {
            color: inherit;
        }


        /* =========================
           RETRO GRID BACKGROUND
        ========================= */

        body::before {

            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            background-image:
                linear-gradient(
                    rgba(0, 255, 170, 0.035) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(0, 255, 170, 0.035) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;

            z-index: -2;
        }


        /* =========================
           GLOW
        ========================= */

        body::after {

            content: "";

            position: fixed;

            width: 500px;
            height: 500px;

            top: -200px;
            right: -150px;

            background: #7c3aed;

            filter: blur(180px);

            opacity: 0.18;

            pointer-events: none;

            z-index: -1;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {

            position: fixed;

            left: 25px;
            top: 50%;

            transform: translateY(-50%);

            width: 75px;

            padding: 15px 10px;

            background: rgba(15, 17, 25, 0.90);

            border: 1px solid #29313a;

            border-radius: 14px;

            box-shadow:
                0 0 20px rgba(0, 255, 170, 0.08);

            backdrop-filter: blur(12px);

            z-index: 1000;
        }


        .navbar-logo {

            width: 45px;
            height: 45px;

            margin: 0 auto 20px;

            display: flex;

            align-items: center;
            justify-content: center;

            border: 1px solid #00ffaa;

            border-radius: 8px;

            color: #00ffaa;

            font-weight: bold;

            font-size: 18px;

            box-shadow:
                0 0 12px rgba(0, 255, 170, 0.25);
        }


        .navbar a {

            position: relative;

            display: flex;

            align-items: center;
            justify-content: center;

            width: 100%;
            height: 45px;

            margin: 6px 0;

            text-decoration: none;

            color: #777d88;

            border-radius: 8px;

            transition: 0.25s ease;
        }


        .navbar a:hover {

            color: #00ffaa;

            background: rgba(0, 255, 170, 0.07);

            box-shadow:
                inset 0 0 15px rgba(0, 255, 170, 0.04),
                0 0 12px rgba(0, 255, 170, 0.12);
        }


        .nav-icon {

            font-size: 19px;
        }


        .nav-label {

            position: absolute;

            left: 65px;

            background: #11141c;

            color: #00ffaa;

            border: 1px solid #00ffaa;

            padding: 6px 10px;

            font-size: 12px;

            border-radius: 5px;

            white-space: nowrap;

            opacity: 0;

            pointer-events: none;

            transform: translateX(-5px);

            transition: 0.2s;
        }


        .navbar a:hover .nav-label {

            opacity: 1;

            transform: translateX(0);
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        main {

            margin-left: 125px;

            min-height: 100vh;
        }


        .section {

            max-width: 1150px;

            min-height: 100vh;

            margin: auto;

            padding: 110px 50px;

            position: relative;
        }


        /* =========================
           HERO
        ========================= */

        .hero {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 60px;
        }


        .hero-text {

            max-width: 700px;
        }


        .hero-text > p:first-child {

            color: #00ffaa;

            font-family: monospace;

            font-size: 16px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }


        .hero-text h1 {

            margin: 10px 0;

            font-size: clamp(48px, 7vw, 85px);

            line-height: 0.95;

            letter-spacing: -3px;

            color: #ffffff;

            text-shadow:
                0 0 20px rgba(255,255,255,0.08);
        }


        .hero-text h2 {

            color: #a78bfa;

            font-family: monospace;

            font-size: 20px;

            font-weight: normal;

            letter-spacing: 1px;
        }


        .hero-text p {

            color: #969ba5;

            line-height: 1.8;

            font-size: 17px;
        }


        /* =========================
           PROFILE IMAGE
        ========================= */

        .hero-image {

            position: relative;

            min-width: 320px;

            text-align: center;
        }


        .hero-image::before {

            content: "";

            position: absolute;

            width: 330px;
            height: 330px;

            left: 50%;
            top: 50%;

            transform: translate(-50%, -50%);

            border: 1px solid #00ffaa;

            border-radius: 50%;

            box-shadow:
                0 0 30px rgba(0,255,170,0.15);

            animation: pulse 3s infinite;
        }


        .hero-image img {

            position: relative;

            width: 270px;
            height: 270px;

            object-fit: cover;

            border-radius: 50%;

            border: 4px solid #111;

            box-shadow:
                0 0 0 2px #00ffaa,
                0 0 35px rgba(0,255,170,0.25);
        }


        @keyframes pulse {

            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.08);
                opacity: 1;
            }
        }


        /* =========================
           BUTTONS
        ========================= */

        .hero-buttons {

            margin-top: 30px;
        }


        .btn {

            display: inline-block;

            padding: 13px 22px;

            margin: 5px;

            border-radius: 5px;

            text-decoration: none;

            font-family: monospace;

            font-weight: bold;

            transition: 0.25s;
        }


        .btn-primary {

            background: #00ffaa;

            color: #07100c;

            box-shadow:
                0 0 15px rgba(0,255,170,0.25);
        }


        .btn-primary:hover {

            transform: translateY(-3px);

            box-shadow:
                0 0 30px rgba(0,255,170,0.5);
        }


        .btn-outline {

            border: 1px solid #a78bfa;

            color: #a78bfa;
        }


        .btn-outline:hover {

            background: #a78bfa;

            color: #090a0f;

            box-shadow:
                0 0 20px rgba(167,139,250,0.4);
        }


        .btn-whatsapp {

            border: 1px solid #00ffaa;

            color: #00ffaa;
        }


        .btn-whatsapp:hover {

            background: #00ffaa;

            color: #07100c;
        }


        /* =========================
           SECTION HEADINGS
        ========================= */

        .section h2 {

            font-size: 42px;

            color: #ffffff;

            margin-bottom: 25px;

            font-family: monospace;
        }


        .section h2::before {

            content: "// ";

            color: #00ffaa;
        }


        .section-intro {

            max-width: 800px;

            color: #969ba5;

            font-size: 17px;

            line-height: 1.8;
        }


        /* =========================
           SKILLS
        ========================= */

        .skills {

            display: flex;

            flex-wrap: wrap;

            gap: 12px;

            margin-top: 30px;
        }


        .skill {

            padding: 12px 18px;

            border: 1px solid #29313a;

            background: rgba(20,23,32,0.7);

            color: #00ffaa;

            font-family: monospace;

            border-radius: 5px;

            transition: 0.2s;
        }


        .skill:hover {

            border-color: #00ffaa;

            box-shadow:
                0 0 15px rgba(0,255,170,0.15);

            transform: translateY(-3px);
        }


        /* =========================
           PROJECTS
        ========================= */

        .projects-grid {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;

            margin-top: 35px;
        }


        .project-card {

            background: rgba(16,18,27,0.85);

            border: 1px solid #29313a;

            border-radius: 8px;

            overflow: hidden;

            transition: 0.3s;

            box-shadow:
                0 0 20px rgba(0,0,0,0.25);
        }


        .project-card:hover {

            transform: translateY(-6px);

            border-color: #00ffaa;

            box-shadow:
                0 0 25px rgba(0,255,170,0.12);
        }


        .project-card img {

            width: 100%;

            height: 220px;

            object-fit: cover;

            display: block;
        }


        .project-content {

            padding: 25px;
        }


        .project-content h3 {

            color: #ffffff;

            font-size: 23px;
        }


        .project-content p {

            color: #9298a3;

            line-height: 1.7;
        }


        /* =========================
           CERTIFICATES
        ========================= */

        .certificates {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;

            margin-top: 35px;
        }


        .certificate {

            background: rgba(16,18,27,0.85);

            border: 1px solid #29313a;

            border-radius: 8px;

            padding: 15px;

            transition: 0.3s;
        }


        .certificate:hover {

            border-color: #a78bfa;

            transform: translateY(-5px);

            box-shadow:
                0 0 25px rgba(167,139,250,0.12);
        }


        .certificate img {

            width: 100%;

            height: 250px;

            object-fit: contain;

            background: #0c0e14;

            border-radius: 5px;
        }


        .certificate h3 {

            color: #ffffff;
        }


        .certificate p {

            color: #858b96;
        }


        /* =========================
           CONTACT
        ========================= */

        .contact-box {

            margin-top: 30px;

            padding: 35px;

            background: rgba(16,18,27,0.85);

            border: 1px solid #29313a;

            border-left: 3px solid #00ffaa;

            border-radius: 8px;
        }


        .contact-box p {

            color: #aaa;

            font-size: 17px;
        }


        .contact-box a:not(.btn) {

            color: #00ffaa;

            text-decoration: none;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 800px) {

            .navbar {

                left: 50%;

                top: auto;
                bottom: 15px;

                transform: translateX(-50%);

                width: auto;

                display: flex;

                padding: 8px 10px;

                border-radius: 12px;
            }


            .navbar-logo {

                display: none;
            }


            .navbar a {

                width: 45px;

                margin: 0 3px;
            }


            .nav-label {

                display: none;
            }


            main {

                margin-left: 0;

                padding-bottom: 80px;
            }


            .section {

                padding: 80px 25px;

                min-height: auto;
            }


            .hero {

                flex-direction: column-reverse;

                text-align: center;

                padding-top: 70px;
            }


            .hero-image {

                min-width: 0;
            }


            .hero-image img {

                width: 220px;
                height: 220px;
            }


            .hero-image::before {

                width: 270px;
                height: 270px;
            }


            .hero-text h1 {

                font-size: 48px;
            }


            .hero-text h2 {

                font-size: 17px;
            }


            .projects-grid,
            .certificates {

                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    {{-- ================= NAVBAR ================= --}}

    <nav class="navbar">

        <div class="navbar-logo">
            AM
        </div>


        <a href="{{ url('/') }}">

            <span class="nav-icon">⌂</span>

            <span class="nav-label">
                Home
            </span>

        </a>


        <a href="{{ url('/') }}#about">

            <span class="nav-icon">◎</span>

            <span class="nav-label">
                About
            </span>

        </a>


        <a href="{{ url('/') }}#skills">

            <span class="nav-icon">◇</span>

            <span class="nav-label">
                Skills
            </span>

        </a>


        <a href="{{ url('/') }}#projects">

            <span class="nav-icon">▣</span>

            <span class="nav-label">
                Projects
            </span>

        </a>


        <a href="{{ url('/') }}#certificates">

            <span class="nav-icon">✦</span>

            <span class="nav-label">
                Certificates
            </span>

        </a>


        <a href="{{ url('/') }}#contact">

            <span class="nav-icon">✉</span>

            <span class="nav-label">
                Contact
            </span>

        </a>

    </nav>


    {{-- ================= PAGE CONTENT ================= --}}

    <main>

        @yield('content')

    </main>


</body>

</html>