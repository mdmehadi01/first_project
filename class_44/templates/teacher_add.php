<?php

error_reporting(0);

?>


<main id="main" class="main">



    <div class="pagetitle">
      <h1>Add New Teacher</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Teacher_list</li>
          <li class="breadcrumb-item active">Add_Teacher</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add_Teacher
              <?php 
            if (isset($_REQUEST['add_status'])){

            
                    if ($_REQUEST['add_status'] == 1) {
                ?>

                <script>                  
                    Swal.fire(
                    'Success !',
                    'Student Update Successfull',
                    'success'
                  )
                </script>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                 Student Update Successfull !
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                

                    if ($_REQUEST['add_status'] == 0) {
                ?>

                  <script>                  
                    Swal.fire(
                    'Error !',
                    'Something Wrong',
                    'error'
                  )
                  </script>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Something wrong !
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php 
                    }

                      }
                  
                ?>
              </h5>

              <!-- Horizontal Form -->
              <form action="controller/student.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Teacher name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Subject</label>
                  <div class="col-sm-9">
                    <input type="text" name="subject" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">email</label>
                  <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Insert Student" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->