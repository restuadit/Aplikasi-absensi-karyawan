<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<body style="background-color: rgb(228, 232, 252)">
   
<nav class="navbar bg-primary navbar-dark fixed-top shadow" style="height: 75px">
   <div class="container-fluid">
      <button class="navbar-toggler me-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
       <span class="navbar-toggler-icon text-bg-primary"></span>
     </button>
     <a class="navbar-brand" href="#" style="margin-right:520px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Absensi Karyawan Radar Tasikmalaya</a>
     
     <div class="offcanvas offcanvas-start bg-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
       <div class="offcanvas-header">
         <h5 class="offcanvas-title text-bg-primary" id="offcanvasNavbarLabel" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Aplikasi Absensi Karyawan</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
       </div>
       <div class="offcanvas-body">
         <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="font-family: Arial, Helvetica, sans-serif">
           <li class="nav-item my-2">
             <a class="nav-link rounded-3 " aria-current="page" href="/home" style="border: 1px solid white;">&nbsp;<img src="{{ asset('icon/house.svg') }}"> Home</a>
           </li>
           @if (auth()->user()->level=='admin')
              <li class="nav-item my-2">
               <a class="nav-link  rounded-3" href="/karyawan" style="border: 1px solid white">&nbsp;<img src="{{ asset('icon/bar-chart.svg') }}"> Data Karyawan</a>
              </li>
              <li class="nav-item my-2">
                  <a class="nav-link rounded-3" href="/absen/karyawan" style="border: 1px solid white">&nbsp;<img src="{{ asset('icon/clipboard-data.svg') }}"> Absenan Karyawan</a>
              </li>
           @endif
           @if (auth()->user()->level=='user')
              <li class="nav-item my-2">
               <a class="nav-link rounded-3" href="/profil/{{ auth()->user()->id }}" style="border: 1px solid white">&nbsp;<img src="{{ asset('icon/person.svg') }}"> Profil</a>
              </li>
               <li class="nav-item my-2" >
                  <a class="nav-link rounded-3" href="/absen/user/{{ auth()->user()->id }}" style="border: 1px solid white">&nbsp;<img src="{{ asset('icon/person-video2.svg') }}"> Absen Harian</a>
                </li>
           @endif
           
            <li class="nav-item my-2">
               <a class="nav-link" href="#">_______________________________________</a>
            </li>
            <li class="nav-item my-2">
               <a class="nav-link rounded-3" href="/logout" style="border: 1px solid white">&nbsp;<img src="{{ asset('icon/box-arrow-left.svg') }}"> Logout</a>
            </li>
         </ul>
        
       </div>
     </div>
   </div>
 </nav>
 <div class="rounded ms-auto me-auto bg-light mb-4 shadow" style="border:1px solid white; width:1200px; margin-top:110px;">
    @yield('konten')
  </div>
  <div class="bg-primary text-light pt-2" style="height: 40px; text-align:center;">
    Created by &copy;Restu Aditya Setiawan
  </div>


<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>