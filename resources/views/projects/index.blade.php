@extends('layouts.admin')

@section('content')

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <div>
            <h1>Projects</h1>
            <p>Manage your portfolio projects.</p>
        </div>

        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            + Add Project
        </a>

    </div>


    @if($projects->count() > 0)

        @foreach($projects as $project)

            <div class="card">

                <div style="display:flex; gap:25px; align-items:flex-start;">

                    {{-- Project Image --}}

                    <div>

                        @if($project->image)

                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                class="project-image"
                            >

                        @else

                            <div style="
                                width:180px;
                                height:120px;
                                background:#e5e7eb;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                border-radius:8px;
                                color:#6b7280;
                            ">
                                No Image
                            </div>

                        @endif

                    </div>


                    {{-- Project Information --}}

                    <div style="flex:1;">

                        <h2 style="margin-top:0;">
                            {{ $project->title }}
                        </h2>

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

                        <p>
                            <strong>Status:</strong>

                            <span style="
                                background:#dcfce7;
                                color:#166534;
                                padding:4px 10px;
                                border-radius:20px;
                                font-size:12px;
                            ">
                                {{ $project->status }}
                            </span>

                        </p>


                        {{-- Links --}}

                        @if($project->github_url)

                            <a
                                href="{{ $project->github_url }}"
                                target="_blank"
                                class="btn btn-primary"
                            >
                                GitHub
                            </a>

                        @endif


                        @if($project->live_url)

                            <a
                                href="{{ $project->live_url }}"
                                target="_blank"
                                class="btn btn-primary"
                            >
                                Live Project
                            </a>

                        @endif

                    </div>


                    {{-- Actions --}}

                    <div>

                        <a
                            href="{{ route('projects.edit', $project->id) }}"
                            class="btn btn-warning"
                        >
                            Edit
                        </a>


                        <form
                            action="{{ route('projects.destroy', $project->id) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this project?')"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @endforeach

    @else

        <div class="card">

            <h2>No Projects Yet</h2>

            <p>You haven't added any projects.</p>

            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                Add Your First Project
            </a>

        </div>

    @endif

@endsection