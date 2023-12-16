<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic">
                            <img src="{{url('admin/assets/images/users/1.jpg')}}" alt="users" class="rounded-circle" width="40"/>
                        </div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="#" class="" id="Userdd">
                                <h5 class="m-b-0 user-name font-medium">
                                    {{auth()->user()->name}}
                                </h5>
                                <span class="op-5 user-email">
                                    {{auth()->user()->email}}
                                </span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('dashboard')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('sliders')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Sliders</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('services')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('services.slider')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Services Slider</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('guide')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Guide</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('construction.update')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Construction Update</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a href="{{route('team')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Team</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a href="{{route('testimonials')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Testimonials</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('news')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">News</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('residential.dev')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Residential Developments</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('residential.gallery')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Residential Gallery</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('residential.video')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Residential Videos</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('residential.feature')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Residential Features</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('residential.perk')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Residential Perks</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('locations')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Locations</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('locations.why.buy')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Why Buy Locations</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('spotlight')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Spotlight Locations</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('admin.home')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('admin.contact')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Contact us</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{route('admin.tac')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Terms and Conditions</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.policy')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Policy</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.faqs')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">FAQs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{route('admin.complaints')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Complaints</span>
                    </a>
                </li>



                <li class="sidebar-item">
                    <a href="{{route('admin.footer')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Footer</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<style>
    .float-right{
        float: right;
    }
</style>