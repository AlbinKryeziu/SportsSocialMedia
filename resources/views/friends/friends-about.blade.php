@include('user/includes/header')

<section>
    @foreach($user as $key => $user)
    <div class="feature-photo">
        <figure><img src="{{ asset('store/'.$user->profilePath) }}" style="object-fit: cover;
            height: 60vh;" alt=""></figure>
        <div class="add-btn">
            <span>1205 followers</span>
            <a href="#" title="" data-ripple="">Follow</a>
        </div>
      
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img id="profile-pic" src="{{ asset('store/'.$user->profilePath) }}" style="height: 200px; width: 200px; object-fit:cover;" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    <input type="file" name="image" id="profile"/>
                                </label>
                            </form>
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
                            <a class="{!! Request::is('friends/photo/'.$user->id) ? 'active' : '' !!}" href="{{ url('friends/photo/'.$user->id) }}" title="" data-ripple="" >Photos</a>
                                <a class="{!! Request::is('friends/about/'.$user->id) ? 'active' : '' !!}" href="{{ url('friends/about/'.$user->id) }}" title="" data-ripple="">about</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="about">
                                    <div class="personal">
                                        
                                        <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                        <p>
                                       {{ $profile->about }}
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
                                               
                                                
                                            </div>
                                            <div class="tab-pane fade" id="location" role="tabpanel">
                                                <div class="location-map">
                                                    <div id="map-canvas"></div>
                                                </div>
                                            </div>
                                            
                                                
                                       
                                            <div class="tab-pane fade" id="work" role="tabpanel">
                                                <div>
                                                    {{-- @foreach($education as $key => $education)
                                                    <ul class="education">
                                                        <li><i class="ti-medall"></i> {{ $education->degree }}</li>
                                                        <li><i class="ti-book"></i> {{ $education->faculty }}</li>
                                                        <li><i class="ti-time"></i> {{ $education->from }}</li>
                                                        <li><i class="ti-time"></i> {{ $education->to }}</li>
                                                        <li><i class="ti-map-alt"></i> {{ $education->city }}</li>
                                                        <li><i class="ti-time"></i> {{ $education->country }}</li>
                                                        
                                                    </ul>
                                                    @endforeach --}}
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

@include('user/script')
</body>
</html>
