<html>
<head>
<title>About Me</title>
<link rel = "icon" type = "image/x-icon" href = "/images/favicon.ico">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.css" rel = "stylesheet">
<link href = "bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body style = "text-align:center">
<div class = "container" id = "overall_back" style = "background-color:#ffde22; color:#3C1321; ">
<div class = "column" id = "column_overall">
<div class = "row-md-6" style = "padding-bottom:50px;margin-bottom:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<h2>ABOUT ME</h2>
<h3>A brief introduction before the CV</h3>
</div>
<img src = "BerclayPotrait.jpg" height = "200px" width = "200px" style = "margin-top:10px;">
<p style= "margin-left:30px; margin-right:30px; ">
Hello there, Berclay here, the guy in the wierd picture. I'm currently an engineering student with a passion for programming. I have only used HTML in my landing page though. The reason is that I can apply alot of styling in the tags without the need to write another CSS file. Another thing about me is, I wish i could also find more platforms to grow in C++ language and python programming
</p>
<button onclick = "window.location.href = '#CV'" style = "background-color:#ffde22;">To CV</button>

<div class = "row-md-6" id = "CV" style = "padding-bottom:50px;margin-bottom:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset -2px 2px 2px, inset 2px -2px 2px;">
<h2>CURRICULUM VITAE</h2>
<h3>BERCLAY MANANI</h3>
<h3>Zebra. Utawala Estate. Nairobi.</h3>
<h3>Mobile: 0718808824 </h3>                     
<h3>Email:berclaym@gmail.com</h3>
</div>

<h2>Personal Profile Statement</h2>
<p style= "margin-left:30px; margin-right:30px; ">
A motivated and responsible Electrical and Electronics undergraduate student, seeking attachment which will enable me to acquire knowledge and skills related to the field of study I am currently undertaking and work environment experience. I have a strong drive to see projects and assignments to completion and to continually learn through experience.
</p>

<h2>Education</h2>
<p>
<ul style = "text-align:left; margin-left:30px; margin-right:30px; ">
<li>2017 (September) – Date : B Sc Electrical and Electronics Engineering, Kenyatta University.</li>
<li>2017, March – July : Zalego Institute of Technology, Certificate.</br>
		Android, HTML, CSS, PHP, Java, Windows.</li>
<li>2013 – 2016 : Moi High School – Kabarak, Secondary.</li>
<li>	Mathematics : A</li>
<li>	English : B-</li>
<li>	Kiswahili : B+</li>
<li>	Biology : A-</li>
<li>	Chemistry : A-</li>
<li>	Physics : A</li>
<li>	History : A</li>
<li>	Computer : A</li>
<li>	KCSE mean grade A- of 77 points.</li>
<li>2004 – 2012 : Immaculate Heart Juniorate, Primary (KCPE Certificate).</br>
		Scored 384 out of 500 marks in KCPE</li>
</ul>
</p>

<h2>Professional Appointments </h2>
<p style= "margin-left:30px; margin-right:30px; ">
	2021 February: Industrial attachment at Kenafric Industries at the end of the 3rd year of undergraduate education.
</p>

<h2>Skills</h2>
<p style= "margin-left:30px; margin-right:30px; ">
Good in programming and programming languages; C, C++, Python, Django and Data Science with Python, Javascript, Java, HTML, MATLAB and Arduino(C++ module).
Well versed in circuit and wiring, machine and construction design using AUTOCAD.
Good in design and management of databases. 
</p>

<h2>Awards</h2>
<p style= "margin-left:30px; margin-right:30px; ">
	Award for attaining 77 Points in KCSE by Moi High School Kabarak.
</p>

<h2>Sports</h2>
<p style= "margin-left:30px; margin-right:30px; ">
	I play basketball in school and during my leisure time.
</p>

<h2>Hobbies</h2>
<p style= "margin-left:30px; margin-right:30px; ">
I love painting and drawing, reading blogs and works of art, and learning new programming languages.  I also love listening to music.
</p>

<h2>Career Objectives</h2>
<p style= "margin-left:30px; margin-right:30px; ">
o	To be a renown electronics designer and program developer.</br>
o	To grow in problem solving skills and acquire knowledge to advance current technology trends.
</p>

<h2>References</h2>
<p style= "margin-left:30px; margin-right:30px; ">
Eng. Arthur Agwayo
H.O.D Electrical and Electronics engineering department,
Kenyatta University,
Main Campus Nairobi.
</p>

<a href="BerclayMananiCV.docx" download rel="Berclay CV" target="_blank" class="btn btn-primary" style = "margin:30px; background-color:#ffde22; color:#3C1321; border-color:#3C1321;">
   Download CV
</a>
</br>
<button onclick = "window.location.href = '#overall_back'" style = "background-color:#ffde22;color:#3C1321 ; border-color:#ffde22">Back to top</button>
<div id = "form-test" class = "row-md-6" style = "padding-bottom:50px; margin-top:50px; background-color:#3C1321; color:#ffde22; box-shadow:inset 2px -2px 2px, inset -2px 2px 2px ;">
<form method = "post" action = "modified.php">
<p style = "margin:30px">Send your suggestions about me please!</p></br>

<input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
<input type = "text" size = "40" name = "fname" value = "" placeholder = "Enter Name" style = "margin-top:30px; margin-bottom:15px;" required/></br>
<input type = "text" size = "40" name = "email" placeholder = "Email e.g johndoe@gmail.com" style = "margin-top:15px; margin-bottom:15px;" required/></br>
<input type = "text" size = "100" name = "message" placeholder = "Enter message. not more than 100 characters" style = "margin-top:15px; margin-bottom:30px;" required/></br>
<input type = "submit" value = "Submit" style = "background-color:#3C1321; color:#ffde22;">
</form>
</div>
</div>
</div>
</body>
</html>