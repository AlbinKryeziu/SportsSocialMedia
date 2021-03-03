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
                                
                                @include('user/includes/shortcuts')					
                            </aside>
                        </div><!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-interest">
                                    <h5 class="f-title"><i class="ti-bell"></i>All Notifications </h5>
                                    <div class="notification-box">
                                        <ul>
                                            <li>
                                                <figure><img src="images/resources/friend-avatar.jpg" alt=""></figure>
                                                <div class="notifi-meta">
                                                    <p>bob frank like your post</p>
                                                    <span>30 mints ago</span>
                                                </div>
                                                <i class="del fa fa-close"></i>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                        </div><!-- centerl meta -->
                    </div>	
                </div>
            </div>
        </div>
    </div>	
</section>
@include('user/script')
</body>
</html>