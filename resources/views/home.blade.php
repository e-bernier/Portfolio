@extends('layout')

@section('title', 'Home - Portfolio')

@section('content')
    <!-- Presentation -->
    <section class="py-32">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-6xl font-bold text-white mb-6">
                {{ __("Hello, I'm Eloi") }}
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{ __("Computer Science student passionate about programming, whether it be web development, robotics, mobile applications or many others.") }}
            </p>
            <div class="flex justify-center gap-4">
                <a href="javascript:void(0)" 
                    onclick="document.getElementById('projects').scrollIntoView()"
                    class="px-8 py-4 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-all duration-300 hover:-translate-y-1 hover:scale-105 cursor-pointer">
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
                    <p class="text-gray-400 text-lg">
                        {{ __("No projects yet.") }}
                    </p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <x-project :project="$project" />
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experiences" class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-white mb-12 text-center">
                {{ __("Other experiences") }}
            </h2>
            @if($experiences->isEmpty())
                <div class="text-center py-12">
                    <p class="text-gray-400 text-lg">
                        {{ __("No experiences yet.") }}
                    </p>
                </div>
            @else
                <div class="flex flex-col gap-6">
                    @foreach($experiences as $experience)
                        <x-experience :experience="$experience" />
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

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" label="Laravel" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/fusion/fusion-plain.svg" label="Fusion 360" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-plain.svg" label="Java" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/scala/scala-plain.svg" label="Scala" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/c/c-original.svg" label="C" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/arduino/arduino-original.svg" label="Arduino" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-plain.svg" label="Java Script" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain.svg" label="HTML5" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/opengl/opengl-plain.svg" label="OpenGL" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" label="Git" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" label="GitHub" />
                <x-skill logo="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/kotlin/kotlin-original.svg" label="Kotlin" />
            </div>
        </div>
    </section>
@endsection