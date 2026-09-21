@extends('layouts.admin')

@section('content')

    <h1>Edit Project</h1>

    @if($project->image)
        <img
            src="{{ asset('storage/' . $project->image) }}"
            alt="{{ $project->title }}"
            width="200"
        >
        <br><br>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <input
            type="text"
            name="title"
            value="{{ $project->title }}"
            placeholder="Project Title"
        >
        <br><br>

        <input
            type="text"
            name="slug"
            value="{{ $project->slug }}"
            placeholder="Slug"
        >
        <br><br>

        <textarea
            name="description"
            placeholder="Description"
        >{{ $project->description }}</textarea>
        <br><br>

        <input type="file" name="image">
        <br><br>

        <input
            type="url"
            name="github_url"
            value="{{ $project->github_url }}"
            placeholder="GitHub URL"
        >
        <br><br>

        <input
            type="url"
            name="live_url"
            value="{{ $project->live_url }}"
            placeholder="Live Project URL"
        >
        <br><br>

        <input
            type="text"
            name="technologies"
            value="{{ $project->technologies }}"
            placeholder="Technologies"
        >
        <br><br>

        <input
            type="text"
            name="category"
            value="{{ $project->category }}"
            placeholder="Category"
        >
        <br><br>

        <input
            type="text"
            name="status"
            value="{{ $project->status }}"
            placeholder="Status"
        >
        <br><br>

        <button type="submit">
            Update Project
        </button>

    </form>

@endsection