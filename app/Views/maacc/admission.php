<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <h1 class="ml4">
                <span class="letters letters-1">Ready</span>
                <span class="letters letters-2">Set</span>
                <span class="letters letters-3">Go</span>
            </h1>
        </div>
        <!-- header -->


        <?php echo view('maacc/layout/header.php'); ?>

        <!-- header END -->
        <div class="page-content">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url(<?php echo base_url('assets/') ?>images/banner/bnr1.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Admission</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-home"></i>
                                <li>Home</li></a></li>
                                <li>Admission</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <!-- inner page banner END -->
            <div class="content-block">

                <div class="section-full bg-white content-inner-2 about-area">
                    <div class="container">
                        <div class="contact-box row">
                            <div class="section-head text-center col-md-12">
                                <h2 class="title text-secondry">Admission Form</h2>
                            </div>
                            <div class="card-body">
                                <form id="admission-form" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="fullName">Full Name</label>
                                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="fatherName">Father's Name</label>
                                                <input type="text" class="form-control" id="father_name" name="father_name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="motherName">Mother's Name</label>
                                                <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="dob">Date of Birth</label>
                                                <input type="date" class="form-control" id="dob" name="dob" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mobileNumber">Mobile Number</label>
                                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" maxlength="10" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email ID</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg 6">
                                            <div class="form-group">
                                                <label for="aadharNumber">Aadhar Number</label>
                                                <input type="text" class="form-control" id="adhar_no" name="adhar_no" maxlength="12" required>
                                            </div>
                                        </div>
                                        <div class="col-lg 6">
                                            <div class="form-group">
                                                <label for="courseName">Course Name</label>
                                                <input type="text" class="form-control" id="course_name" name="course_name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label for="img">Select photo</label>
                                            <input type="file" class="form-control" id="img" name="img">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                    </div>

                                    <div class="text-center">
                                        <input type="text" name="admission_id" id="admission_id" hidden>
                                        <button type="submit" class="btn btn-primary ">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- Content END-->
        <!-- Footer -->
        <?php echo view('maacc/layout/footer.php'); ?>

        <!-- Footer END-->
        <button class="scroltop fa fa-chevron-up"></button>
    </div>

    <!-- LOADING JS -->
    <script>
        $(function() {
            $('.marquee').marquee({
                speed: 100,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'left',
                duplicated: true,
                pauseOnHover: true
            });
            $('.marquee1').marquee({
                speed: 50,
                gap: 0,
                delayBeforeStart: 0,
                direction: 'up',
                duplicated: true,
                pauseOnHover: true
            });
        });


        // $("#admission-form").submit(function(e) {

        //     e.preventDefault(); // avoid to execute the actual submit of the form.

        //     var form = $(this);
        //     var actionUrl = form.attr('action');
        //     $.ajax({
        //         type: "POST",
        //         url: "<?php echo base_url(); ?>addAdmission",
        //         data: form.serialize(), // serializes the form's elements.
        //         success: function(data) {
        //             Swal.fire({
        //                 title: "Success!",
        //                 text: "Data saved successfully.",
        //                 icon: "success",
        //                 confirmButtonText: "OK"
        //             }).then(function() {
        //                 // Reload the page
        //                 location.reload();
        //             });
        //         },
        //         error: function(xhr, status, error) {
        //             // Handle errors (optional)
        //             console.error(xhr.responseText);
        //             Swal.fire({
        //                 title: 'Error!',
        //                 text: 'An error occurred.',
        //                 icon: 'error'
        //             });
        //         }
        //     });

        // });

        $(document).ready(function() {
            $("#admission-form").submit(function(e) {
                e.preventDefault();
                // $('#btn-heading').attr('disabled', true);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>addAdmission",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    success: function(data) {
                        Swal.fire({
                            title: "Success!",
                            text: "Data saved successfully.",
                            icon: "success",
                            confirmButtonText: "OK"
                        }).then(function() {
                            // Reload the page
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle errors (optional)
                        console.error(xhr.responseText);
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred.',
                            icon: 'error'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>