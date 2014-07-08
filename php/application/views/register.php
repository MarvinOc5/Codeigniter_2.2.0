    
    <div id="templatemo_slider_wrapper">
        
        <div id="slider" class="nivoSlider">
            <img src="<?php echo $base ?>/media/images/machine1.jpg" alt="Slider 01" title="Bag Sewing Machine Head - Double thread chain stitch at a maximum speed of 3,800rpm suitable for paper and PP" />
            <img src="<?php echo $base ?>/media/images/machine2.jpg" alt="Slider 02" title="Filled Bag Closing Machine - Automatic infeed and bag top trimming device for crepe-tape bound closure on paper bags." />
            <img src="<?php echo $base ?>/media/images/machine3.jpg" alt="Slider 03" title="Automatic and Semi-Automatic Bagging System - For paper, woven-cloth and polyethylene bag. For fertilizer, animal feed, resin pellets, chemical, and various kinds of power materials." />
            <!--<img src="<?php echo $base ?>/media/theme/images/slider/04.jpg" alt="Slider 04" title="Pellentesque dignissim dapibus fermentum" /> -->
        </div>
        
        <div id="htmlcaption" class="nivo-html-caption">
        	<strong>This</strong> is an example of a HTML caption with <a href="#">a link</a>.
        </div>
    
    </div>
    
    <script type="text/javascript" src="<?php echo $base ?>/media/theme/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="<?php echo $base ?>/media/theme/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>
    
    <div id="templatemo_main">
        
         <form action="<?php echo $base ?>/cregister/register" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="companyid">Company ID:</label></dt><?php  echo form_error('companyid'); ?>
                        <dd><?php $data = array("name"=>"companyid", "id"=>"companyid", "size"=>"54", ); echo form_input($data);?></dd>
                    </dl>
                    <dl>
                        <dt><label for="username">Username:</label></dt><?php  echo form_error('username'); ?>
                        <dd><?php $data = array("name"=>"username", "id"=>"username", "size"=>"54", ); echo form_input($data);?></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt><?php  echo form_error('password'); ?>
                        <dd><?php $data = array("name"=>"password", "id"=>"password", "size"=>"54", ); echo form_password($data);?></dd>
                    </dl>
                    <dl>
                        <dt><label for="passcnf">Confirn Password:</label></dt><?php  echo form_error('passcnf'); ?>
                        <dd><?php $data = array("name"=>"passcnf", "id"=>"passcnf", "size"=>"54", ); echo form_password($data);?></dd>
                    </dl>
                     <dl>
                        <dt><label for="firstname">Firstname:</label></dt><?php  echo form_error('firstname'); ?>
                        <dd><?php $data = array("name"=>"firstname", "id"=>"firstname", "size"=>"54", ); echo form_input($data);?></dd>
                    </dl> 
                      <dl>
                        <dt><label for="lastname">Lastname:</label></dt><?php  echo form_error('lastname'); ?>
                        <dd><?php $data = array("name"=>"lastname", "id"=>"lastname", "size"=>"54", ); echo form_input($data);?></dd>
                    </dl>
                 	 <dl>
                        <dt><label for="color">Gender</label></dt>
                        <dd>
                            <input type="radio" name="gender" id="" value="Male" /><label class="check_label">Male</label>
                            <input type="radio" name="gender" id="" value="Female" /><label class="check_label">Female</label>
                        </dd>
                        </dl>
					<dl>
                        <dt><label for="email">E-mail Address:</label></dt><?php  echo form_error('email'); ?>
                        <dd><?php $data = array("name"=>"email", "id"=>"email", "size"=>"54", ); echo form_input($data);?></dd>
                    </dl>                    
                    <dl>
                        <dt><label for="userlevel">Select Company Position:</label></dt>
                        <dd>
                            <?php $userlevel_option = array("Salesincharges"=>"Sales-In-Charge","Accountant"=>"Accountant","Stockclerk"=>"Stock Clerk", "Administrator"=>"Administrator"); ?><?php echo form_dropdown('userlevel', $userlevel_option); ?>
					
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                          <dd>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
            
        </div>
        
		<br class="cleaner" />
    </div> <!-- end of main -->
