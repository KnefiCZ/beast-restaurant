<?php require_once "header.php";?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Vytvořeno v:</th>
                      <th>Produjt/y</th>
                      <th>ID uživatele</th>
                      <th>ID platební metody</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Vytvořeno v:</th>
                      <th>Produjt/y</th>
                      <th>ID uživatele</th>
                      <th>ID platební metody</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                      <?php 
                         try {
                            $orders = Model::getOrders();
                        } catch (\Throwable $th) {
                            echo "Nepovedl se SELECT z orders!" . "<br>";
                            $orders = array();
                            var_dump($th);
                        }           
                      ?>
                   <?php  foreach ($orders as $order) {
                       ?> <tr>
                      <td><?php echo $order->id_order;?></td>
                      <td><?php echo $order->created_at;?></td>
                      <td><?php# echo $order->id_product;?></td>
                      <td><?php echo $order->id_user;?></td>
                      <td><?php echo $order->id_payment;?></td>
                      <?php
                            } ?>
                            
                    </tr>
                    
                  </tbody>
                </table>
                <form action="add_order.php">
                  <input type="submit" value="Přidat další do ORDERS.">
                </form>
              </div>
            </div>
          </div>
                            
        </div>

                
<?php
    require_once "footer.php";
?>
