<!DOCTYPE html>
<html>
<head>
<title>ucsc.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ucsc.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("background.jpg");
  min-height: 100%;
}

.ucsc-bar .ucsc-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="ucsc-top">
  <div class="ucsc-bar ucsc-green ucsc-card" id="myNavbar">
    <a href="#home" class="ucsc-bar-item ucsc-button ucsc-wide">BLOOD LINK</a>
    <!-- Right-sided navbar links -->
    <div class="ucsc-right ucsc-hide-small">
      <a href="#about" class="ucsc-bar-item ucsc-button"><i class="fa fa-users"></i> ABOUT US</a>
      <a href="#team" class="ucsc-bar-item ucsc-button"><i class="fa fa-eye"></i> OUR SERVICES</a>
      <a href="#contact" class="ucsc-bar-item ucsc-button"><i class="fa fa-envelope"></i> CONTACT US</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="ucsc-bar-item ucsc-button ucsc-right ucsc-hide-large ucsc-hide-medium" onclick="ucsc_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="ucsc-sidebar ucsc-bar-block ucsc-black ucsc-card ucsc-animate-left ucsc-hide-medium ucsc-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button ucsc-large ucsc-padding-16">Close ×</a>
  <a href="#about" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button">ABOUT</a>
  <a href="#team" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button">TEAM</a>
  <a href="#work" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button">WORK</a>
  <a href="#pricing" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button">PRICING</a>
  <a href="#contact" onclick="ucsc_close()" class="ucsc-bar-item ucsc-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 ucsc-display-container ucsc-grayscale-min" id="home">
  <div class="ucsc-display-left ucsc-text-white" style="padding:48px">
    <span class="ucsc-jumbo ucsc-hide-small">Share the Gift of Life:<br/>Donate Blood, Save a Life</span><br>
    <!-- <span class="ucsc-xxlarge ucsc-hide-large ucsc-hide-medium">Start something that matters</span><br> -->
    <!-- <span class="ucsc-large">Be the Reason Someone Smiles: Donate Blood!</span>
    <p><a href="#about" class="ucsc-button ucsc-green ucsc-padding-large ucsc-large ucsc-margin-top ucsc-opacity ucsc-hover-opacity-off">Learn more and start today!</a></p> -->
    <br/><br/>
    <span class="ucsc-xxlarge">Are you a?</span>
    <form action="index-action.php" method="post">
    <div class="ucsc-third">
                    <select
                      class="ucsc-input ucsc-border"
                      name="user-role"
                      required>
                      <option value="" disabled selected>Select your role</option>
                      <option value="donor">Blood Donor</option>
                      <option value="bank">Blood Bank</option>
                      <option value="admin">Admin</option>
                      <option value="org">Campaign Organizer</option>
                      <option value="tester">Sample Tester</option>
                      <option value="inventory">Inventory Manager</option>
                    </select>
    </div>
    <button class="ucsc-button ucsc-green ucsc-margin-bottom" type="submit"><i class="fa fa-sign-in fa-fw ucsc-text-theme"></i> Let's Start!</button>
    </form>



    <!-- <p><a href="#about" class="ucsc-button ucsc-green ucsc-padding-large ucsc-large ucsc-margin-top ucsc-hover-opacity-off">LOGIN NOW!</a></p> -->
  </div> 
  <!-- <div class="ucsc-display-bottomleft ucsc-text-grey ucsc-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official ucsc-hover-opacity"></i>
    <i class="fa fa-instagram ucsc-hover-opacity"></i>
    <i class="fa fa-snapchat ucsc-hover-opacity"></i>
    <i class="fa fa-pinterest-p ucsc-hover-opacity"></i>
    <i class="fa fa-twitter ucsc-hover-opacity"></i>
    <i class="fa fa-linkedin ucsc-hover-opacity"></i>
  </div> -->
</header>

<!-- About Section
<div class="ucsc-container" style="padding:128px 16px" id="about">
  <h3 class="ucsc-center">ABOUT THE COMPANY</h3>
  <p class="ucsc-center ucsc-large">Key features of our company</p>
  <div class="ucsc-row-padding ucsc-center" style="margin-top:64px">
    <div class="ucsc-quarter">
      <i class="fa fa-desktop ucsc-margin-bottom ucsc-jumbo ucsc-center"></i>
      <p class="ucsc-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="ucsc-quarter">
      <i class="fa fa-heart ucsc-margin-bottom ucsc-jumbo"></i>
      <p class="ucsc-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="ucsc-quarter">
      <i class="fa fa-diamond ucsc-margin-bottom ucsc-jumbo"></i>
      <p class="ucsc-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="ucsc-quarter">
      <i class="fa fa-cog ucsc-margin-bottom ucsc-jumbo"></i>
      <p class="ucsc-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div> -->

<!-- Promo Section - "We know design" -->
<!-- <div class="ucsc-container ucsc-light-grey" style="padding:128px 16px">
  <div class="ucsc-row-padding">
    <div class="ucsc-col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="ucsc-button ucsc-black"><i class="fa fa-th"> </i> View Our Works</a></p>
    </div>
    <div class="ucsc-col m6">
      <img class="ucsc-image ucsc-round-large" src="/ucscimages/phone_buildings.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div> -->

<!-- Team Section -->
<!-- <div class="ucsc-container" style="padding:128px 16px" id="team">
  <h3 class="ucsc-center">THE TEAM</h3>
  <p class="ucsc-center ucsc-large">The ones who runs this company</p>
  <div class="ucsc-row-padding ucsc-grayscale" style="margin-top:64px">
    <div class="ucsc-col l3 m6 ucsc-margin-bottom">
      <div class="ucsc-card">
        <img src="/ucscimages/team2.jpg" alt="John" style="width:100%">
        <div class="ucsc-container">
          <h3>John Doe</h3>
          <p class="ucsc-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="ucsc-button ucsc-light-grey ucsc-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="ucsc-col l3 m6 ucsc-margin-bottom">
      <div class="ucsc-card">
        <img src="/ucscimages/team1.jpg" alt="Jane" style="width:100%">
        <div class="ucsc-container">
          <h3>Anja Doe</h3>
          <p class="ucsc-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="ucsc-button ucsc-light-grey ucsc-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="ucsc-col l3 m6 ucsc-margin-bottom">
      <div class="ucsc-card">
        <img src="/ucscimages/team3.jpg" alt="Mike" style="width:100%">
        <div class="ucsc-container">
          <h3>Mike Ross</h3>
          <p class="ucsc-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="ucsc-button ucsc-light-grey ucsc-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="ucsc-col l3 m6 ucsc-margin-bottom">
      <div class="ucsc-card">
        <img src="/ucscimages/team4.jpg" alt="Dan" style="width:100%">
        <div class="ucsc-container">
          <h3>Dan Star</h3>
          <p class="ucsc-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="ucsc-button ucsc-light-grey ucsc-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Promo Section "Statistics" -->
<!-- <div class="ucsc-container ucsc-row ucsc-center ucsc-dark-grey ucsc-padding-64">
  <div class="ucsc-quarter">
    <span class="ucsc-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="ucsc-quarter">
    <span class="ucsc-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="ucsc-quarter">
    <span class="ucsc-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="ucsc-quarter">
    <span class="ucsc-xxlarge">150+</span>
    <br>Meetings
  </div>
</div> -->

<!-- Work Section -->
<!-- <div class="ucsc-container" style="padding:128px 16px" id="work">
  <h3 class="ucsc-center">OUR WORK</h3>
  <p class="ucsc-center ucsc-large">What we've done for people</p>

  <div class="ucsc-row-padding" style="margin-top:64px">
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A microphone">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A phone">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A drone">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="ucsc-row-padding ucsc-section">
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A tablet">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A camera">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A typewriter">
    </div>
    <div class="ucsc-col l3 m6">
      <img src="/ucscimages/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="ucsc-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div> -->

<!-- Modal for full size images on click-->
<!-- <div id="modal01" class="ucsc-modal ucsc-black" onclick="this.style.display='none'">
  <span class="ucsc-button ucsc-xxlarge ucsc-black ucsc-padding-large ucsc-display-topright" title="Close Modal Image">×</span>
  <div class="ucsc-modal-content ucsc-animate-zoom ucsc-center ucsc-transparent ucsc-padding-64">
    <img id="img01" class="ucsc-image">
    <p id="caption" class="ucsc-opacity ucsc-large"></p>
  </div>
</div> -->

<!-- Skills Section -->
<!-- <div class="ucsc-container ucsc-light-grey ucsc-padding-64">
  <div class="ucsc-row-padding">
    <div class="ucsc-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="ucsc-col m6">
      <p class="ucsc-wide"><i class="fa fa-camera ucsc-margin-right"></i>Photography</p>
      <div class="ucsc-grey">
        <div class="ucsc-container ucsc-dark-grey ucsc-center" style="width:90%">90%</div>
      </div>
      <p class="ucsc-wide"><i class="fa fa-desktop ucsc-margin-right"></i>Web Design</p>
      <div class="ucsc-grey">
        <div class="ucsc-container ucsc-dark-grey ucsc-center" style="width:85%">85%</div>
      </div>
      <p class="ucsc-wide"><i class="fa fa-photo ucsc-margin-right"></i>Photoshop</p>
      <div class="ucsc-grey">
        <div class="ucsc-container ucsc-dark-grey ucsc-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div> -->

<!-- Pricing Section -->
<!-- <div class="ucsc-container ucsc-center ucsc-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRICING</h3>
  <p class="ucsc-large">Choose a pricing plan that fits your needs.</p>
  <div class="ucsc-row-padding" style="margin-top:64px">
    <div class="ucsc-third ucsc-section">
      <ul class="ucsc-ul ucsc-white ucsc-hover-shadow">
        <li class="ucsc-black ucsc-xlarge ucsc-padding-32">Basic</li>
        <li class="ucsc-padding-16"><b>10GB</b> Storage</li>
        <li class="ucsc-padding-16"><b>10</b> Emails</li>
        <li class="ucsc-padding-16"><b>10</b> Domains</li>
        <li class="ucsc-padding-16"><b>Endless</b> Support</li>
        <li class="ucsc-padding-16">
          <h2 class="ucsc-wide">$ 10</h2>
          <span class="ucsc-opacity">per month</span>
        </li>
        <li class="ucsc-light-grey ucsc-padding-24">
          <button class="ucsc-button ucsc-black ucsc-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="ucsc-third">
      <ul class="ucsc-ul ucsc-white ucsc-hover-shadow">
        <li class="ucsc-red ucsc-xlarge ucsc-padding-48">Pro</li>
        <li class="ucsc-padding-16"><b>25GB</b> Storage</li>
        <li class="ucsc-padding-16"><b>25</b> Emails</li>
        <li class="ucsc-padding-16"><b>25</b> Domains</li>
        <li class="ucsc-padding-16"><b>Endless</b> Support</li>
        <li class="ucsc-padding-16">
          <h2 class="ucsc-wide">$ 25</h2>
          <span class="ucsc-opacity">per month</span>
        </li>
        <li class="ucsc-light-grey ucsc-padding-24">
          <button class="ucsc-button ucsc-black ucsc-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="ucsc-third ucsc-section">
      <ul class="ucsc-ul ucsc-white ucsc-hover-shadow">
        <li class="ucsc-black ucsc-xlarge ucsc-padding-32">Premium</li>
        <li class="ucsc-padding-16"><b>50GB</b> Storage</li>
        <li class="ucsc-padding-16"><b>50</b> Emails</li>
        <li class="ucsc-padding-16"><b>50</b> Domains</li>
        <li class="ucsc-padding-16"><b>Endless</b> Support</li>
        <li class="ucsc-padding-16">
          <h2 class="ucsc-wide">$ 50</h2>
          <span class="ucsc-opacity">per month</span>
        </li>
        <li class="ucsc-light-grey ucsc-padding-24">
          <button class="ucsc-button ucsc-black ucsc-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div> -->

<!-- Contact Section -->
<!-- <div class="ucsc-container ucsc-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="ucsc-center">CONTACT</h3>
  <p class="ucsc-center ucsc-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw ucsc-xxlarge ucsc-margin-right"></i> Chicago, US</p>
    <p><i class="fa fa-phone fa-fw ucsc-xxlarge ucsc-margin-right"></i> Phone: +00 151515</p>
    <p><i class="fa fa-envelope fa-fw ucsc-xxlarge ucsc-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="ucsc-input ucsc-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="ucsc-input ucsc-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="ucsc-input ucsc-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="ucsc-input ucsc-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="ucsc-button ucsc-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form> -->
    <!-- Image of location/map -->
    <!-- <img src="/ucscimages/map.jpg" class="ucsc-image ucsc-greyscale" style="width:100%;margin-top:48px">
  </div>
</div> -->

<!-- Footer -->
<footer class="ucsc-center ucsc-black ucsc-padding-64">
  <a href="#home" class="ucsc-button ucsc-light-grey"><i class="fa fa-arrow-up ucsc-margin-right"></i>To the top</a>
  <div class="ucsc-xlarge ucsc-section">
    <i class="fa fa-facebook-official ucsc-hover-opacity"></i>
    <i class="fa fa-instagram ucsc-hover-opacity"></i>
    <i class="fa fa-snapchat ucsc-hover-opacity"></i>
    <i class="fa fa-pinterest-p ucsc-hover-opacity"></i>
    <i class="fa fa-twitter ucsc-hover-opacity"></i>
    <i class="fa fa-linkedin ucsc-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.ucscschools.com/ucsccss/default.asp" title="ucsc.CSS" target="_blank" class="ucsc-hover-text-green">ucsc.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function ucsc_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function ucsc_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
