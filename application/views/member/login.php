<!DOCTYPE html>

<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign in to Cisco</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url('./assets/css/login.css'); ?>">
</head>

<body>
      <!-- Body -->
      <section class="bodyHero mb-2 mt-5 p-5 shadow p-3 mb-3 bg-white rounded">
            <center>
                  <img src="<?= base_url('./assets/image/cisco.png'); ?>" class="img-fluid mb-2" alt="Logo Cisco" heigt="70px" width="70px">
            </center>
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <h3 class="logText mb-2" align="center">
                                    Welcome
                              </h3>
                              <br>
                              <?= $this->session->flashdata('message'); ?>
                              <br>
                              <form method="post" class="form mb-4" action="<?= base_url('login/loginuser'); ?>">
                                    <label for="email" class="form-label">Email or username</label>
                                    <div class="input-group mb-4">
                                          <input class="inputEmail" type="text" id="email" name="email">
                                    </div>
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group mb-4">
                                          <input class="inputPassword" type="password" id="password" name="password">
                                    </div>
                                    <center>
                                          <button type="submit" class="btn btn-primary">Sign In</button>
                                    </center>
                              </form>
                              <center>
                                    <a href="<?= base_url('register'); ?>">
                                          <h6>Sign Up</h6>
                                    </a>
                              </center>
                        </div>
                  </div>
            </div>
      </section>
      <center>
            <img src="<?= base_url('./assets/image/logo-log.png'); ?>" class="img-fluid mb-2" alt="Logo one id" heigt="40px" width="40px">
      </center>
      <section class="">
            <center>
                  <div class="row col-8 mt-5">
                        <div class="col ">
                              <a href="">Terms & Conditions</a> |
                        </div>
                        <div class="col">
                              <a href="">Privacy</a> |
                        </div>
                        <div class="col">
                              <a href="">Feedback</a> |
                        </div>
                        <div class="col">
                              <a href="">Cookies</a> |
                        </div>
                        <div class="col">
                              <a href="">Trademarks</a>
                        </div>
                  </div>
            </center>
      </section>
</body>

</html>