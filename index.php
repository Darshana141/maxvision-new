



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Maxvision</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="newstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Bootstrap 5 Example -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.header-spaceship-variant-one.css" media="(min-width: 1200px)">
    <link rel="stylesheet" href="css/style.mobile-header-variant-one.css" media="(max-width: 1199px)">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
   
<style>
  .site-header {
  background: #fff;
  border-bottom: 1px solid #eee;
  position: relative !important;
  z-index: 100;
}
.container {
  display: flex;
  align-items: center;
  justify-content: flex-start; /* was space-between */
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}
.menu-wrapper {
  flex: 1;
  display: flex;
  justify-content: center;
}
.logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: #222;
  text-decoration: none;
}
.main-nav {
  position: relative;
}
.nav-toggle {
  display: none;
  background: none;
  border: none;
  cursor: pointer;
  padding: 10px;
}
.hamburger,
.hamburger::before,
.hamburger::after {
  display: block;
  width: 25px;
  height: 3px;
  background: #222;
  border-radius: 2px;
  position: relative;
  transition: all 0.3s;
}
.hamburger::before,
.hamburger::after {
  content: '';
  position: absolute;
  left: 0;
}
.hamburger::before { top: -8px; }
.hamburger::after { top: 8px; }

.nav-menu {
  display: flex;
  gap: 2rem;
  list-style: none;
  margin: 0;
  padding: 0;
  align-items: center;
}
.nav-menu li {
  position: relative;
}
.nav-menu a {
  text-decoration: none;
  color: #222;
  padding: 1rem 0.5rem;
  display: block;
  font-weight: 500;
}
.site-header {
  position: relative;
  z-index: 100;
}

.menu-wrapper {
  flex: 1;
  display: flex;
  justify-content: center;
}

.nav-menu {
  display: flex;
  gap: 2rem;
  list-style: none;
  margin: 0;
  padding: 0;
  align-items: center;
  position: relative; /* important for stacking context */
}

.has-megamenu {
  position: relative; /* anchor for absolute megamenu */
}

.megamenu {
  display: none;
  position: absolute;
  top: 100%; /* open below the navbar */
  left: 50%;
  transform: translateX(-50%);
  background: #fff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  padding: 2rem;
  min-width: 600px;
  gap: 2rem;
  z-index: 1000;
  flex-direction: row;
}

.nav-menu .has-megamenu:hover .megamenu,
.nav-menu .has-megamenu:focus-within .megamenu {
  display: flex;
}
li.has-megamenu{
    position: relative;
}
.nav-menu .has-megamenu:hover .megamenu,
.nav-menu .has-megamenu:focus-within .megamenu {
  display: flex;
}
.megamenu {
  display: none;
  position: absolute;
  left: 0;
  top: 100%;
  background: #fff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  padding: 2rem;
  min-width: 600px;
  gap: 2rem;
  z-index: 10;
  flex-direction: row;
}
.megamenu-column {
  min-width: 150px;
}
.megamenu-column h4 {
  margin-top: 0;
  font-size: 1rem;
  margin-bottom: 0.5rem;
}
.megamenu-column ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.megamenu-column li {
  margin-bottom: 0.5rem;
}
.megamenu-column a {
  color: #444;
  font-size: 0.95rem;
  padding: 0.25rem 0;
}

/* Responsive Styles */
@media (max-width: 900px) {
  .container {
  display: flex;
  align-items: center;
  justify-content: flex-start; /* changed from space-between */
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}
.menu-wrapper {
  flex: 1;
  display: flex;
  justify-content: center;
}
  .nav-menu {
    flex-direction: column;
    gap: 0;
    width: 100%;
    background: #fff;
    position: absolute;
    left: 0;
    top: 100%;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    display: none;
  }
  .nav-menu.open {
    display: flex;
  }
  .nav-toggle {
    display: block;
  }
  .nav-menu li {
    width: 100%;
  }
  .nav-menu .has-megamenu .megamenu {
    position: static;
    min-width: 0;
    box-shadow: none;
    padding: 1rem 0;
    flex-direction: column;
    gap: 1rem;
  }
  .nav-menu .has-megamenu .megamenu {
    display: none;
  }
  .nav-menu .has-megamenu.open .megamenu {
    display: flex;
  }
}
.has-megamenu {
  position: relative;
}
.megamenu {
  left: 50%;
  transform: translateX(-50%);
}
.megamenu {
  display: none;
  position: absolute;
  top: 100%; /* open below the navbar */
  left: 50%;
  transform: translateX(-50%);
  background: #fff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  padding: 2rem;
  min-width: 600px;
  gap: 2rem;
  z-index: 1000;
  flex-direction: row;
}
.nav-menu .has-megamenu:hover .megamenu,
.nav-menu .has-megamenu:focus-within .megamenu {
  display: flex;
}
.megamenu {
  min-width: 400px;
  max-width: 700px;
  width: 600px;
}
@media (max-width: 900px) {
  .megamenu {
    left: 0;
    transform: none;
    width: 100%;
    min-width: 0;
  }
}
.nav-menu {
  gap: 1.5rem; /* or less */
}
        </style>
        <style>
            /* Basic Reset */
* { box-sizing: border-box; margin: 0; padding: 0; }

.site-header {
  background: #fff;
  border-bottom: 1px solid #eee;
  position: relative;
  z-index: 100;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 70px;
}

.logo {
  font-size: 2rem;
  font-weight: bold;
  color: #222;
  text-decoration: none;
}

.menu-wrapper {
  flex: 1;
  display: flex;
  justify-content: flex-end;
}

.main-nav {
  position: relative;
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  cursor: pointer;
  margin-right: 16px;
}

.hamburger,
.hamburger::before,
.hamburger::after {
  display: block;
  width: 28px;
  height: 4px;
  background: #222;
  border-radius: 2px;
  position: relative;
  transition: all 0.3s;
}

.hamburger::before,
.hamburger::after {
  content: '';
  position: absolute;
  left: 0;
}

.hamburger::before { top: -9px; }
.hamburger::after  { top: 9px; }

.nav-menu {
  display: flex;
  list-style: none;
  gap: 32px;
}

.nav-menu li {
  position: relative;
}

.nav-menu a {
  text-decoration: none;
  color: #222;
  font-size: 1rem;
  padding: 10px 0;
  display: block;
  transition: color 0.2s;
}
.main-nav {
    width: 100% !important;
}
@media (max-width: 900px) {
  .megamenu {
    position: static !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    min-width: 0 !important;
    max-width: none !important;
    box-shadow: none !important;
    padding: 1rem 0 !important;
    background: #fff !important;
    max-height: 60vh;      /* Add this line */
    overflow-y: auto;      /* Add this line */
    overscroll-behavior: contain; /* Optional: prevents body scroll when at menu end */
  }
}
@media (max-width: 900px) {
  .megamenu {
    position: static !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;
    min-width: 0 !important;
    max-width: none !important;
    box-shadow: none !important;
    padding: 1rem 0 !important;
    background: #fff !important;
  }
}

.nav-menu a:hover,
.nav-menu a:focus {
  color: #0077ff;
}

.has-megamenu:hover .megamenu,
.has-megamenu:focus-within .megamenu {
  display: flex;
}

.megamenu {
  display: none;
  position: absolute;
  left: 0;
  top: 100%;
  background: #fff;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  padding: 24px 32px;
  gap: 48px;
  z-index: 10;
  min-width: 600px;
}

.megamenu-column {
  min-width: 160px;
}

.megamenu h4 {
  font-size: 1.1rem;
  margin-bottom: 12px;
  color: #0077ff;
}

.megamenu ul {
  list-style: none;
}

.megamenu ul li a {
  color: #222;
  padding: 6px 0;
  font-size: 0.98rem;
}

.megamenu ul li a:hover {
  color: #0077ff;
}

/* Responsive Styles */
@media (max-width: 900px) {
  .container { flex-direction: column; height: auto; }
  .menu-wrapper { width: 100%; }
  .nav-menu {
    flex-direction: column;
    gap: 0;
    background: #fff;
    position: absolute;
    top: 70px;
    left: 0;
    right: 0;
    display: none;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
  }
  .nav-menu.open { display: flex; }
  .nav-toggle { display: block; }
  .has-megamenu .megamenu {
    position: static;
    min-width: 0;
    box-shadow: none;
    padding: 16px 0;
    flex-direction: column;
    gap: 0;
  }
}

/* Accessibility: Show megamenu on focus within */
.has-megamenu:focus-within .megamenu {
  display: flex;
}
            </style>
            <style>
                @media (max-width: 900px) {
  .nav-menu {
    flex-direction: column;
    gap: 0;
    width: 100%;
    background: #fff;
    position: absolute;
    left: 0;
    top: 70px; /* or the height of your header */
    right: 0;
    display: none;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    z-index: 1001;
  }
  .nav-menu.open {
    display: flex;
  }
  .nav-toggle {
    display: block;
  }
  .nav-menu li {
    width: 100%;
  }
}
                </style>
        <script>
document.addEventListener('DOMContentLoaded', function() {
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  navToggle.addEventListener('click', function() {
    const expanded = navToggle.getAttribute('aria-expanded') === 'true' || false;
    navToggle.setAttribute('aria-expanded', !expanded);
    navMenu.classList.toggle('open');
  });

  // Optional: Close menu when clicking outside (mobile)
  document.addEventListener('click', function(e) {
    if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
      navMenu.classList.remove('open');
      navToggle.setAttribute('aria-expanded', false);
    }
  });
});
</script>
</head>
<body>



<!-- Only one .site container -->
<div class="site">
<header class="site-header">
  <div class="container">
    <a href="/" class="logo">YourLogo</a>
      <div class="menu-wrapper">
 <nav class="main-nav" aria-label="Main Navigation">
      <button class="nav-toggle" aria-label="Open Menu" aria-expanded="false">
        <span class="hamburger"></span>
      </button>
      <ul class="nav-menu">
        <li><a href="#">Home</a></li>
        <li class="has-megamenu">
          <a href="#">Products</a>
          <div class="megamenu">
            <div class="megamenu-column">
              <h4>Category 1</h4>
              <ul>
                <li><a href="#">Product 1A</a></li>
                <li><a href="#">Product 1B</a></li>
                <li><a href="#">Product 1C</a></li>
              </ul>
            </div>
            <div class="megamenu-column">
              <h4>Category 2</h4>
              <ul>
                <li><a href="#">Product 2A</a></li>
                <li><a href="#">Product 2B</a></li>
                <li><a href="#">Product 2C</a></li>
              </ul>
            </div>
            <div class="megamenu-column">
              <h4>Category 3</h4>
              <ul>
                <li><a href="#">Product 3A</a></li>
                <li><a href="#">Product 3B</a></li>
                <li><a href="#">Product 3C</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
     </div>
  </div>
</header>
</div>

  

        
            
      

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/select2/js/select2.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>


</body></html>