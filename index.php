<?php
    @session_start();
    include("inc/connect.php");
    include("inc/function.php");
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'index';
    // $_SESSION['Link'] = 'News.php';
    // if($_SESSION['user_name'] == "")
    // {
    //     echo "Please Login!";
    //     exit("<script>alert('Please Login');window.location='login.php';</script>");
    // }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blue/pace-theme-loading-bar.css" />
    <title>บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)</title>
</head>
<body>
    <div class="row">
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
                <h1>
                    <span> หน้าแรก </span>
                </h1>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                               <tr>
                                <th>#</th>
                                <th>สถานะ</th>
                                <th>รายละเอียด</th>
                                <th width="10%">วันที่</th>
                                <th width="30%">ลิงค์</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <?php
                                $sql = "SELECT CAST(N_Status AS text) AS Status, CAST(N_Name AS text) AS Name, N_Date AS Dates, CAST(N_Url AS Text) AS Url
                                        FROM [HRP].[dbo].[News]";
                                $query = mssql_query($sql);
                                $num = mssql_num_rows($query);
                                for($i=1;$i<=$num;$i++)
                                {
                                    $row = mssql_fetch_array($query);
                                    $date = new datetime($row['Dates']);
                                    $date = $date->format('d-m-Y');
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo iconv('TIS-620','UTF-8',$row['Status']); ?></td>
                                <td><?php echo iconv('TIS-620','UTF-8',$row['Name']); ?></td>
                                <td width="10%"><?php echo $date; ?></td>
                                <td width="30%"><a href="<?php echo $row['Url'];?>"><?php echo $row['Url'];?></a></td>
                            </tr>
                            <?php
                                }
                            ?> -->
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-1"></div>
    </div>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/pace.js"></script>
<script type="text/javascript">
    (function($){
        $('.footable').footable();
    } (jQuery));
</script>

<script>

    function load(time){
      var x = new XMLHttpRequest();
      // x.open('GET', "http://localhost:5646/walter/" + time, true);
      // x.send();
    };

    paceOptions = {
      elements: true
    };

    load(20);
    load(100);
    load(500);
    load(2000);
    load(3000);

    setTimeout(function(){
      Pace.ignore(function(){
        load(3100);
      });
    }, 4000);

    Pace.on('hide', function(){
      console.log('done');
    });

    range.addEventListener('input', function(){
        document.querySelector('.pace').classList.remove('pace-inactive');
        document.querySelector('.pace').classList.add('pace-active');

        document.querySelector('.pace-progress').setAttribute('data-progress-text', range.value + '%');
        document.querySelector('.pace-progress').setAttribute('style', '-webkit-transform: translate3d(' + range.value + '%, 0px, 0px)');
    });
</script>

<html>