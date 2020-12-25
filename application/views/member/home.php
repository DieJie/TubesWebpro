<!DOCTYPE html>
<html lang="en">

<head>
      <title>Global Netacad Instance</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?= base_url('./assets/css/style.css'); ?>">
</head>

<body>
      <nav class="navbar navbar-expand-sm bg-white navbar-white">
            <img src="<?= base_url('../assets/image/cisco.png'); ?>" alt="cisco" height="70px" width="70px">
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
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Resources</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">Certifications Exams & Discounts</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Find a Academy</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Download Packet Tracer</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">All Resources</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Alumni Courses</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Courses</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="<?= base_url('network'); ?>">Networking</a>
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
                  <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url(); ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">I'm Learning</li>
            </ol>
      </nav>
      <div class="container-fluid">
            <div class="row">
                  <div class="col">
                        <h1 class="mb-5 ml-3">I'm Learning</h1>
                        <p class="ml-3" style="font-size: x-large;">Courses I've Enrolled In</p>
                        <p class="ml-3" style="font-size: large;">Selected criteria doesn't match any courses.</p>
                  </div>
                  <div class="col">
                        <div class="container">
                              <div class="row">
                                    <div class="col-3">
                                          <Button class="btn btn-primary">Updating Status</Button>
                                    </div>
                                    <div class="col-3">
                                          <button class="btn btn-primary">Browse Course Catalog</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="back mt-3">
            <a href="https://www.netacad.com/portal/user/4889737/learning-transcript" class="">View Completed and Ended Courses in your NetAcad Learning Transcript</a>
      </div>
      <br>
      <hr>
      <div class="container-fluid">
            <div class="row">
                  <div class="col">
                        <h1 class="mb-4 ml-3"> News & Updates</h1>
                  </div>
            </div>
            <div class="card-deck">
                  <div class="card">
                        <img class="card-img-top" src="<?= base_url('./assets/image/feedback.JPG'); ?>" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="card-footer">
                              <a href="https://www.netacad.com/portal/news/s/S-Dec2020_Survey">Tell us how it's going</a>
                        </div>
                  </div>
                  <div class="card">
                        <img class="card-img-top" src="<?= base_url('./assets/image/look.JPG'); ?>" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="card-footer">
                              <a href="https://www.netacad.com/portal/news/s/improve-your-power-persuasion">Improve Your Power of Persuasion</a>
                        </div>
                  </div>
                  <div class="card">
                        <img class="card-img-top" src="<?= base_url('./assets/image/see.JPG'); ?>" alt="Card image cap">
                        <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="card-footer">
                              <a href="https://www.netacad.com/portal/news/s/S-Build_Skills">Building Skills to Match Your Dream Job</a>
                        </div>
                  </div>
            </div>
      </div>
      <section class="body3 mt-5">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col col-2">
                              <ul>
                                    <li>
                                          <a href="#">Courses</a>
                                    </li>
                                    <li>
                                          <a href="#">About Us</a>
                                    </li>
                                    <li>
                                          <a href="#">Find an Academy</a>
                                    </li>
                                    <li>
                                          <a href="#">Support</a>
                                    </li>
                              </ul>
                        </div>
                        <div class="col col-2">
                              <ul>
                                    <li>
                                          <a href="#">Teach with us</a>
                                    </li>
                                    <li>
                                          <a href="#">Hire with us</a>
                                    </li>
                                    <li>
                                          <a href="#">Partner with us</a>
                                    </li>

                              </ul>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col">
                              <ul style="font-style: italic; font-size: medium;">Cisco Networking Academy is a global IT and cybersecurity education program that partners with learning institutions around the world to empower all people with career opportunities. It is Cisco’s largest and longest-running Cisco
                                    Corporate Social Responsibility program.</ul>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col">
                              <ul> Terms and Conditions</ul>
                        </div>
                        <div class="col">
                              <ul>Privacy Statement</ul>
                        </div>
                        <div class="col">
                              <ul> Cookie Policy</ul>
                        </div>
                        <div class="col">
                              <ul> Data Protection</ul>
                        </div>
                        <div class="col">
                              <ul> Accessibility</ul>
                        </div>
                        <div class="col">
                              <ul> Trademarks</ul>
                        </div>
                  </div>
            </div>
      </section>
</body>