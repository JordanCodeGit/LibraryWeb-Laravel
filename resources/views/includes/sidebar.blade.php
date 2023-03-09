<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img class="logo-icon me-2 mt-5" src="{{ asset('assets/img/jibraryLogoo.png') }}" alt="logo" >
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0 mt-5">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ $title == 'Dashboard' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<!-- Nav Item - Data Buku -->
<li class="nav-item {{ $title == 'Book' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('book.index') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>Books Data</span></a>
</li>

</ul>
<!-- End of Sidebar -->
