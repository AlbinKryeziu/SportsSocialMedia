@include('user/includes/header')
@include('user/includes/section')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                @include('user/includes/shortcuts')
                                <!-- Shortcuts -->
                            </aside>
                        </div>
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <ul class="photos">
                                    @foreach($post as $key => $image)

                                    <li>
                                        <a class="strip" href="{{ asset('store/'.$image->pathPhotos) }}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                            <img src="{{ asset('store/'.$image->pathPhotos) }}" alt="" style="width: 100%; height: 100%;" />
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                            </div>
                            <!-- photos -->
                        </div>
                        <!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Following</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        @foreach($following as $key => $following)
                                        
                                        <li>
                                            <figure>
                                                <a href="{{ url('friends/profile/'.$following->following->id) }}" title=""><img style="width:30px; height:30px; object-fit:cover;" src="{{ asset('store/'.$following->following->profilePath) }}" alt=""   /></a>
                                             
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="{{ url('friends/profile/'.$following->following->id) }}">{{ $following->following->name }}</a>
                                                <i></i>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                  
                                </div>
                                <!-- friends list sidebar -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('user/includes/footer')

<script src="{{ asset('socail/js/main.min.js') }}"></script>
<script src="{{ asset('socail/js/script.js')}}"></script>
