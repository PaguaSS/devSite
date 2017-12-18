<?php
/**
 * @copyright     Copyright (c) Anthony Paguaga
 * @package       app.View.Layouts
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <?php echo $this->Html->charset(); ?>
    <title>Panel de administracion</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css("materialize.min"); 
        echo $this->Html->css("admin"); 

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="row">
        <div class="col s3 leftPanel">
            <div class="user-view">
                <div class="background" style="background-image: url('<?php echo $this->webroot;?>img/background-nav-user.jpg');">
                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </div>
            <!-- Grey navigation panel -->
            <ul id="slide-out" class="sideMenu">
                <li><div class="divider"></div></li>
                <li>
                    <a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a>
                </li>
                <li><a href="#!"><i class="material-icons">cloud</i>Second Link</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>Second Link</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>Second Link</a></li>
            </ul>
            <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->
            
            <div id="footer" class="footerFixed">
            © <?php echo date("Y");?> - All rights         
            </div>
        </div>   
        <div class="container col s9 offset-s3" id="container">

            <!-- Navbar-->
            <div class="row navbar">
                <div class="col s3 offset-s8">
                    <a href="#!">Anthony Paguaga Sánchez
                        <ul class="subMenu">
                            <li>Cambiar contraseña</li>
                        </ul>
                    </a>
                </div>
                <div class="col s1">
                    <a href="#!"><i class="material-icons">exit_to_app</i></a>
                </div>
            </div>

            <!-- Content  -->
            <div class="msContainer" id="content-wrapper">
                <?php echo $this->fetch('content'); ?>
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <?php
        echo $this->Html->script('jquery-3.2.1.min');
        echo $this->Html->script('materialize.min');
    ?>
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/admin/admin.js"></script>
</body>
</html>
