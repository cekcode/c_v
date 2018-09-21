<template>
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"> 
          <li class="nav-item"><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.navbars.main">Dashboard</span></router-link></li>
          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Profile</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-hospital-o"></i><span class="menu-title" data-i18n="nav.navbars.main">Profile</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Profile">Semua Profile</router-link></li>
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
              <li><a class="menu-item" href="/user/profile" data-i18n="nav.navbars.nav_light">Semua Dokter</a>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Dokter</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="la la-table"></i><span class="menu-title" data-i18n="nav.navbars.main">Jadwal Dokter</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/profile" data-i18n="nav.navbars.nav_light">Semua Jadwal</a>
              </li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Jadwal</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Layanan</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-ambulance"></i><span class="menu-title" data-i18n="nav.templates.main">Layanan</span></a>
            <ul class="menu-content">
              <li><router-link class="menu-item" data-i18n="nav.navbars.nav_light" to="/admin/Layanan">Semua Layanan</router-link></li>
              <li><a class="menu-item" href="navbar-components.html" data-i18n="nav.navbars.nav_components">Tambah Layanan</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">Kategori Layanan</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/Semua-user" data-i18n="nav.navbars.nav_light">Semua Kategori Layanan</a>
              <li><a class="menu-item" href="/user/users/Semua-user" data-i18n="nav.navbars.nav_light">Tambah Kategori Layanan</a>
              </li>
            </ul>
          </li>

          <li class="navigation-header">
            <span data-i18n="nav.category.layouts">Informasi</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
            data-placement="right" data-original-title="Layouts"></i>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bullhorn"></i><span class="menu-title" data-i18n="nav.templates.main">Informasi</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Semua Informasi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item"><a href="#"><i class="la la-bars"></i><span class="menu-title" data-i18n="nav.templates.main">Kategori Informasi</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="/user/users/permission" data-i18n="nav.navbars.nav_dark">Semua Kategori Informasi</a>
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
            <span data-i18n="nav.category.layouts">Bantuan & Dukungan</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
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
</template>

<script>
import Vue from "vue";
export default Vue.component('dt-menu', {

})
</script>