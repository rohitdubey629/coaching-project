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
                                <h3>LINKS</h3>
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Acadmic Name</th>
                                                <th>Calling Number</th>
                                                <th>Whatsapp</th>
                                                <th>Facebook Link</th>
                                                <th>Instagram Links </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            if (!empty($links)) {
                                                $styleClass = array("table-warning", "table-success");
                                                $i = 0;
                                                foreach ($links as $val) {
                                                    if ($i % 2 == 0) {
                                                        $style = $styleClass['1'];
                                                    } else {
                                                        $style = $styleClass['0'];
                                                    }
                                            ?>
                                                    <tr class="<?php echo $style;
                                                                ?>">
                                                        <td><?php echo $val['id'];
                                                            ?></td>
                                                        <td><?php echo $val['acadmin_name'];
                                                            ?></td>
                                                        <td><?php echo $val['phone1'];
                                                            ?></td>
                                                        <td><?php echo $val['wphone1'];
                                                            ?></td>
                                                        <td><?php echo $val['facebook'];
                                                            ?></td>
                                                        <td><?php echo $val['insta'];
                                                            ?></td>
                                                        <td> <button type="button" class="btn  btn-primary" onclick="updateHomeSlider(<?php echo $val['id']; ?>);">Edit</button></td>
                                                    </tr>
                                            <?php
                                                    $i++;
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
            <div class="modal-dialog  modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="linkTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="get" id="link_form" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="div-msg-save" class="alert  alert-dismissible fade show" style="display:none"></div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label">E-mail1</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label">E-mail2</label>
                                        <input type="email" class="form-control" id="email2" name="email2" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="form-group">
                                        <label class="floating-label">Direction</label>
                                        <input type="text" class="form-control" id="direction" name="direction" required>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label class="floating-label">Address</label>
                                        <textarea class="form-control" id="address" name="address" required> </textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Acadmic Name</label>
                                        <input type="text" class="form-control" id="acadmin_name" name="acadmin_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label"> Logo</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input upload" id="img1" name="img1">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="invalid-feedback" style="display:block;">Image Width and Height should be 608*146</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Contact Number 1</label>
                                        <input type="number" class="form-control" id="phone1" name="phone1" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Whatsapp Number 1</label>
                                        <input type="number" class="form-control" id="wphone1" required name="wphone1" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="row" style="border: 5px solid #e3eaef !important;">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label class="floating-label">Facebook Link</label>
                                                <input type="url" class="form-control" id="facebook" name="facebook">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="row" style="border: 5px solid #e3eaef !important;">
                                        <div class="col-10 ">
                                            <div class="form-group">
                                                <label class="floating-label">Instagram Link</label>
                                                <input type="url" class="form-control" id="insta" name="insta">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <div class="row" style="border: 5px solid #e3eaef !important;">
                                        <div class="col-10 ">
                                            <div class="form-group">
                                                <label class="floating-label">Whatsapp Number 2</label>
                                                <input type="number" class="form-control" id="wphone2" name="wphone2" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="row" style="border: 5px solid #e3eaef !important;">
                                        <div class="col-10 ">
                                            <div class="form-group">
                                                <label class="floating-label">Contact Number 2</label>
                                                <input type="number" class="form-control" id="phone2" name="phone2" pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==10) return false;">
                                            </div>
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
    </div>

</body>





<script>
    $('#heading').on('hidden.bs.modal', function() {
        $('#link_form')[0].reset();
        $("#heading_id").val('');
    });

    function addHomeScrollbar() {
        $("#heading_title").html("Add Teachers");
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
            url: "<?php echo base_url('updateLinks') ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                console.log(response);
                $("#heading_id").val(response.data['id']);
                $("#email").val(response.data['email']);
                $("#email2").val(response.data['email2']);
                $("#direction").val(response.data['direction']);
                $("#address").val(response.data['address']);
                $("#phone1").val(response.data['phone1']);
                $("#phone2").val(response.data['phone2']);
                $("#wphone1").val(response.data['wphone1']);
                $("#wphone2").val(response.data['wphone2']);
                $("#facebook").val(response.data['facebook']);
                $("#insta").val(response.data['insta']);
                $("#acadmin_name").val(response.data['acadmin_name']);
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
                    if (width >= "600" && height == "472") {
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
                            text: "Invalid Widht And Height Image width and heigth should be 600*472",
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
        $("#link_form").submit(function(e) {
            e.preventDefault();
            // $('#btn-heading').attr('disabled', true);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('addLinks') ?>",
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