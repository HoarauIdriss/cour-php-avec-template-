<?php

include('view/inc/db.php');
include('view/inc/parameter.php');

/* Page include qui inclut mes pages .php */
include('view/HEADER.php');
include('view/HEAD.php');

/* Si il ne récupère pas la fonction get action renvoi rien sinon renvoie get action */
if(!isset($_GET['action']))
    $action  = '';
else 
    $action = $_GET['action'];

/* switch avec about quand je clique sur about sinon casse/arrête toi */
switch ($action) {
    case 'about' :
        include('view/about.php');
    break;
/* Par défault inclut le body */
    default :
        include('view/BODY.php');
    break;

}

include('view/FORM.php');





include('view/FOOTER.php');


?>