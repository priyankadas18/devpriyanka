<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Priyanka Das — Software Developer</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<style>
  *,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
  :root{
    --black:#0a0a0a;
    --white:#f5f2ec;
    --cream:#ede9e0;
    --accent:#c8a96e;
    --accent2:#8b5e3c;
    --muted:#888070;
    --border:#d4cfc4;
    --card:#ffffff;
    --glow-1:rgba(200,169,110,0.12);
    --glow-2:rgba(139,94,60,0.08);
    --glass:rgba(255,255,255,0.4);
  }
  html{scroll-behavior:smooth}
  body{
    background:var(--white);
    color:var(--black);
    font-family:'DM Sans',sans-serif;
    font-weight:300;
    overflow-x:hidden;
  }

  /* NAV */
  nav{
    position:fixed;top:0;left:0;right:0;z-index:100;
    display:flex;justify-content:space-between;align-items:center;
    padding:1.4rem 5vw;
    background:rgba(245,242,236,0.88);
    backdrop-filter:blur(12px);
    border-bottom:1px solid var(--border);
  }
  .nav-logo{font-family:'Playfair Display',serif;font-size:1.1rem;letter-spacing:0.05em;color:var(--black)}
  .nav-links{display:flex;gap:2rem}
  .nav-links a{text-decoration:none;color:var(--muted);font-size:0.85rem;letter-spacing:0.08em;text-transform:uppercase;transition:color 0.2s}
  .nav-links a:hover{color:var(--accent2)}

  /* HERO */
  .hero{
    min-height:100vh;
    display:grid;
    grid-template-columns:1.2fr 0.8fr;
    align-items:center;
    padding:8rem 5vw 5rem;
    gap:4rem;
    position:relative;
    overflow:hidden;
    background:var(--white);
  }
  .hero-bg-glows{
    position:absolute;top:0;left:0;right:0;bottom:0;
    z-index:0;pointer-events:none;
  }
  .glow-1{
    position:absolute;top:-10%;right:-5%;
    width:60vw;height:60vw;
    background:radial-gradient(circle,var(--glow-1) 0%,transparent 70%);
    filter:blur(60px);animation:floatGlow 20s infinite alternate;
  }
  .glow-2{
    position:absolute;bottom:-10%;left:-5%;
    width:50vw;height:50vw;
    background:radial-gradient(circle,var(--glow-2) 0%,transparent 70%);
    filter:blur(60px);animation:floatGlow 25s infinite alternate-reverse;
  }
  @keyframes floatGlow{
    0%{transform:translate(0,0)}
    100%{transform:translate(5%,5%)}
  }
  .hero-grid{
    position:absolute;top:0;left:0;right:0;bottom:0;
    background-image:linear-gradient(var(--border) 1px,transparent 1px),linear-gradient(90deg,var(--border) 1px,transparent 1px);
    background-size:60px 60px;
    opacity:0.04;z-index:0;
  }
  .hero-eyebrow{
    display:inline-flex;align-items:center;gap:0.6rem;
    font-size:0.78rem;letter-spacing:0.16em;text-transform:uppercase;
    color:var(--accent2);margin-bottom:1.4rem;
  }
  .hero-eyebrow::before{content:'';width:28px;height:1px;background:var(--accent2)}
  .hero h1{
    font-family:'Playfair Display',serif;
    font-size:clamp(3.5rem,6.5vw,7rem);
    font-weight:700;
    line-height:1;
    letter-spacing:-0.03em;
    margin-bottom:1.8rem;
    position:relative;z-index:2;
  }
  .hero h1 span{
    display:block;
    opacity:0;transform:translateY(30px);
    animation:heroReveal 0.8s cubic-bezier(0.2,0.8,0.2,1) forwards;
  }
  .hero h1 span:nth-child(2){animation-delay:0.15s}
  .hero h1 em{
    font-style:italic;
    background:linear-gradient(90deg,var(--accent2),var(--accent));
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
  }
  @keyframes heroReveal{
    to{opacity:1;transform:translateY(0)}
  }
  .hero-desc{
    font-size:1.1rem;line-height:1.8;color:#555048;
    max-width:520px;margin-bottom:2.8rem;
    opacity:0;animation:heroReveal 0.8s 0.3s forwards;
    position:relative;z-index:2;
  }
  .hero-cta{display:flex;gap:1.2rem;flex-wrap:wrap;opacity:0;animation:heroReveal 0.8s 0.45s forwards;position:relative;z-index:2}
  .btn-primary{
    display:inline-block;padding:1rem 2.4rem;
    background:var(--black);color:var(--white);
    text-decoration:none;font-size:0.9rem;letter-spacing:0.1em;text-transform:uppercase;
    border:1.5px solid var(--black);transition:all 0.4s cubic-bezier(0.2,0.8,0.2,1);
    position:relative;overflow:hidden;
  }
  .btn-primary:hover{background:transparent;color:var(--black);transform:translateY(-3px)}
  .btn-outline{
    display:inline-block;padding:1rem 2.4rem;
    background:transparent;color:var(--black);
    text-decoration:none;font-size:0.9rem;letter-spacing:0.1em;text-transform:uppercase;
    border:1.5px solid var(--border);transition:all 0.4s cubic-bezier(0.2,0.8,0.2,1);
  }
  .btn-outline:hover{border-color:var(--black);transform:translateY(-3px)}

  /* HERO VISUAL AREA */
  .hero-visual{
    position:relative;
    width:100%;height:100%;
    display:flex;align-items:center;justify-content:center;
    z-index:1;
  }
  .visual-main{
    width:100%;aspect-ratio:1;
    background:var(--card);
    border:1px solid var(--border);
    box-shadow:0 30px 60px rgba(0,0,0,0.05);
    position:relative;
    overflow:hidden;
    mask-image:radial-gradient(circle at center,black,transparent 80%);
    opacity:0;animation:visualReveal 1.2s 0.2s forwards;
  }
  @keyframes visualReveal{
    from{opacity:0;transform:scale(0.9) rotate(-2deg)}
    to{opacity:1;transform:scale(1) rotate(0)}
  }
  .visual-img{
    width:100%;height:100%;object-fit:cover;
    opacity:0.8;mix-blend-mode:multiply;
  }
  .status-badge{
    position:absolute;
    background:rgba(255,255,255,0.7);
    backdrop-filter:blur(12px);
    border:1px solid var(--border);
    padding:1rem 1.5rem;
    display:flex;flex-direction:column;gap:0.3rem;
    box-shadow:0 15px 30px rgba(0,0,0,0.05);
    z-index:5;
    animation:badgeFloat 6s ease-in-out infinite;
  }
  @keyframes badgeFloat{
    0%,100%{transform:translateY(0)}
    50%{transform:translateY(-15px)}
  }
  .badge-1{top:10%;left:-10%;animation-delay:0s}
  .badge-2{bottom:15%;right:-5%;animation-delay:-2s}
  .badge-3{top:50%;right:-15%;animation-delay:-4s}
  
  .badge-num{font-family:'Playfair Display',serif;font-size:1.8rem;font-weight:700;color:var(--black);line-height:1}
  .badge-label{font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--muted)}



  /* SECTION */
  section{padding:6rem 5vw}
  .section-label{
    display:inline-flex;align-items:center;gap:0.6rem;
    font-size:0.75rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent2);
    margin-bottom:3rem;
  }
  .section-label::after{content:'';width:40px;height:1px;background:var(--accent2)}
  h2{font-family:'Playfair Display',serif;font-size:clamp(2rem,3.5vw,3rem);font-weight:700;line-height:1.1;margin-bottom:1rem}

  /* ABOUT */
  .about{background:var(--cream);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
  .about-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:5rem;align-items:center}
  .about-text p{font-size:1.05rem;line-height:1.8;color:#555048;margin-bottom:1rem}
  .about-highlights{display:flex;flex-direction:column;gap:1rem}
  .highlight-item{
    display:flex;align-items:center;gap:1rem;
    padding:1rem 1.25rem;background:var(--card);
    border:1px solid var(--border);
  }
  .hi-icon{width:36px;height:36px;background:var(--black);display:flex;align-items:center;justify-content:center;color:var(--accent);font-size:1rem;flex-shrink:0}
  .hi-text strong{display:block;font-size:0.85rem;font-weight:500;letter-spacing:0.04em}
  .hi-text span{font-size:0.78rem;color:var(--muted)}

  /* SKILLS */
  .skills-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:1px;background:var(--border);border:1px solid var(--border);margin-top:3rem}
  .skill-item{
    background:var(--white);padding:2rem 1.5rem;text-align:center;
    transition:background 0.2s,transform 0.2s;cursor:default;
  }
  .skill-item:hover{background:var(--black);transform:scale(1.02);z-index:1}
  .skill-item:hover .skill-name,.skill-item:hover .skill-level{color:var(--white)}
  .skill-icon{font-size:1.8rem;margin-bottom:0.75rem;display:block}
  .skill-name{font-size:0.85rem;font-weight:500;letter-spacing:0.06em;text-transform:uppercase;transition:color 0.2s}
  .skill-level{font-size:0.72rem;color:var(--muted);margin-top:0.3rem;letter-spacing:0.08em;transition:color 0.2s}

  /* PROJECTS */
  .projects-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:1.5rem;margin-top:3rem}
  .project-card{
    border:1px solid var(--border);background:var(--card);
    overflow:hidden;transition:transform 0.3s,box-shadow 0.3s;
    position:relative;
  }
  .project-card:hover{transform:translateY(-6px);box-shadow:0 20px 40px rgba(0,0,0,0.1)}
  .project-color{height:5px}
  .project-body{padding:1.75rem}
  .project-num{
    font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;
    color:var(--cream);position:absolute;top:1rem;right:1.5rem;line-height:1;
    user-select:none;
  }
  .project-tag{
    display:inline-block;font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;
    padding:0.25rem 0.7rem;border:1px solid var(--border);color:var(--muted);
    margin-bottom:1rem;
  }
  .project-title{font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;margin-bottom:0.75rem}
  .project-desc{font-size:0.88rem;line-height:1.7;color:#666058;margin-bottom:1.25rem}
  .project-tech{display:flex;flex-wrap:wrap;gap:0.4rem}
  .tech-badge{
    font-size:0.7rem;letter-spacing:0.08em;padding:0.2rem 0.6rem;
    background:var(--cream);color:var(--accent2);
    border:1px solid var(--border);
  }
  .project-link{
    display:inline-flex;align-items:center;gap:0.4rem;
    font-size:0.75rem;letter-spacing:0.08em;text-transform:uppercase;
    color:var(--accent2);text-decoration:none;font-weight:500;
    margin-top:1.5rem;transition:color 0.2s;
  }
  .project-link:hover{color:var(--black)}

  /* EXPERIENCE */
  .exp{background:var(--cream);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
  .timeline{margin-top:3rem;position:relative;padding-left:2rem}
  .timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:1px;background:var(--border)}
  .timeline-item{position:relative;margin-bottom:3rem;padding-left:1.5rem}
  .timeline-dot{position:absolute;left:-2.55rem;top:0.3rem;width:10px;height:10px;background:var(--accent);border:2px solid var(--white)}
  .timeline-year{font-size:0.75rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--accent2);margin-bottom:0.4rem}
  .timeline-title{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;margin-bottom:0.3rem}
  .timeline-sub{font-size:0.85rem;color:var(--muted);margin-bottom:0.75rem}
  .timeline-desc{font-size:0.9rem;line-height:1.7;color:#666058}

  /* CONTACT */
  .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start;margin-top:3rem}
  .contact-intro{font-size:1.05rem;line-height:1.8;color:#555048;margin-bottom:2rem}
  .contact-links{display:flex;flex-direction:column;gap:1rem}
  .contact-link{
    display:flex;align-items:center;gap:1rem;padding:1rem 1.25rem;
    border:1px solid var(--border);background:var(--card);
    text-decoration:none;color:var(--black);transition:all 0.2s;
  }
  .contact-link:hover{background:var(--black);color:var(--white);border-color:var(--black)}
  .contact-link:hover .cl-icon{color:var(--accent)}
  .cl-icon{font-size:1.1rem;transition:color 0.2s}
  .cl-text strong{display:block;font-size:0.8rem;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:0.15rem}
  .cl-text span{font-size:0.85rem;color:var(--muted)}
  .contact-link:hover .cl-text span{color:rgba(255,255,255,0.6)}

  .contact-form{display:flex;flex-direction:column;gap:1rem}
  .form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
  .form-field{display:flex;flex-direction:column;gap:0.4rem}
  .form-field label{font-size:0.72rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--muted)}
  .form-field input,.form-field textarea{
    padding:0.85rem 1rem;border:1px solid var(--border);background:var(--card);
    font-family:'DM Sans',sans-serif;font-size:0.9rem;color:var(--black);
    outline:none;resize:none;transition:border-color 0.2s;
  }
  .form-field input:focus,.form-field textarea:focus{border-color:var(--black)}
  .form-submit{
    padding:0.9rem 2rem;background:var(--black);color:var(--white);
    border:none;cursor:pointer;font-family:'DM Sans',sans-serif;
    font-size:0.82rem;letter-spacing:0.12em;text-transform:uppercase;
    transition:opacity 0.2s;align-self:flex-start;
  }
  .form-submit:hover{opacity:0.75}

  /* FOOTER */
  footer{
    padding:2rem 5vw;border-top:1px solid var(--border);
    display:flex;justify-content:space-between;align-items:center;
    font-size:0.8rem;color:var(--muted);
  }
  .footer-logo{font-family:'Playfair Display',serif;font-size:1rem;color:var(--black)}

  /* TESTIMONIALS */
  .testimonials{background:var(--white);position:relative}
  .testimonials-container{max-width:1200px;margin:3rem auto 0;padding:0 2rem;position:relative}
  .testimonial-card{
    background:var(--card);border:1px solid var(--border);
    padding:3rem 2.5rem;height:100%;display:flex;flex-direction:column;
    transition:transform 0.3s ease;
  }
  .testimonial-quote{font-size:3rem;color:var(--accent);line-height:1;margin-bottom:1.5rem;font-family:'Playfair Display',serif;opacity:0.4}
  .testimonial-text{font-size:1.1rem;line-height:1.7;color:#555048;margin-bottom:2rem;font-style:italic}
  .testimonial-author{margin-top:auto;display:flex;align-items:center;gap:1rem}
  .ta-avatar{width:48px;height:48px;background:var(--cream);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--accent2);border:1px solid var(--border)}
  .ta-info strong{display:block;font-size:0.9rem;font-weight:700;color:var(--black)}
  .ta-info span{display:block;font-size:0.75rem;color:var(--muted);margin-top:0.2rem}
  
  .swiper-pagination-bullet{background:var(--border);opacity:1}
  .swiper-pagination-bullet-active{background:var(--accent2)}
  .swiper-button-next,.swiper-button-prev{color:var(--accent2);transform:scale(0.6)}

  /* REVEAL ANIMATIONS */
  .reveal{opacity:0;transform:translateY(30px);transition:opacity 0.7s ease,transform 0.7s ease}
  .reveal.visible{opacity:1;transform:translateY(0)}

  /* MOBILE */
  @media(max-width:992px){
    .hero{grid-template-columns:1fr;padding-top:10rem;text-align:center;gap:3rem}
    .hero-content{display:flex;flex-direction:column;align-items:center}
    .hero-desc{margin-left:auto;margin-right:auto}
    .hero-cta{justify-content:center}
    .hero-visual{max-width:400px;margin:0 auto}
    .status-badge{padding:0.6rem 1rem}
    .badge-num{font-size:1.4rem}
  }
  @media(max-width:768px){
    .about-grid,.contact-grid{grid-template-columns:1fr;gap:2.5rem}
    .form-row{grid-template-columns:1fr}
    nav .nav-links{display:none}
    .badge-1{left:0}
    .badge-2{right:0}
    .badge-3{display:none}
  }
</style>
</head>
<body>

<!-- NAV -->
<nav>
  <span class="nav-logo">Priyanka Das</span>
  <div class="nav-links">
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg-glows">
    <div class="glow-1"></div>
    <div class="glow-2"></div>
  </div>
  <div class="hero-grid"></div>

  <div class="hero-content">
    <div class="hero-eyebrow" style="opacity:0;animation:heroReveal 0.8s forwards">Software Developer</div>
    <h1>
      <span>Crafting <em>elegant</em></span>
      <span>digital solutions</span>
    </h1>
    <p class="hero-desc">3+ years building robust, scalable web applications — from enterprise portals to full-stack SaaS products — with a sharp focus on clean architecture and real-world impact.</p>
    <div class="hero-cta">
      <a href="#projects" class="btn-primary">View Projects</a>
      <a href="#contact" class="btn-outline">Hire Me</a>
    </div>
  </div>

  <div class="hero-visual">
    <div class="visual-main">
      <img src="{{ asset('assets/images/hero.png') }}" alt="Abstract Visual" class="visual-img">
    </div>
    
    <div class="status-badge badge-1">
      <div class="badge-num">3+</div>
      <div class="badge-label">Years Exp.</div>
    </div>
    <div class="status-badge badge-2">
      <div class="badge-num">8+</div>
      <div class="badge-label">Live Projects</div>
    </div>
    <div class="status-badge badge-3">
      <div class="badge-num">5</div>
      <div class="badge-label">Core Techs</div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="section-label">About Me</div>
  <div class="about-grid">
    <div class="about-text reveal">
      <h2>A developer who cares about<br><em style="font-family:'Playfair Display',serif;font-style:italic">quality & craft</em></h2>
      <br>
      <p>I'm Priyanka Das, a Software Developer with over 3 years of hands-on experience building full-stack web applications. I specialize in backend-heavy systems, REST APIs, and scalable database design.</p>
      <p>From government-scale Steel & Mines portals to multi-vendor e-commerce and healthcare platforms — I've delivered solutions that solve real problems for real users.</p>
      <p>I believe great software isn't just functional — it's maintainable, performant, and built with intention.</p>
    </div>
    <div class="about-highlights reveal">
      <div class="highlight-item">
        <div class="hi-icon">⚡</div>
        <div class="hi-text">
          <strong>Full-Stack Development</strong>
          <span>PHP, Node.js, REST APIs & more</span>
        </div>
      </div>
      <div class="highlight-item">
        <div class="hi-icon">🗄️</div>
        <div class="hi-text">
          <strong>Database Architecture</strong>
          <span>SQL, MongoDB — structured & unstructured</span>
        </div>
      </div>
      <div class="highlight-item">
        <div class="hi-icon">🚀</div>
        <div class="hi-text">
          <strong>API Engineering</strong>
          <span>RESTful services, integrations & documentation</span>
        </div>
      </div>
      <div class="highlight-item">
        <div class="hi-icon">🏗️</div>
        <div class="hi-text">
          <strong>Scalable Architecture</strong>
          <span>Built for growth, maintained for sanity</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="section-label">Tech Stack</div>
  <h2 class="reveal">Technologies I work with</h2>
  <div class="skills-grid reveal">
    <div class="skill-item">
      <span class="skill-icon">🐘</span>
      <div class="skill-name">PHP</div>
      <div class="skill-level">Backend</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">⬡</span>
      <div class="skill-name">Node.js</div>
      <div class="skill-level">Runtime</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">🍃</span>
      <div class="skill-name">MongoDB</div>
      <div class="skill-level">NoSQL DB</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">🗃️</span>
      <div class="skill-name">SQL</div>
      <div class="skill-level">Relational DB</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">🔌</span>
      <div class="skill-name">REST API</div>
      <div class="skill-level">Integration</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">🌐</span>
      <div class="skill-name">HTML/CSS</div>
      <div class="skill-level">Frontend</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">🔧</span>
      <div class="skill-name">Git</div>
      <div class="skill-level">Version Control</div>
    </div>
    <div class="skill-item">
      <span class="skill-icon">📦</span>
      <div class="skill-name">JSON/XML</div>
      <div class="skill-level">Data Formats</div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects" style="background:var(--cream);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="section-label">Selected Work</div>
  <h2 class="reveal">Projects that made an impact</h2>
  <div class="projects-grid">

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#8b5e3c,#c8a96e)"></div>
      <div class="project-body">
        <div class="project-num">01</div>
        <div class="project-tag">Government / Enterprise</div>
        <div class="project-title">Steel & Mines Portal</div>
        <p class="project-desc">A large-scale enterprise portal managing operations, compliance, and data workflows for the steel and mining sector. Built for reliability, performance, and secure multi-user access.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">SQL</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="http://bhubaneswaroffice.in/steelmining/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#7b2d8b,#a855c8)"></div>
      <div class="project-body">
        <div class="project-num">02</div>
        <div class="project-tag">Entertainment / Hospitality</div>
        <div class="project-title">WonderWorld Waterpark</div>
        <p class="project-desc">A full-featured booking and management system for a waterpark — handling ticket sales, ride scheduling, visitor management, and real-time capacity tracking.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">SQL</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="https://wonderworldwaterparkandresort.com/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#3a7d44,#6ab04c)"></div>
      <div class="project-body">
        <div class="project-num">03</div>
        <div class="project-tag">Agriculture / SaaS</div>
        <div class="project-title">AgriSoul</div>
        <p class="project-desc">A smart agriculture platform connecting farmers with market information, advisory services, and supply-chain tools — empowering rural communities through technology.</p>
        <div class="project-tech">
          <span class="tech-badge">Node.js</span>
          <span class="tech-badge">MongoDB</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="https://agrisoul.in/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#1a6fb5,#56a0d3)"></div>
      <div class="project-body">
        <div class="project-num">04</div>
        <div class="project-tag">Healthcare</div>
        <div class="project-title">HealthSquare</div>
        <p class="project-desc">A healthcare management platform supporting patient records, appointment scheduling, and doctor-patient communication with a strong emphasis on data privacy and integrity.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">SQL</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="https://apcagenciesandconsultancy.com/healthsquare/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#c0392b,#e74c3c)"></div>
      <div class="project-body">
        <div class="project-num">05</div>
        <div class="project-tag">Government / Culture</div>
        <div class="project-title">Lalit Kala Akademi Odisha</div>
        <p class="project-desc">The official digital portal for the Odisha State Academy of Art, featuring event management, artist archives, and cultural showcases.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">SQL</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="https://lalitkalaakademi.odisha.gov.in/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#f39c12,#e67e22)"></div>
      <div class="project-body">
        <div class="project-num">06</div>
        <div class="project-tag">E-Commerce</div>
        <div class="project-title">Multivendor E-Commerce</div>
        <p class="project-desc">A full-featured multi-vendor marketplace with product management, order workflows, vendor dashboards, payment integration, and real-time inventory tracking.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">Node.js</span>
          <span class="tech-badge">MongoDB</span>
          <span class="tech-badge">SQL</span>
        </div>
          <a href="https://nayakpro.com/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>
    <div class="project-card reveal">
      <div class="project-color" style="background:linear-gradient(90deg,#2c3e50,#4ca1af)"></div>
      <div class="project-body">
        <div class="project-num">07</div>
        <div class="project-tag">Media / News</div>
        <div class="project-title">OdishaRay</div>
        <p class="project-desc">A comprehensive digital news platform for Odisha, delivering real-time updates, multimedia content, and investigative journalism. Built for high traffic and rapid content delivery.</p>
        <div class="project-tech">
          <span class="tech-badge">PHP</span>
          <span class="tech-badge">SQL</span>
          <span class="tech-badge">REST API</span>
        </div>
        <a href="https://www.odisharay.com/" target="_blank" class="project-link">View Project ↗</a>
      </div>
    </div>

  </div>
</section>

<!-- EXPERIENCE -->
<section class="exp" id="experience">
  <div class="section-label">Experience</div>
  <h2 class="reveal">Professional Journey</h2>
  <div class="timeline">
    
    <div class="timeline-item reveal">
      <div class="timeline-dot"></div>
      <div class="timeline-year">Feb 2025 — Present</div>
      <div class="timeline-title">Senior Software Developer</div>
      <div class="timeline-sub">The UniQue Culture · Bhubaneswar (Onsite)</div>
      <div class="timeline-desc">
        Leading end-to-end development of scalable web applications and mentoring junior developers. 
        Responsible for system architecture, performance optimization, and delivering high-quality 
        software solutions aligned with business goals. Collaborating closely with stakeholders to 
        transform requirements into efficient and maintainable products.
      </div>
    </div>

    <div class="timeline-item reveal">
      <div class="timeline-dot"></div>
      <div class="timeline-year">Jun 2023 — Jan 2025</div>
      <div class="timeline-title">PHP Developer</div>
      <div class="timeline-sub">Visital Technology · Bhubaneswar</div>
      <div class="timeline-desc">
        Developed robust and secure web applications using PHP and modern frameworks. 
        Specialized in backend development, REST API integration, and database optimization. 
        Improved application performance and ensured seamless user experience across multiple client projects.
      </div>
    </div>

    <div class="timeline-item reveal">
      <div class="timeline-dot"></div>
      <div class="timeline-year">Oct 2022 — Jun 2023</div>
      <div class="timeline-title">Software Developer Executive</div>
      <div class="timeline-sub">Typof · Bhubaneswar</div>
      <div class="timeline-desc">
        Contributed to the full software development lifecycle including development, testing, 
        and deployment. Worked collaboratively with cross-functional teams to deliver projects 
        on time while maintaining code quality and best practices. Gained hands-on experience 
        in building scalable and user-friendly applications.
      </div>
    </div>

</div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
  <div class="section-label">Client Stories</div>
  <h2 class="reveal">Feedback from collaborators</h2>
  
  <div class="testimonials-container reveal">
    <div class="swiper testimonialSwiper">
      <div class="swiper-wrapper">
        
        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-quote">“</div>
            <p class="testimonial-text">Working with Priyanka on the Steel & Mines project was a great experience. She demonstrated strong technical expertise and a deep understanding of complex requirements. Her ability to deliver scalable and efficient solutions, along with her professionalism and timely execution, made a significant impact on the project’s success.</p>
            <div class="testimonial-author">
              <div class="ta-avatar">S</div>
              <div class="ta-info">
                <strong>Sonali</strong>
                <span>Project Lead · Sonydig Technology Pvt. Ltd.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-quote">“</div>
            <p class="testimonial-text">Priyanka showcased exceptional development skills while working on our news platform. She ensured smooth functionality, fast performance, and a user-friendly experience. Her commitment to quality and attention to detail truly enhanced our digital presence.</p>
            <div class="testimonial-author">
              <div class="ta-avatar">AM</div>
              <div class="ta-info">
                <strong>Abhisek Mohanty</strong>
                <span>Editor In-Chief · OdishaRay News</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-quote">“</div>
            <p class="testimonial-text">Priyanka delivered a visually appealing and highly functional website for our brand. She understood our requirements perfectly and transformed them into a seamless digital experience. Her creativity and technical skills helped us improve customer engagement.</p>
            <div class="testimonial-author">
              <div class="ta-avatar">WP</div>
              <div class="ta-info">
                <strong>Wonderworld Park</strong>
                <span>Management Team</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-quote">“</div>
            <p class="testimonial-text">Priyanka played a key role in developing our healthcare platform with precision and efficiency. Her expertise in backend development and system optimization ensured a reliable and smooth experience for our users. Highly professional and dependable.</p>
            <div class="testimonial-author">
              <div class="ta-avatar">R</div>
              <div class="ta-info">
                <strong>Ramesh</strong>
                <span>Client · HealthSquare (Nepal)</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testimonial-card">
            <div class="testimonial-quote">“</div>
            <p class="testimonial-text">Priyanka successfully developed and managed our multivendor e-commerce platform with great efficiency. She handled complex functionalities with ease and delivered a scalable solution that met our business needs. Her dedication and problem-solving approach are truly commendable.</p>
            <div class="testimonial-author">
              <div class="ta-avatar">NC</div>
              <div class="ta-info">
                <strong>Nayak Consultancy</strong>
                <span>Client · Multivendor E-Commerce</span>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-label">Get In Touch</div>
  <h2 class="reveal">Let's build something together</h2>
  <div class="contact-grid">
    <div class="reveal">
      <p class="contact-intro">Open to freelance projects, long-term collaborations, and full-time opportunities. If you have an idea or a problem that needs a reliable developer — let's talk.</p>
      <div class="contact-links">
        <a href="mailto:daspriyankaa01@gmail.com" class="contact-link">
          <span class="cl-icon">✉</span>
          <div class="cl-text">
            <strong>Email</strong>
            <span>daspriyankaa01@gmail.com</span>
          </div>
        </a>
        <a href="https://github.com/priyankadas18" target="_blank" class="contact-link">
          <span class="cl-icon">⌥</span>
          <div class="cl-text">
            <strong>GitHub</strong>
            <span>github.com/priyankadas18</span>
          </div>
        </a>
        <a href="https://www.linkedin.com/in/priyanka-das-398499241/" target="_blank" class="contact-link">
          <span class="cl-icon">◈</span>
          <div class="cl-text">
            <strong>LinkedIn</strong>
            <span>linkedin.com/in/priyanka-das-398499241</span>
          </div>
        </a>
      </div>
    </div>
    <div class="reveal">
      <form id="contactForm" class="contact-form">
        @csrf
        <div class="form-row">
          <div class="form-field">
            <label>Your Name</label>
            <input type="text" name="name" placeholder="John Smith" required/>
          </div>
          <div class="form-field">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="john@company.com" required/>
          </div>
        </div>
        <div class="form-field">
          <label>Subject</label>
          <input type="text" name="subject" placeholder="Project inquiry / Freelance / Full-time" required/>
        </div>
        <div class="form-field">
          <label>Message</label>
          <textarea name="message" rows="5" placeholder="Tell me about your project or opportunity..." required></textarea>
        </div>
        <button type="submit" class="form-submit" id="submitBtn">Send Message →</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span class="footer-logo">Priyanka Das</span>
  <span>© 2024 · Software Developer </span>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{
    if(e.isIntersecting){e.target.classList.add('visible')}
  })
},{threshold:0.12})
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el))

// Initialize Testimonials Swiper
const swiper = new Swiper('.testimonialSwiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        }
    }
});

// AJAX Form Submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const submitBtn = document.getElementById('submitBtn');
    const formData = new FormData(form);
    
    // Disable button and show loading state
    submitBtn.disabled = true;
    submitBtn.innerText = 'Sending...';
    
    fetch('{{ route('contact.send') }}', {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message,
                confirmButtonColor: '#0a0a0a'
            });
            form.reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.message || 'Something went wrong!',
                confirmButtonColor: '#0a0a0a'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong while sending your message. Please try again later.',
            confirmButtonColor: '#0a0a0a'
        });
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.innerText = 'Send Message →';
    });
});
</script>
</body>
</html>



