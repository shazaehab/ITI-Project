// include_once 'header.php';
// session_start();
// if(isset($_SESSION['username'])){
// 	header("location: checkout.php");
// }
// if(isset($_POST['login'])){
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $password=sha1($password);
//     $customers->set_email($email);
//     $customers->set_password($password);
//     $count=$customers->select_one()['count'];
//     $row=$customers->select_one()['row'];
//     if($count>0){
//         $_SESSION['username']=$row['username'];
//         $_SESSION['user_id']=$row['cust_id'];
//         header("location: checkout.php");
//     }
// }

<?php
session_start();
if(isset($_SESSION['admin'])){
    header("location: checkout.php");
}
include_once 'header.php';
if(isset($_POST['login'])){
    $username=$_POST['email'];
    $password=$_POST['password'];
    $password=sha1($password);
    $sql="SELECT * FROM customers WHERE email='$username' AND password='$password'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    if($count>0){
        $_SESSION['username']=$row['email'];
        $_SESSION['admin_id']=$row['cust_id'];
        header("location: checkout.php");
    }
}
?>

<html>
<div class="accordion-group" id="login_div">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
						
											 <div class="span12">
												<form method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Email</label>
															<div class="controls">
																<input type="email" placeholder="Enter your email" id="username" class="input-xlarge" name="username">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge" name="password">
															</div>
														</div>
														<button class="btn btn-inverse" type="submit" name="login">Continue</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- login end -->
</html>