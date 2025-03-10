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
      background: linear-gradient(135deg, rgb(0, 0, 0), rgb(87, 73, 86));
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
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <img src="logotw.png" alt="Tender Wings Home Logo">
    <a href="main.php"><i class="fas fa-home"></i> <span class="sidebar-text">Home</span></a>
    <a href="#contact"><i class="fas fa-envelope"></i> <span class="sidebar-text">Contact</span></a>
  </div>

  <!-- Sidebar Toggle Button -->
  <button class="sidebar-toggle" id="sidebarToggle">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Home Section -->
  <section id="home" class="hero-section">
    <div class="container">
      <h1>Shaping Smiles, Inspiring Dreams, Changing Lives.</h1>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"><i class="fas fa-envelope"></i> Send Us a Message</h3>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send Message</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"><i class="fas fa-map-marker-alt"></i> Our Location</h3>
            <p class="card-text">
              <strong>Address:</strong><br>
              Hope Street, Kiambu, Kenya
            </p>
            <p class="card-text">
              <strong>Phone:</strong><br>
              +254 729 298 735
            </p>
            <p class="card-text">
              <strong>Email:</strong><br>
              info@tenderwingshome.org
            </p>
            <h3 class="card-title mt-4"><i class="fas fa-share-alt"></i> Follow Us</h3>
            <div class="social-links">
              <a href="#" class="btn btn-outline-dark"><i class="fab fa-facebook"></i></a>
              <a href="#" class="btn btn-outline-dark"><i class="fab fa-instagram"></i></a>
              <a href="#" class="btn btn-outline-dark"><i class="fab fa-linkedin"></i></a>
              <a href="#" class="btn btn-outline-dark"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Tender Wings Home. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script>
    // Sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');

    sidebarToggle.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });

    // Close sidebar when clicking outside
    document.addEventListener('click', (event) => {
      if (!sidebar.contains(event.target) && !sidebarToggle.contains(event.target)) {
        sidebar.classList.remove('active');
      }
    });
  </script>
</body>
</html>
