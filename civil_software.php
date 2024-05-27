<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apna web</title>
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
        <img src="https://seeklogo.com/images/A/autocad-logo-69326D7728-seeklogo.com.png" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Auto CAD</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.autodesk.in/products/autocad/trial-intake"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <!-- Second Card -->
    <div class="card">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOQAAADdCAMAAACc/C7aAAAAjVBMVEUAg9v///8AgNp2sOdSoONFmuEAftoAe9kAetkAeNgAfdqVvusei9231vI0lODL3/WNveuEt+lpqeXd6/n0+P3D3PTi7/qjye7p9PwAdNddo+TN4/Yykd89luCCtumbxe2uz/AAb9ZtrOaPuupRm+FbqeW22fRwsOd7t+m20vFgouOfyO6nz/Gu1PKSw+38xWjJAAAHkUlEQVR4nO2dC1ejOBSAQ2gDSQNSCm0pjzK1u7Pdqv//521evLSjdUar5+79jkdDSEk+Qm4CepB4nhctfYAsc6+DeGsSUJCEMuslKSVAobKTPIuvbsvnEbROcge2I1VXpk5yDllyhpIwQEkooCQUUBIKKAkFlIQCSkIBJaGAklBASSigJBRQEgooCQWUhAJKQgEloYCSUEBJKKAkFFASCigJBZSEAkpCASWhgJJQQEkooCQUUBIKKAkFlIQCSkIBJaGAklBASSigJBRQEgooCQWUhAJKQgEloYCSUEBJKKAkFFCyh2lsAcou8q1P0VWSMtH81CXoLrlI+p0tr5M0RcpAJcWDd5HoO7+K8h2Sd0Zyg5LfE5TsGEu+OSb7eDtE41F1fRx2+eMITUaxe1TqeQBnwxEpGx/dFXop8l5Jenz2SuPDcipZLxxNzU15lZR9bf5icW8qogeVr9q3GBHbXM39gRjnZrT7X9fCRX9Eu7treKU3jlTuqj+VJM/faCyqiSQ9DL270mdXn4O6O3ZQqi1uUnc2Nb4aUmr2OxJVXbge7W7Z0GDfHDFc6XRsjy72euM++Ovvn89V3i354izFU8l01Kw8sJJxL6nUMiuZX5TMR5sz6iwmktbFVmd3J/aCDUsn+fTPTSS36/XavLGaXiOZrS3bnZXUaXOKhLXodj+xwWUbDpKlSRNm2nHP6PFlGz9D8lhwXuj21vQKyb0qbaAmN/uhkyp/FRqL1Q+323YYte2Vg6RH+4q15AcEHkLFwK8k9Uuqma9tr5HcDPHRSHLX/DW3kuGkvUfbXjMonaR5J7ZoO8kLHfFOSbbPBl6TpM2nSOohWZ487yQGSXMAvv04ycli4FXJt3sy+w1JPSQ3jRuUTnLN+zbeUHIWMMaTN8fkLyQLNacXql/WbkzycVN0eElrNyi74KvSrLm15KZplokKr+vXp5CsCzyBhna5ftM0kcpfMhd4zG4XdubaSbhBafp7ZdL6k3/fVNLREnKNpGfGt6fvSEfzZNaErqvs+G9NBexJbYd8ZQelOQcLU3moR8lXSK5mr8+T2WQxcJhKehEh48XAyU7/pV5isI0dlKYn1bWbBbqHM3lTyWyr0LnyHZJ+J6k/rJcSd+FY0lagL9SEmUqkkyxUugpU0M1vKznjYcj1xbNnV0jmqVnpV13uj1B9+s4cXlts7e6jefiih2QtGLEnxUj+UEWTQvVwc1tJMzvrM9yKKyTP3Kz0x7k2WNbUDLqC9vvZQtupW5/MXL/mHBT3aubkumur20vyayUvzZNjydE8ae5dHFs7jW65dtt1CQiS3qR2Kxmq4a96tg0+TJL6eeTI81tLUr0KMFFtawallRSRaUHKPkyS0KDn1QX6OySHx0OD5HKQHFY8TK+iKnNL4ulBaSXdfTqlHyf54gCXJIUKFE+mk5ykCx2hHlOSB0Go121d4BF9ZLHLOpWWeu6oXE8Ou/XHTUV8bS5UI2nnIVXstpI9vl27dqwLcz9UKjLPXojj0icxeTLg8emTgYyHWXeLbG6sCLeS+oe3YF8kmTEykVzx41hCLU4nku1U8iymkluuq7Ij2Nzj+IWVNMGw/qDLtRAXCH/9IKuUall3P2rmOhTJsBXpPhlLRmL8IGv//EFWVugRYH/pYoSiYm2ueeMQ2NP9p5Lb9nSJaCJJ5Lw2zGsS6kPKeEAtaoRc7g1Jba670d5YLdSq2lHZ56nV+NNU7Z137VZlYlrpXHMU86M2x/gjyVcZHi73Dyufb3dPm+0V0P0m8NnuVz5Nzda4mj6D9ge72P6Pl/yGfGdJ2n97mf+uX4d+C0kVoKQeV+o7rdQ4rGVd1YT+q6b/uhZqmEk1tGupbtzUqGbVTBC2k0y60lR/mphCKsJ+pmT+e5LirO74ubo3PDUPyc9jxqVHymVSLVdLeeeXYp8s9v6Ob6TOfCw2B0qbsx/x3G9Tf8XjTJbNnUxynq6LZF6ydP/b0XUSAy9zMaq9DT23yjTKg7ZJ0vksj5uc5GlKecRF6UsScSb980FnHshDmzIicp3liyJXuU+P8szbeHOWu8dlc6yiKLxYy1WSb/8ny9909PM8Yew0e9o0zazaNYunVkbHmfIWku7K+JGLyl/WkcyPO5o3ETeSlX9gPPLTZP8gV+3hWD5udv5mf+Sn+mJDvvZPXFjOeclEXrSn5f6Q7vzWP8m71JciYrKcR3Hr37d+yltZpn78UCQJZcn+UAb5bL9sZnn6WG04z0lxlybcmwdtfLGaL/47HrUYUxFGnf9apumOqFhSkV2aSp0rm5qKNBVS0pgc0zSuKVP3N2J2UOPOP4pKquUBiQlVTa8qldblLvLFkrT7Gs3ko0Q/zZtMV5L234aDvFEL/kUWEFASCigJBZSEAkpCASWhgJJQQEkooCQUUBIKKAkFlIQCSkIBJaGAklBASSigJBRQEgooCQWUhAJKQgEloYCSUEBJKKAkFFASCigJBZSEAkpCASWhgJJQQEkooCQUUBIKKAkFlIQCSkIBJaGAklBASSigJBR6yeP/QbIBLMncC1fJqvjqpnwe7n+JeMR7KoD2JbUvQTaSXvnyP/yAYNe//vc/ZfujHhsGRvoAAAAASUVORK5CYII=" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Bluebeam</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.bluebeam.com/download/"><button class="download-btn" >Download</button></a>
        </div>
    </div>
    <!-- Third Card -->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9EajH1X8Z-2pJ7A2lCmYsDR5-m8mNYsg1q0W1yC5Qlw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">revit</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.autodesk.in/products/revit/free-trial"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--fourth card-->
    <div class="card">
        <img src="https://www.shutterstock.com/image-vector/vector-abstract-3d-architecture-sign-260nw-609357521.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">3D Architect Home</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://download.cnet.com/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
     <!--fifth card-->
     <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSloqj7Q0RkIsS6H0QyWxhf6pfYF4gtPp9zwB4rcFeSpw&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Blding Master</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.buildmaster.com.au/"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--Sixth card-->
    <div class="card">
        <img src="https://i.ytimg.com/vi/Ec1ulkYOUv0/maxresdefault.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Hec-Ras</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.hec.usace.army.mil/software/hec-ras/download.aspx"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <!--sevent card-->
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Mkgmf9v8giNg8ifS2isnBLP6cnGHWGO2xSP8nEFt9g&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">strap</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
            <a href="https://www.cesdb.com/strap.html"><button class="download-btn" >Download</button></a>
    
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSd-Lfd0zGKlHL7aNsOTywrzyBMAonnGOGydnAopEpgVQ&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">microstation </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.bentley.com/software/microstation/"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTibcZ7uwv2395YzqPtuWWGGD6wEfzJa5ZA1vu4hru5g&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">civil 3d </h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.autodesk.in/products/civil-3d/overview?term=1-YEAR&tab=subscription"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://5.imimg.com/data5/SELLER/Default/2023/10/356046641/MD/UW/KE/185666206/staad-pro-software.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Staad.pro</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://www.bentley.com/software/staad/"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuJxdwjHPlvrwq4ysV8KVOaaJybOA7xajUk9LxC9S8bg&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">OE prod</h3>
            <p class="card-description">This is a brief description of the card content. You can add more details here.</p>
           <a href="https://testbook.com/maharashtra-pwd-civil-engineer-assistant/"> <button class="download-btn">Download</button></a>
        </div>
    </div>

    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkNawT45yeoaCMM058nShtXnRJmScVpt6WGbij8jp7hQ&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Costx</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://www.rib-software.com/en/client-resources/rib-costx"> <button class="download-btn">Download</button></a>
        </div>
    </div>

    <div class="card">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/015/310/170/small/prism-triangle-triangular-pyramid-colorful-color-vibrant-effect-gradient-modern-logo-design-vector.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">prisam</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://www.spectotechnology.com/blog/what-is-an-optical-survey-prism/"> <button class="download-btn">Download</button></a>
        </div>
    </div>
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKn93re5bqrCAFx-LJk3SPXUJhMZeyWkKXqvbUaguWXA&s" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Candy</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://www.rib-software.com/en/book-a-demo"> <button class="download-btn">Download</button></a>
        </div>
    </div>

    <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/036/330/163/non_2x/creative-brick-logo-designs-for-buildings-architectural-buildings-civil-engineering-building-materials-shops-free-vector.jpg" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Shape Vector</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://vecteezy.com/free-vector/civil-logo"> <button class="download-btn">Download</button></a>
        </div>
    </div>

    <div class="card">
        <img src="https://images.crunchbase.com/image/upload/c_pad,f_auto,q_auto:eco,dpr_1/ibre36ppmxxsrb7zeyad" alt="Image">
        <div class="card-content">
            <h3 class="card-title">Tekla</h3>
            <p class="card-description">RIB CostX offers seamless integration of 2D & BIM takeoff, estimating and customizable reporting!</p>
           <a href="https://www.tekla.com/in/products/tekla-structural-designer"> <button class="download-btn">Download</button></a>
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
   <p>&copy;  | Designed by <a href="http://localhost/php_program/about.html" target="_blank">Apna Web Team</a></p>
 </footer>
 </body>
 </html>