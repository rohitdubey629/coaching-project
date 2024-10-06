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
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th> Date & Time</th>
                                            </tr>
                                        </thead>
                                        <tbody id="call_record">
                                            <?php
                                            if (!empty($contact_enquiry)) {
                                                $styleClass = array("table-warning", "table-success");
                                                $i = 0;
                                                foreach ($contact_enquiry as $val) {
                                                    if ($i % 2 == 0) {
                                                        $style = $styleClass['1'];
                                                    } else {
                                                        $style = $styleClass['0'];
                                                    }

                                            ?>
                                                    <tr class="<?php echo $style; ?>">
                                                        <td><?php echo $val['id']; ?></td>

                                                        <td><?php echo $val['name']; ?></td>

                                                        <td><?php echo $val['phone']; ?></td>
                                                        <td><?php echo $val['email']; ?></td>
                                                        <td><?php echo $val['message']; ?></td>
                                                        <td><?php echo date("d-m-Y H:i:s", strtotime($val['date'])); ?></td>
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
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>
<?php echo view('admin/layout/footer') ?>


<script>
    function filterData() {
        var date_from = $("#date_from").val()
        var date_to = $("#date_to").val()
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('admin_contact/filterData'); ?>",
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
            var url = "<?php echo base_url(); ?>/admin_contact/dataDownload?date_from=" + date_from + "&date_to=" + date_to;
            // alert(url)
            $('#download_link').attr('href', url);
        });

    });
</script>

</html>