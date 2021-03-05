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
                                                <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">Education</a></li>
                                                <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Edit Education</a></li>
                                            </ul>
        
                                            <!-- Tab panes -->
                                            <div class="tab-content p-4">
                                               
                                                <div class="tab-pane active fade show" id="frends">
                                                    <form method="post" action="{{ url('/change/education') }}">
                                                        @csrf
                                                        <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox" value="Bacxhelor" name="deegre" checked="checked"><i class="check-box"></i>Bachelor
                                                          </label>
                                                        </div>
                                                        <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox" value="Master" name="deegre" ><i class="check-box"></i>Masters
                                                          </label>
                                                        </div>
                                                        <div class="form-group">    
                                                          <input type="text" id="input" name="faculty"  />
                                                          <label class="control-label" for="input">Studying at</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group half">   
                                                          <input type="text"   name="from"/>
                                                          <label class="control-label" for="input">From</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group half">   
                                                          <input type="text"  name="to"/>
                                                          <label class="control-label" for="input">To</label><i class="mtrl-select"></i>
                                                        </div>                                              
                                                        <div class="form-group">    
                                                          <input type="text"   name="city"/>
                                                          <label class="control-label" for="input">City</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="form-group">    
                                                            <input type="text"   name="country"/>
                                                            <label class="control-label" for="input">Country</label><i class="mtrl-select"></i> 
                                                        </div>
                                                        <div class="form-group">    
                                                          <textarea rows="4" id="textarea"  name="description"></textarea>
                                                          <label class="control-label" for="textarea">Description</label><i class="mtrl-select"></i>
                                                        </div>
                                                        <div class="submit-btns">
                                                            <button type="button" class="mtr-btn"><span>Cancel</span></button>
                                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                                        </div>
                                                    </form>
    
                                                </div>
                                                <div class="tab-pane fade" id="frends-req">
                                                  
                                                        
                                                   
                                                    <ul class="nearby-contct">
                                                        @foreach($education as $key => $education)
                                                        <li>
                                                            <div class="nearly-pepls">
                                                                <i class="fa fa-trash educationDelete" data-educationId="{{$education->id}}"   style="float: right;padding: 2px;"></i>
                                                                <a href="{{ url('/edit/education/'.$education->id) }}"><i  class="fa fa-pencil-square-o"  aria-hidden="true"style="float: right; padding:2px;q"></i></a>
                                                                <div class="form-group">    
                                                                    <input type="text" id="{{ $education->id }}"  name="degree" value="{{ $education->degree}}" />
                                                                    <label class="control-label" for="input">Deegre</label><i class="mtrl-select"></i> 
                                                                </div>
                                                                <div class="form-group">    
                                                                    <input type="text"   name="country" value="{{ $education->faculty}}"/>
                                                                    <label class="control-label" for="input">Faculty</label><i class="mtrl-select"></i> 
                                                                </div>
                                                                <div class="form-group">    
                                                                    <input type="text"   name="country" value="{{ $education->city}}"/>
                                                                    <label class="control-label" for="input">City</label><i class="mtrl-select"></i> 
                                                                </div>
                                                                <div class="form-group">    
                                                                    <input type="text"   name="country" value="{{ $education->country}}"/>
                                                                    <label class="control-label" for="input">Country</label><i class="mtrl-select"></i> 
                                                                </div>
                                                                <div class="form-group">    
                                                                    <input type="text"   name="country" value="{{ $education->from}}"/>
                                                                    <label class="control-label" for="input">From</label><i class="mtrl-select"></i> 
                                                                </div>
                                                                <div class="form-group">    
                                                                    <input type="text"   name="country" value="{{ $education->to}}"/>
                                                                    <label class="control-label" for="input">To</label><i class="mtrl-select"></i> 
                                                                </div>
                                                               
                                                       
                                                            </li>
                                                    @endforeach
                                                </ul>
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
    
        <div id="deleteEducation" class="modal modal-danger active" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <form action="{{ url('/delete/education') }}" method="POST" class="remove-record-model">
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
                            <input type="hidden" name="educationid" id="educationId">
                            
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        <script>
             $(document).on('click','.educationDelete',function(){
        var userID=$(this).attr('data-educationId');
        $('#educationId').val(userID); 
        $('#deleteEducation').modal('show'); 
    });
        </script>
            @include('user/script')
        
    </body>	
    </html>

  
    