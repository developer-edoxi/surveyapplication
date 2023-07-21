<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>LOGIN</title>

</head>
<?php

$msg=$this->session->flashdata('msg');

if(isset($msg)){

echo "<script>alert('$msg');</script>";

}

?>
<body>

<div class="container">
		<div class="row  justify-content-center" style="margin-top:15%;">
        <div class="card" style="width: 28rem;" >
        <div class="card-body">
        <form  action="<?=base_url('Backend/logincheck')?>" method="POST">
				
				
							
									<h3 class="main_question">Login Form</h3>
									<div class="form-group">
										<input type="text" name="username" class="form-control required" placeholder="Username">
									</div>
                                    <div class="form-group">
										<input type="password" name="password" class="form-control required" placeholder="Password">
									</div>
                        
                                    <div class="form-group">
										<input type="submit" name="submit" class="btn btn-success">
									</div>
                                    

					</form>


</div>
</div>
</div>
</div>   
</body>
</html>






