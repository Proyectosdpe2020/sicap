<?php
session_start();
include('connection.php');

$data = json_decode($_POST['auth'], true );

$user = $data['username'];
$pass = $data['password'];

if($conn){
    $sql = "SELECT TOP (1)
        * 
        FROM [PRUEBA].[dbo].[Usuario] 
        WHERE [usuario] = '$user'
        AND [contrasena] = '$pass'";

    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $result = sqlsrv_query( $conn, $sql , $params, $options );

    $row_count = sqlsrv_num_rows( $result );

    $json = '';
    $return = array();

    if ($row_count != 0){
        while( $row = sqlsrv_fetch_array( $result) ) {
            $json = json_encode($row);
        }
        
        $json = json_decode($json, true);
            
        $return = array(
            'state' => 'user_success',
            'user_data' => array(
                'uid' => $json['UsuarioID'],
                'username' => $json['usuario'],
                'name' => $json['Nombre'],
                'paternal_surename' => $json['Paterno'],
                'maternal_surename' => $json['Materno']
            )
        );
        
    }
    else{
        $return = array(
            'state' => 'user_fail',
            'user_data' => false
        );
    }

    echo json_encode($return, JSON_FORCE_OBJECT);

    sqlsrv_close($conn);
}
else{
    $return = array(
        'state' => 'connection_fail',
        'user_data' => false
    );

    echo json_encode($return, JSON_FORCE_OBJECT);
}

?>