<?php
// $mysqli = new mysqli("localhost","root","","surveydb");

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    // Update your secret key before use
    $secret_key = '$7PHKqGt$yRlPjyt89rds4ioSDsglpk/';
    // Update your secret iv before use
    $secret_iv = '$QG8$hj7TRE2allPHPlBbrthUtoiu23bKJYi/';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


// if(isset($_GET["id"])){

//     $dd = $_GET["id"];

//     $id = encrypt_decrypt('decrypt', $dd);

//     $qry="select * from university where id='$id'";

//     $res=mysqli_query($mysqli,$qry);

//     $rs=mysqli_fetch_array($res);

//     $img=$rs['logoupload'];

// }else{

    $id = 0;
    $img="img/info_graphic_1.svg";

// }


?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.ansonika.com/wilio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 08:53:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edoxi Questionnaire for Management Students">
    <meta name="author" content="edoxi">
    <title>Edoxi | Questionnaire for Management Students</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="https://www.edoxi.com/favicon.ico" type="image/x-icon">
   
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>
	
	<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-11097556-8']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	

	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="index.html" id="logo"><img src="https://www.edoxi.com/assets/images/logo-reverse.svg" alt="" width="100" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="<?=$img?>" alt="" class="img-fluid"></figure>
						<h2>Survey for Management Students</h2>
						<p>AI and AI-generated tools are the trendsetters now. Edoxi Training Institute, a well-established Dubai-based professional training institute, is taking this survey to assess your awareness of Artificial Intelligence and its influence on your management studies. Please provide your sincere responses which will help us with our research and in content development towards publication.</p>
						
					</div>
					<div class="copy">© 2023 Edoxi</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" action="#" method="POST">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question">Please fill with your details</h3>
                                    <div class="form-group">
										<input type="hidden" name="uid" class="form-control required" value=<?=$id?> >
									</div>
									<div class="form-group">
										<input type="text" name="firstname" class="form-control required" placeholder="Name in Full">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control required" placeholder="Your Email">
									</div>
									<div class="form-group">
											<div class="styled-select clearfix">
											<select class="wide required" name="gender">
												<option value="">Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												<option value="Other">Other</option>
												                      
											</select>
										</div>
									</div>
                                    
									<!-- <div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="course">
												<option value="">Course Name</option>
												<option value="BBA">BBA</option>
												<option value="MBA">MBA</option>
												<option value="B.Com + LLB (Hons. Integrated)">B.Com + LLB (Hons. Integrated)</option>
												<option value="Bachelor of Commerce (B.Com)">Bachelor of Commerce (B.Com)</option>
												<option value="Bachelor of Hotel Management">Bachelor of Hotel Management</option>       
													<option value="Bachelor of Hotel Management & Catering Technology (BHM & CT)">Bachelor of Hotel Management & Catering Technology (BHM & CT)</option>       
														<option value="Other">Other</option>       
											</select>
										</div>
									</div> -->
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="discipline">
												<option value="Diploma">Diploma</option>
                                                <option value="Under Graduate (UG)">Under Graduate (UG)</option>  
                                                <option value="Post Graduate Diplomas">Post Graduate Diplomas</option>
												<option value="Post Graduate (PG)">Post Graduate (PG)</option>
                                                <option value="PhD">PhD</option>     	
											</select>
										</div>
									</div>
                                    <div class="form-group">
										<input type="text" name="course" class="form-control required" placeholder="Specify Course Name">
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="batchyear">
												<option value="">Batch Year </option>
												<option value="1">1 Year</option>
												<option value="2">2 Year</option>
												<option value="3">3 Year</option>
												<option value="4">4 Year</option>       
													
											</select>
										</div>
									</div>
								
									
									<div class="form-group terms">
										<label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>1/20</strong>How familiar are you with artificial intelligence?</h3>
									<div class="form-group">
										<label class="container_radio version_2">Very Familiar.  
											<input type="radio" name="question_1" value="Very Familiar. " class="required" onchange="getVals_n(this, '#question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_radio version_2">Not Familiar. 
											<input type="radio" name="question_1" value="Not Familiar." class="required" onchange="getVals_n(this, '#question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_radio version_2">I have only heard about it. 
											<input type="radio" name="question_1" value="I have only heard about it." class="required" onchange="getVals_n(this, '#question_1');">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
									<div class="step">
									<h3 class="main_question"><strong>2/20</strong>Have you ever taken the help of any AI tools for your studies? If yes, please mention the name of the tool used. </h3>
									<div class="form-group">
										<label class="container_radio version_2">Yes 
											<input type="radio" name="question_2" value="Yes" class="required" onchange="getVals_n(this, '#question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_radio version_2">No 
											<input type="radio" name="question_2" value="No" class="required" onchange="getVals_n(this, '#question_2');">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										 
											<input type="text" name="question_2_tool" value="" class="form-control " onchange="getVals_n(this, '#question_2_tool');">
										
									
									</div>
								</div>
								<!-- /step-->
							
    
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>3/20</strong>Do you think artificial intelligence can improve the quality of your studies? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_3" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_3');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_3" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_3');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Don’t Know. 
                <input type="radio" name="question_3" value="Don’t Know." class="required valid"
                    onchange="getVals_n(this, '#question_3');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>4/20</strong>Have you heard about generative AI? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_4" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_4');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_4" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_4');">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>5/20</strong>Do you believe AI technologies like ChatGPT can provide valuable support for your project/studies research? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_5" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_5');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_5" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_5');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_5" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_5');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>6/20</strong>Do you think AI technologies like ChatGPT can help your career? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_6" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_6');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_6" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_6');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_6" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_6');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>7/20</strong>Have you felt that AI can provide personalised learning experiences based on your learning styles, interests, and abilities? 
        </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_7" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_7');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_7" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_7');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_7" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_7');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>8/20</strong>Do you think artificial intelligence can impact the management industry?
        </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_8" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_8');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_8" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_8');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Don’t know.
                <input type="radio" name="question_8" value="Don’t know." class="required valid"
                    onchange="getVals_n(this, '#question_8');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>9/20</strong> Do you think that the existing business education needs to change with the concept of AI, both in terms of how and what is delivered in the classroom? 
        </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_9" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_9');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_9" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_9');">
                <span class="checkmark"></span>
            </label>
        </div>
     

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>10/20</strong>Do you think that an AI-integrated business school’s curriculum will prepare you for the evolving job market?
        </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_10" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_10');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_10" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_10');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not sure.
                <input type="radio" name="question_10" value="Not sure." class="required valid"
                    onchange="getVals_n(this, '#question_10');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>11/20</strong>Do you think artificial intelligence can help improve the efficiency and productivity of management professionals?</h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_11" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_11');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_11" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_11');">
                <span class="checkmark"></span>
            </label>
        </div>
      

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>12/20</strong>Artificial intelligence can provide a more efficient way of managing projects. Do you agree?</h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_12" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_12');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_12" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_12');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_12" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_12');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>13/20</strong>Do you think AI can replace MBA students? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_13" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_13');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_13" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_13');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_13" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_13');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>14/20</strong>Do you think that AI Skills are mandatory for next-generation jobs? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_14" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_14');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_14" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_14');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_14" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_14');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>15/20</strong>Do you think artificial intelligence is likely to have a negative influence on the future of management? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_15" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_15');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_15" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_15');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_15" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_15');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>16/20</strong>Would you be interested in specializing in AI as part of your MBA program?</h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_16" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_16');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_16" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_16');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_16" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_16');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>17/20</strong>Do you think that AI and related technologies will lead to the displacement of current jobs and workers? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_17" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_17');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_17" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_17');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_17" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_17');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>18/20</strong>AI-related roles will require workers with a strong skill set and orientation in areas such as ethics, leadership, emotional intelligence, and change management. Are you preparing yourselves for these skill sets? 
        </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_18" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_18');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_18" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_18');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_18" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_18');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>19/20</strong>Is artificial intelligence posing a threat to management studies?</h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_19" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_19');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_19" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_19');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">Not Sure
                <input type="radio" name="question_19" value="Not Sure" class="required valid"
                    onchange="getVals_n(this, '#question_19');">
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="step wizard-step current" style="">
        <h3 class="main_question"><strong>20/20</strong>Do you trust AI to make significant decisions about your future/career? </h3>
        <div class="form-group">
            <label class="container_radio version_2">Yes
                <input type="radio" name="question_20" value="Yes" class="required valid"
                    onchange="getVals_n(this, '#question_20');">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-group">
            <label class="container_radio version_2">No
                <input type="radio" name="question_20" value="No" class="required valid"
                    onchange="getVals_n(this, '#question_20');">
                <span class="checkmark"></span>
            </label>
        </div>
       


</div>
							
<div class="submit step">
	<h3 class="main_question">Summary</h3>
<div class="summary">
<ul>
<li><strong>1</strong>
    <h5>How familiar are you with artificial intelligence?</h5>
    <p id="question_1"></p>
</li>
<li><strong>2</strong>
    <h5>Have you ever taken the help of any AI tools for your studies? If yes, please mention the name of the tool
        used. </h5>
    <p id="question_2"></p>
    <p id="question_2_tool"></p>
</li>
<li><strong>3</strong>
    <h5>Do you think artificial intelligence can improve the quality of your studies? </h5>
    <p id="question_3"></p>
</li>
<li><strong>4</strong>
    <h5>Have you heard about generative AI? </h5>
    <p id="question_4"></p>
</li>
<li><strong>5</strong>
    <h5>Do you believe AI technologies like ChatGPT can provide valuable support for your project/studies research?
    </h5>
    <p id="question_5"></p>
</li>
<li><strong>6</strong>
    <h5>Do you think AI technologies like ChatGPT can help your career? </h5>
    <p id="question_6"></p>
</li>
<li><strong>7</strong>
    <h5>Have you felt that AI can provide personalised learning experiences based on your learning styles,
        interests, and abilities?
    </h5>
    <p id="question_7"></p>
</li>
<li><strong>8</strong>
    <h5>Do you think artificial intelligence can impact the management industry?
    </h5>
    <p id="question_8"></p>
</li>
<li><strong>9</strong>
    <h5>Do you think that the existing business education needs to change with the concept of AI, both in terms of
        how and what is delivered in the classroom?
    </h5>
    <p id="question_9"></p>
</li>
<li><strong>10</strong>
    <h5>Do you think that an AI-integrated business school’s curriculum will prepare you for the evolving job
        market?
    </h5>
    <p id="question_10"></p>
</li>
<li><strong>11</strong>
    <h5>Do you think artificial intelligence can help improve the efficiency and productivity of management
        professionals?</h5>
    <p id="question_11"></p>
</li>
<li><strong>12</strong>
    <h5>Artificial intelligence can provide a more efficient way of managing projects. Do you agree?</h5>
    <p id="question_12"></p>
</li>
<li><strong>13</strong>
    <h5>Do you think AI can replace MBA students? </h5>
    <p id="question_13"></p>
</li>
<li><strong>14</strong>
    <h5>Do you think that AI Skills are mandatory for next-generation jobs? </h5>
    <p id="question_14"></p>
</li>
<li><strong>15</strong>
    <h5>Do you think artificial intelligence is likely to have a negative influence on the future of management?
    </h5>
    <p id="question_15"></p>
</li>
<li><strong>16</strong>
    <h5>Would you be interested in specializing in AI as part of your MBA program?</h5>
    <p id="question_16"></p>
</li>
<li><strong>17</strong>
    <h5>Do you think that AI and related technologies will lead to the displacement of current jobs and workers?
    </h5>
    <p id="question_17"></p>
</li>
<li><strong>18</strong>
    <h5>AI-related roles will require workers with a strong skill set and orientation in areas such as ethics,
        leadership, emotional intelligence, and change management. Are you preparing yourselves for these skill sets?
    </h5>
    <p id="question_18"></p>
</li>
<li><strong>19</strong>
    <h5>Is artificial intelligence posing a threat to management studies?</h5>
    <p id="question_19"></p>
</li>
<li><strong>20</strong>
    <h5>Do you trust AI to make significant decisions about your future/career? </h5>
    <p id="question_20"></p>
</li>

										</ul>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/survey_func.js"></script>
	
	<script>
    function getVals_n(el,id)
    {
        $(id).text($(el).val());
    }
	   
	   $( document ).ready(function() {
  $('form#wrapped').attr('action', 'Frontend/insertsurvey');
});
	</script>

</body>

</html>