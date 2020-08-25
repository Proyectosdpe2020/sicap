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
        <!--<link rel="stylesheet" href="../../node_modules/materialize-css/dist/css/materialize.min.css">-->
        
        <link rel="stylesheet" href="../../node_modules/datatables.net-dt/css/jquery.dataTables.css">
        <link rel="stylesheet" href="css/styles.css">

        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../node_modules/mdbootstrap/js/mdb.min.js"></script>
        <!--<script type="text/javascript" src="../../node_modules/materialize-css/dist/js/materialize.min.js"></script>-->
        <script type="text/javascript" src="../../node_modules/datatables.net/js/jquery.dataTables.js"></script>

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
                            <a href="#" class="list-group-item" id="sm2.1" onclick="current('2.1')"><i class="fas fa-circle"></i>&nbsp Carpetas</a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item" id="sm2.2" onclick="current('2.2')"><i class="fas fa-circle"></i>&nbsp Delitos</a>
                        </li>       
                        <li>
                            <a href="#" class="list-group-item" id="sm2.3" onclick="current('2.3')"><i class="fas fa-circle"></i>&nbsp Reportes</a>
                        </li>    
                        <li>
                            <a href="#" class="list-group-item" id="sm2.4" onclick="current('2.4')"><i class="fas fa-circle"></i>&nbsp Validaciones</a>
                        </li>       
                        <li>
                            <a href="#" class="list-group-item" id="sm2.5" onclick="current('2.5')"><i class="fas fa-circle"></i>&nbsp Busquedas</a>
                        </li> 
                         
                    </ul>
                
                </li>

                <li>

                    <a href="#validationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-check-square"></i>&nbsp Validaciones</a>

                    <ul class="collapse list-group" id="validationSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-circle"></i>&nbsp Vlidación de captura</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-circle"></i>&nbsp Alto impacto</a>
                        </li>       
                        <li>
                            <a href="#"><i class="fas fa-circle"></i>&nbsp Necropcias</a>
                        </li>     
                    </ul>
                
                </li>

                <li>

                    <a href="#configurationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cog"></i>&nbsp Configuración</a>

                    <ul class="collapse list-group" id="configurationSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-circle"></i>&nbsp Usuario</a>
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

            <button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
            <button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
            <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
            <button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
            <button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
            <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
            <button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>



            <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Position
      </th>
      <th class="th-sm">Office
      </th>
      <th class="th-sm">Age
      </th>
      <th class="th-sm">Start date
      </th>
      <th class="th-sm" id="salary" style="pointer-events: none;">Salary
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012/03/29</td>
      <td>$433,060</td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008/11/28</td>
      <td>$162,700</td>
    </tr>
    <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012/12/02</td>
      <td>$372,000</td>
    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012/08/06</td>
      <td>$137,500</td>
    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010/10/14</td>
      <td>$327,900</td>
    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009/09/15</td>
      <td>$205,500</td>
    </tr>
    <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008/12/13</td>
      <td>$103,600</td>
    </tr>
    <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008/12/19</td>
      <td>$90,560</td>
    </tr>
    <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013/03/03</td>
      <td>$342,000</td>
    </tr>
    <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008/10/16</td>
      <td>$470,600</td>
    </tr>
    <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012/12/18</td>
      <td>$313,500</td>
    </tr>
    <tr>
      <td>Tatyana Fitzpatrick</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>19</td>
      <td>2010/03/17</td>
      <td>$385,750</td>
    </tr>
    <tr>
      <td>Michael Silva</td>
      <td>Marketing Designer</td>
      <td>London</td>
      <td>66</td>
      <td>2012/11/27</td>
      <td>$198,500</td>
    </tr>
    <tr>
      <td>Paul Byrd</td>
      <td>Chief Financial Officer (CFO)</td>
      <td>New York</td>
      <td>64</td>
      <td>2010/06/09</td>
      <td>$725,000</td>
    </tr>
    <tr>
      <td>Gloria Little</td>
      <td>Systems Administrator</td>
      <td>New York</td>
      <td>59</td>
      <td>2009/04/10</td>
      <td>$237,500</td>
    </tr>
    <tr>
      <td>Bradley Greer</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>41</td>
      <td>2012/10/13</td>
      <td>$132,000</td>
    </tr>
    <tr>
      <td>Dai Rios</td>
      <td>Personnel Lead</td>
      <td>Edinburgh</td>
      <td>35</td>
      <td>2012/09/26</td>
      <td>$217,500</td>
    </tr>
    <tr>
      <td>Jenette Caldwell</td>
      <td>Development Lead</td>
      <td>New York</td>
      <td>30</td>
      <td>2011/09/03</td>
      <td>$345,000</td>
    </tr>
    <tr>
      <td>Yuri Berry</td>
      <td>Chief Marketing Officer (CMO)</td>
      <td>New York</td>
      <td>40</td>
      <td>2009/06/25</td>
      <td>$675,000</td>
    </tr>
    <tr>
      <td>Caesar Vance</td>
      <td>Pre-Sales Support</td>
      <td>New York</td>
      <td>21</td>
      <td>2011/12/12</td>
      <td>$106,450</td>
    </tr>
    <tr>
      <td>Doris Wilder</td>
      <td>Sales Assistant</td>
      <td>Sidney</td>
      <td>23</td>
      <td>2010/09/20</td>
      <td>$85,600</td>
    </tr>
    <tr>
      <td>Angelica Ramos</td>
      <td>Chief Executive Officer (CEO)</td>
      <td>London</td>
      <td>47</td>
      <td>2009/10/09</td>
      <td>$1,200,000</td>
    </tr>
    <tr>
      <td>Gavin Joyce</td>
      <td>Developer</td>
      <td>Edinburgh</td>
      <td>42</td>
      <td>2010/12/22</td>
      <td>$92,575</td>
    </tr>
    <tr>
      <td>Jennifer Chang</td>
      <td>Regional Director</td>
      <td>Singapore</td>
      <td>28</td>
      <td>2010/11/14</td>
      <td>$357,650</td>
    </tr>
    <tr>
      <td>Brenden Wagner</td>
      <td>Software Engineer</td>
      <td>San Francisco</td>
      <td>28</td>
      <td>2011/06/07</td>
      <td>$206,850</td>
    </tr>
    <tr>
      <td>Fiona Green</td>
      <td>Chief Operating Officer (COO)</td>
      <td>San Francisco</td>
      <td>48</td>
      <td>2010/03/11</td>
      <td>$850,000</td>
    </tr>
    <tr>
      <td>Shou Itou</td>
      <td>Regional Marketing</td>
      <td>Tokyo</td>
      <td>20</td>
      <td>2011/08/14</td>
      <td>$163,000</td>
    </tr>
    <tr>
      <td>Michelle House</td>
      <td>Integration Specialist</td>
      <td>Sidney</td>
      <td>37</td>
      <td>2011/06/02</td>
      <td>$95,400</td>
    </tr>
    <tr>
      <td>Suki Burks</td>
      <td>Developer</td>
      <td>London</td>
      <td>53</td>
      <td>2009/10/22</td>
      <td>$114,500</td>
    </tr>
    <tr>
      <td>Prescott Bartlett</td>
      <td>Technical Author</td>
      <td>London</td>
      <td>27</td>
      <td>2011/05/07</td>
      <td>$145,000</td>
    </tr>
    <tr>
      <td>Gavin Cortez</td>
      <td>Team Leader</td>
      <td>San Francisco</td>
      <td>22</td>
      <td>2008/10/26</td>
      <td>$235,500</td>
    </tr>
    <tr>
      <td>Martena Mccray</td>
      <td>Post-Sales support</td>
      <td>Edinburgh</td>
      <td>46</td>
      <td>2011/03/09</td>
      <td>$324,050</td>
    </tr>
    <tr>
      <td>Unity Butler</td>
      <td>Marketing Designer</td>
      <td>San Francisco</td>
      <td>47</td>
      <td>2009/12/09</td>
      <td>$85,675</td>
    </tr>
    <tr>
      <td>Howard Hatfield</td>
      <td>Office Manager</td>
      <td>San Francisco</td>
      <td>51</td>
      <td>2008/12/16</td>
      <td>$164,500</td>
    </tr>
    <tr>
      <td>Hope Fuentes</td>
      <td>Secretary</td>
      <td>San Francisco</td>
      <td>41</td>
      <td>2010/02/12</td>
      <td>$109,850</td>
    </tr>
    <tr>
      <td>Vivian Harrell</td>
      <td>Financial Controller</td>
      <td>San Francisco</td>
      <td>62</td>
      <td>2009/02/14</td>
      <td>$452,500</td>
    </tr>
    <tr>
      <td>Timothy Mooney</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>37</td>
      <td>2008/12/11</td>
      <td>$136,200</td>
    </tr>
    <tr>
      <td>Jackson Bradshaw</td>
      <td>Director</td>
      <td>New York</td>
      <td>65</td>
      <td>2008/09/26</td>
      <td>$645,750</td>
    </tr>
    <tr>
      <td>Olivia Liang</td>
      <td>Support Engineer</td>
      <td>Singapore</td>
      <td>64</td>
      <td>2011/02/03</td>
      <td>$234,500</td>
    </tr>
    <tr>
      <td>Bruno Nash</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>38</td>
      <td>2011/05/03</td>
      <td>$163,500</td>
    </tr>
    <tr>
      <td>Sakura Yamamoto</td>
      <td>Support Engineer</td>
      <td>Tokyo</td>
      <td>37</td>
      <td>2009/08/19</td>
      <td>$139,575</td>
    </tr>
    <tr>
      <td>Thor Walton</td>
      <td>Developer</td>
      <td>New York</td>
      <td>61</td>
      <td>2013/08/11</td>
      <td>$98,540</td>
    </tr>
    <tr>
      <td>Finn Camacho</td>
      <td>Support Engineer</td>
      <td>San Francisco</td>
      <td>47</td>
      <td>2009/07/07</td>
      <td>$87,500</td>
    </tr>
    <tr>
      <td>Serge Baldwin</td>
      <td>Data Coordinator</td>
      <td>Singapore</td>
      <td>64</td>
      <td>2012/04/09</td>
      <td>$138,575</td>
    </tr>
    <tr>
      <td>Zenaida Frank</td>
      <td>Software Engineer</td>
      <td>New York</td>
      <td>63</td>
      <td>2010/01/04</td>
      <td>$125,250</td>
    </tr>
    <tr>
      <td>Zorita Serrano</td>
      <td>Software Engineer</td>
      <td>San Francisco</td>
      <td>56</td>
      <td>2012/06/01</td>
      <td>$115,000</td>
    </tr>
    <tr>
      <td>Jennifer Acosta</td>
      <td>Junior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>43</td>
      <td>2013/02/01</td>
      <td>$75,650</td>
    </tr>
    <tr>
      <td>Cara Stevens</td>
      <td>Sales Assistant</td>
      <td>New York</td>
      <td>46</td>
      <td>2011/12/06</td>
      <td>$145,600</td>
    </tr>
    <tr>
      <td>Hermione Butler</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>47</td>
      <td>2011/03/21</td>
      <td>$356,250</td>
    </tr>
    <tr>
      <td>Lael Greer</td>
      <td>Systems Administrator</td>
      <td>London</td>
      <td>21</td>
      <td>2009/02/27</td>
      <td>$103,500</td>
    </tr>
    <tr>
      <td>Jonas Alexander</td>
      <td>Developer</td>
      <td>San Francisco</td>
      <td>30</td>
      <td>2010/07/14</td>
      <td>$86,500</td>
    </tr>
    <tr>
      <td>Shad Decker</td>
      <td>Regional Director</td>
      <td>Edinburgh</td>
      <td>51</td>
      <td>2008/11/13</td>
      <td>$183,000</td>
    </tr>
    <tr>
      <td>Michael Bruce</td>
      <td>Javascript Developer</td>
      <td>Singapore</td>
      <td>29</td>
      <td>2011/06/27</td>
      <td>$183,000</td>
    </tr>
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
    </tr>
  </tbody>
</table>


        </div>


   




    <script>

        $(document).ready(function(){
            $("#sidebarCollapse").on('click', function(){
                $("#navbar").toggleClass('full');
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('full');
            });

            $('#dtBasicExample').DataTable({
                language: {
                    processing:     "Procesando...",
                    search:         "",
                    lengthMenu:     "Elementos&nbsp;: _MENU_",
                    info:           "_START_ a _END_ / _TOTAL_",
                    infoEmpty:      "0 a 0 / 0 elementos",
                    infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando información...",
                    zeroRecords:    "No se encontraron resultados",
                    emptyTable:     "No existe información",
                    paginate: {
                        first:      "Inicio",
                        previous:   "Anterior",
                        next:       "Siguiente",
                        last:       "Fin"
                    },
                    aria: {
                        sortAscending:  ": Ordenado ascendente",
                        sortDescending: ": Ordenado descendente"
                    }
                }
                //"pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
            });
  $('.dataTables_length').addClass('bs-select');

  $("#salary").removeClass('sorting');

 $("#dtBasicExample_filter").each(function(){
     $('label').each(function(){
         $('input').attr('placeholder', 'Buscar');
     });
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