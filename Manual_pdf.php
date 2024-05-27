<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apna web</title>
  <link rel="stylesheet" href="manual-pdf.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
                  <input type="text" id="search-input" placeholder="Enter Manual code">
                  <button onclick="searchText()"></button>
                    
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
<hr>

      <p style="padding: 30px; font-size: 30px;color: rgb(241, 41, 14);">Search result </p>
    <div id="search-results"></div>

    <script>
        document.getElementById('search-input').addEventListener('input', searchText);

        function searchText() {
            var searchText = document.getElementById('search-input').value.toLowerCase();
            var searchResults = document.getElementById('search-results');
            searchResults.innerHTML = '';

            var rows = document.querySelectorAll('tr');
            var table = document.createElement('table');
            var tbody = document.createElement('tbody');

            rows.forEach(row => {
                var cells = row.querySelectorAll('td');
                var found = false;
                cells.forEach(cell => {
                    var text = cell.innerText.toLowerCase();
                    if (text.includes(searchText)) {
                        found = true;
                    }
                });
                if (found) {
                    tbody.appendChild(row.cloneNode(true)); // Clone the entire row
                }
            });

            if (tbody.children.length > 0) {
                table.appendChild(tbody);
                searchResults.appendChild(table);
            } else {
                searchResults.textContent = 'No matching content found.';
            }
        }
    </script>

   <hr>
    <h3 class="sem-header">1st Semester Lab Manual Pdf</h3>
    <div class="container">
        <table id="manual_table">       
             <tbody>
                <thead>
                   <tr>
                    <th class="coder-header1">subject code</th>
                    <th class="subject-header1">subject name</th>
                    <th class="=manual-header1">manual lab Answer</th>
                    <th class="download-header1">Download</th>
                   </tr>
                 <tr>
                    <td>22001</td>
                    <td>Fundamentals of ICT</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1drQ694_uxGet1oCJAiqpseGAThDDApWi" download="  " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22101	</td>
                    <td>English</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1-N_RPbY4xbri0tSHtUBIJRk3q7PLIPDU" download="  " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22102	</td>
                    <td>Basic Science (Chemistry)</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=18_47S-VSQSpj9HIC1gCMm1t6il1ETdMn" download="  " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22102	</td>
                    <td>Basic Science (Chemistry)</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=18_47S-VSQSpj9HIC1gCMm1t6il1ETdMn" download="  " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22102	</td>
                    <td>Basic Science (Physics)</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/uc?export=download&id=1Z53BjXf8VCUCCkycRgQFFxB0yBZFlkja" download="  " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22057	</td>
                    <td>Guidelines and assessments
                        micro project & industrial training</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1F8CqYsigjqjh8ZqNcZxhbC3MHNkOhn7v/view" download="  " class="download-btn">Download</a></td>
                 </tr>
            </thead>
        </tbody>
      </table>
    </div>
    <div>
    <h3 class="sem_header">MSBTE 2nd Sem Lab Manual</h3>
    <p>MSBTE Lab Manual for Diploma in Engineering & Technology, All 2nd Semester branches are available in PDF. You can download it by choosing your subject.</p>
</div>
    <div class="container">
    <table id="manual_table">
        <thead>
            <tr>
                <th class="coder-header1">subject code</th>
                <th class="subject-header1">subject name</th>
                <th class="=manual-header1">manual lab Answer</th>
                <th class="download-header1">Download</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>22231</td>
            <td>Fundaamental of Chemical Engineering</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1Kp5c04Lxg8CG3QfeENhzhA-QcpGtIzPC" download="" class="download-btn">Download</a></td>

          </tr>
          <tr>
            <td>22226</td>
            <td>Programming in c (Computer Group)</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1MnWShIThcbvmxyAjbi6cduYoia5x9Oid" download="">Lab Manual Answer</a></td>
            <td><a href="22213 - Elements of Electronics Engineering.pdf" download=" " class="download-btn">Download</a></td>

          </tr>
          <tr>
            <td>22225</td>
            <td>Basic Electronics (Electronics Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1DjZ-ZK0H5XNwREC6bhBL9Jts4NPnnz1q" download=" " class="download-btn">Download</a></td>

          </tr>
          <tr>
            <td>22218</td>
            <td>‘C’ Programming Language (Electronics Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1BwGVzbyf9qYeaEuZPd1X-nARLI95Ofvr" download=" " class="download-btn">Download</a></td>

          </tr>
          <tr>
            <td>22212</td>
            <td>Fundamentals of Electrical Engineering</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=131OMXcp_wpBFP_0s7dfFyvRcHHi7Vx9K" download=" " class="download-btn">Download</a></td>

          </tr>
          <tr>
            <td>22225</td>
            <td>Basic Electronics (Computer Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1RY9faieFghkhaTulIMSF8Ug3mQrfCbni/view" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22215</td>
            <td>Elements of electrical engineering</td>
            <td><a href="https://drive.google.com/file/d/1AFCMCxpvtft5q6h8fYpMSdxxFJ1hwrhz/view" download=""></a>Lab Manual Answer></td>
            <td><a href="https://drive.google.com/file/d/1zQFxIB1u8t1wH5KwEp84a7ywcP6Bo2P9/view" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22213</td>
            <td>Elements of Electronics Engineering</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1tRJ6Ji3Hv5QOlc1F1bGUaeq4yYm-6UAo" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22211</td>
            <td>Applied Science (Physics) (EEE Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1C_etaRRr1Mtt0xdR193y8MFV9ndowgB5" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22211</td>
            <td>	Applied Science (Chemistry) (EEE Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1nqATaBwqyCbHdEKvctNgBlB99NKlEfns" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22205</td>
            <td>Basic Surveying</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1eLZQmqm29XFtgJNwBWPIC8GBhy5lMmYU" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22203</td>
            <td>Applied mechanics</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=1GVrFGhmDs0n_QkBBMKn4PNVK6V6pJkkI" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22202</td>
            <td>Applied Science (Physics) (Civil & Mech Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=144QVjHgQTyAXYFvGLgcoOmO0KdEiCcym" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22202</td>
            <td>Applied Science (Chemistery) (Civil & Mech Group)</td>
            <td>Lab Manual Answer</td>
            <td><a href="https://drive.google.com/uc?export=download&id=144QVjHgQTyAXYFvGLgcoOmO0KdEiCcym" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22014</td>
            <td>Web page designing with html</td>
            <td><a href="https://drive.google.com/file/d/1tqK2LnmJVRmu8qN5KvT9_8TilIt7u316/view" download="">Lab manual Answer</a></td>
            <td><a href="https://drive.google.com/uc?export=download&id=1YghUTFGZgF5Wp0-XqZAB1A6qYRqMt_p9" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22013</td>
            <td>Computer peripheral Hardware and Mintenance</td>
            <td><a href="https://drive.google.com/file/d/1SZiA_V9cYzcn1u2l2puB8V8wEOVtlZhr/view" download="">Lab manual Answer</a></td>
            <td><a href="https://drive.google.com/uc?export=download&id=1WNuDjTcuWsCfbT1eqC_Ta3k9VIlTk556" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22009</td>
            <td>Business communication using Computer</td>
            <td><a href="https://drive.google.com/file/d/1YycxsCAvtzPr315QYpf9DQVVgMMlPPV8/view"  download="">Lab manual Answer</a></td>
            <td><a href="https://drive.google.com/uc?export=download&id=1WNuDjTcuWsCfbT1eqC_Ta3k9VIlTk556" download=" " class="download-btn">Download</a></td>
          </tr>
        </tbody>
    </table>

    </div>
    <div>
        <h3 class="sem-header">MSBTE 3rd Sem Lab Manual</h3>
        <p>Download the MSBTE Lab Manual for the 3rd Semester Diploma of All Branches.</p>
    </div>
    <div class="container">
        <table id="manual_table">       
             <tbody>
                <thead>
                   <tr>
                    <th class="coder-header1">subject code</th>
                    <th class="subject-header1">subject name</th>
                    <th class="=manual-header1">manual lab Answer</th>
                    <th class="download-header1">Download</th>
                   </tr>
                 <tr>
                    <td>22024	</td>
                    <td>Applied Multimedia Techniques</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1vtui8HpokcehDzS7B9BuxS1nKfP8b1FU/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22301	</td>
                    <td>Advanced Surveying</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/16ufqF8z81y9WKgccD6Qb1TplaQmdovm-/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22302</td>
                    <td>Highway Engineering</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1aNvpozVUtsngYEOVzhoPeDkBvWDJseaf/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22303	</td>
                    <td>Mechanics of Structure</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1cEosCXmueSjbo2NAktodcjYLRqhq_WDT/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22304	</td>
                    <td>Building Construction</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1rJ5XZFvRHhZ7X3tmor6RcYjbnfw_OjW-/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22305	</td>
                    <td>Concrete Technology</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1QNvCgptfTE7hUq-Jom75aeQ374Gd3x3Y/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22306	</td>
                    <td>Strength of Materials</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/18fSvc_gsX3eGT-cENH-sByESJvZOdSzg/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22308	</td>
                    <td>Automobile Engines</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/16J118_owMZzrBeKCOocXDCZCUMPm67vo/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22309	</td>
                    <td>Automobile Transmission System</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1iouZsAZiCm_E2ay5if37780j-vcYsHr_/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22313	</td>
                    <td>Mechanical Operations</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1JCoiTPBHwmmpw5uQu8b5nFo9vHwp-bHE/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22314	</td>
                    <td>Technology of Inorganic Chemicals</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://www.msbtesolution.xyz/2021/04/22314-Technology%20of%20Inorganic%20Chemicals" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22316</td>
                    <td>	Object-Oriented Programming using C++</td>
                    <td><a href="https://drive.google.com/file/d/10jSGdsf1Qd_u0Lo_nWJfXxHhMGm81E63/view" download="">Lab manual Answer</a></td>
                    <td><a href="https://drive.google.com/file/d/1xh1VnpyM8N4F_XTqmbpBPvBGyEnKEQeE/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22317	</td>
                    <td>Data Structure using C</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1KVLYhzrQEU__gCB1iqZBUt3b3U_saI1C/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22318</td>
                    <td>	Computer Graphics</td>
                    <td><a href="https://drive.google.com/file/d/1uSnlSM7vPCsmMoiLBLrxNMvgkn9MM-fT/view" download="">Lab manual Answer</a></td>
                    <td><a href="https://drive.google.com/file/d/1y2IccyHSAiX_GWa2pqoskKxmC9OrOuUW/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                    <td>22319	</td>
                    <td>Database Management System</td>
                    <td><a href="https://drive.google.com/file/d/1Kabw-0iBbUmS9ij10bQdwOOVh1hZhciv/view" download="">Lab manual Answer</a></td>
                    <td><a href="https://drive.google.com/file/d/1vgBI8t9mUnVUzglxVS_bRNse_pCngMqa/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <td>22320	</td>
                 <td>22320	Digital Techniques</td>
                 <td><a href="https://drive.google.com/file/d/1u0Y28DO7lrEnP9ao0jC-aBY5MUf-hPxZ/view" download="">Lab manual Answer</a></td>
                 <td><a href="https://drive.google.com/file/d/1booINyjuBbQpNrIEAz-rtdAi1XvTwMjI/view" download=" " class="download-btn">Download</a></td>
              </tr>
              <tr>
            <td>22321	</td>
            <td>Principle of Database</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1egV1FNOTX1oSR5-iLkuZeiEB63TwuMIJ/view" download=" " class="download-btn">Download</a></td>
          </tr>
          <tr>
            <td>22323</td>
             <td>22323	Digital Techniques and Microprocessor</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1hgiVyk4XqAJn1bHiSpEoluJfpX8YetB9/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
                <td>22324	</td>
                <td>Electrical Circuits</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1RBp_pjeqS1XPoFwcIjx_Bk0FZla7DMMM/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22325	</td>
            <td>Electrical and Electronics Measurement</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1Gf8gKTn75OBsqycJ4951ciwL4wAYicQU/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22326	</td>
            <td>Fundamentals of Power Electronics</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1eE4K0x--R-CtuL9RSNFVWr1sq1IF2rj9/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22328	</td>
            <td>Electrical Materials and Wiring Practice</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1n3ibbMhu4KakX69Mn7EDCM__WJPyFRJo/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22329	A</td>
            <td>Applied Electronics</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1BUEehujkCUDrjYZjLUfD3-Zp4OUHqnob/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22330	</td>
            <td>Electrical Circuits & Networks</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1EcPtlLshmcDAt_HtyIqdplOzuyEC3Duk/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22333	</td>
            <td>Electronic Measurement & Instrument</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/19p2X_jXKXjn14fjd5l6DB_9I0eTl4GRT/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22334	</td>
            <td>Principles of Electronics Communication</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1gzrcWgMd1K4Uix20OOl_RnwhenKtDtag/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22337	</td>
            <td>Thermal Engineering</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1kIR8xcf7W0ElkWGcqZj0pSJxJtt30YHg/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22342</td>
            <td>Engineering Metrology</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1FREyvf52E5gFL2aM3XVkRZMvirdgEA7N/view" download=" " class="download-btn">Download</a></td>
           </tr>
           <tr>
            <td>22343</td>
            <td>Mechanical Engineering Materials</td>
            <td>Lab manual Answer</td>
            <td><a href="https://drive.google.com/file/d/1phbyFwi_aPWnC1UjgKgBGeJ8_i7w4tJU/view" download=" " class="download-btn">Download</a></td>
           </tr>
         </thead>
        </tbody>
      </table>
    </div>
    <div>
        <h3 class="sem-header">MSBTE 4th Sem Lab Manual</h3>
        <p>Download the MSBTE Lab Manual for the 3rd Semester Diploma of All Branches.</p>
    </div>
    <div class="container">
        <table id="manual_table">       
             <tbody>
                <thead>
                   <tr>
                    <th class="coder-header1">subject code</th>
                    <th class="subject-header1">subject name</th>
                    <th class="=manual-header1">manual lab Answer</th>
                    <th class="download-header1">Download</th>
                   </tr>
                 <tr>
                    <td>22024	</td>
                    <td>Applied Multimedia Techniques</td>
                    <td>Lab manual Answer</td>
                    <td><a href="https://drive.google.com/file/d/1vtui8HpokcehDzS7B9BuxS1nKfP8b1FU/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22034	</td>
                  <td>GUI Application Development Using VB.net</td>
                  <td><a href="https://drive.google.com/file/d/17zsOf90LZiRWJQshGLDUS-lrrmZ-NdFW/view" download="">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1ZSoPRFUWK1YR2m8WJMSzJ4DPxoN2D3BD/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22048</td>
                  <td>Fundamentals of Mechatronics</td>
                  <td><a href="https://drive.google.com/file/d/1XeLC3i5Cyd6Pq-HXqp2gCrQkgru7RpvR/view" download="">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/188pw_mtUwNwlBfKAmn3S-9VC8HNcI0ll/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22049</td>
                  <td>Micro Project Industrial
                    Training Assessment Final
                    27/11/2018 Final for CTP</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1iIQlg-UpGVPQhHcwRtvfE1Vfm2yhnqZh/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22401</td>
                  <td>Hydraulics</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1VomQ_YqDRHD8TskWFduF5apHQ04mD6GD/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22404</td>
                  <td>Geo-Technical Engineerings</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1DcAhjYFtR0WRMgtv5PJZRmFNc4WnlOiR/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22407</td>
                  <td>	Chemical Process Instrumentation & Control</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/10Pjafmrd9nUoCWVFdYBpiPQ2xVT2GtW3/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22409</td>
                  <td>Fluid Flow Operation</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1zQTe5mG6TF1vMXc8E_Y1yCG9PiG8l21_/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22410</td>
                  <td>Technology of Organic Chemicals</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1N2x2le9FbvjuBloalJvVHEYxPXehBzE2/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22412</td>
                  <td>	JAVA Programming</td>
                  <td><a href="https://drive.google.com/file/d/1wZTQPqeUCdlmiKVOw3EKdwq6t8TPuIGR/view" download=""> manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1WfsbdcY_0RxkwQDGb87245LTs7NOYKBj/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22415</td>
                  <td>Microprocessor</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1-Whn17XI1HFJtcG-xuOp21oTu_CGWufg/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22416</td>
                  <td>Database Management</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1ubq8fd6876ChmMN-bF4xJ-SQfZKu3vGk/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22418</td>
                  <td>Electric Motors & Transformers</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1pBkOdbNBu9WH7UN9_C3clWQ34K9Kl4Nu/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22420</td>
                  <td>Industrial Measurement</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1hcuKe02sUH_dS-SSnYU8ne2lacuDnMd1/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22421</td>
                  <td>Digital Electronics & Microcontroller Application</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/130oj2eAwIjXU1j0HNcNx6M0HRt8kSBg2/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22423</td>
                  <td>Linear Integrated Circuits</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1myeGCY6xj0zUPrYwiiyEljQF5kp77byf/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22426</td>
                  <td>	Microcontroller & Applications</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1Cjjj1T_W-gUpUjTFM2afzaWPp2vvZqsd/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22427</td>
                  <td>	Basic Power Electronics</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1RN7Iobtu88pYMtVb6ouROZlHKiY5B_ne/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22428</td>
                  <td>Digital Communication Systems</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1pdySOtTq-bubdPWNbB-CLSIdc_kNp5dH/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22438</td>
                  <td>Theory of Machine</td>
                  <td><a href="https://drive.google.com/file/d/1XUCr_6yPXMX--pmDOdEbyDewwG0bjB96/view" download=""> manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1tpcb0_1qqndjT3hmCYI_klkFRXt3Rfr0/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22443</td>
                  <td>Mechanical Engineering Measurement</td>
                  <td><a href="https://drive.google.com/file/d/1XaGHpRyqbfHFyNvz7CfCqrMGitIMOfz2/view" download=""> manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1KTmUmeGvaHuj_PdPIi4cBu2PmIcXBDU-/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22445</td>
                  <td>	Fluid Mechanics & Machinery</td>
                  <td><a href="https://drive.google.com/file/d/1XbRNC0gvIaiN0z0HWmLdah37bM9UUaDw/view" download=""> manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1RGZNgJ6vs12-E5ryI1myt14YgIWN7Bfx/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                </thead>
            </tbody>
        </table>
    </div>
    <div>
      <h3 class="sem-header">MSBTE 5th Sem Lab Manual</h3>
      <p>Download the MSBTE Lab Manual for the 3rd Semester Diploma of All Branches.</p>
  </div>
  <div class="container">
      <table id="manual_table">       
           <tbody>
              <thead>
                 <tr>
                  <th class="coder-header1">subject code</th>
                  <th class="subject-header1">subject name</th>
                  <th class="=manual-header1">manual lab Answer</th>
                  <th class="download-header1">Download</th>
                 </tr>
               <tr>
                  <td>22502</td>
                  <td>Design of Steel & RCC Structures</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1YJLafHyyiF21C2gX4X1C05ngZjtEVAUp/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22504	</td>
                <td>Public Health Engineering</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1neJ3ZiF_lWVv9ssURxF4Z1SQoMqO6yIa/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22510	</td>
                <td>Heat Transfer Operation</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/14BtxdibmY8-9rGMplwsLOA1QMivLE_4y/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22511</td>
                <td>Environmental Technology</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1SvqAUrXQiYSCGO8GIDNmogA5zlGDwi3p/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22516	</td>
                <td>Operating Systems</td>
                <td><a href="https://drive.google.com/file/d/1BcmKKZwwPTYvRGmxLgFaY_YcrIcGSQCE/view" download="">Lab manual Answer</a></td>
                <td><a href="https://drive.google.com/file/d/1meFSp3Gl6edCtf4mANcWd6jIJfFvl_hg/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22517	</td>
                <td>Advanced JAVA Programming</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/12NoAgo0Qdr4FocQ4VHOeCswFtdNy-5uW/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22518	</td>
                <td>Software Testing</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1pcXjlwJgjddse02EHEn_GXZMLKIo_01l/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22531	</td>
                <td>Control Systems & PLCs</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1tdyl_H1RKjcCvO81-nBteAaTg5PGOSam/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22532	</td>
                <td>Embedded Systems</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/119FIMsmukqDxPO9g8z4xKMYhEJGn36aI/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22533	</td>
                <td>Mobile & Wireless Communications</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1fDD-YgNPCc-cxz6h5YSOzlFciz9gb6C2/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22523</td>
                <td>	Industrial Machines</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1jJeEn7mzCmorNpbg3hHr1sxbt098LB4W/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22524</td>
                <td>	Switchgear & Protection</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/12QywRwHCiSACnUua8WlHFk_ZSge2kavS/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22525</td>
                <td>	Energy Conservation & Audit</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1_NB6dhgCqw6JWEII2NARkyD6ce4DzOvw/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22562	</td>
                <td>22562	Power Engineering & Refrigeration</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1x3THl5oQdmWKEoo62g3ulEirhwotnjBT/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22053	</td>
                <td>Solid Modeling & Additive Manufacturing</td>
                <td>Lab manual Answer</td>
                <td><a href="https://drive.google.com/file/d/1rnmXDKY9tubylbWYBGjlF9J4QHSg6TiO/view" download=" " class="download-btn">Download</a></td>
               </tr>
               <tr>
                <td>22509	</td>
                <td>Management</td>
                <td><a href="https://drive.google.com/file/d/1DvbDSMHJOVHZkTpIr6Lst8Q5ItnLpoiK/view" download="">Lab manual Answer</a></td>
                <td><a href="https://drive.google.com/file/d/1BHbO7uGv6VL0sloct7ygXPGpJ96st2sT/view" download=" " class="download-btn">Download</a></td>
               </tr>
           </thead>
          </tbody>
      </table> 
    </div>
    <div>
      <h3 class="sem-header">MSBTE 6th Sem Lab Manual</h3>
      <p>Download the MSBTE Lab Manual for the 3rd Semester Diploma of All Branches.</p>
  </div>
  <div class="container">
      <table id="manual_table">       
           <tbody>
              <thead>
                 <tr>
                  <th class="coder-header1">subject code</th>
                  <th class="subject-header1">subject name</th>
                  <th class="=manual-header1">manual lab Answer</th>
                  <th class="download-header1">Download</th>
                 </tr>
                 <tr>
                  <td>22062</td>
                  <td>	VLSI with VHDL</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/10hQ43cFwtCa-8LJecQHDyrj5PplxH0n8/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22602	</td>
                  <td>Maintenance & Repairs of Structure</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1Eg-C1GseKZK9FrFOquTXVHGPFdYAVQbp/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22603</td>
                  <td>	Emerging Trends Civil Engineering</td>
                  <td><a href="https://drive.google.com/file/d/1PLdVTvqRSuCcKr-p86OiVeohrg7mnUjc/view" download=" ">Lab manual Answer</a></td>
                  <td><a download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22609</td>
                  <td>	Mass Transfer Operation (MTO)</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1T_o-JvB5HWKzj3uxmbaVmTMRSLjNtHci/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22616	</td>
                  <td>Programming with Python</td>
                  <td><a href="https://drive.google.com/file/d/1NrDGB9pkhjIJ8Er0lkIpzeGAG3xf9cdS/view" download=" ">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1p7AoHylEAIvIvCXb6MStzd2PFvgin1-1/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22617	</td>
                  <td>Mobile Application Development</td>
                  <td><a href="https://drive.google.com/file/d/1hHBWD8YsyIobDgL0NOcOMTGV9ZT9N-KX/view" download=" ">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1Nv24p2U9xAUP-s2A0glH6w6IMei1ZvvP/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22618	</td>
                  <td>Emerging Trends in Computer
                    Engineering & Information Technology</td>
                  <td><a href="https://drive.google.com/file/d/1_hs2n-q7X8K6HLUQtHC--XFw1vKKQ0n3/view" download=" ">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1_hs2n-q7X8K6HLUQtHC--XFw1vKKQ0n3/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22622</td>
                  <td>	Wireless and Mobile Networks</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1__RAlKrOoC-TbibxpsERJNk7TPLVcO3G/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22625</td>
                  <td>	Maintenance of Electrical Energy</td>
                  <td><a href="https://drive.google.com/file/d/1aeNDGTbDo4ew2gIgDPX7gUdhmgRhZOPe/view" download=" ">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1wW9b-17-hX5AvSvoxskjC0Tf1DrUhl4l/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22626	</td>
                  <td>Utilization of Electrical Energy</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1KLokTqnMDX0pp7iLPjjPN6QgBM0j1Wbx/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22627	</td>
                  <td>Electrical and Contracting Estimation</td>
                  <td><a href="https://drive.google.com/file/d/1aVcsvPDEoDb1DDL3HYzj2yQXbdGBlBhL/view" download=" ">Lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1adxS4QPvjpvUriAHqR9QARzTV6_btmR9/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22628</td>
                  <td>	Emerging Trends Electrical Engineering</td>
                  <td><a href="https://drive.google.com/file/d/1h3Y67ITra7O7c8VAZyOpc-liDzLuNyR8/view" download="">Lab manual Answer</a></td>
                  <td><a  download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22634	</td>
                  <td>Computer Networking & Data Communication</td>
                  <td>Lab manual Answer</td>
                  <td><a href="https://drive.google.com/file/d/1TYLSX8WOot-myfEgd21hbmjEDDfJTpI1/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22636	</td>
                  <td>	EMERGING TRENDS IN ELECTRONICS</td>
                  <td><a href="https://drive.google.com/file/d/1hiV7aYN585OcnarNMgqIgHn7AGkO54Yh/view" download="">lab manual Answer</a></td>
                  <td><a  download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22652	</td>
                  <td>Emerging Trends in Mechanical Engineering</td>
                  <td><a href="https://drive.google.com/file/d/1XxBXuBprJZtcWnWRlXvIzNE3YDkDjR8T/view" download="">lab manual Answer</a></td>
                  <td><a  download="" class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22655</td>
                  <td>	Industrial Hydraulics and Pneumatics</td>
                  <td><a href="https://drive.google.com/file/d/1aTugOrbj8jS7L09zywjfKOLwacWvqcOI/view" download="">lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1NYtZY7TSduW8LQoGkIjzYdwqf_nEiYcd/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22656	</td>
                  <td>Automobile Engineering</td>
                  <td><a href="https://drive.google.com/file/d/1XnKP-McITzLxzrtteIstn9riLp_IA9b3/view" download="">lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1Ik5g_HKDcQ52kyKhEWyp77-M3CDl2Ka-/view" download=" " class="download-btn">Download</a></td>
                 </tr>
                 <tr>
                  <td>22657</td>
                  <td>	Industrial Engineering & Quality Control Manual</td>
                  <td><a href="https://drive.google.com/file/d/1XmLfIQhFLwgskIyUDj2z9hga2Y7FTPca/view" download="">lab manual Answer</a></td>
                  <td><a href="https://drive.google.com/file/d/1xgUnwJuxoU6fmEQ_4LHPBZI-zP-L30BX/view" download=" " class="download-btn">Download</a></td>
                 </tr>
              </thead>
           </tbody>
      </table>
  </div>
  <section class="form-section">
    <form class="contact-form">
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
