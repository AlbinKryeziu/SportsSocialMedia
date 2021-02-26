@include('user/includes/header')
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
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Profile intro</h4>
                                    <ul class="short-profile">
                                        <li>
                                            <span>about</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                        <li>
                                            <span>fav tv show</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                        <li>
                                            <span>favourit music</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- profile intro widget -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="frnds">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Following</a> <span>{{ $count }}</span></li>
                                        <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Followers</a><span>0</span></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show" id="frends">
                                            <ul class="nearby-contct">
                                                @foreach($myfriends as $key => $friends)
                                                    
                                              
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure  width="1450px;" height="45px"> 
                                                            <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:40px; height:40px;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="{{ url('friends/profile/'.$friends->friend->id) }}" title="">{{ $friends->friend->name }}</a></h4>
                                                            <span></span>
                                                            <form method="Post" action="{{ url('/unfollo/friends/'.$friends->friend->id) }}">
                                                                @csrf
                                                               
                                                             <button type="submit" class="add-butn more-action float-right">Unfollow</button> 
                                                               
                                                            </form>
                
                                                            {{-- <form method="Post" >
                                                            <a href="" title="" class="add-butn more-action" data-ripple="">unfriend</a>
                                                            </form> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                        </div>
                                        <div class="tab-pane fade" id="frends-req">
                                            <ul class="nearby-contct">
                                                <p style="text-align: center">No  followers</p>
                                            </ul>
                                            <button class="btn-view btn-load-more"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Who's following</h4>
                                    <ul class="followers">
                                        @foreach($myfriends as $key => $friends)
                                        <li>
                                            <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:30px; height:30px; border-radius: 50%;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                            <div class="friend-meta">
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}">{{ $friends->friend->name }}</a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- who's following -->
                                <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Friends</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                       
                                        {{-- <li>
                                            <figure>
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:30px; height:30px;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                              
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}">{{ $friends->friend->name }}</a>
                                                <i></i>
                                            </div>
                                        </li> --}}
                                      
                                       
                                    </ul>
                                  
                                       
                                    </div>
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
<script src="{{ asset('socail/js/script.js') }}"></script>



