@include('user/header-timeline')
<section>
    <div class="feature-photo">
        <figure><img src="{{ asset('socail/images/'.auth()->user()->profile_photo_path) }}" alt=""></figure>
        <div class="add-btn">
            <span>1205 followers</span>
            <a href="#" title="" data-ripple="">Add Friend</a>
        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
            <input type="file"/>
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img id="profile-pic" src="{{ asset('socail/images/'.auth()->user()->profilePath) }}" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file"/>
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                              <h5>Janice Griffith</h5>
                              <span>Group Admin</span>
                            </li>
                            <li>
                                <a class="active" href="{{ url('/user/photo') }}" title="" data-ripple="">time line</a>
									<a class="" href="{{ url('/photos/me ') }}" title="" data-ripple="" >Photos</a>
									<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
									<a class="" href="{{ url('/friends') }}" title="" data-ripple="">Friends</a>
									<a class="" href="{{ url('/aboutUs') }}" title="" data-ripple="">about</a>
									<a class="" href="#" title="" data-ripple="">more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->

<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Recent Activity</h4>
                                    <ul class="activitiez">
                                        <li>
                                            <div class="activity-meta">
                                                <i>10 hours Ago</i>
                                                <span><a title="" href="#">Commented on Video posted </a></span>
                                                <h6>by <a href="time-line.html">black demon.</a></h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>30 Days Ago</i>
                                                <span><a title="" href="#">Posted your status. “Hello guys, how are you?”</a></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-meta">
                                                <i>2 Years Ago</i>
                                                <span><a title="" href="#">Share a video on her timeline.</a></span>
                                                <h6>"<a href="#">you are so funny mr.been.</a>"</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Edit info</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="ti-info-alt"></i>
                                            <a title="" href="{{ url('/edit/info') }}">Basic info</a>
                                        </li>
                                        <li>
                                            <i class="ti-mouse-alt"></i>
                                            <a title="" href="{{ url('/edit/user') }}">Education &amp; Work</a>
                                        </li>
                                       
                                        <li>
                                            <i class="ti-lock"></i>
                                            <a title="" href="{{ url('/edit/pswd') }}">change password</a>
                                        </li>
                                       
                                        <li>
                                            <i class="ti-link"></i>
                                            <a href="edit-password.html" title="">Social</a>
                                        </li>
                                    </ul>
                                </div><!-- settings widget -->										
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-info-alt"></i> Edit Basic Information</h5>

                                    <form method="Post" action="{{ url('/change/profile') }}">
                                        @csrf
                                        <div class="form-group half">	
                                          <input type="text" id="input" name="name" />
                                          <label class="control-label" for="input">First Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group half">	
                                          <input type="text" name="surname"/>
                                          <label class="control-label" for="input">Last Name</label><i class="mtrl-select"></i>
                                        </div>
                                        
                                        <div class="form-group">	
                                          <input type="text" name="phone"/>
                                          <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="dob">
                                            <div class="form-group">
                                                <input type="date" id="birthday" name="birthday">
                                                <label class="control-label" for="input">Birthday.</label><i class="mtrl-select"></i>
                                            </div>
                                         
                                           
                                        </div>
                                        <div class="form-radio">
                                          <div class="radio">
                                            <label>
                                              <input type="radio" checked="checked" name="gender" value="1"><i class="check-box"></i>Male
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <input type="radio" name="gender" value="2"><i class="check-box"></i>Female
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-group">	
                                          <input type="text" name="city"/>
                                          <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                            <input type="text" name="country"/>
                                            <label class="control-label" for="input">Country</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">	
                                          <textarea rows="4" id="textarea" name="about"></textarea>
                                          <label class="control-label" for="textarea">About Me</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>	
                        </div><!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                        <h4 class="widget-title">Your page</h4>	
                                        <div class="your-page">
                                            <figure>
                                                <a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a class="underline" title="" href="#">My page</a>
                                                <span><i class="ti-comment"></i>Messages <em>9</em></span>
                                                <span><i class="ti-bell"></i>Notifications <em>2</em></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
                                                     <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                  <div id="link1" class="tab-pane active fade show">
                                                    <span><i class="ti-heart"></i>884</span>
                                                      <a title="weekly-likes" href="#">35 new likes this week</a>
                                                      <div class="users-thumb-list">
                                                          <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                            <img alt="" src="images/resources/userlist-1.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                            <img alt="" src="images/resources/userlist-2.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                            <img alt="" src="images/resources/userlist-3.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                            <img alt="" src="images/resources/userlist-4.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                            <img alt="" src="images/resources/userlist-5.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                            <img alt="" src="images/resources/userlist-6.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                            <img alt="" src="images/resources/userlist-7.jpg">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                  <div id="link2" class="tab-pane fade">
                                                      <span><i class="ti-eye"></i>445</span>
                                                      <a title="weekly-likes" href="#">440 new views this week</a>
                                                      <div class="users-thumb-list">
                                                          <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                            <img alt="" src="images/resources/userlist-1.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                            <img alt="" src="images/resources/userlist-2.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                            <img alt="" src="images/resources/userlist-3.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                            <img alt="" src="images/resources/userlist-4.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                            <img alt="" src="images/resources/userlist-5.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                            <img alt="" src="images/resources/userlist-6.jpg">  
                                                        </a>
                                                        <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                            <img alt="" src="images/resources/userlist-7.jpg">  
                                                        </a>  
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                        <li>
                                            <figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
                                            <div class="friend-meta">
                                                <h4><a href="time-line.html" title="">Allen</a></h4>
                                                <a href="#" title="" class="underline">Add Friend</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- who's following -->
                            </aside>
                        </div><!-- sidebar -->
                    </div>	
                </div>
            </div>
        </div>
    </div>	
</section>



<div class="side-panel">
        <h4 class="panel-title">General Setting</h4>
        <form method="post">
            <div class="setting-row">
                <span>use night mode</span>
                <input type="checkbox" id="nightmode1"/> 
                <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notifications</span>
                <input type="checkbox" id="switch22" /> 
                <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Notification sound</span>
                <input type="checkbox" id="switch33" /> 
                <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>My profile</span>
                <input type="checkbox" id="switch44" /> 
                <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
            </div>
            <div class="setting-row">
                <span>Show profile</span>
                <input type="checkbox" id="switch55" /> 
                <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
            </div>
        </form>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	
</html>