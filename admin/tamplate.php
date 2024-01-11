
<?php 

include("class/fonction.php");
$obj = new adminLog();
session_start();
$id=$_SESSION['adminID'];
if($id==null){
  header('location:index.php');
}
if(isset($_GET['adminlogout'])){
  if($_GET['adminlogout']=='logout'){
      $obj->adminlogout();
  }
}


?>
<?php  include_once("include/header.php");?>


    <body class="sb-nav-fixed">
    <?php include_once("include/topnav.php"); ?>
        <div id="layoutSidenav">
        <?php include_once("include/side_nav.php"); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <?php
                        if(isset($view)){
                          if($view=="viewman"){
                            include("view/viewman_view.php");
                          }
                          elseif($view=="register"){
                            include("view/register_view.php");
                          }
                          elseif($view=="newman"){
                            include("view/newman_view.php");
                          }

                            
                              //2022 income
                              
                              elseif($view=="january22"){
                                include("view/view22/january22_view.php");
                              }
                              elseif($view=="february22"){
                                include("view/view22/february22_view.php");
                              }
                              elseif($view=="murch22"){
                                include("view/view22/murch22_view.php");
                              }
                              elseif($view=="april22"){
                                include("view/view22/april22_view.php");
                              }
                              elseif($view=="may22"){
                                include("view/view22/may22_view.php");
                              }
                              elseif($view=="june22"){
                                include("view/view22/june22_view.php");
                              }
                              elseif($view=="july22"){
                                include("view/view22/july22_view.php");
                              }
                              elseif($view=="august22"){
                                include("view/view22/august22_view.php");
                              }
                              elseif($view=="september22"){
                                include("view/view22/september22_view.php");
                              }
                              elseif($view=="october22"){
                                include("view/view22/october22_view.php");
                              }
                              elseif($view=="november22"){
                                include("view/view22/november22_view.php");
                              }
                              elseif($view=="december22"){
                                include("view/view22/december22_view.php");
                              }

                              //2023 income

                              elseif($view=="january23"){
                                include("view/view23/january23_view.php");
                              }
                              elseif($view=="february23"){
                                include("view/view23/february23_view.php");
                              }
                              elseif($view=="murch23"){
                                include("view/view23/murch23_view.php");
                              }
                              elseif($view=="april23"){
                                include("view/view23/april23_view.php");
                              }
                              elseif($view=="may23"){
                                include("view/view23/may23_view.php");
                              }
                              elseif($view=="june23"){
                                include("view/view23/june23_view.php");
                              }
                              elseif($view=="july23"){
                                include("view/view23/july23_view.php");
                              }
                              elseif($view=="august23"){
                                include("view/view23/august23_view.php");
                              }
                              elseif($view=="september23"){
                                include("view/view23/september23_view.php");
                              }
                              elseif($view=="october23"){
                                include("view/view23/october23_view.php");
                              }
                              elseif($view=="november23"){
                                include("view/view23/november23_view.php");
                              }
                              elseif($view=="december23"){
                                include("view/view23/december23_view.php");
                              }
                              
                             

                              //2024 income
                              
                              elseif($view=="january24"){
                                include("view/view24/january22_view.php");
                              }
                              elseif($view=="february24"){
                                include("view/view24/february22_view.php");
                              }
                              elseif($view=="murch24"){
                                include("view/view24/murch22_view.php");
                              }
                              elseif($view=="april24"){
                                include("view/view24/april22_view.php");
                              }
                              elseif($view=="may24"){
                                include("view/view24/may22_view.php");
                              }
                              elseif($view=="june24"){
                                include("view/view24/june22_view.php");
                              }
                              elseif($view=="july24"){
                                include("view/view24/july22_view.php");
                              }
                              elseif($view=="august24"){
                                include("view/view24/august22_view.php");
                              }
                              elseif($view=="september24"){
                                include("view/view24/september22_view.php");
                              }
                              elseif($view=="october24"){
                                include("view/view24/october22_view.php");
                              }
                              elseif($view=="november24"){
                                include("view/view24/november22_view.php");
                              }
                              elseif($view=="december24"){
                                include("view/view24/december22_view.php");
                              }

                              //2025 income
                              
                              elseif($view=="january25"){
                                include("view/view25/january22_view.php");
                              }
                              elseif($view=="february25"){
                                include("view/view25/february22_view.php");
                              }
                              elseif($view=="murch25"){
                                include("view/view25/murch22_view.php");
                              }
                              elseif($view=="april25"){
                                include("view/view25/april22_view.php");
                              }
                              elseif($view=="may25"){
                                include("view/view25/may22_view.php");
                              }
                              elseif($view=="june25"){
                                include("view/view25/june22_view.php");
                              }
                              elseif($view=="july25"){
                                include("view/view25/july22_view.php");
                              }
                              elseif($view=="august25"){
                                include("view/view25/august22_view.php");
                              }
                              elseif($view=="september25"){
                                include("view/view25/september22_view.php");
                              }
                              elseif($view=="october25"){
                                include("view/view25/october22_view.php");
                              }
                              elseif($view=="november25"){
                                include("view/view25/november22_view.php");
                              }
                              elseif($view=="december25"){
                                include("view/view25/december22_view.php");
                              }

                              //2026 income
                              
                              elseif($view=="january26"){
                                include("view/view26/january22_view.php");
                              }
                              elseif($view=="february26"){
                                include("view/view26/february22_view.php");
                              }
                              elseif($view=="murch26"){
                                include("view/view26/murch22_view.php");
                              }
                              elseif($view=="april26"){
                                include("view/view26/april22_view.php");
                              }
                              elseif($view=="may26"){
                                include("view/view26/may22_view.php");
                              }
                              elseif($view=="june26"){
                                include("view/view26/june22_view.php");
                              }
                              elseif($view=="july26"){
                                include("view/view26/july22_view.php");
                              }
                              elseif($view=="august26"){
                                include("view/view26/august22_view.php");
                              }
                              elseif($view=="september26"){
                                include("view/view26/september22_view.php");
                              }
                              elseif($view=="october26"){
                                include("view/view26/october22_view.php");
                              }
                              elseif($view=="november26"){
                                include("view/view26/november22_view.php");
                              }
                              elseif($view=="december26"){
                                include("view/view26/december22_view.php");
                              }
                          
                              //2022 expenses

                              elseif($view=="exjanuary22"){
                                include("view/exview22/exjanuary22_view.php");
                              }
                              elseif($view=="exfebruary22"){
                                include("view/exview22/exfebruary22_view.php");
                              }
                              elseif($view=="exmurch22"){
                                include("view/exview22/exmurch22_view.php");
                              }
                              elseif($view=="exapril22"){
                                include("view/exview22/exapril22_view.php");
                              }
                              elseif($view=="exmay22"){
                                include("view/exview22/exmay22_view.php");
                              }
                              elseif($view=="exjune22"){
                                include("view/exview22/exjune22_view.php");
                              }
                              elseif($view=="exjuly22"){
                                include("view/exview22/exjuly22_view.php");
                              }
                              elseif($view=="exaugust22"){
                                include("view/exview22/exaugust22_view.php");
                              }
                              elseif($view=="exseptember22"){
                                include("view/exview22/exseptember22_view.php");
                              }
                              elseif($view=="exoctober22"){
                                include("view/exview22/exoctober22_view.php");
                              }
                              elseif($view=="exnovember22"){
                                include("view/exview22/exnovember22_view.php");
                              }
                              elseif($view=="exdecember22"){
                                include("view/exview22/exdecember22_view.php");
                              }
                              //2023 expenses

                              elseif($view=="exjanuary23"){
                                include("view/exview23/exjanuary23_view.php");
                              }
                              elseif($view=="exfebruary23"){
                                include("view/exview23/exfebruary23_view.php");
                              }
                              elseif($view=="exmurch23"){
                                include("view/exview23/exmurch23_view.php");
                              }
                              elseif($view=="exapril23"){
                                include("view/exview23/exapril23_view.php");
                              }
                              elseif($view=="exmay23"){
                                include("view/exview23/exmay23_view.php");
                              }
                              elseif($view=="exjune23"){
                                include("view/exview23/exjune23_view.php");
                              }
                              elseif($view=="exjuly23"){
                                include("view/exview23/exjuly23_view.php");
                              }
                              elseif($view=="exaugust23"){
                                include("view/exview23/exaugust23_view.php");
                              }
                              elseif($view=="exseptember23"){
                                include("view/exview23/exseptember23_view.php");
                              }
                              elseif($view=="exoctober23"){
                                include("view/exview23/exoctober23_view.php");
                              }
                              elseif($view=="exnovember23"){
                                include("view/exview23/exnovember23_view.php");
                              }
                              elseif($view=="exdecember23"){
                                include("view/exview23/exdecember23_view.php");
                              }


                               //2024 expenses

                               elseif($view=="exjanuary24"){
                                include("view/exview24/exjanuary22_view.php");
                              }
                              elseif($view=="exfebruary24"){
                                include("view/exview24/exfebruary22_view.php");
                              }
                              elseif($view=="exmurch24"){
                                include("view/exview24/exmurch22_view.php");
                              }
                              elseif($view=="exapril24"){
                                include("view/exview24/exapril22_view.php");
                              }
                              elseif($view=="exmay24"){
                                include("view/exview24/exmay22_view.php");
                              }
                              elseif($view=="exjune24"){
                                include("view/exview24/exjune22_view.php");
                              }
                              elseif($view=="exjuly24"){
                                include("view/exview24/exjuly22_view.php");
                              }
                              elseif($view=="exaugust24"){
                                include("view/exview24/exaugust22_view.php");
                              }
                              elseif($view=="exseptember24"){
                                include("view/exview24/exseptember22_view.php");
                              }
                              elseif($view=="exoctober24"){
                                include("view/exview24/exoctober22_view.php");
                              }
                              elseif($view=="exnovember24"){
                                include("view/exview24/exnovember22_view.php");
                              }
                              elseif($view=="exdecember24"){
                                include("view/exview24/exdecember22_view.php");
                              }

                               //2025 expenses

                               elseif($view=="exjanuary25"){
                                include("view/exview25/exjanuary22_view.php");
                              }
                              elseif($view=="exfebruary25"){
                                include("view/exview25/exfebruary22_view.php");
                              }
                              elseif($view=="exmurch25"){
                                include("view/exview25/exmurch22_view.php");
                              }
                              elseif($view=="exapril25"){
                                include("view/exview25/exapril22_view.php");
                              }
                              elseif($view=="exmay25"){
                                include("view/exview25/exmay22_view.php");
                              }
                              elseif($view=="exjune25"){
                                include("view/exview25/exjune22_view.php");
                              }
                              elseif($view=="exjuly25"){
                                include("view/exview25/exjuly22_view.php");
                              }
                              elseif($view=="exaugust25"){
                                include("view/exview25/exaugust22_view.php");
                              }
                              elseif($view=="exseptember25"){
                                include("view/exview25/exseptember22_view.php");
                              }
                              elseif($view=="exoctober25"){
                                include("view/exview25/exoctober22_view.php");
                              }
                              elseif($view=="exnovember25"){
                                include("view/exview25/exnovember22_view.php");
                              }
                              elseif($view=="exdecember25"){
                                include("view/exview25/exdecember22_view.php");
                              }

                               //2026 expenses

                               elseif($view=="exjanuary26"){
                                include("view/exview26/exjanuary22_view.php");
                              }
                              elseif($view=="exfebruary26"){
                                include("view/exview26/exfebruary22_view.php");
                              }
                              elseif($view=="exmurch26"){
                                include("view/exview26/exmurch22_view.php");
                              }
                              elseif($view=="exapril26"){
                                include("view/exview26/exapril22_view.php");
                              }
                              elseif($view=="exmay26"){
                                include("view/exview26/exmay22_view.php");
                              }
                              elseif($view=="exjune26"){
                                include("view/exview26/exjune22_view.php");
                              }
                              elseif($view=="exjuly26"){
                                include("view/exview26/exjuly22_view.php");
                              }
                              elseif($view=="exaugust26"){
                                include("view/exview26/exaugust22_view.php");
                              }
                              elseif($view=="exseptember26"){
                                include("view/exview26/exseptember22_view.php");
                              }
                              elseif($view=="exoctober26"){
                                include("view/exview26/exoctober22_view.php");
                              }
                              elseif($view=="exnovember26"){
                                include("view/exview26/exnovember22_view.php");
                              }
                              elseif($view=="exdecember26"){
                                include("view/exview26/exdecember22_view.php");
                              }

                              //
                              elseif($view=="dashboard"){
                                include("view/dashboard_view.php");
                              }
                              elseif($view=="das"){
                                include("view/das_ex_view.php");
                              }
                            
                              elseif($view=="totalincom"){
                                include("view/totalincom_month_year_view.php");
                              }
                              elseif($view=="totalexpen"){
                                include("view/totalexpen_month_year_view.php");
                              }
                              elseif($view=="incomyear"){
                                include("view/income_year_view.php");
                               }
                               elseif($view=="exyear"){
                                include("view/expen_year_view.php");
                               }
                               elseif($view=="addpost"){
                                include("view/addpost_view.php");
                               }
                               elseif($view=="postview"){
                                include("view/add_post_view.php");
                               }

                               elseif($view=="editimg"){
                                include("view/edit_img_view.php");
                               }
                               
                               
                        }
                      ?>
                    </div>
                </main>
                <?php include_once("include/footer.php"); ?>
                <?php include_once("include/scrept.php"); ?>
            
        
 