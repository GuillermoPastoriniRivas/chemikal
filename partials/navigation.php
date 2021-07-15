<header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/titulo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Bienvenido <?php echo ucfirst($_SESSION['username']) ; ?></a>
                              </li>
                              <?php if(isset($_SESSION['username']) && $_SESSION['username'] !== "Invitado") : ?>
                              <li class="nav-item">
                                <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                              </li>
                              <?php else : ?>
                              <li class="nav-item">
                                <a class="nav-link" href="login.php">Iniciar Sesión</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="register.php">Crear Cuenta</a>
                              </li>
                              <?php endif ; ?>
                                 <!-- <li class="nav-item">
                                    <a class="nav-link" href="#contact">Nosotros</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Contacto</a>
                                 </li> -->
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>>
            <section class="banner_main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="text-img">
                           <figure><img src="images/logo.jpg" alt="#"/></figure>
                        
                        </div>

                     </div>
                     <div class="col-md-12">
                        <div class="text-bg">
                           <h1>Su Bartender Cibernético </h1>
                           <a href="#">Ver más</a>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </section>
         </div>
      </header>
