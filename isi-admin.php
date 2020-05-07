<section class="wrapper site-min-height">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                  <?php
                    if (isset($_SESSION['peringatan']))
                    {
                      if ($_SESSION['peringatan'] =="sukses")
                      {
                        echo "<div class='alert alert-success'><b>done!</b> UPDATE Databases Telah Terupdate.</div>";
                        $_SESSION['peringatan'] = "";
                      }
                      else if ($_SESSION['peringatan'] == "gagal")
                      {
                        echo "<div class='alert alert-danger'><b>Upss!</b> UPDATE Databases Gagal.</div>";
                        $_SESSION['peringatan'] = "";
                      }
                    }
                  ?>
                      <h4><i class="fa fa-angle-right"></i> COLOR INDICATOR</h4>
                  <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">0</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">1</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">2</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-warning">3</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-danger">4</button>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Other</button>
                    </div>
                  </div>              
                </div>      
              </div><br/><br/>
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
                        <form action='tambah.php' method ='post'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                    <h4 class='modal-title'>UPDATE ENGINE PART</h4>
                                </div>";
                    echo "<div class='modal-body'>
                              <p>No</p>
                              <input type='text' name='number' autocomplete='on' value = '".$output['no']."' class='form-control round-form'>

                              <p>Engine Number</p>
                              <input type='text' name='engine_no' autocomplete='on' value='".$output['engine_no']."' class='form-control round-form'>

                              <p>Type</p>
                              <input type='text' name='Type' autocomplete='on' value = '".$output['type']."'class='form-control round-form'>

                              <p>Planning Production</p>
                              <input type='text' name='plan_production' autocomplete='on' value = '".$output['plan_production']."'class='form-control round-form'>

                              <p>Status Background</p>
                              <input type='text' name='status' autocomplete='on' value = '".$output['status']."'class='form-control round-form'>
                              </div>";  
                    echo " <div class='modal-footer'>
                                    <button type='submit' class='btn btn-theme'>UPDATE!!!</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>";
              //<!-- modal -->      



                if ($kolom == 0)    
                    {
                     echo  "</div>";
                    }
                 }
            ?>
		</section><! --/wrapper -->