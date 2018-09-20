<template>
  <div id="app">
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
              <li><a class="menu-item" href="/user/users/all-user" data-i18n="nav.navbars.nav_light">All Pelayanan Medik</a>
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
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>
