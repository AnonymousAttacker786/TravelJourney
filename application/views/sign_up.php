<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Create an Account</h4>
				<p>It's free and always will be.</p>
				<form class="col s12" method="post" action="<?php echo base_url() ?>customer/save_sign_up">
					<div class="row">
						<div class="input-field col m6 s12">
							<input type="text" name="first_name" class="validate">
							<label>First Name</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="text" name="last_name" class="validate">
							<label>Last Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" name="mo_no" class="validate">
							<label>Mobile</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="email" name="email_id" class="validate">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="password" class="validate">
							<label>Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="confirm_password" class="validate">
							<label>Confirm Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p>Are you a already member ? <a href="<?php echo base_url() ?>Customer/login">Click to Login</a>
				</p>
			</div>
		</div>
	</section>
	