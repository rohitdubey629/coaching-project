<!DOCTYPE html>
<html lang="en">


<body id="page-top">
    <div id="wrapper">
        <?php echo view('admin/layout/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php echo view('admin/layout/header') ?>
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <!-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card flat-card">
                            <div class="row-table">
                                <div class="col-sm-12 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                        </div>
                                        <div class="col-sm-4 text-md-center">
                                            <h5><?php echo !empty($total_visiter) ? $total_visiter[0]['total_visiter'] : '0';
                                                ?></h5>
                                            <span>Visitors</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-table">
                                <div class="col-sm-12 card-body br">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                        </div>
                                        <div class="col-sm-6 text-md-center">
                                            <h5><?php //echo !empty($enqiury_data) ? count($enqiury_data) : '0'; 
                                                ?></h5>
                                            <!-- <span>Total Feedback Record</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-12">
                        <div class="card flat-card">
                            <div class="row-table">
                                <div class="col-sm-12 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                        </div>
                                        <div class="col-sm-4 text-md-center">
                                            <h5><?php

                                                echo !empty($total_enquiry) ? $total_enquiry : '0';
                                                ?></h5>
                                            <span>Total Enquiry Record </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-table">
                                <div class="col-sm-12 card-body br">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <i class="icon feather icon-phone-incoming text-c-blue mb-1 d-block"></i>
                                        </div>
                                        <div class="col-sm-4 text-md-center">
                                            <h5><?php echo !empty($call_record) ? $call_record[0]['call_visiter'] : '0';
                                                ?></h5>
                                            </h5>
                                            <span>Total Call Click </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo view('admin/layout/footer') ?>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>





    <div class="">
        <div id="heading" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="heading_title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" id="homescrollbarfrm" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="div-msg-save" class="alert  alert-dismissible fade show" style="display:none"></div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Heading</label>
                                        <input type="text" class="form-control" id="home-heading" name="heading" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Course Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Start Date</label>
                                        <input type="text" class="form-control" id="start_date" name="start_date" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Year Old</label>
                                        <input type="text" class="form-control" id="year_old" name="year_old" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Class Size</label>
                                        <input type="text" class="form-control" id="class_size" name="class_size" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Course Duration</label>
                                        <input type="text" class="form-control" id="course_duration" name="course_duration" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Class Time</label>
                                        <input type="text" class="form-control" id="class_time" name="class_time" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="floating-label">Tution Fees</label>
                                        <input type="text" class="form-control" id="tution_fees" name="tution_fees" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="floating-label">Content</label>
                                        <input type="text" class="form-control" id="home-content" name="content" required>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="imageFeedback">
                                    <div class="form-group">
                                        <label class="floating-label">Add Image</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input upload" id="img1" name="img1">
                                                <label class="custom-file-label" for="img1">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback" style="display:block;">Image Width and Height should be 765*390</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="heading_id" id="heading_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-heading"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $('#heading').on('hidden.bs.modal', function() {
        $('#homescrollbarfrm')[0].reset();
        $("#heading_id").val('');
    });

    function addHomeScrollbar() {
        $("#heading_title").html("Add Home Scrollbar");
        $("#heading").modal("show");
        $("#btn-heading").html("Add");
        $("#img1").attr("required", "true");
    }

    function updateHomeSlider(id) {

        $("#heading_title").html("Update Course")
        $("#heading").modal("show");
        $("#btn-heading").html("Update")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('updateCourses') ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                console.log(response);
                $("#heading_id").val(response.data['id']);
                $("#home-heading").val(response.data['heading']);
                $("#name").val(response.data['name']);

                $("#home-content").val(response.data['content']);
                $("#start_date").val(response.data['start_date']);
                $("#year_old").val(response.data['year_old']);
                $("#class_size").val(response.data['class_size']);
                $("#course_duration").val(response.data['course_duration']);
                $("#class_time").val(response.data['class_time']);
                $("#tution_fees").val(response.data['tution_fees']);
                // $("#img1").val(response.img1);
            }
        });
    }

    var _URL = window.URL || window.webkitURL;
    const error_list = [];
    $('.upload').on('change', function() {
        var size = Math.round((this.files[0].size / 1024));
        var id = $(this).attr("id");
        if (size < 1024) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(file);
                img.onload = function() {
                    height = this.height;
                    width = this.width;
                    window.URL.revokeObjectURL(img.src);
                    if (width >= "765" && height == "390") {
                        //get the index of id in array
                        const index = error_list.indexOf(id);
                        if (index > -1) {
                            error_list.splice(index, 1);
                        }
                        //check the errorlist if 0 then there is no problem
                        if (error_list.length == "0") {
                            $('#btn-home_slider').attr('disabled', false);
                        }
                    } else {

                        // swal("Invalid Widht And Height", "Image width and heigth should be 1920*1067", "error");
                        Swal.fire({
                            title: "error!",
                            text: "Invalid Widht And Height Image width and heigth should be 765*390",
                            icon: "error",
                            confirmButtonText: "OK"
                        }).then(function() {
                            // Reload the page
                            location.reload();
                        });

                        // $('#btn-home_slider').attr('disabled', true);
                        error_list.push(id);
                    }
                };
                img.src = objectUrl;
            }
        } else {
            alert('File too Big, please select a file less than 1mb');
            // $('#btn-home_slider').attr('disabled', true);
            error_list.push(id);
        }
    });




    $(document).ready(function() {
        $("#homescrollbarfrm").submit(function(e) {
            e.preventDefault();
            // $('#btn-heading').attr('disabled', true);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('addCourses') ?>",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success: function(responce) {
                    $("#specialities").scrollTop(0);
                    if (responce.status) {
                        $("#btn-heading").html("Please Wait....")
                        $('#div-msg-save').addClass("alert-success").removeClass("alert-danger").html(responce.msg).slideDown(500).delay(2000).slideUp(function() {
                            window.location.reload();
                        });
                    } else {
                        // $('#btn-heading').attr('disabled', false);
                        $('#div-msg-save').addClass("alert-danger").removeClass("alert-success").html(responce.msg).slideDown(500).delay(5000).slideUp(500);
                    }
                }
            });
        });
    });
    // $('#myModal').on('shown.bs.modal', function () {
    //     $('#myInput').trigger('focus')
    // })
</script>

</html>