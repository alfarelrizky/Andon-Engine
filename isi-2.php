<section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> LIST ENGINE PART</h3>
          	<hr>
            <?php
            $kolom = 0;
              $lihat = "SELECT *from `engine_number` order by plan_production desc";
              $lihatquery = mysqli_query($koneksi,$lihat);
              while ($output = mysqli_fetch_array($lihatquery))
                 {
                    $kolom +=1;
                    if ($kolom == 1)    
                    {
                     echo  "<div class='row mt'>";
                    }
                    else if ($kolom == 3)
                    {
                      $kolom = 0;
                    }

                    echo "<div class='col-md-4 col-sm-4 mb'>";
                    echo "  <div class='stock card' >";
                    echo "    <div class='stock-chart' style='box-shadow:0 0 7px black;'>";
                    echo "        <div class='project'>";
                    echo "           <div class='photo-wrapper'>";
                    echo "                <div class='photo'>";
                    if ($output['status'] == '0')
                    {
                      echo "<button type='button' class='fancybox btn btn-primary' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }
                    else if ($output['status'] == '1')
                    {
                      echo "<button type='button' class='fancybox btn btn-success' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }
                    else if ($output['status'] == '2')
                    {
                      echo "<button type='button' class='fancybox btn btn-info' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }
                    else if ($output['status'] == '3')
                    {
                      echo "<button type='button' class='fancybox btn btn-warning' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }
                    else if ($output['status'] == '4')
                    {
                      echo "<button type='button' class='fancybox btn btn-danger' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }
                    else
                    {
                      echo "<button type='button' class='fancybox btn btn-default' style='width: 100%;height:300px;font-size: 500%' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                    }

                    echo $output['engine_no']
                                      ."</button>";
                    echo "               </div>
                                    <div class='overlay'></div>
                                </div>
                            </div>
                        </div>
                        <div class='stock current-price'style='box-shadow:0 0 7px black;' >
                          <div class='row'>";
                    echo "        <div class='info col-sm-6 col-xs-6' ><abbr>".$output['plan_production']."</abbr>
                                    <time>UNIT</time>";
                    echo "        </div>
                                      <div class='changes col-sm-6 col-xs-6'>
                                        <div class='value up'><i class='fa hidden-sm hidden-xs'></i>".$output['type']."</div>
                                        <div class='change hidden-sm hidden-xs'>MODEL CODE</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>";
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
                                echo "<button type='button' class='fancybox btn btn-primary' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '1')
                              {
                                echo "<button type='button' class='fancybox btn btn-success' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '2')
                              {
                                echo "<button type='button' class='fancybox btn btn-info' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '3')
                              {
                                echo "<button type='button' class='fancybox btn btn-warning' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else if ($output['status'] == '4')
                              {
                                echo "<button type='button' class='fancybox btn btn-danger' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
                              }
                              else
                              {
                                echo "<button type='button' class='fancybox btn btn-default' style='width: 100%;height:500px;font-size: 400px' data-toggle='modal' href='index.php#".$output['engine_no']."'>";
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



                if ($kolom == 0)    
                    {
                     echo  "</div>";
                    }
                 }
            ?>
		</section><! --/wrapper -->