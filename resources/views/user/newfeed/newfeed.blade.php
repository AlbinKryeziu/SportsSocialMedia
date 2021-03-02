@include('user/includes/header')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

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
                                        <img src="{{ asset('store/'.auth()->user()->profilePath) }}" style="height: 40px; width: 40px; object-fit:cover;" alt="" />
                                    </figure>
                                    <div class="newpst-input">
                                        @error('description')
                                        <label class="error" style="color: red; font-size:13px;">{{ $message }}</label>
                                        @enderror
                                        <form method="Post" action="{{ url('addPost') }}" enctype="multipart/form-data">
                                            @csrf
                                            <textarea rows="2" placeholder="Write something" name="description"></textarea>
                                           
                                            <div class="attachments">
                                                <ul>
                                                    <i class="fa fa-camera"></i>
                                                    <label class="fileContainer ">
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
                                                <img src="{{ asset('store/'.$post->user->profilePath) }}" style="height: 40px; width: 40px; object-fit:cover;" alt="" />
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
                                                <img src="{{ asset('store/'.$post->pathPhotos) }}" alt="" />
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
                                            </div>
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
                                                            @if($comments->user_id == auth()->user()->id || $comments->post->user_id == auth()->user()->id)
                                                          
                                                            <a  class="fa fa-trash commentDelete" data-commentId="{{$comments->id}}"  style="float: right; font-size:13px;"></a>
                                                            @endif
                                                            <h5><a href="" title="">{{ $comments->user->name }}</a></h5>
                                                            <span>{{ Carbon\Carbon::parse($comments->created_at)->format('d-m-Y H:i')}}</span>
                                                        </div>
                                                        <p style="width: 340px;">{{ $comments->comment }} </p>
                                                       
                                                    </div>
                                                </li>
                                                @endforeach
                                                <li>
                                                    <a href="#" title="" class="showmore underline">more comments</a>
                                                </li>
                                                <li class="post-comment">
                                                    <div class="comet-avatar">
                                                        <img src="{{ asset('store/'.$post->user->profilePath) }}"style="height: 30px; width: 60px;" alt="" />
                                                    </div>
                                                    <div class="post-comt-box">
                                                        <form method="POST" action="{{ url('newfeed/comment/create') }}">
                                                            @csrf
                                                            <textarea placeholder="Post your" name="comment" id="comment"></textarea>
                                                            
                                                            <input type="hidden" value="{{ $post->id }}" name="postId" id="postId">
                                                            <div class="add-smiles">
                                                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                            </div>
                                                            <button type="submit" class="btn-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                        </form>
                                                    </div>
                                                    {{-- <form>
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="Comment">Comment:</label>
                                                            <input type="text" class="form-control" id="comment" placeholder="Enter email" name="comment">
                                                            <span class="text-danger error-text comment"></span>
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                                    </form> --}}
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
                            
                             
                                    <aside class="sidebar static">
                                        <div class="widget">
                                            <h4 class="widget-title">New Friends</h4>
                                            <ul class="followers">
                                                @foreach($user as $key => $user)
                                                <li>
                                                    <figure> <a href="{{ url('friends/profile/'.$user->id) }}"><img src="{{ asset('store/'.$user->profilePath) }}" alt="" style="height: 40px; width: 40px; object-fit:cover;" /></a></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="{{ url('friends/profile/'.$user->id) }}" title="">{{ $user->name }}</a></h4>
                                                        <form method="POST" action="{{ url('follow/'.$user->id) }}">
                                                            
                                                            @csrf
                                                        <button type="submit">Follow</button>
                                                        </form>
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
                    <p>Do you really want to hide these records  ?</p>
                    <input type="hidden", name="postId" id="post">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Hide</button>
                </div>
            </div>
          </form>
        </div>
    </div>     
</div>
<div id="deleteComment" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <form action="{{ url('delete/comment') }}" method="POST" class="remove-record-model">
        @csrf
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="fa fa-trash"></i>
                </div>						
                <h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete this comment ?</p>
                <input type="hidden", name="commentId" id="commentId">
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
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var comment = $("#comment").val();
             var postId =  $("#postId").val(); 
           

            $.ajax({
                url: "{{ route('storePost') }}",
                type:'POST',
                data: {_token:_token, comment:comment , postId:postId},
                success: function(data) {
                    $('textarea').val('');
                  printMsg(data);
                 
                }
            });
        }); 

        function printMsg (msg) {
          if($.isEmptyObject(msg.error)){
              console.log(msg.success);
              $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
             
          }else{
            $.each( msg.error, function( key, value ) {
              $('.'+key+'_err').text(value);
              
            });
          }
        }
    });
</script> --}}

</section>
</body>
</html>
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
    $(document).on('click','.commentDelete',function(){
        var userID=$(this).attr('data-commentId');
        $('#commentId').val(userID); 
        $('#deleteComment').modal('show'); 
    });
    </script> 

