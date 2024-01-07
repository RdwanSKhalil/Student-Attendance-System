<!DOCTYPE html>
<html lang="ar" dir="rtl">
  
    <head>

        <!-- Bootstrap Framework CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

        <!-- Css Link -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Toaster CDN -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        @livewireStyles

        <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <ul>
                <li>
                  <a class="btn fs-5" href="{{route('classrooms')}}">کلاس</a>
                  <a class="btn fs-5" href="{{route('students')}}">قوتابی</a>
                  <a class="btn fs-5" href="{{route('info')}}">زانیاری</a>
                </li>
              </ul>
              <ul>
                <li class="text-light fs-5">سیستەمی چیکرنا</li>
              </ul>
              <ul>
                <img src="{{asset('/images/logo-transparent.png')}}" class="img-fluid">
              </ul>
            </div>
        </nav>

    </head>
    <body>

      <div class="wrapper">
         @yield('content')
      </div>

        <!-- Bootstrap Framework Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- Jquery for Toastr Not -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- Toastr Notifications Library -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @livewireScripts

        <footer class="mt-5 footer fixed-bottom bg-dark text-white">
          <div class="text-center p-3">
            © 2024 Attendance System
          </div>
        </footer>

        <script>     
          window.addEventListener('Notify-Green', event => {
              toastr.options.progressBar = true;
              toastr.options.positionClass = "toast-bottom-right";
              toastr.options.timeOut = 3000;
              toastr.success(event.detail.message);
          });

          window.addEventListener('Notify-Red', event => {
              toastr.options.progressBar = true;
              toastr.options.positionClass = "toast-bottom-right";
              toastr.options.timeOut = 3000;
              toastr.error(event.detail.message);
          });
      </script>

    </body>
</html>