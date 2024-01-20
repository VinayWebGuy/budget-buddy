<!-- resources/views/vendor/pagination/custom-pagination.blade.php -->

@if ($paginator->hasPages())
    <div class="pagination">
        <div class="all-pages">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <a href="{{ $paginator->previousPageUrl() }}" class="page_no" rel="prev">Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="page_dots">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="page_no active" href="#">{{ $page }}</a>
                        @else
                            <a class="page_no" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="page_no" rel="next">Next</a>
            @endif
        </div>
    </div>
@endif