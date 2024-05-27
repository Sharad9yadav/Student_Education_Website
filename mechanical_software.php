<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apna web </title>
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
  </script><hr style="border-width: 2px;">
  
<div class="card-container">
    <!-- First Card -->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfDCe-1hctaAUt0mMV4Ekqf6BJWLj5rDtGl_hTxaebQg&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Auto CAD</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.autodesk.in/products/autocad/trial-intake"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <!-- Second Card -->
    <div class="card">
        <img src="https://w7.pngwing.com/pngs/774/88/png-transparent-catia-organization-dassault-systemes-logo-professional-certification-automotive-engineering-text-trademark-logo.png" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Catia</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://softfamous.com/catia/"><button class="download-btn" >Download</button></a>
        </div>
    </div>
    <!-- Third Card -->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAn-Cf8x2mfItE5EsmYz0-4Mc4fFVk6TVdlqJ5v9sZrw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">ANSYS </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.ansys.com/en-in/products/structures/ansys-mechanical"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--fourth card-->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkrQWWAuEB0HKODPmRwTcu-WUaoe9yX2lDVnZCosfSuw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Matlab</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://matlab.en.softonic.com/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
     <!--fifth card-->
     <div class="card">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/060f14154191347.Y3JvcCw5NjAsNzUwLDAsMTA0.png" alt="Image">
        <div class="card-content">
            <h3 class="card-title">ProE Master</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://pro-engineer.software.informer.com/download/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--Sixth card-->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRKYjoxBIc3G-u-b3mPW_JPaSkFDtuxCmo3-qfTQlwGg&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Creo</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.ptc.com/en/success-paths/upgrade-your-creo-parametric/setup/download-and-install-creo"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--sevent card-->
    <div class="card">
        <img src="https://banner2.cleanpng.com/20180806/fv/kisspng-python-scalable-vector-graphics-logo-javascript-cl-coderpete-game-development-5b6819307ca155.2506144815335488485105.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Python</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.python.org/downloads/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkJtowPxsdGVmvewSJtnSOSIkGa1fLK8bzDY_Jd-FEGQ&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">FEA </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.autodesk.com/solutions/simulation/finite-element-analysis"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEF1p6yJJKEVoYiFY_o-Vt5NFyfI695LJBsE9A5vFsgA&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">MechaniCalc </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://mechanicalc.com/"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://images.sftcdn.net/images/t_app-icon-m/p/671eec42-96d1-11e6-80c9-00163ed833e7/2772165387/microsoft-visual-basic-icon.png" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Microsoft Visual Basic</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://microsoft-visual-basic.en.softonic.com/"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4VtE_ciyTjanL_zxvR6OyZgMzwj9qlgxxyQqLGLgWnw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Mathcad</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.mathcad.com/en/try-and-buy/mathcad-express-free-download"> <button class="download-btn">Download</button></a>
        </div>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoPafl_e2qhyGH2LMfV3VygdWXJLQqNsWbKZaP2zNz0w&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Exel</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://microsoft-excel.en.softonic.com/"> <button class="download-btn">Download</button></a>
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