<?php
    @session_start();
    require("inc/connect.php");
    require("inc/function.php");
    require("func/UserSearch.php");
    checklogin($_SESSION['user_name']);
    $HeadCheck = 'User';
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
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blue/pace-theme-loading-bar.css" />
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <title>บริษัท ไทยโพลีคอนส์ จำกัด (มหาชน)</title>
</head>
<body onload="display();">
    <div class="row">        
        <?php
            require("Head2.php");
        ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <h1>
                <span> ผู้ใช้งานระบบ </span>
                <a class="glyphicon glyphicon-plus-sign" href="register.php"></a>
            </h1>
            <?php require('UserDetail.php'); ?> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-1"></div>
    </div>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/inspinia.js"></script>
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="js/plugins/dataTables/dataTables.responsive.js"></script>
<script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<script src="js/pace.js"></script>
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

    // range.addEventListener('input', function(){
    //     document.querySelector('.pace').classList.remove('pace-inactive');
    //     document.querySelector('.pace').classList.add('pace-active');

    //     document.querySelector('.pace-progress').setAttribute('data-progress-text', range.value + '%');
    //     document.querySelector('.pace-progress').setAttribute('style', '-webkit-transform: translate3d(' + range.value + '%, 0px, 0px)');
    // });
</script>
<script type="text/javascript">
    (function($){
        var oTable = $('#editable').dataTable();

        /* Apply the jEditable handlers to the table */
        oTable.$('td').editable( '../example_ajax.php', {
            "callback": function( sValue, y ) {
                var aPos = oTable.fnGetPosition( this );
                oTable.fnUpdate( sValue, aPos[0], aPos[1] );
            },
            "submitdata": function ( value, settings ) {
                return {
                    "row_id": this.parentNode.getAttribute('id'),
                    "column": oTable.fnGetPosition( this )[2]
                };
            },

            "width": "90%",
            "height": "100%"
        } );
        $('#Admin').click(function(event) {
            $('#test').css('display', 'none');
        });
        $('#HR').click(function(event) {
            $('#test').css('display', 'none');
        });
        $('#Personal').click(function(event) {
            $('#test').css('display', '');
        });
        $('#Report').click(function(event) {
            $('#test').css('display', 'none');
        });
    } (jQuery));

    function display() {
        $('#test').css('display', 'none');
    }
</script>

<html>