<div class="vertical-menu">

    <div data-simplebar class="h-100">
    
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                @if(Auth::check())
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
                @endif
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>
    
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
    
                <li>
                    <a href="/home" class="waves-effect">
                        <i class="ri-home-7-fill"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Home</span>
                    </a>
                </li>
    
                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ri-key-2-fill"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Admin</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('siswa.index')}}" class="waves-effect">
                        <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Tabel Siswa</span>
                    </a>
                </li>
    
                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Tabel guru</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.index')}}" class="waves-effect">
                        <i class="ri-user-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Tabel Kelas</span>
                    </a>
                </li>
    
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-book-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Laporan</span>
                    </a>
                </li>
    
                
    
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    </div>