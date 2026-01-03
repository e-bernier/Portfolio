@extends('layout')

@section('title', ($project->title ?? 'Project') . ' - Portfolio')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <!-- Project header -->
        <header class="mb-8">
            <div class="mb-4">
                <span class="inline-block px-3 py-1 text-sm font-medium text-blue-400 bg-blue-400/10 rounded-full border border-blue-400/20">
                    {{ $project->category ?? 'Uncategorized' }}
                </span>
            </div>
            
            <h1 class="text-4xl font-bold text-white mb-4">
                {{ $project->title ?? 'Project title' }}
            </h1>
            
            <p class="text-lg text-gray-300 mb-4">
                {{ $project->description ?? 'Description not available' }}
            </p>
            
            <div class="flex items-center gap-4 text-sm text-gray-400">
                <span class="flex items-center gap-1">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    {{ $project->project_date ? $project->project_date->format('F Y') : 'Unknown date' }}
                </span>

                @if($project->github_url ?? false)
                    <a href="{{ $project->github_url }}" target="_blank" class="text-blue-400 hover:text-blue-300 transition flex items-center gap-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                        {{ __("View on GitHub") }}
                    </a>
                @endif
                @if($project->demo_url ?? false)
                    <a href="{{ $project->demo_url }}" target="_blank" class="text-blue-400 hover:text-blue-300 transition flex items-center gap-1">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                        {{ __("View Demo") }}
                    </a>
                @endif
            </div>
        </header>

        <!-- Detailed content -->
        @if($project->content ?? false)
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ __("About the project") }}</h2>
            <div class="prose prose-invert prose-lg max-w-none text-gray-300 leading-relaxed">
                {!! nl2br(e($project->content)) !!}
            </div>
        </section>
        @endif

        <!-- Gallery images -->
        @php
            $allImages = [];
            if ($project->main_image) {
                $allImages[] = $project->main_image;
            }
            if (!empty($project->gallery_images)) {
                $allImages = array_merge($allImages, $project->gallery_images);
            }
        @endphp

        @if(!empty($allImages))
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ __("Gallery") }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($allImages as $index => $image)
                    <button data-lightbox-index="{{ $index }}" data-lightbox-src="{{ asset('images/' . $image) }}" 
                            class="group relative rounded-lg overflow-hidden border border-gray-800 hover:border-blue-500/50 transition duration-300 cursor-pointer">
                        <div class="relative bg-gray-900 aspect-video">
                            <!-- Blurry background -->
                            <img src="{{ asset('images/' . $image) }}"
                                class="absolute inset-0 w-full h-full object-cover blur-lg scale-110 opacity-60">

                            <!-- Main image -->
                            <img src="{{ asset('images/' . $image) }}" 
                                alt="{{ $project->title }} - Image {{ $index + 1 }}"
                                class="relative w-full h-full object-contain">

                            <!-- Overlay with zoom icon -->
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                                <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                @endforeach
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
            <button id="lightbox-close" class="absolute top-4 right-4 text-white hover:text-gray-300 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <button id="lightbox-prev" class="absolute left-4 text-white hover:text-gray-300 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="lightbox-next" class="absolute right-4 text-white hover:text-gray-300 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="relative max-w-6xl max-h-full">
                <img id="lightbox-image" src="" alt="" class="max-w-full max-h-[90vh] object-contain">
            </div>
        </div>
        @endif

        <!-- Technologies used -->
        @if(!empty($project->technologies))
        <section class="mb-8">
            <h2 class="text-2xl font-bold text-white mb-4">{{ __("Technologies") }}</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($project->technologies as $tech)
                    <span class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg font-medium border border-gray-700">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        </section>
        @endif

        <!-- Call to action -->
        <section class="mt-12 pt-8 border-t border-gray-800">
            <div class="text-center">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}"
                id="view-all-projects-btn"
                class="inline-block px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition hover:scale-105 hover:-translate-y-1">
                    {{ __("View all projects") }}
                </a>
            </div>
        </section>
    </div>
@endsection