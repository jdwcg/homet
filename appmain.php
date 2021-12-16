<?php
include_once ('nav.php');
?>
<style media="screen">
   .toggleBtn > a {
      padding: 0 1em;
   }
   .toggleBtn {
      width: 100%;
      position: fixed; z-index: 997;
      left:50%; padding: 1rem 0;
      transform: translate(-50%);
   }
   @media(min-width: 640px) {
      .toggleBtn {width: 640px;}
   }
   .colum {margin-bottom: 6px; flex-grow: auto !important;}
   .colum > a:not(:last-child) {
      margin-right: 6px;
   }
   @media(max-width: 300px) {
      .colum {margin-bottom: 0;}
      .colum > a:not(:last-child) {
         margin-right: 0;
      }
   }
   .copyright{
      text-align: center;
      padding: 1.4rem;
      color: #fff; font-weight: 100; font-size: 14px;
   }
</style>
<div class="toggleBtn">
   <a href="#" id=toggleBtn onclick="toggleMenu()"><i style="font-size:24px;padding: 0 6px" class="bi bi-list"></i></a>
</div>

<section>
   <style>@import "css/main.css";</style>
   <div class="mainBg"><img src="imgs/mainbg.svg" alt="mainbg"></div>

   <div class="wrap row">
      <div class="height" style="height: 140px;"></div>
      <div class="colum">
         <a href="index.php"><img src="imgs/caremanager.svg" alt="caremanager"></a>
         <a><img src="imgs/calc.svg" alt="calc"></a>
      </div>
      <div class="colum">
         <a><img src="imgs/calendar.svg" alt="calendar"></a>
         <a><img src="imgs/goods.svg" alt="goods"></a>
      </div>
      <div class="colum">
         <a><img src="imgs/tip.svg" alt="tip"></a>
         <a><img src="imgs/event.svg" alt="event"></a>
      </div>
      <div class="colum">
         <a href="#"><img src="imgs/training.svg" alt="training"></a>
         <a><img src="imgs/myclub.svg" alt="myclub"></a>
      </div>
      <p class="copyright">Curves Korea ⓒ 2018</p>
   </div>

</section>
