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
                                            <img src="images/resources/admin2.jpg" alt="" />
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
                                                    <button type="submit" class="fa fa-trash"></button>
                                                </span>
                                            </form>

                                            <figure>
                                                <img id="profile-pic" src="{{ asset('store/'.auth()->user()->profilePath) }}" style="height: 40px; width: 50px;" alt="" />
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

                                                                <ins>500</ins>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="comment" data-toggle="tooltip" title="Comments">
                                                                <i class="fa fa-comments-o"></i>
                                                                <ins>52</ins>
                                                            </span>
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
                                    <h4 class="widget-title">Friends</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">bucky barnes</a>
                                                <i>wintersolder@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Sarah Loren</a>
                                                <i>barnes@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar3.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">jason borne</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar4.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Cameron diaz</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">daniel warber</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar6.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">andrew</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar7.jpg" alt="" />
                                                <span class="status f-off"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">amy watson</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">daniel warber</a>
                                                <i>jasonb@gmail.com</i>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                <span class="status f-away"></span>
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">Sarah Loren</a>
                                                <i>barnes@gmail.com</i>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="chat-box">
                                        <div class="chat-head">
                                            <span class="status f-online"></span>
                                            <h6>Bucky Barnes</h6>
                                            <div class="more">
                                                <span><i class="ti-more-alt"></i></span>
                                                <span class="close-mesage"><i class="ti-close"></i></span>
                                            </div>
                                        </div>
                                        <div class="chat-list">
                                            <ul>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="you">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="text-box">
                                                <textarea placeholder="Post enter to post..."></textarea>
                                                <div class="add-smiles">
                                                    <span title="add icon" class="em em-expressionless"></span>
                                                </div>
                                                <div class="smiles-bunch">
                                                    <i class="em em---1"></i>
                                                    <i class="em em-smiley"></i>
                                                    <i class="em em-anguished"></i>
                                                    <i class="em em-laughing"></i>
                                                    <i class="em em-angry"></i>
                                                    <i class="em em-astonished"></i>
                                                    <i class="em em-blush"></i>
                                                    <i class="em em-disappointed"></i>
                                                    <i class="em em-worried"></i>
                                                    <i class="em em-kissing_heart"></i>
                                                    <i class="em em-rage"></i>
                                                    <i class="em em-stuck_out_tongue"></i>
                                                </div>
                                                <button type="submit"></button>
                                            </form>
                                        </div>
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

<div class="bottombar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">© Winku 2018. All rights reserved.</span>
                <i><img src="images/credit-cards.png" alt="" /></i>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('socail/js/main.min.js') }}"></script>
<script src="{{ asset('socail/js/script.js') }}"></script>
