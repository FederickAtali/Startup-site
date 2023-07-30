<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css"/>
  
   
    <!--Bootrap links-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
  
    <title></title>
  </head>
  <body onload="load()"> <!--This load the animate function.-->
    <nav id="navmin" class="navbar navbar-expand-lg py-3  fixed-top">
      <div id="navone" class="container">
        <a id="home" class="navbar-brand" href="index.php"
          >Etonki <br />
</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul id="firstUL" class="navbar-nav ms-auto">
            <li class="nav-item">
              <a id="homan" class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a id="aboutam" class="nav-link" href="about-us.html">About us</a>
            </li>
            <li class="nav-item dropdown">
              <a
                id="whatwe"
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                what we do
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li><a class="dropdown-item" href="web-design.html#webdesign-pro">Web Design</a></li>
                <li><a class="dropdown-item" href="web-design.html#web-development3">Web Development</a></li>
                <li>
                  <a class="dropdown-item" href="e-commerce-website.html">E-commerce Websites</a>
                </li>
                <li><a class="dropdown-item" href="content-management.html">CMS Websites</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a id="samples" class="nav-link" href="our-portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Our Pricing
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="Our-prices.html#Coopearate-site">Coorporate Website</a>
                </li>
                <li><a class="dropdown-item" href="Our-prices.html#Personal-web">Personal Websites</a></li>
                <li><a class="dropdown-item" href="Our-prices.html#Listing-web">Listing Websites</a></li>
                <li>
                  <a class="dropdown-item" href="Our-prices.html#e-commerce-site">E-commerce Websites</a>
                </li>
                <li><a class="dropdown-item" href="Our-prices.html#erp-software">ERP-Software</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a id="contall" class="nav-link" href="contact-us.html">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--This is a horizontal card that have an image the right and
    text in the left with some introducation and call of action.-->
    <section class="section-one p-5 p-lg-0 text-center text-sm-start d-ms-flex ">
      <!--Container that hold both the image and text.-->
      <div id="first-con" class="container mb-3 ">
        <!--some introductory text goes in here.-->
        <div class="text1">
          <h1 class="Alittle">A little description,<span class="text-warning">we create it.</span></h1>
          <h3 class="firsth3">The World is Online!</h3>
          <p class="texam text-wrap tex-start" style="width:22rem;">
            Taking your bussiness online is the new normal. The world biggest
            market is found no where except on the internet. Having your
            bussiness occupy a table of that market is a smart move.<br><br>
            We create you a responsive website,then manage the web
            presence just as you want.Our goal is to leave your customers with a
            good user experience. We walk with you every step of the process,
            making sure your dream website goes online
          </p>
          <a href="contact-us.html">
            <button id="but-one" type="button" class="btn">Get In Touch</button>
          </a>
        </div>
        <!--images goes here.-->
        <div class="image1">
          <img
          id="image12"
          class="img-fluid d-none d-sm-block"
            src="images/showing-responsiveness.png"
            alt="image showing we build websites"
          />
        </div>
      </div>
    </section>

    <!---This section is about what we do.-->
    <section class="what-we-do p-5">
      <div id="second-con" class="container d-sm-flex">

        <div class="text">
          <h1 class="sectionh1 text-decoration-underline">What We Do</h1>
            <div class="making">
              <h2 class="imtemhsm">Web Development and Design</h2>
           <img src="images/web.jpg" alt="web dev"
           class="imagewe w-50 img-fluid"
           >
            </div>
            <div>
              <h2 class="imtemhsm">E-Commerce Sites</h2>
            <img src="images/e-commrec.jpg" alt="ecommerce-dev"
            class="imagewe w-50"
            >
           </div>

           <div>
            <h2 class="cms">CMS designed business <br> websites</h2>
           <img src="images/cmswebdevelopment.jpeg" alt="ecommerce-dev"
           class="imagewe w-50"
           >
         </div>
         <div>
          <h2 class="cms">Customized ERP</h2>
         <img src="images/erp.png" alt=" demonstrating ERP"
         class="imagewe img-fluid w-50 d-none d-sm-block "
          >
       </div>
      </div>
       <div class="image23">
        <h2 class="h2three"><span>When It Comes To New Design.
          We got you Covered!</span>
        </h2>
        <div>

      </div>
    </section>
    
    <!--This is about our portfolio section.-->
    <section class="Port p-5">
      <div id="two-container" class="container d-ms-flex">
       <h2 class="portfolar">Portfolio</h2>
       <h5 class="truncateam">Have a look at a range of customisable websites so you can have</h5>
        <h5 class="truncate2"> a glimpse 
          of what your bussiness needs maybe.</h5>
          <!--Place some few cards in here tpo demonstrate some
          portfolio websites.-->
          <div class="row row-cols-2 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <a href=" https://jiji.ng/" target="_blank">
                  <img
                    src="images/jiji.jpeg"
                    class="card-img-top"
                    alt="image of range rover"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">JIJI</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <a
                  href="https://en.yema.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img
                    src="images/YEAMPIG.JPEG"
                    class="card-img-top"
                    alt="image of yema"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">YEMA</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <a
                  href="http://www.amoydiagnostics.com/"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img
                    src="images/DEVLOP.jpg"
                    class="card-img-top"
                    alt="image of amyo"
                /></a>
                <div class="card-body">
                  <h5 class="card-title">AmoyDX</h5>
                </div>
              </div>
            </div>
        <a href="our-portfolio.html">
        <button id="Colorbutt" type="button" class="btn  btn-lg">
          See More  &rarr; </button>
      </a>
        </div>
      </div>
    </section>


    <!--Section here about content management system-->
        <section class="content-manage p-5">
         <div class="container-fluid text-center" id="cms-container">
          <div class="row">
            <div class="col">
              <p class="content-manage">
              Content Management System - Manage the creation and modification 
              of digital content -  Instead of building your own system for creating web pages,
               storing images, and other functions, 
               the content management system(CMS) handles 
               all that basic infrastructure 
              stuff for you so that you can focus 
              more on the frontend of your websitee.
            </p>
            <a id="Content-manage-read" href="content-management.html"> Read More &rarr; </a> </p>
            </div>

            <div class="col image-manage-system">
              <h2 id="h2Management-System">  Content Management System</h2>
              <img src="images/cms-image2.png" alt="image of content manage"
              class="csm-image img-fluid"
              >
            </div>
          </div>
        </div>
    </section>


      <!--section here about security using grid system-->
       <Section class="security24 p-5">
        <div class="container p-3">
          <h2 class="securityh2"> We are here to build your website with  security in mind  to 
            support your brand
          </h2>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card" id="cardtamall">
                <img src="images/gateway5.png" class="card-img-top img-fluid" alt="image showing ssl">
                <div class="card-body">
                  <h5 class="card-title">Payment Gateway Integration</h5>
                  <p class="card-text">We will intrgrate  any payment gateway you want.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card " id="cardtamall">
                <img src="images/freehost.jpeg" class="card-img-top img-fluid" alt="image showing free host" id="imageiaa">
                <div class="card-body">
                  <h5 class="card-title">No Charges Apply for hosting</h5>
                  <p class="card-text"> We host your website for free</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card " id="cardtamall">
                <img src="images/ssl.jpg" class="card-img-top img-fluid" alt="ssl certificate logo"  id="imageiaa">
                <div class="card-body">
                  <h5 class="card-title">SSL Certicate Integration</h5>
                  <p class="card-text">You need to add SSL certificates to your websites
                     to secure online transactions and keep customer information private and secure.
                   </p>
                </div>
              </div>
            </div>
        </div>
       </Section>
        <!--Displaying some animation counter on the screeen.-->
        <section class="animatam p-5">
          <div id="conat" class="container d-sm-flex">
            <!--first div and images.-->
            <div class="allcol d-flex">
             <div class="div1">
              <img id="fits-client"  class="desi" src="images/happy.jpg" alt="happy emoji">
              <p class="strogyou" id="0101">80</p>
              <p id="site" class="pppes" >Numbers of Happy Client.</p>
             </div>
             <div  class="div1">
              <img id="deisgmh" class="desi" src="images/them-design.jpg" alt="design picture">
              <p id="0102">500</p>
              <p class="pppes">Numbers of well designed Theme.</p>
             </div>
             <div  class="div1">
              <img  class="desi" src="images/theme.jpg" alt="image showing theme">
              <p  id="0103">100</p>
              <p class="pppes">Completed Projects..</p>
             </div>
             
            </div>
          </div>
        </section>
     <!--What are client are saying
    This section use a bit of javascript-->
      <section class="client-saying p-5">
       
        <div class="container slideshow-container" >

          <div class="some-client">
          <h2 >Our client experiences !</h2>
        </div>
          <div class="mySlides fade">
          <img src="images/no-image1.png"  class="images-ever" style="width: 100px;" alt="imag of no image.">
          <div class="text-client">
             <p id="client-sya">
               We thank your Team for building us what we needed.Our website you build is exactly
               what you assured us.
             </p>
            <p class="tiku">Moses Ayuk</p>
          </div>
         
        </div>
        <div class="mySlides fade">
          <img src="images/no-image1.png"  class="images-ever"  style="width: 100px;" alt="imag of no image.">
          <div class="text-client">
            <p id="client-sya">
             Our experience with Etonki Tech Solutions is highly 
             recommendable.Since your Team  redesign our website, 
             we have been getting a low bounce rate
            </p>
            <p class="tiku">Akad Benard</p> 
          </div>
        </div>

        <div class="mySlides fade">
          <img src="images/no-image1.png" class="images-ever"  style="width: 100px;" alt="imag of no image.">
          <div class="text-client">
            <p id="client-sya">
             We would like to congratulates Etonki Team for building our
              website.We notice it is  responsive and we are getting
              positive feedback from our visitors.
            </p>

            <p class="tiku">Muhammed Zinap</p>
          </div>
        </div>
          <!--The previous buttons goes here.-->
         <a class="prev"
          onclick="plusSlides(-1)"
           >&#10094;
         </a>
         <a class="next"
         onclick="plusSlides(1)"
          >&#10095;
        </a>
        </div>
        <br>
        <!--Dots circles goes here-->
        <div style="text-align: center;">
          <span class="dot"
          onclick="currentSlide(1)"
          ></span>
          <span class="dot"

          onclick="currentSlide(2)"
          ></span>

          <span class="dot"
          onclick="currentSlide(3)"
          ></span>
        </div>
      </section>

     <!---Footer section.-->
     <section class="sec p-5">
      <div  class="container d-sm-flex" id="foot-container">
        <!--what we do-->
        <div class="first-foot">
          <h2>What we do</h2>
          <ul>
            <a href="Our-prices.html#Personal-web">
            <li>Personal website</li></a>
            <a href="Our-prices.html#Coopearate-site">
            <li>Coorperate Website</li></a>
            <a href="web-design.html">
            <li>Web development and design</li></a>
            <a href="e-commerce-website.html">
            <li>E-commerce Website </li></a>
            <a href="content-management.html">
            <li>CMS Website</li></a>
          </ul>
        </div>
        <!--Address-->
      <div class="sect-f">
        <h2> Contact info</h2>
        <ul>
          <a href="#">
            <li>info@etonkitech.com</li></a>
           <li id="whitalll"><i class="bi bi-telephone" id="tele"></i>+971561059336</li>
        </ul>
        <div class="social-media">
          <ul class="socialmed listy d-flex">
            <li><a href="#"><i class="bi bi-twitter m-2" id="twitteri" ></i></a></li>
           <li><a href="#"><i class="bi bi-facebook  m-2" ></i></a></li>
           <li><a href="#"><i class="bi bi-linkedin  m-2" ></i></a></li> 
            <li><a href="#"><i class="bi bi-instagram  m-2"></i></a></li> 
            <li><a href="https://wa.me/971561057574"><i class="bi-whatsapp  m-2" ></i></a></li>
          </ul>
        </div>
      </div>

      <!--info and iste map-->
      <div class="site-map">
        <a id="sitemap" href="etonki-map.html"><li>Site Map</li></a>
           <a id="sitemap" href="privacy.html"><li>Privacy Policy</li></a>
          <a id="sitemap" href="terms-conditions.html"> <li>Terms & Conditions</li></a>
      </div>
      </div>
      <p id="compyry">Copyright&copy;All right reserved 2022-<?php echo date("Y"); ?> www.etonkitech.com</p>
     </section>

    <!--Bootstrap scripts-->
    <script src="scripts/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
