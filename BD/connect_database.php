<!-- CONEXÃO MOBILE -->
<?php
    // Abre uma conexao com o BD.
    $host = "host = 127.0.0.1;";
    $port = "port = 6649;";
    $dbname = "dbname = pg_products;";
    $dbuser = "postgres";
    $dbpassword	= "00000000";

    // dados de conexao com o b4app. Usar somente caso esteja usando b4app
    // $host        = "host = " . getenv("BD_HOST") . ";";
    // $port        = "port = " . getenv("BD_PORT") . ";";
    // $dbname      = "dbname = " . getenv("BD_DATABASE") . ";";
    // $dbuser 	 = getenv("BD_USER");
    // $dbpassword	 = getenv("BD_PASSWORD");

    // para conectar ao mysql, substitua pgsql por mysql
    $db_con= new PDO('pgsql:' . $host . $port . $dbname, $dbuser, $dbpassword);

    //alguns atributos de performance.
    $db_con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $db_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>

<!-- CONEXÃO WEB -->
<?php
    //Conexão com banco de dados
    $servername = "localhost"; //endereço do servidor
    $username="root";
    $password="usbw";
    $db_name="crud";

    //pdo - somente orientado objeto
    $connect = mysqli_connect($servername,$username,$password,$db_name);

    //codifica com o caracteres ao manipular dados do banco de dados
    //mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()):
        echo "Falha na conexão: ". mysqli_connect_error();
    endif;
?>