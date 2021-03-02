<section>
    <div class="feature-photo">
        <figure ><img src="{{ asset('store/'.auth()->user()->coverPath) }}" style="object-fit: cover;
            height: 60vh;" alt=""></figure>
        <div class="add-btn">
            <span>{{ App\Models\Follow::where('user_id',Auth::id())->count() }}</span>
            <a  title="" data-ripple="" style="color:white">Followers</a>
        </div>
        <form class="edit-phto" action="{{ url('/photo/profile/user') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <i class="fa fa-camera-retro"></i> 
              <label class="fileContainer">
                Edit profile 
            <input type="file" name="image"/>
            </label>  
            <button type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
        </form> 
        <form class="edit-cover" action="{{ url('/cover/profile/user') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <i class="fa fa-camera-retro"></i> 
              <label class="fileContainer">
                Edit cover   
            <input type="file" name="image"/>
            </label>  
            <button type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
        </form> 
        
        <div class="container-fluid">
            
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        
                        <figure>
                            <img id="profile-pic" src="{{ asset('store/'.auth()->user()->profilePath) }}" style="height: 200px; width: 200px; object-fit:cover;" alt="">
                            {{-- <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    <input type="file" name="image" id="profile"/>
                                </label>
                            </form> --}}
                        </figure>
                    </div>
                </div>
                
                <div class="col-lg-10 col-sm-9">
                    
                    
                    <div class="timeline-info">
                        
                        <ul>
                            <li class="admin-name">
                                
                              <h5>{{ auth()->user()->name }}</h5>
                             
                            </li>
                            
                            <li>
                                <a class="{!! Request::is('user/photo') ? 'active' : '' !!}" href="{{ url('/user/photo') }}" title="" data-ripple="">time line</a>
                                <a class="{!! Request::is('photos/me') ? 'active' : '' !!}" href="{{ url('/photos/me') }}" title="" data-ripple="" >Photos</a>
                                <a class="{!! Request::is('friends') ? 'active' : '' !!}" href="{{ url('/friends') }}" title="" data-ripple="">Followers</a>
                                {{-- <a class="" href="{{ url('/aboutUs') }}" title="" data-ripple="">about</a> --}}
                                {{-- <a class="" href="#" title="" data-ripple="">more</a> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>