<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
			<form action="<?php echo URL; ?>user/checkLogin" method="post">
				<div class="form-login">
					<h4>Login</h4>
						<input type="text" name="username" class="form-control input-sm" placeholder="username" />
					</br>
						<input type="text" name="password" class="form-control input-sm" placeholder="password" />
					</br>
					<div class="wrapper">
						<span class="group-btn">
							<button type="submit" class="btn btn-primary btn-md">login</button>
						</span>
					</div>
				</div>
			</form>			
        </div>
    </div>
</div>
<br>