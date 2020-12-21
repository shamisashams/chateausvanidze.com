<div class="category-pagination">
    @if($paginator->hasPages())
        @if ($paginator->onFirstPage())
            <a href="" onclick="return false;" class="left-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                    <g id="chevron-left" transform="translate(1 1.414)">
                        <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                              stroke-miterlimit="10" stroke-width="2"></path>
                    </g>
                </svg>
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="left-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                    <g id="chevron-left" transform="translate(1 1.414)">
                        <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                              stroke-miterlimit="10" stroke-width="2"></path>
                    </g>
                </svg>
            </a>
        @endif
        <div class="pagination-list">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" href="" onclick="return false;">{{$page}}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="left-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                    <g id="chevron-right" transform="translate(7.414 13.414) rotate(180)">
                        <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                              stroke-miterlimit="10" stroke-width="2"></path>
                    </g>
                </svg>
            </a>
        @else
            <a href="" onclick="return false;" rel="next" class="left-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                    <g id="chevron-right" transform="translate(7.414 13.414) rotate(180)">
                        <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                              stroke-miterlimit="10" stroke-width="2"></path>
                    </g>
                </svg>
            </a>
        @endif
    @else
        <a href="" onclick="return false;" class="left-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                <g id="chevron-left" transform="translate(1 1.414)">
                    <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" stroke-width="2"></path>
                </g>
            </svg>
        </a>
        <a href="" class="active" onclick="return false;">1</a>
        <a href="" onclick="return false;" rel="next" class="left-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                <g id="chevron-right" transform="translate(7.414 13.414) rotate(180)">
                    <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" stroke-width="2"></path>
                </g>
            </svg>
        </a>
    @endif
</div>
