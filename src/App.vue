<template>
  <div id="app">
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item">
                <a class="navbar-brand" href="/c_v">
                <!-- <img class="brand-logo" alt="modern admin logo" :src="require('@/assets/images/logo/logo.png')"> -->
                <h3 class="brand-text">RS BRAYAT MINULYA</h3>
                </a>
            </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            </ul>
            </div>
        </div>
        </div>
    </nav>

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"> 
          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Profile</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.navbars.main">Dashboard</span></router-link></li>
          <li class="nav-item"><a href="#"><i class="la la-hospital-o"></i><span class="menu-title" data-i18n="nav.navbars.main">Profile</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Profile">All Profile</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Baru</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Dokter</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-stethoscope"></i><span class="menu-title" data-i18n="nav.navbars.main">Daftar Dokter</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/profile" data-i18n="nav.navbars.nav_light">All Dokter</a>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Add New</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.navbars.main">Jadwal Dokter</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/profile" data-i18n="nav.navbars.nav_light">All Jadwal</a>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Add New</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Pelayanan & Fasilitas</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-ambulance"></i><span class="menu-title" data-i18n="nav.templates.main">Pelayanan</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Pelayanan"><i class="la la-ambulance"></i><span class="menu-title" data-i18n="nav.navbars.main">All Pelayanan</span></router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-cubes"></i><span class="menu-title" data-i18n="nav.templates.main">Fasilitas</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/all-user" data-i18n="nav.navbars.nav_light">All Pelayanan Medik</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Informasi</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-calendar-o"></i><span class="menu-title" data-i18n="nav.templates.main">Jadwal Layanan</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Permission</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bullhorn"></i><span class="menu-title" data-i18n="nav.templates.main">Berita</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Permission</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-file-text-o"></i><span class="menu-title" data-i18n="nav.templates.main">Artikel</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Permission</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-heart-o"></i><span class="menu-title" data-i18n="nav.templates.main">Renungan</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/all-user" data-i18n="nav.navbars.nav_light">All Pelayanan Medik</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-suitcase"></i><span class="menu-title" data-i18n="nav.templates.main">Karir</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Permission</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Buku Tamu</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class=" nav-item">
            <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-book"></i>
              <span class="menu-title" data-i18n="nav.support_documentation.main">Daftar Buku Tamu</span>
            </a>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Support & Keamanan</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-lock"></i><span class="menu-title" data-i18n="nav.templates.main">Users</span></a>
            <ul class="menu-content">
              <li ><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Permission</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <router-view/>

    <footer class="footer footer-static footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="http://rsbrayatminulya.com/"
        target="_blank">RS BRAYAT MINULYA SURAKARTA </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">STIMIK SINUS SURAKARTA</span></p>
    </footer>
  </div>

</template>

<script>
export default {
  name: 'app'
}
</script>
