<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= $title ?></title>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />  
<meta content='width=device-width, user-scalable=no' name='viewport'/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!--bootstrap-->
<link href="css/bootstrap4.min.css" rel="stylesheet" type="text/css">
<!--font-awsome-css-->
<link rel="stylesheet" href="css/font-awesome.min.css">

<style>
  html { font-size: 1rem; }

  body {
    background-color: #cfedfc !important;
    background-image: url("images/bg.jpg");
    background-size: cover;
    background-position: center center;
  }

  a:hover{
    text-decoration: none !important;
  }


  .button-rnd {
    min-width: 300px !important;
    max-width: 300px !important;
    border-radius: 14px 14px;
  }
  .button-rnd:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .btn-faq{
    min-width:90px !important;
    font-size:10px;
    border-radius: 7px 7px;padding:2px !important;
  }

  .container2{

    margin:auto;
  /*  background: rgba(255, 255, 255, 0.8); */
    z-index:-99999;
  }

  .footer {
    font-size:90%;
    color:#748c8a;
  }


  .footer .fa{
    text-align:center;
    width:20px;
  }
  .footer .fa-bell-slash{

    font-size:90%;
  }
  
  .temp-hidden {

  }
  .hidden {
      display: none !important;
      visibility: hidden;
  }
  .btn-block{
    max-width:500px;
    margin:auto;
  }
  .paused{
    color:#354443;
  }


  /* Important part */
  .modal {
    z-index:99999;
  }
  .modal-dialog{
      overflow-y: initial !important
  }
  .modal-body{
      height: 250px;
      overflow-y: auto;
  }

  #policy h6 {
    text-transform: uppercase;
  }
  #policy p{
    text-align: justify;
  }


  #connect_how ol{
    font-weight: bold;
  }
  #connect_how ol li ul{
    margin-left:-25px;
    font-weight: normal;
  }
  #connect_how ol .normal-font ul{
    margin-left:-25px;
    font-weight: normal;
    font-size:80%;
  }

  .button-animate {

    -webkit-animation: glowing 1500ms infinite;
    -moz-animation: glowing 1500ms infinite;
    -o-animation: glowing 1500ms infinite;
    animation: glowing 1500ms infinite;
  }
  @-webkit-keyframes glowing {
    0% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
    50% {border-color: #449d44; box-shadow: 0 0 40px #4cae4c; background-color: #449d44; }
    100% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
  }

  @-moz-keyframes glowing {
    0% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
    50% {border-color: #449d44; box-shadow: 0 0 40px #4cae4c; background-color: #449d44; }
    100% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
  }

  @-o-keyframes glowing {
    0% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
    50% {border-color: #449d44; box-shadow: 0 0 40px #4cae4c; background-color: #449d44; }
    100% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
  }

  @keyframes glowing {
    0% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
    50% {border-color: #449d44; box-shadow: 0 0 40px #4cae4c; background-color: #449d44; }
    100% {border-color: #4cae4c; box-shadow: 0 0 3px #b7deb7; background-color: #4cae4c;}
  }

  
  .pause-button:hover{
    color:#4CAE4C;
    cursor:pointer;
    content: "\f023" !important;
  }

  .blink {
    animation: blinker 1500ms linear infinite;
  }

  @keyframes blinker {
    50% {
      opacity: 0.2;
    }
  }
  .button-animate-red {

    -webkit-animation: glowingRed 1500ms infinite;
    -moz-animation: glowingRed 1500ms infinite;
    -o-animation: glowingRed 1500ms infinite;
    animation: glowingRed 1500ms infinite;
  }
  @-webkit-keyframes glowingRed {
    0% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
    50% {border-color: #d9534f; box-shadow: 0 0 40px #dc6460; background-color: #d9534f; }
    100% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
  }

  @-moz-keyframes glowingRed {
    0% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
    50% {border-color: #d9534f; box-shadow: 0 0 40px #dc6460; background-color: #d9534f; }
    100% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
  }

  @-o-keyframes glowingRed {
    0% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
    50% {border-color: #d9534f; box-shadow: 0 0 40px #dc6460; background-color: #d9534f; }
    100% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
  }

  @keyframes glowingRed {
    0% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
    50% {border-color: #d9534f; box-shadow: 0 0 40px #dc6460; background-color: #d9534f; }
    100% {border-color: #dc6460; box-shadow: 0 0 3px #efbab8; background-color: #dc6460;}
  }

  @keyframes animatedBackground {
    0% {
      background-position: 0 0;
    }
    50% {
      background-position: 0 100%; 
    }
    100% {
      background-position: 0 0; 
    }
  }
  .animate-area   {
      margin-top: 20px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      padding-bottom:10px;
      padding-top:10px;
      margin-bottom: 20px;
      background-image: url("images/banner-scroll1.jpg");
      background-size: cover;                      /* <------ */
      background-position: center center;              /* optional, center the image */
      background-repeat: repeat-y;
      animation: animatedBackground 40s linear infinite;
  }
  .animate-area  img { max-height:inherit;}

  #rtime, #ptime {
    text-transform: uppercase;
    font-size:80% !important;
    font-weight: normal;
  }
  #rtime b, #ptime b{
    font-weight: bold;
    font-size:200% !important;

  }


  @media (max-width: 375px) {
      .animate-area  img { max-height:100px;}
  }
  @media (min-width: 375px) {
      html { font-size: 1rem; }
  }
  @media (min-width: 576px) {
      html { font-size: 1rem; }
      animate-area  img { max-height:10px;}

  }
  @media (min-width: 768px) {
      html { font-size: 1rem; }
      
  }
  @media (min-width: 992px) {
      html { font-size: 1rem; }
      
      
  @media (min-width: 1400px) {
      html { font-size: 1.15rem; }
     
  }
  @media (min-width: 2000px) {
      html { font-size: 1.75rem; }
  }

  
</style>
<!--// NOTE WAG E REMOVE -->
<script src="js/apps.min.js"></script>  
<script src="js/jquery.min.js"></script>
<!--// end NOTE WAG E REMOVE -->

<!--// additional scripts -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap4.min.js"></script>



</head>
<body class='login'>

<div class="container text-center">

<div style="margin:0;padding:0;display:inline"></div>

<div class="animate-area">
  <img class="img-fluid temp-hidden" src="images/logo-small.png" /> <!--  Banner Logo.png-->
</div>




<div class="row">
  <div class="col-md-12 h2 conn_status hidden">
    <?=  $status_html ?><br>
  </div>
  <div class="col-md-12 h2 conn_status2">
    <?=  $status_html ?><br>
  </div>
</div>

<div id="default_container">

<div class="row" style="margin-bottom:10px;">

  <div class="col-md-12">
    <small style="color:#748c8a;text-transform: uppercase;"><?= ($pausedTime) ? '<small>CLICK RESUME TIME BUTTON TO CONTINUE SURFING</small>' : 'Remaining Time:'  ?></small>
  </div>
  <div class="col-md-12">
   <?= ($pausedTime) ? '<h2 id="ptime" class="paused">-- </h2>' : '<h2 id="rtime" class="text-primary">--</h2>'?>
  </div>
  

</div>

<div class="temp-hidden">
<div class="row" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a id="link" href="<?= $connectlink ?>"><button type="button" id="insert_coin_button" class="btn btn-success button-rnd btn-spinner">Insert Coin</button></a>
  </div>
</div>

<div class="row <?= ($remainingTime > 0) && (!$pausedTime) ? '' : 'hidden' ?>" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a class="btn-pause" href="<?= $pausesessionlink ?>"><button type="button" class="btn btn-danger button-rnd btn-spinner">Pause Time</button> </a>
  </div>
</div>

<div class="row <?= (!$pausedTime) ? 'hidden' : '' ?>" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a class="btn-resume" href="<?= $resumesessionlink ?>"><button type="button" class="btn btn-danger button-rnd button-animate-red btn-spinner">Resume Time</button></a>
  </div>
</div>

<div class="row" style="margin-bottom:10px;">
  <div class="col-md-12">
    <button type="button" class="btn btn-primary button-rnd" data-toggle="modal" data-target="#popup">View Rates</button>
  </div>
</div>

<div class="col-md-12 push-reminder hidden">
 <small><a href="#" data-toggle="modal" data-target="#notifier"><i class="fa fa-bell"></i> Notify me of my remaining time!</a></small>
</div>
<hr>

<div class="btn-block">
  <form name="frmvoucher" id="frmvoucher" action="<?=  $encoder ?>" method="post">
    <input type="hidden" name="hashcode01" id="hashcode01" value="<?= $hashcode01; ?>">
    <small id="errormsg" class="form-text text-danger"><?= ($errorsession) ? $errormsg : '' ?></small>
    <div class="input-group mb-3">

      <input type="text" class="form-control" name="vcode" id="vcode" value="" aria-describedby="errormsg" placeholder="Enter Voucher here...">
      <div class="input-group-append">
        <button name="submit" type="submit" id="btn-vcode" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<div class="row <?= ($remainingTime > 0) && (!$pausedTime) ? 'hidden' : '' ?>" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a id="link" href="<?= $buyvoucherlink ?>"><button type="button" class="btn btn-success button-rnd btn-spinner">Buy Voucher</button></a>
  </div>
</div>
<div class="row ">
  <div class="col-md-12">
    <?=  ($remainingTime > 0) ? '<a href="'.$session2voucher.'"><button type="button" class="btn btn-primary button-rnd btn-spinner">Convert Time to Voucher</button> </a>' : '' ?>  
  </div>
</div>
<hr>
</div>

<!-- //LIST VOUCHER -->
<?=   vouchersList($link, $ip, $mac);  ?>
 <!-- //END LIST NG VOUCHER-->
</div><!-- //END DEFAULT CONTAINER -->


<!-- Modal -->
<div id="popup" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">WiFi Rates</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
        
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered table-sm">
              <tr class="thead-dark">
                <th>Coin Type
                </th>
                <th>Time
                </th>
              </tr>
            
            
              <tr>
                <td>1</td>
                <td>
                  <span class="totalMin1 hidden"><?=  $piso ?></span>
                  <span class="convertedHour1">0</span>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  <span class="totalMin2 hidden"><?=  $lima ?></span>
                  <span class="convertedHour2">0</span>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>
                  <span class="totalMin3 hidden"><?=  $pulo ?></span>
                  <span class="convertedHour3">0</span>
                </td>
              </tr>
              
          </table>
      </div>

    </div>

  </div>
</div>


<!-- START Policy Modal -->
<div id="policy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms of Service</h5>      
      </div>
      <div class="modal-body text-left" style="font-size:80%">

          

        <h6>Summary</h6>

        <ul>
          <li>Read this <b><a href="#connect_how">How do I connect to PisoWiFi Vending Machine?</a></b></li>
          <li>We don’t collect any of your personal info, except your device’s <b>MAC address</b> and <b>basic information.</b></li>
          <li>We don’t collect and sell your personal info to advertisers or other third parties.</li>
        </ul>

        <p><i>PMPW Tech may revise the Terms of Use at any time. <u>You must accept this Agreement each time you use the PMPW Tech Vending Machine</u> and it is your responsibility to review it for any changes each time.</i></p>

        <h6>Restrictions</h6>
        <p>The use of the Service for the following activities is prohibited:</p>
        <p>Spamming and Invasion of Privacy of Others, Violating Intellectual Property Law, Transmitting Obscene or Indecent Speech or Materials, Transmitting Defamatory or Abusive Language, Hacking or Distribution of Internet Viruses, Worms, Trojan Horses, or Other Destructive Activities.</p>

        <h6>Terms of Use</h6>
        <p>You are about to access the Internet through a coin operated wireless (WiFi) Internet access node (the "Service") operated by PMPW Tech.  The purpose of the Service is to provide wireless Internet access to customers of the PisoWiFi Vending Machine.  You may use the Service only if you agree to the following terms of service each time you access the Service.</p>

        <h6>Access to WiFi</h6>
        <p>The Service is to provide wireless internet access through the PisoWiFi Vending Machine. Your access to the Service is completely at the discretion of PMPW Tech, and your access to the Service may be blocked, suspended, or terminated at any time for any reason including, but not limited to, violation of this Agreement, actions that may lead to liability for PMPW Tech, disruption of access to other users or networks, violation of applicable laws or regulations, attempt of accessing the ****, intentional damage of the machine, or use of applications that bypasses the Service functionality.</p>
         
        <h6>Monitoring and Collection of Data</h6>
        <p>The PisoWiFi Vending Machine collects information to authenticate you as a valid customer that authorized you to access our Service. Once authenticated on the PisoWiFi Vending Machine, your information will be stored locally to allow you to auto-connect to the PisoWiFi Vending Machine, properly credit the inserted coins, and monitor your consumed time without having to authenticate each time you access the Service. Periodically you will be required to re-authenticate. The PisoWiFi Vending Machine store IP addresses assigned to you locally and the MAC address of your device accessing the PisoWiFi Vending Machine, as well as usage data associated with the MAC addresses of each device. We may also monitor the traffic for network management and security purposes, such as identifying malware, bandwidth consumption, location of the access points, total amount of coins inserted, session start and end time, types of protocols and applications used, and illegal content as stated above. You acknowledge and agree that the PisoWiFi Vending Machine has the right to automatically monitor your use of the WiFi Service to operate the PisoWiFi Vending Machine properly, to protect itself or its subscribers, to enhance or develop PMPW Tech services offered to you.</p>

        <p>We don’t collect any of your device’s files, photos, contacts, camera, browsing history,personal info, applications, softwares, and the like. Moreover, we don’t sell your personal info to advertisers or other third parties.</p>

        <h6>Acceptable Use of the Service</h6>
        <p>Your use of the Service and any activities conducted online through the Service shall not violate any applicable law or regulation or the rights of PMPW Tech, or any third party. PMPW Tech cannot accept any responsibility for any injury or loss that results from inaccurate, unsuitable, offensive, or illegal Internet communications and activities.</p>
        <hr>
        <div id="connect_how">
          <h6>How to Connect To PisoWiFi</h6>
          <p align="center"><img class="img-fluid" src="images/instructions.jpg" alt="Connect to PMPW Vending Machine" /></p>
          <ol class="h6">

            <li class="normal-font">CONNECT
              <ul>
                <li>Connect to PMPW - PisoWiFi</li>
                <li>Wait for the captive web portal (website) to pop-up.</li>
                <li><i>If for 15 seconds there is no pop-up, open your browser (<small>we recommend using <i class="fa fa-chrome"></i> Google Chrome or <i class="fa fa-firefox"></i> Firefox</small>)</i>.</li>
                <li>In the address bar type <b>pete.wifi</b> or <b>192.168.25.1</b></li>
              </ul>
            </li>

            <li class="normal-font">INSERT COINS
              <ul>
                <li>Before inserting coins, click the <button type="button" class="btn btn-success btn-sm btn-faq">Insert Coin</button> button.</li>
                <li>Wait for the LED to turn red and Insert Coin instruction page to appear</li>
                <li>You may now insert ₱1, ₱5, and ₱10 coins. Can accept <u>old and new coins</u>.</li>
                <li><i>Please do not insert fast to avoid discredit of coin amount.</i></li>
              </ul>
            </li>

            <li class="normal-font">START INTERNET
              <ul>
                <li>After inserting the desired amount. Click the <button type="button" class="btn btn-success btn-sm btn-faq">Start Internet</button> button.</li>
                <li>To check your time you may open your browser (<small>we recommend using <i class="fa fa-chrome"></i> Google Chrome or <i class="fa fa-firefox"></i> Firefox</small>)</i>.</li>
                <li>In the address bar type <b>pete.wifi</b> or <b>192.168.25.1</b></li>
              </ul>
            </li>

          </ol>
          <br>
          <h6>FREQUENTLY ASKED QUESTIONS</h6>
          <ol>

            <li><b>Why do you recommend using <i class="fa fa-chrome"></i> Google Chrome or <i class="fa fa-firefox"></i> Firefox?</b>
              <ul>
                <li>This is to enable you to receive remaining time notifications, announcements, and promos. To know more about the notifier click <a href="#" data-toggle="modal" data-target="#notifier"> FAQ - Time Notifier</a></li>
              </ul>
            </li>

            <li><b>Does it mean I can't use my own browser?</b>
              <ul>
                <li>You can still use your own browser but may not support our notification system. Thus, you will not be notified of your remaining time.</li>
              </ul>
            </li>

            <li><b>I inserted coins but was rejected?</b>
              <ul>
                <li>Check if the coins is damage or hard to recognize.</li>
                <li>You forgot to click the <button type="button" class="btn btn-success btn-sm btn-faq">Insert Coin</button> button.</li>
                <li>Wait for 30 seconds, the machine might still be booting.</li>
              </ul>
            </li>

            <li><b>The inserted coins was accepted but was not credited?</b>
              <ul>
                <li>You inserted the coins quickly. Please wait at least 1 second before inserting the next coin.</li>
                <li>Before pressing the <button type="button" class="btn btn-success btn-sm btn-faq">Start Internet</button> button, please check if the amount was displayed on the page itself. </li>
              </ul>
            </li>

            <li><b>When I click the Insert Coin button, the Insert Coin instruction page did not appear. Why?</b>
              <ul>
                <li>There might be still other customers who pressed the Insert Coin Button on their own device. Wait for at least 30 seconds. <small>Our vending machine can detect if other user has still pending "Insert Coin" session.</small></li>
                <li>Try to refresh the page.</li>
              </ul>
            </li>

            <li><b>Can I pause my time?</b>
              <ul>
                <li>Yes you can pause your own time. Please click the <button type="button" class="btn btn-danger btn-sm btn-faq">Pause Time</button> button before disconnecting the WiFI.</li>
                <li>When there is no internet connection, please pause your time.</li>
              </ul>
            </li>

            <li><b>I paused my time, how do I connect again?</b>
              <ul>
                <li>Please click the <button type="button" class="btn btn-danger btn-sm btn-faq">Resume Time</button> button to continue.</li>
              </ul>
            </li>

            <li><b>What is a Voucher?</b>
              <ul>
                <li>You can purchase a voucher so that you can use it later. This is useful so that you don't have to go physically in the vending machine every time. To avail this, click the <button type="button" class="btn btn-success btn-sm btn-faq">Buy Voucher</button> button.</li>
                <li>During promos we may send you a voucher code. Please type in the voucher code text box and click submit.</li>
              </ul>
            </li>


          </ol>
        </div>
   
      </div>
      <div class="modal-footer">
        <button id="policy_agree" type="button" class="btn btn-success" data-dismiss="modal">I Agree</button> 
        <button id="policy_disagree" type="button" class="btn btn-danger" data-dismiss="modal">I don't Agree</button>
      </div>
    </div>

  </div>


</div>
<!-- END Policy Modal -->

<!-- START FAQ - Time Notifier -->
<div id="notifier" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FAQ - Time Notifier (AVAILABLE SOON)</h5>
        
        
      </div>
      <div class="modal-body text-left" style="font-size:80%">
        <div class="alert alert-info isPush-true hidden"></div>
        <div class="alert alert-danger isPush-false hidden"></div>
        
        <h6>I want to be notified, how?</h6>
        <p>The time notifier is not automatic. When you first connect to the Vending Machine's router you will be prompted in the Captive Web Portal. CWP may not support notifcations. <b>You have to manually enable the notifications.</b></p>


        <h6>How do I enable notifications?</h6>
        <p>You may open your browser (please see below the list of browsers supported). In the address bar type <b>192.168.25.1</b>, Multiple alerts will appear, just click Allow.</p>
        <p align="center"><img src="images/allow_notification.jpg" class="img-fluid"></p>
        <p><i>Please note when you subscribed, you will receive remaining time notifications, announcements, promos, and the likes.</i></p>

        <h6>When will I be notified with my remaining time?</h6>
        <p>You will be notified when your time is 3 minutes before your time ends.</p>

        <h6>I wasn't notified with my remaining time, why?</h6>
        <p>Please check the following reasons:</p>
        <ul>
          <li><u>Browsers on iOS</u> do NOT support Web Push.</li>
          <li>You are offline. You don't have an internet connection.</li>
          <li>You haven't click the subscribed button shown on the lower right of the page.</li>
          <li>Incognito / Private Browsing mode isn't supported in browsers.</li>
          <li>Please check if your browser is supported.</li>
          
        </ul>
        <p align="center"><img src="images/browser_support.jpg" class="img-fluid"></p>
        <h6>I don't want to receive notifications anymore?</h6>
        <p>On the lower right of the page, click <img src="images/bell.jpg" class="img-fluid"> to unsubscribed.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Okay</button>   
      </div>
    </div>

  </div>


</div>
<!-- END FAQ - Time Notifier -->

<div id="info_disagree" class="hidden text-center" style="max-width:500px;margin:auto">
<h4 class="text-danger">You have to agree with our Terms of Service to have an internet access.</h4>
<h6 class="text-info">Please contact the owner if you have special concerns.</h6>
<br>
<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn btn-info button-rnd policy_view" data-toggle="modal" data-target="#policy">Click Here to View Terms of Service</button>
  </div>
</div>
<br><br>
</div>
<footer class="footer" style="margin:auto;max-width: 500px;position: relative;">
  Powered By: <a href="http://www.pmpw.tech" target="_blank" >PMPW Tech</a>
    
      <div class="text-left" style="font-size:80%;">
        <div class="row">
          <div class="col-xs-6 footer-desc" style="width:50%">
            <i class="fa fa-file-o"></i> <a class="policy_view" href="#" data-toggle="modal" data-target="#policy">Terms of Service</a><br>
            <i class="fa fa-bell"></i><a href="#" data-toggle="modal" data-target="#notifier"> FAQ - Time Notifier</a><br>
            <i class="fa fa-facebook-f"></i> <a href="http://facebook.com/pmpw.tech" target="_blank">facebook.com/pmpw.tech</a><br>
            
          </div>

          <div class="col-xs-6 footer-desc" style="width:50%">
            <i class="fa fa-phone-square"></i> 0995 282 6560<br>
            <i class="fa fa-at"></i> pmpw.tech@gmail.com<br>
            <i class="fa fa-map-marker"></i> Cebu City, Cebu<br>
            
          </div>
        </div>
     
      
      </div>

  </footer>
</div><!-- End Container -->

<script>
$(document).ready(function() {

  var status_style_connected  = "<span class='text-success'><i class='fa fa-wifi'></i>  Connected</span>";
  var status_style_notime = "<img width=45 src='images/disabled2.png' style='margin-top:-3px;'><span class='text-danger'> Disconnected</span>";
  var status_style_pause = "<span class='text paused'><i class='fa fa-pause blink pause-button'></i>  <span class=''>Time Pause</span></span>";

  $(".conn_status").hide();
  $('.btn-blocks').addClass('disabled');
  if($.trim($(".conn_status").text().toLowerCase()) == "no-time"){

    //show policy modal if not registered
    $('#policy').modal({
      backdrop: 'static',
      keyboard: false,
      show: true
    });

    //change button text for insert coin
    $('#insert_coin_button').text("Insert Coin");
    $('#insert_coin_button').addClass("button-animate");

    $(".conn_status2").html(status_style_notime);

  }
  else if($.trim($(".conn_status").text().toLowerCase()) == "connected"){
    $(".conn_status2").html(status_style_connected);
    $('#insert_coin_button').text("Insert Additional Coins");
  }
  else if($.trim($(".conn_status").text().toLowerCase()) == "paused"){
    $(".conn_status2").html(status_style_pause);
    $('#insert_coin_button').text("Insert Additional Coins");
  }
  else {
    $('#insert_coin_button').text("Insert Coin");
    $('#insert_coin_button').removeClass("button-animate");
    $(".conn_status2").html($.trim($(".conn_status").text()));
  }


  $('#policy_agree').on('click', function(e) {
    e.preventDefault();
    $('.btn-blocks').removeClass('disabled');
    $('#info_disagree').addClass('hidden');
    $('#default_container').removeClass('hidden');
  });

  $('#policy_disagree').on('click', function(e) {
    e.preventDefault();
    $('.btn-blocks').addClass('disabled');
    $('#default_container').addClass('hidden');
    $('#info_disagree').removeClass('hidden');
  });

  $('.policy_view').on('click', function(e) {
    e.preventDefault();
    $('.btn-blocks').addClass('disabled');
    $('#info_disagree').addClass('hidden');
    $('#default_container').removeClass('hidden');
  });

  $('.convertedHour1').html(timeConvert( $('.totalMin1').html()));
  $('.convertedHour2').html(timeConvert( $('.totalMin2').html()));
  $('.convertedHour3').html(timeConvert( $('.totalMin3').html()));


  // add spinner and disable button when click
  $(".btn-spinner").on('click', function(e) {
    //e.preventDefault();
    $(".btn-spinner").attr("disabled", "disabled");
    //$(".btn-no-spinner").attr("disabled", false);
    $(this).prepend('<i class="fa fa-spinner fa-spin"></i> ');
  });

  
}); //end document ready

function timeConvert(n) {
  var num = n;
  var hours = (num / 60);
  var rhours = Math.floor(hours);
  var minutes = (hours - rhours) * 60;
  var rminutes = Math.round(minutes);
  var plural_minutes = "";
  var plural_hour = "";
  if (rhours > 1){
    var plural_hour = "s";
  }
  if (rminutes > 1){
    var plural_minutes = "s";
  }
  converted_hour = rhours + " hour"+plural_hour;
  converted_and_word = " and ";
  converted_minutes  = rminutes + " minute"+plural_minutes;
  if (rminutes == 0 ){
    converted_time = converted_hour
  }
  else if (rhours == 0 ){
    converted_time = converted_minutes
  }
  else {
    converted_time = converted_hour + converted_and_word + converted_minutes;
  }
  return converted_time;
}
</script>
</body>
</html>
