<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root{
	--background: #c3c0ba;
	--white: #fff;
	--one: #c3266f;
	--two: #743578;
	--black: #54585d;
	--process: #a5a5a5;
}
*{margin:0px; padding:0px; box-sizing: border-box; font-family: system-ui;}

.col-div-3{width: 25%; float: left;}
.col-div-7{width: 75%; float: left;}
.col-div-4{width: 35%; float: left;}
.col-div-8{width: 65%; float: left;}
.col-div-6{width: 50%; float: left; position: relative;}
.clearfix{clear: both;}
.resume-main{width: 700px; height: 800px; 
	background: linear-gradient(var(--one), var(--two));
	margin: 50px auto;
	box-shadow:5px 5px 5px 5px #54585d33;
}
.left-box{width: 35%; float: left; height: 700px;}
.right-box{width: 65%; float: left; background-color: var(--white); height: 700px;
	margin: 50px 0px; border-radius: 50px 0px 0px 50px; padding:30px 50px;
	box-shadow: -7px 2px 15px 2px #54585d52;}
.profile{width: 150px; height: 150px; border: 3px solid var(--white); 
	padding: 7px; border-radius: 50%; margin: 20px auto;}
.profile img{width: 100%; border-radius: 50%;}
.content-box{    padding: 0px 40px 0px 45px;}
.content-box h2{text-transform: uppercase;font-weight: 500;color: var(--white); 
	letter-spacing: 1px; font-size: 20px;}
.hr1{border: none; height: 1px; background: var(--white); margin-top: 3px;}
.p1{font-size: 11px;color: var(--white);letter-spacing: 1px;padding-top: 12px;}
#progress {background: var(--process);border-radius: 13px;height: 8px;width: 100%;}
#progress:after {
    content: '';
    display: block;
    background: var(--white);
    width: 50%;
    height: 100%;
    border-radius: 9px;
}
#progress1 {background: var(--process);border-radius: 13px;height: 8px;width: 100%;}
#progress1:after {
    content: '';
    display: block;
    background: var(--white);
    width: 40%;
    height: 100%;
    border-radius: 9px;
}
.content-box h3{font-size: 13px;text-transform: uppercase;letter-spacing: 1px;padding-top: 10px;
    color: white;font-weight: 500;
}
.p2{font-size: 13px; margin-bottom: 5px; margin-top: 5px; color: var(--white);}
.circle{color:var(--white); font-size: 14px!important; margin-top: 7px;}
.circle1{color:var(--process); font-size: 14px!important; margin-top: 7px;}
.in{background:var(--white);color: var(--one);padding: 8px;border-radius: 20px; font-size: 14px!important;}
.inp{color: var(--white); font-size: 11px;}
.col3{text-align: center;}
h1{font-size: 50px; text-transform: uppercase; color: var(--black); line-height: 50px;}
h1 span{color: var(--one);}
.p3{letter-spacing: 4px;color: #54585d; font-weight: 500;}
.heading{text-transform: uppercase;font-weight: 500;color: var(--one); 
	letter-spacing: 1px; font-size: 20px;}
.hr2{border: none; height: 1px; background: var(--black); margin-top: 3px;}
.p5{font-weight: 700;color: var(--black);}
.span1{font-size: 12px;color: var(--black);}

    </style>
</head>
<body>
<?php include'header.php' ; ?>
<div class="resume-main">
	<div class="left-box">
		<br><br>
		<div class="profile">
			<img src="image/profile.jpg">
		</div>
		<div class="content-box">
		<h2>Profile Info</h2>
		<hr class="hr1">
		<p class="p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

		<h3>Language:</h3>
		<p class="p2">English</p>
		<div id="progress"></div>
		<p class="p2">Hindi</p>
		<div id="progress1"></div>

		<br><br>
		<h2>My Skills</h2>
		<hr class="hr1">
		<br>
		<div class="col-div-6"><p class="p2">HTML</p></div>
		<div class="col-div-6">
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle1"></i>
			<i class="fa fa-circle circle1"></i>
		</div>
			<div class="clearfix"></div>
		<div class="col-div-6"><p class="p2">CSS</p></div>
		<div class="col-div-6">
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle1"></i>
		</div>
			<div class="clearfix"></div>
		<div class="col-div-6"><p class="p2">JQUERY</p></div>
		<div class="col-div-6">
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle1"></i>
			<i class="fa fa-circle circle1"></i>
		</div>
			<div class="clearfix"></div>
		<div class="col-div-6"><p class="p2">JAVASCRIPT</p></div>
		<div class="col-div-6">
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle"></i>
			<i class="fa fa-circle circle1"></i>
			<i class="fa fa-circle circle1"></i>
			<i class="fa fa-circle circle1"></i>
		</div>

			<div class="clearfix"></div>
			<br>
			<h2>interests</h2>
			<hr class="hr1">
			<br>
			<div class="col-div-3 col3">
				<i class="fa fa-futbol-o in"></i>
				<span class="inp">Sports</span>
			</div>
			<div class="col-div-3 col3">
				<i class="fa fa-futbol-o in"></i>
				<span class="inp">Drive</span>
			</div>
			<div class="col-div-3 col3">
				<i class="fa fa-futbol-o in"></i>
				<span class="inp">Sports</span>
			</div>
			<div class="col-div-3 col3">
				<i class="fa fa-futbol-o in"></i>
				<span class="inp">Sports</span>
			</div>
		</div>
	</div>

	<div class="right-box">
		<h1>
			Manoj<br>
			<span>Adhikari</span>
		</h1>
		<p class="p3">UI & UX DESIGNER</p>

		<br>	
		<h2 class="heading">Work Experience</h2>
		<hr class="hr2">
		<br>
		<div class="col-div-4">
			<p class="p5">2015-2016</p>
			<span class="span1">Company Name</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Web Designer</p>
			<span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">2015-2016</p>
			<span class="span1">Company Name</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Web Designer</p>
			<span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">2015-2016</p>
			<span class="span1">Company Name</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Web Designer</p>
			<span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
		</div>
		<div class="clearfix"></div>

		<br>	
		<h2 class="heading">My Education</h2>
		<hr class="hr2">
		<br>
		<div class="col-div-4">
			<p class="p5">2015-2016</p>
			<span class="span1">Company Name</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Web Designer</p>
			<span class="span1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
		</div>
		<div class="clearfix"></div>
		<br>
		<div class="col-div-4">
			<p class="p5">2015-2016</p>
			<span class="span1">Company Name</span>
		</div>
		<div class="col-div-8">
			<p class="p5">Web Designer</p>
			<span class="span1">Lorem Ipsum is simply dummy text of the .</span>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>

</div>

</body>
</html>