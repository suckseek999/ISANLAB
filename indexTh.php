<!doctype html>
<html  lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISAN LAB</title>
    <link rel = "icon" href = "images/apple-touch-icon.png" type = "image/x-icon">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="css/boxshadow.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script src="js/vendor/modernizr.js"></script>
    
    <!-- Search Engine -->
    <meta name="description" content="ISAN LAB คือกลุ่มวิจัยด้าน Cybersecurity ระบบความมั่นคงทางอินเทอร์เน็ต เทคโนโลยีเครือข่าย และ เทคโนโลยีอินเทอร์เน็ตในอนาคต นอกจากนี้ยังเป็น ผู้เชี่ยวชาญ ด้านไอที และ ระบบคอมพิวเตอร์ เพลิดเพลิน กับสิ่งที่ท้าทายมากมายในโลก กลุ่มวิจัย ISAN LAB อยู่ภายใต้ คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม ISAN-MSU ประเทศไทย ซึ่งมีสมาชิก พันธมิตร หลายแห่ง จากมหาวิทยาลัย และ อุตสาหกรรมอื่น ๆ Information Security and Advanced Networks ISAN LAB">
    <meta name="description" content="ISAN LAB We are a group of lecturers, researchers, and students, enjoying to research on Cybersecurity, Network technologies and Future Internet Technologies. We are also the IT & computer geeks, enjoying several challenging things in IT & computer World. Our research group is officially under the Faculty of Informatics, Mahasarakham University, Thailand. Yet, we have also several members and alliances from other Universities and Industries.">
    <meta name="image" content="images/isan-meta.png">
    <meta name="keywords" content="isanmsu,isan lab,กลุ่มวิจัยมหาวิทยาลัยมหาสารคาม isan lab ,isan,cybersecurity research group,network research group,future internet research ,research group at Maha Sarakham Thailand">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="ISAN LAB">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="fb:app_id" content="1908101639249739" /> 
    <meta property="og:title"  content="ISAN LAB" /> 
    <meta property="og:description" content="ISAN LAB คือกลุ่มวิจัยด้าน Cybersecurity ระบบความมั่นคงทางอินเทอร์เน็ต เทคโนโลยีเครือข่าย และ เทคโนโลยีอินเทอร์เน็ตในอนาคต นอกจากนี้ยังเป็น ผู้เชี่ยวชาญ ด้านไอที และ ระบบคอมพิวเตอร์ เพลิดเพลิน กับสิ่งที่ท้าทายมากมายในโลก กลุ่มวิจัย ISAN LAB อยู่ภายใต้ คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม ISAN-MSU ประเทศไทย ซึ่งมีสมาชิก พันธมิตร หลายแห่ง จากมหาวิทยาลัย และ อุตสาหกรรมอื่น ๆ Information Security and Advanced Networks ISAN LAB">
    <meta property="og:image" content="images/isan-meta.png">
    <meta property="og:url" content="http://isan.msu.ac.th/">
    <meta property="og:site_name" content="http://isan.msu.ac.th/">
    <meta property="og:type" content="website">

  </head>
  <body>
    
    <div class="row">
    <div class="large-4 medium-4 small-12 columns">
    
    <div id="logo"><a href="indexTh.php"><img src="images/ISAN2.png" alt="ISAN LAN"></a></div>
    
    </div>
    <div class="large-8 medium-8 small-12 columns">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name"> </li>
    
    
    
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="indexTh.php">หน้าหลัก</a></li>
      <li><a href="publicationTh.php">การตีพิมพ์</a></li>
      <li><a href="researchprojrctTh.php">โครงการวิจัย</a></li>
      <li><a href="blogTh.php">ข่าวสาร</a></li>
      <li><a href="contactTh.php">ติดต่อ</a></li>
     
      <li><a href="index.php"><img src="images/iconEnglish.png" alt="EN" width="30" height="30"></a></li>


      
      </ul>
      
      </li>
  </section>
  
</nav>

    </div>
    
    </div>
    
    
<div class="slider-sec">

<div class="slider single-item">
  <div><img src="images/slide1.jpg" alt=" " /></div>
  <div><img src="images/slide2.jpg" alt=" " /></div>
</div>
<div class="row">

</div>
</div>
<div class="content-sec"">
<div class="w-row">
<div class="large-12 columns text-center">
<h2>เกี่ยวกับ ISAN</h2>
</div>
</div>
</div>

 <?php
          $data = file_get_contents('Dhome.json');
          $data = json_decode($data);
          $index = 0;
          
      if(!empty($data)){ 
      foreach($data as $row){			
          ?>
         
         <div class="content-sec">
          <div class="row">
            <div class="large-12 columns text-center">
              <div class="round">
                <h3><?php echo $row->TopicTh; ?></h2>
                <br>
                <p><?php echo $row->DetailsTh; ?></p>
              </div>
            </div>
          </div>
        </div>
    
          <?php
          $index++;
          }
      }
      ?>



 <div class="services-sec">
 <div class="row">
 <h2>ข่าวสาร</h2>
 <div class="content-sec inner-sec">
    <div class="row">
      <div class="large-12 columns">
 
          
 <?php
          $data = file_get_contents('DPbolg.json');
          $data = json_decode($data);
          $index = 0;
          
      if(!empty($data)){ 
      foreach($data as $row){			
          ?>
          
          
          <div class="w3-content">
          <div class="w3-row w3-margin">

<div class="w3-third">
<a href="<?php echo $row->Link; ?>">
  <img class="card-img-top" style="width:100%;min-height:200px" src="<?php echo $row->image; ?>"  alt="Coding">
</a>
</div>
<div class="w3-twothird w3-container">
  <h2><?php echo $row->TopicTh; ?></h2>
  <p>
    <?php echo $row->DetailsTh; ?>

  </p>
  <a href="<?php echo $row->Link; ?>" target="blank"> อ่านเพิ่มเติม</a>

</div>
</div>
</div>
</div>
          <?php
          $index++;
          }
      }
      ?>
  </div>    
 </div>
 </div>




 

 <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>
 
 </div>
 </div>
 
 <div class="footer-sec">
 <div class="row">
 <div class="large-3 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>หมวด</h4>
 <ul>
 <li><a href="indexTh.php" title="Home">หน้าหลัก</a></li>
 <li><a href="publicationTh.php" title="About Us">การตีพิมพ์</a></li>
 <li><a href="researchprojrctTh.php" title="FAQs">โครงการวิจัย</a></li>
 <li><a href="blogTh.php" title="Services">ข่าวสาร</a></li>
 <li><a href="contactTh.php" title="Contact">ติดต่อ</a></li>
 </ul>
 </div>
 </div>
 

 
 <div class="large-4 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>ที่อยู่</h4>
 <p>กลุ่มวิจัยความมั่นคงปลอดภัยสารสนเทศและเครือข่ายขั้นสูง (ISAN) คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม ตำบลขามเรียง อำเภอกันทรวิชัย จังหวัดมหาสารคาม  ประเทศไทย 44150<br>
  </p>
 <ul>
 <li><a href="mailto:info@companyname.com" target="_blank">somnuk.p@msu.ac.th</a></li>
 <li><a href="" target="_blank">089-4532-159</a></li>
 </ul>
 </div>
 </div>
 
 <div class="large-4 medium-3 small-12 columns">
 <div class="foot-1">
 <h4>ช่องทางติดตาม</h4>
 <div class="social">
 <div class="facebook"><a href="https://www.facebook.com/ISAN-FANPAGE-174246142644437/" class="facebook"></a></div>
 <div class="twitter"><a href="https://twitter.com/somnukp?fbclid=IwAR1Qih2bC7BprmG1h_pN_FyaNm_3byG2n5gz2i4YUCOxuU9If325_oQxWDE" class="twitter"></a></div>
 <!-- <div class="linkedin"><a href="#" class="gplus"></a></div> -->
 </div>
 </div>
 </div>
 
 </div>
 </div>
 
 <div class="copy">
 <div class="row">
 <div class="large-12 columns">
 <span>This site is the official site of ISAN Research Group @ Mahasarakham University, Thailand. The backup & mirrored site of our lab can also be found at
     <a
      href="https://isanmsu.com/" target="_blank">isanmsu.com
     </a>
   </span>
 
 </div>
 </div>
 </div>
 
 
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
    
  </body>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208590289-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-208590289-1');
    </script>
</html>
