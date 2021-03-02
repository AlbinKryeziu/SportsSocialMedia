
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
                                                <a title="" href="{{ url('/edit/user') }}">Education </a>
                                            </li>
                                           
                                            <li>
                                                <i class="ti-lock"></i>
                                                <a title="" href="{{ url('/edit/pswd') }}">change password</a>
                                            </li>
                                            <li>
                                                <i class="ti-link"></i>
                                                <a title="" href="edit-password.html">Social</a>
                                            </li>
                                        </ul>
                                    </div>
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
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <div class="about">
                                            <div class="personal">
                                                @foreach($basicInfo as $key => $profile)
                                                <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                                <p>
                                                {{ $profile->about_me }}
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
                                                    <li class="nav-item">
                                                        <a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
                                                    </li>
                                                 
                                                    <li class="nav-item">
                                                        <a href="#work" class="nav-link" data-toggle="tab">Education</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#interest" class="nav-link" data-toggle="tab"  >interests</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#lang" class="nav-link" data-toggle="tab" >languages</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="basic" >
                                                        <ul class="basics">
                                                          
                                                                
                                                            
                                                            <li><i class="ti-user"></i>{{ $profile->first_name }} {{$profile->last_name }}</li>
                                                            <li><i class="ti-map-alt"></i>{{ $profile->city }}</li>
                                                            <li><i class="ti-mobile"></i>{{ $profile->phone }}</li>
                                                            <li><i class="ti-pin"></i>{{ $profile->country }}</li>
                                                            <li><i class="ti-time"></i>{{ $profile->birthday }}</li>
                                                        </ul>
                                                        @endforeach
                                                    </div>
                                                    <div class="tab-pane fade" id="location" role="tabpanel">
                                                        <div class="location-map">
                                                            <div id="map-canvas"></div>
                                                        </div>
                                                    </div>
                                                    
                                                        
                                               
                                                    <div class="tab-pane fade" id="work" role="tabpanel">
                                                        <div>
                                                            @foreach($education as $key => $education)
                                                            <ul class="education">
                                                                <li><i class="ti-medall"></i> {{ $education->degree }}</li>
                                                                <li><i class="ti-book"></i> {{ $education->faculty }}</li>
                                                                <li><i class="ti-time"></i> {{ $education->from }}</li>
                                                                <li><i class="ti-time"></i> {{ $education->to }}</li>
                                                                <li><i class="ti-map-alt"></i> {{ $education->city }}</li>
                                                                <li><i class="ti-time"></i> {{ $education->country }}</li>
                                                                
                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="tab-pane fade" id="interest" role="tabpanel">
                                                        <ul class="basics">
                                                            <li>Footbal</li>
                                                            <li>internet</li>
                                                            <li>photography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="lang" role="tabpanel">
                                                        <ul class="basics">
                                                            <li>english</li>
                                                            <li>french</li>
                                                            <li>spanish</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                </div>
                          
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