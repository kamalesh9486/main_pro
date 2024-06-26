<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/toggle.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
    .card-body {
      height: 100%;
      opacity: 0.8;
      transition: opacity 0.3s ease;
    }
    .card:hover .card-body {
      opacity: 1;
    }
    #dashboard {
      display: none;
    }
    #dashboard.open {
      display: block;
    }
    .hero {
      text-align: center;
      margin-top: 50px;
    }
    .loading-text {
      display: inline-block;
      font-size: 3em;
      font-weight: bold;
      color: white;
      opacity: 0;
      animation: loadingEffect 3s infinite;
    }
    @keyframes loadingEffect {
      0% { opacity: 0; transform: translateY(20px); }
      50% { opacity: 1; transform: translateY(0); }
      100% { opacity: 0; transform: translateY(-20px); }
    }
  </style>
</head>
<body>
  <header>
    <img src="image/CFR.png" width="100%" alt="no image">
    <div class="container">
      <button id="toggleButton">☰</button>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#academics">Academics</a></li>
          <li><a href="#admissions">Admissions</a></li>
          <li><a href="#research">Research</a></li>
          <li><a href="#student-life">Students</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#virtual-tour">VirtualTour</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div id="dashboard" class="dashboard">
    <h2>Dashboard</h2>
    <button class="dashboard-button" id="button1">Student Grievance</button>
    <button class="dashboard-button" id="button2">Grievance Status</button>
    <button class="dashboard-button" id="button3">Admin Login</button>
    <button class="dashboard-button">Exams</button>
    <button class="dashboard-button">Administration</button>
    <button class="dashboard-button">Library</button>
  </div>
  <div id="dynamicContent" class="hero">
    <h1 id="content1" class="loading-text">Welcome to Our University</h1>
    <h1 id="content2" class="loading-text" style="display: none;">Directorate of Distance Education</h1>
    <h1 id="content3" class="loading-text" style="display: none;">Learning Management System</h1>
  </div>
  
  <div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <!-- Dropdown buttons can be added here if needed -->
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/about.jpeg" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">Learn more about our history, mission, and values</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/acadamy.jpg" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Academics</h5>
                    <p class="card-text">Discover our wide range of academic programs </p>
                    <a href="#" class="btn btn-primary">Explore programs</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/admission.jpeg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Admissions</h5>
                    <p class="card-text">Find out how to apply, tuition fees, and financial aid options</p><br>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/research.jpg" class="card-img-top" alt="Image 4">
                <div class="card-body">
                    <h5 class="card-title">Research</h5>
                    <p class="card-text">Explore our cutting-edge research initiatives and opportunities</p><br>
                    <a href="#" class="btn btn-primary">Discover Research</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/student.jpg" class="card-img-top" alt="Image 5">
                <div class="card-body">
                    <h5 class="card-title">Student Life</h5>
                    <p class="card-text">Experience vibrant campus life through various activities and organizations</p>
                    <a href="#" class="btn btn-primary">Get Involved</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/news.jpeg" class="card-img-top" alt="Image 6">
                <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <p class="card-text">Summary of the latest news</p><br><br>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/event.jpg" class="card-img-top" alt="Image 7">
                <div class="card-body">
                    <h5 class="card-title">Events</h5>
                    <p class="card-text">Detail about upcoming events</p>
                    <br><br><br><br>
                    <a href="#" class="btn btn-primary">Find Out More</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="image/tour.png" class="card-img-top" alt="Image 8">
                <div class="card-body">
                    <h5 class="card-title">Virtual Tour</h5>
                    <p class="card-text">Interactive campus tour, descriptions of key buildings </p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<footer>
    <div class="container">
      <p>&copy; 2024 MKU. All rights reserved.</p>
      <p>Contact us: <a href="directordde@gmail.com">directordde@gmail.com</a></p>
      <ul class="social-media">
        <li><a href="#"><img src="image/facebook_icon.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="image/twitter_icon.png" alt="Twitter"></a></li>
        <li><a href="#"><img src="image/instagram_icon.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="image/linkedin_icon.png" alt="LinkedIn"></a></li>
      </ul>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
 var contents = ["content1", "content2", "content3"];
    var currentIndex = 0;
    var contentInterval;

    function toggleContent() {
      var currentContent = contents[currentIndex];
      var previousIndex = currentIndex === 0 ? contents.length - 1 : currentIndex - 1;

      // Hide the previous content
      document.getElementById(contents[previousIndex]).style.display = "none";

      // Show the current content
      document.getElementById(currentContent).style.display = "block";

      // Increment index or reset to 0
      currentIndex = (currentIndex + 1) % contents.length;
    }

    function startLoadingEffect() {
      contentInterval = setInterval(toggleContent, 3000); // Change content every 3 seconds
    }

    // Start the loading effect when the window loads
    window.onload = function() {
      startLoadingEffect();
    };






  document.getElementById('toggleButton').addEventListener('click', function() {
  var dashboard = document.getElementById('dashboard');
  dashboard.classList.toggle('open');
});

document.getElementById('button1').addEventListener('click', function() {
  window.location.href = 'grievances.html'; 
});
document.getElementById('button2').addEventListener('click', function() {
  window.location.href = 'status_check.html'; 
});
document.getElementById('button3').addEventListener('click', function() {
  window.location.href = 'login.php'; 
});


document.addEventListener('click', function(event) {
  var dashboard = document.getElementById('dashboard');
  var toggleButton = document.getElementById('toggleButton');
  if (!dashboard.contains(event.target) && !toggleButton.contains(event.target)) {
    dashboard.classList.remove('open');
  }
});

</script>
</body>

</html>
