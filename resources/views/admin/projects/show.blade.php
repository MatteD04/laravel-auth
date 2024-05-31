@extends('layouts.admin')

@section('content')
    <h2>{{ $project->name }}</h2>

    <div>
        <strong>ID</strong>: {{ $project->id }}
    </div>
    <div>
        <strong>Slug</strong>: {{ $project->slug }}
    </div>
    <div>
        <strong>Client name</strong>: {{ $project->client_name }}
    </div>
    <div>
        <strong>Created at</strong>: {{ $project->created_at }}
    </div>
    <div>
        <strong>Summary:</strong>
        <p>{{ $project->summary ? $project->summary : 'Non presente' }}</p>
    </div>
@endsection