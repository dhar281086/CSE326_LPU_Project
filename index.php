<?php
//require("db.php");
$temp=0;
$q="select * from counter";
$result=mysql_query($q);
$counter=mysql_result($result,0,"counter");
$temp=$counter+1;
$qr="update counter set counter=$temp where id=1";
mysql_query($qr);
	
?>
<!DOCTYPE html>
<html lang="en-US">
<head>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Dr. Dharmendra Pathak Profile</title>
	<meta name="description" content="Dharmendra Pathak Profile">
	<meta name="keywords" content="Academician Developer Profile">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/jquerysctipttop.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">

		<style type="text/css">
		.container { margin: 150px auto; max-width: 640px; }
			.num{
				font-size: 15px;
				font-family: 'Orbitron';
				display: block;
				margin: 50px auto;
				text-align: right;
			}
		</style>
	</head>

	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Preloader -->
<div class="preloader-outer">
	<div class="preloader">
		<div class="lines">
			<div class="line line-1"></div>
			<div class="line line-2"></div>
			<div class="line line-3"></div>
		</div>

		<div class="loading-text">- wait -</div>
	</div>
</div>
<!-- Preloader end -->

<!-- Main Wrapper -->
<main class="wrapper">

	<!-- Header -->
	<header class="header pull-left">

		<!-- Mobile menu -->
		<div class="mobile-bar visible-sm visible-xs">
			<div class="hamburger-menu">
				  <div class="bar"></div>	
			</div>
		</div>
		<!-- Mobile menu end -->

		<div class="avatar">
			<img src="assets/images/dp.jpg" alt="avatar">
		</div>

		<div class="name">
			<h1>Dr. Dharmendra Pathak</h1>
			<span>@Academician and Developer</span>
		</div>

		<!-- Social Icons -->
		<div class="social-icons">
			<ul>
				<li><a href="https://www.linkedin.com/in/dharmendra-pathak-indore" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/dharmendra.pathak.585" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://twitter.com/dharam_241086" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/dpathak2810/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<!-- Social Icons end -->

		<!-- Navigation bar -->
		<nav class="main-nav">
			<ul class="navigation">
				<li class="current"><a href="#welcome">Welcome</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#resume">Resume</a></li>
				<li><a href="#works">Live Projects</a></li>
				<li><a href="#blog">Research Work</a></li>
				<li><a href="#customers">Certification/Workshops</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

	</header>
	<!-- Header end -->

	<!-- Main Content -->
	<div class="main-content pull-right">

		<!-- Section Welcome -->
		<section id="welcome" class="welcome">
			<div class="quote text-center">
				<h2>Machine Learning, Cloud Computing, Data Science, and Software Engineering</h2>
				<span class="author">- Area of Interests -</span>
			</div>
			<div class="overlay"></div>
			<img src="assets/images/dps.jpg">
		</section>
		<!-- Section Welcome end -->

		<!-- Section About -->
		<section id="about" class="about">

			<div class="section-header">
				<h2>About Dharmendra</h2>
			</div>

			<!-- Intro -->
			<div class="intro">

				<ul class="info">
					<!--<li>Date of Birth: <strong>October 28, 1986</strong></li>
					<li>Address: <strong>920/9 Nehru Nagar, Indore, Madhya Pradesh, 452011</strong></li>-->
					<li>Email: <strong>dharmendra.pathak281086@gmail.com</strong></li>
					<li>Mobile: <strong>+91 9202238453</strong></li>
					<li>Website: <strong><a href="https://cdgi.edu.in/dpathak" target="_blank">https://drdharmendrapathak.in</a></strong></li>
				</ul>

				

			</div>
			<!-- Intro end -->

			<!-- Skills -->
			<div class="skills">

				<div class="row">

					<div class="col-md-6 col-sm-6 col-xs-12 item">
						<div class="skill-info clearfix">
							<h3 class="pull-left">Web Designing (HTML5, CSS, JQuery)</h3>
						<!--	<span class="pull-right">90%</span> -->
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="99"
							aria-valuemin="0" aria-valuemax="100" style="width:99%">
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 item">
						<div class="skill-info clearfix">
							<h3 class="pull-left">Python, PHP, JAVA, MySQL</h3>
							<!--<span class="pull-right">90%</span> -->
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="80"
							aria-valuemin="0" aria-valuemax="100" style="width:80%">
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 item">
						<div class="skill-info clearfix">
							<h3 class="pull-left">AWS, Linux Server, Hadoop</h3>
						<!--	<span class="pull-right">75%</span> -->
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="45"
							aria-valuemin="0" aria-valuemax="100" style="width:45%">
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 item">
						<div class="skill-info clearfix">
							<h3 class="pull-left">Open Stack, Red Hat Open Shift</h3>
							<!-- <span class="pull-right">60%</span>-->
						</div>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="60"
							aria-valuemin="0" aria-valuemax="100" style="width:60%">
							</div>
						</div>
					</div>

				</div>

			</div>
			<!-- Skills end -->
		</section>
		<!-- Section About end -->

		<!-- Section Fun Facts -->
		<section id="facts" class="facts">

			<div class="section-header-light">
				<h2>Projects & Research Work</h2>
			</div>

			<div class="row">

				<div class="col-md-3 col-sm-3 col-xs-6 fact-item">
					<em class="number">12</em>
					<span class="text">Projects Completed</span>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-6 fact-item">
					<em class="number">4</em>
					<span class="text">Internation Journal Research Papers</span>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-6 fact-item">
					<em class="number">12</em>
					<span class="text">International/National Conference Research Papers</span>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-6 fact-item">
					<em class="number">15</em>
					<span class="text">Certifications</span>
				</div>

			</div>

			<div class="overlay"></div>

		</section>
		<!-- Section Fun Facts end -->

		<!-- Section Resume -->
		<section id="resume" class="resume">
				<div class="section-header">
					<p><strong><font size=4>My objective is to become a member of an organization where I can utilize my technical skills and attitude towards the growth of the organization and self-development.</font></strong><br><br></p>
				<h2>Educational Qualifications</h2>
				
				<table class="table table-hover sportstbl" style="margin-top: 10pt">
   				<tr>
   					<th>Schooling/Degree<th>
   					<th>Institution<th>
   					<th>Board / University<th>
   					<th>Year of Passing<th>
   					<th>Percentage/GGPA<th>
   				</tr>
   				<tr>
   					<td>Ph.D. (Computer Science Engineering)<td>
   					<td>Amity School of Engineering & Technology<td>
   					<td>Amity University Chhattisgarh (AUC)<td>
   					<td>2024<td>
   					<td>EEG based Brain-Computer Interface (BCI) Deep Learning Model for E-Learning Knowledge Tracing and Recommendations<td>
   				</tr>
   				<tr>
   					<td>M.Tech. (Information Architecture & Software Engineering)<td>
   					<td>School of Computer Science and I.T. (SCSIT), Indore<td>
   					<td>Devi Ahilya University (D.A.V.V.), Indore, M.P.<td>
   					<td>2012<td>
   					<td>9.51 GGPA (DAVV TOPPER)<td>
   				</tr>
   				<tr>
   					<td>B.E. (Computer Science & Engineering)<td>
   					<td>Swami Vivekananda College of Engineering, Indore<td>
   					<td>Rajiv Gandhi Technical University (R.G.T.U.), Bhopal, M.P.<td>
   					<td>2009<td>
   					<td>76.38%<td>
   				</tr>
   				<tr>
   					<td>Higher Secondary<td>
   					<td>N.P.F.H.S. School, Indore, M.P.<td>
   					<td>M.P. Board<td>
   					<td>2005<td>
   					<td>86.22%<td>
   				</tr>
   				<tr>
   					<td>High School<td>
   					<td>N.P.F.H.S. School, Indore, M.P.<td>
   					<td>M.P. Board<td>
   					<td>2003<td>
   					<td>86.40%<td>
   				</tr>
				</table>
	
			</div>

			<div class="row">

			</div>


			<div class="section-header">
				<h2>Experience: <strong>13 years</strong></h2>
				
			</div>

				<!-- Carousel -->
				<div class="resume-carousel">

					<div class="carousel-item">

							<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="top-item resume-item">
								<h2>Assistant Professor</h2>
								<span>13<sup>th</sup> August 2024 to till date</span>
								<p>Lovely Professional University (LPU), Punjab</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="top-item resume-item">
								<h2>Associate Professor</h2>
								<span>2<sup>nd</sup> July 2012 to 12<sup>nd</sup> August 2024</span>
								<p>Chameli Devi Group of Institutions, Indore</p>
							</div>
						</div>
<!--
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="top-item resume-item">
								<h2>Lecturer</h2>
								<span>7th June, 2011 to 6th July, 2012</span>
								<p>Sanghvi Institute of Management and Science, Indore</p>
							</div>
						</div>
-->
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="resume-item">
								<h2>Lecturer</h2>
								<span>17<sup>th</sup> Aug, 2009 to 1<sup>st</sup> July, 2010</span>
								<p>Sanghvi Institute of Management and Science, Indore</p>
							</div>
						</div>

<br>
					</div><!-- Page 1 End -->


				</div>
				<!-- Carousel end -->
<div class="row">
<p><br></p>
			</div>
			<div class="section-header">
				<h2>Awards and Achievements</h2>
				<p><br></p>
			<ul>
				<li>Patent published for <strong>“SYSTEM AND METHOD FOR IMPLEMENTING AN INTELLIGENT SURVEILLANCE DRONE FOR RESCUE OPERATIONS DURING A DISASTER”</strong> on 11 February 2023.</li>
				<li>Patent published for <strong>“AN EEG SYSTEM BASED ON BRAIN COMPUTER INTERFACE (BCI) DEEP LEARNING MODEL”</strong> on 26 March 2021.</li>
				<li>Patent published for <strong>“AN ASSEMBLY WITH WEARABLE ITEMS & IoT CONNECTIVITY FOR VISUALLY IMPAIRED”</strong> on 10 September 2020.</li>
				<li>Copyright Applied for work title <strong>“Using GeoTagging for the detection of Covid-19 Fake News from Twitter Data of Hotspots states using Deep Learning Framework” </strong> on 10 June 2020.</li>
				<li>Winner of <strong>Hack for Good "Covid-19 Hackathon"</strong>, organized by Amity Innovation Incubator on 11 May 2020.</li>
				
				<li>Secured 1st Position in <strong>Innovative Idea Presentation</strong> on the occasion of Innovation Day, organized by Amity University Chhattisgarh on 28 September 2021.</li>
				<li>Awarded with <strong>“Excellence in Teaching”</strong> at Srijan-2019, organized by Rajiv Gandhi Technical University, Bhopal.</li>
				<li>Qualified <strong>UGC-NET 2019 with Percentile Score 99.67</strong></li>
				<li>Qualified <strong>GATE-2015 with GATE Score-356</strong></li>
				<li>Qualified <strong>GATE-2014 with GATE Score-407 </strong>and <strong>Percentile Score 94.50</strong></li>
				<li>Qualified <strong>GATE-2010 with GATE Score-388 </strong>and <strong>Percentile Score 90.33</strong></li>
				<li>Qualified <strong>GATE-2009 with GATE Score-406 </strong>and <strong>Percentile Score 91.62</strong></li>
				<li>Qualified <strong>C-DAC Mumbai, CST-G Level 2011 Examination</strong></li>
			</ul>
			</div>


		</section>
		<!-- Section Resume end -->

		<!-- Section Works -->
		<section id="works" class="works clearfix">
			
			<div class="section-header">
				<h2>Projects Undertaken</h2>
			</div>
			<ul style="text-align: justify;">

<li>Developed <strong>Dus Ka Dum web based Multi player Game portal </strong>to simulate popular Game Show Dus Ka Dum for Chameli Devi Group of Institutions, Indore</li>

<li>Developed <strong>KBC web based quiz portal </strong>to simulate popular Game Show KBC for Chameli Devi Group of Institutions, Indore</li>

<li>	Developed <strong>HR System </strong>to maintain employee attendance report, salary report, leave report, stock register etc. for Agrawal Coal Indore </li>

<li>	Developed  <strong>Faculty Evaluation 1.0 </strong>to automate faculty responsibilities and their ranking for Chameli Devi Group of Institutions, Indore </li>

<li>	Developed  <strong>Appraisal 2.0 </strong>to automate appraisal procedure for faculty members  for Chameli Devi Group of Institutions, Indore</li>

<li>	Developed  <strong>E-Conference </strong>to automate conference activities for Chameli Devi Group of Institutions, Indore</li>

<li>	Developed  <strong>Email Filter Web App </strong>to consolidate and filter emails at one place from various email service providers i.e. Gmail, Yahoo etc.</li>

<li>	Developed  <strong>Open College Web Application </strong>to automate the academic activities i.e. attendance, time table, student/faculty management etc.</li>

<li>	Developed  <strong>HDFC Payment Gateway </strong>for Chameli Devi Group of Institutions, Indore</li>

<li>	Developed  <strong>Student Admission Portal </strong>to automate the admission procedure of MPPET qualified students for CDGI Indore</li>

<li>	Developed  <strong>Bus Seat Allocator </strong>to automate the seating arrangement in CDGI BUS System</li>

</ul>




		</section>

		<!-- Section Blog -->
		<section id="blog" class="blog">
			
			<div class="section-header">
				<h2>Research Work</h2>
			</div>

			<ul style="text-align: justify;">
				<!--
				<li>Research Paper Titled: <strong>“EEG-based deep learning framework for the plausible solution of current E-learning challenges"</strong>, <strong>SCOPUS Indexed-High Technology Letters (HTL)</strong>, Volume 27, Issue 4, April 2021, ISSN: 1006-6748, Journal Impact Factor: 2.7, <a href="https://doi.org/10.37896/HTL27.4/337" target="_blank">https://doi.org/10.37896/HTL27.4/3375</a></li> -->
<li>Research Paper Titled: <strong>“Evaluating E-learning Engagement through EEG Signal Analysis with Convolutional Neural Networks”, 2023 5th International Springer Conference on Computer and Communication Technologies (IC3T),</strong> KITSW Institute, Warangal, Oct 2023</li>			
<li>Research Paper Titled: <strong>“Neural Correlate-Based E-Learning Validation and Classification Using Convolutional and Long Short-Term Memory Networks”</strong>, <strong>SCI-E INDEXED IIETA Journal "Traitement du Signal"</strong>, Volume 40, No. 4, August 2023, pp 1457-1467, ISSN: 0765-0019, Journal Impact Factor: 1.9</li>
<li>Research Paper Titled: <strong>“Electroencephalogram-based deep learning framework for the proposed solution of e-learning challenges and limitations”</strong>, <strong>SCOPUS INDEXED Inderscience Journal "International Journal of Intelligent Information and Database Systems (IJIIDS)"</strong>, Volume 15, No. 3, April 2022, pp 295-310, ISSN: 1751-5858, Journal Impact Factor: 0.9</li>

<li>Book chapter titled <strong>"A study of deep learning approach for the classification of Electroencephalogram (EEG) brain signals"</strong> published in the Book titled <strong>“Artificial Intelligence and Machine Learning for Edge Computing”</strong> by Elsevier and indexed in <strong>SCOPUS</strong>, April 2022.</li>				
<li>Research Paper Titled: <strong>“A review of the classification of neuroscience problems with the help of deep learning framework”, 2021 5th International IEEE Conference on Information Systems and Computer Networks (ISCON)</strong>, GLA University, Mathura, Oct 2021.</li>

<li>Research Paper Titled: <strong>“Reducing efforts in Refactoring process using Design Patterns”</strong>, <strong>International Journal of Advance Research in Computer Science (IJARCS)</strong>, Volume 2, No. 1, Jan-Feb 2011, 240-245, ISSN: 0976-5697, Journal Impact Factor: 3.74</li>
<li>Research Paper Titled: <strong>“NOVA: Hybrid Book Recommendation Engine”</strong>, <strong>IEEE Sponsored 2013 International Advance Computing Conference (IACC-2013)</strong>, Ajay Kumar Garg Engineering College Ghaziabad (AKGEC), Delhi, Feb 2013.</li>
<li>Research Paper Titled: <strong>“ORBIT: Hybrid Movie Recommendation Engine”</strong>, <strong>IEEE Sponsored 2013 International Conference on Emerging Trends in Computing, Communication and Nanotechnology (ICECCN-13)</strong>, Infant Jesus college of Engineering and Technology, Tamilnadu, March 2013.</li>
<li>Research Paper Titled: <strong>“Data Mining on WHO Data Warehouse using PASW Modeler”</strong>, <strong>IEEE Co-Sponsored 2011 International Conference on Networks and Computer Science (ICNCS)</strong>, IACSIT, Kanyakumari, April 2011.</li>
<li>Research Paper Titled: <strong>“Measurement and Decision Criteria in Software Reliability Engineering and Dependability</strong>”, <strong>2009 International Level Conference on Global Issues in Business and Technology</strong>, University of Maryland Eastern Shore, Indore, August 2009.
<li>Research Paper Titled: <strong>“Technical Trends and Concepts of Software Testing</strong>”, <strong>2009 International Level Conference on Global Issues in Business and Technology</strong>, University of Maryland Eastern Shore, Indore, August 2009.</li>
<li>Research Paper Titled: <strong>“Practical Implementation of Data Cube and Data Mining Algorithms</strong>”, <strong>National Conference on Intelligent Systems (NCIS), Chameli Devi Group of Institutions</strong>, Indore, Oct 2012.</li>
<li>Research Paper Titled: <strong>“Dynamic Offloading for Mobile Computation Using Cloud</strong>”, <strong>National Conference on Future Trends in Information and Communication Technology</strong>, Medicaps Institute of Science and Technology, Indore, Oct-2012.</li>
<li>Research Paper Titled: <strong>“Cloud Security a Big Challenge</strong>”, <strong>National Conference on Recent Trends in Cloud Computing, Oriental University</strong>, Indore, Nov 2012.</li>
<li>Research Paper Titled: <strong>“Teacher’s Diary: Academic activities made easy</strong>”, <strong>2012 National Conference on Advances in E-Learning, Institution of Communication Engineers & Information Technologists (ICEIT)</strong>, New Delhi, Feb 2012.</li>
<li>Research Paper Titled: <strong>“DNA Computing: Applications and Challenges</strong>”, <strong>Second International Conference on Inter-Disciplinary Research in Engineering Management, Pharmacy and Science (ICIREMPS 2K15)</strong>, Sagar Institute of Research and Technology, Bhopal, Feb 2015.</li>
<li>Research Paper Titled: <strong>“Role of Hybrid Recommendation Engine in Forestalling Networking Attacks</strong>”, <strong>Second International Conference on Inter-Disciplinary Research in Engineering Management, Pharmacy and Science (ICIREMPS 2K15)</strong>, Sagar Institute of Research and Technology, Bhopal, Feb 2015.</li>


			</ul>

		</section>
		<!-- Section Blog end -->

		<!-- Section Customers -->
		<section id="customers" class="customers">
			
			<div class="section-header-light">
				<h2>Certification/Membership</h2>
			</div>
			<ul style="text-align: justify;">
<li>	AWS Cloud Foundation Course Certified</li>
<li> 	Digital Marketing Training Certification (6 weeks) from Internshala</li>
<li>	Microsoft Technology Associate (MTA) Introduction to Programming using HTML and CSS Certified</li>
<li>	Microsoft Technology Associate (MTA) Introduction to Programming using Python Certified</li>
<li>	Microsoft Technology Associate (MTA) Introduction to Programming using JAVA Certified</li>
<li>	Microsoft Certified Educator (MCE) Certified </li>
<li>	Microsoft Technology Associate (MTA) Operating System Fundamentals Certified</li>
<li>	Microsoft Technology Associate (MTA) Software Testing Fundamentals Certified</li>
<li>	Microsoft Technology Associate (MTA) Database Fundamentals Certified</li>
<li>	Microsoft Technology Associate (MTA) Web Development Fundamentals Certified</li>
<li>	Microsoft Technology Associate (MTA) Networking Fundamentals Certified</li>
<li>	Microsoft in the Class Room Certified</li>
<li>	IBM Certified DB2 Academic Associate</li>
<li>	IBM Certified Associate System Administrator Lotus and Domino 8</li>
<li>	IBM Certified Deployment Professional Tivoli Directory Server 6.3</li>
<li>	IBM Certified Rational Quality Manager and Rational Functional Tester</li>
<li>	Associate member of Institute of Research Engineers and Doctors (IRED)</li>

			</ul>
		
			<div class="overlay"></div>

<div class="row">
<p><br></p>
			</div>
			<div class="section-header">
				<h2>Workshop/Seminar Details</h2>
				<p><br></p>
			<ul>
				<li>Attended <strong>08 weeks (Jul-Sep 2023) SWAYAM-NPTEL NITTTR Course on “Introduction to Machine Learning”</strong> and <strong>Passed the Proctored Examination with Elite + Silver Category</strong>.</li>
				<li>Attended one week FDP on <strong>“Advanced Approaches in Modelling and Simulations for Cutting-Edge Electronic Systems”</strong> dated 12-18 June 2023 organized by SGSITS Indore in association with Banasthali Vidhyapith, Rajasthan.</li>
				<li>Attended one week FDP on <strong>"Teaching Pedagogy"</strong> dated 17-21 April 2023 organized by Department of Management CDGI Indore.</li>
				<li>Taken a session as an Expert Speaker in five days workshop on <strong>“Tools and Techniques for Cyber Crime Prevention”</strong> dated 08 June 2023, organized by Chameli Devi Institute of Pharmacy, Indore, under PCI.</li>
				<li>Attended one week FDP on <strong>“Outcome Based Education”</strong> dated 15-19 December 2022 organized by CDGI Indore IQAC in association with ISTE.</li>
				<li>Attended <strong>08 weeks (Jan-Mar 2022) SWAYAM-NPTEL NITTTR Course on “Accreditation of Undergraduate Engineering Programme”</strong> and <strong>Passed the Proctored Examination</strong>.</li>
				<li>Attended one day FDP on <strong>“TCS Overview-Cybersecurity - Design Thinking and TCS CSR”</strong> at <strong>TCS Indore Campus</strong> on 09 Sep 2022.</li>
				<li>Attended one week FDP on <strong>“AWS Solution Architect Associate”</strong> dated 17-22 January 2022 conducted by <strong>PITC Solutions</strong> at CDGI Campus.</li>
				<li>Attended 5 Days FDP on <strong>“Emerging Technologies in Industry 4.0”</strong> dated 14-18 June 2021 organized by Amity School of Engineering and Technology, Amity University Chhattisgarh.</li>
				<li>Taken sessions as an expert speaker in one day online workshop on <strong>“Understanding (Internet of Things) IoT with Raspberry Pi and Python” </strong>dated 26 August 2020, organized by Truba College of Science and Technology, Bhopal, under RGPV TEQIP-III.</li>
				<li>Attended Webinar on <strong>“How to write a good Research Grant Proposal and Research”</strong> dated 06 August 2020 organized by Amity Science, Technology & Innovation Foundation (ASTIF).</li>
				<li>Attended Webinar on <strong>“How to write an excellent Research Paper for Publication”</strong> dated 01 August 2020 organized by Amity Science, Technology & Innovation Foundation (ASTIF).</li>
				<li>Attended Webinar on <strong>“Machine Learning through Google Colab” </strong>dated 12 July 2020 organized by Amity University, Gwalior.</li>
				<li>Attended Webinar on <strong>“Intellectual Property Rights” </strong> dated 11 July 2020 organized by CDGI Indore.</li>
				<li>Attended 2 Days Workshop on  <strong>“Cyber Security and Ethical Hacking” </strong> under TEQIP-III dated 04-05 July 2020 organized by CDGI Indore.</li>
				<li>Attended 2 Days Workshop on <strong>“Entrepreneurship Road to Atmanirbhar”</strong> under TEQIP-III dated 27-28 June 2020 organized by CDGI Indore.</li>
				<li>Participated in 7 Days <strong>“Science Academies’ Science Leadership Workshop”</strong> organized by Central University of Punjab, India from 22-28 June 2020. </li>
		
				<li>Attended 2 Days Workshop on <strong>“Emotional and Social Intelligence”</strong> under TEQIP-III dated 13-14 June 2020 organized by CDGI Indore.</li>
				<li>Attended 5 Days FDP on <strong>“Data Analytics using R”</strong> under TEQIP-III, dated 08-12 June 2020 organized by CDGI Indore.</li>
				<li>Attended 2 Days FDP on <strong>“Innovation & Research in Data Science with Visualization Using Python”</strong> under TEQIP-III, dated 06-07 June 2020 organized by SAIMS Indore.</li>
				<li>Attended 3 Days FDP on <strong>“Innovative research methodologies for challenging problems of future in Science, Technology, Engineering and Management (STEM)”</strong> under TEQIP-III, dated 05-07 June 2020 organized by IIST Indore.</li>
				<li>Participated in <strong>“Zeal Covid-19 Hackathon”</strong> dated 04-08 June 2020 organized by Zeal Institutes, Pune.</li>
				<li>Attended 2 Days Webinar on <strong>“Full Stack Web Development” </strong>by IncubateIND, Amity University, via ICT Mode 09 May 2020 to 10 May 2020.</li>
				<li>Attended 2 Days Webinar on <strong>“Machine Learning” </strong>by IncubateIND, Amity University, via ICT Mode 02 May 2020 to 03 May 2020.</li>
				<li>Attended 5 Days FTP on <strong>“Neural Network and CNN”</strong> by NITTTR Chandigarh, via ICT Mode at CDGI Campus from 14 April 2020 to 18 April 2020.</li>
				<li>Attended One Day Workshop on <strong>C and C++ Programming </strong>by IIT Bombay, Spoken Tutorial via ICT Mode at CDGI Campus on 29 February 2020. </li>
				<li>Attended One Day FDP on <strong>“Hands-on Workshop on Document Typesetting and Processing using Latex” </strong>held at NMIMS Indore.</li>
				<li>Attended One Day Workshop on <strong>R Programming</strong> by IIT Bombay, Spoken Tutorial via ICT Mode at CDGI Campus on 17 December 2019. </li>
				<li>Attended one day FDP on <strong>“Data Analytics, Salesforce & Agile DevOps” </strong>at TCS Indore Campus on 13 Dec 2019.</li>
				<li>Attended 5 Days STTP on <strong>“Assessment and Evaluation under Outcome Based Education”</strong> by NITTTR Kolkata, via ICT Mode at CDGI Campus from 10 June 2019 to 14 June 2019.</li>
				<li>Attended One Day Workshop on Linux by IIT Bombay, Spoken Tutorial via ICT Mode at CDGI Campus on 23 August 2019.</li> 
				<li>Attended One Day Workshop on <strong>Python Programming</strong> by IIT Bombay, Spoken Tutorial via ICT Mode at CDGI Campus on 22 June 2019. </li>
				<li>Attended <strong>Amazon AWS Cloud Day </strong>seminar on 21 May 2019 at Hotel Marriott, Indore.</li> 
				<li>Attended <strong>Intel Business Solution Showcase</strong> seminar on 19 March 2019 at Hotel Marriott, Indore. </li>
				<li>Organized and attended 5 Days FDP on <strong>Machine Intelligence and Applications under TEQIP-III </strong>dated 24-28 October 2018 at CDGI Indore</li>
				<li>Attended 2 Days workshop on <strong>5G and IOT Security</strong> dated 10-11 September 2018 at IIT Delhi. </li>
				<li>Attended 2 Days workshop on <strong>Nuclear Energy: Clean & Alternative Source of Energy </strong>dated 27-28 July 2018 at CDGI Indore. </li>
				<li>	Participated in 9 Days workshop on <strong>HTML 5, CSS and Jquery </strong>dated 11 May 2018 to 19 May 2018 conducted by OZYMANDIAS CREATIONS Pvt. Ltd. </li>
<li>	Participated in 2 Week <strong>SAP ABAP Training </strong>dated 30 Jan 2017 to 10 Feb 2017 conducted at KPIT Technologies, Noida.</li> 
<li>	Participated in 1 Day TCS Workshop on <strong>Business Intelligence using ERP </strong>dated 05 Feb 2016 conducted at SVITS, Indore.</li> 
<li>	Participated in 5 Days <strong>Mission 10X - UTLP Expert Workshop Level 3 </strong>dated 23 Feb 2015 to 27 Feb 2015 conducted at Wipro Technologies, Bangalore.</li>
<li>	Participated in 5 Days <strong>Mission 10X - UTLP Expert Workshop Level 2 </strong>dated 15 Dec 2014 to 19 Dec 2014 conducted at Wipro Technologies, Bangalore.</li>
<li>	Participated in 6 Days <strong>ISTE Workshop on Computer Networking </strong>dated 30 June 2014 to 05 July 2014 at CDGI Indore.</li>
<li>	Participated in 6 Days <strong>ISTE Coordinators Workshop on Computer Programming </strong>at IIT Bombay, dated 21 April 2014 to 26 April 2014.</li>
<li>	Participated in 3 Days workshop of <strong>WIPRO Mission 10X </strong>at CDGI, Indore dated 22 Jan 2014 to 24 Jan 2014.</li>
<li>	Attended three days workshop at IIT Bombay on <strong>“Python for Education and Scientific Computing” </strong>from 27-29 Dec 2012.</li>
<li>	Conducted one day workshop at CDGI, Indore on <strong>“Computer Hardware and Networking” </strong>dated 19 September 2015 for CS/IT Students.</li>
<li>	Conducted one day workshop at CDGI, Indore on <strong>“Parallel Programming using Python” </strong>dated 24 July 2015 for CS/IT Students.</li>
<li>	Conducted two days workshop at CDGI, Indore on <strong>“PHP and MySQL” </strong>dated 9 and 11 March 2013 for CS/IT Students.</li>
<li>	Conducted one day workshop at CDGI, Indore on <strong>“Attractive Web Designing” </strong>dated 20 Nov 2014 for all branch students.</li>

			</ul>
			</div>

		</section>
		<!-- Section Customers end -->

		<!-- Section Contact -->
		<section id="contact" class="contact">
			
			<div class="section-header">
				<h2>Get In Touch</h2>
		<!--		<a href="pdf/Resume_Dharmendra Pathak.pdf" class="resume-download" data-toggle="tooltip" data-placement="bottom" title="Download Complete Resume">
					<i class="fa fa-download" aria-hidden="true"></i>
				</a> -->
			</div>

			<!-- Contact Form -->
			<form name="frm" method="post" action="contactform.php" onsubmit="return validate();">

				<div class="row"><!-- Row -->

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Name input -->
						<div class="form-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your Name" required>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Email input -->
						<div class="form-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Your Email" required>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Phone input -->
						<div class="form-group">
							<input type="text" class="form-control" name="InputPhone" id="InputPhone" placeholder="Phone (optional)">
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Subject input -->
						<div class="form-group">
							<input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject">
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12"><!-- Message textarea -->
						<div class="form-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="6" placeholder="Message" required></textarea>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12"><!-- Message textarea -->
						<div class="form-group">
							<span style="font-size:20;color:#FF0000">What is <span id="no1"></span> plus <span id="no2"></span>?</span>&emsp;
							<input name="answer" id="answer"  pattern="7" title="Please answer the question to prove you are human!!" placeholder="Your Answer ??" required>
						</div>
					</div>

				</div><!-- Row end -->

				<input type="submit" name="submit" id="submit" value="Send Message" class="btn btn-default pull-left"><!-- Send Button -->
				<span class="num alert alert-danger">Visitors: <?php echo $counter;?></span>
			</form>
			<!-- Contact Form end -->

		</section>
		<!-- Section Contact end -->

	</div>
	<!-- Main Content end -->

</main>
<!-- Main Wrapper end -->

<!-- SCRIPTS -->
<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.onepage-scroll.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.filterizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/jquery.numscroll.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
		$(".num").numScroll();
</script>
<span id="status" style="display:none">Unsubmitted</span>
<script type="text/javascript" src="assets/js/captcha.js"></script>
<script>placenumber();</script>
</body>
</html>