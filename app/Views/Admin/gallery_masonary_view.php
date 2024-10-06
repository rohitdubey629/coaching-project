<!DOCTYPE html>
<html lang="en">


<body id="page-top">
    <div id="wrapper">
        <?php echo view('admin/layout/sidebar') ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php echo view('admin/layout/header') ?>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn  btn-primary" onclick="addHomeScrollbar();">Add Gallery Masonary</button>
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($homeSlider)) {
                                                foreach ($homeSlider as $key => $value) { ?>
                                                    <tr class="table-warning">
                                                        <td><?php echo $value['id'] ?></td>
                                                        <td><?php echo $value['title'] ?></td>

                                                        <td><img src="<?php echo base_url(); ?>uploads/gallery_masonary/<?php echo $value['img1']; ?>" style="height:100px; width:100;"></td>
                                                        <td> <button type="button" class="btn  btn-primary" onclick="updateHomeSlider(<?php echo $value['id'] ?>);">Edit</button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
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
                    <form method="post" id="galleryGridFrm" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="div-msg-save" class="alert  alert-dismissible fade show" style="display:none"></div>
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="form-group">
                                        <label class="floating-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="imageFeedback">
                                    <div class="form-group">
                                        <label class="floating-label">Add Image</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input upload" id="img1" name="img1" required>
                                                <label class="custom-file-label" for="img1">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback" style="display:block;">Image should be Width>=600 and Height<=810 </div>
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
        $("#heading_title").html("Add Gallery Masonary");
        $("#heading").modal("show");
        $("#btn-heading").html("Add");
        $("#img1").attr("required", "true");
    }

    function updateHomeSlider(id) {

        $("#heading_title").html("Update Gallery Masonary")
        $("#heading").modal("show");
        $("#btn-heading").html("Update")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('updateGalleryMasonary') ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                console.log(response);
                $("#heading_id").val(response.data['id']);
                $("#title").val(response.data['title']);
                $("#img1").val(response.img1);
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
                    if (width >= "600" && height <= "810") {
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
                            text: "Invalid Widht And Height Image should be width>=600 and heigth<=810",
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
        $("#galleryGridFrm").submit(function(e) {
            e.preventDefault();
            // $('#btn-heading').attr('disabled', true);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('addGalleryMasonary') ?>",
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