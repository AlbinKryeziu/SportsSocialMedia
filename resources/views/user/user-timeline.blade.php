@include('user/container')
		

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
									</div><!-- recent activites -->
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers">
											<li>
												<figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Kelly Bill</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="time-line.html" title="">Issabel</a></h4>
													<a href="#" title="" class="underline">Add Friend</a>
												</div>
											</li>
											
										</ul>
									</div><!-- who's following -->
								</aside>
							</div>
							
							
						
							<div class="col-lg-6">
								<div class="loadMore">
									<div class="central-meta new-pst item">
										<div class="new-postbox">
											<figure>
												<img src="images/resources/admin2.jpg" alt="">
											</figure>
											<div class="newpst-input">
												<form method="Post"  action="{{ url('addPost') }}" enctype="multipart/form-data">
													@csrf
													<textarea rows="2" placeholder="write something" name="description"></textarea>
													<div class="attachments">
														<ul>
															
																<i class="fa fa-camera"></i>
																<label class="fileContainer">
																	<input type="file" name="image" id="image">
																</label>
															</li>
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
									@foreach($post as $key => $post)
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
												<form method="Post" action="{{ url('/delete/post', $post->id) }}">
													@csrf
													<span class="views" data-toggle="tooltip" style="margin-left:500px;">
														<button type="submit" class="fa fa-trash"></button>
													</span>
												</form>
												
												<figure>
													<img src="images/resources/friend-avatar10.jpg" alt="">
												</figure>
												<div class="friend-name">
													<ins><a href="{{ asset('storage/'.auth()->user()->profilePath) }}" title="">Janice Griffith</a></ins>
													<span>published: june,2 2018 19:PM</span>
												</div>
												<div class="description">
														
														<p>
														{{ $post->description }}
														</p>
													</div>
												<div class="post-meta">
													<div class="linked-image align-left">
														<a href="#" title=""><img src="{{ asset('storage/'.$post->pathPhotos) }}" alt=""></a>
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
															<li class="social-media">
																<div class="menu">
																  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																	</div>
																  </div>
																	<div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																	</div>
																  </div>
																  <div class="rotater">
																	<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																	</div>
																  </div>

																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								
									
						
	</section>

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
	</div><!-- side panel -->		
			
	@include('user/script')

</body>	
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $("#profile").on("change", function (ev) {
        var filedata = this.files[0];
        var imgtype = filedata.type;
        var match = ["image/jpeg", "image/jpg"];

        if (!(imgtype == match[0]) || imgtype == match[1]) {
            $("#mgs_ta").html('<p style="color:red">Plz select a valid type image..only jpg jpeg allowed</p>');
        } else {
            $("#mgs_ta").empty();

            var reader = new FileReader();

            reader.onload = function (ev) {
                $("#profile-pic").attr("src", ev.target.result).css("width", "230px").css("height", "230px");
            };
            reader.readAsDataURL(this.files[0]);
            var data = this.files[0].name;

            var url = "{{ url('/addprofile') }}";

            $.ajax({
                headers: { "X-CSRF-Token": $("meta[name=csrf_token]").attr("content") },
                url: url,
                type: "POST",
                data: data,
                enctype: "multipart/form-data",
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
            });
            // $.ajax({
            // headers:{'X-CSRF-Token':$('meta[name=csrf_token]').attr('content')},
            // async:true,
            // type:"post",
            // contentType:false,
            // url:url,
            // data:postData,
            // processData:false,
            // success:function(){
            //   console.log("success");
            // }

            //  });
        }
    });
</script>
