<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/main.css">
  <link rel="stylesheet" href="http://bootstraptema.ru/plugins/2017/nivo-lightbox/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://bootstraptema.ru/plugins/2017/nivo-lightbox/script.js"></script>



  <title>Rostelecom</title>
  <link href="index.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://bootstraptema.ru/plugins/2017/nivo-lightbox/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

</head>

<body>
  <main class="header">
    <br>
    <div class="row">
      <div class="container">
        <nav class="nav navbar-inverse nav-pills nav-fill" style="background-color: silver;">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Main</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Data</a> </li>
          <li class="nav-item">
            <a class="nav-link" href="LINK.html">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ADMIN.html">Sing on | Sing in</a>
          </li>
        </nav>
      </div>
    </div>
    <br><br>

    <div class="container-fluid">
      <br>
      <div class="row">
        <div class="container">
          <div class="col-md-2">
          <nav class=" d-none d-md-block bg-light sidebar rounded">
            <div class="sidebar-sticky">

              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>
                  <h4>Machine: </h4>
                </span>
                <a class="d-flex align-items-center text-muted" href="#">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    1 without deviation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="DATA2.php">
                    <span data-feather="file-text"></span>
                     2 with deviation
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    machine № 3
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    machine № 4
                  </a>
                </li>
              </ul>
</div>
</nav>
          <br>

                            <div class="btn-group">
                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Specifications:
                              </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">average: 0.016</button>
                                <button class="dropdown-item" type="button">median: 1.004</button>
                                <button class="dropdown-item" type="button">max: 1.309</button>
                                <button class="dropdown-item" type="button">min: 0.730</button>
                              </div>
                            </div>


</div>


          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>

                                <div class="col-6">
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker10'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar">
                                  </span>
                              </span>
                          </div>
                      </div>
                  </div>
                  <script type="text/javascript">
                      $(function () {
                          $('#datetimepicker10').datetimepicker({
                              viewMode: 'years',
                              format: 'MM/YYYY'
                          });
                      });
                  </script></div>
            </div>

            <!--table-->
            <table class="table table-dark ">
            <thead>
              <tr>

                <th scope="col"> <div class="text-center">Vibration Sensor Data</div></th>
              </tr>
            </thead>
          </table>

            <script language="php">

            $con_str=mysql_connect('localhost', 'root', 'Nikita134');
              if(mysql_connect('localhost','root','Nikita134')){
              echo "<div class='text-center'>success</div>";
            }else{
              echo "<div class='text-center'>the fall</div>";
            }

              mysql_select_db('csv_db',$con_str);

            $result=mysql_query("SELECT * FROM tbl_name");

            echo '<div class="table-wrapper-scroll-y my-custom-scrollbar">';
            echo '<table class="table table-striped table-bordered table-striped mb-0">';


              while($row = mysql_fetch_array($result)){
             $ia=$row['COL 1'];
             $ib=$row['COL 2'];
             $ic=$row['COL 3'];
             $id=$row['COL 4'];
             $ie=$row['COL 5'];
            echo '<tr>';
           echo "<td>$ia</td>";
           echo "<td>$ib</td>";
            echo "<td>$ic</td>";
           echo "<td>$id</td>";
            echo "<td>$ie</td>";
            echo '</tr>';
             }


                          echo '</table>';
                          echo '</div>';
             mysql_close();

            </script>


          </main>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
  </main>

  <footer role="contentinfo" class="footer-copyright text-center py-3">
    <div class="container">
      <span class="text-muted">© Дикие ЕНОТЫ, стол № 11. Все права защищены.</span>
    </div>
  </footer>

</body>

</html>
