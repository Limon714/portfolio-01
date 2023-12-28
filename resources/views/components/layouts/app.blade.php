<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <title>{{ $title ?? 'Bleak' }}</title>
        @livewireStyles
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-store-alt'></i>
              <span class="logo_name">Bleak</span>
            </div>
              <ul class="nav-links">
                <li>
                  <a wire:navigate href="{{ route('dashboard') }}">
                    <i class='bx bx-home-heart'></i>
                    <span class="links_name">Home</span>
                  </a>
                </li>
                <li>
                  <a wire:navigate wire:navigate href="#">
                    <i class='bx bxs-info-circle'></i>
                    <span class="links_name">About</span>
                  </a>
                </li>

                
                <li>
                  <a wire:navigate wire:navigate href="#">
                    <i class='bx bx-user-pin'></i>
                    <span class="links_name">Resume</span>
                  </a>
                </li>

                


                <li>
                  <a href="#">
                    <i class='bx bxs-briefcase'></i>
                    <span class="links_name">Portfolio</span>
                  </a>
                </li>

                
                <li>
                  <a href="#">
                    <i class='bx bx-edit'></i>
                    <span class="links_name">Blog</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class='bx bx-envelope'></i>
                    <span class="links_name">Contact</span>
                  </a>
                </li>


                <li class="log_out">
                  <a href="{{ route('home') }}">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                  </a>
                </li>
              </ul>
          </div>
          <section class="home-section">
            <nav>
              <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
              </div>
              <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search' ></i>
              </div>
              <div class="profile-details">
                <img src="{{ asset('images/limon.png') }}" alt="">
                <span class="admin_name">Limon Islam</span>
                
              </div>
            </nav>
            <div class="home-content">
            {{ $slot }}
        </div>
          </section>
       
          @livewireScripts
        <script>
            let sidebar = document.querySelector(".sidebar");
         let sidebarBtn = document.querySelector(".sidebarBtn");
         sidebarBtn.onclick = function() {
           sidebar.classList.toggle("active");
           if(sidebar.classList.contains("active")){
           sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
         }else
           sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
         }
          </script>
         <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
