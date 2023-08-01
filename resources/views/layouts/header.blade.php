<header class="ft1-main-header">
			
    <!-- Header Top -->
    <div class="ft1-header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="ft1-top-left pull-left">
                </div>
                
                <!-- Top Right -->
                <div class="ft1-top-right pull-right">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
            
                <!-- Logo -->
                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{ route('index') }}"><img src="assets/images/logo.png" alt="" title=""></a></div>
                </div>
            
                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="assets/images/icons/menu.png" alt="" /></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="javascript:void(0)navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ (\Request::route()->getName() == 'index') ? 'navact' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                <li class="{{ (\Request::route()->getName() == 'about') ? 'navact' : '' }}"><a href="{{ route('about') }}">About</a></li>
                                {{-- <li class="dropdown"><a href="#">About <span class="fa fa-angle-down"></span></a>
                                    <ul>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('about') }}">Sustainability</a></li>
                                        <li><a href="{{ route('about') }}">Become a partner</a></li>
                                        <li><a href="{{ route('career') }}">Career</a></li>
                                    </ul>
                                </li> --}}
                                <li class="{{ (\Request::route()->getName() == 'logistics-services') ? 'navact' : '' }}"><a href="{{ route('logistics-services') }}">Logistic Services</a></li>
                                <li class="{{ (\Request::route()->getName() == 'aviation-services') ? 'navact' : '' }}"><a href="{{ route('aviation-services') }}">Aviation Products</a></li>
                                <li class="{{ (\Request::route()->getName() == 'blogs') ? 'navact' : '' }}"><a href="{{ route('blogs') }}">Blogs</a></li>
                                {{-- <li class="{{ (\Request::route()->getName() == 'career') ? 'navact' : '' }}"><a href="{{ route('career') }}">Career</a></li> --}}
                                {{-- <li class="{{ (\Request::route()->getName() == 'contact') ? 'navact' : '' }}"><a href="{{ route('contact') }}">Contact</a></li> --}}
                                <a href="{{ route('contact') }}" class="theme-btn btn-style-one" style="background-color: #0F01B0; padding:28px 25px 28px 25px; border-radius:0px; float:right;">Get in touch with us</a>
                            </ul>
                        </div>
                    </nav>
                    
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                    
                        <!-- Btn Box -->
                        {{-- <div class="btn-box"> --}}
                            {{-- <a href="javascript:void(0)" class="theme-btn btn-style-one">Get in touch with us <span class="icon fas fa-angle-double-right"></span></a> --}}
                        {{-- </div> --}}
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--End Header Upper-->
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
                
                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    
                    <!-- Btn Box -->
                    {{-- <div class="btn-box">
                        <a href="javascript:void(0)" class="theme-btn btn-style-one">Fee Quote <span class="icon fas fa-angle-double-right"></span></a>
                    </div> --}}
                    
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon"><img src="assets/images/icons/menu.png" alt="" /></span></div>
                    
                </div>
                
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fas fa-times"></span></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>