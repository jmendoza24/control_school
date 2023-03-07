<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title >Tableros - Snappath</title>
        <meta name="description" content="Tableros-Snappath">
        <meta name="keywords" content="Tableros, Snappath, Altermedia">
        <meta name="author" content="Snappath">
        <meta name="DC.title" content="Snappath">

        <!-- Favicon -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="shortcut icon" href="{{ url('assets/images/favicon.ico')}}">
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ url('assets/css/core/libs.min.css')}}">
        <!-- qompac-ui Design System Css -->
        <link rel="stylesheet" href="{{ url('assets/css/qompac-ui.min.css?v=1.0.1')}}">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ url('assets/css/custom.min.css?v=1.0.1')}}">
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{ url('assets/css/dark.min.css?v=1.0.1')}}">
        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{ url('assets/css/customizer.min.css?v=1.0.1')}}" >
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{ url('assets/css/rtl.min.css?v=1.0.1')}}">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        
        
        @livewireStyles
    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="{{ url('assets/images/loader.webp')}}" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
        </div>
        <!-- loader END -->
        <aside style="z-index: 1;" class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
            <div class="sidebar-header d-flex align-items-center justify-content-start">
                <a href="{{ route('dashboard')}}" class="navbar-brand">
                    
                    <!--Logo start-->
                    <div class="logo-main">
                        <div class="logo-normal">
                            <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                            </svg>
                        </div>
                        <div class="logo-mini">
                            <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                                <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                            </svg>
                        </div>
                    </div>
                    <!--logo End-->            <h4 class="logo-title" >Snappath UI</h4>
                </a>
                <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                    <i class="icon">
                        
                        <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z" fill="white"/>
                            <path d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z" fill="white"/>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="sidebar-body pt-0 data-scrollbar">
               <div class="sidebar-list">
                    <!-- Sidebar Menu Start -->
                    @include('layouts.menu')
                    
                    <!-- Sidebar Menu End -->        
               </div>
            </div>
            <div class="sidebar-footer"></div>
        </aside>
        <div class="main-content" >
            <div class="position-relative  iq-banner ">
            <!--Nav Start-->
                <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar" style="z-index: auto">
                   <div class="container-fluid navbar-inner">
                      <a href="{{ route('dashboard')}}" class="navbar-brand">
                         
                         <!--Logo start-->
                         <div class="logo-main">
                             <div class="logo-normal">
                                 <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                                     <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                                 </svg>
                             </div>
                             <div class="logo-mini">
                                 <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                                     <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                                 </svg>
                             </div>
                         </div>
                         <!--logo End-->         <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Qompac UI</h4>
                      </a>
                      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                         <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                         </i>
                      </div>
                      {{--
                      <div class="d-flex align-items-center justify-content-between product-offcanvas">
                         <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                            <small class="mb-0 text-capitalize">blank-page</small>
                         </div>
                          <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1" id="offcanvasBottom">
                            <div class="offcanvas-body">
                               <ul class="iq-nav-menu list-unstyled">
                                  <li class="nav-item ">
                                     <a class="nav-link menu-arrow justify-content-start active" data-bs-toggle="collapse" href="#homeData" role="button" aria-expanded="false" aria-controls="homeData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"/>
                                        </svg>
                                        <span class="nav-text ms-2">Home</span>
                                     </a>
                                     <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                        <li class="nav-item"><a class="nav-link " href="../dashboard/index.html">Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link " href="../dashboard/analytics-dashboard.html">Analytics</a></li>
                                        <li class="nav-item"><a class="nav-link " href="../dashboard/crypto-dashboard.html">Crypto</a></li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#menuStyles" role="button" aria-expanded="false" aria-controls="menuStyles">
                                              Menu Style
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="menuStyles">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/index-horizontal.html">Horizontal Dashboard</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/index-dual-compact.html">Dual Compact</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/index-boxed.html">Boxed Horizontal</a></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="#allPagesData" role="button" aria-expanded="false" aria-controls="allPagesData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"/>
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07999 6.64999V6.65999C7.64899 6.65999 7.29999 7.00999 7.29999 7.43999C7.29999 7.86999 7.64899 8.21999 8.07999 8.21999H11.069C11.5 8.21999 11.85 7.86999 11.85 7.42899C11.85 6.99999 11.5 6.64999 11.069 6.64999H8.07999ZM15.92 12.74H8.07999C7.64899 12.74 7.29999 12.39 7.29999 11.96C7.29999 11.53 7.64899 11.179 8.07999 11.179H15.92C16.35 11.179 16.7 11.53 16.7 11.96C16.7 12.39 16.35 12.74 15.92 12.74ZM15.92 17.31H8.07999C7.77999 17.35 7.48999 17.2 7.32999 16.95C7.16999 16.69 7.16999 16.36 7.32999 16.11C7.48999 15.85 7.77999 15.71 8.07999 15.74H15.92C16.319 15.78 16.62 16.12 16.62 16.53C16.62 16.929 16.319 17.27 15.92 17.31Z" fill="currentColor"/>
                                        </svg>
                                        <span class="nav-text ms-2">Pages</span>
                                     </a>
                                     <ul class="iq-header-sub-menu list-unstyled collapse" id="allPagesData">
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow " data-bs-toggle="collapse" href="#specialPages" role="button" aria-expanded="false" aria-controls="specialPages">
                                              Special Pages
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="specialPages">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/special-pages/billing.html">Billing</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/special-pages/calender.html">Calender</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/special-pages/kanban.html">Kanban</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/special-pages/pricing.html">Pricing</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/special-pages/timeline.html">Timeline</a></li>
                                              </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#authSkins" role="button" aria-expanded="false" aria-controls="authSkins">
                                              Auth skins
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="authSkins">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/auth/sign-in.html">Sign In</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/sign-up.html">Sign Up</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/confirm-mail.html">Email Verified</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/recoverpw.html">Reset Password</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/lock-screen.html">Lock Screen</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/two-factor.html">Two Factor</a></li>
                                                    <li class="nav-item"><a class="nav-link " href="../dashboard/auth/account-deactivate.html">Account Deactivate</a></li>                           
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#userApps" role="button" aria-expanded="false" aria-controls="userApps">
                                              User
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="userApps">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/app/user-profile.html">User Profile</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/app/user-add.html">User Add</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/app/user-list.html">User List</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#utilities" role="button" aria-expanded="false" aria-controls="utilities">
                                              Utilities
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="utilities">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/errors/maintenance.html">Maintenance</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/errors/error404.html">404</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/errors/error500.html">505</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#extraPlugins" role="button" aria-expanded="false" aria-controls="extraPlugins">
                                              Plugins
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="extraPlugins">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/button-hover.html">Button Hover</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/choise-js.html">Choise JS</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/fslightbox.html">FSlightbox</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/select2.html">Select2</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/sweet-alert.html">Sweetalert</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/flatpickr.html">flatpickr</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/apexcharts.html">Apexcharts</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/gallery-hover.html">Gallery Hover</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/image-croper.html">Image Croper</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/loader.html">Loader</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/rating.html">Rating</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/quill-editor.html">Quill</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/plugins/uppy.html">Uppy</a></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse" href="#elementsData" role="button" aria-expanded="false" aria-controls="elementsData">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                           <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.8641C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7088C4 14.4284 4.40573 14.8726 5.47299 15.3701L11.9912 18.6215Z" fill="currentColor"/>
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"/>
                                        </svg>
                                        <span class="nav-text ms-2">Elements </span>
                                     </a>
                                     <ul class="iq-header-sub-menu list-unstyled collapse" id="elementsData">
                                         <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#ui-element" role="button" aria-expanded="false" aria-controls="ui-element">
                                             UI Elements
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="ui-element">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-avatars.html">Avatars</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-alerts.html">Alerts</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-badges.html">Badge</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-breadcrumb.html">Breadcrumb</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-buttons.html">Buttons</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-buttons-group.html">Buttons Group</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-boxshadow.html">Box Shadow</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-color.html">Colors</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-cards.html">Cards</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-carousel.html">Carousel</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-grid.html">Grid</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-images.html">Images</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-list-group.html">List Group</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-modal.html">Modal</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-notifications.html">Notifications</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-pagination.html">Pagination</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-popovers.html">Popovers</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-typography.html">Typography</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-tabs.html">Tabs</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-tooltips.html">Tooltips</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/ui-elements/ui-embed-video.html">Video</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#widgetsPage" role="button" aria-expanded="false" aria-controls="widgetsPage">
                                              Widgets
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="widgetsPage">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/widget/widgetbasic.html">Widget Basic</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/widget/widgetchart.html">Widget Chart</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/widget/widgetcard.html">Widget Card</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#mapPages" role="button" aria-expanded="false" aria-controls="mapPages">
                                              Map
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="mapPages">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/maps/google.html">Google</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/maps/vector.html">Vector</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#formsPages" role="button" aria-expanded="false" aria-controls="formsPages">
                                              Form
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="formsPages">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/form/form-element.html">Element</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/form/form-wizard.html">Wizard</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/form/form-validation.html">Validation</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#tablesPages" role="button" aria-expanded="false" aria-controls="tablesPages">
                                              Table
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="tablesPages">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/table/bootstrap-table.html">Bootstrap Table</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/table/table-data.html">Data Table</a></li>
                                           </ul>
                                        </li>
                                        <li class="nav-item">
                                           <a class="nav-link menu-arrow" data-bs-toggle="collapse" href="#iconsPages" role="button" aria-expanded="false" aria-controls="iconsPages">
                                              Icons
                                              <i class="right-icon">
                                                 <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.5 5L15.5 12L8.5 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                 </svg>
                                              </i>
                                           </a>
                                           <ul aria-expanded="false" class="iq-header-sub-menu left list-unstyled collapse" id="iconsPages">
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/icons/solid.html">Solid</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/icons/outline.html">Outlined</a></li>
                                              <li class="nav-item"><a class="nav-link " href="../dashboard/icons/dual-tone.html">Dual Tone</a></li>
                                           </ul>
                                        </li>
                                     </ul>
                                  </li>
                               </ul>
                            </div>   
                         </div>
                      </div>--}}
                      <div class="d-flex align-items-center">
                         <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                            <span class="navbar-toggler-bar bar1 mt-1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                            </span>
                         </button>
                      </div>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0 ">
                            {{-- <li class="nav-item dropdown">
                               <a href="#"  class="nav-link" id="search-drop" data-bs-toggle="dropdown" >
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                     </svg>
                               </a>
                               <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="search-drop">
                                  <li class="">
                                     <div class="p-3 card-header justify-content-between border-bottom rounded-top">
                                        <div class="header-title">
                                           <div class="iq-search-bar device-search  position-relative">
                                                 <form action="#" class="searchbox">
                                                    <x-jet-input type="text" class="mt-1 block w-full"  />
                                                    <a class="d-lg-none d-flex" href="javascript:void(0);">
                                                       <span class="material-symbols-outlined">search</span>
                                                    </a>
                                                 </form>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="p-0 card-body all-notification">
                                        <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                              <div class="flex-shrink-0">
                                                 <img src="../assets/images/avatars/01.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                              </div>
                                              <div class="d-flex flex-column ms-3 w-100">
                                                 <a href="javascript:void(0);" class="h5">Paige Turner</a>
                                                 <span>Paige001</span>
                                              </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                           <div class="flex-shrink-0">
                                              <img src="../assets/images/avatars/02.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                           </div>
                                           <div class="d-flex flex-column ms-3 w-100">
                                              <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                              <span>Carlo.m</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center search-hover py-2 px-3 border-bottom">
                                           <div class="flex-shrink-0">
                                              <img src="../assets/images/avatars/03.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                           </div>
                                           <div class="d-flex flex-column ms-3 w-100">
                                              <a href="javascript:void(0);" class="h5">Paul Molive</a>
                                              <span>Paul.45</span>
                                           </div>
                                        </div>
                                        <div class="d-flex align-items-center border-bottom search-hover py-2 px-3">
                                           <div class="flex-shrink-0">
                                              <img src="../assets/images/avatars/04.png" class="align-self-center img-fluid avatar-50 rounded-pill" alt="#">
                                           </div>
                                           <div class="d-flex flex-column ms-3 w-100">
                                              <a href="javascript:void(0);" class="h5">Monty Carlo</a>
                                              <span>Carlo.m</span>
                                           </div>
                                        </div>
                                     </div> 
                                  </li>  
                               </ul>  
                            </li>
                            <li class="nav-item dropdown">
                               <a href="#"  class="nav-link" id="langues-drop" data-bs-toggle="dropdown" >
                                 <svg class="icon-24" width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802"></path>
                                  </svg>
                               </a>
                                  <ul class="dropdown-menu dropdown-menu-end">
                                     <li data-setting="attribute">
                                        <div  class="dropdown-item d-flex align-items-center">
                                           <input type="radio" value="ltr" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                           <label class="d-block" for="theme-scheme-direction-ltr">
                                              <svg width="20"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M18.9702 19.757L15.3502 5.27201C15.1884 4.62224 14.8136 4.04541 14.2856 3.63359C13.7576 3.22177 13.1068 2.99871 12.4372 3.00001H11.5602C10.8911 2.99938 10.2411 3.22275 9.71368 3.63452C9.18629 4.04628 8.81191 4.62274 8.65022 5.27201L5.03022 19.757C4.9679 20.0135 5.00954 20.2843 5.14605 20.5102C5.28257 20.7362 5.50288 20.899 5.75895 20.9631C6.01502 21.0273 6.28606 20.9875 6.51297 20.8527C6.73988 20.7178 6.90424 20.4986 6.97022 20.243L8.28022 15H15.7202L17.0302 20.243C17.0962 20.4986 17.2606 20.7178 17.4875 20.8527C17.7144 20.9875 17.9854 21.0273 18.2415 20.9631C18.4976 20.899 18.7179 20.7362 18.8544 20.5102C18.9909 20.2843 19.0325 20.0135 18.9702 19.757V19.757ZM8.78022 13L10.5912 5.75801C10.6449 5.5414 10.7696 5.34903 10.9454 5.21163C11.1213 5.07423 11.3381 4.99972 11.5612 5.00001H12.4392C12.6624 4.99972 12.8792 5.07423 13.055 5.21163C13.2308 5.34903 13.3556 5.5414 13.4092 5.75801L15.2192 13H8.78022Z" fill="currentColor"/>
                                              </svg>
                                              <span class="ms-2 mb-0"> LTR </span>
                                           </label>
                                           
                                        </div>
                                     </li>
                                     <li data-setting="attribute">
                                        <div class="dropdown-item d-flex align-items-center">
                                           <input type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                           <label class=" d-block" for="theme-scheme-direction-rtl">
                                              <svg width="20"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M12 4C10.08 4 8.5 5.58 8.5 7.5C8.5 8.43 8.88 9.28 9.5 9.91C7.97 10.91 7 12.62 7 14.5C7 17.53 9.47 20 12.5 20C14.26 20 16 19.54 17.5 18.66L16.5 16.93C15.28 17.63 13.9 18 12.5 18C10.56 18 9 16.45 9 14.5C8.99823 13.7298 9.2513 12.9806 9.71978 12.3692C10.1883 11.7578 10.8458 11.3186 11.59 11.12L16.8 9.72L16.28 7.79L11.83 9C11.08 8.9 10.5 8.28 10.5 7.5C10.5 6.66 11.16 6 12 6C12.26 6 12.5 6.07 12.75 6.2L13.75 4.47C13.22 4.16 12.61 4 12 4Z" fill="currentColor"/>
                                                 </svg>
                                              <span class="ms-2 mb-0"> RTL </span>
                                           </label>
                                     </div>
                                  </li>                 
                               </ul>
                            </li>
                            <li class="nav-item dropdown">
                               <a href="#"  class="nav-link" id="notification-drop" data-bs-toggle="dropdown" >
                                  <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
                                     <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
                                  </svg>
                                  <span class="bg-danger dots"></span>
                               </a>
                               <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                                     <li class="">
                                        <div class="p-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                              <div class="header-title">
                                              <h5 class="mb-0 text-white">All Notifications</h5>
                                           </div>
                                        </div>
                                     <div class="p-0 card-body all-notification">
                                        <a href="#" class="iq-sub-card">
                                           <div class="d-flex align-items-center">
                                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="" loading="lazy">
                                              <div class="ms-3 w-100">
                                                 <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                 <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">95 MB</p>
                                                    <small class="float-end font-size-12">Just Now</small>
                                                 </div>
                                              </div>
                                           </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                           <div class="d-flex align-items-center">
                                              <div  >
                                                 <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="" loading="lazy">
                                              </div>
                                                 <div class="ms-3 w-100">
                                                    <h6 class="mb-0 ">New customer is join</h6>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                       <p class="mb-0">Cyst Bni</p>
                                                       <small class="float-end font-size-12">5 days ago</small>
                                                    </div>
                                                 </div>
                                           </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                           <div class="d-flex align-items-center">
                                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="" loading="lazy">
                                              <div class="ms-3 w-100">
                                                 <h6 class="mb-0 ">Two customer is left</h6>
                                                 <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">Cyst Bni</p>
                                                    <small class="float-end font-size-12">2 days ago</small>
                                                 </div>
                                              </div>
                                           </div>
                                        </a>
                                        <a href="#" class="iq-sub-card">
                                           <div class="d-flex align-items-center">
                                              <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="" loading="lazy">
                                              <div class="w-100 ms-3">
                                                 <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                 <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">Cyst Bni</p>
                                                    <small class="float-end font-size-12">3 days ago</small>
                                                 </div>
                                              </div>
                                           </div>
                                        </a>
                                     </div>
                                  </li>
                               </ul>
                            </li>
                            <li class="nav-item theme-scheme-dropdown">
                                  <a href="#"  class="nav-link" id="mode-drop" >
                                     <svg class="icon-24" width="24"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"></path>
                                        <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"></path>
                                        <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"></path>
                                        <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"></path>
                                        <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"></path>
                                        <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"></path>
                                        <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"></path>
                                        <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"></path>
                                        <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"></path>
                                     </svg>
                                  </a>
                                  <ul class="list-unstyled dropdown-menu dropdown-content">
                                     <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                           <input type="radio" value="light" class="btn-check" name="theme_scheme" id="color-mode-light">
                                           <label class="d-block w-full" for="color-mode-light">
                                              <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor"></path>
                                                 <path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor"></path>
                                                 <path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor"></path>
                                                 <path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor"></path>
                                                 <path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor"></path>
                                                 <path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor"></path>
                                                 <path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor"></path>
                                                 <path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor"></path>
                                                 <path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor"></path>
                                              </svg>
                                           <span class="ms-3 mb-0">Light</span>
                                           </label>
                                        </div>
                                     </li>
                                     <li  data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                           <input type="radio" value="dark" class="btn-check" name="theme_scheme" id="color-mode-dark">
                                           <label class="d-block" for="color-mode-dark">
                                           <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor"></path>
                                              <path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor"></path>
                                              <path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor"></path>
                                              <path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor"></path>
                                           </svg>
                                           <span class="ms-3 mb-0">Dark</span>
                                           </label>
                                        </div>
                                     </li>
                                     <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                           <input type="radio" value="auto" class="btn-check" name="theme_scheme" id="color-mode-auto" checked>
                                           <label class="d-block" for="color-mode-auto">
                                              <svg class="icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor"></path>
                                              </svg>
                                           <span class="ms-3 mb-0">Auto</span>
                                           </label>
                                        </div>
                                     </li>
                               </ul>
                            </li> --}}
                             <li class="nav-item iq-full-screen d-none  d-xl-block border-end" id="fullscreen-item">
                               <a href="#"  class="nav-link pe-3" id="btnFullscreen" data-bs-toggle="dropdown" >
                                  <span class="btn-inner">
                                    <svg class="normal-screen icon-24" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                     <svg class="full-normal-screen icon-32 d-none" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                               </a>
                            </li>
                            <li class="nav-item dropdown">
                               <a class="py-0 nav-link d-flex align-items-center ps-3" href="#" id="profile-setting" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="{{ (Auth::user()->profile_photo_url != '') ? Auth::user()->profile_photo_url :  'assets/images/avatars/01.png'}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded" loading="lazy">
                                  <div class="caption ms-3 d-none d-md-block ">
                                     <h6 class="mb-0 caption-title">{{ Auth::user()->name }}</h6>
                                     <p class="mb-0 caption-sub-title">{{ Auth::user()->email }}</p>
                                  </div>
                               </a>
                               <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-setting">
                                  <li>
                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>
                                  </li>
                                  <!-- <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>-->
                                  <li><hr class="dropdown-divider"></li>
                                  <li>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
        
                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                  </li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                   </div>
                </nav>
            <!--Nav End-->
            </div>
            <main>
                
            <div class="content-inner container-fluid pb-0" id="page_layout">
               <div class="row">
                  <div class="col-lg-12">
                  {{ $slot }}
                  </div>
               </div>
            </div>
                
            </main>
            
        </div>
          <!-- Wrapper End-->
         <!-- Live Customizer start -->
        <!-- Setting offcanvas start here -->
        <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true" role="dialog">
              <div class="offcanvas-header pb-0">
                  <div class="d-flex align-items-center">
                      <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
                  </div>
                  <div class="close-icon" data-bs-dismiss="offcanvas">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                  </div>
              </div>
              <div class="offcanvas-body data-scrollbar">
                  <div class="row">
                      <div class="col-lg-12">
                          <div>
                              <div class="text-center mb-4">
                                  <h5 class="d-inline-block">Style Setting</h5>
                              </div>
                              <div>
                                  <!-- Theme start here -->
                                  <div class="mb-4">
                                      <h5 class="mb-3">Theme</h5>
                                      <div class=" mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked="">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-light">
                                                 <span>Light Theme</span> 
                                                  <div class="text-primary ">
                                                      <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
                                                      </svg>
                                                  </div>
                                              </label>
                                          </div>
                                      </div>
                                       <div class=" mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100 ">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="dark" name="theme_scheme" id="color-mode-dark">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-dark">
                                                 <span>Dark Theme</span>
                                                 <div class="text-primary ">
                                                     <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                                      </svg>
                                                 </div>                                    
                                              </label>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="auto" name="theme_scheme" id="color-mode-auto">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-auto">
                                                 <span>Device Default</span> 
                                                 <div class="text-primary ">
                                                      <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <g clip-path="url(#clip0_507_92)">
                                                          <rect width="30" height="27" fill="white"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          </g>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
                                                          <defs>
                                                          <clipPath id="clip0_507_92">
                                                          <rect width="30" height="27" fill="white"></rect>
                                                          </clipPath>
                                                          </defs>
                                                      </svg>
                                                 </div>
                                              </label>
                                          </div>
                                          
                                      </div>
                                  </div>
                                  <!-- Color customizer end here -->
                                  <hr class="hr-horizontal">
                                  <!-- Menu start here -->
                                  <div>
                                    <h6 class="mt-4 mb-3">Menu Color</h6>
                                    <div class="d-grid gap-3 grid-cols-3 mb-3">
                                        <div data-setting="radio">
                                            <input type="radio" value="sidebar-white" class="btn-check" name="sidebar_color" id="sidebar-white" checked="">
                                            <label class="btn btn-border d-block" for="sidebar-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="White Menu">
                                                Light
                                            </label>
                                        </div>
                                        <div data-setting="radio">
                                            <input type="radio" value="sidebar-dark" class="btn-check" name="sidebar_color" id="sidebar-dark">
                                            <label class="btn btn-border d-block" for="sidebar-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Dark Menu">
                                                Dark
                                            </label>
                                        </div>
                                        <div data-setting="radio">
                                            <input type="radio" value="sidebar-color" class="btn-check" name="sidebar_color" id="sidebar-color">
                                            <label class="btn btn-border d-block" for="sidebar-color" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Colored Menu">
                                                Color
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                                  <hr class="hr-horizontal">
                                  <!-- Menu Style start here -->
                                  <div>
                                      <h5 class="mt-4 mb-3">Menu Style</h5>
                                      <div class="d-grid gap-3 grid-cols-3 mb-4">
                                          <div data-setting="checkbox" class="text-center">
                                              <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                                  Mini
                                              </label>
                                          </div>
                                          <div data-setting="checkbox" class="text-center">
                                              <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}" class="btn-check" name="sidebar_type" id="sidebar-hover">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                                  Hover
                                              </label>
                                          </div>
                                          <div data-setting="checkbox" class="text-center">
                                              <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                                  Soft
                                              </label>
                                          </div>
                                      </div>
                                  </div>
          
                                  <!-- Menu Style end here -->
          
                                  <hr class="hr-horizontal">
          
                                  <!-- Active Menu Style start here -->
          
                                  <div class="mb-4">
                                      <h5 class="mt-4 mb-3">Active Menu Style</h5>
                                      <div class="d-grid gap-3 grid-cols-2">
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                                  Rounded One
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                                  Rounded All
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                                  Pill One Side
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                                  Pill All
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <hr class="hr-horizontal">
                                  <!-- Color customizer start here -->
                                  <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                      <h6 class="mt-4 mb-3">Color Customizer</h6>
                                      <div class="d-flex align-items-center">
                                        <a href="#custom-color" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-color">Custom</a>
                                        <div data-setting="radio">
                                          <input type="radio" value="theme-color-default" class="btn-check" name="theme_color" id="theme-color-default" data-colors="{&quot;primary&quot;: &quot;#7016d0&quot;, &quot;secondary&quot;: &quot;#aca4bc&quot;}">
                                          <label class="btn bg-transparent px-2 border-0" for="theme-color-default" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Reset Color" aria-label="Reset Color">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"></path>
                                              <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"></path>
                                            </svg>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="collapse" id="custom-color">
                                      <div class="form-group d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-primary-color">Primary</label>
                                        <input class="" name="theme_color" data-extra="primary" type="color" id="custom-primary-color" value="#7016d0" data-setting="color">
                                      </div>
                                      <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-secondary-color">Secondary</label>
                                        <input class="" name="theme_color" data-extra="secondary" type="color" id="custom-secondary-color" value="#08B1BA" data-setting="color">
                                      </div>
                                    </div>
                                    <div class="grid-cols-5 mb-4 d-grid gap-3">
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color" id="theme-color-1" data-colors="{&quot;primary&quot;: &quot;#2185F4&quot;, &quot;secondary&quot;: &quot;#B1BBC6&quot;, &quot;tertiray&quot;: &quot;#FF8000&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-1" aria-label="Theme-1">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#2185F4"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1BBC6"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-gray" class="btn-check" name="theme_color" id="theme-color-2" data-colors="{&quot;primary&quot;: &quot;#34A853&quot;, &quot;secondary&quot;: &quot;#B1C6B7&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-2" aria-label="Theme-2">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#34A853"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1C6B7"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-3" data-colors="{&quot;primary&quot;: &quot;#553AF9&quot;, &quot;secondary&quot;: &quot;#B4B1C6&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-3" aria-label="Theme-3">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#553AF9"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B4B1C6"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-yellow" class="btn-check" name="theme_color" id="theme-color-4" data-colors="{&quot;primary&quot;: &quot;#FF3003&quot;, &quot;secondary&quot;: &quot;#C6B5B1&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-4" aria-label="Theme-4">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#FF3003"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#C6B5B1"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-pink" class="btn-check" name="theme_color" id="theme-color-5" data-colors="{&quot;primary&quot;: &quot;#fa6aae&quot;, &quot;secondary&quot;: &quot;#cfc6c6&quot;, &quot;tertiray&quot;: &quot;#25C799&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-5" aria-label="Theme-5">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#fa6aae"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#cfc6c6"></path></svg>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Color customizer end here -->
                                  <hr class="hr-horizontal">
                                  <div>
                                    <h6 class="d-inline-block mb-3 me-2">Page Style </h6>
                                    <div class="d-grid gap-3 grid-cols-2 mb-4">
                                      <div data-setting="radio">
                                        <input type="radio" value="container" class="btn-check" name="page_layout" id="page-layout-boxed">
                                        <label class="btn btn-border d-block" for="page-layout-boxed">Boxed</label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="container-fluid" class="btn-check" name="page_layout" id="page-layout-full-width" checked="">
                                        <label class="btn btn-border d-block" for="page-layout-full-width">Full Width</label>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="hr-horizontal">
                                  <!-- Direction customizer start here -->
                                  <div>
                                      <h5 class="mb-3 mt-4">Direction</h5>
                                      <div class=" mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked="">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="theme-scheme-direction-ltr">
                                                 <span>LTR</span>
                                                  <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"></circle>
                                                      <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"></rect>
                                                      <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"></rect>
                                                      <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                                  </svg>
                                              </label>
                                          </div>
                                         
                                      </div>
                                       <div class="mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="rtl" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                              <label class="form-check-label d-flex align-items-center justify-content-between " for="theme-scheme-direction-rtl">
                                                  <span>RTL</span>
                                                  <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"></circle>
                                                      <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"></rect>
                                                      <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"></rect>
                                                      <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"></rect>
                                                  </svg>
                                              </label>
                                          </div>
                                          
                                      </div>
                                  </div>
                                  <!-- Direction customizer end here -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <!-- Settings sidebar end here -->
        
        <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
          <svg class="icon-24 animated-rotate" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
          </svg>
        </a>
    <!-- Live Customizer end -->
  
        <!-- Library Bundle Script -->
        <script src="{{ url('assets/js/core/libs.min.js')}}"></script>
        <!-- Plugin Scripts -->
        <!-- Slider-tab Script -->
        <script src="{{ url('assets/js/plugins/slider-tabs.js')}}"></script>
        <!-- Lodash Utility -->
        <script src="{{ url('assets/vendor/lodash/lodash.min.js')}}"></script>
        <!-- Utilities Functions -->
        <script src="{{ url('assets/js/iqonic-script/utility.min.js')}}"></script>
        <!-- Settings Script -->
        <script src="{{ url('assets/js/iqonic-script/setting.min.js')}}"></script>
        <!-- Settings Init Script -->
        <script src="{{ url('assets/js/setting-init.js')}}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ url('assets/js/core/external.min.js')}}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ url('assets/js/charts/widgetcharts.js?v=1.0.1')}}" defer></script>
        <!-- Dashboard Script -->
        <script src="{{ url('assets/js/charts/dashboard.js?v=1.0.1')}}" defer></script>
        <!-- qompacui Script -->
        <script src="{{ url('assets/js/qompac-ui.js?v=1.0.1')}}" defer></script>
        <script src="{{ url('assets/js/sidebar.js?v=1.0.1')}}" defer></script>
        @stack('modals')

        @livewireScripts
    </body>
</html>
