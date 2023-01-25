
  <body> 
    <header class="sticky-top">
        <nav class="navbar mb-0 navbar-expand-md navbar-light">
          <div class="w-100 flex-column " id="navbar">        
            <span class="dropdown">
       
         <div class="navbar-dark w-100 bg-normal shadow">
            <ul class="menu container justify-content-between d-flex w-100 px-3 mb-0">
 
                <li class="nav-item">
                    <a class="nav-link active" href="#"> 
                    <a class="nav-link" href="#">Latest 
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Entertainment
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Crime
                      </a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Exclusives
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Politics
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Mpasho Videos
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> 
                       </a>
                  </li> 
                  <li class="nav-item d-md-flex d-none ms-md-5">                
                      <a class="nav-link text-right mx-3 fs-30" href="#"><i class="fa-regular fa-circle-user"></i></a> 
                      <a class="nav-link text-right mx-3 fs-30 "> 
                        <i class="fa-solid fa-magnifying-glass"></i></a>  
                      <a class="nav-link text-right ms-3 fs-30" href="#"><i class="fa-solid fa-bars-staggered"></i></a>   

                  </li>  
                            @if(Auth::check())
                                <a class="nav-link nav-link-user dropdown-toggle d-none d-sm-inline-block" href="#" id="userDropdown" data-toggle="dropdown">
                <img src="{{ Auth::user()->profile->avatar }}" class="avatar img-fluid rounded mr-1" alt="{{ Auth::user()->name }}" /> <span class="text-dark">{!! Auth::user()->name !!}</span>
              </a>


					
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="pages-profile.html">Profile</a>
								<a class="dropdown-item" href="#">Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
								<a class="dropdown-item" href="#">Help</a> 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        {{ __('Sign out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
							</div>
						</li>
                        @endif
             </ul>
            </div>
        
        
          </div>
        
        </nav>
    </header>
    <body> 