<?php
session_start();

if(!isset($_SESSION['username'])){
   $_SESSION['username'] = "Invitado";
}


//connect to database // host,user,pass,bd
$db=mysqli_connect("localhost","root","","mysite");


?>

<?php include "partials/header.php";?> 
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <?php include "partials/navigation.php";?> 
      <!-- end banner -->
      <!-- store -->
      <div class="store">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Best Wines <span class="red">In Our Store</span> </h2>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="black_bg">
            <div class="row d_flex">
               <div class="col-md-4">
                        <div class="store_box ">
                           <figure><img src="images/store_img1.png" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="store_box ">
                          
                           <h3>Black Wine</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</p>
                           <a class="read_more" href="#">Read more</a>
                        </div>
                     
                     </div>
                  </div>
               </div>
                <div class="black_bg">
            <div class="row d_flex">
               <div class="col-md-4">
                        <div class="store_box ">
                           <figure><img src="images/store_img2.png" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="store_box ">
                       
                           <h3>Red Wine</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</p>
                           <a class="read_more" href="#">Read more</a>
                        </div>
                     
                     </div>
                  </div>
               </div>
                <div class="black_bg">
            <div class="row d_flex">
               <div class="col-md-4">
                        <div class="store_box ">
                           <figure><img src="images/store_img3.png" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="store_box ">
                          
                           <h3>White Wine</h3>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages</p>
                           <a class="read_more" href="#">Read more</a>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
                 
            </div>
         </div>
      </div>
      <!-- end store -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About <span class="red"> Store</span></h2>
                  </div>
               </div>
            </div>
         
                  <div class="row">
                     <div class="col-md-12">
                        <div class="about_box ">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of </p>
                           <a class="read_more" href="#">Read more</a>
                        </div>
                    
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
  
      <!-- talk -->
      <div id="talk" class="talk">
         <div class="container">
            <div class="row ">
               <div class="col-md-6 ">
                  <div class="wines">
                     <h3>Let’s talk for wines</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making itIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem  ere, content here', making it</p>
                     <h3>Free Multipurpose <br>
                        Responsive Landing Page 2019</h3>
                  </div>
               </div>
               <div class="col-md-6 ">
                  <form class="main_form ">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="form_contril" placeholder="Name " type="text" name="Name ">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Phone Number" type="text" name=" Phone Number">
                        </div>
                        <div class="col-md-12">
                           <input class="form_contril" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end talk -->
      <!--  footer -->
            <footer>
         <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2021 © Todos los Derechos Reservados | <a href="https://html.design/"> Chemikal Drinks</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

