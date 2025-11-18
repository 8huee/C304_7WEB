<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hue's Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    :root {
      --bg-color: radial-gradient(circle at bottom, #f6f7fa 0%, #dfe7ff 70%);
      --text-color: #1a1a1a;
    }

    [data-theme="dark"] {
      --bg-color: radial-gradient(circle at bottom, #0a0f24 0%, #000 70%);
      --text-color: #eaf6ff;
    }
    /* Aurora Borealis Animated Background */
    body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      scroll-behavior: smooth;
      color: var(--text-color);
      background: var(--bg-color);
      position: relative;
    }

    /* Aurora layers */
    .aurora {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
      overflow: hidden;
    }

    .aurora span {
      position: absolute;
      width: 100%;
      height: 200%;
      background: linear-gradient(120deg, rgba(0,255,170,0.3), rgba(0,140,255,0.2), rgba(255,0,200,0.25));
      filter: blur(90px);
      animation: floatAurora 12s infinite alternate ease-in-out;
    }

    .aurora span:nth-child(2) {
      animation-duration: 18s;
      animation-delay: -4s;
      transform: rotate(40deg);
    }

    @keyframes floatAurora {
      0% { transform: translateY(-20%) translateX(-10%) rotate(15deg); }
      100% { transform: translateY(20%) translateX(10%) rotate(-15deg); }
    }

    h1, h2, h5, p {
      color: var(--text-color);
    }

    .navbar {
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
    }

    .navbar a {
      color: #c9f4ff !important;
      font-weight: bold;
    }

    .nav-link:hover {
      color: #69f7ff !important;
    }

    .profile-cute {
      border-radius: 25px;
      width: 100%;
      max-width: 260px;
      height: 260px;
      object-fit: cover;
      border: 4px solid rgba(255,255,255,0.7);
      box-shadow: 0 8px 20px rgba(0,0,0,0.25);
      background: radial-gradient(circle, rgba(255,255,255,0.35), rgba(0,0,0,0.1));
      animation: floatPic 3s ease-in-out infinite;
    }

    @keyframes floatPic {
      0%,100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    .card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 15px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(5px);
      color: var(--text-color);
    }

    .btn-accent {
      background: linear-gradient(45deg, #37d7ff, #8af3c9);
      border: none;
      color: #00333d;
      font-weight: bold;
    }

    .btn-accent:hover {
      opacity: 0.85;
    }

    .progress-bar {
      background: linear-gradient(45deg, #37d7ff, #8af3c9);
    }

    footer {
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(10px);
      color: var(--text-color);
    }

    /* Responsive Tweaks */
    @media (max-width: 768px) {
      h1 { font-size: 1.8rem; }
      .profile-cute { width: 150px; height: 150px; }
      .project-image { height: 180px; }
    }

    .project-image {
      height: 220px;
      background-size: cover;
      background-position: center;
      border-radius: 12px 12px 0 0;
      position: relative;
    }

    .overlay {
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: 0.3s ease;
      border-radius: 12px 12px 0 0;
    }

    .project-image:hover .overlay {
      opacity: 1;
    }
  </style>
</head>

<body>
  <div class="aurora">
    <span></span>
    <span></span>
  </div>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Your Hueniverse</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item d-flex align-items-center ms-2">
    <button id="modeToggle" style="border-radius:50%; width:35px; height:35px; display:flex; justify-content:center; align-items:center; font-size:18px; background:none; border:none;">◐</button>
  </li>
</ul>
      </div>
    </div>
  </nav>

  <!-- Mode Toggle moved into navbar -->
<section id="hero" class="text-center pt-5 mt-5">
    <div class="container">
      <h1><strong>Hello, I'm Eula Pineda</strong></h1>
      <p>Let's get to know each other, shall we?</p>
      <img src="images/hue.png" class="profile-cute" alt="Profile" />
      <br>
      <a href="#contact" class="btn btn-accent mt-3">Get in Touch with Hue</a>
    </div>
  </section>

  <section id="about" class="py-5 text-center container">
    <h2><strong>About Me</strong></h2>
    <p>I’m Eula Pineda, a Computer Science student at City College of Angeles. Still figuring things out, but we keep pushing.</p>
  </section>

  <section id="projects" class="py-5 container">
    <h2 class="text-center"><strong>Projects</strong></h2>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
      <div class="col">
        <div class="card h-100">
          <div class="project-image" style="background-image: url('googleSite.png')">
            <div class="overlay">
              <a href="#" class="btn btn-accent">View</a>
            </div>
          </div>
          <div class="card-body">
            <h5>Google Site</h5>
            <p>Portfolio</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <div class="project-image" style="background-image: url('poster.png')">
            <div class="overlay">
              <a href="#" class="btn btn-accent">View</a>
            </div>
          </div>
          <div class="card-body">
            <h5>Adobe Photoshop</h5>
            <p>Branding Template</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skills" class="py-5 container">
    <h2 class="text-center"><strong>Skills</strong></h2>

    <div class="mt-4">
      <h5>HTML/CSS</h5>
      <div class="progress mb-3"><div class="progress-bar" style="width:65%">65%</div></div>

      <h5>Python</h5>
      <div class="progress mb-3"><div class="progress-bar" style="width:70%">70%</div></div>

      <h5>JavaScript</h5>
      <div class="progress mb-3"><div class="progress-bar" style="width:40%">40%</div></div>
    </div>
  </section>

  <section id="contact" class="py-5 container text-center">
    <h2><strong>Contact</strong></h2>
    <form class="mt-4" onsubmit="alert('Message Sent!'); return false;">
      <input type="text" class="form-control mb-2" placeholder="Name" required>
      <input type="email" class="form-control mb-2" placeholder="Email" required>
      <textarea class="form-control mb-2" rows="4" placeholder="Message" required></textarea>
      <button class="btn btn-accent">Send</button>
    </form>
  </section>

  <footer class="py-3 text-center">
    <p>&copy; <span id="year"></span> – Created for 7WEB2</p>
  </footer>

<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
  <script>
    const toggleBtn = document.getElementById('modeToggle');
    const html = document.documentElement;

    function updateModeIcon() {
      toggleBtn.textContent = html.getAttribute('data-theme') === 'dark' ? '◑' : '◐';
    }

    toggleBtn.addEventListener('click', () => {
      const isDark = html.getAttribute('data-theme') === 'dark';
      html.setAttribute('data-theme', isDark ? 'light' : 'dark');
      updateModeIcon();
    });

    updateModeIcon();
  </script>
</body>
</html>