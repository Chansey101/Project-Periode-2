<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databasename = "oof";

 //verbinding met de server
 $conn = mysqli_connect($servername,$username, $password, $databasename);

 $sql = "SELECT * FROM users";

 //mysql queary suurt de query naar de database en voertg deze uit
 $result = mysqli_query($conn, $sql);

 $row = "";
 while ($record = mysqli_fetch_assoc($result)){

 $row .= "<tr>
        <td> {$record["ID"]} </td>
        <td> {$record["firstname"]} </td>
        <td> {$record["infix"]} </td>
        <td> {$record["lastname"]} </td>
          </tr>";

 }
 

?>

  
<div class="container">
    <div class="row">
    <div class="col-12">

    <table class="table-striped table -hover">
</table>
 <thead>
        <tr>
            <th scope="col">id </th>
            <th scope="col">Voornaam</th>
            <th scope="col">Tussenvoegsel</th>
            <th scope="col">Achternaam</th>
            <th scope="col">wachtwoord</th>
        </tr>
        </thead>
        <tbody>
           <?php echo $row; ?>
        </tbody>
       </table>        
     </div> 
   </div>
</div>
