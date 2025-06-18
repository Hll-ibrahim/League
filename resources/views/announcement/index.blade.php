@extends('layouts.index')
@section('content')
    <div class="site-content mt-0">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-lg-8">

                    {{--                    <div class="alert alert-success">--}}
                    {{--                        <strong>3 Articles were found for your "<span class="text-success">Alchemists Roster</span>" search</strong>--}}
                    {{--                    </div>--}}

                    <!-- Search Results -->
                    <ul class="posts posts--simple-list posts--simple-list--search">

                        <a href="{{route('announcement.create')}}"><button class="btn btn-success mb-4">Create</button></a>
                        @foreach($announcements as $announcement)
                            @php
                                $categoryClass = '';
                                if (!empty($announcement->team?->name)) {
                                    $categoryClass = 'posts__item--category-1';
                                } elseif (!empty($announcement->league?->name)) {
                                    $categoryClass = 'posts__item--category-2';
                                } elseif (!empty($announcement->player?->name)) {
                                    $categoryClass = 'posts__item--category-3';
                                }
                            @endphp

                            <li class="posts__item card {{ $categoryClass }}">
                                <div class="posts__inner card__content">
                                    <div class="posts__cat">
                                        @if(!empty($announcement->league?->name))
                                            <span class="label posts__cat-label">{{ $announcement->league->name }}</span>
                                        @endif

                                        @if(!empty($announcement->team?->name))
                                            <span class="label posts__cat-label">{{ $announcement->team->name }}</span>
                                        @endif

                                        @if(!empty($announcement->player?->name))
                                            <span class="label posts__cat-label">{{ $announcement->player->name }}</span>
                                        @endif                                    </div>
                                    <h6 class="posts__title"><a href="#">{{$announcement->title}}</a></h6>
                                    <time datetime="2017-08-23" class="posts__date">{{$announcement->created_at}}</time>
                                    <div class="posts__excerpt">
                                        {{$announcement->description}}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>



                    @if($announcements->count())
                    <!-- Post Pagination -->
                    <nav class="post-pagination" aria-label="Blog navigation">
                        <ul class="pagination pagination--lg justify-content-center">
                            {{-- Önceki sayfa --}}
                            @if ($announcements->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $announcements->previousPageUrl() }}">&laquo;</a></li>
                            @endif

                            {{-- Sayfa numaraları --}}

                            @foreach ($announcements->getUrlRange(1, $announcements->lastPage()) as $page => $url)
                                @if ($page == $announcements->currentPage())
                                    <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                                @elseif ($page == 1 || $page == $announcements->lastPage() || abs($page - $announcements->currentPage()) <= 1)
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @elseif ($page == $announcements->currentPage() - 2 || $page == $announcements->currentPage() + 2)
                                    <li class="page-item disabled"><span class="page-link">...</span></li>
                                @endif
                            @endforeach


                            {{-- Sonraki sayfa --}}
                            @if ($announcements->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $announcements->nextPageUrl() }}">&raquo;</a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                            @endif
                        </ul>
                    </nav>
                    @endif
                    <!-- Post Pagination / End -->


                </div>
                <!-- Content / End -->
            </div>

        </div>
    </div>

@endsection
