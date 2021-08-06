<?php date_default_timezone_set('asia/singapore'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sabri Bin Mansor | My Learning Journey</title>
    <link href="images/favicon/default.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="This website started as an initiative for me to practise what I have learnt about web development. It also includes my experience with other technologies, exploring the realm of data science, tinkering and making stuffs, and other personal adventures." />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<?php   $now 	 = date('H', time());
	$night   = "19"; // 1900 HRS
	$morning = "7";  // 0700 HRS
	if( ( (isset($_GET["nightmode"]) && $_GET["nightmode"] == "on") || ($now >= $night || $now <= $morning) )  && ( (!isset($_GET["nightmode"])) || (isset($_GET["nightmode"]) && $_GET["nightmode"] != "off") )  ){
?>
	    <link rel="stylesheet" type="text/css" href="css/nightmode_scss.css">
	    <link rel="stylesheet" type="text/css" href="css/nightmode.css">
	   <?php $particle_count = 60; ?>
<?php   }else{ ?>
	    <link rel="stylesheet" type="text/css" href="css/scss.css">
            <link rel="stylesheet" type="text/css" href="css/default.css">
	   <?php $particle_count = 30; ?>
<?php   } ?>
</head>
<body>
    <div id="particle-container">
        <?php if( ( (isset($_GET["nightmode"]) && $_GET["nightmode"] == "on") || ($now >= $night || $now <= $morning) )  && ( (!isset($_GET["nightmode"])) || (isset($_GET["nightmode"]) && $_GET["nightmode"] != "off") )  ){
	 	     echo "<p style='display:block;position:absolute;color:#FECE43;'>Night Mode <a href='?nightmode=off' style='color:#FECE43;'>Enabled</a></p>";
	      }else{ echo "<p style='display:block;position:absolute;color:#ccc;'>Night Mode <a href='?nightmode=on'>Off</a></p>"; } ?>
	<?php for($i=0; $i<$particle_count; $i++){
		echo "<div class='particle'></div>\r\n";
	} ?>
    </div>
    <div class="body-container">

        <div id="div-welcome" class="text-center">
	    <div class="welcome-h1">
            <h1><span>W</span><span>E</span><span>L</span><span>C</span><span>O</span><span>M</span><span>E</span></h1>
	    </div>
	    <p class="subtitle">This is where i <u>try</u> to document my learning journey.</p>
	    <div class="scroller_anchor"></div>
	    <div class="scroller">
            <ul id="main-nav" class="nav nav-tabs">
                <li class="nav-link active">
                    <a data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#software">Software</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#datascience">Data Science</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#tinkering">Tinkering</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#achievements">Achievements</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#hobbies">Hobbies</a>
                </li>
                <li class="nav-link">
                    <a data-toggle="tab" href="#philosopy">Philosophy</a>
                </li>
            </ul>
	    </div>
        </div>
	<hr>
        <div class="tab-content text-center">
            <div id="home" class="tab-pane fade in active">

                <div id="div-personal">
                    <div id="profileimg" class="circle"></div>
                    <!--<h2>SABRI BIN MANSOR</h2>-->
                </div>


                <div id="div-about">
		    <div class="about-header">
                    <h3>About Me</h3>
                    <p>Hi, you can call me Sabri. Welcome to my website.</p>
		    </div>
		    <p>
			<br>This website started as an initiative for me to practise
			what I have learnt about web development so far #01/06/2020.
			Being a curious and inquisitive minded person, I sometimes have trouble keeping up with the things I have learnt. haha.
			So.. this website serves as an effort to document my many adventures too. Thank you for visiting!
                    </p>
                </div>

		<hr>

		<div id="div-connect">
                    <h3>Connect</h3>
                    <h4><a href="mailto:sabribinmansor@gmail.com">sabribinmansor@gmail.com</a></h4>
                    <p><a href="https://github.com/sabribinmansor" target="_blank"><i class="fa fa-github"></i></a><span style="margin:0 20px;"> | </span><a href="https://linkedin.com/in/sabri-mansor"><i class="fa fa-linkedin-square"></i></a></p>
                </div>
            </div> <!-- end tab home -->

            <div id="software" class="tab-pane fade"><div id="div-software">
                <?php include "tab_software.php"; ?>
            </div></div> <!-- end tab software -->

            <div id="datascience" class="tab-pane fade"><div id="div-datascience">
                <?php include "tab_datascience.php"; ?>
            </div></div> <!-- end tab data science -->

            <div id="tinkering" class="tab-pane fade"><div id="div-tinkering">
                <?php include "tab_tinkering.php"; ?>
            </div></div> <!-- end tab tinkering -->

            <div id="achievements" class="tab-pane fade"><div id="div-achievements">
		<?php include "tab_achievements.php"; ?>
            </div></div> <!-- end tab achievements -->

            <div id="hobbies" class="tab-pane fade">
                <?php include "tab_hobbies.php"; ?>
            </div> <!-- end tab hobbies -->

            <div id="philosopy" class="tab-pane fade"><div id="div-philosopy">
                <?php include "tab_philosophy.php"; ?>
            </div></div> <!-- end tab philosopy -->

        </div> <!-- end tab-content -->
	<div class="footer text-center"><p>&copy; 2020. All Rights Reserved.</p></div>
    </div>

	<script>
		// nav bar function - credits https://www.virendrachandak.com/techtalk/make-a-div-stick-to-top-when-scrolled-to/
	        <?php if( ( (isset($_GET["nightmode"]) && $_GET["nightmode"] == "on") || ($now >= $night || $now <= $morning) )  && ( (!isset($_GET["nightmode"])) || (isset($_GET["nightmode"]) && $_GET["nightmode"] != "off") )  ){
		      		echo "var base_color = 'rgb(0, 26, 66)';";
				echo "var active_color = 'rgb(0, 26, 66)';";
		      }else{
                                echo "var base_color = '#fff';";
                                echo "var active_color = '#FFE6C7';";
		} ?>

		$(window).scroll(function(e) {
		    var scroller_anchor = $(".scroller_anchor").offset().top;
		    if ($(this).scrollTop() >= scroller_anchor && $('.scroller').css('position') != 'fixed')
		    {
		        $('.scroller').css({ 'background': active_color, 'position': 'fixed','top': '0px' });
		        $('.scroller_anchor').css('height', '62px');
		    }
		    else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative')
		    {
		        $('.scroller_anchor').css('height', '0px');
		        $('.scroller').css({ 'background': base_color, 'position': 'relative' });
		    }
		});
	</script>

</body>
</html>
