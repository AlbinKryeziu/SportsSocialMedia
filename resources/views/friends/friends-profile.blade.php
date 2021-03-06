@include('user/includes/header')

<section>
    @foreach($user as $key => $user)
    <div class="feature-photo">
        <figure><img src="{{ asset('store/'.$user->profilePath) }}" style="object-fit: cover; height: 60vh;" alt="" /></figure>

        <div class="add-btn">
            <span>1205 followers</span>
            @if (!Auth::User()->isFollowing($user->id)) 
            <form method="Post" action="{{ url('follow/'.$user->id) }}">
                @csrf
                <div class="btn-group mr-2 float-right" role="group" aria-label="First group"> 
                </div>
                <div class="btn-group mr-2 float-right" role="group" aria-label="First group">
                  <button type="submit"  style="background-color:#088dcd ">Follow</button>
                  
                </div>
            
              </form>
            @else
            <form method="Post" action="{{ url('unfollow/user/all') }}">
                @csrf
                <input type="hidden" name="followersId" value="{{ $user->id }}">
               <button type="submit" class="add-butn more-action float-right ">Unfollow</button>  
              </form>
            @endif

        </div>

        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img id="profile-pic" src="{{ asset('store/'.$user->profilePath) }}" style="height: 200px; width: 200px; object-fit: cover;" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>{{ $user->name }}</h5>
                                <span></span>
                            </li>
                            <li>
                                <a class="{!! Request::is('friends/profile/'.$user->id) ? 'active' : '' !!}" href="{{ url('friends/profile/'.$user->id) }}" title="" data-ripple="">time line</a>
                                <a class="{!! Request::is('friends/photo/'.$user->id) ? 'active' : '' !!}" href="{{ url('friends/photo/'.$user->id) }}" title="" data-ripple="">Photos</a>
                                <a class="{!! Request::is('friends/about/'.$user->id) ? 'active' : '' !!}" href="{{ url('friends/about/'.$user->id) }}" title="" data-ripple="">about</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Socials</h4>
                                    <ul class="socials">
                                        <li class="facebook">
                                            <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                        </li>
                                        <li class="twitter">
                                            <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                        </li>
                                        <li class="google">
                                            <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">Recent Activity</h4>
                                    <ul class="activitiez">
                                        <li>
                                            <div class="activity-meta">
                                                <i>10 hours Ago</i>
                                                <span><a href="#" title="">Commented on Video posted </a></span>
                                                <h6>by <a href="newsfeed.html">black demon.</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>30 Days Ago</i>
                                                <span><a href="newsfeed.html" title="">Posted your status. “Hello guys, how are you?”</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>2 Years Ago</i>
                                                <span><a href="#" title="">Share a video on her timeline.</a></span>
                                                <h6>"<a href="newsfeed.html">you are so funny mr.been.</a>"</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- recent activites -->
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Who's follownig</h4>
                                    <ul class="followers">
                                        <li>
                                            <figure><img src="images/resources/friend-avatar2.jpg" alt="" /></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar4.jpg" alt="" /></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- who's following -->
                            </aside>
                        </div>

                        <div class="col-lg-6">
                            <div class="loadMore">
                                <div class="central-meta new-pst item">
                                    <div class="new-postbox">
                                        <figure>
                                            <img src="images/resources/admin2.jpg" alt="" />
                                        </figure>
                                    </div>
                                </div>

                                <!-- add post new box -->
                                @forelse($user->post as $key => $post)

                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <figure>
                                                <img src="images/resources/friend-avatar10.jpg" alt="" />
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="{{ asset('storage/'.auth()->user()->profilePath) }}" title="">{{ $post->user->name }}</a></ins>
                                                <span>published: {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y H:s') }}</span>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    {{ $post->description }}
                                                </p>
                                            </div>
                                            <div class="post-meta">
                                                <div class="linked-image align-left">
                                                    <a href="#" title=""><img src="{{ asset('storage/'.$post->pathPhotos) }}" alt="" /></a>
                                                </div>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-eye"></i>
                                                                <ins>1.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip" title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="like" data-toggle="tooltip" title="like">
                                                                <i class="ti-heart"></i>
                                                                <ins>2.2k</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                <i class="ti-heart-broken"></i>
                                                                <ins>200</ins>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p style="text-align: center;">No Post</p>
                                @endforelse @endforeach

                                <div class="side-panel">
                                    <h4 class="panel-title">Account Setting</h4>
                                    <form method="post">
                                        <div class="setting-row">
                                            <span>Sub users</span>
                                            <input type="checkbox" id="switch66" />
                                            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>personal account</span>
                                            <input type="checkbox" id="switch77" />
                                            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Business account</span>
                                            <input type="checkbox" id="switch88" />
                                            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Show me online</span>
                                            <input type="checkbox" id="switch99" />
                                            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Delete history</span>
                                            <input type="checkbox" id="switch101" />
                                            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                        <div class="setting-row">
                                            <span>Expose author name</span>
                                            <input type="checkbox" id="switch111" />
                                            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                                        </div>
                                    </form>
                                </div>
                                <!-- side panel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('user/includes/script')
</body>
</html>
