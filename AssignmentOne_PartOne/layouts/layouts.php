<?php
   class layouts{
       public function headers($conf){
           ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
   <head>
      <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.115.4">
      <title><?php print $conf["site_name"]; ?> · Bootstrap v5.3</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet" crossorigin="anonymous">
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
      <link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico">
      <meta name="theme-color" content="#712cf9">
   </head>
   <body>
      <?php
         session_start();
      ?>
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
         <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
         </symbol>
         <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
         </symbol>
         <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
         </symbol>
         <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
         </symbol>
      </svg>
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
         <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
               <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#sun-fill"></use>
                  </svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#moon-stars-fill"></use>
                  </svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#circle-half"></use>
                  </svg>
                  Auto
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
         </ul>
      </div>
      <?php
         }
         public function logo($conf){
             ?>
      <main>
         <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
               <a href="./" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                     <title>Bootstrap</title>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                  </svg>
                  <span class="fs-4"><?php print $conf["site_name"]; ?></span>
               </a>
            </header>
            <?php
               }
               public function navigation(){
                   ?>
            <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
               <div class="container">
                  <a class="navbar-brand d-md-none" href="#">
                     <svg class="bi" width="24" height="24">
                        <use xlink:href="#aperture"/>
                     </svg>
                     Aperture
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="#offcanvas" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="#offcanvas" aria-labelledby="#offcanvasLabel">
                     <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="#offcanvasLabel">Aperture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 justify-content-between">
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <svg class="bi" width="24" height="24">
                                    <use xlink:href="#aperture"/>
                                 </svg>
                              </a>
                           </li>
                           <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Send Mail</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Enterprise</a></li>
                           <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
                           <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                           <?php
                              if (!isset($_SESSION['user'])) {
                           ?>
                           <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
                           <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                           <?php } else { ?>
                              <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
                              <li class="nav-item"><a class="nav-link text-warning" href="#">Hello <?php echo $_SESSION['user']['username'] ?></a></li>
                           <?php } ?>
                           <li class="nav-item">
                              <a class="nav-link" href="#">
                                 <svg class="bi" width="24" height="24">
                                    <use xlink:href="#cart"/>
                                 </svg>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
            <?php
               }
               public function banner(){
                   ?>
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
               <div class="container-fluid py-5">
                  <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                  <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                  <button class="btn btn-primary btn-lg" type="button">Example button</button>
               </div>
            </div>
            <?php
               }
               public function footer($conf){
                   ?>
            <footer class="pt-3 mt-4 text-body-secondary border-top">
               Copyright &copy; <?php print $conf["site_name"] . " " . date("Y"); ?>
            </footer>
         </div>
      </main>
      <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   </body>
</html>
                <?php
                }
    }