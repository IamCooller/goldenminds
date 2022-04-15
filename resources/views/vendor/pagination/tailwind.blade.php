@if ($paginator->hasPages())

    <nav class="paggination">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li  aria-current="page">
                                <span>{{ $element }}</span>
                            </li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li aria-current="page">
                                        <span>{{ $page }}</span>
                                    </li>
                                @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="hoverBtn"> <svg class="paggination-next" width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="37" cy="37" r="36.5" stroke="#E4E4E4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4364 37.8017L42.8728 37.8017L39.9666 40.7087C38.3682 42.3075 37.0605 43.6525 37.0605 43.6976C37.0605 43.7426 37.3045 44.0217 37.6028 44.3177L38.1452 44.856L42.0727 40.9279L46 36.9999L42.0727 33.0719L38.1452 29.1438L37.6028 29.6821C37.3045 29.9781 37.0605 30.2572 37.0605 30.3022C37.0605 30.3473 38.3682 31.6923 39.9666 33.2911L42.8728 36.1981L35.4364 36.1981L28 36.1981L28 36.9999L28 37.8017L35.4364 37.8017Z" fill="#1E2A5E"/>
                            </svg>
                        </a>
                    </li>
                    
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
    </nav> 
@endif
