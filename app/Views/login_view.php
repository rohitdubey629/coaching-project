<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="https://ecoboy.org/WEBBACKEND/images/favicon.ico" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="https://ecoboy.org/WEBBACKEND/css/style.css">
</head>
<style>
	.auth-wrapper .auth-content:not(.container) .card-body{
		padding: 0px 35px !important;
	}
</style>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form method="post" autocomplete="off" id="login_form">
					<img src="<?php echo base_url();?>/uploads/<?php echo $links[0]['img1'];?>" alt="" class="img-fluid mb-4" style="    width: 200px;">
						<div class="card-body">
							<div id="div-msg-edit" class="alert  alert-dismissible fade show" style="display:none;" ></div>
							<h4 class="mb-3 f-w-400">Sign In</h4>
							<hr>
							<div class="form-group mb-3">
								<input type="text" class="form-control" id="Email" name="email" placeholder="Login Id" required>
							</div>
							<div class="form-group mb-4">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
							</div>
							<button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
							<hr>
						</div>
					</form>
				</div>
			</div>
			<footer>
				<div class="container" style="padding-bottom:3px;">
					<div class="row text-center align-items-center flex-row-reverse" style="display:inherit !important;">  
				
					</div>
				</div>
			</footer>
		</div>
	</div>
</div>

<!-- [ auth-signin ] end -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
        $("#login_form").submit(function(e){
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: "Login/checkLogin",
                data: form.serialize(),
                dataType: "json",
                success: function(result){
                  if(result.status==false){  
                    $('#div-msg-edit').addClass("alert-danger").removeClass("alert-success").html(result.msg).slideDown(500).delay(5000).slideUp(500);
                  }else{
                    $('#div-msg-edit').addClass("alert-success").removeClass("alert-danger").html(result.msg).slideDown(500).delay(2000).slideUp(function(){
                    //   window.location.reload();
						window.location.href ="<?php echo base_url()?>/dashboard";
                    });
                  }   
                }                  
            });
        });
    });
</script>
<!-- Required Js -->
<script src="https://ecoboy.org/WEBBACKEND/js/vendor-all.min.js"></script>
<script src="https://ecoboy.org/WEBBACKEND/js/plugins/bootstrap.min.js"></script>

</body>

</html>
