
<!-- Pokus o jakoze incert :DDDDDDDDD --> 
<?php require_once "header.php";?>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->

              <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Heslo</th>
                      <th>Jméno</th>
                      <th>Příjmení</th>
                      <th>Adresa</th>
                      <th>Město</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Heslo</th>
                      <th>Jméno</th>
                      <th>Příjmení</th>
                      <th>Adresa</th>
                      <th>Město</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                      <?php 
                         try {
                            $users = Model::getUsers();
                        } catch (\Throwable $th) {
                            echo "Nepovedl se SELECT z users!" . "<br>";
                            $users = array();
                            var_dump($th);
                        }         
                      ?>
                   <?php  foreach ($users as $user) {
                       ?> <tr>
                      <td><?php echo $user->id_user;?></td>
                      <td><?php echo $user->email;?></td>
                      <td><?php echo $user->password;?></td>
                      <td><?php echo $user->firstname;?></td>
                      <td><?php echo $user->lastname;?></td>
                      <td><?php echo $user->address;?></td>
                      <td><?php echo $user->city;?></td>
                      <?php
                            } ?>
                            
                    </tr>
                  </tbody>
                </table>
                <form action="add_user.php">
                  <input type="submit" value="Přidat další do USERS.">
                </form>
              </div>
            </div>
          </div>
                            
        </div>

   
    
   
<?php
    require_once "footer.php";
?>