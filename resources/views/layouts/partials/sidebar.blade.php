<!--begin::Aside-->
  <div class="aside aside-left d-flex flex-column" id="kt_aside">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
      <!--begin::Logo-->
      <a href="#">
        <img alt="Logo" src="{!! url('assets/media/logos/das-logo.png') !!}" class="max-h-30px" />
      </a>
      <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Nav Wrapper-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
      <!--begin::Nav-->
      <ul class="nav flex-column">
        @auth
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Dashboard">
          <a href="{{ url('/dashboard') }}" class="nav-link btn btn-icon btn-clean btn-icon-white btn-lg 
            {{ (request()->is('dashboard*')) ? 'active' : ''}}">
            <i class="flaticon2-protection icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Property Management">
          <a href="{{ route('properties.index') }}" class="nav-link btn btn-icon btn-icon-white btn-lg 
            {{ (request()->is('properties*')) ? 'active' : ''}}" role="button">
            <i class="flaticon2-graph-1 icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Facility Management">
          <a href="{{ route('facilities.index') }}" class="nav-link btn btn-icon btn-icon-white btn-lg 
            {{ (request()->is('facilities*')) ? 'active' : ''}}" role="button">
            <i class="flaticon2-layers-2 icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        @role('administrator')
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Property Features">
          <a href="{{ url('/property_features') }}" class="nav-link btn btn-icon btn-icon-white btn-lg 
            {{ (request()->is('property_features*')) ? 'active' : ''}}" role="button">
            <i class="flaticon2-gear icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Role Management">
          <a href="{{ route('roles.index') }}" class="nav-link btn btn-icon btn-icon-white btn-lg 
            {{ (request()->is('roles*')) ? 'active' : ''}}" role="button">
            <i class="flaticon2-sheet icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="User Management">
          <a href="{{ route('users.index') }}" class="nnav-link btn btn-icon btn-icon-white btn-lg 
            {{ (request()->is('users*', 'agents*', 'customers*', 'vendors*', 'staffs*')) ? 'active' : ''}}" role="button">
            <i class="flaticon2-avatar icon-lg"></i>
          </a>
        </li>
        <!--end::Item-->
        @endrole
        @endauth
      </ul>
      <!--end::Nav-->
    </div>
    <!--end::Nav Wrapper-->
    @auth
    <!--begin::Footer-->
    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-8">
      <!--begin::Quick Panel-->
      <a href="{{ route('logout.perform') }}" class="btn btn-icon btn-clean btn-lg mb-1" title="Logout">
        <i class="fas fa-sign-out-alt text-white"></i>
      </a>
      <!--end::Quick Panel-->
    </div>
    <!--end::Footer-->
    @endauth
    @guest
      <div class="text-end">
        <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
        <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
      </div>
    @endguest
  </div>
<!--end::Aside-->
