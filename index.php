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
  .container2{

    margin:auto;
  /*  background: rgba(255, 255, 255, 0.8); */
    z-index:-99999;
  }

  .footer {
    font-size:90%;
    color:#748c8a;
  }
  .footer a{
    margin-left:3px;
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



  .button-animate {

    -webkit-animation: glowing 1500ms infinite;
    -moz-animation: glowing 1500ms infinite;
    -o-animation: glowing 1500ms infinite;
    animation: glowing 1500ms infinite;
  }
  @-webkit-keyframes glowing {
    0% { box-shadow: 0 0 3px #80c780; background-color: #4cae4c;}
    50% { box-shadow: 0 0 40px #6ec06e; background-color: #449d44; }
    100% { box-shadow: 0 0 3px #5cb85c; background-color: #4cae4c;}
  }

  @-moz-keyframes glowing {
    0% { box-shadow: 0 0 3px #80c780; background-color: #4cae4c;}
    50% { box-shadow: 0 0 40px #6ec06e; background-color: #449d44; }
    100% { box-shadow: 0 0 3px #5cb85c; background-color: #4cae4c;}
  }

  @-o-keyframes glowing {
    0% { box-shadow: 0 0 3px #80c780; background-color: #4cae4c;}
    50% { box-shadow: 0 0 40px #6ec06e; background-color: #449d44; }
    100% { box-shadow: 0 0 3px #5cb85c; background-color: #4cae4c;}
  }

  @keyframes glowing {
    0% { box-shadow: 0 0 3px #80c780; background-color: #4cae4c;}
    50% { box-shadow: 0 0 40px #6ec06e; background-color: #449d44; }
    100% { box-shadow: 0 0 3px #5cb85c; background-color: #4cae4c;}
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
  <img class="img-fluid" src="images/logo-small.png" /> <!--  Banner Logo.png-->
</div>




<div class="row">
  <div class="col-md-12 h2 conn_status">
    <?=  $status_html ?><br>
  </div>
  <div class="col-md-12 h2 conn_status2">
    <?=  $status_html ?><br>
  </div>
</div>

<div id="default_container">

<div class="row" style="margin-bottom:10px;">
  <div class="col-md-12">
    <small style="color:#748c8a;text-transform: uppercase;"><?= ($pausedTime) ? 'Pause Time:' : 'Remaining Time:'  ?></small>
  </div>
  <div class="col-md-12">
   <?= ($pausedTime) ? '<h2 id="ptime" class="paused">-- </h2>' : '<h2 id="rtime" class="text-primary">9:20</h2>'?>
  </div>
</div>





<div class="row" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a id="link" href="<?= $connectlink ?>"><button type="button" id="insert_coin_button" class="btn btn-success button-rnd">Insert Coin</button></a>
  </div>
</div>

<div class="row <?= ($remainingTime > 0) && (!$pausedTime) ? '' : 'hidden' ?>" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a href="<?= $pausesessionlink ?>"><button type="button" class="btn btn-danger button-rnd">Pause Time</button> </a>
  </div>
</div>

<div class="row <?= (!$pausedTime) ? 'hidden' : '' ?>" style="margin-bottom:10px;">
  <div class="col-md-12">
    <a href="<?= $resumesessionlink ?>"><button type="button" class="btn btn-danger button-rnd">Resume Time</button></a>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <button type="button" class="btn btn-primary button-rnd" data-toggle="modal" data-target="#popup">View Rates</button>
  </div>
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
    <a id="link" href="<?= $buyvoucherlink ?>"><button type="button" class="btn btn-success button-rnd">Buy Voucher</button></a>
  </div>
</div>
<div class="row ">
  <div class="col-md-12">
    <?=  ($remainingTime > 0) ? '<a href="'.$session2voucher.'"><button type="button" class="btn btn-primary button-rnd">Convert Time to Voucher</button> </a>' : '' ?>  
  </div>
</div>
<hr>


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


<!-- Policy Modal -->
<div id="policy" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Terms of Service</h5>
        
        
      </div>
      <div class="modal-body text-left" style="font-size:80%">

        <h6>Summary</h6>
        <ul><li>We don’t collect any of your personal info, except your device’s <b>MAC address</b> and <b>basic information.</b></li>
        <li>We don’t collect and sell your personal info to advertisers or other third parties.</li></ul>

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
   
      </div>
      <div class="modal-footer">
        <button id="policy_agree" type="button" class="btn btn-success" data-dismiss="modal">I Agree</button> 
        <button id="policy_disagree" type="button" class="btn btn-danger" data-dismiss="modal">I don't Agree</button>
      </div>
    </div>

  </div>


</div>


<div id="info_disagree" class="hidden text-center" style="max-width:500px;margin:auto">
<h4 class="text-danger">You have to agree with our Terms of Service to have an internet access.</h4>
<h6 class="text-info">Please contact the owner if you have special concerns.</h6>
<br>
<div class="row">
  <div class="col-md-12">
    <button id="policy_view" type="button" class="btn btn-info button-rnd" data-toggle="modal" data-target="#policy">Click Here to View Terms of Service</button>
  </div>
</div>
<br><br>
</div>

<footer class="footer" style="margin:auto;margin-top:20px;max-width: 500px">
Powered By: <a href="http://www.pmpw.tech" target="_blank" >PMPW Tech</a>

    <div class="text-left" style="font-size:80%;">
      <div class="row">
        <div class="col-md-6">
          <i class="fa fa-file-o"></i> <a id="policy_view" href="#" data-toggle="modal" data-target="#policy">Terms of Service</a> <br>
          <i class="fa fa-facebook-f"></i> <a href="http://facebook.com/pmpw.tech" target="_blank">facebook.com/pmpw.tech</a> <br>
          <i class="fa fa-phone-square"></i> 0995 282 6560 <br>
        </div>

        <div class="col-md-6">
          <i class="fa fa-at"></i> pmpw.tech@gmail.com <br>
          <i class="fa fa-map-marker"></i> Cebu City, Cebu 
        </div>
      </div>
   
    
    </div>

</footer>


</div><!-- End Container -->

<script>
$(document).ready(function() {
var status_style_connected  = "<span class='text-success'><i class='fa fa-wifi'></i>  Connected</span>";
var status_style_notime = "<img width=45 src='images/disabled2.png' style='margin-top:-3px;'><span class='text-danger'> Disconnected</span>";
var status_style_pause = "<span class='text paused'><i class='fa fa-pause'></i>  Time Pause</span>";

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

  $('#policy_view').on('click', function(e) {
    e.preventDefault();
    $('.btn-blocks').addClass('disabled');
    $('#info_disagree').addClass('hidden');
    $('#default_container').removeClass('hidden');
  });

  $('.convertedHour1').html(timeConvert( $('.totalMin1').html()));
  $('.convertedHour2').html(timeConvert( $('.totalMin2').html()));
  $('.convertedHour3').html(timeConvert( $('.totalMin3').html()));


});
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
