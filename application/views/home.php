<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>
<?php $this->load->view('includes/carousel-slide');?>
<div class="container">
    <div class="row">
         <div class="col-md-12">
             <center><p class="bg-primary"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></p></center>
         </div>
    </div>
    <div class="row">
        <div class="col-md-12">
           <div class="main-title">Latest News</div>
            <p class="main-subtitle">Learn every updates inside Robinson Communities</p>
            <div class="main-border"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <?php foreach($blogs as $blog):?>
            <div class="row">
                <div class="col-md-12">
                    <h2>Blogs</h2>
                    <div class="row">
                        <div class="col-md-12 col-md-offset-7">
                          <?php 
                                  $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y | <i class='fa fa-clock-o fa-fw'></i> %h:%i%A ";
                                  $date = $blog['blog_date_posted'];
                                  
                                  $unix = mysql_to_unix($date);
                                  echo mdate($datestring, $unix);
                                ?>                
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo base_url();?>image/blog_img/<?php echo $blog['blog_img'];?>" width="300" height="259" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h3><a class="link-color" href="<?php echo base_url();?>home/blog"><i class="fa fa-quote-left fa-fw"></i><?php echo $blog['blog_title'];?></a></h3>
                            <blockquote><p class="justify-align-text"><?php echo $blog['blog_content'];?></p></blockquote>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-7">
                            <a href="<?php echo base_url();?>home/blog" class="btn btn-primary btn-sm pull-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

            <div class="row">
                <div class="col-md-12">
                    <h2>News</h2>
                    <div class="row">
                        <div class="col-md-12 col-md-offset-7">
                           <?php 
                                  $datestring = "<i class='fa fa-calendar fa-fw'></i> %D %F %d, %Y | <i class='fa fa-clock-o fa-fw'></i> %h:%i%A ";
                                  $date = $blog['blog_date_posted'];
                                  
                                  $unix = mysql_to_unix($date);
                                  echo mdate($datestring, $unix);
                                ?>                
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-responsive" src="<?php echo base_url();?>image/rob-news.jpg">
                        </div>
                        <div class="col-md-8">
                            <h3><a class="link-color" href="#"><i class="fa fa-quote-left fa-fw"></i>FirstBuyer</a></h3>
                            <blockquote><p class="justify-align-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor</p></blockquote>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-7">
                            <a href="<?php echo base_url();?>home/blog" class="btn btn-primary btn-sm pull-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <br><?php $this->load->view('includes/contacts');?>
        </div>
    </div>
</div>

<!-- OUR PROJECT START -->
<div class="row">
    <div class="col-md-12 hidden-xs" id="our-projects">
        <div class="row">
            <div class="col-md-12">
                 <div class="main-title">Live Simply Happy</div>
                <p class="main-subtitle">Explore the different Robinsons Communities neighborhoods and find your dream affordable quality condominium today!</p>
                <div class="main-border"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/acaciaescalades">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/AcaciaEscalades/ACEPerspective.jpg" alt="img"></div>
                    <div class="info">
                    <img class="img-responsive" src="<?php echo base_url();?>image/AcaciaEscalades/ACEPerspective2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Acacia Escalades</h3>
                <p>Only 5 minutes from Eastwood City, Acacia Escalades is a modern Filipiniana-inspired mid-rise residential enclave nestled in the quiet side of Calle Industria cor. Amang Rodriguez Ave., Pasig City.
                <br><br>Acacia Escalades offers you and your family a serene haven coupled with the convenience of living in the center of Eastern Manila’s rising commercial hub.
The development also includes retail spaces for lease such as a Robinsons Supermarket so that daily household needs will truly just be an elevator ride away.
                <br><a href="properties/acaciaescalades" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/axisresidences">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/AXISResidences/AXIS.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/AXISResidences/AXISResidences2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Axis Residences</h3>
                <p>In Axis Residences, you can be at the center of the metro, where the rest of the city revolves around you. This new two-tower development is located within the vibrant Robinsons Cybergate Complex in Pioneer, Mandaluyong City, one of the fastest developing urban hubs in Metro Manila.
                <br><a href="properties/axisresidences" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/chimesgreenhills">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/ChimesGreenhills/chimes1.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/ChimesGreenhills/chimes9.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Chimes Greenhills</h3>
                <p>Chimes Greenhills allows its residents to have an affordable affluent lifestyle in one of the prominent addresses in Metro Manila.
                    <br><br>Located along one of the prominent addresses in the metro, Chimes Greenhills, which is within walking distance from the Greenhills Shopping Center. This 40-storey residential project has a distinctive architectural design that will stand out among the neighboring buildings and will pave the way to an affordable affluent lifestyle for its future residents.
                <br><a href="properties/chimesgreenhills" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>
            </div>

            <div class="row">
            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/escaladeseasttower">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/EscaladesEastTower/EET.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/EscaladesEastTower/EET2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Escalades East Tower</h3>
                <p>The rest of the metro is within reach at Escalades East Tower. This 14-storey residential condominium development by Robinsons Communities offers the ultimate convenience because of its location.
                    <br><br>This project is situated at the very heart of Cubao, Quezon City, where flourishing commercial centers and major transportation systems are nearby.
                <br><a href="properties/escaladeseasttower" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/escaladessouthmetro">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/EscaladesSouthMetro/ESM.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/EscaladesSouthMetro/ESM2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Escalades South Metro</h3>
                <p>Escalades South Metro is a modern Filipiniana-inspired mid-rise residential enclave perfect for families who wish to enjoy the convenience of living within close proximity to major business and commercial districts such as Makati, Global City, and Alabang while relishing in the comforts of serene southern lifestyle. Complemented by leisure amenities, blooming gardens, and lush open spaces, Escalades South Metro is truly a verdant haven in the vibrant south. 
                <br><a href="properties/escaladessouthmetro" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/thepearlplace">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/ThePearlPalace/TPP.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/ThePearlPalace/TPP2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>The Pearl Place</h3>
                <p>Soon to rise among the iconic landmarks in Ortigas Center is a new Robinsons Communities development – The Pearl Place. Located along Pearl Drive corner Gold Loop, this two-tower residential condominium features a modern and minimalist design that is sure to stand out from the many high-rise buildings in the Ortigas skyline.
                <br><a href="properties/thepearlplace" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>
            </div>
        </div>
    </div>
</div>
<!-- OUR PROJECTS END -->
<!-- start xs code -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 hidden-md visible-xs"><br>
                 <center><h3>Latest News</h3></center>
                <center><h4><small>Learn every updates inside Robinson Communities</small></h4></center>
                <div class="main-border"></div>

                <div class="row">
                    <div class="col-md-8">
                        <h3>Blogs</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-responsive" src="<?php echo base_url();?>image/3.jpg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                 <h3><a class="link-color" href="#">#FirstBuyer</a></h3>
                                 <div class="row">
                                     <div class="col-xs-8 col-xs-offset-5">
                                        <i class="fa fa-calendar fa-fw"></i>August 24, 2014
                                     </div>
                                 </div><br>
                                 <p class="justify-align-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor</p>
                            <a href="#" class="btn btn-primary btn-sm pull-right">Read More</a>
                            </div>
                        </div>
                        <h3>News</h3>
                        <div class="row">
                            <div class="col-xs-12">
                            <img class="img-responsive" src="<?php echo base_url();?>image/rob-news.jpg">
                            </div>
                                <div class="row"><br>
                                    <div class="col-xs-8 col-xs-offset-5">              
                                    <i class="fa fa-calendar fa-fw"></i>August 24, 2014                 
                                  </div>
                                </div><br>
                                 <p class="justify-align-text link-color">Robinsons Land Corporation bags back-to-back Euromoney Overall Best Managed Company in the Philippines Award.</p>
                            <a href="#" class="btn btn-primary btn-sm pull-right">Read More</a>
                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <?php $this->load->view('includes/contacts');?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 hidden-md visible-xs" id="our-projects">
        <div class="main-title">Live Simply Happy</div>
        <p class="main-subtitle">Explore the different Robinsons Communities neighborhoods and find your dream affordable quality condominium today!</p>
        <div class="main-border"></div>
    
        <div class="container">
            <div class="row">
            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/acaciaescalades">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/AcaciaEscalades/ACEPerspective.jpg" alt="img"></div>
                    <div class="info">
                    <img class="img-responsive" src="<?php echo base_url();?>image/AcaciaEscalades/ACEPerspective2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Acacia Escalades</h3>
                <p>Only 5 minutes from Eastwood City, Acacia Escalades is a modern Filipiniana-inspired mid-rise residential enclave nestled in the quiet side of Calle Industria cor. Amang Rodriguez Ave., Pasig City.
                <br><br>Acacia Escalades offers you and your family a serene haven coupled with the convenience of living in the center of Eastern Manila's rising commercial hub.
The development also includes retail spaces for lease such as a Robinsons Supermarket so that daily household needs will truly just be an elevator ride away.
                <br><a href="properties/acaciaescalades" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/axisresidences">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/AXISResidences/AXIS.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/AXISResidences/AXISResidences2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Axis Residences</h3>
                <p>In Axis Residences, you can be at the center of the metro, where the rest of the city revolves around you. This new two-tower development is located within the vibrant Robinsons Cybergate Complex in Pioneer, Mandaluyong City, one of the fastest developing urban hubs in Metro Manila.
                <br><a href="properties/axisresidences" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/chimesgreenhills">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/ChimesGreenhills/chimes1.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/ChimesGreenhills/chimes9.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Chimes Greenhills</h3>
                <p>Chimes Greenhills allows its residents to have an affordable affluent lifestyle in one of the prominent addresses in Metro Manila.
                    <br><br>Located along one of the prominent addresses in the metro, Chimes Greenhills, which is within walking distance from the Greenhills Shopping Center. This 40-storey residential project has a distinctive architectural design that will stand out among the neighboring buildings and will pave the way to an affordable affluent lifestyle for its future residents.
                <br><a href="properties/chimesgreenhills" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>
            </div>

            <div class="row">
            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/escaladeseasttower">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/EscaladesEastTower/EET.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/EscaladesEastTower/EET2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Escalades East Tower</h3>
                <p>The rest of the metro is within reach at Escalades East Tower. This 14-storey residential condominium development by Robinsons Communities offers the ultimate convenience because of its location.
                    <br><br>This project is situated at the very heart of Cubao, Quezon City, where flourishing commercial centers and major transportation systems are nearby.
                <br><a href="properties/escaladeseasttower" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/escaladessouthmetro">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/EscaladesSouthMetro/ESM.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/EscaladesSouthMetro/ESM2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>Escalades South Metro</h3>
                <p>Escalades South Metro is a modern Filipiniana-inspired mid-rise residential enclave perfect for families who wish to enjoy the convenience of living within close proximity to major business and commercial districts such as Makati, Global City, and Alabang while relishing in the comforts of serene southern lifestyle. Complemented by leisure amenities, blooming gardens, and lush open spaces, Escalades South Metro is truly a verdant haven in the vibrant south. 
                <br><a href="properties/escaladessouthmetro" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>

            <div class="col-md-4 justify-align-text">
             
                <div class="thumbnail">
                <!-- colored -->
                    <center>
                    <div class="ih-item square colored effect8 scale_down"><a href="properties/thepearlplace">
                    <div class="img"><img class="img-responsive" src="<?php echo base_url();?>image/ThePearlPalace/TPP.jpg" alt="img"></div>
                    <div class="info">
                      <img class="img-responsive" src="<?php echo base_url();?>image/ThePearlPalace/TPP2.jpg" alt="img">
                    </div></a></div>
                    </center>
                <!-- end colored -->
                <div class="caption"><h3>The Pearl Place</h3>
                <p>Soon to rise among the iconic landmarks in Ortigas Center is a new Robinsons Communities development - The Pearl Place. Located along Pearl Drive corner Gold Loop, this two-tower residential condominium features a modern and minimalist design that is sure to stand out from the many high-rise buildings in the Ortigas skyline.
                <br><a href="properties/thepearlplace" class="btn btn-primary btn-xs pull-right">Explore Projects</a><br></p>
                </div>
              </div></div>
            </div>
        </div>
    </div>
<?php $this->load->view('includes/footer');?>