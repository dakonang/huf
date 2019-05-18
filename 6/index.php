<?php
include('config.php');
?>
	
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
     <!-- Untuk Google Chrome, Firefox & Opera --> 
     
     <meta name="theme-color" content="#F0F8FF">
     <!-- Untuk Windows Phone --> 
     <meta name="msapplication-navbutton-color" content="#F0F8FF"> 
     <!-- Untuk Safari iOS --> 
     <meta name="apple-mobile-web-app-capable" content="yes"> 
     <meta name="apple-mobile-web-app-status-bar-style" content="#F0F8FF">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <title >bootcamp</title>
  </head>
  <style>
      

  </style>
  
  <body style="background-color:#F5F5F5;">



<div class="container mt-5">

<form method="POST" action="simpan.php">
  <div class="form-group">
    <label for="name">nama</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="masukan nama">
    
  </div>
  <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>
<br><br>
<?php
      $sql = "SELECT * FROM users ORDER BY id asc";

       $query = mysqli_query($con, $sql);
       while($data = mysqli_fetch_array($query)){ 
           $id = $data['id'];
           ?>
           <table class="table table-bordered">
               <tbody>
                   <tr>
                       <td width="50%">
                           <b><?= $data['name']; ?></b>
                       </td>
                       <td rowspan="2">
                           <form method="POST" action="add_skill.php">
                           <div class="form-row">
                               <input type="hidden" name="user_id" value="<?= $id ?>" >
                               <div class="col col-md-7">
                                   <input type="text" name="skill" class="form-control" placeholder="skill">
                               </div>
                               <div class="col">
                                   <input class="btn btn-primary" type="submit" name="submit" value="+">
                               </div>
                           </div>
                           </form>
                       </td>
                   </tr>
                   <tr>
                       <td>
                           <?php
                           $d = $data['id'];
                           $sql2 = "SELECT * FROM skill WHERE user_id=$d";
                           $query2 = mysqli_query($con, $sql2);
                           while($data2 = mysqli_fetch_array($query2)){
                               echo $data2['skill'].' ';
                               
                               }
                           ?>
                       </td>
                       
                   </tr>
               </tbody>
           
           </table>
           
           
           
        <?php
        }
        ?>
</div><!-- container-->
</body>

</html>





        
            

            
            
            

            