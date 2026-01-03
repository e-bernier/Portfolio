@props(['project'])

<a href="{{ route('project.show', ['locale' => app()->getLocale(), 'slug' => $project->slug]) }}"
    class="bg-gray-900/50 backdrop-blur-sm rounded-lg border border-gray-800 overflow-hidden hover:border-blue-500/50 hover:scale-105 transition duration-300 group">

    <!-- Project image -->
    @if($project->main_image)
        <div class="relative h-48 overflow-hidden bg-gray-900">
            <!-- Blurry Image -->
            <img src="{{ asset('images/' . $project->main_image) }}"
                class="absolute inset-0 w-full h-full object-cover blur-lg scale-110 opacity-60">

            <!-- Net Image -->
            <img src="{{ asset('images/' . $project->main_image) }}"
                class="relative w-full h-full object-contain">
        </div>
    @endif

    <!-- Card content -->
    <div class="p-6 text-center">
        <!-- Category -->
        <span class="inline-block px-3 py-1 text-xs font-medium text-blue-400 bg-blue-400/10 rounded-full mb-3 border border-blue-400/20">
            {{ $project->category }}
        </span>

        <!-- Title -->
        <h3 class="text-xl font-bold text-white mb-2 transition">
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
