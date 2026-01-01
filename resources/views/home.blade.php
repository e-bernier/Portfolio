@extends('layout')

@section('title', 'Home - Portfolio')

@section('content')
    <!-- Presentation -->
    <section class="py-32">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-6xl font-bold text-white mb-6">
                {{ __("Hi, I'm Eloi") }}
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __("Computer Science student passionate about web development, robotics and mobile applications") }}
            </p>
            <div class="flex justify-center gap-4">
                <a href="#projects" class="px-8 py-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition shadow-lg hover:shadow-blue-500/50">
                     {{ __("View my projects") }}
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-white mb-12 text-center">
                 {{ __("My Projects") }}
            </h2>

            @if($projects->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-400 text-lg">No projects yet.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}"
                            class="bg-gray-900/50 backdrop-blur-sm rounded-lg border border-gray-800 overflow-hidden hover:border-blue-500/50 transition duration-300 group">
                            <!-- Project image -->
                            @if($project->image)
                                <div class="relative h-48 overflow-hidden bg-gray-900">
                                    <!-- Blurry Image -->
                                    <img src="{{ asset('images/' . $project->image) }}"
                                        class="absolute inset-0 w-full h-full object-cover blur-lg scale-110 opacity-60">

                                    <!-- Image -->
                                    <img src="{{ asset('images/' . $project->image) }}"
                                        class="relative w-full h-full object-contain">
                                </div>
                            @else
                                <div class="h-48 bg-gradient-to-br from-blue-900/30 to-purple-900/30 flex items-center justify-center">
                                    <span class="text-6xl">💻</span>
                                </div>
                            @endif

                            <!-- Card content -->
                            <div class="p-6">
                                <!-- Category -->
                                <span class="inline-block px-3 py-1 text-xs font-medium text-blue-400 bg-blue-400/10 rounded-full mb-3 border border-blue-400/20">
                                    {{ $project->category }}
                                </span>

                                <!-- Title -->
                                <h3 class="text-xl font-bold text-white mb-2 group-hover:text-blue-400 transition">
                                    {{ $project->title }}
                                </h3>

                                <!-- Description -->
                                <p class="text-gray-400 mb-4 line-clamp-3">
                                    {{ $project->description }}
                                </p>

                                <!-- Technologies (max 3 displayed) -->
                                @if(!empty($project->technologies))
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach(array_slice($project->technologies, 0, 3) as $tech)
                                            <span class="text-xs px-2 py-1 bg-gray-800 text-gray-300 rounded border border-gray-700">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                        @if(count($project->technologies) > 3)
                                            <span class="text-xs px-2 py-1 bg-gray-800 text-gray-300 rounded border border-gray-700">
                                                +{{ count($project->technologies) - 3 }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-white mb-12 text-center">
                {{ __("Skills") }}
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-900/50 backdrop-blur-sm border border-gray-800 p-8 rounded-lg text-center hover:border-blue-500/50 transition">
                    <div class="text-5xl mb-3">🤖</div>
                    <h3 class="font-semibold text-white">{{ __("Robotics") }}</h3>
                </div>
                <div class="bg-gray-900/50 backdrop-blur-sm border border-gray-800 p-8 rounded-lg text-center hover:border-purple-500/50 transition">
                    <div class="text-5xl mb-3">📱</div>
                    <h3 class="font-semibold text-white">{{ __("Android") }}</h3>
                </div>
                <div class="bg-gray-900/50 backdrop-blur-sm border border-gray-800 p-8 rounded-lg text-center hover:border-pink-500/50 transition">
                    <div class="text-5xl mb-3">🌐</div>
                    <h3 class="font-semibold text-white">{{ __("Web Dev") }}</h3>
                </div>
                <div class="bg-gray-900/50 backdrop-blur-sm border border-gray-800 p-8 rounded-lg text-center hover:border-cyan-500/50 transition">
                    <div class="text-5xl mb-3">💾</div>
                    <h3 class="font-semibold text-white">{{ __("Databases") }}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection