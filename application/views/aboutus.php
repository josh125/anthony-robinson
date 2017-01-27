<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navbar');?>
<?php $this->load->view('includes/carousel-slide');?>
<div class="container">
    <div class="row margin-a">
        <div class="col-md-8">
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                      <li class="active"><a href="#home" role="tab" data-toggle="tab">Why Us?</a></li>
                      <li><a href="#profile" role="tab" data-toggle="tab">Message from the VP</a></li>
                      <li><a href="#messages" role="tab" data-toggle="tab">Value Proposition</a></li>
                      <li><a href="#settings" role="tab" data-toggle="tab">Project Locations</a></li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                        <br><h4><strong>Over the years, Robinsons Land Corporation has established itself as one of the leading real estate companies in the Philippines.</strong></h4>
                        <hr class="style-eight">
                        <p>It is a trusted industry leader that sets itself apart from other real estate companies because of its consistency of quality and service, as well as its unwavering commitment to community, national, and global development.<br><br>
                        The real estate arm of <strong>JG Summit Holdings Inc.</strong>, Robinsons Land Corporation develops and operates innovative and exceptional lifestyle options and business solutions.<br><br>
                        Its wide array of outstanding land real estate developments:</p>
                        <ul class="dot-list">
                          <li>Malls</li>
                          <li>Office Buildings</li>
                          <li>Hotels</li>
                          <li>Residential condominiums</li>
                          <li>Housing Subdivisions</li>
                        </ul>
                      </div>
                      <div class="tab-pane" id="profile">
                        <br><h4><strong>Message from the Business Unit Head</strong></h4>
                        <hr class="style-eight">
                      </div>
                      <div class="tab-pane" id="messages">
                        <br><h4><strong>Robinsons Communities, one of the four residential brands of Robinsons Land Corporation, creates a sense of community convergence and security for every Filipino family.</strong></h4>
                        <hr class="style-eight">
                        <p>Robinsons Communities is committed to providing <strong>relaxed community living</strong> through <strong>affordable quality condominiums</strong> in locations that are comfortably close to workplaces, schools, and leisure centers, complemented by generous open spaces, fun and functional amenities, and facilities for everyday conveniences. We believe that these are essential ingredients to happy living, perfect for nurturing relationships, and ideal in fostering community living.<br><br>
                        Key words:
                        <ul class="dot-list">
                          <li>Relaxed</li>
                          <li>Community Living</li>
                          <li>Affordable</li>
                          <li>Quality</li>
                          <li>Housing Subdivisions</li>
                        </ul><br><br>
                        <strong>Reasons to Believe</strong><br><br>
                        1) <strong>We commit to deliver quality vertical & horizontal developments</strong>
                            <ul class="dot-list"><br>
                              <li>We have mid-rise developments that are situated within a gated community</li>
                              <li>We also have upscale developments, such as the high-rise projects that are within a community such as Axis Residences, located within Robinsons Forum, home of one of the largest BPO complexes in the country; The Pearl Place, located within Ortigas CBD, and Chimes Greenhills, which is located near commercial hubs like Greenhills Shopping Center</li>
                            </ul><br><br>
                        2) <strong>Everyday comfort & convenience</strong>
                            <ul class="dot-list"><br>
                              <li>Robinsons Communities projects are strategically situated in key peripheries and CBDs highly accessible to schools, commercial hubs, business establishments, major thoroughfares, etc all of which cater to the convenience of the residents. Having merchants nearby that offer goods and services makes neighborhoods better for children, seniors, and others who choose not to drive.</li>
                              <li>We also have retail spaces in our developments, which will cater to the needs of our future residents.</li>
                              <li>The projects are easily accessed through major thoroughfares and transportation is not a problem.</li>
                            </ul><br><br>
                        3) <strong>Generous open space</strong>
                            <ul class="dot-list"><br>
                              <li>Some developments have vast open spaces, which make them feel that though they live in a condominium, their privilege of open space is not compromised. Escalades South Metro is an epitome of that generous open space.</li>
                            </ul><br><br>
                        4) <strong>Fun & functional amenities that allow community convergence</strong>
                            <ul class="dot-list"><br>
                              <li>Our developments are complemented by fun and functional amenities designed to nurture relationships. These spaces allow interaction among</li>
                            </ul><br><br>
                        5) <strong>Safe and Secure</strong>
                            <ul class="dot-list"><br>
                              <li>Safety is not compromised because the project is gated; there are CCTV cameras in common areas, and guards.</li>
                            </ul><br><br>
                        6) <strong>Value-for-money / Affordable Price</strong>
                            <ul class="dot-list"><br>
                              <li>You can get all these comfort at a very reasonable and affordable price.</li>
                            </ul><br><br>
                        </p>
                      </div>
                      <div class="tab-pane" id="settings">
                        <img class="img-responsive" src="<?php echo base_url();?>image/RCOMM+LOCATIONS.jpg">
                      </div>
                    </div>
        </div>
        <div class="col-md-4 hidden-xs">
                    <?php $this->load->view('includes/contacts');?>
         </div>
</div>
</div>
<script>
 $(function () {
        $('#myTab a:last').tab('show')
      })
    </script>       



<?php $this->load->view('includes/footer');?>