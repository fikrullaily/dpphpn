<?php
$sidebar = [
    [
        'group' => 'dashboard',
        'title' => 'Dashboard',
        'icon'  => 'tachometer-alt',
        'url'   => url('dashboard'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'news',
        'title' => 'Berita',
        'icon'  => 'newspaper',
        'url'   => url('master-news'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'catalog',
        'title' => 'Katalog',
        'icon'  => 'images',
        'url'   => url('master-catalog'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'work-program',
        'title' => 'Program Kerja',
        'icon'  => 'briefcase',
        'url'   => url('master-work-program'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'organization-structure',
        'title' => 'Struktur Organisasi',
        'icon'  => 'users',
        'url'   => url('master-organization-structure'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'organization-agenda',
        'title' => 'Agenda Organisasi',
        'icon'  => 'calendar',
        'url'   => url('master-organization-agenda'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'profile',
        'title' => 'Profile',
        'icon'  => 'user',
        'url'   => url('master-profile'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'region',
        'title' => 'DPW & DPC',
        'icon'  => 'map',
        'url'   => url('master-region'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'vision',
        'title' => 'Visi & Misi',
        'icon'  => 'eye',
        'url'   => url('master-vision'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'message',
        'title' => 'Pesan',
        'icon'  => 'envelope',
        'url'   => url('master-request'),
        'role'  => [
            1,
        ]
    ],
    [
        'group' => 'request-news',
        'title' => 'Request',
        'icon'  => 'edit',
        'url'   => url('master-request-news'),
        'role'  => [
            1,
        ]
    ],
];
$admin = session()->get('admin');
$menu['role_id'] = $admin['role_id'];
?>
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:#116d38" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ url('assets_user/img/logo-white.png') }}" alt="" style="height: 25px">
        </div>
        <div class="sidebar-brand-text mx-3">DPP HPN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @foreach ($sidebar as $keyGroup => $valueGroup)
    @if (in_array($menu['role_id'], $valueGroup['role']))
    @if (isset($valueGroup['title']) && !isset($valueGroup['list']))
    <li class="nav-item active">
        <a class="nav-link" href="{{ $valueGroup['url'] }}">
            <i class="fas fa-fw fa-{{ $valueGroup['icon'] }}"></i>
            <span>{{ $valueGroup['title'] }}</span>
        </a>
    </li>
    @endif
    @endif
    @if (isset($valueGroup['list']))
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>{{ $valueGroup['title'] }}</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @foreach ($valueGroup['list'] as $key => $value)
                @if (in_array($menu['role_id'], $value['role']))
                <a class="collapse-item" href="">{{ $value['title'] }}</a>
                @endif
                @endforeach
            </div>
        </div>
    </li>
    @endif
    @endforeach
    <!-- Divider -->
    <hr class=" sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
