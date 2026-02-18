<?php include "includes/header.php"; ?>

<section class="py-5">
  <div class="container">

    <!-- Heading -->
    <div class="text-center mb-5">
      <h2 class="fw-bold section-title">
        Contact <span class="neon-text">Me</span>
      </h2>
      <p class="text-dark opacity-75">
        Let's work together! Feel free to send me a message anytime.
      </p>
    </div>

    <!-- Alerts -->
    <?php if(isset($_GET['success'])) { ?>
      <div class="alert alert-success text-center">
        ✅ Your message has been sent successfully!
      </div>
    <?php } ?>

    <?php if(isset($_GET['error'])) { ?>
      <div class="alert alert-danger text-center">
        ❌ Something went wrong. Please try again!
      </div>
    <?php } ?>

    <div class="row g-4">

      <!-- Contact Info -->
      <div class="col-lg-5">
        <div class="glass-card h-100">
          <h4 class="fw-bold neon-text">Get in Touch</h4>
          <p class="text-dark opacity-75 mt-3">
            You can contact me through email, phone, or social media.
            I will respond as soon as possible 🚀
          </p>

          <div class="mt-4">
            <p><i class="bi bi-envelope-fill neon-text"></i> <span class="text-dark">the.manikandan.sp@gmail.com</span></p>
            <p><i class="bi bi-phone-fill neon-text"></i> <span class="text-dark">+91 9159741502</span></p>
            <p><i class="bi bi-geo-alt-fill neon-text"></i> <span class="text-dark">Tamil Nadu, India</span></p>
          </div>

          <hr class="text-dark opacity-25">

          <h6 class="fw-bold neon-text">Follow Me</h6>
          <div class="social-icons mt-3">
            <a href="#" target="_blank"><i class="bi bi-github"></i></a>
            <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
            <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="glass-card h-100">
          <h4 class="fw-bold neon-text">Send Message</h4>

          <form action="save_contact.php" method="POST" class="mt-4">

            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control neon-input" placeholder="Your Name" required>
              </div>

              <div class="col-md-6">
                <input type="email" name="email" class="form-control neon-input" placeholder="Your Email" required>
              </div>

              <div class="col-12">
                <input type="text" name="subject" class="form-control neon-input" placeholder="Subject" required>
              </div>

              <div class="col-12">
                <textarea name="message" rows="5" class="form-control neon-input" placeholder="Your Message..." required></textarea>
              </div>

              <div class="col-12 text-end">
                <button type="submit" name="send_message" class="neon-btn">
                  <i class="bi bi-send-fill"></i> Send Message
                </button>
              </div>
            </div>

          </form>
        </div>
      </div>

    </div>

    <!-- Google Map -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="glass-card p-0 overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31104.88731299269!2d80.2508214!3d13.0826802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265d5f6e2b7f7%3A0x3d08e2bcbcfb8a0b!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include "includes/footer.php"; ?>
