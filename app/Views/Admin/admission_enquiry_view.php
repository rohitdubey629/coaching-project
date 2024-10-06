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
                                <form method="get" id="search_frm" style="margin-bottom:0px;">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="floating-label">From Date</label>
                                                <input type="date" onchange="filterData()" id="date_from" name="date_from" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="floating-label">To Date</label>
                                                <input type="date" onchange="filterData()" id="date_to" name="date_to" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group text-center">
                                                <a id="download_link" class="btn btn-primary" style="margin-top:30px;">Download</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-1"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Student name</th>
                                                <th>Father name</th>
                                                <th>Mother name</th>
                                                <th>Dob</th>
                                                <th>Gender</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Adhar no</th>
                                                <th>Course</th>
                                                <th>Address</th>
                                                <th> Date & Time</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody id="call_record">
                                            <?php
                                            if (!empty($admission_enquiry)) {
                                                $styleClass = array("table-warning", "table-success");
                                                $i = 0;
                                                foreach ($admission_enquiry as $val) {
                                                    if ($i % 2 == 0) {
                                                        $style = $styleClass['1'];
                                                    } else {
                                                        $style = $styleClass['0'];
                                                    }

                                            ?>
                                                    <tr class="<?php echo $style; ?>">
                                                        <td><?php echo $val['id']; ?></td>
                                                        <td><?php echo $val['full_name']; ?></td>
                                                        <td><?php echo $val['father_name']; ?></td>
                                                        <td><?php echo $val['mother_name']; ?></td>
                                                        <td><?php echo $val['dob']; ?></td>
                                                        <td><?php echo $val['gender']; ?></td>
                                                        <td><?php echo $val['mobile_no']; ?></td>
                                                        <td><?php echo $val['email']; ?></td>
                                                        <td><?php echo $val['adhar_no']; ?></td>
                                                        <td><?php echo $val['course_name']; ?></td>
                                                        <td><?php echo $val['address']; ?></td>
                                                        <td><?php echo date("d/m/Y H:i:s", strtotime($val['date'])); ?></td>
                                                        <td><img src="<?php echo base_url(); ?>uploads/admission_form/<?php echo $val['img']; ?>" style="height:100px; width:100;"></td>
                                                    </tr><?php
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

</body>


<script>
    function filterData() {
        var date_from = $("#date_from").val()
        var date_to = $("#date_to").val()
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('admission/filterData'); ?>",
            data: {
                date_from: date_from,
                date_to: date_to
            },
            success: function(response) {
                $("#call_record").html(response);
            }
        });
    }

    $(document).ready(function() {
        $("a").click(function() {
            var date_from = $("#date_from").val()
            var date_to = $("#date_to").val()
            var url = "<?php echo base_url(); ?>admission/dataDownload?date_from=" + date_from + "&date_to=" + date_to;
            // alert(url)
            $('#download_link').attr('href', url);
        });

    });
</script>

</html>