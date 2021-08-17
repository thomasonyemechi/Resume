<?php include('lib/connect.inc.php'); ?>
<!DOCTYPE html>
<html lang="en-US">
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Material Resume</title>
            <link rel="preconnect" href="https://fonts.gstatic.com/"
                  crossorigin="crossorigin"  hkz.VV>)/5`rpdy />
            <link rel="preload" as="style"
                  href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
                  />
            <link rel="stylesheet"
                  href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
                  media="print" onload="this.media='all'" />
            <noscript>
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"
                        />
            </noscript>
            <link href="css/font-awesome/css/all.min8d1e.css?ver=1.2.2" rel="stylesheet">
            <link href="css/mdb.min8d1e.css?ver=1.2.2" rel="stylesheet">
            <link href="css/aos8d1e.css?ver=1.2.2" rel="stylesheet">
            <link href="css/main8d1e.css?ver=1.2.2" rel="stylesheet">
            <noscript>
                  <style type="text/css">
/*        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }*/
      </style>
            </noscript>
      </head>
      <body class="bg-light" id="top">
            <header class="d-print-none">
                  <div class="container text-center text-lg-left">
                        <div class="pt-4 clearfix">
                              <h1 class="site-title mb-0"><?= PROJECT_NAME; ?></h1>
                              <div class="site-nav">
                                    <nav role="navigation">
                                          <ul class="nav justify-content-center">
                                                <li class="nav-item"><a class="nav-link" href="#about" title="About"><span
                                                                  class="menu-title">About</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#skills" title="Skills"><span
                                                                  class="menu-title">Skills</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#experience"
                                                            title="Experience"><span class="menu-title">Experience</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#education"
                                                            title="Education"><span class="menu-title">Education</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#portfolio"
                                                            title="Portfolio"><span class="menu-title">Portfolio</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#references"
                                                            title="References"><span class="menu-title">References</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#contact"
                                                            title="Contact"><span class="menu-title">Contact</span></a>
                                                </li>
                                          </ul>
                                    </nav>
                              </div>
                        </div>
                  </div>
            </header>
            <div class="page-content">
                  <div class="container">
                        <div class="resume-container">
                              <div class="shadow-1-strong bg-white my-5" id="intro">
                                    <div class="bg-info text-white">
                                          <div class="cover bg-image"><img src="images/header-background.jpg"
                                                      width="1600" height="685" />
                                                <div class="mask" style="background-color: rgba(0, 0, 0,
                                                      0.7);backdrop-filter: blur(2px);">
                                                      <div class="text-center p-5">
                                                            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong"
                                                                        src="images/avatar.jpg" width="160" height="160" /></div>
                                                            <div class="header-bio mt-3">
                                                                  <div data-aos="zoom-in" data-aos-delay="0">
                                                                        <h2 class="h1"><?= PROJECT_NAME; ?></h2>
                                                                        <p>Fullstack Web Developer</p>
                                                                  </div>
                                                                  <div class="header-social mb-3 d-print-none" data-aos="zoom-in"
                                                                        data-aos-delay="200">
                                                                        <nav role="navigation">
                                                                              <ul class="nav justify-content-center">
                                                                                    <li class="nav-item"><a class="nav-link"
                                                                                                href="https://twitter.com/templateflip" title="Twitter"><i
                                                                                                      class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                                                                                    </li>
                                                                                    <li class="nav-item"><a class="nav-link"
                                                                                                href="https://www.facebook.com/templateflip" title="Facebook"><i
                                                                                                      class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                                                                                    </li>
                                                                                    <li class="nav-item"><a class="nav-link"
                                                                                                href="https://www.instagram.com/templateflip" title="Instagram"><i
                                                                                                      class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                                                                                    </li>
                                                                                    <li class="nav-item"><a class="nav-link"
                                                                                                href="https://github.com/templateflip" title="Github"><i
                                                                                                      class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                                                                                    </li>
                                                                              </ul>
                                                                        </nav>
                                                                  </div>
                                                                  <div class="d-print-none"><a class="btn btn-outline-light btn-lg
                                                                              shadow-sm mt-1 me-3" href="material-resume.pdf"
                                                                              data-aos="fade-right" data-aos-delay="700">Download CV</a><a
                                                                              class="btn btn-info btn-lg shadow-sm mt-1" href="#contact"
                                                                              data-aos="fade-left" data-aos-delay="700">Hire Me</a></div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="about">
                                    <div class="about-section">
                                          <div class="row">
                                                <div class="col-md-6">
                                                      <h2 class="h2 fw-light mb-4">About Me</h2>
                                                      <p>Hello! I’m <?= PROJECT_NAME; ?>. I am interested about software development  and Web Design. I am a skilled <strong>full stack web developer</strong> and
                                                            master of tech skills such as Php and Laravel. I am a
                                                            quick learner and a team worker that gets the job done.</p>
                                                      <p>I can easily deliver software solutions at maximum speed.</p>
                                                </div>
                                                <div class="col-md-5 offset-lg-1">
                                                      <div class="row mt-2">
                                                            <h2 class="h2 fw-light mb-4">Bio</h2>
                                                            <div class="col-sm-5">
                                                                  <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2
                                                                              text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                  <div class="pb-2">18</div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                  <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2
                                                                              text-muted" style="width:24px;opacity:0.85;"></i> Email</div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                  <div class="pb-2"><a
                                                                              href="https://demo.templateflip.com/cdn-cgi/l/email-protection"
                                                                              class="__cf_email__"
                                                                              data-cfemail="6116000d15041321020e0c11000f184f020e0c"><?= PROJECT_EMAIL ?></a></div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                  <div class="pb-2 fw-bolder"><i class="fab fa-github pe-2 text-muted"
                                                                              style="width:24px;opacity:0.85;"></i> Git-Hub </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                  <div class="pb-2"><a
                                                                              href="https://demo.templateflip.com/cdn-cgi/l/email-protection"
                                                                              class="__cf_email__"
                                                                              data-cfemail="9de8eef8eff3fcf0f8ddeef6e4edf8b3fef2f0">thomasonyemechi</a></div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                  <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted"
                                                                              style="width:24px;opacity:0.85;"></i> Phone</div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                  <div class="pb-2">+23 490 387 723 66 </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                  <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2
                                                                              text-muted" style="width:24px;opacity:0.85;"></i> Address</div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                  <div class="pb-2">100b, Odoikoyi street, Akure, Ondo , Nigeria</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
                                    <div class="skills-section">
                                          <h2 class="h2 fw-light mb-4">Professional Skills</h2>
                                          <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3"><span class="fw-bolder">HTML</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-info" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="100"
                                                                        data-aos-anchor=".skills-section" style="width: 95%;"
                                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Expert</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">CSS</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-info" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="200"
                                                                        data-aos-anchor=".skills-section" style="width: 85%"
                                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Expert</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">JavaScript</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-info" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="300"
                                                                        data-aos-anchor=".skills-section" style="width: 65%"
                                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Intermidiate</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">PHP</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-info" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="300"
                                                                        data-aos-anchor=".skills-section" style="width: 90%"
                                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Master</div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3"><span class="fw-bolder">Laravel</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-secondary" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="400"
                                                                        data-aos-anchor=".skills-section" style="width: 80%"
                                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Expert</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">MYSQL</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-secondary" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="400"
                                                                        data-aos-anchor=".skills-section" style="width: 90%"
                                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Expert</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">React-Js</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-secondary" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="500"
                                                                        data-aos-anchor=".skills-section" style="width: 40%"
                                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Beginner</div>
                                                            </div>
                                                      </div>
                                                      <div class="mb-3"><span class="fw-bolder">Ajax</span>
                                                            <div class="progress my-2 rounded" style="height: 20px">
                                                                  <div class="progress-bar bg-secondary" role="progressbar"
                                                                        data-aos="zoom-in-right" data-aos-delay="600"
                                                                        data-aos-anchor=".skills-section" style="width: 75%"
                                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Expert</div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
                                    <div class="work-experience-section">
                                          <h2 class="h2 fw-light mb-4">Work Experience</h2>
                                          <div class="timeline">
                                                <div class="timeline-card timeline-card-info" data-aos="fade-in"
                                                      data-aos-delay="0">
                                                      <div class="timeline-head px-4 pt-3">
                                                            <div class="h5">Fullstack Web Developer <span class="text-muted h6">at
                                                                  Livepetal Sysyems</span></div>
                                                      </div>
                                                      <div class="timeline-body px-4 pb-4">
                                                            <div class="text-muted text-small mb-3">January, 2021 - Present</div>
                                                            <div>Got into designing a softaware solution that allows developers to doument and sell their software solutions .</div>
                                                      </div>
                                                </div>
                                                <div class="timeline-card timeline-card-info" data-aos="fade-in"
                                                      data-aos-delay="200">
                                                      <div class="timeline-head px-4 pt-3">
                                                            <div class="h5">Junoir Web Developer <span class="text-muted h6">at  Livepetal Sysyems</span></div>
                                                      </div>
                                                      <div class="timeline-body px-4 pb-4">
                                                            <div class="text-muted text-small mb-3"> May, 2020 - December, 2020</div>
                                                            <div>At the beegining created a software that allow Nigerian sss3 student to practice exam questions, exam included are WAEC, JAM and NECO.</div>
                                                      </div>
                                                </div>
                                                <div class="timeline-card timeline-card-info" data-aos="fade-in"
                                                      data-aos-delay="400">
                                                      <div class="timeline-head px-4 pt-3">
                                                            <div class="h5">Fullstack Web Developer<span class="text-muted h6"> at
                                                                        Bigger Techecnology Networks</span></div>
                                                      </div>
                                                      <div class="timeline-body px-4 pb-4">
                                                            <div class="text-muted text-small mb-3">August, 2020 - Present </div>
                                                            <div>This experinece lead to the development of a music streaming and live shows streaming web app named Music Dynasty.</div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="education">
                                    <div class="education-section">
                                          <h2 class="h2 fw-light mb-4">Education</h2>
                                          <div class="timeline">
                                                <div class="timeline-card timeline-card-success" data-aos="fade-in"
                                                      data-aos-delay="0">
                                                      <div class="timeline-head px-4 pt-3">
                                                            <div class="h5">SSCE <span
                                                                        class="text-muted h6">from Ijapo High School, Akure</span> </div>
                                                      </div>
                                                      <div class="timeline-body px-4 pb-4">
                                                            <div class="text-muted text-small mb-3">2016 - 2019</div>
                                                            <div>I got my senoir school certificate examination .</div>
                                                      </div>
                                                </div>
                                                <div  data-aos="fade-in"
                                                      data-aos-delay="200">
                                                   
                                                            <div>I am an aspirant of the Fedral University of Tecnology Akure (FUTA).</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
                                    <div class="portfolio-section">
                                          <h2 class="h2 fw-light mb-4">Portfolio</h2>
                                          <div class="row g-0">
                                                <div class="col-md-6"><a href="https://dribbble.com/" target="_blank"><img
                                                                  class="img-fluid" src="images/music.png" width="800" height="500"
                                                                  /></a></div>
                                                <div class="col-md-6 d-flex align-items-center" data-aos="fade-left"
                                                      data-aos-delay="100">
                                                      <div class="m-4 mt-md-2">
                                                            <p class="text-teal text-small">PHP / HTML / CSS / JavaScript / SQL</p>
                                                            <h3>Music Streaming Site</h3>
                                                            <p class="text-muted">High responsive, with the ability to host manay users at time, very fast with less data consumption.</p>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="row g-0 portfolio-reverse">
                                                <div class="col-md-6 d-flex align-items-center" data-aos="fade-right"
                                                      data-aos-delay="100">
                                                      <div class="m-4 mt-md-2 text-end">
                                                            <p class="text-teal text-small">PHP / Laravel / Blade / HTML / CSS / JavaScript / SQL</p>
                                                            <h3>School Management Software</h3>
                                                            <p class="text-muted">Web design for popular resturant chain involving
                                                                  complex layouts done in both Photoshop and Sketch. Collaborated with
                                                                  back-end and front-end team for finished product.</p>
                                                      </div>
                                                </div>
                                                <div class="col-md-6"><a href="https://www.behance.net/"
                                                            target="_blank"><img class="img-fluid" src="images/school.png"
                                                                  width="800" height="500" /></a></div>
                                          </div>
                                          <div class="row g-0">
                                                <div class="col-md-6"><a href="https://dribbble.com/" target="_blank"><img
                                                                  class="img-fluid" src="images/project-3.jpg" width="800" height="500"
                                                                  /></a></div>
                                                <div class="col-md-6 d-flex align-items-center" data-aos="fade-left"
                                                      data-aos-delay="100">
                                                      <div class="m-4 mt-md-2">
                                                            <p class="text-teal text-small">Frontend / HTML / CSS / JavaScript</p>
                                                            <h3>E-Commerce Website</h3>
                                                            <p class="text-muted">Built highly performant website for an
                                                                  E-commerce Portal. Worked with back-end team to timely deliver
                                                                  codebase in HTML, CSS and modern JavaScript.</p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="references">
                                    <div class="reference-section">
                                          <h2 class="h2 fw-light mb-4">References</h2>
                                          <div class="row">
                                                <div class="col-md-6">
                                                      <div class="d-flex mb-2">
                                                            <div class="avatar"><img src="images/reference-image-1.jpg" width="60"
                                                                        height="60" /></div>
                                                            <div class="header-bio m-3 mb-0">
                                                                  <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">Aiyana</h3>
                                                                  <p class="text-muted text-small" data-aos="fade-left"
                                                                        data-aos-delay="100">CEO / Web Design Company</p>
                                                            </div>
                                                      </div>
                                                      <div class="d-flex"><i class="text-secondary fas fa-quote-left"></i>
                                                            <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Walter
                                                                  displays exemplary professionalism and is able to take on challenges.
                                                                  He learns quickly and is an asset to any team.</p>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="d-flex mb-2">
                                                            <div class="avatar"><img src="images/reference-image-2.jpg" width="60"
                                                                        height="60" /></div>
                                                            <div class="header-bio m-3 mb-0">
                                                                  <h3 class="h6 mb-1" data-aos="fade-left" data-aos-delay="0">Alexander</h3>
                                                                  <p class="text-muted text-small" data-aos="fade-left"
                                                                        data-aos-delay="100">Front-end Developer / Web Design Company</p>
                                                            </div>
                                                      </div>
                                                      <div class="d-flex"><i class="text-secondary fas fa-quote-left"></i>
                                                            <p class="lead mx-2" data-aos="fade-left" data-aos-delay="100">Walter
                                                                  is a great co-worker and problem solver. He is quick to extend his
                                                                  helping hand and makes a good team player.</p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
                                    <div class="contant-section">
                                          <h2 class="h2 fw-light text mb-4">Contact</h2>
                                          <div class="row mb-4">
                                                <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                                                      <div class="mt-1">
                                                            <div class="h6"><i class="fas fa-phone pe-2 text-muted"
                                                                        style="width:24px;opacity:0.85;"></i> +0718-111-0011</div>
                                                            <div class="h6"><i class="far fa-envelope pe-2 text-muted"
                                                                        style="width:24px;opacity:0.85;"></i> <a
                                                                        href="https://demo.templateflip.com/cdn-cgi/l/email-protection"
                                                                        class="__cf_email__"
                                                                        data-cfemail="5324323f27362113303c3e23323d2a7d303c3e">[email&#160;protected]</a></div>
                                                      </div>
                                                      <div class="mt-5 d-print-none"><form
                                                                  action="https://formspree.io/your@email.com" method="POST">
                                                                  <div class="form-outline mb-4">
                                                                        <input type="text" id="name" class="form-control" required />
                                                                        <label class="form-label" for="name">Name</label>
                                                                  </div>
                                                                  <div class="form-outline mb-4">
                                                                        <input type="email" id="email" class="form-control" required />
                                                                        <label class="form-label" for="email">Email address</label>
                                                                  </div>
                                                                  <div class="form-outline mb-4">
                                                                        <textarea class="form-control" style="resize: none;" id="message"
                                                                              rows="4" required></textarea>
                                                                        <label class="form-label" for="message">Message</label>
                                                                  </div>
                                                                  <button class="btn btn-info btn-block mb-4" type="submit">Send</button>
                                                            </form>
                                                      </div>
                                                </div>
                                                <div class="col-md-7 d-print-none" data-aos="zoom-in"
                                                      data-aos-delay="100"><iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496.9774799129763!2d-73.98032087190995!3d40.765927126473905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f9cfcb250d%3A0xdb570ddcb766e3a8!2sNew%20York%20City%20Center!5e0!3m2!1sen!2sin!4v1614183731149!5m2!1sen!2sin"
                                                            width="500" height="400" style="border:0;width:100%;"
                                                            allowfullscreen="" loading="lazy"></iframe></div>
                                          </div>
                                    </div>
                              </div>
                        </div></div>
            </div>
            <footer class="pt-4 pb-4 text-muted text-center d-print-none">
                  <div class="container">
                        <div class="my-3">
                              <div class="h4">Walter Patterson</div>
                              <div class="footer-nav">
                                    <nav role="navigation">
                                          <ul class="nav justify-content-center">
                                                <li class="nav-item"><a class="nav-link"
                                                            href="https://twitter.com/templateflip" title="Twitter"><i class="fab
                                                                  fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                            href="https://www.facebook.com/templateflip" title="Facebook"><i
                                                                  class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                            href="https://www.instagram.com/templateflip" title="Instagram"><i
                                                                  class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                            href="https://github.com/templateflip" title="Github"><i class="fab
                                                                  fa-github"></i><span class="menu-title sr-only">Github</span></a>
                                                </li>
                                          </ul>
                                    </nav>
                              </div>
                        </div>
                        <div class="text-small">
                              <div class="mb-1">&copy; Material Resume. All rights reserved.</div>
                              <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
                        </div>
                  </div>
            </footer>
            <script data-cfasync="false"
                  src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script
                  src="scripts/mdb.min8d1e.js?ver=1.2.2"></script>
            <script src="scripts/aos8d1e.js?ver=1.2.2"></script>
            <script src="scripts/main8d1e.js?ver=1.2.2"></script>
            <script defer src="../../static.cloudflareinsights.com/beacon.min.js"
                  data-cf-beacon='{" rayId" :" 6802a063baf05d03" ," version" :" 2021.8.0" ," r"
                  :1," token" :" 9b7e49e3e22049349b96a4d30f3c83ad" ," si" :10}'></script>
      </body>

      <!-- Mirrored from demo.templateflip.com/material-resume/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Aug 2021 11:43:27 GMT -->
</html>