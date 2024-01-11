<?php 

include("admin/class/fonction.php");
$obj = new adminLog();
$post=$obj->display_post_public();
?>



<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="all-blog-posts">
              <div class="row">
                <?php while($posts=mysqli_fetch_assoc($post)){?>
              <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="upload/<?php echo $posts["post_p"];?>">
                    </div>
                    <div class="down-content">
                      <span><?php echo $posts["post_tittle"];?></span>
                      <a href="#"><h4><?php echo $posts["post_content"];?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $posts["pauthor"];?></a></li>
                        <li><a href="#"><?php echo $posts["p_date"];?></a></li>
                        <li><a href="#"><?php echo $posts["p_coment_count"];?> Coments</a></li>
                      </ul>
                      <p><?php echo $posts["post_summary"];?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                          <?php echo $posts["post_tag"];?>
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Donate</a></li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }?>
              
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>