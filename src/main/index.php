<?php
session_start();
if(isset($_SESSION['user_data'])){
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/mdb.min.css">
        <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/style.css">
        <link rel="stylesheet" href="../../node_modules/sidebarjs/lib/sidebarjs.css">
        <!--<link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css">-->
        <link rel="stylesheet" href="css/styles.css">

        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/mdb.min.js"></script>
        <script type="text/javascript" src="../../node_modules/sidebarjs/lib/amd/sidebarjs.js"></script>
        <!--<script type="text/javascript" src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script>-->

        <title>Document</title>
    </head>
    
    <body>
    

        


    <?php require('../navigation/navigation.php') ?>

    <nav id="sidebar" style="position: fixed; height: 1000px; margin-top: 57px;">

            <div class="sidebar-header">
                <h3>Bootstrap slider</h3>
            </div>
            
            <ul class="lisst-unstyled components">

                <li class="active">

                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>

                    <ul class="collapse lisst-unstyled list-group" id="homeSubmenu">
                        <li class="list-group-item">
                            <a href="#">Home 1</a>
                        
                        </li>
                        <li class="list-group-item">
                            <a href="#">Home 2</a>
                        </li>
                    </ul>

                </li>

                <li>
                    <a href="#">About</a>
                </li>

                <li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>

                    <ul class="collapse lisst-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>       
                    </ul>
                
                </li>

            </ul>

        </nav>

        <div id="content">
            <h1>Hola <?php echo $_SESSION['user_data']['name'] ?></h1>
            <a class="dropdown-item" href="../../service/close_session.php">Cerrar sesión</a>

            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
            <button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
            <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
            <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
            <button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
            <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
            <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>
        </div>


   




    <script>

        $(document).ready(function(){
            $("#sidebarCollapse").on('click', function(){
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('full');
            });
        });

    </script>


    </body>
</html>

<?php
}
else{
?>
    <script>
        window.location = '../index.php'
    </script>
<?php
}
?>