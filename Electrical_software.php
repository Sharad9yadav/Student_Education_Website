<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical</title>
    <link rel="stylesheet" href="./card.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#"><h2>Apna Web</h2></a></span>
    
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#"></a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
    
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Syllabus</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
    
            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>
    
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>
    
                    <div class="search-field">
                        <input type="text" id="searchInput" placeholder="Search by title...">
                        <script>
                            // JavaScript for search functionality
                            document.getElementById('searchInput').addEventListener('input', function() {
                                var searchQuery = this.value.toLowerCase();
                                var cards = document.querySelectorAll('.card');
                        
                                cards.forEach(function(card) {
                                    var title = card.querySelector('.card-title').innerText.toLowerCase();
                                    var description = card.querySelector('.card-description').innerText.toLowerCase();
                        
                                    if (title.includes(searchQuery) || description.includes(searchQuery)) {
                                        card.style.display = 'block';
                                    } else {
                                        card.style.display = 'none';
                                    }
                                });
                            });
                        </script>
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<script>

const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>
<div class="owl-carousel owl-theme">
    <div class="item carousel-item">
      <img src="https://t3.ftcdn.net/jpg/04/83/54/50/240_F_483545014_giRhbJN3YJw2EKGpIHHPDldGlojFltsJ.jpg" alt="Image 1">
      <div class="carousel-text"><h1>Welcome To Apna Web</h1></div>
    </div>
    <div class="item carousel-item">
      <img src="https://media.istockphoto.com/id/616902766/photo/dedicated-to-software-development.jpg?s=612x612&w=0&k=20&c=DbeQZha7EDOxSCK49IOzP6DaVJaBElzFItOVJKQSDek=" alt="Image 2">
      <div class="carousel-text"></div>
    </div>
    <div class="item carousel-item">
      <img src="https://media.istockphoto.com/id/1136027027/video/two-electronics-development-engineers-working-on-computers-talk-with-project-manager-team-of.jpg?s=640x640&k=20&c=sXfNv4pPktvI8RBTeQNvy_kqflaVgSdsFcLNlP-Ty88=" alt="Image 3">
      <div class="carousel-text"><h1></h1></div>
    </div>
  </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:true, // Autoplay enabled
        autoplayTimeout:3000, // Autoplay interval in milliseconds (e.g., 3000ms = 3 seconds)
        items:1, // Display only one item at a time
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
      });
    });
  </script>
  <hr style="border-width: 2px;">
  
  <div class="card-container">
    <!-- First Card -->
    <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/2/22/ETAP_Company_Logo.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">ETAP</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://etap.com/de/demo-download"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <!-- Second Card -->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuOgtrLGHg5Px-qnt9t5FIx99RU8HUVnAZ6H2dasZQqA&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">AutoCAD Electrical</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.autodesk.com.au/products/autocad-electrical/overview?plc=ACDIST&term=1-YEAR&support=ADVANCED&quantity=1"><button class="download-btn" >Download</button></a>
        </div>
    </div>
    <!-- Third Card -->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkrQWWAuEB0HKODPmRwTcu-WUaoe9yX2lDVnZCosfSuw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Matlab</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://matlab.en.softonic.com/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--fourth card-->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNv9H1TLjpFRwxA0SnOB_5BpMnBUlLiy7d4CJ9IziGCA&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">PSpice</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.orcad.com/pspice-free-trial"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
     <!--fifth card-->
     <div class="card">
        <img src="https://photo.isu.pub/eplanbelgium/photo_large.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">EPLAN Electric P8</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.eplan-software.com/services/downloads/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--Sixth card-->
    <div class="card">
        <img src="https://seeklogo.com/images/A/autodesk-fusion-360-logo-7F72A76397-seeklogo.com.png" alt="Image">
        <div class="card-content">
            <h3 class="card-title">fusion 360</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://autodesk.com/products/fusion-360/trial-intake"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--sevent card-->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTCI0uTLqv8yr3tNF2jAd8DIVLy0ZerNPvin9ishTpiQ&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Solid Edge</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://resources.sw.siemens.com/en-US/download-solid-edge-student-edition"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <div class="card">
        <img src="https://i.ytimg.com/vi/Jd83c8ifz_4/maxresdefault.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">SpaceClaiem </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.ansys.com/en-in/products/3d-design/ansys-spaceclaim"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_31d5c59d5dcfa62ca9cad7fb8b14edd2/e3-series.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">E3 Series </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.zuken.com/en/resource/e3-viewer/"> <button class="download-btn">Download</button></a>
        </div>
    </div>


    
</div>

  
  <hr style="border-width: 2px;">
<section class="form-section">
   <form class="contact-form" action="feedback.php" method="post">
     <h3>Contact Us</h3>
     <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" id="name" name="name" required>
     </div>
     <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" id="email" name="email" required>
     </div>
     <div class="form-group">
         <label for="message">Message:</label>
         <textarea id="message" name="message" rows="4" required></textarea>
     </div>
     <div class="form-group">
         <input type="submit" value="Submit">
     </div>
 </form>
 </section>
 
 <footer class="footer">
   <p>
       <a href="#home">Home</a>
       <a href="#about">About</a>
       <a href="#services">Services</a>
       <a href="#contact">Contact</a>
   </p>
   <p>&copy;  | Designed by <a href="https://example.com" target="_blank">Apna Web Team</a></p>
 </footer>
 </body>
 </html>