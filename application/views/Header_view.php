<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php echo $web_info->tab_text;?></title>
<?php $this->load->view("meta_description");?>
<link rel="shortcut icon" href="<?php echo base_url($web_info->tab_icon);?>"/>
<link rel="stylesheet" href="<?php echo base_url("default_assets/css/bootstrap.min.css");?>"/>
<?php include "customized_assets/functions.php";?>

<style>
	@media(min-width:700px){
		.navbar .nav .dropdown .dropdown-menu li a{ /*Area Item Tulisan Menu */
			font-size:15px;
			line-height:40px;
			border-bottom:dotted 1px #999999;
		}
		.navbar .nav li a{
			font-size:15px;
			line-height:50px;
		}
		.navbar #navbar-1{
			float:right;
			padding-right:10%;
		}
		.navbar-brand {/*Logo Sion*/
			float:left;
			padding: 5px;
		}
		.navbar-brand>img {
			height: 180%;
			width: auto;
			padding-left:20%;
		}
	}
	@media(max-width:700px){
		.navbar-brand {
			padding: 0px;
		}
		.navbar-brand>img {
			height: 100%;
			width: auto;
		}
		.navbar .nav .dropdown .dropdown-menu li a{ /*Area Item Tulisan Menu */
			border-bottom:dotted 1px #999999;
		}
	}
	.navbar { /*Area Top Menu */
		background-color:white;
		border-bottom:solid 1px #CCCCCC;
		margin-bottom: 0; /*override margin bottom dari bootstrap*/
	}
	#navbar-1 ul li:hover > a{/* make the Parent menu highlighted on hovering*/
		background-color:#00CCFF;
		color:white;
		font-weight:bold;
	}
	.navbar .nav li a, .navbar .nav .dropdown .dropdown-menu li a{ /*Area Item Tulisan Menu */
		background-color:white;
		color:black;
		font-weight:bold;
	}
	.navbar .navbar-toggle{ /*Tombol Menu ketika Mobile Size */
		background-color:#CCCCCC;
	}
	.navbar .navbar-toggle .icon-bar {
    	background-color: black;
	}
	.dropdown-menu{
		padding:0;
	}
</style>
</head>

<body>
	<div>
      	<nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
            	<div class="navbar-header">
              		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1">
    					<b class="fa fa-bars" aria-hidden="true">Menu</b>
              		</button>
                	<a class="navbar-brand" href="#"><img src="<?php echo base_url("images/logo_sion_ministry.jpg");?>" alt="Logo Sion" /></a>
           		</div>
            
                <div class="collapse navbar-collapse" id="navbar-1">
                    <ul class="nav navbar-nav"><?php
                        $arr_menu = getArrayofMenu($menu);
                        for($i=0;$i<sizeof($arr_menu);$i++){
                            if(sizeof($arr_menu[$i])==1){?>
                                <li><a href="<?php echo $arr_menu[$i][0]->menu_link;?>"><?php echo $arr_menu[$i][0]->menu_name;?></a></li><?php
                            }
                            if(sizeof($arr_menu[$i])>1){?>
                                <li class="dropdown">
                                    <a href="<?php echo $arr_menu[$i][0]->menu_link;?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $arr_menu[$i][0]->menu_name;?><span class="caret"></span></a>
                                    <ul class="dropdown-menu"><?php
                                    for($j=1;$j<sizeof($arr_menu[$i]);$j++){?>
                                        <li><a href="<?php echo $arr_menu[$i][$j]->menu_link;?>"><?php echo $arr_menu[$i][$j]->menu_name;?></a></li><?php
                                    }?>
                                    </ul>
                                </li><?php
                            }
                        }
                        ?>
                    </ul>
                </div><!--/.nav-collapse -->
          	</div>
        </nav>
  	</div>
</body>
<script src="<?php echo base_url("default_assets/js/jquery-1.9.1.min.js");?>"></script>
<script type="text/javascript" src="<?php echo base_url("default_assets/js/jquery-3.1.1.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("default_assets/js/bootstrap.js"); ?>"></script>
<script>
	if($(window).width() > 700){
		$('ul.nav li.dropdown').hover(function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
		}, function() {
			$(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
		});
	}
</script>
</html>