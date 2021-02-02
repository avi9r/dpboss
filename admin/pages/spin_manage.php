<?php

require_once('../../connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');

$row['admin_id'] = $_SESSION['admin_id'];
if (isset($_SESSION['admin_id'])) {
    $_SERVER["PHP_SELF"];
} else {
    header("Location: ../login.php");
}


?>
<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- ============================================================== -->

<?php include 'sidebar.php'; ?>

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">

                    <h2 class="pageheader-title">Manage Spin</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Spinner</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Manage Spin</a></li>

                                <!-- <li class="breadcrumb-item active" aria-current="page">Data Tables</li> -->
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="spinner-div container-fluid">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Interval time</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- output data of each row -->
                                    <?php
                                    $qry = "SELECT * FROM `spin_schedule`";
                                    $res =  mysqli_query($db, $qry) or die(mysqli_error($db));
                                    while ($row = $res->fetch_assoc()) {


                                    ?>
                                        <tr>
                                            <!--  -->
                                            <td><?php echo $row['game_date']; ?></td>
                                            <td><?php echo $row['type'];  ?></td>
                                            <td><?php echo ($row['interval_time'] * 60) . ' Min';  ?></td>
                                            <td> <button class="btn-primary" id="edit" name="edit" onclick="editthis(<?php echo $row['id'];  ?>)">Edit</button>
                                                <button class="btn-danger" id="del" name="del" onclick="delthis(<?php echo $row['id'];  ?>)">Delete</button>
                                            </td>
                                        </tr>

                                    <?php  } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Interval time</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- spin schedule list end hear -->

        <!-- manage spin lucky number hear -->
        <div class="spin-manage container-fluid" style="display: none;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <button type="button" class="btn btn-warning" id="back" name="back">Go Back</button>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Spin Time</th>
                                        <th>Lucky Number</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody class="my-dtaa-spin">
                                    <!-- output data of each row -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Spin Time</th>
                                        <th>Lucky Number</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menage end hear -->
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    function editthis(id) {
        console.log(id);
        $.ajax({
            type: 'POST',
            url: 'ajax_operation.php',
            dataType: 'json',
            data: {
                'id': id,
                'type': 'editSpin'
            },
            success: function(res) {
                console.log(res);
                let table_data = "";
                for (var i = 0; i < res.length; i++) {
                    if (res[i].lucky_num == null) {
                        table_data += '<tr>' +
                            '<td>' + res[i].date  + '</td>' +
                            '<td>' + res[i].time + '</td>' +
                            '<td><input type="number" id="luck_num' + res[i].id + '" name="luck_num" ></td>' +
                            '<td> <button class="btn-primary" id="save_num' + res[i].id + '" name="save_num" onclick="savenum(' + res[i].id + ',' + res[i].schedule_id + ')">Save Lucky Number</button>' +
                            '<button class="btn-danger" id="del" name="del" onclick="delthis(' + res[i].id + ')" style="display: none;">Delete</button>' +
                            '</td>' +
                            '</tr>';

                    } else if (res[i].lucky_num != null) {
                        table_data += '<tr>' +
                            '<td>' + res[i].date + '</td>' +
                            '<td>' + res[i].time + '</td>' +
                            '<td>' + res[i].lucky_num + '</td>' +
                            '<td> <button class="btn-danger" id="edit" name="edit" onclick="deletenum(' + res[i].id + ',' + res[i].schedule_id + ')">Delete Lucky Number</button>' +
                            '<button class="btn-danger" id="del" name="del" onclick="" style="display: none;">Delete</button>' +
                            '</td>' +
                            '</tr>';
                    }
                }
                $('.my-dtaa-spin').append(table_data);

            }
        });
        $('.spinner-div').hide();
        $('.spin-manage').show();

    }

    function savenum(s_id, sch_id) {
        $('#save_num').prop('disabled', true);
        var x = '#luck_num' + s_id;
        var num = $(x).val();
        $.ajax({
            type: 'POST',
            url: 'ajax_operation.php',
            dataType: 'json',
            data: {
                'id': s_id,
                'sch_id': sch_id,
                'num': num,
                'type': 'saveLuckNum'
            },
            success: function(res) {
                alert(res.pop);
                // setTimeout(function() {

                //     location.reload(true);
                // }, 1000);
            }
        });
        $('#save_num').prop('disabled', true);
    }

    function deletenum(s_id, sch_id) {
        $.ajax({
            type: 'POST',
            url: 'ajax_operation.php',
            dataType: 'json',
            data: {
                'id': s_id,
                'sch_id': sch_id,
                'type': 'deleteLuckNum'
            },
            success: function(res) {

                setTimeout(function() {
                    alert(res.pop);
                    location.reload(true);
                }, 1000);
            }
        });
    }

    function delthis(id) {
        console.log(id);
        $.ajax({
            type: 'POST',
            url: 'ajax_operation.php',
            dataType: 'json',
            data: {
                'id': id,
                'type': 'delSpin'
            },
            success: function(res) {
                setTimeout(function() {
                    alert(res.pop);
                    location.reload(true);
                }, 1000);
            }
        });
    }


    $('#back').click(function() {

        // $('.spin-manage').hide();
        // $('.spinner-div').show();

    });
</script>

<!-- footer -->
<?php include 'footer.php'; ?>