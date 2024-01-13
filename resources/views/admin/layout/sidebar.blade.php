<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">iTrashBank</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @yield('status_sidebar_dashboard')">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu Transaksi</span>
        </li>
        <li class="menu-item @yield('status_sidebar_sampah') ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-trash"></i>
                <div data-i18n="Sampah">Sampah</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('status_sidebar_sampah_setoransampah')">
                    <a href="#" class="menu-link">
                        <div data-i18n="Setoran Sampah">Setoran Sampah</div>
                    </a>
                </li>
                <li class="menu-item @yield('status_sidebar_sampah_penarikansampah')">
                    <a href="#" class="menu-link">
                        <div data-i18n="Penarikan Sampah">Penarikan Sampah</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @yield('status_sidebar_transaksi')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Authentications">Transaksi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('status_sidebar_transaksi_transaksi')">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Transaksi</div>
                    </a>
                </li>
                <li class="menu-item @yield('status_sidebar_transaksi_riwayattransaksi')">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Riwayat Transaksi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @yield('status_sidebar_point')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-coin"></i>
                <div data-i18n="Misc">Point & Insentif</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('status_sidebar_point_insentif')">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Point & Insentif</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @yield('status_sidebar_pembayaran')">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-credit-card"></i>
                <div data-i18n="Misc">Pembayaran</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item @yield('status_sidebar_pembayaran_pembayaran')">
                    <a href="#" class="menu-link">
                        <div data-i18n="Error">Pembayaran</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-header small text-uppercase"><span class="menu-header-text">Laporan</span></li>

        <li class="menu-item @yield('status_sidebar_laporan')">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bar-chart-square"></i>
                <div data-i18n="Basic">Laporan</div>
            </a>
        </li>


        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Lainnya</span></li>
        <li class="menu-item @yield('status_sidebar_feedback')">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Feedback User</div>
            </a>
        </li>
        <li class="menu-item @yield('status_sidebar_panduan_daur_ulang')">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Panduan Daur Ulang</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->


{{-- - Sampah --}}
{{--    -> Setoran Sampah --}}
{{--    -> Penarikan Sampah --}}

{{-- -> Transaksi --}}
{{--    -> Transaksi --}}
{{--    -> Riwayat Transaksi --}}

{{-- -> Point dan Insentif --}}
{{--    -> Point dan Insentif --}}

{{-- -> Laporan --}}
{{--    -> Laporan --}}

{{-- -> Panduan Daur Ulang --}}
{{--    -> Panduan Daur Ulang --}}

{{-- -> Feedback User --}}
{{--    -> Feedback User --}}

{{-- -> Pembayaran --}}
{{--    -> Pembayaran --}}
