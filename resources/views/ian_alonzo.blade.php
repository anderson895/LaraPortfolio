<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mediaqueries.css') }}">

   
  </head>
  <body>
    <nav id="desktop-nav">
      <div class="logo">Ian Alonzo</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
    <nav id="hamburger-nav">
      <div class="logo">Ian Alonzo</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#about" onclick="toggleMenu()">About</a></li>
          <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
          <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
          <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="{{ asset('assets/Profile ko.jpg') }}" alt="Ian Alonzo profile picture" />

      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Ian Alonzo</h1>
        <p class="section__text__p2">Frontend Developer</p>
        <div class="btn-container">
        <button
        class="btn btn-color-2"
        onclick="window.open('{{ asset('assets/resume-example.pdf') }}')"
        >
        Download CV
        </button>
            <button class="btn btn-color-1" onclick="location.href='{{ url('#contact') }}'">
            Contact Info
            </button>

        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://linkedin.com/'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/'"
          />
        </div>
      </div>
    </section>
   <!-- About Section -->
<section id="about">
  <p class="section__text__p1">Get To Know More</p>
  <h1 class="title">About Me</h1>
  <div class="section-container">
    <div class="section__pic-container">
      <img
        src="{{ asset('assets/about-pic.jpg') }}"
        alt="Profile picture"
        class="about-pic"
      />
    </div>
    <div class="about-details-container">
      <div class="about-containers">
        <div class="details-container">
          <img
            src="{{ asset('assets/experience.png') }}"
            alt="Experience icon"
            class="icon"
          />
          <h3>Experience</h3>
          <p>2+ years <br />Front End</p>
        </div>
        <div class="details-container">
          <img
            src="{{ asset('assets/education.png') }}"
            alt="Education icon"
            class="icon"
          />
          <h3>Education</h3>
          <p>Bachelor of Science in Information Technology<br />Front End Dev & Hardware</p>
        </div>
      </div>
      <div class="text-container">
        <p>
          Currently a 4th-year BSIT student with 2 years of experience in 
          front-end technologies such as HTML, CSS, JavaScript, Bootstrap, 
          TypeScript, Sass, Vue.js, and Tailwind CSS. Experienced in building 
          responsive, scalable web applications and integrating back-end 
          solutions using PostgreSQL and Express JS. Strong focus on 
          delivering efficient and dynamic user experiences through modern
          web development practices
        </p>
      </div>
    </div>
  </div>
  <img
    src="{{ asset('assets/arrow.png') }}"
    alt="Arrow icon"
    class="icon arrow"
    onclick="location.href='{{ url('#experience') }}'"
  />
</section>
    

<section id="experience">
  <p class="section__text__p1">Explore My</p>
  <h1 class="title">Experience</h1>
  <div class="experience-details-container">
    <div class="about-containers">
      <div class="details-container">
        <h2 class="experience-sub-title">Frontend Dev</h2>
        <div class="article-container">
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>HTML</h3>
              <p>Experienced</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>CSS</h3>
              <p>Experienced</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>SASS</h3>
              <p>Intermediate</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>JavaScript</h3>
              <p>Basic</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>TypeScript</h3>
              <p>Basic</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>Bootstrap</h3>
              <p>Intermediate</p>
            </div>
          </article>
        </div>
      </div>
      <div class="details-container">
        <h2 class="experience-sub-title">Back End Dev</h2>
        <div class="article-container">
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>PostgreSQL</h3>
              <p>Basic</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>Vue JS</h3>
              <p>Intermediate</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>Express JS</h3>
              <p>Intermediate</p>
            </div>
          </article>
          <article>
            <img src="{{ asset('assets/checkmark.png') }}" alt="Experience icon" class="icon" />
            <div>
              <h3>Tailwind CSS</h3>
              <p>Intermediate</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ asset('assets/arrow.png') }}" alt="Arrow icon" class="icon arrow" onclick="location.href='{{ url('#projects') }}'" />
</section>

<section id="projects">
  <p class="section__text__p1">Browse My Recent</p>
  <h1 class="title">Projects</h1>
  <div class="experience-details-container">
    <div class="about-containers">
      <div class="details-container color-container">
        <div class="article-container">
          <img src="{{ asset('assets/Car Sale System.png') }}" alt="Car Sale System" class="project-img" />
        </div>
        <h2 class="experience-sub-title project-title">Car Sale System</h2>
        <div class="btn-container">
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Github</button>
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Live Demo</button>
        </div>
      </div>
      <div class="details-container color-container">
        <div class="article-container">
          <img src="{{ asset('assets/Information System-1.png') }}" alt="Information System-1" class="project-img" />
        </div>
        <h2 class="experience-sub-title project-title">Security System</h2>
        <div class="btn-container">
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Github</button>
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Live Demo</button>
        </div>
      </div>
      <div class="details-container color-container">
        <div class="article-container">
          <img src="{{ asset('assets/Artificial Intelligence System.png') }}" alt="Artificial Intelligence System" class="project-img" />
        </div>
        <h2 class="experience-sub-title project-title">Artificial Intelligence System</h2>
        <div class="btn-container">
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Github</button>
          <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/settings/profile'">Live Demo</button>
        </div>
      </div>
    </div>
  </div>
  <img src="{{ asset('assets/arrow.png') }}" alt="Arrow icon" class="icon arrow" onclick="location.href='{{ url('#contact') }}'" />
</section>

<section id="contact">
  <p class="section__text__p1">Get in Touch</p>
  <h1 class="title">Contact Me</h1>
  <div class="contact-info-upper-container">
    <div class="contact-info-container">
      <img src="{{ asset('assets/email.png') }}" alt="Email icon" class="icon contact-icon email-icon" />
      <p><a href="mailto:examplemail@gmail.com">alonzoian2020@gmail.com</a></p>
    </div>
    <div class="contact-info-container">
      <img src="{{ asset('assets/linkedin.png') }}" alt="LinkedIn icon" class="icon contact-icon" />
      <p><a href="https://www.linkedin.com/feed/">LinkedIn</a></p>
    </div>
  </div>
</section>

    <footer>
      <nav>
        <div class="nav-links-container">
          <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
      <p>Copyright &#169; 2024 Ian A. Alonzo. All Rights Reserved.</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
