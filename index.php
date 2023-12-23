 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- header
  <div class="header">
    <div class="menu__wrapper">
        <div class="menu__bar">
            <a
                href="index.php"
                title="Logo"
            >
                <img src="logo.png" alt="" class="logo">
            </a>
            <img
                class="menu-icon"
                src="burger-menu.svg"
                title='Burger Menu'
                alt='Burger Menu'
                onclick="toggleMenu(this)"
            >
            <ul class="navigation">
                <li>
                    <a
                        href="#about"
                        title="About"
                    >
                      About Us
                    </a>
                </li>

                <li>
                    <a
                        href="course.php"
                        title="courses"
                    >
                       Courses
                    </a>
                </li>
                <li>
                    <a
                        href="contact.php"
                        title="Contact Us"
                    >
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> -->

    <?php include"navigation.php";?>

    <!-- slider -->

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="mosque1.jpg">
                <div class="content">
                    <p class="bism">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                    <p>WELCOME TO…</p>
                    <h2>
                        The Muslim Connect Islamic Center!
                    </h2>
                    <small>"Engage, Enlighten and Empower"</small>
                </div>
            </div>
            <div class="item">
                <img src="mosque2.jpg">
                <div class="content">
                    <p>kNOW THE REAL...</hp>
                        <h2>
                           TAFSEER OF <br> QURAN
                        </h2>
                        <small>"When things are too hard to handle retreat and count your blessings instead."</small>
                </div>
            </div>
            <div class="item">
                <img src="mosque3.jpg">
                <div class="content">
                    <p>WE BRING TO YOU...</hp>
                        <h2>
                            ONE OF THE  BIGGEST <br> ISLAMIC CENTER!
                        </h2>
                </div>
            </div>
    
            
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="mosque1.jpg">
                <div class="content">
                </div>
            </div>
            <div class="item">
                <img src="mosque2.jpg">
                <div class="content">
                </div>
            </div>
            <div class="item">
                <img src="mosque3.jpg">
                <div class="content">
                </div>
            </div>

        </div>
    </div>


    <main> 
        <section class="about-section" id="about">
            <div class="about-wrapper">
                <div class="about-img">
                    <img src="about-mosque.jpg" alt="">
                </div>
                <div class="about-details">
                    <div class="title">
                        <h4>OUR HISTORY</h4>
                    </div>

                    <p>Welcome to Muslim Connect Islamic Center
                    for all Muslims</p>
                    <p>Welcome to The Muslim Connect, where we believe in nurturing young minds with quality Islamic education. Our weekend madressa is tailored for children aged 5 to 16, providing a supportive and engaging environment for learning.</p>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="service-wrapper">
                <div class="service-title">
                    <p>WHAT WE OFFER</p>
                    <h4>We Offer An Effective <br>
                        Arabic & Quran Services</h4>
                </div> 
                <div class="service_boxes">
                    <div class="serv-box">
                        <div class="service_title">
                            <h5>Weekend Classes</h5>
                            <img src="quran.png" alt="">
                        </div>
                        <div class="service-content">
                            Our weekend classes aim to offer students the opportuinity to delve deeper into their subjects, seek clarification on challenging topics, and engage in interactive learning experiences. these sessions will be led by our experienced islamic scholars who are committed to providing comprehensive support and guidance to help students achieve islamic academic excellence.
                        </div>
                    </div>
                    <div class="serv-box">
                        <div class="service_title">
                            <h5>Tafseer Courses</h5>
                            <img src="dua-hands.png" alt="">
                        </div>
                        <div class="service-content">
                            Our primary goal is to achieve perfection in students regarding the language. We also want to promote cultural and social progress in a knowledge-based society which is in both academic and professional contexts. We also want to demonstrate academic expertise in the areas of science of Tafseer and sciences of Al-Qur'an.
                        </div>
                    </div>
                    <div class="serv-box">
                        <div class="service_title">
                            <h5>Value-based Education</h5>
                            <img src="reading.png" alt="">
                        </div>
                        <div class="service-content">
                            We value our students and also place emphasis on helping students develop their personalities so they can shape their future and deal with challenges with ease. It shapes children to effectively carry out their social, moral and democratic responsibilities while becoming sensitive to changing circumstances.
                        </div>
                    </div>
                </div> 
            </div>
        </section>

        <aside class="course-section">
            <div class="course-box">
                <div class="course-title">
                    <p>POPULAR COURSES</p>
                    <h4>Our Arabic & Islamic Courses</h4>
                </div> 
                <div class="container">
                    <ul class="cards">
                      <li class="card">
                        <div>
                          <h3 class="card-title">Quranic Studies</h3>
                          <div class="card-content">
                            <p>This course involves a comprehensive study of the Holy Qur'an, its themes, messages, rhetorical features and philosophical nuances-all based upon the authoritatives tafseers of our tradition. </p>
                          </div>
                        </div>
                        <div class="card-link-wrapper">
                          <a href="" class="card-link">Learn More</a>
                        </div>
                      </li>
                      <li class="card">
                        <div>
                          <h3 class="card-title">Islamic History</h3>
                          <div class="card-content">
                            <p>This course covers a complete study on medieval islamic History, providing a foundation for understanding contemporary Muslim societies and transnational islam.</p>
                          </div>
                        </div>
                        <div class="card-link-wrapper">
                          <a href="" class="card-link">Learn More</a>
                        </div>
                      </li>
                      <li class="card">
                        <div>
                          <h3 class="card-title">Arabic Language</h3>
                          <div class="card-content">
                            <p>Discover the origins of the Arabic language and its impact on the world. Explore the Arabic language's history, its development and where its spoken.</p>
                          </div>
                        </div>
                        <div class="card-link-wrapper">
                          <a href="" class="card-link">Learn More</a>
                        </div>
                      </li>
                      <li class="card">
                        <div>
                          <h3 class="card-title">Morality and Ethics</h3>
                          <div class="card-content">
                            <p>Aenean posuere mauris quam, pellentesque auctor mi bibendum nec. Sed scelerisque lacus nisi, quis auctor lorem ornare vel.</p>
                          </div>
                        </div>
                        <div class="card-link-wrapper">
                          <a href="" class="card-link">Learn More</a>
                        </div>
                      </li>
                      <li class="card">
                        <div>
                          <h3 class="card-title"> Islamic Arts and Culture</h3>
                          <div class="card-content">
                            <p>Vestibulum pharetra fringilla felis sit amet tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras et arcu sit amet est consequat feugiat. Nam ut sapien pulvinar.</p>
                          </div>
                        </div>
                        <div class="card-link-wrapper">
                          <a href="" class="card-link">Learn More</a>
                        </div>
                      </li>   
                    </ul>
                  </div>
            </div>
        </aside>

        <div class="reminder_container">
            <div class="reminder-wrapper">
                <div class="reminderBox">
                    <h1>
                        Do Not Let Shaytan Delay You From Starting <br>
                        To Learn Your Deen.</h1>
                </div>
                <div class="reminderBtn">
                    <a href="contact.php"><button><span>Quick Start Now</span></button></a>
                </div>
            </div>
        </div>

        <section class="why-section">
            <div class="why-wrapper">
                <div class="why-title">
                    <p>WHY CHOOSE US</p>
                    <h1>Why Choose Muslim Connect?</h1>
                </div> 
                <div class="why-container">
                    <div class="why-box">
                        <div class="why-img">
                            <img src="higher-education.png" alt="">
                        </div>
                        <div class="why-content">
                            <h2 class="why-heading">Experienced Educators</h2>
                            <p>Our team of experienced and passionate educators is dedicated to providing a positive learning experience.</p>
                        </div>
                    </div>
                    <div class="why-box">
                        <div class="why-img">
                            <img src="education.png" alt="">
                        </div>
                        <div class="why-content">
                            <h2 class="why-heading">Interactive <br> Learning</h2>
                            <p>We incorporate interactive and engaging teaching methods to make learning enjoyable for children.
                            </p>
                        </div>
                    </div>
                    <div class="why-box">
                        <div class="why-img">
                            <img src="solidarity.png" alt="">
                        </div>
                        <div class="why-content">
                            <h2 class="why-heading">Community Involvement</h2>
                            <p>Join The Muslim Connect community, where students and parents come together to share and celebrate their faith.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="approach-section">
            <div class="approach-con">
                <div class="approach-title">
                    <h1>Our Approach</h1>
                </div>
                <div class="approach-details">
                    <p>"At The Muslim Connect, we are committed to fostering a love for learning in a way that is both educational and enjoyable. Our curriculum is based on the renowned An-Nasiha curriculum, designed to instill a deep understanding of Islamic teachings."</p>
                    <p>"There is no one who goes out of his house in order to seek knowledge, but the angels lower their wings in approval of his actions.” – Prophet Muhammad (S.A.W)</p>
                </div>
            </div>
        </section>

    </main>

<!-- 
    <footer>
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <section class="footer-top">
                <div class="footer-headline">
                    <h2>Subscribe to our newsletter</h2>
                    <p>
                        Stay up to date with our news and articles
                    </p>
                </div>
                <div class="footer-subscribe">
                    <input type="email" spellcheck="false" placeholder="Your Email">
                    <button>
                        Sign Up
                    </button>
                </div>
            </section>
            <div class="footer-columns">
                <section class="footer-logo">
                    <h2>
                        <img src="logo.png" alt="" class="logo">
                    </h2>
                </section>
                <section>
                    <h3>Links</h3>
                    <ul>
                        <li>
                            <a href="index.php" title="About">About Us</a>
                        </li>
                        <li>
                            <a href="course.php" title="courses">Courses</a>
                        </li>
                        <li>
                            <a href="contact.php" title="contact">Contact</a>
                        </li>
                    </ul>
                </section>
                <section>
                    <h3>Other Links</h3>
                    <ul>
                        <li>
                            <a href="#" title="Support">Support</a>
                        </li>
                        <li>
                            <a href="#" title="Sitemap">Sitemap</a>
                        </li>
                        <li>
                            <a href="#" title="Newsletter">Newsletter</a>
                        </li>
                    </ul>
                </section>
               
            </div>
            <div class="footer-bottom">
                <div class='social-links'>
                    <ul>
                        <li>
                            <a href="https://facebook.com/DMUSLIMCONNECT"  target="_blank" title="facebook">
                                <img src="facebook.png" alt='facebook'>                       
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/@THEMUSLIMCONNECT"  target="_blank" title="Twitter">
                                <img src="twitter.svg" alt='Twitter'>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/@DMUSLIMCONNECT"  target="_blank" title="instagram">
                                <img src="instagram.svg" alt='instagram'>
                            </a>
                        </li>
                    </ul>
                </div>

                <small>© The Muslim Connect <span id="year"></span>, All rights reserved 2023.</small>
            </div>
        </div>
    </footer> -->

    <?php include"footer.php";?>

    
    <script src="main.js"></script>
</body>
</html>