<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tender Wings Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(to right, rgb(103, 146, 141), rgb(101, 48, 98));
      transition: margin-left 0.3s;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background: linear-gradient(135deg,rgb(0, 0, 0),rgb(87, 73, 86));
      position: fixed;
      top: 0;
      left: -250px;
      padding: 20px;
      color: white;
      opacity: 0.95;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
      transition: left 0.3s;
      z-index: 1000;
    }
    .sidebar.active {
      left: 0;
    }
    .sidebar img {
      width: 100%;
      margin-bottom: 20px;
      border-radius: 0;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      padding: 10px;
      margin: 5px 0;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .sidebar a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .sidebar a i {
      margin-right: 10px;
    }
    .sidebar-toggle {
      position: fixed;
      top: 20px;
      left: 20px;
      background: #495057;
      color: white;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      cursor: pointer;
      z-index: 1001;
    }
    .hero-section {
      background: url('wallp.jpeg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      padding: 20px;
    }
    .hero-section h1 {
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .cta-buttons .btn {
      margin: 10px;
      padding: 10px 20px;
      font-size: 1rem;
      transition: transform 0.3s, box-shadow 0.3s;
      background: linear-gradient(135deg, #007bff, #0056b3);
      border: none;
    }
    .cta-buttons .btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    .card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      border-radius: 10px;
      overflow: hidden;
      background: linear-gradient(135deg, rgb(105, 89, 89), rgb(81, 86, 91));
      margin-bottom: 20px;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    .testimonial-card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      margin: 10px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    footer {
      background: #343a40;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    footer a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
    footer a:hover {
      color: #ffc107;
    }
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2rem;
      }
      .cta-buttons .btn {
        font-size: 0.9rem;
        padding: 8px 16px;
      }
      .card {
        margin-bottom: 15px;
      }
    }

    /* Horizontal Scroller Gallery Styles */
    .gallery-scroller {
      display: flex;
      overflow-x: auto;
      gap: 15px;
      padding-bottom: 20px;
    }
    .gallery-item {
      flex: 0 0 auto;
      width: 200px;
      text-align: center;
    }
    .gallery-item img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
    }
    .gallery-caption {
      margin-top: 10px;
      font-size: 0.9rem;
      color: #555;
    }

    /* Stats Section Styles */
    .stats-section {
      background: linear-gradient(135deg, rgb(105, 89, 89), rgb(81, 86, 91));
      color: white;
      padding: 60px 0;
      text-align: center;
    }
    .stats-section h2 {
      margin-bottom: 40px;
      font-weight: bold;
    }
    .stat-item {
      margin-bottom: 20px;
    }
    .stat-item i {
      font-size: 3rem;
      margin-bottom: 10px;
    }
    .stat-item h3 {
      font-size: 2rem;
      font-weight: bold;
    }
    .stat-item p {
      font-size: 1.2rem;
    }

    /* Testimonials Section Styles */
    .testimonials-section {
      background: #f8f9fa;
      padding: 60px 0;
    }
    .testimonials-section h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: bold;
    }
    .testimonial-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      margin: 10px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .testimonial-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .testimonial-card h5 {
      font-weight: bold;
    }
    .testimonial-card p {
      font-style: italic;
      color: #555;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <img src="logotw.png" alt="Tender Wings Home Logo">
    <a href="#home"><i class="fas fa-home"></i> <span class="sidebar-text">Home</span></a>
    <a href="About.php"><i class="fas fa-info-circle"></i> <span class="sidebar-text">About</span></a>
    <a href="#programs"><i class="fas fa-project-diagram"></i> <span class="sidebar-text">Programs</span></a>
    <a href="#get-involved"><i class="fas fa-hands-helping"></i> <span class="sidebar-text">Get Involved</span></a>
    <a href="#gallery"><i class="fas fa-images"></i> <span class="sidebar-text">Gallery</span></a>
    <a href="contact.php"><i class="fas fa-envelope"></i> <span class="sidebar-text">Contact</span></a>
  </div>

  <!-- Sidebar Toggle Button -->
  <button class="sidebar-toggle" id="sidebarToggle">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Home Section -->
  <section id="home" class="hero-section">
    <div class="container">
      <h1>Every Child Deserves a Future Filled with Love and Possibilities</h1>
      <div class="cta-buttons">
        <a href="#get-involved" class="btn btn-primary"><i class="fas fa-home"></i> Support a Child</a>
        <a href="#get-involved" class="btn btn-success"><i class="fas fa-hands-helping"></i> Become a Volunteer</a>
        <a href="#get-involved" class="btn btn-warning"><i class="fas fa-heart"></i> Make a Difference Today</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
<section id="about" class="container my-5">
  <h2 class="text-center mb-4">About Us</h2>
  <div class="row">
    <div class="col-md-6">
      <h3>Our Mission & Vision</h3>
      <p>To provide a sanctuary of hope, love, and transformation for every child in need.</p>
    </div>
    <div class="col-md-6">
      <h3>Our Story</h3>
      <p>Founded in 2010, Tender Wings Home has been a beacon of hope for countless children.</p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> 
        <img src="logotw.png" class="card-img-top rounded-circle" alt="Team Member" style="width: 150px; height: 150px; margin: 0 auto; margin-top: 10px;"> <!-- Rounded image -->
        <div class="card-body text-center">
          <h5 class="card-title">John Doe</h5>
          <p class="card-text">Founder & CEO</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="user.jpg" class="card-img-top rounded-circle" alt="Team Member" style="width: 150px; height: 150px; margin: 0 auto; margin-top: 10px;"> <!-- Rounded image -->
        <div class="card-body text-center">
          <h5 class="card-title">Jane Smith</h5>
          <p class="card-text">Head of Caregiving</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> 
        <img src="user2.jpg" class="card-img-top rounded-circle" alt="Team Member" style="width: 150px; height: 150px; margin: 0 auto; margin-top: 10px;"> <!-- Rounded image -->
        <div class="card-body text-center">
          <h5 class="card-title">Mike Johnson</h5>
          <p class="card-text">Volunteer Coordinator</p>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Programs Section -->
  <section id="programs" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Programs</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-book fa-3x mb-3"></i>
              <h5 class="card-title">Education & Learning</h5>
              <p class="card-text">Scholarships, tutoring, and school partnerships.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-heartbeat fa-3x mb-3"></i>
              <h5 class="card-title">Health & Well-being</h5>
              <p class="card-text">Medical care, nutrition, and mental health support.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-hands-helping fa-3x mb-3"></i>
              <h5 class="card-title">Counseling & Mentorship</h5>
              <p class="card-text">Emotional and spiritual growth through guidance.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <i class="fas fa-paint-brush fa-3x mb-3"></i>
              <h5 class="card-title">Recreation & Skill Development</h5>
              <p class="card-text">Arts, music, sports, and vocational training.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <h2>Our Impact in Numbers</h2>
      <div class="row">
        <div class="col-md-3 stat-item">
          <i class="fas fa-child"></i>
          <h3>500+</h3>
          <p>Children Helped</p>
        </div>
        <div class="col-md-3 stat-item">
          <i class="fas fa-school"></i>
          <h3>200+</h3>
          <p>Schools Supported</p>
        </div>
        <div class="col-md-3 stat-item">
          <i class="fas fa-hand-holding-heart"></i>
          <h3>100+</h3>
          <p>Volunteers</p>
        </div>
        <div class="col-md-3 stat-item">
          <i class="fas fa-heartbeat"></i>
          <h3>300+</h3>
          <p>Health Checkups</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Get Involved Section -->
  <section id="get-involved" class="container my-5">
    <h2 class="text-center mb-4">Get Involved</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-donate fa-3x mb-3"></i>
            <h5 class="card-title">Donate</h5>
            <p class="card-text">Support our mission with your contributions.</p>
            <a href="#" class="btn btn-primary">Donate Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-hands-helping fa-3x mb-3"></i>
            <h5 class="card-title">Volunteer</h5>
            <p class="card-text">Join us in making a difference.</p>
            <a href="#" class="btn btn-success">Volunteer Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <i class="fas fa-calendar-alt fa-3x mb-3"></i>
            <h5 class="card-title">Events</h5>
            <p class="card-text">Participate in our fundraising events.</p>
            <a href="#" class="btn btn-warning">View Events</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="container my-5">
    <h2 class="text-center mb-4">Gallery</h2>
    <div class="gallery-scroller">
      <div class="gallery-item">
        <img src="image1.jpg" alt="Gallery Image 1">
        <p class="gallery-caption"></p>
      </div>
      <div class="gallery-item">
        <img src="image2.jpg" alt="Gallery Image 2">
        <p class="gallery-caption"></p>
      </div>
      <div class="gallery-item">
        <img src="image3.jpg" alt="Gallery Image 3">
        <p class="gallery-caption"></p>
      </div>
      <div class="gallery-item">
        <img src="image4.jpg" alt="Gallery Image 3">
        <p class="gallery-caption"></p>
      </div>
      <div class="gallery-item">
        <img src="image5.jpg" alt="Gallery Image 3">
        <p class="gallery-caption"></p>
      </div>
      <div class="gallery-item">
        <img src="image6.jpg" alt="Gallery Image 3">
        <p class="gallery-caption"></p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="container">
      <h2>What People Say About Us</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="user.jpg" alt="Testimonial 1">
            <h5>John Doe</h5>
            <p>"Tender Wings Home has been a blessing to our community. Their dedication to children is unmatched."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="user.jpg" alt="Testimonial 2">
            <h5>Jane Smith</h5>
            <p>"I volunteered with Tender Wings Home, and it was one of the most rewarding experiences of my life."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <img src="user.jpg" alt="Testimonial 3">
            <h5>Mike Johnson</h5>
            <p>"The programs here are life-changing. I’m proud to support such an amazing organization."</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
        <div class="col-md-6">
          <h5>Address</h5>
          <p>Hope Street, Kiambu, Kenya</p>
          <h5>Phone</h5>
          <p>+254729298735</p>
          <h5>Email</h5>
          <p>info@tenderwingshome.org</p>
          <h5>Follow Us</h5>
          <a href="#" class="btn btn-outline-dark"><i class="fab fa-facebook"></i></a>
          <a href="#" class="btn btn-outline-dark"><i class="fab fa-instagram"></i></a>
          <a href="#" class="btn btn-outline-dark"><i class="fab fa-linkedin"></i></a>
          <a href="#" class="btn btn-outline-dark"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Tender Wings Home. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');

    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });
    document.addEventListener('click', (event) => {
      if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>