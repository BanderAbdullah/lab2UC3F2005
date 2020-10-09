<html>
  <head>
    <title>List of KL Restaurant</title>
  </head>
  <body>
    <center><h1>List of KL Restaurant</h1>
    <!--create table structure using HTML first-->
    <table border="1">
    <tr><th>Restaurant ID</th><th>Restaurant Name</th><th>Address</th><th>Phone</th></tr><tr><th>0</th><th>Subway Restaurant</th><th>Menara Standard Chartered, TPM</th><th>03-22441234</th></tr>
    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@admin1", "Database" => "apulab2exercise", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:lab2exercixsetp048323.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    ?>  
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if (!$conn){die("Error connection: ".sqlsrv_errors());
    }$tsql= "SELECT * FROM [dbo].[restaurant]";
    $getResults= sqlsrv_query($conn, $tsql);
    if ($getResults == FALSE){die(sqlsrv_errors());}
    </table></center></body></html>
