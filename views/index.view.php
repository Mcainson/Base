<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    <title>Document</title>
</head>
<body>

	<?php require('partials/nav.php')  ?>
    <ul>
    	<h1>My tasks</h1>
      <?php
      
      /*foreach($tasks as $tasks=>$valor){
        echo '<li>'.$valor['Nombre'].'</li>';
    }*/
        ?>
    </ul>
         <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nombre</td>  
                                    <td>Apellidos</td>  
                                    <td>Correo</td>
                                    <td>ACTION</td>    
                               </tr>  
                          </thead>  
                          <?php  
                          foreach($tasks as $tasks=>$valor) 
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$valor["Nombre"].'</td>  
                                    <td>'.$valor["Apellidos"].'</td>  
                                    <td>'.$valor["correo"].'</td> 
                                    <td></td>    
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>   
      </body>  
 </html>  


 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
    <form method="POST" action="/names">
        <input type="" name="name">
        <button type="submit">Subir</button>

    </form>
</body>
</html>