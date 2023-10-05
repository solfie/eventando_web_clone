<?php
    //Aqui colocamos o servidor em que está o nosso banco de dados, no nosso exemplo é a conexão com um servidor local, portanto localhost
    $servidor = "silly.db.elephantsql.com";
    //Aqui é o nome de usuário do seu banco de dados, root é o servidor inicial e básico de todo servidor, mas recomenda-se não usar o usuario root e sim criar um novo usuário
    $usuario = "asmrdkjg";
    //Aqui colocamos a senha do usuário, por padrão o usuário root vem sem senha, mas é altamente recomendável criar uma senha para o usuário root, visto que ele é o que tem mais privilégios no servidor
    $senha ="";

    //Aqui criamos a conexão utilizando o servidor, usuario e senha, caso dê erro, retorna um erro ao usuário.

    //postgres://asmrdkjg:o4ohqa9LWB3zrPrbKx3N2EMS12LNyoS_@silly.db.elephantsql.com/asmrdkjg
    //$conn_string = "host=silly.db.elephantsql.com port=5432 dbname=asmrdkjg user=asmrdkjg password=o4ohqa9LWB3zrPrbKx3N2EMS12LNyoS_";
    //$conexao = pg_connect($conn_string);

    //$conexao = pg_connect($servidor, $usuario, $senha) or
    $conn_string = "host=silly.db.elephantsql.com port=5432 dbname=asmrdkjg user=asmrdkjg password=o4ohqa9LWB3zrPrbKx3N2EMS12LNyoS_";
    $conexao = pg_connect($conn_string) or die ("Não foi possível conectar ao servidor PostGreSQL");
    //caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
    echo "Conexão efetuada com sucesso!!";
?>


<?php
    $hostname = 'localhost'; // Endereço do servidor MySQL
    $database = 'seu_banco_de_dados'; // Nome do banco de dados
    $username = 'seu_usuario'; // Nome de usuário do MySQL
    $password = 'sua_senha'; // Senha do MySQL

    $conexao = new mysqli($hostname, $username, $password, $database);

    // Verifica a conexão
    if ($conexao->connect_error) {
        die('Erro na conexão: ' . $conexao->connect_error);
    }

    echo 'Conexão bem-sucedida';

    // Para executar consultas SQL, você pode usar $conexao->query() ou $conexao->prepare() para consultas preparadas.
?>

<?php
    $host = 'localhost'; // Endereço do servidor PostgreSQL
    $port = '5432'; // Porta do servidor PostgreSQL (normalmente 5432)
    $dbname = 'seu_banco_de_dados'; // Nome do banco de dados PostgreSQL
    $user = 'seu_usuario'; // Nome de usuário do PostgreSQL
    $password = 'sua_senha'; // Senha do PostgreSQL

    try {
        $conexao = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
        // Configura o PDO para lançar exceções em caso de erros
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Conexão bem-sucedida';
    } catch (PDOException $e) {
        echo 'Erro na conexão: ' . $e->getMessage();
    }
?>

<?php
    //Conexão com banco de dados
    $servername = "localhost"; //endereço do servidor
    $username="root";
    $password="usbw";
    $db_name="crud";

    //pdo - somente orientado objeto
    $connect =mysqli_connect($servername,$username,$password,$db_name);

    //codifica com o caracteres ao manipular dados do banco de dados
    //mysqli_set_charset($connect, "utf8");

    if(mysqli_connect_error()):
        echo "Falha na conexão: ". mysqli_connect_error();
    endif;
?>