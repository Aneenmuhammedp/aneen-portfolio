@extends('layouts.admin')

@section('content')

    <h1>Add Project</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <input
            type="text"
            name="title"
            placeholder="Project Title"
        >
        <br><br>

        <input
            type="text"
            name="slug"
            placeholder="Slug"
        >
        <br><br>

        <textarea
            name="description"
            placeholder="Description"
        ></textarea>
        <br><br>

        <input
            type="file"
            name="image"
        >
        <br><br>

        <input
            type="url"
            name="github_url"
            placeholder="GitHub URL"
        >
        <br><br>

        <input
            type="url"
            name="live_url"
            placeholder="Live Project URL"
        >
        <br><br>

        <input
            type="text"
            name="technologies"
            placeholder="Technologies"
        >
        <br><br>

        <input
            type="text"
            name="category"
            placeholder="Category"
        >
        <br><br>

        <input
            type="text"
            name="status"
            value="completed"
        >
        <br><br>

        <button type="submit">
            Save Project
        </button>

    </form>

@endsection