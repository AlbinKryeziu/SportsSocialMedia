@include('user/header-timeline')

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                @include('user/assets/shortcuts')
                            </aside>
                        </div>
                        <!-- sidebar -->

                        <div class="col-lg-6">
                            <div class="central-meta new-pst">
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
                            <!-- add post new box -->
                            <div class="loadMore">
                                @foreach($post as $key => $post)

                                <div class="central-meta item">
                                    <div class="user-post">
                                        @if(auth()->user()->id == $post->user_id)
                                          <td> <i class="fa fa-trash  deleteUser" data-postId="{{$post->id}}" aria-hidden="true" style="float: right; padding-right: 10px;"></i></td>  
                                        @endif
                                        <span style="padding: 10px;">
                                          <td><i class="fa fa-eye-slash  hiddePost" data-postId="{{$post->id}}" aria-hidden="true" style="float: right; padding-right: 10px;"></i> 
                                           
                                        </span>
                                        <div class="friend-info">
                                            <figure>
                                                <img src="{{ asset('storage/'.$post->user->profilePath) }}" style="height: 40px; width: 100px;" alt="" />
                                            </figure>
                                            <div class="friend-name">
                                                @if(auth()->user()->id == $post->user_id)
                                                
                                                <ins><a href="{{ url('/user/photo') }}" title="">{{ $post->user->name }}</a></ins>
                                                @else 
                                                <ins><a href="{{ url('friends/profile/'.$post->user->id) }}" title="">{{ $post->user->name }}</a></ins>
                                                @endif
                                                <span>published: {{Carbon\Carbon::parse($post->created_at)->format('d-m-Y H:s') }}</span>
                                            </div>
                                            <div class="post-meta">
                                                <div class="description">
                                                    <p>
                                                        {{ $post->description }}
                                                    </p>
                                                </div>
                                                <img src="{{ asset('storage/'.$post->pathPhotos) }}" alt="" />
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
                                        <div class="coment-area">
                                            <ul class="we-comet">
                                                <li>
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="" />
                                                    </div>
                                                    <div class="we-comment">
                                                        <div class="coment-head">
                                                            <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                            <span>1 year ago</span>
                                                        </div>
                                                        <p>{{ $post->description }}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="images/resources/comet-1.jpg" alt="" />
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="post">
                                                            <textarea placeholder="Post your comment"></textarea>
                                                            <div class="add-smiles">
                                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Your page</h4>
                                    <div class="your-page">
                                        <figure>
                                            <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt="" /></a>
                                        </figure>
                                        <div class="page-meta">
                                            <a href="#" title="" class="underline">My page</a>
                                            <span>
                                                <i class="ti-comment"></i><a href="insight.html" title="">Messages <em>9</em></a>
                                            </span>
                                            <span>
                                                <i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a>
                                            </span>
                                        </div>
                                        <div class="page-likes">
                                            <ul class="nav nav-tabs likes-btn">
                                                <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">likes</a></li>
                                                <li class="nav-item"><a class="" href="#link2" data-toggle="tab">views</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active fade show" id="link1">
                                                    <span><i class="ti-heart"></i>884</span>
                                                    <a href="#" title="weekly-likes">35 new likes this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="link2">
                                                    <span><i class="ti-eye"></i>440</span>
                                                    <a href="#" title="weekly-likes">440 new views this week</a>
                                                    <div class="users-thumb-list">
                                                        <a href="#" title="Anderw" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-1.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="frank" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-2.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Sara" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-3.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Amy" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-4.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Ema" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-5.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Sophie" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-6.jpg" alt="" />
                                                        </a>
                                                        <a href="#" title="Maria" data-toggle="tooltip">
                                                            <img src="images/resources/userlist-7.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- page like widget -->
                                <div class="widget">
                                    <div class="banner medium-opacity bluesh">
                                        <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg);"></div>
                                        <div class="baner-top">
                                            <span><img alt="" src="images/book-icon.png" /></span>
                                            <i class="fa fa-ellipsis-h"></i>
                                        </div>
                                        <div class="banermeta">
                                            <p>
                                                create your own favourit page.
                                            </p>
                                            <span>like them all</span>
                                            <a data-ripple="" title="" href="#">start now!</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">New Friends</h4>
                                            <ul class="followers">
                                                @foreach($user as $key => $user)

                                                <li>
                                                   
                                                    <figure><img src="{{ asset('storage/'.$user->profilePath) }}" alt="" style="height: 40px; width: 100px;" /></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="{{ url('friends/profile/'.$user->id) }}" title="">{{ $user->name }}</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                    
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="chat-box">
                                    <div class="chat-head">
                                        <span class="status f-online"></span>
                                        <h6>Bucky Barnes</h6>
                                        <div class="more">
                                            <span><i class="ti-more-alt"></i></span>
                                            <span class="close-mesage"><i class="ti-close"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>

        <div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <form action="{{ url('newfeed/delete/post') }}" method="POST" class="remove-record-model">
                @csrf
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="fa fa-times"></i>
                        </div>						
                        <h4 class="modal-title w-100">Are you sure?</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records ?</p>
                        <input type="hidden", name="postId" id="app_id">
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
              </form>
            </div>
        </div>     
    </div>

    <div id="hiddePost" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <form action="{{ url('newfeed/hidde/post')}}" method="POST" class="remove-record-model">
            @csrf
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="fa fa-eye-slash"></i>
                    </div>						
                    <h4 class="modal-title w-100">Are you sure?</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to hidde these records ?</p>
                    <input type="hidden", name="postId" id="post">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Hidden</button>
                </div>
            </div>
          </form>
        </div>
    </div>     
</div>
    @include('user/script')
</section>
<script>
    $(document).on('click','.deleteUser',function(){
        var userID=$(this).attr('data-postId');
        $('#app_id').val(userID); 
        $('#applicantDeleteModal').modal('show'); 
    });

    $(document).on('click','.hiddePost',function(){
        var userID=$(this).attr('data-postId');
        $('#post').val(userID); 
        $('#hiddePost').modal('show'); 
    });
    </script>

