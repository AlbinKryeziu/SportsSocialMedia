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
                                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Following</a> <span>{{ $following->count() }}</span></li>
                                        <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Followers</a><span>{{ $followers->count() }}</span></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show" id="frends">
                                            <ul class="nearby-contct">
                                                @foreach($following as $key => $following)
                                                    
                                              
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure  width="1450px;" height="45px"> 
                                                            <a href="{{ url('friends/profile/'.$following->following->id) }}" title=""><img style="width:40px; height:40px;" src="{{ asset('store/'.$following->following->profilePath) }}" alt=""   /></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="{{ url('friends/profile/'.$following->following->id) }}" title="">{{ $following->following->name }}</a></h4>
                                                            <span></span>
                                                            <form method="Post" action="{{ url('/unfollo/friends/'.$following->following->id) }}">
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
                                                @foreach($followers as $key => $followers)
                                                    
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure  width="1450px;" height="45px"> 
                                                            <a href="{{ url('friends/profile/'.$followers->followers->id) }}" title=""><img style="width:40px; height:40px;" src="{{ asset('store/'.$followers->followers->profilePath) }}" alt=""   /></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="{{ url('friends/profile/'.$followers->followers->id) }}" title="">{{ $followers->followers->name }}</a></h4>
                                                            <span></span>
                                                            <form method="Post" action="{{ url('/unfollo/friends/'.$followers->followers->id) }}">
                                                                @csrf
                                                                @if (Auth::User()->isFollowing($followers->followers->id)) 
                                                             <button type="submit" class="add-butn more-action float-right">Unfollow</button> 
                                                             @else
                                                             <button type="submit" class="add-butn more-action float-right">Follow</button> 
                                                             @endif
                                                               
                                                            </form>
                
                                                            {{-- <form method="Post" >
                                                            <a href="" title="" class="add-butn more-action" data-ripple="">unfriend</a>
                                                            </form> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
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
                                
                                <!-- who's following -->
                                 <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Following</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        @foreach($sectionfollowing as $key => $following)
                                        <li>
                                            <figure>
                                                <a href="{{ url('friends/profile/'.$following->following->id) }}" title=""><img style="width:30px; height:30px;" src="{{ asset('store/'.$following->following->profilePath) }}" alt=""   /></a>
                                              
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="{{ url('friends/profile/'.$following->following->id) }}">{{ $following->following->name }}</a>
                                                <i></i>
                                            </div>
                                        </li> 
                                        @endforeach
                                       
                                    </ul>
                                  
                                       
                                    </div>
                                  <div class="widget">
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Followers</h4>
                                    <ul class="followers">
                                        @foreach($sectionfollowers as $key => $followers)
                                        <li>
                                            <a href="{{ url('friends/profile/'.$followers->followers->id) }}" title=""><img style="width:30px; height:30px; border-radius: 50%;" src="{{ asset('store/'.$followers->followers->profilePath) }}" alt=""   /></a>
                                            <div class="friend-meta">
                                                <a href="{{ url('friends/profile/'.$followers->followers->id) }}">{{ $followers->followers->name }}</a>
                                            </div>
                                        </li>
                                        @endforeach
                                       
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



