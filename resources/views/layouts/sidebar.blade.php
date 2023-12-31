<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">BLOG</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">BL</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Blog</span></a>
          <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('posts.index')}}">Blog Post</a>
            </li>
          </ul>
        </li>
        @show
    </ul>

    <ul class="sidebar-menu">
    <!--
      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>
    -->
  </aside>
