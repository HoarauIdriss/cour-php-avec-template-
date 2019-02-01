
<?php
$db = Database::connect();
$statement = $db->query('SELECT * FROM categories');
$categories = $statement->fetchAll();
foreach($categories as $category)

{
  if($category['id'] == '1')
  
      echo '<li class="nav-item active"><a class="nav-link" href="#">' . $category['name'] . '</a></li>';
  
  else
  
      echo '<li class="nav-item active"><a class="nav-link" href="#">' . $category['name'] . '</a></li>';
}
 


 echo '<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" style="color: #BB2020 !important;" href="#">BURGER 974</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
           <a class="nav-link" href="index.php">burger
             <span class="sr-only">(current)</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php?action=about">tacos</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">pizza</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">boisson</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">snack</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">dessert</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>'


?>