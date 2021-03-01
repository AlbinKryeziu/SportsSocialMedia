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
                                <a class="" href="" title="" data-ripple="">about</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>