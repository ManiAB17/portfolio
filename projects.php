<?php include "includes/header.php"; ?>

<section class="py-5">
  <div class="container">

    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold section-title">
        My <span class="neon-text">Projects</span>
      </h2>
      <p class="text-dark opacity-75">
        Here are some of the projects I have built using Web, Android, and Fullstack technologies.
      </p>
    </div>

    <!-- Filter Buttons -->
    <div class="text-center mb-4">
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn active" onclick="filterProjects('all')">
        All
      </button>
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn" onclick="filterProjects('web')">
        Website
      </button>
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn" onclick="filterProjects('android')">
        Android
      </button>
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn" onclick="filterProjects('appweb')">
        App & Website
      </button>
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn" onclick="filterProjects('flutter')">
        Flutter
      </button>
      <button class="btn btn-outline-light rounded-pill px-4 m-1 filter-btn" onclick="filterProjects('angular')">
        Angular
      </button>
    </div>

    <!-- Projects Grid -->
    <div class="row g-4">

      <!-- Project 1 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/sahanas.jpg" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Sahana's Home Foods</h5>
          <p class="text-dark opacity-75 small">
            E-commerce website with checkout system, order management, payment gateway integration and shipping API.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/html-5.png" alt="HTML5" title="HTML5">
            <img src="assets/img/css.jpg" alt="CSS3" title="CSS3">
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
            <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">

            <img src="assets/img/phonpe.png" alt="PhonePe" title="PhonePe">
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <!-- <a href="#" class="neon-btn-sm"><i class="bi bi-github"></i> GitHub</a> -->
            <div class="d-flex gap-2 flex-wrap">
            <a href="https://sahanashomefoods.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
          </div>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="appweb">
        <div class="glass-card h-100">
          <img src="assets/img/Hotelkar.jpeg" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Hotelkar</h5>
          <p class="text-dark opacity-75 small">
            Android shopping app with cart management, payment methods integration, and API based product listing.
          </p>
          <div>
            <p class="text-dark opacity-75 small">
              App :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/android.png" alt="Android" title="Android">
              <img src="assets/img/api.png" alt="API" title="API">
            </div>
          </div>
          <div>
            <p class="text-dark opacity-75 small">
              Website :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/html-5.png" alt="HTML5" title="HTML5">
              <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
              <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
              <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
              <img src="assets/img/php.png" alt="PHP" title="PHP">
              <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
              <img src="assets/img/phonpe.png" alt="PhonePe" title="PhonePe">
            </div>
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="https://hotelkar.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <div class="d-flex gap-2 flex-wrap">
            <a href="https://play.google.com/store/apps/details?id=com.app.hotelkar&pcampaignid=web_share" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> APK</a>
          </div>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/opqr_png.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">OPQR</h5>
          <p class="text-dark opacity-75 small">
            an electronics e-commerce website developed with responsive UI. Implemented product listing, cart, checkout
            process, and order management functionalities with Admin Dashboard.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/new.png" alt="HTML5" title="HTML5">
            <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
            <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">

            <img src="assets/img/razorpay.png" alt="Razorpay" title="Razorpay">
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="https://opqr.in/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Live Demo</a>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="appweb">
        <div class="glass-card h-100">
          <img src="assets/img/shopscooty.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Shopsooty</h5>
          <p class="text-dark opacity-75 small">
            Implemented complete shopping functionalities including product listing, category filtering, order
            management, App Notification and deployed in google play store. Razorpay Payment gateway integrated.</p>
          <div>
            <p class="text-dark opacity-75 small">
              App :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/android.png" alt="Android" title="Android">
              <img src="assets/img/api.png" alt="API" title="API">
            </div>
          </div>
          <div>
            <p class="text-dark opacity-75 small">
              Website :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/new.png" alt="HTML5" title="HTML5">
              <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
              <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
              <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
              <img src="assets/img/php.png" alt="PHP" title="PHP">
              <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
              <img src="assets/img/razorpay.png" alt="Razorpay" title="Razorpay">
            </div>
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="https://shopsooty.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <a href="https://play.google.com/store/apps/details?id=com.app.shopsoooty&pcampaignid=web_share" class="neon-btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> APK
            </a>
          </div>
        </div>
      </div>

      <!-- Project 5 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/varnikavastra_1.jpeg" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Varnika Vastra</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/new.png" alt="HTML5" title="HTML5">
            <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
            <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
            <img src="assets/img/razorpay.png" alt="Razorpay" title="Razorpay">
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <!-- <a href="https://github.com/yourusername/shopsooty" class="neon-btn-sm"><i class="bi bi-github"></i> GitHub</a> -->
            <a href="https://varnikavastra.in/" class="neon-btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Website
            </a>
          </div>
        </div>
      </div>

      <!-- Project 6 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/umayal_logo.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">

          <h5 class="fw-bold neon-text">Umayal Sarees</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/new.png" alt="HTML5" title="HTML5">
            <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
            <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
            <img src="assets/img/razorpay.png" alt="Razorpay" title="Razorpay">
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="https://umayalsarees.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 7 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="android">
        <div class="glass-card h-100">
          <img src="assets/img/ic_launcher.webp" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Sambavi Hotel</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/android.png" alt="Android" title="Android">
            <img src="assets/img/api.png" alt="API" title="API">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
          </div>


          <div class="d-flex gap-2 flex-wrap">
            <a href="https://play.google.com/store/apps/details?id=com.app.hotelsambavi&pcampaignid=web_share" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> APK</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 8 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="appweb">
        <div class="glass-card h-100">
          <img src="assets/img/atchaym.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Atchayam Snacks</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div>
            <p class="text-dark opacity-75 small">
              App :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/android.png" alt="Android" title="Android">
              <img src="assets/img/api.png" alt="API" title="API">
            </div>
          </div>
          <div>
            <p class="text-dark opacity-75 small">
              Website :
            </p>
            <div class="tech-icons mb-3">
              <img src="assets/img/new.png" alt="HTML5" title="HTML5">
              <!-- <img src="assets/img/css.jpg" alt="CSS3" title="CSS3"> -->
              <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
              <img src="assets/img/js.png" alt="JavaScript" title="JavaScript">
              <img src="assets/img/php.png" alt="PHP" title="PHP">
              <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
              <img src="assets/img/razorpay.png" alt="Razorpay" title="Razorpay">
            </div>
          </div>

          <div class="d-flex gap-2 flex-wrap">
            <a href="https://atchayam.co.in/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <a href="https://play.google.com/store/apps/details?id=com.app.atchayamsnacks&pcampaignid=web_share" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> APK</a>
          </div>
        </div>
      </div>
      <!-- Project 9 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/skb.webp" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Sri Kamakshi bhavan</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/html-5.png" alt="HTML5" title="HTML5">
            <img src="assets/img/css.jpg" alt="CSS3" title="CSS3">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
          </div>



          <div class="d-flex gap-2 flex-wrap">
            <a href="https://srikamakshibhavan.haptrendmedia.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 10 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/happy_logo.webp" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Happy Journeys</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/html-5.png" alt="HTML5" title="HTML5">
            <img src="assets/img/css.jpg" alt="CSS3" title="CSS3">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
          </div>


          <div class="d-flex gap-2 flex-wrap">
            <a href="https://happyjourneys.co.in/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 11 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="angular">
        <div class="glass-card h-100">
          <img src="assets/img/angular_website.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Angular Ecommerce website</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/angular.jpg" alt="Angular" title="Angular">
            <img src="assets/img/asp.jpg" alt="CSS3" title="CSS3">
          </div>


          <div class="d-flex gap-2 flex-wrap">
            <a href="https://github.com/ManiAB17" class="neon-btn-sm"><i class="bi bi-github"></i> GitHub</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 12 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="flutter">
        <div class="glass-card h-100">
          <img src="assets/img/playstore.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Customised Gifts App</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/flutter.png" alt="Flutter" title="Flutter">
            <img src="assets/img/dart.jpg" alt="Dart" title="Dart">
            <img src="assets/img/firebase.png" alt="Firebase" title="Firebase">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
          </div>


          <div class="d-flex gap-2 flex-wrap">
            <a href="https://github.com/ManiAB17" class="neon-btn-sm"><i class="bi bi-github"></i> GitHub</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>

      <!-- Project 13 -->
      <div class="col-lg-4 col-md-6 project-card" data-category="web">
        <div class="glass-card h-100">
          <img src="assets/img/playstore.png" alt=""
            style="width: 70px; height: 70px; border-radius: 50%;border: 2px solid #0077ff; margin-bottom: 15px;">
          <h5 class="fw-bold neon-text">Customised Gifts Website</h5>
          <p class="text-dark opacity-75 small">
            Developed a textile-based e-commerce website with product listing, cart, and checkout features. Integrated
            Razorpay payment gateway for secure online payments with responsive UI design.
          </p>

          <div class="tech-icons mb-3">
            <img src="assets/img/html-5.png" alt="HTML5" title="HTML5">
            <img src="assets/img/css.jpg" alt="CSS3" title="CSS3">
            <img src="assets/img/php.png" alt="PHP" title="PHP">
            <img src="assets/img/phpmyadmin.png" alt="phpMyAdmin" title="phpMyAdmin">
            <img src="assets/img/images.jpg" alt="Bootstrap" title="Bootstrap">
          </div>


          <div class="d-flex gap-2 flex-wrap">
            <a href="https://grocery.haptrendmedia.com/" class="neon-btn-sm"><i class="bi bi-box-arrow-up-right"></i> Website</a>
            <!-- <a href="#" class="btn btn-outline-light rounded-pill px-3 btn-sm">
              <i class="bi bi-box-arrow-up-right"></i> Demo
            </a> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  function filterProjects(category) {
    let cards = document.querySelectorAll(".project-card");
    let buttons = document.querySelectorAll(".filter-btn");

    buttons.forEach(btn => btn.classList.remove("active"));

    event.target.classList.add("active");

    cards.forEach(card => {
      if (category === "all" || card.getAttribute("data-category") === category) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  }
</script>

<?php include "includes/footer.php"; ?>