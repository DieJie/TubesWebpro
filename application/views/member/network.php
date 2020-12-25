<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?= base_url('./assets/css/page.css'); ?>">
</head>

<body>
      <nav class="navbar navbar-expand-sm bg-white navbar-white">
            <img src="<?= base_url('./assets/image/cisco.png'); ?>" alt="cisco" height="70px" width="70px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">My Netacad</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">I'm Learning</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Courses</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">Networking</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Internet of Things</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">OS & IT</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Infracstructure Automation</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Programming</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Business</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Cyber Security</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Packet Tracer</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">All Courses</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Careers</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">Talent Bridge Program</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Employment Opportunities</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Webinar</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Careers Advice</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Pathway</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Bridge & Certifications</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Success Stories</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">About Us</a>
                        </li>
                  </ul>
            </div>
            <div class="header-toolbar header-user">
                  <div class="region region-header-netacad-user">
                        <section id="block-menu-menu-netacad-user-menu" class="block block-menu clearfix">
                              <ul class="nav navbar-nav list list list--inline">
                                    <li class="first last expanded dropdown">
                                          <a href="#" class="dropdown-toggle nav-link  nolink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('email'); ?></a>
                                          <ul class="dropdown-menu">
                                                <li>
                                                      <a href="#">My Profile</a>
                                                </li>
                                                <li>
                                                      <a href="#">Certificate and Letters</a>
                                                </li>
                                                <li>
                                                      <a href="#">Discounts</a>
                                                </li>
                                                <li>
                                                      <a href="#">Badges</a>
                                                </li>
                                                <li>
                                                      <a href="<?= base_url('login/logout'); ?>">Log Out</a>
                                                </li>
                                          </ul>
                                    </li>
                              </ul>
                        </section>
                  </div>
            </div>
      </nav>
      <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('home'); ?>">Courses</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Networking</li>
            </ol>
      </nav>
      <section>
            <div class="hero1 container-fluid">
                  <div class="row">
                        <div class="col">
                              <div class="heroText p-5">
                                    <h1 class="mb-5">Networking courses</h1>
                                    <p style="font-size: larger;" class="mb-3">Thanks to new technologies, networks are becoming more intelligent, programmable and software-driven. Networking Academy courses support this evolution and expose learners to new concepts and hands-on experiences. Best of all,
                                          courses are tied to CCNA certifications—among the most in-demand in the industry, according to IDC. Get started by choosing a course today.
                                    </p>
                              </div>
                        </div>
                        <div class="col-lg">
                              <iframe height="600" width="1080" src="https://www.youtube.com/embed/dlFyNDbzQwg" allowfullscreen></iframe>
                        </div>
                  </div>
            </div>
      </section>
      <section class="hero2">
            <div class="container p-5">
                  <center>
                        <h3 class="headingTextSection2 mb-4">Networking at a glance</h3>
                  </center>
                  <div class="row mt-5">
                        <div class="col-3">
                              <center>
                                    <a>
                                          <img height="80" src="<?= base_url('./assets/image/good.png'); ?>" alt="Good">
                                          <h3>A good for you if</h3>
                                          <p>you enjoy a mix of detailed planning, implementation and business-related matters.</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col-3">
                              <center>
                                    <a>
                                          <img height="80" src="<?= base_url('./assets/image/sample.png'); ?>" alt="Sample">
                                          <h4>Sample job titles</h4>
                                          <p>Network Administrator, Network Designer, Network Engineer</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col-3">
                              <center>
                                    <a>
                                          <img height="80" src="<?= base_url('./assets/image/job.png'); ?>" alt="job">
                                          <h4>Projected job growth</h4>
                                          <p>An increase of 26% by 2020</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col-3">
                              <center>
                                    <a>
                                          <img height="80" src="<?= base_url('./assets/image/who.png'); ?>" alt="Who">
                                          <h4>Who hires for this skill?</h4>
                                          <p>Any business managing large networks, Cisco and its partners.</p>
                                    </a>
                              </center>
                        </div>
                  </div>
            </div>
      </section>
      <section>
            <div class="superHero container-fluid p-5 mb-5">
                  <center>
                        <div class="row d-flex justify-content-center align-self-center">
                              <p class="cyberHeroes">"I found out I can still learn about networking, even after all these years and with a full time job too. The Networking Academy tools are great for beginners in network hardware maintenance and management who are motivated to learn
                                    all they can in their spare time."</p>
                              <p class="heroes">Bruce Cudmore, Netacad Alum</p>

                        </div>
                  </center>
            </div>
      </section>
      <section class="courseCard mb-5">
            <div class="container">
                  <div class="row">
                        <?php
                        foreach ($course as $row) {
                        ?>
                              <div class="col-sm-6">
                                    <div class="card">
                                          <div class="card-body">
                                                <p class="card-text"><?= $row->subtitle; ?></p>
                                                <div class="container mb-3">
                                                      <div class="row">
                                                            <div class="col-lg p-0">
                                                                  <h5 style="color: #0a79a8;" class="card-title"><?= $row->title; ?></h5>
                                                            </div>
                                                            <div class="col-2 align-self-center">
                                                                  <img height="40" width="40" src="<?= base_url('./assets/image/networking.png'); ?>" alt="">
                                                            </div>
                                                      </div>
                                                </div>
                                                <p class="card-text"><?= $row->description; ?></p>
                                                <a href="#" style="background-color: #005073; border: none; border-radius: 30px;" class="btn btn-primary float-right px-4">Learn More</a>
                                          </div>
                                    </div>
                              </div>
                        <?php
                        }
                        ?>
                        <!-- <div class="col-sm-6">
                              <div class="card">
                                    <div class="card-body">
                                          <p class="card-text">Instructor led</p>
                                          <div class="container mb-3">
                                                <div class="row">
                                                      <div class="col-lg p-0">
                                                            <h5 style="color: #0a79a8;" class="card-title">CCNA: Introduction to Networks</h5>
                                                      </div>
                                                      <div class="col-2 align-self-center">
                                                            <img height="40" width="40" src="<?= base_url('./assets/image/networking.png'); ?>" alt="">
                                                      </div>
                                                </div>
                                          </div>
                                          <p class="card-text">The first course in a 3-course CCNA series designed to prepare you for entry-level networking job</p>
                                          <a href="#" style="background-color: #005073; border: none; border-radius: 30px;" class="btn btn-primary float-right px-4">Learn More</a>
                                    </div>
                              </div>
                        </div> -->
                  </div>
            </div>
      </section>

</body>

</html>