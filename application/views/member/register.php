<!DOCTYPE html>
<html>

<head>
      <title> Registration</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="<?= base_url('./assets/css/register.css'); ?>">
</head>

<body>

      <section class="bodyHero mb-2 mt-5 p-5 shadow p-3 mb-3 bg-white rounded">
            <center>
                  <img src="<?= base_url('./assets/image/cisco.png'); ?>" class="img-fluid mb-2" alt="Logo Cisco" heigt="70px" width="70px">
            </center>
            <div class="container">
                  <div class="row">
                        <div class="col">
                              <h3 class="logText mb-2" align="center">
                                    Create Account
                              </h3>
                              <p>Already have an account? <a href="<?= base_url('login'); ?>"> Sign In</a></p>
                        </div>
                  </div>
            </div>
            <form method="post" action="<?= site_url('register/registeruser'); ?>">
                  <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group mb-4">
                              <input class="inputEmail" type="text" id="email" name="email" value="<?= set_value('email'); ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="first_name" class="form-label">First Name</label>
                        <div class="input-group mb-4">
                              <input class="inputfirstname" type="text" id="first_name" name="first_name" value="<?= set_value('first_name'); ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="last_name" class="form-label">Last Name</label>
                        <div class="input-group mb-4">
                              <input class="inputlastname" type="text" id="last_name" name="last_name" value="<?= set_value('last_name'); ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="country" class="form-label">Country or Region</label>
                        <div class="input-group mb-4">
                              <input class="inputCountry" type="text" id="country" name="country" value="<?= set_value('country'); ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="company" class="form-label">Company</label>
                        <div class="input-group mb-4">
                              <input class="inputcompany" type="text" id="company" name="company" value="<?= set_value('company'); ?>">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="password1" class="form-label">Password</label>
                        <div class="input-group mb-4">
                              <input class="inputpassward" type="password" id="password1" name="password1">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                        <label for="password2" class="form-label">Confirm Password</label>
                        <div class="input-group mb-4">
                              <input class="inputcomfirmpassword" type="password" id="password2" name="password2">
                        </div>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <p> Would you like update about cisco promotion, product and service</p>
                  <p>email</p>

                  <p> Would you like update about cisco promotion, product and service</p>
                  <p>email</p>

                  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Yes">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                  </div>
                  <div class="form-check form-check-inline">
                        <p>By clicking Register, I confirm that I have read and agree to the <a href="login.html"> Cisco
                                    Online Privacy Statement</a> and the <a href="login.html"> Cisco Web Site Terms and
                                    Conditions.</a></p>

                        <center>
                              <button type="submit" class="btn btn-primary">Register</button>
                        </center>
                  </div>
            </form>
</body>

</html>