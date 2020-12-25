<!DOCTYPE html>
<html lang="en">

<head>
      <link rel="icon" type="image/png" href="image/cisco.png">
      <title>Cisco Networking Academy</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?= base_url('./assets/css/style.css'); ?>">
</head>

<body>

      <!-- Navigation -->
      <nav class="navbar navbar-expand-sm bg-white navbar-white">
            <img src="<?= base_url('./assets/image/cisco.png'); ?>" alt="cisco" height="70px" width="70px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Course</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">Networking</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">OS & IT</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Programming</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Internet of Things</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="nav-item dropdown m-1" aria-hidden="true">
                              <a class="nav-link m-10" href="#" data-toggle="dropdown" style="color:#575757">Careers</a>
                              <ul class="dropdown-menu">
                                    <li>
                                          <a class="dropdown-item" href="#">Employment</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Webinar</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Career Advice</a>
                                    </li>
                                    <li>
                                          <a class="dropdown-item" href="#">Pathway</a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </div>
            <div class="header-toolbar header-lang mr-3">
                  <div class="region region-header-languange">
                        <section id="block-lang-dropdown-languange" class="block block-lang-dropdown clearfix">
                              <form class="lang_dropdown_form language ddsDefault" id="lang_dropdown_form_language" action="/" method="post" accept-charset="UTF-8">
                                    <div>
                                          <div class="form-item form-item-lang-dropdown-select form-type-select form-group">
                                                <div class="form-group__text select"><select style="width:120px" class="lang-dropdown-select-element form-control form-select" id="lang-dropdown-select-language" name="lang_dropdown_select">
                                                            <option value="en" selected="selected">English</option>
                                                            <option value="ar">العربية</option>
                                                            <option value="zh-hans">简体中文</option>
                                                            <option value="zh-hant">繁體中文</option>
                                                            <option value="fr">Français</option>
                                                            <option value="ja">日本語</option>
                                                            <option value="pt-br">Português</option>
                                                            <option value="ru">Русский</option>
                                                            <option value="es">Español</option>
                                                      </select></div>
                                          </div><input type="hidden" name="en" value="/" />
                                    </div>
                              </form>
                        </section>
                  </div>

            </div>
            <div>
                  <a href="<?= base_url('login'); ?>">LOGIN</a>
            </div>
      </nav>

      <!-- Hero 1 -->
      <section>
            <div class="hero1 container-fluid">
                  <div class="row justify-content-between">
                        <div class="col align-self-center">
                              <div class="heroText p-3">
                                    <h3 class="mb-2">Empowering all people with career possibilities</h3>
                                    <p class="mb-5">Cisco Networking Academy transforms the lives of learners, educators and communities through the power of technology, education and career opportunities. Available to anyone, anywhere.</p>
                                    <p class="mb-5">We’re currently providing assistance for you to teach and learn remotely.</p>
                                    <button class="btn btn-primary">Explore remote tools and tips</button>
                              </div>
                        </div>
                        <div class="col">
                              <img width="790" src="<?= base_url('./assets/image/Gambar1.JPG'); ?>" alt="cisco">
                        </div>
                  </div>
            </div>
      </section>

      <!-- Hero 2 -->
      <section class="hero2">
            <div class="container p-5">
                  <p class="headingTextSection2 mb-4">An incredible opportunity is waiting for you. Technology is changing the world by connecting billions of devices and improving how we live, work, play and treat our planet. No industry is immune. Are you ready to change your life, and possibly
                        make the world a better place?</p>
                  <div class="row mt-5">
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/networking.png') ?>" alt="networking">
                                          <p class="subtitleImage">Networking</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col">
                              <center>
                                    <a href="#">
                                          <img height="80" src="<?= base_url('./assets/image/osit.png'); ?>" alt="OSIT">
                                          <p>OS & IT</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/programming.png'); ?>" alt="programming">
                                          <p>Programming</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/iot.png'); ?>" alt="iot">
                                          <p>Internet of Things</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/icon-ia.png'); ?>" alt="Infracstructure">
                                          <p>Infracstructure Automation</p>
                                    </a>
                        </div>
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/security.png'); ?>" alt="security">
                                          <p>Cybersecurity</p>
                                    </a>
                              </center>
                        </div>
                        <div class="col">
                              <center>
                                    <a class="align-items-center" href="#">
                                          <img height="80" src="<?= base_url('./assets/image/pt.png'); ?>" alt="packet tracer">
                                          <p>Packet Tracer</p>
                                    </a>
                              </center>
                        </div>
                  </div>
            </div>
      </section>

      <!-- Hero 3 -->
      <section>
            <div class="enrollHero container-fluid p-5 mb-5">
                  <center>
                        <div class="row d-flex justify-content-center align-self-center">
                              <p class="cyberHeroes">The world needs Cyber Superheroes. Will you answer the call?</p>
                              <button type="button" class="btnEnroll btn-outline-primary">Enroll Now</button>
                        </div>
                  </center>
            </div>
      </section>

      <!-- Hero 4 -->
      <section>
            <div class="hero5">
                  <center class="mb-4">
                        <h2 style="font-size: 40px;">Two great ways to take a course</h2>
                  </center>
                  <div class="container">
                        <div class="row">
                              <div class="col">
                                    <h5 class="mb-3">Online learning</h5>
                                    <p class="mb-5">Online courses are self-paced and use the same curriculum taught in Networking Academy classrooms around the world. A few of our more popular online course categories:
                                    </p>
                                    <div class="row">
                                          <div class="col-2">
                                                <img width="60" src="<?= base_url('./assets/image/iot.png'); ?>" alt="internet of things">
                                          </div>
                                          <div class="col">
                                                <h6 class="titleCourse">Internet of things</h6>
                                                <p class="descriptionDetail">1 course</p>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-2">
                                                <img width="60" src="<?= base_url('./assets/image/osit.png'); ?>" alt="Linux">
                                          </div>
                                          <div class="col">
                                                <h6 class="titleCourse">Linux</h6>
                                                <p class="descriptionDetail">4 course</p>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-2">
                                                <img width="60" src="<?= base_url('./assets/image/security.png'); ?>" alt="Security">
                                          </div>
                                          <div class="col">
                                                <h6 class="titleCourse">Security</h6>
                                                <p class="descriptionDetail">2 course</p>
                                          </div>
                                    </div>
                              </div>
                              <div class="col">
                                    <h5 class="mb-3">In-person learning</h5>
                                    <p class="mb-3">The majority of our students take courses in-person at an education institution in their local community. This is the ultimate way to get hands-on experience as you gain career ready skills. Start your journey today by searching
                                          for the location nearest you and reaching out to them directly.
                                    </p>
                                    <ul class="mb-5">
                                          <li>Over 11,800 locations globally</li>
                                          <li>2.31 million students enrolled just last year</li>
                                          <li>Courses align to internationally recognized certifications</li>
                                    </ul>
                                    <form>
                                          <div>
                                                <label for="inputLocation" class="form-label">Find a location near you</label>
                                                <div class="input-group">
                                                      <input style="margin-right: 20px;" type="text" class="form-control" placeholder="City & State, Province or District, or Postal Code" aria-label="City & State, Province or District, or Postal Code">
                                                      <span class="input-group-btn">
                                                            <button type="button" class="btnSearch btn-primary">Search</button>
                                                      </span>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </section>

      <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="image/Gambar1.JPG" class="card-img-top" alt="Cisco">
                        <div class="card-body">
                            <p class="card-text">Trained 1,000+ students. Most are now working in enterprise level organizations
                            </p>
                            <a href="#" class="btn btn-primary">See Sarada's Story</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="image/Gambar1.JPG" class="card-img-top" alt="Foto dimas">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="image/Gambar1.JPG" class="card-img-top" alt="Cisco">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</body>

</html>

</html>