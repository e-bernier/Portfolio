@props(['experience'])

<div class="bg-gray-900/50 backdrop-blur-sm rounded-lg border border-gray-800 p-8 transition duration-300">
    
    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-4">
        <!-- Title and Date -->
        <div class="flex-1">
            <h3 class="text-2xl font-bold text-white mb-2">
                {{ $experience->title }}
            </h3>
            
            <!-- Date -->
            <div class="flex items-center gap-2 text-sm text-gray-400">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                <span>{{ $experience->project_date ? $experience->project_date->format('F Y') : 'Date unknown' }}</span>
            </div>
        </div>

        <!-- Technologies on the right (desktop) -->
        @if(!empty($experience->technologies))
            <div class="flex flex-wrap gap-2 md:justify-end">
                @foreach($experience->technologies as $tech)
                    <span class="text-xs px-3 py-1.5 bg-gray-800 text-gray-300 rounded-lg border border-gray-700 font-medium">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Description -->
    <p class="text-gray-300 leading-relaxed text-base">
        {{ $experience->description }}
    </p>
</div>