
<?php

include_once 'model/Conexao.class.php';
include_once 'model/Manager.class.php';

$manager = new Manager();


  session_start();



?>
<html>
    <head>
     <link rel="stylesheet" type="text/css" href="css/painel.css">
    <script type="text/javascript" src="js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ee8ae90c8c.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>

      <aside class="al-sidebar">
          <div class="position: relative; overflow: hidden; width: auto; height: 351px;">
          <ul class="al-sidebar-list" style="overflow: hidden;text-shadow: none;white-space: nowrap;">
              <li class="al-sidebar-list-item  select-items"  ui-sref-active="selected" ba-sidebar-toggling-item="item"></li>
              <a   class="al-sidebar-list-link ng-scope" href="painel.php"><i class="ion-android-home"></i><span class="ng-binding">Lista de User</span></a>

          </ul>
         </div>
      </aside>
      <div class="page-top">
              <a href="https://site.signoweb.com.br/" class="al-logo clearfix"><span>Signo</span></a>

      </div>
      <div class="al-main">
      <div class="al-content">
          <content-top>
            <div class="content-top clearfix">
                  <h1 class="al-title ng-binding"> Bem vindo </h1>
              <ul class="al-breadcrumb">
               <li> <a href="logout.php"> Sair </a></li>
          </div>
          </content-top>
      </div>
      <div class="row">
          <div col-md-12>
              <div class="panel panel-blur medium-panel traffic-panel" style="background-size: 1913px 1076px; background-position: 0px -321px;">
                  <div class="panel-heading clearfix"><h3 class="panel-title">Lista de Usuario</h3></div>
                  <div class="panel-body" ng-transclude="">
                    <table class="table table-striped">
                      <thead>
                         <tr>
                           <td style="position: sticky; background-color: #EAEAEA; top: -15px;">Nome</th>
                           <td style="position: sticky; background-color: #EAEAEA; top: -15px;">E-mail</td>
                         </tr>
                       </thead>
                       <tbody>
                         <?php foreach($manager->listClient("usuario") as $client): ?>
                           <tr>
                               <td><?php echo $client['nome']; ?></td>
                               <td><?php echo $client['email']; ?></td>
                           </tr>
                           <?php endforeach; ?>
                       </tbody>
                    </table>
                  </div>
          </div>
      </<div>

      </div>
      </div>
      </div>


  </body>
</html>
