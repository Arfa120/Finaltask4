<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta name="viewport" content ="width =device-width,intial-scale=1.0">
		<title=Admin Template</title>
		<style>
			.navitem{
				text-decoration: none;
				color:#fff;
				font-size:18px;
			}
			.btn1{
				text-decoration: none;
				
				color:black;
				font-size:18px;
				
			}
			.wrapper{
				width:860px;
				margin: auto;
			}
			.wrapper ul{
				list-style: none; 
				
			}
			.wrapper ul li{
				background: #262626;
				width: 130px;
				border: 1px solid #fff;
				height: 50px;
				line-height: 50px;
				text-align: center;
				float: left;
				position:relative;
				
			}
			.wrapper ul ul{
				display: none;
			}
			.wrapper ul li:hover {
				background: crimson;
			}
			
			.wrapper ul li:hover > ul {
				display: block;
			}
			
		</style>
	</head>
	<body>
      
					
					<li>
						<a class="navitem" href="#">Login</a>
						<ul>
							<li>
								<a class="navitem" href="admin_login.php">Admin</a>
							</li>
							
							<li>
								<a class="navitem" href="../Student/login.php">Student</a>
							</li>
							<li>
								<a class="navitem" href="../Department/login.php">Department</a>
							</li>
						</ul>
					</li>
				
		
	</body>
</html>