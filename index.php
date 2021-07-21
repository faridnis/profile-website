<!doctype html>
<html lang="en">
  <head>
  	<title>Muhamad Farid Anuar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript">
        // Wait for document to load
        document.addEventListener("DOMContentLoaded", function(event) {
          document.documentElement.setAttribute("data-theme", "dark");
        });
    </script>
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/my_profile.jpg);"></div>
	  				<h3>Muhamad Farid Anuar</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#section1"><span class="fa fa-home mr-3"></span> About</a>
          </li>
          <li>
            <a href="#section2"><span class="fa fa-product-hunt mr-3"></span> Project Completed</a>
          </li>
          <li>
            <a href="#section3"><span class="fa fa-connectdevelop mr-3"></span> Tools & Tech</a>
          </li>
          <li>
            <a href="#section4"><span class="fa fa-id-card mr-3"></span> Contact</a>
          </li>
          <li>
            <a href="#section1"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">2</small></span> CV Download</a>
          </li>
          <li>
            <!-- create modal box so it will displayed on top of current page -->
            <a href="settings.php" target="_blank" onClick="window.open('settings.php', 'Settings', 'resizable, height=400, width=400, position=center'); return false;"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          

          <div class="social_media">
              <!-- You can add your own social media by copy link in browser and paste it in href tag -->
              <a href="https://www.facebook.com"><i class="fa fa-facebook mr-3"></i></a>
              <a href="https://www.twitter.com"><i class="fa fa-twitter mr-3"></i></a>
              <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
          </div>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <!-- <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">About</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div> -->
      <div class="section">

        <div class="main" id="section1">
            <h2 class="mb-3">Hello there and nice to meet ya!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aut reprehenderit sit tempore? Mollitia nemo quibusdam ipsum saepe ducimus recusandae explicabo amet quas blanditiis nihil magni commodi hic sint, modi totam consequatur rem soluta? Beatae minus consequatur sapiente, tenetur quas quae, error ratione dolores veniam quisquam molestiae at vero mollitia.</p>
          </div>
          <div class="main" id="section2">
            <h2 class="mb-4">Project Completed</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aut reprehenderit sit tempore? Mollitia nemo quibusdam ipsum saepe ducimus recusandae explicabo amet quas blanditiis nihil magni commodi hic sint, modi totam consequatur rem soluta? Beatae minus consequatur sapiente, tenetur quas quae, error ratione dolores veniam quisquam molestiae at vero mollitia.</p>
          </div>
          <div class="main" id="section3">
            <h2 class="mb-4">Tools & Tech</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aut reprehenderit sit tempore? Mollitia nemo quibusdam ipsum saepe ducimus recusandae explicabo amet quas blanditiis nihil magni commodi hic sint, modi totam consequatur rem soluta? Beatae minus consequatur sapiente, tenetur quas quae, error ratione dolores veniam quisquam molestiae at vero mollitia.</p>
            <ul id="skills">
              <li>PHP</li>
              <li>C#</li>
              <li>Javascript</li>
              <li>Python</li>
            </ul>
          </div>
          <div class="main" id="section4">
            <h2 class="mb-4">Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis aut reprehenderit sit tempore? Mollitia nemo quibusdam ipsum saepe ducimus recusandae explicabo amet quas blanditiis nihil magni commodi hic sint, modi totam consequatur rem soluta? Beatae minus consequatur sapiente, tenetur quas quae, error ratione dolores veniam quisquam molestiae at vero mollitia.</p>
            <section id="downloadcv">
              <h4 class="mb-2">Know more about me</h4>
              <button type="submit" onclick="window.open('download_file/food.pdf')">Download CV</button>
            </section>
          </div>

          <button onclick="topFunction()" id="myBtn" title="Go to top">Home</button>
          <button id="theme-switcher">Dark mode</button>
      </div>
      
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/myjs.js"></script>
  </body>
</html>