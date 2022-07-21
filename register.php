<?php

$viewTitle='Register';
require 'init/header.php';
require 'init/config.php';
require 'init/function.php';
?>


    <section class="min-vh-50 shadow">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="init/img/undraw_the_world_is_mine_re_j5cr.svg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start card ">
                        <h1 class=" fw-bold  my-4 card-header text-center col">Register </h1>
                    </div>
                    <form method="POST" action="init/function.php"  class="shadow p-5 border rounded">
                        <!-- name input -->
                        <div class="form-outline mb-2">
                            <input type="text" name="user"  class="form-control form-control-lg" placeholder="Enter your name"/>
                            <label class="form-label" >Name</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <input type="email"  name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-2">
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2 row">
                            <button type="submit" class="btn btn-primary btn-lg col " name="register" style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-success">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
include_once('init/footer.php');