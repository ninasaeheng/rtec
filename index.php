<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RT Edwards Commercial - Delongi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <style>
        h5 {
            margin: 0px;
            text-align: center;
        }
        .item-container {
            background: #eee;
            padding-top: 20px;
            margin-bottom: 20px;
        }
        .hidden-item {
            display: none;
        }


        #sticky-right{
            display: none;
        }
        .expand-btn:link,
        .expand-btn:hover,
        .expand-btn:active,
        .expand-btn:visited{
            text-decoration: none;
            background: #eee;
            padding: 3px 12px;
            -webkit-border-top-left-radius: 5px !important;
            -webkit-border-top-right-radius: 5px !important;
            -moz-border-radius-topleft: 5px !important;
            -moz-border-radius-topright: 5px !important;
            border-top-left-radius: 5px !important;
            border-top-right-radius: 5px !important;
        }
    </style>
</head>
<body>

    <div class="fluid-container"> <!-- START CONTAINER -->

        <!-- HEADER -->
        <div class="row header-border" id="bg-header">
            <div class="col-md-12">
                <!-- LOGO -->
                <a href="index.php">
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/rtec-logo.png" alt="rt edwards logo">
                    </div>
                </a>
            </div>
        </div>
        <!-- END HEADER -->

        <!-- FIRST NAV -->
        <div class="row nav-border nav-padding">
            <div class="col-md-12" role="navigation">
                <ul class="nav nav-pills">
                  <li role="presentation" class="<?php echo $active = !isset($_GET['p']) ? 'active' : ''; ?>"><a href="index.php">HOME</a></li>
                  <li role="presentation"><a href="#">BEKO</a></li>
                  <li role="presentation"><a href="#">BLANCO</a></li>
                  <li role="presentation"><a href="#">BOSCH</a></li>
                  <li role="presentation"><a href="#">CHEF</a></li>
                  <li role="presentation"><a href="#">DELONGI</a></li>
                  <li role="presentation"><a href="#">DISHLEX</a></li>
                  <li role="presentation"><a href="#">ELECTROLUX</a></li>
                  <li role="presentation"><a href="#">FISHER & PAYKEL</a></li>
                  <li role="presentation"><a href="#">ILVE</a></li>
                  <li role="presentation"><a href="#">KELVINATOR</a></li>
                  <li role="presentation"><a href="#">OMEGA</a></li>
                  <li role="presentation"><a href="#">RINNAI</a></li>
                  <li role="presentation"><a href="#">SIMPSON</a></li>
                  <li role="presentation"><a href="#">SMEG</a></li>
                  <li role="presentation"><a href="#">TECHNIKA</a></li>
                  <li role="presentation" class="<?php echo $active = isset($_GET['p']) && $_GET['p'] == 'westinghouse' ? 'active' : ''; ?>"><a href="index.php?p=westinghouse">WESTINGHOUSE</a></li>
                  <li role="presentation"><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <!-- END FIRST NAV -->

        
<?php
//---------------- CONTENT --------------------        
//---------------------------------------------


$page = isset($_GET['p']) ? $_GET['p'] : '';

switch ($page) {
    case 'westinghouse':
        require_once('html/westinghouse.php');
        break;
    case 'cooktops':
        require_once('html/cooktops.php');
        break;
    case 'microwaves':
        require_once('html/microwaves.php');
        break;
    case 'ovens':
        require_once('html/ovens.php');
        break;
    case 'rangehoods':
        require_once('html/rangehoods.php');
        break;
     default:
        require_once('html/home.php');
}


//---------------------------------------------        
//-------------- END CONTENT ------------------        
?>
        
        

    </div> <!-- END CONTAINER -->
    
    <!-- Small modal -->
    <div class="modal fade" role="dialog" id="modal_container">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal_title"></h4>
                </div>
                <div class="modal-body">
                    <p>60 cm Steam Assist</p>
                    <p>Features:</p>
                    <ul id="modal_features"></ul>
                    <strike><p>$00.00</p></strike>
                    <a href=""><button class="button-color btn btn-group">Spec Sheet</button></a>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.item').on('click', function() {
            var title = $(this).find('h5').html();
            $('#modal_title').html(title);

<?php
switch ($page) {
    case 'cooktops':
        echo "var features = '<li>Hot surface indicator</li><li>Child lock</li><li>Quickcook timer</li>';";
        break;
    case 'microwaves':
        echo "var features = '<li>Microwave power</li><li>Grill power/type</li><li>Grill rack</li>';";
        break;
    case 'ovens':
        echo "var features = '<li>Oven/grill dish</li><li>Anti-spatter grill insert</li><li>Oven tray</li>';";
        break;
    case 'rangehoods':
        echo "var features = '<li>Finish: white/stainless steel</li><li>Number of filters: 2</li><li>Lights: 2 x 40W incandescent</li>';";
        break;
     default:
        echo "var features = '';";
}
?>
            $('#modal_features').html(features);
            
            $('#modal_container').modal('toggle')
        });
        
        function expand(target) {
            var hidden_item = $('#'+target+' .hidden-item');
            if(hidden_item.css('display') == 'none') {
                hidden_item.show();
            } else {
                hidden_item.hide();
            }
        }
        $('.expand-btn').on('click', function() {
            var status = $(this).find('span').hasClass('glyphicon-chevron-down');
            if(status == true) {
                $(this).html('VIEW LESS <span class="glyphicon glyphicon-chevron-up"></span>');
            } else {
                $(this).html('VIEW MORE <span class="glyphicon glyphicon-chevron-down"></span>');
            }
        });
    </script>
</body>
</html>