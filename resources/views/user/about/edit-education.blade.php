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
                                        <div class="widget">
                                            <h4 class="widget-title">Edit info</h4>
                                            <ul class="naves">
                                                <li>
                                                    <i class="ti-info-alt"></i>
                                                    <a title="" href="{{ url('/edit/info') }}">Basic info</a>
                                                </li>
                                                <li>
                                                    <i class="ti-mouse-alt"></i>
                                                    <a title="" href="{{ url('/edit/user') }}">Education  </a>
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
                                        <div class="widget">
                                                <h4 class="widget-title">Recent Photos</h4>
                                                <ul class="recent-photos">
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-11.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-1.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-22.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-2.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-33.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-3.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-44.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                        <img src="images/resources/recent-4.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-55.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-5.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-66.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-6.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-77.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-7.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-88.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-8.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="strip" href="images/resources/recent-99.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                                            <img src="images/resources/recent-9.jpg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </div><!-- recent photos-->										
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <div class="frnds">
                                            <ul class="nav nav-tabs">
                                             
                                                <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Edit Education</a></li>
                                            </ul>
        
                                            <!-- Tab panes -->
                                            <div class="tab-content p-4">
                                                @if(Session::has('success'))
                                                <p class="alert alert-info">{{ Session::get('success') }}</p>
                                                @endif
                                                <div class="tab-pane active fade show" id="frends">
                                                    <form method="POST" action="{{ url('/update/education') }}">
                                                        @csrf
                                                        <input type="hidden" name="educationId" value="{{ $education->id }}">
                                                        <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox" value="Bacxhelor" name="degree" checked="checked" value="{{ $education->deegre }}"><i class="check-box"></i>Bachelor
                                                          </label>
                                                        </div>
                                                        <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox" value="Master" name="degree" ><i class="check-box"></i>Masters
                                                          </label>
                                                        </div>
                                                        <div class="form-group">    
                                                          <input type="text" id="input" name="faculty" value="{{ $education->faculty }}" />
                                                          <label class="control-label" for="input">Studying at</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group half">   
                                                          <input type="text"  name="from" value="{{ $education->from }}"/>
                                                          <label class="control-label" for="input">From</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group half">   
                                                          <input type="text"  name="to" value="{{ $education->to }}"/>
                                                          <label class="control-label" for="input">To</label><i class="mtrl-select"></i>
                                                        </div>                                              
                                                        <div class="form-group">    
                                                          <input type="text"   name="city" value="{{ $education->city }}"/>
                                                          <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group">    
                                                            <input type="text"   name="country" value="{{ $education->country }}"/>
                                                            <label class="control-label" for="input">Country</label><i class="mtrl-select"></i> 
                                                        </div>
                                                        <div class="form-group">    
                                                          <textarea rows="4" id="textarea"  name="description" >{{ $education->description }}</textarea>
                                                          <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="submit-btns">
                                                            <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                                        </div>
                                                    </form>
    
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">         
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
    
        
        
            @include('user/script')
        
    </body>	
    </html>

  
    