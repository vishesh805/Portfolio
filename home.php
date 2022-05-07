<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: Index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio E20CSE135</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
      <a href="#" class="brand">Abhinav Das</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="#main">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Academic Skills</a>
        <a href="#services">Services</a>
        <a href="#work">Work</a>
        <a href="#contact">Contact</a>
        <a href="index.html"><?php session_destroy();?>Logout</a>
      </div>
    </header>

    <section class="main" id="main">
      <div class="content">
        <h2>Hello, I'm<br><span>Abhinav Das</span></h2>
        <div class="animated-text">
          <h3>Web Developer</h3>
          <h3>Coder</h3>
          <h3>Student</h3>
        </div>
        <a href="https://github.com/777-AvN-777" class="btn">See My Work</a>
        <div class="media-icons">
          <a href="https://www.facebook.com/ysosrdude/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/ysosrdude/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/ysosrdude"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="title reveal">
        <h2 class="section-title">About Me</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="images/img1.jpg" alt="">
          </div>
        </div>
        <div class="column col-right reveal">
          <h2 class="content-title">Hey There! I'm Abhinav Das</h2>
          <p class="paragraph-text">I am a 2nd year under-grad student studying in Bennett University, pursuing my Bachelor's in Computer Science. I have learnt various programming languages such as C++, Java, Python, and many other web development and database languages such as HTML, CSS, Javascript, PHP and MySQL. I aim to acquire more knowledge regarding them and improve myself with each day.</p>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
    </section>

    <section class="skills" id="skills">
      <div class="title reveal">
        <h2 class="section-title">Academic Skills</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <h2 class="content-title">My Skills and Experiences</h2>
          <p>I have learnt various programming languages such as C++, Java, Python, and many other web development and database languages such as HTML, CSS, Javascript, PHP and MySQL. I recently completed a 9 hour course on SQL and web development. I also have some knowledge on Artificial Intelligene and Machine Learning. I am also a part of a group project for creating a full-fledged website for one of our courses: <a href="https://hindagg096099135.000webhostapp.com/" style="color: lightgreen;">Hind Aggregator</a>. I am only a 2nd year student with a lot of other things to learn, and I hope to acquire even more knowledge on this topic and other topics as well to improve my understanding of this subject.</p>
          <a href="https://github.com/777-AvN-777" class="btn">See More</a>
        </div>
        <div class="column col-right reveal">
          <div class="bar">
            <div class="info">
              <span>HTML</span>
              <span>90%</span>
            </div>
            <div class="line html"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>CSS</span>
              <span>80%</span>
            </div>
            <div class="line css"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>Javascript</span>
              <span>50%</span>
            </div>
            <div class="line javascript"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>SQL</span>
              <span>70%</span>
            </div>
            <div class="line jquery"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>PHP</span>
              <span>85%</span>
            </div>
            <div class="line php"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">My Services</h2>
        <p>I can design webpages, as well develop them using my skills. With the help of languages such as HTML, CSS, Javascript, PHP and SQL, it is possible to create and design full-fledged working webpages. I can create webpages with appropriate mail or contact functionalities.</p>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="service-icon">
            <i class="fas fa-palette"></i>
          </div>
          <div class="info">
            <h3>Web Design</h3>
            <p>Desigining using CSS and HTML.</p>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
            <i class="fas fa-file-code"></i>
          </div>
          <div class="info">
            <h3>Web Development</h3>
            <p>Development using HTML, PHP, Javascript</p>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
            <i class="fas fa-object-group"></i>
          </div>
          <div class="info">
            <h3>Database management in website</h3>
            <p>Using SQL and PHP to create and maintain database for contact forms and mails.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="work" id="work">
      <div class="title reveal">
        <h2 class="section-title">My Work</h2>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work1.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work2.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work3.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work4.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work5.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/work6.jpg" alt="">
          </div>
        </div>
        <div class="title reveal">
          <a href="#" class="btn">See All</a>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="title reveal">
        <h2 class="section-title">Contact Me</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info">
              <h3>Address</h3>
              <span>Bennett University, Gr. Noida, India</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-phone"></i>
            </div>
            <div class="info">
              <h3>Phone</h3>
              <span>+91 9007065999</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info">
              <h3>Email Address</h3>
              <span>abhinavdas.1704@gmail.com</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-globe"></i>
            </div>
            <div class="info">
              <h3>GitHub</h3>
              <span>https://github.com/777-AvN-777</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-form reveal">
            <h3>Send Message</h3>
            <div class="input-box">
              <input type="text" name="" value="" placeholder="Name">
            </div>
            <div class="input-box">
              <input type="text" name="" value="" placeholder="Email">
            </div>
            <div class="input-box">
              <textarea name="name" rows="8" cols="80" placeholder="Message"></textarea>
            </div>
            <div class="input-box">
              <input type="submit" class="send-btn" name="" value="Send">
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <span class="footer-title">Abhinav Das</span>
      <p>Copyright @2022 <a href="#">Abhinav</a>. All Rights Reserved.</p>
    </footer>
    <script src="script.js" charset="utf-8"></script>

  </body>
</html>