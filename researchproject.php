<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ISAN</title>
  <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
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
  <meta property="og:title" content="ISAN LAB" />
  <meta property="og:description" content="ISAN LAB คือกลุ่มวิจัยด้าน Cybersecurity ระบบความมั่นคงทางอินเทอร์เน็ต เทคโนโลยีเครือข่าย และ เทคโนโลยีอินเทอร์เน็ตในอนาคต นอกจากนี้ยังเป็น ผู้เชี่ยวชาญ ด้านไอที และ ระบบคอมพิวเตอร์ เพลิดเพลิน กับสิ่งที่ท้าทายมากมายในโลก กลุ่มวิจัย ISAN LAB อยู่ภายใต้ คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม ISAN-MSU ประเทศไทย ซึ่งมีสมาชิก พันธมิตร หลายแห่ง จากมหาวิทยาลัย และ อุตสาหกรรมอื่น ๆ Information Security and Advanced Networks ISAN LAB">
  <meta property="og:image" content="images/isan-meta.png">
  <meta property="og:url" content="http://isan.msu.ac.th/">
  <meta property="og:site_name" content="http://isan.msu.ac.th/">
  <meta property="og:type" content="website">
</head>

<body>

  <div class="row">
    <div class="large-4 medium-4 small-12 columns">
      <div id="logo"><a href="index.php"><img src="images/ISAN2.png" alt="Conmpany Name"></a></div>
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
            <li><a href="index.php">Home</a></li>
            <li ><a href="publication.php">PUBLICATIONS</a></li>
            <li class="active"><a href="researchproject.php">RESEARCH PROJECTS</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>

            <li><a href="indexTh.php"><img src="images/iconThailand.png" alt="TH" width="30" height="30"></a></li>
          </ul>
          </li>
          </ul>
        </section>
      </nav>
    </div>
  </div>

  <div class="inner-banner">
    <img src="images/about-banner.jpg" alt="About Us">
  </div>

  <div class="content-sec inner-sec">
    <div class="row">
      <div class="large-12 columns">
        <h2>research projects</h2>
        
      </div>
      
      <?php
      $data = file_get_contents('Dresearchproject.json');
      $data = json_decode($data);
      $searchq = $_POST['search'];
      if ($searchq == null) {
        $searchq = "";
        ?>
        <?php
                $data = file_get_contents('Dresearchproject.json');
                    $data = json_decode($data);
                    $index = 0;
                    //echo $data['type'];
                if(!empty($data)){ 
                foreach($data as $row){			  
            ?>
            
                <div class="clearfix"></div>
                <div class="large-6 medium-6 small-12 columns faq text-center"">
                <h3><?php echo $row->TitleEn; ?></h3>
                

                </div>
                
                <div class="large-6 medium-6 small-12 columns faq">
                <h5><?php echo $row->FundingSourcesEn; ?></h5>
                <p><?php echo $row->PeriodEn; ?></p>
                <p><?php echo $row->AbstractEn; ?></p>
                <p>Budgetn : <?php echo $row->Budgetn; ?></p>
                
                </div>
                
                

                <?php
                        $index++;
                        }
                    }
                  }
                ?>
        
      
    </div>
  </div>
  


  <div class="large-2 medium-2 columns hide-for-small">&nbsp;</div>

  </div>
  </div>

  <div class="footer-sec">
    <div class="row">
      <div class="large-3 medium-3 small-12 columns">
        <div class="foot-1">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php" title="Home">Home</a></li>
            <li><a href="publication.php" title="About Us">Publications</a></li>
            <li><a href="researchproject.php" title="FAQs">Research Projects</a></li>
            <li><a href="blog.php" title="Services">Blog</a></li>
            <li><a href="contact.php" title="Contact">Contact</a></li>
          </ul>
        </div>
      </div>



      <div class="large-4 medium-3 small-12 columns">
        <div class="foot-1">
          <h4>Address</h4>
          <p>Information Security & Advanced Network Research Group (ISAN),
            Faculty of Informatics,
            Mahasarakham University,
            Khamreang Sub-district, Kantarawichai,
            Maha Sarakham, Thailand.
            Postcode: 44150<br>
          </p>
          <ul>
            <li><a href="mailto:info@companyname.com" target="_blank">somnuk.p@msu.ac.th</a></li>
            <li><a href="" target="_blank">(+66) 89-4532-159</a></li>
          </ul>
        </div>
      </div>

      <div class="large-4 medium-3 small-12 columns">
        <div class="foot-1">
          <h4>Follow Us</h4>
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


</body>

</html>