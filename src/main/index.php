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
    

    <script>


function current(sm){
    document.getElementById(sm).addClass('current');
    $("#1.1").addClass('current');
    alert("asd");
}

</script>


    <?php require('../navigation/navigation.php') ?>

    <nav id="sidebar">

            <div class="sidebar-header">
                <h1>SICAP 2.0</h1>
            </div>
            
            <ul class="lisst-unstyled components">

                

                <li>
                    <a href="#">Página principal</a>
                </li>



                <!--<li class="active">

                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>

                    <ul class="collapse lisst-unstyled list-group" id="homeSubmenu">
                        <li class="list-group-item">
                            <a href="#">Página principal</a>
                        
                        </li>
                    </ul>

                </li>-->




                <li>

                <a href="#captureSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-folder-open"></i>&nbsp Captura</a>

                    <ul class="collapse list-group" id="captureSubmenu">
                        <li>
                            <a href="#"><i class="far fa-circle" id="sm1.1" onclick="current('1.1')"></i>&nbsp Nuevo</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-circle" id="sm1.2" onclick="current('1.2')"></i>&nbsp Modificar</a>
                        </li>       
                        <li>
                            <a href="#"><i class="far fa-circle" id="sm1.3" onclick="current('1.3')"></i>&nbsp Consultar</a>
                        </li>     
                    </ul>
                
                </li>

                <li>

                    <a href="#searchSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-th-list"></i>&nbsp Consultas</a>

                    <ul class="collapse list-group" id="searchSubmenu">
                        <li>
                            <a href="#" class="list-group-item" id="sm2.1" onclick="current('2.1')"><i class="far fa-circle"></i>&nbsp Carpetas</a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item" id="sm2.2" onclick="current('2.2')"><i class="far fa-circle"></i>&nbsp Delitos</a>
                        </li>       
                        <li>
                            <a href="#" class="list-group-item" id="sm2.3" onclick="current('2.3')"><i class="far fa-circle"></i>&nbsp Reportes</a>
                        </li>    
                        <li>
                            <a href="#" class="list-group-item" id="sm2.4" onclick="current('2.4')"><i class="far fa-circle"></i>&nbsp Validaciones</a>
                        </li>       
                        <li>
                            <a href="#" class="list-group-item" id="sm2.5" onclick="current('2.5')"><i class="far fa-circle"></i>&nbsp Busquedas</a>
                        </li> 
                         
                    </ul>
                
                </li>

                <li>

                    <a href="#validationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-check-square"></i>&nbsp Validaciones</a>

                    <ul class="collapse list-group" id="validationSubmenu">
                        <li>
                            <a href="#"><i class="far fa-circle"></i>&nbsp Vlidación de captura</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-circle"></i>&nbsp Alto impacto</a>
                        </li>       
                        <li>
                            <a href="#"><i class="far fa-circle"></i>&nbsp Necropcias</a>
                        </li>     
                    </ul>
                
                </li>

                <li>

                    <a href="#configurationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cog"></i>&nbsp Configuración</a>

                    <ul class="collapse list-group" id="configurationSubmenu">
                        <li>
                            <a href="#"><i class="far fa-circle"></i>&nbsp Usuario</a>
                        </li> 
                    </ul>
                
                </li>

                <!--<li>

                    <a href="#configurationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Configuración</a>

                    <ul class="list-group collapse lisst-unstyled" id="configurationSubmenu">
                        <li class="list-group-item active">
                            <div class="md-v-line"></div><i class="fas fa-laptop mr-4 pr-3"></i> Cras justo odio
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-bomb mr-5"></i>Dapibus ac facilisis in
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-code mr-5"></i>Morbi leo risus
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="far fa-gem mr-5"></i>Porta ac consectetur ac
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div><i class="fas fa-cogs mr-5"></i>Vestibulum at eros
                        </li>
                    </ul>
                
                </li>-->

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
                $("#navbar").toggleClass('full');
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