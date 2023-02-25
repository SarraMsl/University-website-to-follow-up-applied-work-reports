<?php
@ob_start();
session_start();
?>
<style>

.bluediv {
  width:500px;
  word-wrap: break-word;
}
 
@media screen and (max-width: 600px){
thead{
display: none;
}

td{
display: block;
}

td:first-child{
background-image: linear-gradient(195deg, #49a3f1 0%, #1a73e8 100%);	 
 color: #fff;
 
text-align: center;
}

td:nth-child(2)::before{
}

td:nth-child(3)::before{
}

td:nth-child(4)::before{
}

td:nth-child(5)::before{
}
td:nth-child(6)::before{
}
td:nth-child(7)::before{
}

td{
text-align: right;
}

td::before{
float: left;
margin-right: 1rem;
font-weight: bold;
}
}
</style>
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
      University Of Tiaret
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  </head>
  <script type="text/javascript">
    function prevenBack() {
      window.history.forward()
    };
    setTimeout("prevenBack()", 0);
    window.onunload = function() {
      null;
    }
  </script>
  <body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/img/small-logos/binary.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold text-white">Binary Brain
          </span>
        </a>
      </div>
      </div>
      

      <hr class="horizontal light mt-0 mb-2">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/ensgdash.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/Deliverable.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Deliverable</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/work_individual.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Individual Work </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/work_grope.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">group</i>
              </div>
              <span class="nav-link-text ms-1">Collective work</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/link.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">link</i>
              </div>
              <span class="nav-link-text ms-1"> Link </span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/Remarque.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">feedback</i>
              </div>
              <span class="nav-link-text ms-1">Add Remarque</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Remarque_prof.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">feedback</i>
              </div>
              <span class="nav-link-text ms-1"> Remarque etudiant</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/note_indivudial.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">note_alt</i>
              </div>
              <span class="nav-link-text ms-1"> Note Indivudial </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../pages/note_colective.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">note_alt</i>
              </div>
              <span class="nav-link-text ms-1"> Note Colective </span>
            </a>
          </li>
     
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary " href="../pages/ensgprofile.php">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
  
     
        </ul>
      </div> 



      <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
          <a class="btn bg-gradient-primary mt-4 w-100 " href="logout0.php" type="button">
     <i class="material-icons opacity-10" style="margin-left: -45px">&nbsp   logout</i> LogOut</a>
  
        </div>
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <?php
include("conn.php");

$var =$_SESSION["user_id"];

          $sql=$conn->query("select `First_Name` from `teachers` WHERE id=' $var'");
          while($row=$sql->fetch_array()){
            ?>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="\Nouveau dossier\pages\ensgprofile.php" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none"><?php echo $row['First_Name']; ?></span>
                </a>   <?php }
                    ?>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
               
                  </li>
               
                  <li>

                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card"> 
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">

                <i class="material-icons opacity-10">receipt_long</i>
                  <?php

include("conn.php");

  $sql="select count(id_deliverable ) as total from deliverable   ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowz=$values["total"];

  ?>
                   <?php

include("conn.php");

  $sql="select count(id_deliverable) as total from deliverable  WHERE DATE(date) = curdate() ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowzf=$values["total"];

  ?>
  
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Deliverable</p>
                  <h4 class="mb-0"> <?php echo $num_rowz;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+ <?php echo $num_rowzf;?>&nbsp;</span>than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">group</i>
                </div>
                <?php

include("conn.php");

  $sql="select count(id_Collective_work) as total from Collective_work  ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowa=$values["total"];

  ?>
   <?php

include("conn.php");

  $sql="select count(id_Collective_work) as total from Collective_work  WHERE DATE(date) = curdate() ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowad=$values["total"];

  ?>
                <div class="text-end pt-1"> 
                  <p class="text-sm mb-0 text-capitalize">Collective work
</p>
                  <h4 class="mb-0"> <?php echo $num_rowa;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+<?php echo $num_rowad;?>&nbsp; </span>than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute"style="background-image: linear-gradient(195deg, rgb(251 244 0) 0%, #d1ca28 100%);">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <?php

include("conn.php");

  $sql="select count(id_work_Individual) as total from work_Individual  ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rows=$values["total"];

  ?>  
   <?php

include("conn.php");

    $sql="select count(id_work_Individual) as total from work_Individual  WHERE DATE(date) = curdate() ";
    $result = $conn->query($sql);
    $values=mysqli_fetch_assoc($result);
    $num_rowsy=$values["total"];
  
    ?>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize"> Individual work
</p>

                  <h4 class="mb-0"><?php echo $num_rows;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+<?php echo $num_rowsy;?>&nbsp;</span> than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">add_link</i>
                </div>
                <?php

include("conn.php");

  $sql="select count(id_link) as total from link  ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowt=$values["total"];

  ?>
                  <?php

include("conn.php");

  $sql="select count(id_link) as total from link  WHERE DATE(date) = curdate() ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowth=$values["total"];

  ?>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Link</p>
                  <h4 class="mb-0"><?php echo $num_rowt;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+<?php echo $num_rowth;?>&nbsp;</span>than yesterday</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4"  >
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute" style="background-image: linear-gradient(195deg, #f44335 0%, #da635a 100%);">
                  <i class="material-icons opacity-10">feedback</i>
                </div>
                <?php
                include("conn.php");

  $sql="select count(id_Remarque	) as total from remarque	  ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowcc=$values["total"];

  ?>
                  <?php
include("conn.php");

  $sql="select count(id_Remarque) as total from remarque WHERE DATE(date) = curdate() ";
  $result = $conn->query($sql);
  $values=mysqli_fetch_assoc($result);
  $num_rowthh=$values["total"];

  ?>
    
  
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Remarque</p>
                  <h4 class="mb-0"><?php echo $num_rowcc;?></h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+<?php echo $num_rowthh;?></span> than yesterday</p>
              </div>
            </div>
          </div>
        </div>
      
        
        <div class="card-body">
            <p class="text-sm "></p>
            <hr class="dark horizontal">     
                  <h6 class="mb-0 " style="margin-left: 3%;"> Professor</h6>
            <div class="d-flex ">
              <p class="mb-0 text-sm"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div style="display: flex;">
        <div class="container-fluid py-4" style="margin-left:-5%;width: 900%;">
          <div class="row">
            <div class="col-12">
              <div class="card my-4"style="margin-left:5%;width: 130%;">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3"> Professor of Binary brain team  </h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Members</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gender</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Module</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobile</th>
                       
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      include("conn.php");

                        $sql=$conn->query("select * from `teachers` ");
                        while($row=$sql->fetch_array()){
                          ?>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="data:upload/png;charset=utf8;base64,<?php echo base64_encode($row['Photo']); ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"> <?php echo $row['First_Name']; ?>&nbsp;<?php echo $row['Last_Name']; ?></h6>
                                <p class="text-xs text-secondary mb-0"> <?php echo $row['Email']; ?></p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0"> <?php echo $row['Gender']; ?></p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Faculties']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Department']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Speciality']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Mobile1']; ?></span>
                          
                          </td>
                          <td class="align-middle">&nbsp;
                          
                
                  
    
                 
                       
                        </tr>
                       
                        <?php }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
                 
        <div class="card-body">
            <p class="text-sm "></p>
            <hr class="dark horizontal">     
                  <h6 class="mb-0 " style="margin-left: 3%;"> team</h6>
            <div class="d-flex ">
              <p class="mb-0 text-sm"></p>
            </div>
          </div>
        </div>
      </div>
          <div style="display: flex;">
        <div class="container-fluid py-4" style="margin-left:-5%;width: 900%;">
          <div class="row">
            <div class="col-12">
              <div class="card my-4"style="margin-left:5%;width: 130%;">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3"> Binary brain team  </h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Members</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of birth </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">University</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Facultie</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Speciality</th>
                          
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Skills</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Languages</th>
                       
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                     include("conn.php");

                        $sql=$conn->query("select * from `addadmin` ");
                        while($row=$sql->fetch_array()){
                          ?>
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="data:upload/png;charset=utf8;base64,<?php echo base64_encode($row['Photo']); ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"> <?php echo $row['Username']; ?></h6>
                                <p class="text-xs text-secondary mb-0"> <?php echo $row['Email_Department']; ?></p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-xs font-weight-bold mb-0"> <?php echo $row['birth']; ?></p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['University']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Facultie']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Speciality']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Skills']; ?></span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"> <?php echo $row['Languages']; ?></span>
                          </td>
                        
                          
                
                  
    
    
                 
                       
                        </tr>
                       
                        <?php }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="card-body">
          <p class="text-sm "></p>
          <hr class="dark horizontal">           <h6 class="mb-0 " style="margin-left: 3%;">Deliverable</h6>

          <div class="d-flex ">
            <p class="mb-0 text-sm"></p>
          </div>
        </div>
      </div style="margin-left:1%;width: 120%;">
    </div>
  </div>
  
  <div class="row">
                <div class="col-md-7 mt-4"style="margin-left:1%;width: 120%;">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Deliverable</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php
    include("conn.php");

        $sql=$conn->query("select * from `deliverable` where DATE(date) = curdate() ");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                          <div class="d-flex flex-column">
                            <span class="mb-2 text-xs">Full Name: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['Full_Name']; ?></span></span>
                        <span class="mb-2 text-xs">Date: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Date']; ?></span></span>
                        <span class="mb-2 text-xs">Venue: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Venue']; ?></span></span>
                        <span class="mb-2 text-xs">Attendees: <span class="text-dark ms-sm-2 font-weight-bold"><br><?php echo $row['Attendees_01']; ?><br><?php echo $row['Attendees_02']; ?><br><?php echo $row['Attendees_03']; ?><br><?php echo $row['Attendees_04']; ?></span></span>
                        <span class="mb-2 text-xs">Absendess: <span class="text-dark font-weight-bold ms-sm-2"><br><?php echo $row['Absendess_01']; ?><br><?php echo $row['Absendess_02']; ?><br><?php echo $row['Absendess_03']; ?><br><?php echo $row['Absendess_04']; ?></span></span>
                        <span class="mb-2 text-xs">Subject of meeting: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Subject_of_meeting']; ?></span></span>
                        <span class="mb-2 text-xs">Metting Summary: <span class="text-dark font-weight-bold ms-sm-2"><div class="bluediv"><?php echo $row['Metting_Summary']; ?></div></span></span>
                        <span class="mb-2 text-xs"> Actions: <span class="text-dark font-weight-bold ms-sm-2"><div class="bluediv"><?php echo $row['Actions']; ?></div></span></span>
                        <span class="mb-2 text-xs"><i class="material-icons opacity-10">download</i>
Pdf Metting Report : <span class="text-dark ms-sm-2 font-weight-bold">

         
                <a href="download.php?file=<?php echo $row['file_of_meeting'] ?>">Download</a><br>
              
</span></span>
        
                          </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                        </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
         
          </div>
        </div>

        
      
        <div class="row">
                <div class="col-md-7 mt-4"style="margin-left:1%;width: 120%;">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Individual work</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php
    include("conn.php");

        $sql=$conn->query("select * from `work_individual` where DATE(date) = curdate() ");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                          <div class="d-flex flex-column">
                          <span class="mb-2 text-xs">Full Name of member one: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['Full_Name']; ?></span></span>
                        <span class="mb-2 text-xs">Date: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Date']; ?></span></span>
                        <span class="mb-2 text-xs">Status of task : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Status_of_task']; ?></span></span>
                        <span class="mb-2 text-xs">Subject of task : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Subject_of_task']; ?></span></span>
                        <span class="mb-2 text-xs">Task Summary: <span class="text-dark font-weight-bold ms-sm-2"><div class="bluediv"><?php echo $row['Task_Summary']; ?></div></span></span>
                        <span class="mb-2 text-xs"><i class="material-icons opacity-10">download</i>
Pdf Metting Report : <span class="text-dark ms-sm-2 font-weight-bold">

                <a href="download.php?file=<?php echo $row['file'] ?>">Download</a><br>
              
</span></span>
        
                          </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                          </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
         
          </div>
        </div>
        <div class="row">
                <div class="col-md-7 mt-4"style="margin-left:1%;width: 120%;">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Collective work</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php

include("conn.php");

        $sql=$conn->query("select * from `collective_work` where DATE(date) = curdate()");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                        <span class="mb-2 text-xs">Full Name of member one:  <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['member_01']; ?></span></span>
                        <span class="mb-2 text-xs">Full Name of member tow:  <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['member_02']; ?></span></span>
                        <span class="mb-2 text-xs">Full Name of member tree: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['member_03']; ?></span></span>
                        <span class="mb-2 text-xs">Full Name of member four: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['member_04']; ?></span></span>
                        <span class="mb-2 text-xs">Date: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Date']; ?></span></span>
                        <span class="mb-2 text-xs">Status of task : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Status_of_task']; ?></span></span>
                        <span class="mb-2 text-xs">Subject of task : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Subject_of_task']; ?></span></span>
                        <span class="mb-2 text-xs">Task Summary: <span class="text-dark font-weight-bold ms-sm-2"><div class="bluediv"><?php echo $row['Task_Summary']; ?></div></span></span>
                        <span class="mb-2 text-xs"><i class="material-icons opacity-10">download</i>
Pdf Metting Report : <span class="text-dark ms-sm-2 font-weight-bold">
                <a href="download.php?file=<?php echo $row['file'] ?>">Download</a><br>
              
</span></span>
        
                          </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                          </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
         
          </div>
        </div>
        <div class="row">
                <div class="col-md-7 mt-4"style="margin-left:1%;width: 120%;">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Link</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php
   include("conn.php");

        $sql=$conn->query("select * from `link` where DATE(date) = curdate()");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                        <span class="mb-2 text-xs">Full Name: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['Full_Name']; ?></span></span>
                        <span class="mb-2 text-xs">Date: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Date']; ?></span></span>
                        <span class="mb-2 text-xs">Type of work: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Type_of_work']; ?></span></span>
                        <span class="mb-2 text-xs">subject of work: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Subject_of_work']; ?></span></span>
                        <span class="mb-2 text-xs">Name of link: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Name_of_link']; ?></span></span>
                        <span class="mb-2 text-xs">Link: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Link']; ?></span></span>
                        <span! class="mb-2 text-xs">Description: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Description']; ?></span></span>

                        </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                         </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
         
          </div>
        </div>
   
         
          </div>
        </div>
        <div class="row">
                <div class="col-md-7 mt-4" style="margin-left:1%;width: 120%;">
                  <div class="card">
                    <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Remarque  Etudiant</h6>
                    </div>
                       
      
  
                    <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                      <?php
   include("conn.php");

        $sql=$conn->query("select * from `remarque` where `Type`!='1' and DATE(date) = curdate()");
        while($row=$sql->fetch_array()){
          ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                          <div class="d-flex flex-column">
                          <span class="mb-2 text-xs">Type of work: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Type_of_work']; ?></span></span>
                            <span class="mb-2 text-xs">subject of work: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['subject_of_work']; ?></span></span>
                            <span class="mb-2 text-xs">To: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['To']; ?></span></span>
                            <span class="mb-2 text-xs">Date: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $row['Date']; ?></span></span>
                            <span class="mb-2 text-xs">Remarque: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $row['Remarque']; ?></span></span>
                       
                          </div>
                          <div class="ms-auto text-end">
                            <div class="form-check form-check-info text-start ps-0">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                              <label class="form-check-label" for="flexCheckDefault">
                                seen
                              </label>
                            </div>
                        </div>
                        </li>
                  
                        <?php }
                        ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
        </footer>
      </div>
    </main>
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Binary Brain </h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
              <i class="material-icons">clear</i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-info active" data-color="info" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
              <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
          <!-- Navbar Fixed -->
          <div class="mt-3 d-flex">
            <h6 class="mb-0">Navbar Fixed</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
          </div>
          <hr class="horizontal dark my-3">
          <div class="mt-2 d-flex">
            <h6 class="mb-0">Light / Dark</h6>
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
          </div>
         
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");
  
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["M", "T", "W", "T", "F", "S", "S"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
  
  
      var ctx2 = document.getElementById("chart-line").getContext("2d");
  
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6
  
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
  
      var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");
  
      new Chart(ctx3, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6
  
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
  </body>
  
  </html>