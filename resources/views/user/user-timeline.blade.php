@include('user/includes/header')
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
                               @include('user/includes/shortcuts')
                                <!-- Shortcuts -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="loadMore">
                                <div class="central-meta new-pst item">
                                    <div class="new-postbox">
                                        <figure>
                                            <img src="{{ asset('store/'.auth()->user()->profilePath) }}"style="height: 40px; width: 40px; object-fit:cover;" alt="" />
                                        </figure>
                                        <div class="newpst-input">
                                            <form method="Post" action="{{ url('addPost') }}" enctype="multipart/form-data">
                                                @csrf
                                                <textarea rows="2" placeholder="write something" name="description"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <i class="fa fa-camera"></i>
                                                        <label class="fileContainer">
                                                            <input type="file" name="image" id="image" />
                                                        </label>

                                                        <li>
                                                            <button type="submit">Publish</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @foreach($post as $key => $post)
                                <div class="central-meta item">
                                    <div class="user-post">
                                        <div class="friend-info">
                                            <form method="Post" action="{{ url('/delete/post', $post->id) }}">
                                                @csrf
                                                <span class="views" data-toggle="tooltip" style="margin-left: 500px;">
                                                    <button type="submit" class="fa fa-trash" style="background-color:white; border:none; color:black"></button>
                                                </span>
                                            </form>

                                            <figure>
                                                <img id="profile-pic" src="{{ asset('store/'.auth()->user()->profilePath) }}" style="height: 30px; width: 30px; object-fit:cover;" alt="" />
                                            </figure>
                                            <div class="friend-name">
                                                <ins><a href="{{ asset('store/'.auth()->user()->profilePath) }}" title="">{{ $post->user->name }}</a></ins>
                                                <span>published: {{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y H:s') }}</span>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    {{ $post->description }}
                                                </p>
                                            </div>
                                            
                                            <div class="post-meta">
                                                <div class="linked-image align-left">
                                                    <a href="#" title=""><img src="{{ asset('store/'.$post->pathPhotos) }}" alt="" /></a>
                                                </div>
                                                <div class="we-video-info">
                                                    <ul>
                                                        <li>
                                                            <span class="views" data-toggle="tooltip" title="views">
                                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                               
                                                                  <ins>{{$post->like->count() }}</ins>
                                                              
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip" title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>{{$post->comments->count()}}</ins> 
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        @foreach($post->comments as $key => $comments)
                                                        <li>
                                                            <div class="comet-avatar">
                                                                <img src="{{ asset('store/'.$comments->user->profilePath) }}" style="height: 40px; width: 40px; object-fit:cover;" alt="" />
                                                            </div>
                                                            <div class="we-comment">
                                                                <div class="coment-head">
                                                                    <h5><a href="" title="">{{ $comments->user->name }}</a></h5>
                                                                    <span>{{ Carbon\Carbon::parse($comments->created_at)->format('d-m-Y H:i')}}</span>
                                                                </div>
                                                                <p style="width: 340px;">{{ $comments->comment }}</p>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        <li>
                                                            <a href="#" title="" class="showmore underline">more comments</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Following</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        @foreach($myfriends as $key => $friends)
                                        
                                        <li>
                                            <figure>
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:30px; height:30px; object-fit:cover;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                               
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}">{{ $friends->friend->name }}</a>
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
<script src="{{ asset('socail/js/script.js') }}"></script>
