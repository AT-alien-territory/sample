<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav>
            <div class="logo">My Portfolio</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home">
        <h1>Welcome to My Portfolio</h1>
        <p>Creative Developer | Designer | Innovator</p>
        <a href="#projects" class="btn">View My Work</a>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Me</h2>
        <p>I am a passionate web developer with expertise in PHP, JavaScript, and front-end design.</p>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <h2>My Projects</h2>
        <div class="project">
            <img src="assets/images/project1.jpg" alt="Project 1">
            <h3>Project 1</h3>
            <p>Awesome project description.</p>
        </div>
        <div class="project">
            <img src="assets/images/project2.jpg" alt="Project 2">
            <h3>Project 2</h3>
            <p>Another amazing project.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <form action="send_mail.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 My Portfolio. All Rights Reserved.</p>
    </footer>

</body>
</html>

