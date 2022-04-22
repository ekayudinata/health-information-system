<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laptop-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Health I.S.</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Modul
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseService"
            aria-expanded="true" aria-controls="colapseService">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}<i class="fas fa-list"></i>
            <span>Pelayanan </span>
        </a>
        <div id="colapseService" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/service/action">Tindakan </a>
                <a class="collapse-item" href="/dashboard/service/report">Laporan </a>
            </div>
        </div>
    </li>


    @can('superadmin')
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUseraccount"
            aria-expanded="true" aria-controls="collapseUseraccount">
            <i class="fas fa-fw fa-user"></i>
            <span>Akun User</span>
        </a>
    
        <div id="collapseUseraccount" class="collapse" aria-labelledby="headingUseraccount" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/useraccount">Data Akun</a>
                <a class="collapse-item" href="/dashboard/useraccount/create">Tambah Data</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatient"
            aria-expanded="true" aria-controls="collapsePatient">
            <i class="fas fa-fw fa-users"></i>
            <span>Pasien</span>
        </a>
        <div id="collapsePatient" class="collapse" aria-labelledby="headingPatient" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/patients">Data Pasien</a>
                <a class="collapse-item" href="/dashboard/patients/create">Tambah Data</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee"
            aria-expanded="true" aria-controls="collapseEmployee">
            <i class="fas fa-fw fa-users"></i>
            <span>Pegawai</span>
        </a>
        <div id="collapseEmployee" class="collapse" aria-labelledby="headingEmployee" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/employee">Data Pegawai</a>
                <a class="collapse-item" href="/dashboard/employee/create">Tambah Data</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapsePolis"
            aria-expanded="true" aria-controls="colapsePolis">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}<i class="fas fa-list"></i>
            <span>Poli</span>
        </a>
        <div id="colapsePolis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/polis">Data Poli </a>
                <a class="collapse-item" href="/dashboard/polis/create">Tambah Data </a>
            </div>
        </div>
    </li>

    @endcan
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Konfigurasi
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseEmployeePosition"
            aria-expanded="true" aria-controls="colapseEmployeePosition">
            <i class="fas fa-fw fa-cog"></i>
            <span>Jabatan</span>
        </a>
        <div id="colapseEmployeePosition" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/employeeposition">Data Jabatan</a>
                <a class="collapse-item" href="/dashboard/employeeposition/create">Tambah Jabatan</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseUserRole"
            aria-expanded="true" aria-controls="colapseUserRole">
            <i class="fas fa-fw fa-cog"></i>
            <span>User Role </span>
        </a>
        <div id="colapseUserRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/userrole">Data User Role</a>
                <a class="collapse-item" href="/dashboard/userrole/create">Tambah User Role</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapsepatientactions"
            aria-expanded="true" aria-controls="colapsepatientactions">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}<i class="fas fa-list"></i>
            <span>Tindakan Pasien</span>
        </a>
        <div id="colapsepatientactions" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/dashboard/patientactions">Data Tindakan </a>
                <a class="collapse-item" href="/dashboard/patientactions/create">Tambah Data </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->