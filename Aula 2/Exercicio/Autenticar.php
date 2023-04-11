<?php
session_start();
if($_SESSION && isset($_SESSION['IdUsuario']) && isset($_SESSION['NomeUsuario']) && isset($_SESSION['LoginUsuario']))
{
    $IdUsuario = $_SESSION['IdUsuario'];
    $NomeUsuario = $_SESSION['NomeUsuario'];
    $LoginUsuario = $_SESSION['LoginUsuario'];
}
else{
    header('Location:index.php');
}
// echo

// <div class="container">
//   <div class="row">
//       <div class="col-sm-12 mt-3 p-3">
//          <p>
//                Id:<?=$IdUsuario? | 
//               Nome:'.$NomeUsuario.'? | 
//               Login:'$LoginUsuario.'? | 
//             <a href="AutenticarSair.php" class="btn btn-danger">VAZA</a>  
//            </p>
//        </div>
//    </div>
// </div>
?>