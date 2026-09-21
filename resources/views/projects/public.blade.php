@extends('layouts.app')

@section('title', 'Projects - My Portfolio')

@section('content')

    <h1>My Projects</h1>

    @if($projects->count() > 0)

        @foreach($projects as $project)

            <article>

                @if($project->image)

                    <img
                        src="{{ asset('storage/' . $project->image) }}"
                        alt="{{ $project->title }}"
                        width="300"
                    >

                @endif

                <h2>{{ $project->title }}</h2>

                <p>
                    {{ $project->description }}
                </p>

                <p>
                    <strong>Technologies:</strong>
                    {{ $project->technologies }}
                </p>

                <p>
                    <strong>Category:</strong>
                    {{ $project->category }}
                </p>

                @if($project->github_url)

                    <a
                        href="{{ $project->github_url }}"
                        target="_blank"
                    >
                        GitHub
                    </a>

                @endif

                @if($project->live_url)

                    <a
                        href="{{ $project->live_url }}"
                        target="_blank"
                    >
                        Live Project
                    </a>

                @endif

            </article>

            <hr>

        @endforeach

    @else

        <p>No projects available.</p>

    @endif

@endsection