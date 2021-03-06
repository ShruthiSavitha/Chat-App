<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Pragma" content="no-cache"> 
  <meta http-equiv="expires" content="0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Whatsapp_new</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="assets/bootstrap/css/all.css" >
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<script src="assets/opentox/opentok.min.js"></script>
  
    <script src="assets/bootstrap/js/polyfill.min.js" charset="utf-8"></script>
  <script src="assets/bootstrap/js/fetch.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/jquery/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/jquery/js/popper.min.js"></script>
</head>


<body>

  <section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <div class="d-flex flex-row">
     <img src="images/person-icon.png" alt="Profile Photo" class="img-fluid rounded-circle mr-2" style="height:50px;" id="pic"></a>
          
          <div class="d-flex flex-column">
            <div class="text-white font-weight-bold" id="name">Shruthi</div>
            <div class="text-white small" id="details">Online</div>
          </div>
        </div>
        
    </div>
    <div class="msger-header-options">
     
<div class="icons d-flex flex-row">
        <a onclick="call_video()"><i class="fas fa-video mx-3 text-white  d-md-block"></i></a>
    <a  onclick="call_audio()"><i class="fas fa-phone mx-3 text-white  d-md-block" ></i></a>
    <!-- <a href="#"><i class="fas fa-ellipsis-v mr-2 mx-sm-3 text-white"></i></a></i> -->
  </div>
    </div>
  </header>

<main class="msger-chat">
   <p  id="history"></p>
   
  </main>
 

  <form class="msger-inputarea">
    <input type="text" class="msger-input" id="msgTxt"  placeholder="Enter your message..." required>
    <button type="submit" class="msger-send-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
  </form>
</section>
 <!-- Button trigger modal -->
   <button type="button"  style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="demo_btn">
        Launch demo modal
    </button>

      <button type="button" style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" id="demo_btn1">
        Launch demo modal
    </button>

<button id="modalActivate" style="display: none;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalPreview">
    Launch demo modal
</button>


<div id="videos_parent">
  <!-- <i class="fas fa-angle-left"></i> -->
  <div id="vid_btn1" style="width:120px;">
    <i class="fas fa-angle-left" id="vid_btn">  </i>
      
      <span class="message_heading"  >Messages</span>
    </div>

  <div id="videos">
   <div id="subscriber"></div>
   <div id="publisher"></div>
 </div>
 
  <div class="d-flex  shruthi justify-content-center" >
    <i class=" fas fa-video  rounded-circle text-black" id="vid-btn" title="Video" data-toggle="tooltip" data-placement="top"></i>
    <i class="fas fa-phone-slash rounded-circle   text-white " id="cut_calling" onclick="session_destroy()" title="Disconnect" data-toggle="tooltip" data-placement="top"  ></i>
    <i class="fas fa-microphone rounded-circle  pr-3 text-black" id="vol-btn" title="Mute" data-toggle="tooltip" data-placement="top"></i>


</div>





</div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content" style="background-color:#075A50;">
       
       <div class="modal-body" >
        
         <div class="module mid">
          
           <div class= "profile_img text-center">
             <img src="images/person-icon.png" class="rounded person-icon  " alt="...">
             </div>
             <div class="text-center" style="   color: white;">
             <h2>Incoming Video Call..</h2>
             </div>
             <div id="video_play" style="display: none">
             <audio id="video_play1" controls>
              <source src="audio/old_phone_bell.mp3" type="audio/mp3">
             </audio>
             </div>
             <div class="row call_info "></div>
           <!-- <div class="modal-footer"> -->
           <!--   <div class="row text-center">
               <div class=" accept">
                 <button type="button" class="btn btn-lg  rounded-circle mx-3 text-white" data-dismiss="modal"
                 style="background-color: rgb(236, 33, 33); " onclick="reject_video()">
                 <i class="fas fa-phone-slash" style="font-size:larger"></i>
               </button> 
               </div>
               <div class="disconnect ">
                 <button type="button" class="btn btn-lg  rounded-circle  mx-3 text-white " data-dismiss="modal" 
                   style="background-color: rgb(7, 141, 25);" onclick="accept_video()">
   
                   <i class="fa fa-phone" style="font-size:larger"></i>
                 </button>
               </div>

             </div> -->
              <div class="d-flex justify-content-center">
              <button type="button" class="btn btn-lg  rounded-circle mx-3 text-white" data-dismiss="modal"
                 style="background-color: rgb(236, 33, 33);padding: 14px;
                 width: 61px;" onclick="reject_video()">
                 <i class="fas fa-phone-slash" ></i>
               </button>
               <button type="button" class="btn btn-lg  rounded-circle  mx-3 text-white " data-dismiss="modal" 
                   style="background-color: rgb(7, 141, 25);    font-size: 22px;
                   width: 61px; " onclick="accept_video()">
   
                   <i class="fa fa-phone" ></i>
                 </button> 
             </div>
           </div>
   </div>
   </div>
   </div>
   </div>

     <!-- Modal -->
 <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content" style="background-color:#075A50;">
       
       <div class="modal-body" >
         <div id="audio_play2" style="display: none">
             <audio id="audio_play22" controls>
              <source src="audio/old_phone_bell.mp3" type="audio/mp3">
             </audio>
             </div>
        
         <div class="module mid">
          
           <div class= "profile_img text-center">
             <img src="images/person-icon.png" class="rounded person-icon" alt="...">
             </div>
             <div class="text-center" style="   color: white;">
             <h2>Incoming Audio Call..</h2>
             </div>
             
             <div class="row call_info "></div>
           <!-- <div class="modal-footer"> -->
            <!--  <div class="row text-center">
               <div class="accept">
                 <button type="button" class="btn btn-lg  rounded-circle mx-3 text-white" data-dismiss="modal"
                 style="background-color: rgb(236, 33, 33); " onclick="reject_audio()">
                 <i class="fas fa-phone-slash" style="font-size:larger"></i>
               </button> 
               </div>
               <div class="disconnect ">
                 <button type="button" class="btn btn-lg  rounded-circle  mx-3 text-white " data-dismiss="modal" 
                   style="background-color: rgb(7, 141, 25);" onclick="accept_audio()">
   
                   <i class="fa fa-phone" style="font-size:larger"></i>
                 </button>
               </div>

             </div> -->
              <div class="d-flex justify-content-center">
              <button type="button" class="btn btn-lg  rounded-circle mx-3 text-white" data-dismiss="modal"
                 style="background-color: rgb(236, 33, 33);padding: 14px;
                 width: 61px; " onclick="reject_audio()">
                 <i class="fas fa-phone-slash" ></i>
               </button>
               <button type="button" class="btn btn-lg  rounded-circle  mx-3 text-white " data-dismiss="modal" 
                   style="background-color: rgb(7, 141, 25);    font-size: 22px;
                   width: 61px;" onclick="accept_audio()">
   
                   <i class="fa fa-phone" ></i>
                 </button> 
             </div>
           </div>
   </div>
   </div>
   </div>
   </div>
 <script type="text/javascript">
$('#vid_btn1').on('click', function () {
  console.log("click");
if ($('#vid_btn').hasClass('fa-angle-left')) {
$('#vid_btn').removeClass('fa-angle-left').addClass('fa-angle-right');
 var videos_parent = document.querySelector('#videos_parent');
    videos_parent.style.height='34%';
    videos_parent.style.width='48%';
    videos_parent.style.position='absolute';
    videos_parent.style.right="0px";
     // videos_parent.style.top="27px";


if (window.matchMedia("(min-width: 700px)").matches) {
  console.log('greater than 400 px');
  /* The viewport is greater than, or equal to, 700 pixels wide */
 
     var vid_btn  = document.querySelector('#vid-btn');
vid_btn.style.position = 'relative';
vid_btn.style.padding='12px';
vid_btn.style.zIndex='900';
vid_btn.style.backgroundColor='white';
vid_btn.style. marginRight = '10px';
vid_btn.style.fontSize = '17px';

 var cut_calling =document.querySelector('#cut_calling');
cut_calling.style.position = 'relative';
cut_calling.style.padding='13px';
cut_calling.style.zIndex='900';
cut_calling.style.backgroundColor='red';
cut_calling.style. marginRight = '10px';
cut_calling.style.fontSize = '15px';
cut_calling.style.bottom = '0%';
cut_calling.style.top = '-2px';
cut_calling.style.marginLeft = '10px';

var vol_btn =document.querySelector('#vol-btn');
vol_btn.style.position = 'relative';
vol_btn.style.padding=' 12px';
vol_btn.style.zIndex='900';
vol_btn.style.backgroundColor='white';
vol_btn.style.fontSize = 'larger';
vol_btn.style.bottom = '0%';
vol_btn.style.top = '-2px';
vol_btn.style.marginLeft = '10px';

 

} else {
  /* The viewport is less than 700 pixels wide */
console.log('less than 300px');
var vid_btn  = document.querySelector('#vid-btn');
vid_btn.style.position = 'relative';
vid_btn.style.padding='11px 10px';
vid_btn.style.zIndex='900';
vid_btn.style.backgroundColor='white';
vid_btn.style. margin = '14px 7px 34px 2px';
vid_btn.style.fontSize = '13px';
vid_btn.style.top = '-24px';

 var cut_calling =document.querySelector('#cut_calling');
cut_calling.style.position = 'relative';
cut_calling.style.padding='12px 9px';
cut_calling.style.zIndex='900';
cut_calling.style.backgroundColor='red';
// cut_calling.style. marginRight = '10px';
cut_calling.style.fontSize = '13px';
cut_calling.style.bottom = '0%';
cut_calling.style.top = '-20px';
cut_calling.style.margin = '8px -13px 38px 15px';

var vol_btn =document.querySelector('#vol-btn');
vol_btn.style.position = 'relative';
vol_btn.style.padding='10px 9px';
vol_btn.style.zIndex='900';
vol_btn.style.backgroundColor='white';
vol_btn.style.fontSize = '16px';
vol_btn.style.bottom = '0%';
vol_btn.style.width = '34px';
vol_btn.style.top = '-29px';
vol_btn.style.margin = '18px 4px 30px 32px';

}




// //sound.mute(true);
// console.log("Muting sound.")

// it won't enter this condition!
} else if ($('#vid_btn').hasClass('fa-angle-right')) {
$('#vid_btn').removeClass('fa-angle-right').addClass('fa-angle-left').css({
'color': 'white'
});
var videos_parent = document.querySelector('#videos_parent');
    videos_parent.style.height='100%';
    videos_parent.style.width='100%';
// //sound.mute(false);
// console.log("Unmuting sound.")
}



});

$(function () {
            $('#vid-btn').on('click', function () {
                if ($(this).hasClass('fa-video')) {
                    $(this).removeClass('fa-video').addClass('fa-video-slash');
                    hide_video();
                } else if ($(this).hasClass('fa-video-slash')) {
                    $(this).removeClass('fa-video-slash').addClass('fa-video');
                   show_video();
                }
            });
        })


$(function () {
            $('#vol-btn').on('click', function () {
                if ($(this).hasClass('fa-microphone')) {
                    $(this).removeClass('fa-microphone').addClass('fa-microphone-slash');
                    mute_audio();
                   
                } else if ($(this).hasClass('fa-microphone-slash')) {
                    $(this).removeClass('fa-microphone-slash').addClass('fa-microphone');
                   unmute_audio();
                }
            });
        })

 </script>



      <script src="assets/jquery/js/jquery-3.3.1.slim.min.js" ></script>
          <script src="assets/other/js/popper.min.js" ></script>
        <script src="assets/other/js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="js/config.js"></script>
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript">
    var scripts =  document.getElementsByTagName('script');
var torefreshs = ['js/app.js', 'js/config.js'] ; // list of js to be refresh
var key = 1; // change this key every time you want force a refresh
for(var i=0;i<scripts.length;i++){ 
   for(var j=0;j<torefreshs;j++){ 
      if(scripts[i].src && (scripts[i].src.indexOf(torefreshs[j]) > -1)){
        new_src = scripts[i].src.replace(torefreshs[j],torefreshs[j] + 'k=' + key );
        scripts[i].src = new_src; // change src in order to refresh js
      } 
   }
}
  </script>
</body>

</html>