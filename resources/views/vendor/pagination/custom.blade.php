@if ($paginator->hasPages())
    <nav class="inline-flex rounded-md shadow">
        {{-- Lien Précédent --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-white bg-opacity-10 rounded-l-md cursor-not-allowed">
                Précédent
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
                class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 rounded-l-md hover:bg-opacity-20">
                Précédent
            </a>
        @endif

        {{-- Liens des pages --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-white bg-opacity-10">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <a href="{{ $url }}"
                        class="px-4 py-2 text-sm font-medium text-gold
                                            {{ $page == $paginator->currentPage() ? 'bg-white bg-opacity-20' : 'bg-white bg-opacity-10 hover:bg-opacity-20' }}">
                        {{ $page }}
                    </a>
                @endforeach
            @endif
        @endforeach

        {{-- Lien Suivant --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
                class="px-4 py-2 text-sm font-medium text-gold bg-white bg-opacity-10 rounded-r-md hover:bg-opacity-20">
                Suivant
            </a>
        @else
            <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-white bg-opacity-10 rounded-r-md cursor-not-allowed">
                Suivant
            </span>
        @endif
    </nav>
@endif
