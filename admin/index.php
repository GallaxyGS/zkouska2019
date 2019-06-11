<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR . 'header.php' ; ?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div class="table-responsive">
        <table class="table table-striped table-sm">
                  <thead>
                  <tr>
                    <th>ID Hráče</th>
                    <th>Jméno</th>
                    <th>Přijmení</th>
                    <th>Datum narození</th>
                    <th>Počet vstřelených gólů</th>
                    <th>Zobrazit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = $mysqli->prepare("SELECT * FROM players");
                  $sql->execute();
                  $result = $sql->get_result();
                         while ($players = $result->fetch_assoc()) {
                       ?>
                      <tr>
                       <td> <?php echo $players['id_player'];  ?> </td>
                       <td> <?php echo $players['firstname'];  ?> </td>
                       <td> <?php echo $players['lastname'];  ?> </td>
                       <td> <?php echo $players['birthdate'] ;  ?> </td>
                       <td> <?php echo $players['goal_number'];  ?> </td>
                       <td> <a href="hrac/<?php echo $players['id_player']?>">Zobrazit</a> </td>
                      <?php

                     }

                      ?> </tr>
                </tbody>
              </table>
            </div>
        </body>
      </html>



<?php include_once __DIR__ . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR .  'footer.php' ?></body>
