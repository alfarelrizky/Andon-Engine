<section class="wrapper site-min-height">
          	<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                      <h4><i class="fa fa-angle-right"></i> ENGINE NUMBER</h4>
            <?php
            $kolom = 0;
              $lihat = "SELECT *from `engine_number` order by plan_production desc";
              $lihatquery = mysqli_query($koneksi,$lihat);
              while ($output = mysqli_fetch_array($lihatquery))
                 {
                    $kolom +=1;
                    if ($kolom == 1)    
                    {
                     if($output['status'] == '0')
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-primary' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '1')
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-success' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '2')
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-info' data-toggle='info' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '3')
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-warning' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '4')
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-danger' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else 
                     {
                      echo "<div class='btn-group btn-group-justified'>
                              <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-default' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."'</button>
                              </div>";
                     }
                    }
                    else if ($kolom < 6)
                    {
                      if($output['status'] == '0')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-primary' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '1')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-success' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '2')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-info' data-toggle='info' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '3')
                     {
                      echo " <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-warning' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else if ($output['status'] == '4')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-danger' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>";
                     }
                     else 
                     {
                      echo " <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-default' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                    }
                    
                    //modal pop up
                    //<!-- Modal -->
                    echo "<div aria-hidden='true' aria-labelledby='myModalLabel' role='dialog' tabindex='-1' id='".$output['engine_no']."' class='modal fade'>
                        <div class='modal-dialog' style='width:90%;height:90%;'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                    <h4 class='modal-title'>ENGINE PART</h4>
                                </div>
                                <div class='modal-body'>";
                              if ($output['status'] == '0')
                              {
                                echo "<blink><button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-primary' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'></blink>";
                              }
                              else if ($output['status'] == '1')
                              {
                                echo "<button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-success' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '2')
                              {
                                echo "<button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-info' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '3')
                              {
                                echo "<button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-warning' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '4')
                              {
                                echo "<button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-danger' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else
                              {
                                echo "<button type='button' id='berkedip".$output['no']."' class='fancybox btn btn-default' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              echo $output['engine_no']."
                                        </button>
                                </div>
                                <div class='modal-footer'>
                                    <button data-dismiss='modal' class='btn btn-theme' type='button'>OK</button>
                                </div>
                            </div>
                        </div>
                    </div>";
              //<!-- modal -->      



                if ($kolom == 6)    
                    {
                      $kolom = 0;
                      if($output['status'] == '0')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-primary' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     else if ($output['status'] == '1')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-success' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     else if ($output['status'] == '2')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-info' data-toggle='info' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     else if ($output['status'] == '3')
                     {
                      echo " <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-warning' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     else if ($output['status'] == '4')
                     {
                      echo "  <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-danger' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     else 
                     {
                      echo " <div class='btn-group'>
                                <button type='button' style='height:120px;font-size:40px' class='btn btn-default' data-toggle='modal' href='index.php#".$output['engine_no']."'>".$output['engine_no']."</button>
                              </div>
                              ";
                     }
                     echo  "</div><br/><br/>";
                    }

                    echo "<script>
                      setInterval(function(){
                              setInterval(function(){
                              document.getElementById('berkedip".$output['no']."').style.background = 'black';
                              },500);";

                              if($output['status'] == '0')
                               {
                                echo "  setInterval(function(){
                                        document.getElementById('berkedip".$output['no']."').style.background = '#428bca';
                                        },1000);";
                               }
                               else if ($output['status'] == '1')
                               {
                                echo "  setInterval(function(){
                                        document.getElementById('berkedip".$output['no']."').style.background = '#5cb85c';
                                        },1000);";
                               }
                               else if ($output['status'] == '2')
                               {
                                echo "  setInterval(function(){
                                        document.getElementById('berkedip".$output['no']."').style.background = '#5bc0de';
                                        },1000);";
                               }
                               else if ($output['status'] == '3')
                               {
                                echo "  setInterval(function(){
                                        document.getElementById('berkedip".$output['no']."').style.background = '#f0ad4e';
                                        },1000);";
                               }
                               else if ($output['status'] == '4')
                               {
                                echo "  setInterval(function(){
                                        document.getElementById('berkedip".$output['no']."').style.background = '#d9534f';
                                        },1000);";
                               }
                               else 
                               {
                                echo " setInterval(function(){
                                document.getElementById('berkedip".$output['no']."').style.background = '#fff';
                                },500);";
                               }
                          echo "},1000);
                    </script>";
                 }
            ?>
            </div>
          </div>
		</section><! --/wrapper -->