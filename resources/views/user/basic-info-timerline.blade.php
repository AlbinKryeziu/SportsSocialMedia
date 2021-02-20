@include('user/header-timeline')
<section>
    <div class="feature-photo">
        <figure><img src="{{ asset('storage/'.auth()->user()->profilePath) }}" alt=""></figure>
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
                            <img id="profile-pic" src="{{ asset('storage/'.auth()->user()->profilePath) }}" style="height: 200px; width: 200px;" alt="">
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
								
									<a class="" href="{{ url('/friends') }}" title="" data-ripple="">Friends</a>
									<a class="" href="{{ url('/aboutUs') }}" title="" data-ripple="">about</a>
									{{-- <a class="" href="#" title="" data-ripple="">more</a> --}}
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