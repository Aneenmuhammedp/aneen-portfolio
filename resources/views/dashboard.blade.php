@extends('layouts.admin')

@section('content')

    <h1>Dashboard</h1>

    <p>Welcome to your Portfolio Admin Panel.</p>

    <div class="card">

        <h2>Projects</h2>

        <h1>{{ $projectCount }}</h1>

        <p>Total Projects</p>

        <a href="{{ route('projects.index') }}" class="btn btn-primary">
            Manage Projects
        </a>

    </div>

@endsection