<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        
      
        
        <li class="menu-label">UI Elements</li>
       
        @if (Auth::user()->can('category.menu')) 
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Manage Category</div>
            </a>
            <ul>
                @if (Auth::user()->can('category.all')) 
                <li> <a href="{{ route('all.category') }}"><i class='bx bx-radio-circle'></i>All Category </a>
                </li>
                @endif
                @if (Auth::user()->can('subcategory.all')) 
                <li> <a href="{{ route('all.subcategory') }}"><i class='bx bx-radio-circle'></i>All SubCategory  </a>
                </li>
                @endif
                
            </ul>
        </li>
        @endif


        @if (Auth::user()->can('instructor.menu')) 
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Instructor</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.instructor') }}"><i class='bx bx-radio-circle'></i>All Instructor</a>
                </li>
               
               
            </ul>
        </li>
        @endif


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Courses</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.course') }}"><i class='bx bx-radio-circle'></i>All Courses</a>
                </li>
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Coupon</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.all.coupon') }}"><i class='bx bx-radio-circle'></i>All Coupon</a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Setting</div>
            </a>
            <ul>
                <li> <a href="{{ route('smtp.setting') }}"><i class='bx bx-radio-circle'></i>Manage SMPT</a>
                </li>
                <li> <a href="{{ route('site.setting') }}"><i class='bx bx-radio-circle'></i>Site Setting </a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Orders</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.order') }}"><i class='bx bx-radio-circle'></i>Pending Orders </a>
                </li>
                <li> <a href="{{ route('admin.confirm.order') }}"><i class='bx bx-radio-circle'></i>Confirm Orders </a>
                </li>
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Report</div>
            </a>
            <ul>
                <li> <a href="{{ route('report.view') }}"><i class='bx bx-radio-circle'></i>Report View </a>
                </li>
               
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Review</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.pending.review') }}"><i class='bx bx-radio-circle'></i>Pending Review </a>
                </li>
                <li> <a href="{{ route('admin.active.review') }}"><i class='bx bx-radio-circle'></i>Active Review </a>
                </li>
               
               
               
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage All User </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.user') }}"><i class='bx bx-radio-circle'></i>All User </a>
                </li>
                <li> <a href="{{ route('all.instructor') }}"><i class='bx bx-radio-circle'></i>All Instructor</a>
                </li>
               
               
               
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Manage Blog </div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Blog Category </a>
                </li>
                <li> <a href="{{ route('blog.post') }}"><i class='bx bx-radio-circle'></i>Blog Post</a>
                </li>
               
               
               
            </ul>
        </li>

         
      
     
        <li class="menu-label">Role & Permission</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Role & Permission</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.permission') }}"><i class='bx bx-radio-circle'></i>All Permission</a>
                </li>
                <li> <a href="{{ route('all.roles') }}"><i class='bx bx-radio-circle'></i>All Roles</a>
                </li>
                <li> <a href="{{ route('add.roles.permission') }}"><i class='bx bx-radio-circle'></i>Role In Permission</a>
                </li>
                <li> <a href="{{ route('all.roles.permission') }}"><i class='bx bx-radio-circle'></i>All Role In Permission</a>
                </li>
                
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Manage Admin</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}"><i class='bx bx-radio-circle'></i>All Admin</a>
                </li> 
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-map-alt"></i>
                </div>
                <div class="menu-title">Maps</div>
            </a>
            <ul>
                <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>
                </li>
                <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>