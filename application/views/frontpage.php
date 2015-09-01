<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">GoInvest</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Register Now!</h1>
        <p>Enter your information in the form below to allow you use our service.</p>
      </div>
	<div class="container">
		<div class="hero-unit">
		<h2>Personal Info</h2>	
			<?php
				echo form_open('frontpage/create_member');
				echo form_input('first_name', set_value('first_name','First Name'));
				echo "<br/>";
				echo form_input('last_name', set_value('last_name','Last Name'));
				echo "<br/>";
				echo form_input('phone_no', set_value('phone_no','Phone Number'));
				echo "<br/>";
				echo form_input('email_address', set_value('email_address','Email Address'));
			?>
		</div>
	</div>
	<div class="hero-unit">
		<h2>Login Info</h2>	
			<?php
			echo form_input('username', set_value('username','Username'));
			echo "<br/>";
			echo form_input('password', set_value('password','Password'));
			echo "<br/>";
			echo form_input('password2', set_value('password2','Password Confirm'));
			
			echo form_submit('submit','Create Account');	//NOTE PHP cleans all input for you
			?>
		
		<?php echo validation_errors('<p class = \'error\'>');?>
		</div>
	</div>
		</div>
	</div>
      <footer>
        <p>&copy; Company 2012</p>
      </footer>
</div>
