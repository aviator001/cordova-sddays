<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<? include "utils.class.php";
$c=new utils;
if ($c->is_mobile()) {
	$is_mobile="mobile";
}
?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
   <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Economica|Poiret+One" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/stream.css" type="text/css" />
	<link rel="stylesheet" href="jquery/jquery-ui.theme.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Just+Another+Hand|Open+Sans+Condensed:300|Poiret+One|Wire+One" rel="stylesheet">

<!--[if lt IE 9]>

	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>User Search</title>
        <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
			font-family: Open Sans Condensed;
			font-size:18px
        }
        .btn-open {
            height: auto;
            line-height: inherit;
            padding: 15px 25px;
        }
        main {
            flex: 1 0 auto;
        }
        .container.master { padding: 50px; }
        .fa {
            display: inline-block !important;
        }
        footer {  margin-top: 0 !important; }
        #remote {
            position: relative !important;
            margin: 25px 0;
        }
        #command form input[type="texte"] {
            display: block;
            border: 2px solid rgb(74, 74, 74);
            padding: 3px 20px;
            margin-bottom: 10px;
            border-radius: 6px;

        }
        .container.formu #hangup,
        .container.formu #accept,
        .container.formu #refuse,
        .container.formu #call {
            background: transparent;
            border: none;
        }
        #addressBookDropDown {
            position: absolute;
            background: #e6e6e6;
            padding: 5px 0;
            margin-top: 5px;
            border-radius: 5px;
            z-index: 100;
        }
        #addressBookDropDown li {
            color: #4a4a4a;
            padding: 2px 15px;
        }
        #addressBookDropDown li a {
            color: lavenderblush;
        }
        #addressBookDropDown li:hover {
            background: #d6d6d6;
        }

  container {
	  width:100%!Important;
  }	
  #status {
	  font-size:16px!Important
  }
video {
 height: 100%;
  max-height: 100%;
  max-width: 100%;
  object-fit: cover;  /* no letterboxing */
  transition: opacity 1s;
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  -webkit-transform: scale(-1, 1);
  transform: scale(-1, 1);
  width: 100%;
}
  .txtMsg {
		width:260px;
		height:80px;
		border:1px solid skyblue;
		border-radius:4px;
		display:none;
		margin-bottom:10px;
		margin-top:5px;
  }
.p1 {
	  font-family:Poiret One;
	  font-size:24px;
  }
  .p11 {
	  font-family:Poiret One;
	  font-size:24px;
	  background:#CCC;
	  color: #fff;
  }
.b1 {
	 font-family:Bubbler One;
	 font-size:18px;
  }
	#chkbox {
		width:35px;height:35px;border:none
	}
/* $activeColor: #c0392b; //red */
/* $background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/13460/dark_wall.png'); */
/* .slideOne */
.slideOne {
  width: 50px;
  height: 10px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
}
.slideOne label {
  display: block;
  width: 16px;
  height: 16px;
  position: absolute;
  top: -3px;
  left: -3px;
  cursor: pointer;
  background: #fcfff4;
  background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
.slideOne input[type=checkbox] {
  visibility: hidden;
}
.slideOne input[type=checkbox]:checked + label {
  left: 37px;
}

/* end .slideOne */
/* .slideTwo */
.slideTwo {
  width: 80px;
  height: 30px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
}
.slideTwo:after {
  content: '';
  position: absolute;
  top: 14px;
  left: 14px;
  height: 2px;
  width: 52px;
  background: #111;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
}
.slideTwo label {
  display: block;
  width: 22px;
  height: 22px;
  cursor: pointer;
  position: absolute;
  top: 4px;
  z-index: 1;
  left: 4px;
  background: #fcfff4;
  border-radius: 50px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
  background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
}
.slideTwo label:after {
  content: '';
  width: 10px;
  height: 10px;
  position: absolute;
  top: 6px;
  left: 6px;
  background: #333;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px black, 0px 1px 0px rgba(255, 255, 255, 0.9);
}
.slideTwo input[type=checkbox] {
  visibility: hidden;
}
.slideTwo input[type=checkbox]:checked + label {
  left: 54px;
}
.slideTwo input[type=checkbox]:checked + label:after {
  background: #27ae60;
  /*activeColor*/
}

/* end .slideTwo */
/* .slideThree */
.slideThree {
  width: 80px;
  height: 26px;
  background: #333;
  margin: 20px auto;
  position: relative;
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px rgba(255, 255, 255, 0.2);
}
.slideThree:after {
  content: 'OFF';
  color: #000;
  position: absolute;
  right: 10px;
  z-index: 0;
  font: 12px/26px Arial, sans-serif;
  font-weight: bold;
  text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.15);
}
.slideThree:before {
  content: 'ON';
  color: #27ae60;
  position: absolute;
  left: 10px;
  z-index: 0;
  font: 12px/26px Arial, sans-serif;
  font-weight: bold;
}
.slideThree label {
  display: block;
  width: 34px;
  height: 20px;
  cursor: pointer;
  position: absolute;
  top: 3px;
  left: 3px;
  z-index: 1;
  background: #fcfff4;
  background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.3);
}
.slideThree input[type=checkbox] {
  visibility: hidden;
}
.slideThree input[type=checkbox]:checked + label {
  left: 43px;
}

/* end .slideThree */
/* .roundedOne */
.roundedOne {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  background: linear-gradient(to bottom, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  border-radius: 50px;
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0, 0, 0, 0.5);
}


</style>
<!--       <script src="https://cloud.apizee.com/apiRTC/apiRTC-latest.min.js"></script> -->
<script type="text/javascript" src="rtc.js"></script>
    </head>
<body class="" style="" onload="fixHT()">
<div class="" style="background-image: url('img/map7.png'); background-size:cover; filter:blur(10px);position:absolute;top:0;left:0;width:100%;height:100%;overflow:none"></div>

	<!-- Document Wrapper
	============================================= -->
<? if ($is_mobile=="mobile") {
$mw="100%";
$ml="7%";
$tw="70%";
$lh="500px";
?>
	<div id="wrapper" style="width:100%;background:#fff;overflow:hidden">
	<div style="width:100%;position:absolute;height:60px;top:0;left:0;background:#00D9D9" class="www_box7">
	Back <img style="margin:auto;height:40px;position:absolute;left:0;right:0;margin:auto;top:10px;display:" src="images/logo4.png">
	</div>
	<div style="width:100%;position:absolute;z-index:99999999999999999;height:70px;background:#f0f0f0;bottom:0px;left:0;margin:0;font-size:15px!Important">
	<span style="font-size:16px!Important;" id="status"></span><span style="font-size:16px!Important;" id="status2"></span></div>
<? } else { ?>
<? $mw="800px";?>
<? $ml="50px";?>
<? $tw="400px";?>
<? $lh="600px";?>
	<div id="wrapper" style="width:<?=$mw;?>;height:800px;overflow:hidden">
	<div style="width:100%;position:absolute;height:60px;top:0;left:0;background:#00D9D9" class="www_box7">
	<input type="button" value=" Back to Members Home " onclick="location.href='home.php'" class="btn btn-danger" style="position:absolute;top:10px;left:10px"> <img style="margin:auto;height:40px;position:absolute;left:0;right:0;margin:auto;top:10px;display:" src="images/logo4.png">
	</div>
	<div style="position:absolute;bottom:50px;left:0px;width:<?=$lh;?>;height:50px;right:0;margin:auto;font-size:36px">
</div>
<? } ?>
		<!-- Header
		============================================= -->
		<div id="" class="" style="padding:20px;position:absolute;left:0;right:0;margin:auto!Important;top:50PX;height:225px;margin:auto;z-index:9;max-width:320px">
			<div style="font-size:24px;padding:5px;border-bottom:0px solid red;text-align:left" class="p1">MAKE A VIDEO CALL</div>
			<table style="width:320px;margin-left:-20px;margin-top:5px" class="www_box2">
				<tr>
					<td style="width:95px;padding:10px" 1title="Enter a login number or an email address of the person you wish to video chat with - and just press the button. Thats it. User offline? You also have the option of having us track down the user for you. Just choose 'yes' when asked." style="width:60px">

						<label>Dial</label>
						<span id="addressBook" style="font-size:18px;color:#000">
						  <img src="https://werrx.com/images/sp13.png" style="width:30px">
						</span>							
					</td>
					<td style="text-align:left;max-width:170px">
						<input type="text" id="patient_login" value=""  placeholder="Invite via Login or Email" style="padding:5px;width:150px;height:40px;border:1px solid skyblue;border-radius:4px;background:#fcfcfc" onblur="document.all.callVideo.src='https://sugardaddydays.com/assets/images/vcb.png'">
						<div id="addressBookDropDown" style="display:none;color:#000!Important;background:#f0f0f0;font-size:20px;width:170px;margin-top:-5px;border-radius:0 0 4px 4px"></div>
						<input type="hidden" id="encodedLogin">
					</td>
					<td>
						<img title="Click here to start a video call with anyone, just using their login name or email address" style="width:60px;margin:10px" id="callVideo" src="https://sugardaddydays.com/assets/images/vc.png">
						<span id="call"></span>
					</td>
				</tr>
			</table>
			<div style="font-size:1.1em"><span><img style="width:40px" src="https://sugardaddydays.com/assets/images/grr.png"></span><span>SETTINGS</span></div>
			<table style="width:320px;margin-left:-20px;margin-top:10px" class="www_box2">
				<tr>
					<td style="width:50px;padding:10px">
							<label>Audio</label>
					</td>
					<td style="text-align:left;max-width:250px">
						<select class="browser-default" id='audioSource' style="margin:5px;background:lavenderblush;border-radius:4px;max-width:200px;padding:5px;border:none;height:40px;font-size:20px;">
							<option value="" disabled selected>Default Mic</option>
						</select>
				
					</td>
					
				</tr>
				<tr>
					<td style="padding:10px">
						<label>Video</label>
					</td>
					<td>
						<select class="browser-default" id='videoSource' style="margin:5px;background:lavender;border-radius:4px;max-width:200px;padding:5px;border:none;height:40px;font-size:20px;">
							<option value="" disabled selected>Default Camera</option>
						</select>													
					</td>
				</tr>
				<tr>
					<td style="width:50px;padding:10px">
						<label>Resolution</label>
					</td>
					<td style="text-align:left;max-width:250px">
						<select class="browser-default" id='audioSource' style="margin:5px;background:lightblue;border-radius:4px;max-width:200px;padding:5px;border:none;height:40px;font-size:20px;">
							<option value="" selected>HD</option>
							<option value="" disabled>4K</option>
							<option value="" disabled>SD</option>
							<option value="" disabled>VGA</option>
							<option value="" disabled>QVGA</option>
						</select>
				
					</td>
				</tr>
				<tr>
					<td style="width:50px;padding:10px">
							<label>Bandwidth</label>
					</td>
					<td style="text-align:left;max-width:250px">
						<select class="browser-default" id='audioSource' style="margin:5px;background:gold;border-radius:4px;max-width:200px;padding:5px;border:none;height:40px;font-size:20px;">
							<option value="" selected>1200 KBps</option>
							<option value="" disabled>800 KBps</option>
							<option value="" disabled>300 KBps</option>
							<option value="" disabled>100 KBps</option>
						</select>
				
					</td>
					
				</tr>
				<tr>
					<td style="width:50px;padding:10px">
						<label>Source</label>
					</td>
					<td style="text-align:left;max-width:250px">
						<SPAN><a href="#"><image src="https://sugardaddydays.com/assets/images/t1a.png" id="mm" style="width:45px" data-toggle="modal" data-target="#modalRemote"></a><BR>REMOTE</SPAN><SPAN style="position:absolute;margin-left:25px;margin-top:-28px;text-align:center"><a href="#"><image src="https://sugardaddydays.com/assets/images/t1b.png" id="mr" style="width:25px" data-toggle="modal" data-target="#modalMini"></a><br>LOCAL</SPAN>
					</td>
				</tr>
			</table>
			<table style="width:350px;margin-left:-20px;margin-top:10px">
			<tr><td>
				<a href="#"><image src="images/tele_med.png"style="width:55px;display:none" data-toggle="modal" data-target="#modalAR" id="tm"></a>
				<a href="#"><image src="images/tele_med.png"style="width:55px;display:none" data-toggle="modal" data-target="#modalAlert" id="am"></a>
				<input id="hangup" class="btn btn-danger" type="button" disabled="true" value="Hangup" style="display:none"/>
			</td></tr>
		</table>
		
	</div></div>  
<? if ($is_mobile!="mobile") { ?>
	<div class="www_box2" style="position:fixed;font-size:20px;width:100%;text-align:center;color:#000;bottom:0px" id="status"></div>
<? } ?>              </div>
            </div><!-- /.container -->
	</div>
<!-- #wrapper end -->
						<div class="modal fade" id="modalCalling" tabindex="-1" role="dialog" aria-labelledby="modalCallingLabel" aria-hidden="true" style="position:absolute;z-index:99999999999999999999999999;font-family:Poiret One!Important;font-size:24px!Important">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/new_close.png" onclick="setStatus('Call Request Ended')"></button>
											<h4 class="modal-title" id="modalCallingLabel">Calling...</h4>
										</div>
										<div class="modal-body" id="callBody" style="width:100%;height:100%;object-fit:cover;padding:0;margin:0;text-align:center;display:block">
											<div><img src="images/phone_calling.gif" style="width:125px"></div>
											<div>Invite Sent.<br>Waiting for user...<br><br></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modalRemote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="position:absolute;z-index:99999999999999999999999999" onclick="goFullScreen()">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/new_close.png"></button>
											<h4 class="modal-title" id="myModalLabel">REMOTE VIDEO STREAM</h4>
										</div>
										<div id="hangupButtons"></div>
										<div class="modal-body" id="remote" style="width:100%;height:100%;object-fit:cover;padding:0;margin:0;text-align:center">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modalMini" tabindex="-1" role="dialog" aria-labelledby="miniModalLabel" aria-hidden="true" style="position:absolute;z-index:99999999999999999999999999">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/new_close.png"></button>
											<h4 class="modal-title" id="miniModalLabel">MY LOCAL VIDEO STREAM</h4>
										</div>
										<div id="hangupButtons"></div>
										<div class="modal-body" id="mini" style="width:100%;height:100%;object-fit:cover;padding:0;margin:0;text-align:center">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modalAR" tabindex="-1" role="dialog" aria-labelledby="pxDetailLabel" aria-hidden="true" style="position:absolute;z-index:99999999999999999999999999">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content" STYLE="TEXT-ALIGN:CENTER">
										<div class="modal-header" id="arBody">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="closeNames"><img src="images/new_close.png" id="new_close"></button>
											<p class="modal-title" id="pxDetailLabel" style="color:orange;font-size:32px">INCOMING VIDEO CALL</p>
										</div>
										<div class="modal-body" id="accept_refuse">
											<input id="accept" class="btn btn-success" type="button" disabled="true" value="Accept Call"  style="font-size:24px"/>
											<input id="refuse" class="btn btn-danger" type="button" disabled="true" value="Refuse Call"  style="font-size:24px"/>
										</div>
									</div>
								</div>
							</div>
						</div>								
						<div class="modal fade" id="modalJMsg" tabindex="-1" role="dialog" aria-labelledby="msgHeader" aria-hidden="true" style="position:absolute;z-index:99999999999999999999999999">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div id="jh" class="modal-header" style="padding:2px">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img style="margin:10px;margin-top:20px" src="images/new_close.png"></button>
											<div class="modal-title" id="msgHeader" style="font-size:24px;margin:10px!Important"></div>
										</div>
										<div class="modal-body" id="msgBody" style="width:100%;height:100%;object-fit:cover;padding:10px;margin:0">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="modalInvite" tabindex="-1" role="dialog" aria-labelledby="modelInviteLabel" aria-hidden="true" style="font-family:Poiret One!Important;font-size:24px!Important;overflow:auto!Important">
							<div class="modal-dialog">
								<div class="modal-body">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="images/new_close.png"></button>
											<h4 class="modal-title" id="modelInviteLabel">Calling...</h4>
										</div>
										<div class="modal-body" id="inviteMethod" style="width:100%;height:100%;object-fit:cover;padding:0px;margin:0">
											<table style="font-family:Open Sans Condensed!Important">
												<tr class="www_box2">
													<td style="text-align:right">
														Email
													</td>
													<td>
														<div><input type="text" id="email" style="margin:10px;padding:5px;border-radius:4px;border:none;background:#ffffbf"></div>
													</td>
												</tr>
												<tr class="www_box2">
													<td style="text-align:right">
														Mobile
													</td>
													<td>
														<div><input type="text" id="mobile" style="margin:10px;padding:5px;border-radius:4px;border:none;background:#ffffbf"></div>
													</td>
												</tr>

												<tr class="www_box6 b1">
													<td style="width:100px">
														<div class="slideOne">  
														  <input type="checkbox" value="None" id="chkSMS" name="chkSMS" checked disabled />
														  <label for="chkSMS"></label>
														</div>
													</td>
													<td>
														Send SMS
													</td>
												</tr>
												<tr class="www_box6 b1" style="display:none">
													<td>
														<div class="slideOne">  
														  <input type="checkbox" onchange="setC(this)" value="None" id="chkSMSMsg" name="chkSMSMsg" />
														  <label for="chkSMSMsg"></label>
														</div>													</td>
													</td>
													<td>
														<div class="b1">Use personalized SMS Message (100 characters)</div>
														<div><textarea id="txtSMS" class="txtMsg"></textarea></div>
													</td>
												</tr>
												<tr class="www_box7 b1">
													<td style="width:100px">
														<div class="slideOne">  
														  <input type="checkbox" onchange="setC(this)" value="None" id="chkVoice" name="chkVoice" />
														  <label for="chkVoice"></label>
														</div>													</td>
													</td>
													<td>
														Make a voice call
													</td>
												</tr>
												<tr class="www_box7 b1" style="display:none">
													<td>
															<div class="slideOne">  
															  <input type="checkbox" onchange="setC(this)" value="None" id="chkVoiceMsg" name="chkVoiceMsg"/>
															  <label for="chkVoiceMsg"></label>
															</div>													</td>
													<td>
														<div>Use personalized voice message (500 characters)</div>
														<div><textarea id="txtVoice" class="txtMsg"></textarea></div>
													</td>
												</tr>
												<tr class="www_box9 b1" style="background:lightblue">
													<td>
														<div class="slideOne">  
														  <input type="checkbox" value="None" onchange="setC(this)"  id="chkEmail" name="chkEmail" />
														  <label for="chkEmail"></label>
														</div>													</td>
													<td>
														Send an Email
													</td>
												</tr>
												<tr class="www_box8 b1" style="display:none">
													<td style="width:100px">
															<div class="slideOne">  
															  <input type="checkbox" onchange="setC(this)" value="None" id="chkEmailMsg" name="chkEmailMsg" />
															  <label for="chkEmailMsg"></label>
															</div>
													<td>
														<div>Use personalized email message (2000 characters)</div>
														<div><textarea id="txtEmail" class="txtMsg"></textarea></div>
													</td>
												</tr>
												<tr class="www_box9 b1" STYLE="BACKGROUND:GOLD">
													<td style="width:100px">
															<div class="slideOne">  
															  <input type="checkbox" value="None" id="chkHunt" name="chkHunt"/>
															  <label for="chkHunt"></label>
															</div>
													</td>
													<td>
															HUNT MODE
  													</td>
												</tr>
												<tr>
													<td colspan=2 style="text-align:center;padding:5px;font-size:21px">
														<input type="button" value="Continue" onclick="go_next()" class="btn btn-warning">
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
		<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

        <script>
            'use strict';
			var arr=[ ]
			
			for(var i=0; i<10; i++) {
				arr.push(null)
			}			
			
			for(var i=0; i<10; i++) {
				arr.push(i.toString())
			}

			for(var i=97; i<123; i++) {
				arr.push(String.fromCharCode(i))
			}
			arr.push('-')
			arr.push('_')
			arr.push('.')
			arr.push('$')
			arr.push('*')
			arr.push('@')
			arr.push('!')
			arr.push('#')
			arr.push('%')
			arr.push('+')
			arr.push('&')
			arr.push('=')
			arr.push('?')

            var session = null,
                webRTCClient = null,
                connectedUsersList = [],
        //Accept-Refuse
                incomingCallId = 0;
			var num
			var login
			var to_call
			
			var to = '<?=$_GET[to];?>'
			if (!to) to = $('#patient_login').val()
//			if (!to) to = getCookie('invited_user')
		
			var login = '<?=$_GET[login];?>'
			if (login == '') login = getCookie('login')
				else login = '<?=$_GET[login];?>'

			setCookie('login', login)
			if (to) {
				document.getElementById('patient_login').value=to
				document.getElementById('encodedLogin').value=encode(to)
				to_call=encode(to)
			}
			
			function setStatus(tx) {
				$('#status').html(tx)
			}
			var cssText
//SELECT_MEDIA
            // camera select
            var audioSelect = document.querySelector("select#audioSource"),
            videoSelect = document.querySelector("select#videoSource");
            function selectMediaChange(){
                webRTCClient.setAudioSourceId(audioSelect.value);
                //Storing audioSourceId in localStorage
                localStorage.setItem("audioSourceId_" + apiRTC.session.apiCCId, audioSelect.value);
                webRTCClient.setVideoSourceId(videoSelect.value);
                //Storing videoSourceId in localStorage
                localStorage.setItem("videoSourceId_" + apiRTC.session.apiCCId, videoSelect.value);
            }
            audioSelect.onchange = selectMediaChange;
            videoSelect.onchange = selectMediaChange;
            function gotSources(sourceInfos) {
                var audioDeviceFound = false,
                    videoDeviceFound = false,
                    i = 0,
                    audioSourceIdInLocalStorage = localStorage.getItem('audioSourceId_' + apiRTC.session.apiCCId),
                    videoSourceIdInLocalStorage = localStorage.getItem('videoSourceId_' + apiRTC.session.apiCCId);
                if(sourceInfos !== null) {
                    for (i = 0; i != sourceInfos.length; ++i) {
                        var sourceInfo = sourceInfos[i];
                        var option = document.createElement("option");
                        option.value = sourceInfo.id || sourceInfo.deviceId;
//ENUMERATE
                        if (sourceInfo.kind === 'audio' || sourceInfo.kind === 'audioinput') {
//ENUMERATE
                            option.text = sourceInfo.label || 'microphone ' + (audioSelect.length);
                            audioSelect.appendChild(option);
//ENUMERATE
                        } else if (sourceInfo.kind === 'video' || sourceInfo.kind === 'videoinput') {
//ENUMERATE
                            option.text = sourceInfo.label || 'camera ' + (videoSelect.length);
                            videoSelect.appendChild(option);
                        } else {
                        }
                        if (sourceInfo.id === audioSourceIdInLocalStorage) {
                            audioDeviceFound = true;
                        }
                        if (sourceInfo.id === videoSourceIdInLocalStorage) {
                            videoDeviceFound = true;
                        }
                    }
                } else {
                }
                if (audioDeviceFound) {
                    audioSelect.value = audioSourceIdInLocalStorage;
                    webRTCClient.setAudioSourceId(audioSourceIdInLocalStorage);
                } else {
                    //removing audioSourceId from localStorage
                    localStorage.removeItem("audioSourceId_" + apiRTC.session.apiCCId);
                }
                if (videoDeviceFound) {
                    videoSelect.value = videoSourceIdInLocalStorage;
                    webRTCClient.setVideoSourceId(videoSourceIdInLocalStorage);
                } else {
                     //removing videoSourceId from localStorage
                    localStorage.removeItem("videoSourceId_" + + apiRTC.session.apiCCId);
                }
            }
			
//SELECT_MEDIA			
			function goFullScreen() {
				if (document.getElementById(remoteStreamID)) {
					var vid=document.getElementById(remoteStreamID)
					document.documentElement.appendChild(vid)
					$('#wrapper').hide()
					vid.style.cssText="position:absolute!Important;top:0!Important;left:0!Important;width:100%;object-fit:cover!Important;z-index:999999999999999999999!Important"	
				}
			}
			
			function jmsg(txt,jtype,txtTitle) {
				$('#status').hide()
				if (txt=="Call_Crossing_Detected") txt="<p>The person you called hung up on you.</p><p>Or the call was dropped (the latter being unlikely, but possible</p>)"
				if (txt=="Call_Crossing_Detected") return
				if (txt=="User_Media_Error") txt=""
				if (!txtTitle) {
					if (jtype=='err') txtTitle='Error'
						else txtTitle='Info'
				}
				txtTitle=txtTitle.toUpperCase()
				if (!txt) txt = 'No Message'
				if (!jtype) jtype = 'info'
				document.getElementById('jh').style.background='#00DAA2'
				if (jtype=='err') {
					document.getElementById('jh').style.background='red'
				} else if (jtype=='query') {
					document.getElementById('jh').style.background='gold'
				}
				$('#msgBody').html(txt)
				$('#msgHeader').html('<span><img style="width:40px;text-shadow:0 0 1px #fff" src="images/z_'+jtype+'.png"></span><span style="margin:10px;margin-top:25px">'+txtTitle+'</span>')
				$('#modalJMsg').modal('show')
			}
			function hide_invite() {
				$('#modalJMsg').modal('hide')
			}
			function invite_user() {
				$('#status').hide()
				to=document.getElementById('patient_login').value
				setCookie('invited_user', to)
				hide_invite()
				$('#modalInvite').modal('show');
				//sms(strINV,getCookie('mobile'),'https://werrx.com/rtcB.php?mobile=' + strINV10)
			}

			function invite_user_old() {
				$('#status').hide()
				var strINV=document.getElementById('patient_login').value
				strINV = strINV.replace(/\(/g, '');
				str = str.replace(/\)/g, '');
				str = str.replace(/-/g, '');
				str = str.replace(/\+/g, '');
				str = str.replace(/ /g, '');
				str = str.replace(/./g, '');
				if (strINV.length==10) {
					var strINV10=strINV
					if (strINV.substring(0,1) == '1') {
						jmsg('Invalid Mobile')
						return false
					} else if (strINV.substring(0,1) == '0') {
						jmsg('Invalid Mobile')
						return false
					} else {
						strINV = '1' + '' + strINV
					}
				} else {
					if (strINV.length==11) {
						if (strINV.substring(0,1) != '1') {
							jmsg('Invalid Mobile')
							return false
						} else {
							strINV10=strINV.substring(1,11)
						}
					} else {
						jmsg('Invalid Mobile')
						return false
					}
				}
				setCookie('invited_user',strINV10)
				document.getElementById('patient_login').value=strINV10
				to=document.getElementById('patient_login').value
				hide_invite()
				$('#modalInvite').modal('show');
				
				//sms(strINV,getCookie('mobile'),'https://werrx.com/rtcB.php?mobile=' + strINV10)
			}
			
			var sendSMSMsg
			var sendVoice
			var sendVoiceMsg
			var sendEmail
			var sendEmailMsg
			
			function setC(obj) {
				if ((obj.id=="chkVoiceMsg") && (obj.checked===true)) $('#txtVoice').show()
					else $('#txtVoice').hide()
				if ((obj.id=="chkSMSMsg") && (obj.checked===true)) $('#txtSMS').show()
					else $('#txtSMS').hide()
				if ((obj.id=="chkEmailMsg") && (obj.checked===true)) $('#txtEmail').show()
					else $('#txtEmail').hide()
			}
			
			function go_next() {
				var email=document.getElementById('email').value
				var str=document.getElementById('mobile').value
				str = str.replace(/\(/g, '');
				str = str.replace(/\)/g, '');
				str = str.replace(/-/g, '');
				str = str.replace(/\+/g, '');
				str = str.replace(/ /g, '');
				str = str.replace(/\./g, '');
				if (str.length==10) {
					if (str.substring(0,1) == '1') {
						jmsg('Invalid Mobile')
						return false
					} else if (str.substring(0,1) == '0') {
						jmsg('Invalid Mobile')
						return false
					} else {
						str = '1'+str
					}
				} else {
					if (str.length==11) {
						if (str.substring(0,1) != '1') {
							jmsg('Invalid Mobile')
							return false
						} else {
							str=str.substring(1,11)
						}
					} else {
						jmsg('Invalid Mobile')
						return false
					}
				}
				var mobile=str
				setCookie('mobile',str)

				if (!mobile && !email) {
					jmsg('Must enter at least one - mobile or email','err')
					if (!mobile) document.getElementById('mobile').style.border='2px solid red'
					if (!email) document.getElementById('email').style.border='2px solid red'
					return false
				}
				if (document.getElementById('chkSMSMsg').checked===true) sendSMSMsg=true
				if (document.getElementById('chkVoice').checked===true) sendVoice=true
				if (document.getElementById('chkVoiceMsg').checked===true) sendVoiceMsg=true
				if (document.getElementById('chkEmail').checked===true) sendEmail=true
				if (document.getElementById('chkEmailMsg').checked===true) sendEmailMsg=true
				
				if  (sendSMSMsg===true) 
					var smsMessage = $('#txtSMS').text()
				else 
					var smsMessage = 'INVITE'
				
				sms()
				
				if  (sendVoiceMsg===true) 
					var voiceMessage = $('#txtVoice').text()
				else 
					var voiceMessage = 'Hello, this a courtesy call to inform you that you have received a request to join a video call. In order to join please click the link sent to you via text message to your phone'
				if (sendVoice===true) {
					voice('1'+getCookie('invited_user'), getCookie('mobile'), voiceMessage)
				}
				if  (sendEmailMsg===true) 
					var emailMessage = $('#txtEmail').text()
				else 
					var emailMessage = "Hello, this a courtesy call to inform you that you have received a request to join a video call from "+getCookie('login')+". In order to join please click the link below \r\n\r\n" + "https://werrx.com/rtcB.php?login=" + getCookie('invited_user')+'&to='+encode(getCookie('login'))
				if (sendEmail===true) {
					email($('#user_email').val(), getCookie('mobile'), emailMessage)
				}
				$('#modalInvite').modal('hide');
				setTimeout('show_next()',1000)
			}
			
			function show_next() {
				$('#status').show()
				$('#status').html('Calling ...')
				$('#modalCalling').modal('show');
			}
			
            function selectPhonebookItem(idItem) {
                $("#patient_login").val(idItem);
                $("#enCodedLogin").val(encode(idItem));
				to_call=encode(idItem)
                $("#addressBookDropDown").toggle();
            }
			var mediaElt = null, divElement = null;
            //Function to add media stream in Div
            function addStreamInDiv(stream, callType, divId, mediaEltId, style, muted) {

				if (callType === 'audio') {
                    mediaElt = document.createElement("audio");
                } else {
                    mediaElt = document.createElement("video");
                }
                mediaElt.id = mediaEltId;
                mediaElt.autoplay = true;
                mediaElt.muted = muted;

                mediaElt.style.width = style.width;
                mediaElt.style.height = style.height;

                divElement = document.getElementById(divId);
                divElement.appendChild(mediaElt);

                webRTCClient.attachMediaStream(mediaElt, stream);
            }

            //Function to remove media stream element
            function removeElementFromDiv(divId, eltId) {

                var element = null,
                    divElement = null;

                element = document.getElementById(eltId);
                if (element !== null) {
                    divElement = document.getElementById(divId);
                    divElement.removeChild(element);
                }
				$('#modalRemote').modal('hide');
				$('#modalMini').modal('hide');						
            }

            function initMediaElementState(callId) {
                //function that remove media element on hangup

            //You can decide to manage your own stream display function or use the integrated one of ApiRTC
            /*
                removeElementFromDiv('mini', 'miniElt-' + callId)
                removeElementFromDiv('remote', 'remoteElt-' + callId)
            */
                webRTCClient.removeElementFromDiv('mini', 'miniElt-' + callId);
                webRTCClient.removeElementFromDiv('remote', 'remoteElt-' + callId);
				$('#modalRemote').modal('hide');
				$('#modalMini').modal('hide');						
            }
			
			var hangupButtons
			var simg
			
            function addHangupButton(callId) {
                var hangupButtons = document.getElementById("hangupButtons"),
                input = document.createElement("input");
                input.setAttribute("id", "hangup-" + callId);
                //input.setAttribute("value", "hangup-" + callId);
                input.setAttribute("type", "button");
                input.setAttribute("onclick", "webRTCClient.hangUp(" + callId + " );");
                hangupButtons.appendChild(input);
				input.style.cssText="position:absolute;left:0;right:0;margin:auto;bottom:5px;z-index:99999999999999999999999999;height:55px;width:55px;background:url(images/hangup.png);background-size:cover;border:none"
			}
			
            function removeHangupButton(callId) {
                var hangupButtonId = 'hangup-' + callId,
                    hangupButton = document.getElementById(hangupButtonId),
                    hangupButtons = null;

                if (hangupButton !== null) {
                    hangupButtons = document.getElementById("hangupButtons");
                    hangupButtons.removeChild(hangupButton);
                }
            }

            function userMediaErrorHandler(e) {
                $("#call").attr("disabled", false).val("Call");
                $("#hangup").attr("disabled", false).val("Hangup");
				
            }

            function hangupHandler(e) {
                if (e.detail.lastEstablishedCall === true) {
                    //$("#call").attr("disabled", false).val("Call");
                }
				$('#modalRemote').modal('hide');
				$('#modalMini').modal('hide');
                if (e.detail.reason=='User_Not_Found') {
					jmsg('Looks like the user isnt online.<br><br>Would you like us to track them down for you? If they are in any way connected to anyh device, we <i><b>will</b></i> find them. And let them know that you are waiting.<br><br>Just for you. So, whats it gonna be?<br><br><input type="button" style="font-size:18px" class="btn btn-info" value="Sure, track them!" onclick="invite_user()"> <input style="font-size:18px" type="button" class="btn btn-danger" value="Its OK, Ill Pass" onclick="hide_invite()">')
					//TO DO: Get all error codes and set user friendly messages for each
				} else {
					jmsg(e.detail.reason);
					initMediaElementState(e.detail.callId);
					removeHangupButton(e.detail.callId);
					$('#modalRemote').hide();
					$('#modalMini').hide();				
					$('.modal-backdrop.fade.in').hide()
					setTimeout('ref()',3000)
				}
            }

			function ref() {
				location.reload()	
			}
			
            function incomingCallHandler(e) {
                $("#tm").click()
				$('#arBody').html('INCOMING CALL FROM ' + decode(e.detail.callerId))
				$("#hangup").attr("disabled", false).val("Hangup");
                $("#accept").attr("disabled", false).val("Accept");
                $("#refuse").attr("disabled", false).val("Refuse");
                addHangupButton(e.detail.callId);
        //Accept-Refuse
                incomingCallId = e.detail.callId;
            }

            function userMediaSuccessHandler(e) {
				webRTCClient.addStreamInDiv(e.detail.stream, e.detail.callType, "mini", 'miniElt-' + e.detail.callId,
                {width : "128px", height : "96px"}, true);
            }
			
			var remoteStreamID
            function remoteStreamAddedHandler(e) {
				remoteStreamID='remoteElt-' + e.detail.callId
                webRTCClient.addStreamInDiv(e.detail.stream, e.detail.callType, "remote", 'remoteElt-' + e.detail.callId,
					{width : "100%", height : "100%"}, false);
				$('#mm').click()
			}
			var connected_x=false
            function updateAddressBook() {
                var length = connectedUsersList.length,
                    i = 0;

                //Cleaning addressBook list
                $("#addressBookDropDown").empty();

                for (i = 0; i < length; i += 1) {
					//Checking to see if the user signed in is the user we invited
					if (getCookie('invited_user')) {
						if (getCookie('invited_user')==decode(connectedUsersList[i].userId)) {
							//Call and connect to invited User
							$('#modalCalling').modal('hide') 
							if (to) {
								setTimeout('startCam()',5000)
							}
						}
					}
                    //Checking if connectedUser is not current user befire adding in addressBook list
                    if (connectedUsersList[i].userId !== apiRTC.session.apiCCId) {
                        if(connectedUsersList[i].group !== undefined) {
                            $("#addressBookDropDown").append('<a href="#" onclick="selectPhonebookItem(\'' + decode(connectedUsersList[i].userId) + '\')"><div class="www_box2" style="border-radius:0!Important;color:#000!Important;width:100%;padding-left:10px;height:35px"><span style="color:#000">' + connectedUsersList[i].userId + ' - ' + connectedUsersList[i].group + '</span></div></a>');
                        } else {
                            $("#addressBookDropDown").append('<a href="#" onclick="selectPhonebookItem(\'' + decode(connectedUsersList[i].userId) + '\')"><div class="www_box2" style="border-radius:0!Important;color:#000!Important;width:100%;padding-left:10px;height:35px"><span style="color:#000">' + decode(connectedUsersList[i].userId) + '</span></div></a>');
                        }
                    }
                }
            }

            function connectedUsersListUpdateHandler(e) {
               connectedUsersList = apiRTC.session.getConnectedUserIdsList();
                //Updating addressBook
                updateAddressBook();
            }
			var callId
			//sessionReadyHandler : apiRTC is now connected
            function sessionReadyHandler(e) {
			//	$('.modal-backdrop.fade.in').hide()
                apiRTC.addEventListener("userMediaSuccess", userMediaSuccessHandler);
                apiRTC.addEventListener("incomingCall", incomingCallHandler);
                apiRTC.addEventListener("userMediaError", userMediaErrorHandler);
                apiRTC.addEventListener("hangup", hangupHandler);
                apiRTC.addEventListener("remoteStreamAdded", remoteStreamAddedHandler);

            //connectedUsersList
                apiRTC.addEventListener("connectedUsersListUpdate", connectedUsersListUpdateHandler);
            //connectedUsersList

                //webRTC Client creation
                webRTCClient = apiRTC.session.createWebRTCClient({
                    status : "status" //Optionnal
                });
                webRTCClient.getMediaDevices(gotSources);

            //Multi calls Activation
                //webRTCClient.setAllowMultipleCalls(true);

            //Bandwitdh limitation
                webRTCClient.setVideoBandwidth(1200);

            //Accept-Refuse
                webRTCClient.setUserAcceptOnIncomingCall(true);
			//$('#modalAR').click()

            //Call establishment
			$("#callVideo").click(function () {
				//$("#hangup").attr("disabled", false).val("Hangup");
//			var to = '<?=$_GET[to];?>'
//			if (!to) to = $('#patient_login').val()
			to = '<?=$_GET[to];?>'
			if (!to) to = $('#patient_login').val()
//			if (!to) to = getCookie('invited_user')
					if (to) {
						callId = webRTCClient.call(encode(to));
						if (callId != null) {
							addHangupButton(callId);
						} else {
							jmsg($('#status').text().split(':')[0],'err')
						}
					} else {
						jmsg('Must enter a valid Login or Email','err')
						return false
					}
                });

            //Global hangup management : all established client calls will be hangup
                $("#hangup").click(function () {
                    //$("#call").attr("disabled", false).val("Call");
                    webRTCClient.hangUp();
                });

            //Accept-Refuse
                $("#accept").click(function () {
					$('#new_close').click()
					$('#modalAR').hide()
                    $("#accept").attr("disabled", true).val("Accept");
                    $("#refuse").attr("disabled", true).val("Refuse");
                    webRTCClient.acceptCall(incomingCallId);
					setTimeout('startView()',3000)
                });

                $("#refuse").click(function () {
                    $('#new_close').click()
					$('#modalAR').hide()
					$("#accept").attr("disabled", true).val("`");
                    $("#refuse").attr("disabled", true).val("Refuse");
                    $("#hangup").attr("disabled", true).val("Hangup");
                    webRTCClient.refuseCall(incomingCallId);
                    initMediaElementState(incomingCallId);
                    removeHangupButton(incomingCallId);
                });
//				setTimeout('set_status1()',2500)
//				jmsg('Status....','err')
				$('#status').html('Connected as : '+ decode(e.detail.apiCCId))

            }

            $("#addressBook").on('click', function() {
                $("#addressBookDropDown").toggle();
            });
//			if (!login) login=getCookie('login')
			if (login) {
				login=encode(login)
				//apiRTC initialization
				apiRTC.init({
					apiKey : "werrx",
					apiCCId : login,
					onReady : sessionReadyHandler
				});
			} else {
				alert('Must Login')
			}


	function hangup_now() {
		webRTCClient.hangUp();
	}
	
	function startView() {
		$('#modalRemote').modal('show')	
		//$('#mm').click()	
	}
	function startCam() {
		$('#callVideo').click()	
	}

	function encode(str){
		var nums = '';
		for(var i=0; i<str.length; i++) {
			nums += arr.indexOf(str[i]).toString().trim()
		}
		return nums
	}

	function decode(um){
		var st=um.split('|')
		console.log(um)
		var strOut = '';
		for(var i=0; i<um.length; i+=2){
			console.log(i + ': ' + um.substring(i,i+2)*1)
			var s=(um.substring(i,i+2)*1);
			strOut += arr[s*1]
		}
		return strOut;
	}	

	var wl = window.location.href;
	var mob = (window.location.href.indexOf('file://')>=0);

	function setCookie(cname,cvalue)	{
		if (mob===true) {
			window.localStorage.setItem(cname, cvalue);
		} else {
			var d = new Date(); 
			d.setTime(d.getTime()+(1*24*60*60*1000)); 
			var expires = "expires="+d.toGMTString(); 
			document.cookie = cname + "=" + cvalue + "; " + expires; 
		}
	} 

	function getCookie(cname)	{ 
		if (mob===true) {
			var cvalue = window.localStorage.getItem(cname);
			return cvalue
		} else {
			var name = cname + "="; 
			var ca = document.cookie.split(';'); 
			for(var i=0; i<ca.length; i++) { 
			  var c = ca[i].trim(); 
			  if (c.indexOf(name)==0) return c.substring(name.length,c.length); 
			} 
			return ""; 
		}
	} 

	function delCookie(cname) {
		if (mob===true) {
			window.localStorage.removeItem(cname);
		} else {
			var d = new Date();
			d.setTime(d.getTime());
			var expires = "expires="+d.toGMTString();
			document.cookie = cname + "=" + "" + "; " + expires;
		}
	}	
</script>
	<script type="text/javascript" src="js/functions.js"></script>
<script>
	var fn=['Active Ingredient','Brand Name','Generic Name','Substance Name','Diagnosis','Symptoms']
	var tn=['active','brand','generic','substance','diagnosis','symptoms']
	var bx=['www_box2','www_box5','www_box6','www_box7','www_box8','www_box9']
	var a=0
	var old_cs=fn[a]
	var old_st=tn[a]
	var cs
	var st
	var pad=[ ]
	var val=[ ]
	var padUnit=[ ]
	var str1=''
	var tab
		
	function zzBox() {
		old_cs=fn[a]
		old_st=tn[a]
		if (a==5) a=0
			else a++
		st=tn[a]
		cs=fn[a]
		document.getElementById(old_st).id=st
		document.getElementById(st).className='form-control'
		$('#yfc').text(cs)
	}
	function del(ob) {
		var px=pad.indexOf(ob)
		pad.splice(px,1)
		padUnit.splice(px,1)
		val.splice(px,1)
		refreshPad()
	}
	
	function guid() {
	  function s4() {
		return Math.floor((1 + Math.random()) * 0x10000)
		  .toString(16)
		  .substring(1);
	  }
	  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
		s4() + '-' + s4() + s4() + s4();
	}

	function swap(obj) {
		if (document.getElementById('c'+obj).style.height=='1px') {
			document.getElementById('c'+obj).style.height='50px'
			document.getElementById('t'+obj).style.display='block'
		} else {
			document.getElementById('c'+obj).style.height='1px'
			document.getElementById('t'+obj).style.display='none'
		}
	}

	var cP=[ ]
	var t1

	var t2
	function _getMobile() {
		clearTimeout(t2)
		t2=setTimeout('getMobile()', 1000)
	}
	
	function getMobile() {
		var nid='patient_login'
		var g;
		var ntr='';
		var str='';
		if (document.getElementById(nid).value.length<10) return false
		str+='<table style="width:100%;padding:10px">'
		$.ajax({
			url:'x_ac_names.php?q='+document.getElementById(nid).value+'&type=mobile',
			success: function(msg){
				var data=JSON.parse(msg.trim())
				for (g=0;g<data.length;g++) {
					ntr = data[g].label.split('|')
					var valx=data[g].value
					var pn = ntr[0]
					var pm = ntr[1]

				}
			}
		})
	}

	function window_height() {
		if (document.body) {
		 winH = document.body.offsetHeight;
		}

		if (document.compatMode=='CSS1Compat' &&
			document.documentElement &&
			document.documentElement.offsetHeight ) {
			winH = document.documentElement.offsetHeight;
			return winH
		}

		if (window.innerHeight && window.innerHeight) {
			 winH = window.innerHeight;
			 return winH;
		}
	}		
		
	function window_width() {
		if (document.body) {
		 winW = document.body.offsetWidth;
		}

		if (document.compatMode=='CSS1Compat' &&
			document.documentElement &&
			document.documentElement.offsetWidth ) {
			winW = document.documentElement.offsetWidth;
			return winW
		}

		if (window.innerWidth && window.innerWidth) {
			 winW = window.innerWidth;
			 return winW;
		}
	}		
			
		 // document.getElementById('bb').style.width='<?=$tw;?>'
		 // document.getElementById('bb').style.marginLeft='<?=$ml;?>'
	
	function voice(to,from,txt) {
		if (!cnf) var cnf='SMS Sent'
		var url = 'https://sugardaddydays.com/voice/call.php?to=' + to + '&from=' + from + '&message=' +  txt + '&message_type=INDEX_NOTIFY_CODE'
		var request = $.ajax({
			url: url, 
			type: "GET",
			dataType: "jsonp",
			cache: false,
			success: function(msg) {
			}
		})
	}	

	function sms() {
		var url = 'https://werrx.com/voice/send_sms.php?to=' + getCookie('mobile') + '&from=' + getCookie('login') + '&to_login=' +  getCookie('invited_user') + '&message_type=INVITE'
		console.log(url)
		var request = $.ajax({
			url: url, 
			type: "GET",
			dataType: "jsonp",
			cache: false,
			success: function(msg) {
			}
		})
	}	

	function isNumber(n) {
	  return !isNaN(parseFloat(n)) && isFinite(n);
	}

	function show_error_reg(f,i) { 
		if (document.getElementById(f.id + '_updated')) {
			document.getElementById(f.id + '_updated').style.display='block'
			document.getElementById(f.id + '_updated_img').src='assets/images/e3.png'
		}
		var r = f.id + '_err'
		var e = '<i class="fa fa-bomb"></i> No Blanks!'
		var t = r + '_txt'
		if(!i) i = 'Invalid Entry! Please re-enter'
		x_validate = false
		r = document.getElementById(r)
		t = document.getElementById(t)
		validate = false
		f.style.background = 'lavenderblush'
		t.style.color='silver'
		var obj = f.id
		if (f.value.length == 0) t.innerHTML = e
			else t.innerHTML = i
		t.innerHTML += '<br>'
	}
	
	function jwait(objTxt) {
		objT.innerHTML=objTxt
		jModalWn.appendChild(objWait)
		jModalWn.appendChild(objT)
		jModalWn.style.display='block'
	}

	function jhide() {
		document.getElementById('jModalWn').style.display=='none'
		jModalWn.style.display='none'
		objW.style.display='none'
		objT.style.display='none'
	}
	
 function fixHT() {
	document.getElementById('wrapper').style.height=window_height()+'px'
 }
 
</script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( document ).tooltip({
      track: true
    });
  } );
  </script></body>
</html>