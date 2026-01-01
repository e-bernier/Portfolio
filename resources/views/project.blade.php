@extends('layout')

@section('title', ($project->title ?? 'Project') . ' - Portfolio')

@section('header-actions')
    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-blue-600 hover:text-blue-800 transition">
        ← Back to portfolio
    </a>
@endsection

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Project header -->
        <header class="mb-8">
            <div class="mb-4">
                <span class="inline-block px-3 py-1 text-sm font-medium text-blue-600 bg-blue-100 rounded-full">
                    {{ $project->category ?? 'Uncategorized' }}
                </span>
            </div>
            
            <h1 class="text-4xl font-bold text-gray-900 mb-4">
                {{ $project->title ?? 'Project title' }}
            </h1>
            
            <p class="text-lg text-gray-600 mb-4">
                {{ $project->description ?? 'Description not available' }}
            </p>
            
            <div class="flex items-center gap-4 text-sm text-gray-500">
                <span>📅 {{ $project->project_date ? $project->project_date->format('F Y') : 'Unknown date' }}</span>
                @if($project->github_url ?? false)
                    <a href="{{ $project->github_url }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                        🔗 View on GitHub
                    </a>
                @endif
            </div>
        </header>

        <!-- Main image -->
        @if($project->image ?? false)
        <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('storage/' . $project->image) }}" 
                 alt="{{ $project->title ?? 'Project image' }}"
                 class="w-full h-auto">
        </div>
        @endif

        <!-- Technologies used -->
        @if(!empty($project->technologies))
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Technologies</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($project->technologies as $tech)
                    <span class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg font-medium">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Detailed content -->
        @if($project->content ?? false)
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">About the project</h2>
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! nl2br(e($project->content)) !!}
            </div>
        </section>
        @endif

        <!-- Call to action -->
        <section class="mt-12 pt-8 border-t border-gray-200">
            <div class="text-center">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                    View all projects
                </a>
            </div>
        </section>
    </div>
@endsection