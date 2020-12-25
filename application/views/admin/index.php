<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

      <title>Admin</title>

</head>

<body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded" style="background-color: white;">
            <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                        <img width="100" src="<?= base_url('assets/images/') . 'cisco.png' ?> " alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Courses</a>
                              </li>
                        </ul>
                        <div>
                              <a class="dropdown-item" href="<?= base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                              </a>
                        </div>
                  </div>
            </div>
      </nav>

      <!-- Body 1 -->
      <section>
            <div class="d-flex flex-row-reverse bd-highlight me-5">
                  <a href="<?= base_url('admin/addproduct'); ?>">
                        <button type="button" class="btn btn-primary px-4 py-2">Add Course</button>
                  </a>
            </div>
            <div class="m-5">
                  <table class="table table-striped">
                        <thead>
                              <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <?php
                        $number = 1;
                        foreach ($course as $row) {
                        ?>
                              <tbody>
                                    <tr>
                                          <th scope="row"><?= $number++ ?></th>
                                          <td><?= $row->title; ?></td>
                                          <td><?= $row->subtitle; ?></td>
                                          <td><?= $row->description; ?></td>
                                          <td>
                                                <a href="<?= base_url('admin/editcourse/') . $row->id; ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?= base_url('admin/deletecourse/') . $row->id; ?>" class="btn btn-danger">Hapus</a>
                                          </td>
                                    </tr>
                              </tbody>
                        <?php
                        }
                        ?>
                  </table>
            </div>
      </section>

</body>

</html>