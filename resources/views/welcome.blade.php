<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title>eTicket - Ticket for free</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <link rel="stylesheet" href="{{URL::asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <script>
      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
    </script>
    <style>
      
    </style>
    <script src="https://use.fontawesome.com/81c2cd76b6.js"></script>
       
    </head>
    <body>
         
    <!-- Menu nav-->
<div id="menunav" class="menusidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<!-- End menu-->


<!-- main-->
<div id="main">


    <!-- Navber-->
    <nav class="navbar navbar-light bg-dark fixed-top">
      <!--LOGO-->
      <a class="navbar-brand" href="/"><h3 style="color: white;">eTicket</h3></a>
      <!---->
      <!--update page-->
      <h3>
        <div id="navbar-status" style="color: white;">
          Recommended
        </div>
      </h3>
      <!--END update page-->
       <div id="mySidenav" class="sidenav fixed-top">
            <a href="#" id="about" data-section="0" data-activbutton='Recommended' role="button" class="sidenavbutton" style="padding-left: 15px;">Recommended</a>
            <a href="#" id="blog" data-section="1" data-activbutton='Entertain' role="button" class="sidenavbutton">Entertain</a>
            <a href="#" id="projects" data-section="2" data-activbutton='Technology' role="button" class="sidenavbutton">Technology</a>
            <a href="#" id="contact" data-section="3" data-activbutton='Sport' role="button" class="sidenavbutton">Sport</a>
        </div>
        <div class="dropdown show btn-outline-dark">
        <!-- Form login -->
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-light hideit" role="button">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light hideit" role="button">Register</a>
            @endauth
        @endif
        
        <!--ENFD form login-->
      </div>
    </nav>
    <!--End navbar-->

    <div id="mask">
      
        
      <div id="container">

        <!-- Section 1 -->
        <section class="my-turquoise-bg">
          <div class="content" style="background-image: url(./image/background/Recommend.jpg);">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                  <center>
                      
                              <div class="carousel-inner d-inline-block" style="width: 50%; border-radius: 5px;">
                                <!-- bar -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                </ol>

                                <!-- image -->
                                <div class="carousel-item active">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili01' src="image/recommend/rec1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili02' src="image/recommend/rec2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili03' src="image/recommend/rec3.jpg" alt="First slide">
                                </div>
                                
                                <!-- slide controler -->
                                <div class="control-slide">
                                  <a class="carousel-control-prev slide-controller-right slide-controller" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </div>
                                <div>
                                  <a class="carousel-control-next slide-controller-left slide-controller" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>  
                              </div>

                  </center>

            </div>
          </div>
        </section>


        <!-- Section 2-->
        <section class="carrot-bg">
          <div class="content" style="background-image: url(./image/background/Entertain.jpg);">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                  <center>
                      
                              <div class="carousel-inner d-inline-block" style="width: 50%; border-radius: 5px;">
                                <!-- bar -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                                  <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
                                </ol>

                                <!-- image -->
                                <div class="carousel-item active">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili04' src="./image/ImageSlide/Entertain/ent1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili05' src="./image/ImageSlide/Entertain/ent2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili06' src="./image/ImageSlide/Entertain/ent3.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili07' src="./image/ImageSlide/Entertain/ent4.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili08' src="./image/ImageSlide/Entertain/ent5.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili09' src="./image/ImageSlide/Entertain/ent6.jpg" alt="First slide">
                                </div>

                                <!-- slide controler -->
                                <div class="control-slide">
                                  <a class="carousel-control-prev slide-controller-right slide-controller" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </div>
                                <div>
                                  <a class="carousel-control-next slide-controller-left slide-controller" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>  
                              </div>

                  </center>

            </div>
          </div>
        </section>


        <!-- Section 3 -->
        <section class="blue-bg">
         <div class="content" style="background-image: url(./image/background/Technology.jpg);">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                  <center>
                      
                              <div class="carousel-inner d-inline-block" style="width: 50%; border-radius: 5px;">
                                <!-- bar -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                                  <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                                </ol>

                                <!-- image -->
                                <div class="carousel-item active">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili10' src="./image/ImageSlide/Technology/tec1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili11' src="./image/ImageSlide/Technology/tec2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili12' src="./image/ImageSlide/Technology/tec3.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili13' src="./image/ImageSlide/Technology/tec4.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili14' src="./image/ImageSlide/Technology/tec5.jpg" alt="First slide">
                                </div>
                                
                                <!-- slide controler -->
                                <div class="control-slide">
                                  <a class="carousel-control-prev slide-controller-right slide-controller" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </div>
                                <div>
                                  <a class="carousel-control-next slide-controller-left slide-controller" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>  
                              </div>

                  </center>

            </div>
          </div>
        </section>


        <!-- Section 4 -->
        <section class="turquoise-bg">
          <div class="content" style="background-image: url(./image/background/Sport.jpg);">
            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                  <center>
                      
                              <div class="carousel-inner d-inline-block" style="width: 50%; border-radius: 5px;">
                                <!-- bar -->
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators4" data-slide-to="3"></li>
                                </ol>

                                <!-- image -->
                                <div class="carousel-item active">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili15' src="./image/ImageSlide/Sport/spo1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili16' src="./image/ImageSlide/Sport/spo2.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili17' src="./image/ImageSlide/Sport/spo3.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" data-toggle='modal' data-target='#ticket-hili18' src="./image/ImageSlide/Sport/spo4.jpg" alt="First slide">
                                </div>
                                
                                <!-- slide controler -->
                                <div class="control-slide">
                                  <a class="carousel-control-prev slide-controller-right slide-controller" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </div>
                                <div>
                                  <a class="carousel-control-next slide-controller-left slide-controller" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>  
                              </div>

                  </center>

            </div>
          </div>
        </section>



      </div>
    </div>
    
</div><!--End main-->

<!--Ticketzone-->
    <!--StartRecommend-->
    <!--   Ticket NO.1 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili01">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Internet of things</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                      <div>
                        <img src="image/recommend/RecPopUp/PopUpTech/Head.jpg">
                        Internet of things คืออะไร? ไม่เคยเขียนโปรแกรมมาก่อน แต่อยากลองเล่นพวกนี้? ลองได้เลยมันไม่ยากอย่างที่คิด มาลองผจญภัยไปกับ โลกของ Makerกันเถอะ 
                      </div>

                           <div>
                                <u>
                                  เรียนอะไรบ้าง?
                                </u>
                                <ul>
                                  <li>
                                  ปูพื้นฐานไปตั้งแต่เริ่มต้นการเขียนโปรแกรม ไปจนถึงการควบคุมอุปกรณ์ผ่าน internet</li>
                                  <li>
                                  รู้จัก ไมโครคอนโทรลเลอร์(MicroController) ที่เป็นที่นิยมที่สุดในขณะนี้ Arduino และเรียนรู้ไปตั้งแต่พื้นฐานไปจนถึงควบคุมอุปกรณ์ต่างๆ (หลอดไฟ,ที่วัดอุณภูมิ, ... )</li>
                                  <li>
                                  รู้จักการใช้บริการคลาวด์(Cloud) สำหรับเชื่อมต่อ Internet Of Things(IFTTT,Dweet.io) เชื่อมต่อกับ Arduino ของคุณ
                                  </li></ul>
                          </div>

                                <div><u>
                                     เรียน 2 วัน จะได้อะไรบ้าง?</u>
                                     <ul>
                                         <li>
                                             ทำโปรเจคง่ายเกี่ยวกับการใช้ Internet of things</li>
                                             ตัวอย่างโปรเจคที่จะทำได้ใน 2 วัน <br>
                                             https://www.youtube.com/watch?v=QOKdrXMak3w
                                         <li>
                                            วิดีโอและตัวอย่างโคดสำหรับเนื้อหาที่เรียน ไม่ต้องห่วงแล้วว่ากลับบ้านจะลืม เพราะเราเตรียมวิดิโอมาให้ 40 Video </li>
                                         <li> 
                                            ที่สำคัญที่สุด คุณจะได้อุปกรณ์ ที่เรียนทุกอย่างกลับบ้านไปกับคุณเลย :) </li> </ul>
                                </div>

                                      <div>
                                          <u>คอร์สนี้เหมาะกับใคร?</u>
                                              <ul>
                                                  <li>
                                                      ผู้ที่สนใจและต้องการศึกษาในเรื่องของ Internet Of things </li>
                                                  <li>
                                                      เจ้าของธุรกิจที่อยากเข้าใจ Internet Of things </li>
                                                  <li>
                                                      นักเรียน นักศึกษา </li></ul>
                                      </div>

                                           <div><u>
                                               ใครสอน?</u> <br>
                                                   <b>วิทยากร สมภพ กุละปาลานนท์ (วิทยากรอิสระ/นักพัฒนาซอฟต์แวร์)</b>
                                                   ประสบการณ์การสอนที่เกี่ยวข้อง
                                                  <ul>
                                                      <li>
                                                          สอน Internet Of Things ให้กับครูมัธยมตามนโยบาย Thailand 4.0 ที่มหาวิทยาลัยเกษตรศาสตร์ </li>
                                                      <li>
                                                          สอน Internet of Thing ให้กับ เยาวชน ที่ค่าย CubicCreative Innovator Camp</li>
                                                      <li>
                                                          สอน Maker 101 รอบ1 / รอบ2 </li></ul>
                                           </div>

                                                 <div><u>
                                                      ต้องเตรียมอะไรมาบ้าง</u>
                                                      <ul>
                                                          <li>
                                                          Notebook 1 เครื่อง </li></ul>
                                                 </div>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.2 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili02">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Moonlight festival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                     <div>
                         <img src="image/recommend/RecPopUp/PopUpEnter/Head.jpg">
                    </div>

                         <div>
                              <h5>Get ready to party under the famous moonlight festival</h5>
                         </div>

                               <div><img src="image/recommend/RecPopUp/PopUpEnter/img1.jpg"></div>

                                   <div>
                                     <h5>PARADISE BEACH presents : FULL MOON FESTIVAL Mark your calendar and get ready to experience the BIGGEST OPEN AIR PARTY in the Island!</h5>
                                   </div>
                                       <div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img2.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img3.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img4.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img5.jpg"></div>
                                            <h5>เตรียมพบกับปาร์ตี้ใต้แสงจันทร์ที่ดังไกลไปทั่วโลก บนเกาะภูเก็ต ณ หาดพาราไดซ์ ภายในงานพบกับ DJ ชื่อดังจากต่างประเทศ ที่พร้อมจะส่งความสุขให้กับชาว moonlight ทั้งหลาย!!!</h5>
                                       </div>

                                             <div>
                                                 More Information : www.facebook.com/ParadiseBeachPhuket
                                             </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.3 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili03">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Beautrium Runners 2017</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                          <h5>ครั้งนี้...จะเป็นการวิ่งที่ “สวยที่สุด” ในชีวิตคุณกับระยะทาง 3กม.และ 10กม.</h5>
                             ทุกการสมัครจะได้รับ Gift Voucher ใช้เป็นส่วนลดภายในร้านบิวเทรี่ยม 300 บาทเมื่อซื้อครบ 500 บาท <br>
                                  หรือจะเข้าร่วมกิจกรรมสวยได้บุญแทนก็ได้ เพราะคูปองบนBIB Beautrium Run เท่ากับเงินบริจาค 300 บาท ในการสมทบทุนซื้อชุดชั้นในและสำอางใหม่ให้กับผู้ต้องขังหญิง
                                  เพราะเราเชื่อว่า Every women has the right to be beautiful <br>
                                  นอกจากได้วิ่ง ได้ช้อป ได้ทำบุญแล้ว ที่เส้นชัยยังมี กิจกรรมสนุกๆอื่นๆจากอาณาจักรเครื่องสำอางBeautrium    รอเซอร์ไพรซ์นักวิ่งอีกเพียบ <br>ไม่ว่าจะเป็นกิจกรรมความงามจากBeauty Bloggerชื่อดัง, กิจกรรมซ้อมวิ่งจากสาวๆBeautrium Runners, กิจกรรมแจกรางวัลเครื่องสำอางจากแบรนด์ดัง <br>
                                  รู้อย่างนี้แล้วบอกได้เลยค่ะ ว่างานนี้ <br> 
                          <h5>ห้ามพลาด!</h5>
                    </div>

                          <div>
                            <u>สิ่งที่จะได้รับ</u>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve1.jpg"> <br> </div>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve2.jpg"> <br> </div>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve3.jpg"> <br> </div>
                          </div>

                                <div>
                                    <u>ไซส์เสื้อ</u>
                                    <div> <img src="image/recommend/RecPopUp/PopUpSport/Size.jpg"> <br> </div>
                                </div>

                                      <div>
                                        <u>เส้นทางการวิ่ง</u>
                                            <div> <img src="image/recommend/RecPopUp/PopUpSport/Road1.jpg"> <br> </div>
                                            <div> <img src="image/recommend/RecPopUp/PopUpSport/Road2.jpg"> <br> </div>
                                      </div>

                                            <div>
                                              <u>กำหนดการ</u>
                                                  <b>รับเบอร์วิ่งและของที่ระลึก:</b> เสาร์ที่ 16 ธันวาคม 2560 เวลา 11.00 – 20.00 น. ซีคอนสแควร์ ศรีนครินทร์ 17 ธันวาคม 2560  <br>
                                                  <b>จุดปล่อยตัวและเส้นชัย: </b> ซีคอนสแควร์ ศรีนครินทร์ <br>
                                                  06:00น. ปล่อยตัว 10กม. (Cut off time: 2.20 ชั่วโมง) <br>
                                                  06.30น. ปล่อยตัว 3กม. (Cut off time: 1 ชั่วโมง) <br>
                                                  <b>สถานที่จอดรถ: </b> จอดรถได้ภายในห้างซีคอนสแควร์ ศรีนครินทร์ ไม่เสียค่าใช้จ่าย
                                                  <b>มีจุดรับฝากของ </b> 
                                            </div>

                                                 <div>
                                                  <u><เงื่อนไข:</u>
                                                     ทางทีมงานขอสงวนสิทธิ์ในการคืนเงินทุกกรณี
                                                 </div>

                                                      <div>
                                                        <u>การรับเบอร์วิ่งและของที่ระลึก</u>
                                                           เตรียม Qr Code + บัตรประชาชนตามชื่อบนบัตร<br>
                                                           (Qr Code จะได้รับจากอีเมล หรือ My Wallet สามารถ Print/Capture หน้าจอมาแสดงได้)
                                                      </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--EndRecommend-->

    <!-- StartEntertain hili04-hili09-->
    <!--   Ticket NO.4 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili04">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Dog Chill Out...Charity Concert by the Lake</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <img src="image/ImageEvent/entertain1/image1.jpg">
                    </div>

                         <div>
                              <h5>" Dog Chill Out...Charity Concert by the Lake "หมานั่งชิว...คนฟังเพลง ครั้งที่ 2!</h5>
                         </div>

                              <div>
                                กลับมาอีกครั้งตามเสียงเรียกร้อง กับ คอนเสิร์ตที่คนรักน้องหมาและเสียงเพลงไม่ควรพลาด <br>
                                "Dog Chill Out...Charity Concert by the Lake" หมานั่งชิว...คนฟังเพลง ครั้งที่ 2! <br>
                                ที่จะชวนเหล่าบรรดาคนรักสุนัขทุกคนร่วมพาน้องหมามานั่งฟังเพลงไปด้วยกันกับบรรยากาศริมทะเลสาบเมืองทองธานีสุดชิล โดยในครั้งนี้เราได้นำทัพเหล่าศิลปินนักร้องมากมาย เพื่อมามอบความสนุก และเสียงดนตรี ให้กับทุกท่าน <br>
                                พร้อมช้อปสินค้า และร่วมกิจกรรมสุดสนุกเพื่อสัตว์เลี้ยงมากมาย
                              </div>

                                   <div>
                                     <h5><b>ในวันเสาร์ที่ 23 ธันวาคม 2560 ณ ริมทะเลสาบ เมืองทองธานีตั้งแต่เวลา 16.00 – 22.00 น.</b></h5>
                                   </div>

                                        <div>
                                          <b>บัตรราคา 400 บาท (สัตว์เลี้ยงเข้าฟรี!)</b>
                                        </div>

                                             <div>
                                               รายได้ส่วนหนึ่งจากการจัดงานจะนำไปบริจาคให้แก่มูลนิธิบ้านสงเคราะห์สัตว์พิการ <br>
                                               (ในความอุปถัมภ์ของหลวงตามหาบัว ญาณสัมปันโน)
                                                   <div>
                                                     <img src="image/ImageEvent/entertain1/image2.jpg">
                                                   </div>
                                             </div>

                                                  <div>
                                                    <h5><u>ศิลปินนักร้อง</u></h5>
                                                    <ul>
                                                      <li>
                                                      ZEAL </li>
                                                      <li>
                                                      PAUSE </li>
                                                      <li>
                                                      เพียว KPN </li>
                                                      <li>
                                                      ไข่มุก I Can See Your Voice </li></ul>
                                                  </div>

                                                       <div>
                                                         <h5><u><b>สอบถามข้อมูลเพิ่มเติมได้ที่</b></u></h5>
                                                         โทร : 02-833-5349 <br>
                                                         LINE : @DOGSHOW <br>
                                                         Facebook : ThailandInternationalDogShow <br>
                                                         Website : www.thailand-dogshow.com <br>
                                                         Email :  contact@thailand-dogshow.com <br>
                                                       </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--   Ticket NO.5 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili05">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Half Moon Festival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <img src="img/ImageEvent/entertain2/image1.jpg">
                    </div>

                         <div>
                            <h5><b>Get ready to party : Half Moon Festival</b></h5>
                         </div>

                              <div>
                                <h5><b>Mark your calendar and get ready to experience the BIGGEST OPEN AIR PARTY in the Island!</b></h5>
                                <div><img src="img/ImageEvent/entertain2/image2.jpg"> <br> </div>
                                <div><img src="img/ImageEvent/entertain2/image3.jpg"> <br> </div>
                                <div><img src="img/ImageEvent/entertain2/image4.jpg"> <br> </div>
                              </div>

                                   <div>
                                     <h5><b>เตรียมพบกับปาร์ตี้วันพระจันทร์ครึ่งดวง แห่งเดียวบนเกาะภูเก็ต ณ หาดพาราไดซ์ <br>
                                     แล้วพบกัน!!!</b></h5> 
                                   </div>


                                        <div>
                                             More Information :<br> https://www.facebook.com/ParadiseBeachPhuket/ 
                                        </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.6 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili06">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Moonlight festival</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                         <img src="image/recommend/RecPopUp/PopUpEnter/Head.jpg">
                    </div>

                         <div>
                              <h5>Get ready to party under the famous moonlight festival</h5>
                         </div>

                               <div><img src="image/recommend/RecPopUp/PopUpEnter/img1.jpg"></div>

                                   <div>
                                     <h5>PARADISE BEACH presents : FULL MOON FESTIVAL Mark your calendar and get ready to experience the BIGGEST OPEN AIR PARTY in the Island!</h5>
                                   </div>
                                       <div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img2.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img3.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img4.jpg"></div>
                                           <div><img src="image/recommend/RecPopUp/PopUpEnter/img5.jpg"></div>
                                            <h5>เตรียมพบกับปาร์ตี้ใต้แสงจันทร์ที่ดังไกลไปทั่วโลก บนเกาะภูเก็ต ณ หาดพาราไดซ์ ภายในงานพบกับ DJ ชื่อดังจากต่างประเทศ ที่พร้อมจะส่งความสุขให้กับชาว moonlight ทั้งหลาย!!!</h5>
                                       </div>

                                             <div>
                                                 More Information : www.facebook.com/ParadiseBeachPhuket
                                             </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.7 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili07">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Rock and roll come back 4x4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <img src="image/ImageEvent/entertain4/image1.jpg">
                    </div>

                        <div>
                          <h5>เทศกาลดนตรีร็อคแอนล์โรล์คัมแบ็ค [Rock and roll come back 4x4]วันที่ 10 กุมภาพันธ์ 2561</h5>
                          จัดที่ เขื่อนกระเสียว ด่านช้าง สุพรรณบุรี
                        </div>

                             <div>
                               บัตรราคา <br>
                               Regular 700 บาท <br>
                               Package มา 3 คน เพียง 2,000 บาท <br>
                             </div>

                                  <div>
                                    <h5><u>สิทธิพิเศษ</u></h5>
                                    <div><img src="image/ImageEvent/entertain4/image2.jpg"> <br> </div>
                                  </div>

                                       <div>
                                        <h5><b>Music festival in Thailand </b></h5>
                                        ฟังเพลง กินลม ชมเขื่อน"ดนตรี ฮิปปี้ ธรรมชาติ " <br>
                                        รวบรวมและสร้างสรรค์ พ้องเพื่อนและสังคม ผู้ฟังพบผู้ทำเพลง นักสะสมพบผู้เสพ <br>
                                        <h5><b>Art|LiveMusic|Folk|Dirty|Moto|Enduro|Food|Truck|Hippie|Vintage|Market4x4|Forest|Save|</b></h5> 
                                       </div>

                                            <div>
                                              <h3>เงื่อนไขการเข้าร่วมงาน</h3>
                                              <ul>
                                                <li>
                                                บัตรที่ใช้สำหรับเข้าชมคอนเสิร์ต คือ E-ticket / Show QR-Code พร้อมบัตรประชาชน </li>
                                                <li>
                                                ทางทีมงานไม่รับผิดชอบกรณีบัตรสูญหาย หรือชำรุด หรือถูกทำลาย </li>
                                                <li>
                                                บัตรซื้อแล้วไม่รับคืนเงินทุกกรณี </li> </ul>
                                            </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.8 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili08">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>BEAMFEST</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <img src="image/ImageEvent/entertain5/image.jpg">
                    </div>

                         <div>
                             <h5><b>BEAMFEST</b> is a city music festival in central <br>
                              Bangkok. Experience a wondrous get-together of music, food, <br>
                              art, and pure good vibes over two electric weekends.<br>
                              Join us on our first year!</h5>
                         </div>

                              <div>
                                <h5><b>Music</b></h5>
                                <ul>
                                  <li>
                                  Flight Facilities (DJ Set) </li>
                                  <li>
                                  A$AP Nast</li>
                                  <li>
                                  Cashmere Cat</li>
                                  <li>
                                  Derrick May</li>
                                  <li>
                                  Skream</li>
                                  <li>
                                  Tiga</li>
                                  <li>
                                  Falcons</li>
                                  <li>
                                  HVOB (Live) </li>
                                  <li>
                                  No Regular Play</li>
                                  <li>
                                  Sinistarr</li>
                                  <li>
                                  Swindail</li>
                                  <li>
                                  Teenage Mutants</li>
                                  <li>
                                  And more! </li></ul>
                              </div>


                                   <div><h5><b>Collaborations</b></h5>
                                    <ul>
                                      <li>
                                      Kitsune Club Night (FR) </li>
                                      <li>
                                      Red Light Radio (NL) </li>
                                      <li>
                                      Soulection (US) </li>
                                      <li>
                                      Tiki Disco (US) </li>
                                      <li>
                                      Yeti Out (HK / SH) </li>
                                      <li>
                                      And more! </li></ul> 
                                   </div>

                                          <div><h5><b>Food & Drinks</b></h5>
                                            <ul>
                                              <li>
                                              Yuji Ramen (NY) </li>
                                              <li>
                                              Smack N' Smokes</li>
                                              <li>
                                              Yaowarat Toast</li>
                                              <li>
                                              Muine</li>
                                              <li>
                                              Jigger & Pony (SG) </li>
                                              <li>
                                              Tropic City</li>
                                              <li>
                                              Backstage</li>
                                              <li>
                                              Locker Room</li>
                                              <li>
                                              Thaipioka</li>
                                              <li>
                                              Pakalolo</li> </ul>
                                          </div>

                                                <div>
                                                  <h5><b>Art & Activities</b></h5>
                                                  <ul>
                                                    <li>
                                                    Woof Pack</li>
                                                    <li>
                                                    Wibwabwub</li>
                                                    <li>
                                                    Tempo DJ Conference</li>
                                                    <li>
                                                    Collect/Save</li>
                                                    <li>
                                                    S.V.S.S</li>
                                                    <li>
                                                    Carnival X Takara Wong</li>
                                                    <li>
                                                    Jeeraw</li>
                                                    <li>
                                                    Matter Makers</li>
                                                    <li>
                                                    Viewzfinder X One of us</li>
                                                    <li>
                                                    Eric Tobua </li></ul>
                                                </div>


                                                      <div>
                                                        <b>Event Date</b>: 17-19 & 24-26 November 2017 <br>
                                                        <b>Daily Hours</b>: 4pm-2am  <br> 
                                                      </div>


                                                           <div>
                                                               <h5><b>Location</b></h5>
                                                               BEAM & 72 Courtyard <br>
                                                               72 Sukhumvit 55  Thonglor Bangkok 10110
                                                           </div>


                                                                <div>
                                                                  <h5><b>More Information</b></h5>
                                                                  <b>Email</b> : info@beamfest.com <br>
                                                                  <b>Phone</b> : +662 392 7751 <br>
                                                                  <b>Website</b> : Beamfest.com <br>
                                                                  <b>FB</b> : beamclubbkk <br>
                                                                  <b>IG</b> : beamclubbkk <br>
                                                                  <b>#BEAMFEST2017 #BEAMCLUBBKK</b> 
                                                                </div>

                                                                      <div>
                                                                           *Ticket cannot be replaced if lost, stolen or destroyed. <br>
                                                                           *Non-refundable / Non- returnable <br>
                                                                      </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.9 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili09">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>SO Beach Fest 2017 Art | Craft | Music</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <h5>“ SO Beach Fest 2017 Art | Craft | Music “</h5>
                      <div><img src="image/ImageEvent/entertain6/image1.jpg"> <br> </div>
                      <div><img src="image/ImageEvent/entertain6/image2.jpg"> <br> </div>
                      <div><img src="image/ImageEvent/entertain6/image3.jpg"> <br> </div>
                    </div>

                         <div>
                          Craft your own seaside experience at our first annual event! <br>
                          Join us for a chill experience with Seafood BBQ by the beach, <br>
                          15 craft beer brands and DIY Workshops. <br>
                          Chill music with live band and special artist EVERYDAY !!  <br>
                          8/12 : Kerb The Voice <br>
                          9/12 : Tukta The Voice & Skykick Ranger<br>
                          10/12 : BlueShade
                         </div>

                             <div>
                               <b>Music Theme: Mellow and chill, English and Thai songsBook online<br>
                               for Early bird ticket at THB 399 discounted from THB 599. Tickets grant entry to 3 days and 1 free workshop. </b>
                             </div>

                                  <div>
                                    <b>More Information </b> http://bit.ly/SOBeachFest2017 <br>
                                    //////////////////////////////////////////////////////////
                                  </div>

                                       <div>
                                         พบกับความชิลริมทะเลในหนาวนี้ที่ <br>
                                         <h5><b>“ SO Beach Fest 2017 Art | Craft | Music “</b></h5>
                                         งานชิลๆ ที่เหมาะกับคนคูลๆ มาพร้อมกับดนตรี อาหาร และงานศิลปะ แบบเต็มอิ่มถึง 3 วัน ด้วยกันเต็มอิ่ม <br> กับอาหารที่ยกซีฟู้ดสดๆมาให้คุณได้นั่งปิ้งย่างริมทะเล ไปพร้อมๆกับดนตรีสด ที่เรานำศิลปินมาให้คุณชิลเพิ่มขึ้นไปอีก <br>
                                         8 ธันวาคม – เกิบ เดอะวอยซ์ เดอะวอยซ์ <br>
                                         9 ธันวาคม - ตุ๊กตา เดอะวอยซ์ & Skykick Ranger <br>
                                         10 ธันวาคม –BlueShade <br>
                                         <div><img src="image/ImageEvent/entertain6/image4.jpg"> <br> </div>
                                       </div>

                                            <div>
                                              <b>พิเศษ !! ซื้อบัตรล่วงหน้าออนไลน์เพียง 399 บาท สามารถเข้างานได้ 3 วัน พร้อมกิจกรรม DIY Workshop* </b><br>
                                                ( จากราคาปกติ 599 บาท ) <br>
                                              <b>*จำกัดกิจกรรม DIY Workshop 1 อย่าง ต่อ บัตรเข้างาน 1 ใบ ** เด็กอายุต่ำกว่า 12 ปี เข้าฟรี ** </b><br>
                                              ด่วน บัตรออนไลน์มีจำกัดเพียง 1,000 ใบเท่านั้น !! <br>
                                              สอบถามรายละเอียดเพิ่มเติมได้ที่ http://bit.ly/SOBeachFest2017
                                            </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Entertain-->


    <!-- StartTechnology hili10-hili14 -->
    <!--   Ticket NO.10 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili10">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Angular4 + Firebase</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div><img src="image/ImageEvent/technology1/image1.jpg"> <br> </div>

                        <div>
                             <b><u>***  ทุกที่นั่ง บริจาคเข้าโครงการ “ฝันฝ่าฝน” เพื่อเด็กในถิ่นทุรกันดาร  2,000 บาท  ***</b></u>
                        </div>

                              <div>
                                <h5><u>Angular4 + Firebase</u></h5>
                              </div>


                                   <div>
                                        <h5>หลักสูตรนี้เหมาะกับใคร</h5>
                                        <ul>
                                          <li>
                                          นักเรียน, นักศึกษา, ผู้ประกอบการ, Developer ที่มีความรู้ในการพัฒนาโปรแกรมในด้าน Web ทั้งสาย .NET, PHP, Java และอื่นๆ</li>
                                          <li>
                                          ผู้ที่ทำงานทางด้าน IT อื่นๆ ที่อยากศึกษาเพิ่มเติมความรู้ หรืออยากเปลี่ยนมาทำงานสายนี้</li>
                                          <li>
                                          เหมาะกับคนที่เขียน JavaScript อยากอัพเดทพื้นฐาน และ feature ใหม่ๆ เพื่อต่อยอดเขียน JS Framework ในอนาคต</li></ul>
                                   </div>
                                             
                                              <div>
                                                  <h5>สิ่งที่ต้องเตรียมสำหรับการเข้าอบรม</h5>
                                                  <ol>
                                                    <li>
                                                    Note Book</li>
                                                    <li>
                                                    RAM 2 GB ขึ้นไป</li>
                                                    <li>
                                                    พื้นที่ว่าง 4 GB ขึ้นไป</li>
                                                    <li>
                                                    ระบบปฏิบัติการ Windows XP / Windows Vista หรือ Windows 7 ขึ้นไป</li>
                                                  </ol>
                                              </div>


                                                     <div>
                                                         <h5>ความรู้พื้นฐาน :</h5>
                                                         <ul>
                                                            <li>
                                                            Programming experience</li>
                                                            <li>
                                                            Understanding of HTML and HTTP</li>
                                                            <li>
                                                            Windows, Internet หรือมีความรู้ทาง HTML</li>
                                                         </ul>
                                                     </div>


                                                          <div>
                                                            <h5>เนื้อหาการอบรม :</h5>

                                                                 <div>
                                                                   Module 1 :  Architecture Overview <br>
                                                                   <ul>
                                                                    <li>
                                                                    Basics of Typescript</li>
                                                                    <li>
                                                                    Components, Bootstrap, and the DOM</li>
                                                                    <li>
                                                                    Directives and pipes</li>
                                                                    <li>
                                                                    Data binding</li>
                                                                    <li>
                                                                    Dependency Injection</li>
                                                                    <li>
                                                                    Services and other business logic</li>
                                                                    <li>
                                                                    Data Persistence</li>
                                                                    <li>
                                                                    Routing</li></ul>
                                                                 </div>


                                                                      <div>
                                                                          Module 2 : Components
                                                                          <ul>
                                                                            <li>
                                                                            Component metadata</li>
                                                                            <li>
                                                                            The component selector</li>
                                                                            <li>
                                                                            The component template</li>
                                                                            <li>
                                                                            Styling a component</li>
                                                                            <li>
                                                                            Using other components in a component</li>
                                                                            <li>
                                                                            Interpolation and the expression context</li>
                                                                            <li>
                                                                            Property binding</li>
                                                                            <li>
                                                                            Getting data to the component with input</li>
                                                                            <li>
                                                                            Subscribing to component events with output</li></ul>
                                                                        </div>

                                                                             <div>
                                                                                  Module 3 : Directives and Pipes
                                                                                  <ul>
                                                                                    <li>
                                                                                    Structural directives – nglf</li>
                                                                                    <li>
                                                                                    Structural directives – ngFor</li></ul>
                                                                             </div>


                                                                                  <div>
                                                                                      Module 4 : Directives and Pipes
                                                                                      <ul>
                                                                                        <li>
                                                                                        Using directive values</li>
                                                                                        <li>
                                                                                        Working with events in directives</li>
                                                                                        <li>
                                                                                        Angular pipes – built in</li>
                                                                                        <li>
                                                                                        Angular pipes – custom</li></ul>
                                                                                  </div>


                                                                                       <div>
                                                                                           Module 5 : Form
                                                                                           <ul>
                                                                                            <li>
                                                                                            Angular Form</li>
                                                                                            <li>
                                                                                            Template – driven forms</li>
                                                                                            <li>
                                                                                            Model – driven forms</li>
                                                                                            <li>
                                                                                            Validation – built in</li>
                                                                                            <li>
                                                                                            Validation – custom</li>
                                                                                            <li>
                                                                                            Error handing</li></ul>
                                                                                        </div>


                                                                                              <div>
                                                                                                Module 6 : Dependency Injection and Services
                                                                                                <ul>
                                                                                                  <li>
                                                                                                  How Angular does dependency injection</li>
                                                                                                  <li>
                                                                                                  Services in Angular</li>
                                                                                                  <li>
                                                                                                  Class constructor injection</li>
                                                                                                  <li>
                                                                                                  Building a service</li></ul>
                                                                                              </div>
                                                          </div>

                                                                <div>
                                                                  <u>วันเวลาและสถานที่อบรม :</u><br>
                                                                  วัน – เวลา <br>
                                                                  วันที่ :            13 – 15 พฤศจิกายน 2560 <br>
                                                                  เวลา :           9:00 – 16:00 น.
                                                                  <u>สถานที่</u><br>
                                                                  บริษัท พี เอ็น พี โซลูชั่น จำกัด <br>
                                                                  320 อาคารตั้งฮั่วปัก ชั้น 8 ห้อง 8บี ถนนพระราม 4 แขวงมหาพฤฒาราม เขตบางรัก กรุงเทพฯ 10500 <br>
                                                                  <b>***  รถไฟฟ้าใต้ดิน สถานีหัวลำโพง ประตูทางออกที่ 1 (MRT)  ***</b>
                                                                </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.11 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili11">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Internet of things</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                        <img src="image/recommend/RecPopUp/PopUpTech/Head.jpg">
                        Internet of things คืออะไร? ไม่เคยเขียนโปรแกรมมาก่อน แต่อยากลองเล่นพวกนี้? ลองได้เลยมันไม่ยากอย่างที่คิด มาลองผจญภัยไปกับ โลกของ Makerกันเถอะ 
                    </div>

                           <div>
                                <u>
                                  เรียนอะไรบ้าง?
                                </u>
                                <ul>
                                  <li>
                                  ปูพื้นฐานไปตั้งแต่เริ่มต้นการเขียนโปรแกรม ไปจนถึงการควบคุมอุปกรณ์ผ่าน internet</li>
                                  <li>
                                  รู้จัก ไมโครคอนโทรลเลอร์(MicroController) ที่เป็นที่นิยมที่สุดในขณะนี้ Arduino และเรียนรู้ไปตั้งแต่พื้นฐานไปจนถึงควบคุมอุปกรณ์ต่างๆ (หลอดไฟ,ที่วัดอุณภูมิ, ... )</li>
                                  <li>
                                  รู้จักการใช้บริการคลาวด์(Cloud) สำหรับเชื่อมต่อ Internet Of Things(IFTTT,Dweet.io) เชื่อมต่อกับ Arduino ของคุณ
                                  </li></ul>
                          </div>

                                <div><u>
                                     เรียน 2 วัน จะได้อะไรบ้าง?</u>
                                     <ul>
                                         <li>
                                             ทำโปรเจคง่ายเกี่ยวกับการใช้ Internet of things</li>
                                             ตัวอย่างโปรเจคที่จะทำได้ใน 2 วัน <br>
                                             https://www.youtube.com/watch?v=QOKdrXMak3w
                                         <li>
                                            วิดีโอและตัวอย่างโคดสำหรับเนื้อหาที่เรียน ไม่ต้องห่วงแล้วว่ากลับบ้านจะลืม เพราะเราเตรียมวิดิโอมาให้ 40 Video </li>
                                         <li> 
                                            ที่สำคัญที่สุด คุณจะได้อุปกรณ์ ที่เรียนทุกอย่างกลับบ้านไปกับคุณเลย :) </li> </ul>
                                </div>

                                      <div>
                                          <u>คอร์สนี้เหมาะกับใคร?</u>
                                              <ul>
                                                  <li>
                                                      ผู้ที่สนใจและต้องการศึกษาในเรื่องของ Internet Of things </li>
                                                  <li>
                                                      เจ้าของธุรกิจที่อยากเข้าใจ Internet Of things </li>
                                                  <li>
                                                      นักเรียน นักศึกษา </li></ul>
                                      </div>

                                           <div><u>
                                               ใครสอน?</u> <br>
                                                   <b>วิทยากร สมภพ กุละปาลานนท์ (วิทยากรอิสระ/นักพัฒนาซอฟต์แวร์)</b>
                                                   ประสบการณ์การสอนที่เกี่ยวข้อง
                                                  <ul>
                                                      <li>
                                                          สอน Internet Of Things ให้กับครูมัธยมตามนโยบาย Thailand 4.0 ที่มหาวิทยาลัยเกษตรศาสตร์ </li>
                                                      <li>
                                                          สอน Internet of Thing ให้กับ เยาวชน ที่ค่าย CubicCreative Innovator Camp</li>
                                                      <li>
                                                          สอน Maker 101 รอบ1 / รอบ2 </li></ul>
                                           </div>

                                                 <div><u>
                                                      ต้องเตรียมอะไรมาบ้าง</u>
                                                      <ul>
                                                          <li>
                                                          Notebook 1 เครื่อง </li></ul>
                                                 </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.12 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili12">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Global Dropship</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div><img src="image/ImageEvent/technology3/image1.jpg"> <br> </div>

                         <div>
                           <h4>สัมมนา"ธุรกิจออนไลน์ไม่ต้องมีหน้าร้าน Global Dropship" <br>
                            <b>YOU Revolution | พลิกฝันปั้นชีวิต |ONE Stop Service Online Business|</b></h4>
                         </div>

                              <div>
                                <h5><u>คำแนะนำหลักสูตร </u></h5>
                                กลับมาอีกครั้งกับงานสุดยอด "สัมมนาฟรี" <br>
                                สำหรับ ผู้ที่อยากเรียนรู้ วิธีการสร้าง "ธุรกิจออนไลน์" ด้วยระบบ "ดรอปชิป - <b>Dropship</b>"  <br>
                                มาร่วมขบวนสู่เส้นทางความสำเร็จไปกับเราในงานสัมมนา <b>“ธุรกิจออนไลน์ไร้สต๊อกด้วย Global Dropship” </b><br>
                                ภายในงานคุณจะได้พบกับวิทยากรที่ประสบความสำเร็จในด้านการทำธุรกิจออนไลน์ด้วยระบบ Dropship <br>
                                ที่จะมาร่วมแชร์ประสบการณ์เส้นทางสู่ความสำเร็จ และยังตีแตกเคล็ดลับทุกประเด็น <br>
                                การเริ่มต้น และแบ่งปันเคล็ดลับการทำธุรกิจออนไลน์ ให้ประสบความสำเร็จระยะยาว
                              </div>

                                  <div>
                                      <h5>อะไรคือ "ธุรกิจออนไลน์ดรอปชิป (Dropship)"? </h5>
                                      วันนี้เราปฏิเสธไม่ได้แล้วว่าเราได้เข้ามาสู่ในยุคของโลกดิจิทัลอย่างเต็มตัวแล้ว ไม่ว่าใครก็ตามในยุคสมัยนี้ ถ้า อยากจะทำธุรกิจ ก็ไม่อยากที่จะลงทุนสูง ไม่อยากสต็อกสินค้า ไม่อยากจะจัดสินค้าส่งเอง ไม่อยากจะมีลูกน้องให้คอยปวดหัว ดังนั้น <br>
                                      "ธุรกิจออนไลน์" จึงเป็นตัวเลือกอันดับหนึ่งของคนที่ต้องการจะเริ่มทำธุรกิจในสมัยนี้แต่หลายคนที่กำลังจะเริ่มต้นกลับพบปัญหาว่า แล้วจะเริ่มต้นยังไงดี? จะทำอะไรดี? จะขายอะไรดี? จะทำการตลาดยังไงให้คนรู้จัก? และยังมีอีกหลายคำถามอีกมากมายที่ยังคงต้องหาคำตอบแต่ก็ไม่รู้จะไปปรึกษาใคร คอร์ส "สัมมนาฟรี" นี้จะสอนให้คุณรู้ถึงหลัก <br>
                                      "การทำธุรกิจออนไลน์" รูปแบบใหม่ ที่คุณไม่จำเป็นต้องสต็อกสินค้าเอง ไม่ต้องยุ่งยากในการจัดส่งสินค้าเอง ไม่ต้องจ้างลูกน้อง เพราะเรื่องปวดหัวทุกอย่างจะมีระบบช่วยสนับสนุนและจัดการให้คุณได้ทำธุรกิจอย่างง่ายดาย บริการทั้งหมดเหล่านี้เป็นบริการที่เรียกว่า "ดรอปชิป (Dropship)"
                                      <div><img src="image/ImageEvent/technology3/image2.jpg"> <br> </div>
                                  </div>

                                       <div>
                                           <u><h5>เนื้อหาการอบรม </u></h5>
                                           <ul>
                                            <li>
                                            เข้าใจพฤติกรรมและเทรนด์ของกลุ่มเป้าหมายก่อนทำธุรกิจออนไลน์ (Marketing Trends) </li>
                                            <li>
                                            ปัญหาและความเสี่ยงของธุรกิจในยุคดิจิทัล (Risk of Digital Business) </li>
                                            <li>
                                            รูปแบบการสร้างธุรกิจในยุคดิจิทัล (Digital Business Model) </li>
                                            <li>
                                            คุณจะเรียนรู้และทราบหลักการการทำธุรกิจออนไลน์ด้วยระบบดรอปชิป (Global Dropship) </li>
                                            <li>
                                            รู้จักสุดยอดระบบสนับสนุนการทำธุรกิจออนไลน์โดยที่คุณไม่ต้องสต๊อกสินค้าสักชิ้น (Zero Stock) </li>
                                            <li>
                                            ช่องทางการจัดจำหน่ายที่จะทำให้คุณกระจายสินค้าได้อย่างทรงประสิทธิภาพ (Distribution Channel)</li>
                                            <li>
                                            เคล็ดลับการทำการตลาดกับสินค้าที่มีนวัตกรรม ที่คนซื้อซ้ำ (Billion Dollars Innovation Product) </li>
                                            <li>
                                            พบกับระบบที่จะช่วยให้คุณบริหารจัดการธุรกิจของคุณเพียงปลายนิ้ว (Wisdom Platform) </li>
                                            <li>
                                            อัพเดทข้อมูลเทคโนโลยีและนวัตกรรมต่างๆระดับโลก (Technologies and Innovation News) </li>
                                            <li>
                                            กรณีศึกษา ธุรกิิจออนไลน์ที่สามารถทำแล้วประสบความสำเร็จได้จริง (Success Story) </li>
                                            <li>
                                            ลับเฉพาะ พิมพ์เขียวการสร้างธุรกิจออนไลน์ดรอปชิปแบบ Win-Win (Win-Win Strategy) </li>
                                            <li>
                                            พิเศษ! ร่วมพูดคุยแลกเปลี่ยนประสบการณ์กับวิทยากรและทีมงาน (Q&A) </li></ul>
                                       </div>


                                           <div>
                                            <h2>"ให้คุณเริ่มต้นธุรกิจ ได้อย่างมั่นใจ สัมมนาเดียว ครบทุกองค์ความรู้การทำธุรกิจออนไลน์"</h2>
                                           </div>

                                                <div>
                                                  ลงทะเบียนและข้อมูลเพิ่มเติม: https://www.dreamrev.info/ <br>
                                                  <h5><i>พิเศษลงทะเบียนฟรี 30 ที่นั่งเท่านั้น (Exclusive)ด่วน! ครบแล้วปิดทันที</i></h5>
                                                </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.13 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili13">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Office 365 Exchange Online </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div><img src="image/ImageEvent/technology4/image1.jpg"> <br> </div>

                        <div>
                            ระยะเวลา 2 วัน (16 ชั่วโมง) <br>
                            แม้ Office 365 Exchange Online จะมียอดผู้ใช้งานแตะที่ 100 ล้านเป็นที่เรียบร้อยจาก Office 365 Hits 100 Million Users. On Course for 120 Million This Year <br>
                            แต่ก็ยังมีผู้ใช้งานกว่า 250 ล้านคน ที่ยังอยู่กับ On-premises Exchange หลักสูตร Hand-On Workshop Microsoft Exchange Server 2016 <br>
                            อ้างอิงเนื้อหามาจาก Microsoft Press Exam Ref 70-345 เนื้อหาครอบคลุม Exchange Mailbox database, Client Access, Mail Flow, recipients, compliance, และ Exchange Hybrid
                        </div>


                              <div>
                                  <h5>ลักษณะการเรียนการสอน</h5>
                                  ลักษณะของ Hand-On Workshop จะไม่เหมือนกับหลักสูตร Microsoft Official Curriculum (MOC) ที่ประกอบไปด้วยทฤษฎี 60-70% และ hand-on lab 30-40% <br>แต่ในทางกลับกัน เนื้อหาจะเป็น real-world scenario labs ถึง 70-80% โดยเนื้อหาด้านทฤษฎีจะลดลงเหลือเพียง 20-30% ที่จะกระชับ สรุปสิ่งที่จำเป็น ข้อควรระวัง <br>
                                  และ best practices ที่สามารถนำไปใช้ในการทำงานจริงได้อย่างถูกต้องและเหมาะสม <br>
                                  หมายเหตุ: ด้วยเวลาที่มีจำกัด จึงเกรงว่าเราจะควบคุมเนื้อหาและเวลาไม่ได้ ดังนั้นการเรียนจึงถูกออกแบบใหม่ เป็น block <br>
                                  block ละ 50 นาที สำหรับ Lecture และ Lab ในแต่ละหัวข้อ โดยมีเวลาพัก 5-10 นาทีสั้นๆ ในแต่ละชั่วโมงครับ
                              </div>


                                  <div>
                                      <h5>เหมาะสำหรับ</h5>
                                      ผู้ที่ต้องการนำความรู้ที่ได้ไปใช้งานจริง เข้าใจสัญญาณอันตรายของระบบ แก้ไขปัญหาของระบบจริงได้ <br>และยังเหมาะกับผู้ที่กำลังเตรียมตัวสอบแต่ยังไม่คุ้นเคยกับ Exchange Server 2016
                                  </div>

                                       <div>
                                           <h5>ความรู้พื้นฐานของผู้เรียน</h5>
                                           ผู้เรียนควรมีประสบการณ์ทำงานกับ Exchange Server อย่างน้อย 6 เดือน
                                       </div>

                                             <div>
                                                <h5><u>เนื้อหาประกอบไปด้วย</u></h5>
                                                <div>
                                                  <h5>Day 1</h5>
                                                  <ul>
                                                    <li>
                                                    Plan, deploy, manage and troubleshoot mailbox databases</li>
                                                    <li>
                                                    Plan, deploy, manage and troubleshoot client access services </li>
                                                    <li>
                                                    Plan, deploy, manage and troubleshoot transport services </li>
                                                    <li>
                                                    Lab 1 – 6 </li></ul>
                                                </div>

                                                     <div>
                                                        <h5>Day 2 </h5>
                                                        <ul>
                                                          <li>
                                                          Plan, deploy and manage an Exchange infrastructure, recipients, and security </li>
                                                          <li>
                                                          Plan, deploy and manage compliance, archiving, eDiscovery, and auditing </li>
                                                          <li>
                                                          Implement and manage coexistence, hybrid scenarios, migration and federation </li>
                                                          <li>
                                                          Lab 7 – 13  </li></ul>
                                                     </div>
                                            </div>


                                                 <div>
                                                    <b>ผู้สอน </b>|  คุณจักรพงศ์ ชมกลิ่น Microsoft Certification : MCSEs/MCT (Linkedin)
                                                 </div>

                                                         <div>
                                                            <b>อุปกรณ์การเรียน</b> | ผู้เรียนจำเป็นต้องนำ Laptop/notebook ส่วนตัวมาด้วย (ทางบริษัทต้องขออภัยมา ณ ที่นี้ด้วยค่ะ)<br>
                                                            เพื่อทำ Lab ทั้งหมดใน Microsoft Azure IaaS
                                                         </div>

                                                                 <div>
                                                                  <b>ตารางเรียน</b>| วันเสาร์ที่ 18 - วันอาทิตย์ 19 พฤศจิกายน 2560  เวลา 10:00 - 18:00 น.
                                                                 </div>

                                                                         <div>
                                                                          <b>ราคา</b> | ทั้งหลักสูตร 4,800 บาท (ราคายังไม่รวม Vat 7%)<br>
                                                                          สำหรับท่านที่ต้องการใบเสร็จเพื่อเบิกบริษัท สามารถหักภาษี ณ ที่จ่ายได้ 3 %
                                                                         </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.14 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili14">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Microsoft Azure I MCSA : Cloud Platform</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div><img src="image/ImageEvent/technology5/image1.jpg"> <br> </div>
                        
                        <div>
                          <h5>Microsoft Azure I MCSA : Cloud Platform </h5>
                        </div>

                             <div>
                               <h5><u>เนื้อหาการสอน</u></h5>
                               หลักสูตรนี้ อ้างอิงเนื้อหาจาก Microsoft Press Exam Ref 70-533 และ 70-534 เหมาะสำหรับผู้สนใจทั่วไป ผู้ที่กำลังทำงาน และผู้ที่กำลังเตรียมตัวสอบ<br>
                               MCSA: Cloud Platform ที่เลือกสอบ Microsoft Azure ผู้เรียนจะได้เรียนรู้ เข้่าใจการทำงาน เปรียบเทียบทางเลือก <br>สามารถนำไปใช้งานได้อย่างถูกต้องและเกิดประโยชน์สูงสุด ผ่านบทเรียนที่กระชับ Demo และ Real World Scenarios เนื้อหาคลอบคลุมหัวข้อดังต่อไปนี้
                             </div>


                                 <div>
                                      <h5><u>วิธีการเรียนการสอน</u></h5>
                                      <ol>
                                        <li>
                                        การเรียนแบบ LIVE สด ผ่าน Facebook Secret Group โดยผู้ที่สมัครเรียนจึงจะมีสิทธิ์ Join Group จากการเชิญของINC บุคคลภายนอกที่ไม่ได้สมัครเรียนจะมองไม่เห็นรายชื่อผู้เรียน</li>
                                        <li>ระหว่างการเรียนสามารถส่งคำถามเป็นข้อความ โดยผู้สอนจะตอบในตอนท้ายชั่วโมง</li>
                                        <li>เรียนสัปดาห์ละ 1 ครั้ง ครั้งละ 2 ชั่วโมง ทุกวันเสาร์ เวลา 19:00 - 20:00 น. ทั้งหมด 20 ครั้ง</li>
                                        <li> LIVE แต่ละครั้งจะถูกบันทึกวางใน Facebook Secret Group ผู้เรียนสามารถเรียนทบทวนซ้ำได้</li></ol>
                                  </div>


                                       <div>
                                            <h5>70-533   Implementing Microsoft Azure Infrastructure Solutions </h5>

                                                 <div>
                                                  <h5>Chapter  1   Design and implement Azure App Service apps</h5>
                                                  <ul>
                                                    <li>
                                                    Deploy Web Apps </li>
                                                    <li>
                                                    Configure Web Apps </li>
                                                    <li>
                                                    Configure diagnostics, monitoring, and analytics</li>
                                                    <li>
                                                    1.4  Configure Web Apps for scale and resilience</li> </ul>
                                                  </div>

                                                      <div>
                                                        <h5>Chapter  2  Create and manage Azure Resource Manager Virtual Machines</h5>
                                                        <ul>
                                                          <li>
                                                          Deploy workloads on Azure Resource Manager (ARM) virtual machines (VMs)</li>
                                                          <li>
                                                          Perform configuration management </li>
                                                          <li>
                                                          Design and implement VM storage</li>
                                                          <li>
                                                          Monitor ARM VMs </li>
                                                          <li>
                                                          Scale ARM VMs </li></ul>
                                                      </div>


                                                               <div>
                                                                   <h5>Chapter  3  Design and implement a storage strategy </h5>
                                                                   <ul>
                                                                    <li>
                                                                    Implement Azure storage blobs and Azure files </li>
                                                                    <li>
                                                                    Manage access</li>
                                                                    <li>
                                                                    Configure diagnostics, monitoring, and analytics</li>
                                                                    <li>
                                                                    Implement Azure SQL Databases</li>
                                                                    <li>
                                                                    Implement recovery services </li></ul></div>


                                                                        <div>
                                                                            <h5> Chapter  4  Implement an Azure Active Directory</h5>
                                                                            <ul>
                                                                              <li>
                                                                              Integrate an Azure Active Directory (Azure AD) with existing directories</li>
                                                                              <li>
                                                                              Configure Application Access</li>
                                                                              <li>
                                                                              Integrate an app with Azure AD</li>
                                                                              <li>
                                                                              Implement Azure AD B2C and Azure B2B </li></ul>
                                                                        </div>

                                                                            <div>
                                                                                <h3>Chapter  5  Implement virtual network </h3>
                                                                                <ul>
                                                                                  <li>
                                                                                  Configure virtual networks</li>
                                                                                  <li>
                                                                                  Modify network configuration</li>
                                                                                  <li>
                                                                                  Design and inplement a multi-site or hybrid network </li></ul>
                                                                            </div>

                                                                                <div>
                                                                                    <h3>Chapter  6  Design and deploy ARM templates</h3>
                                                                                    <ul>
                                                                                      <li>
                                                                                      Implement ARM templates</li>
                                                                                      <li>
                                                                                      Control access</li>
                                                                                      <li>
                                                                                      Design role-based access control (RBAC) </li></ul>
                                                                                </div>
                                        </div>


                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--EndTechnology-->

    <!--Start Sport hili15-hili18-->
    <!--   Ticket NO.15 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili15">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Beautrium Runners 2017</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                          <h5>ครั้งนี้...จะเป็นการวิ่งที่ “สวยที่สุด” ในชีวิตคุณกับระยะทาง 3กม.และ 10กม.</h5>
                             ทุกการสมัครจะได้รับ Gift Voucher ใช้เป็นส่วนลดภายในร้านบิวเทรี่ยม 300 บาทเมื่อซื้อครบ 500 บาท <br>
                                  หรือจะเข้าร่วมกิจกรรมสวยได้บุญแทนก็ได้ เพราะคูปองบนBIB Beautrium Run เท่ากับเงินบริจาค 300 บาท ในการสมทบทุนซื้อชุดชั้นในและสำอางใหม่ให้กับผู้ต้องขังหญิง
                                  เพราะเราเชื่อว่า Every women has the right to be beautiful <br>
                                  นอกจากได้วิ่ง ได้ช้อป ได้ทำบุญแล้ว ที่เส้นชัยยังมี กิจกรรมสนุกๆอื่นๆจากอาณาจักรเครื่องสำอางBeautrium    รอเซอร์ไพรซ์นักวิ่งอีกเพียบ <br>ไม่ว่าจะเป็นกิจกรรมความงามจากBeauty Bloggerชื่อดัง, กิจกรรมซ้อมวิ่งจากสาวๆBeautrium Runners, กิจกรรมแจกรางวัลเครื่องสำอางจากแบรนด์ดัง <br>
                                  รู้อย่างนี้แล้วบอกได้เลยค่ะ ว่างานนี้ <br> 
                          <h5>ห้ามพลาด!</h5>
                    </div>

                          <div>
                            <u>สิ่งที่จะได้รับ</u>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve1.jpg"> <br> </div>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve2.jpg"> <br> </div>
                                   <div> <img src="image/recommend/RecPopUp/PopUpSport/recieve3.jpg"> <br> </div>
                          </div>

                                <div>
                                    <u>ไซส์เสื้อ</u>
                                    <div> <img src="image/recommend/RecPopUp/PopUpSport/Size.jpg"> <br> </div>
                                </div>

                                      <div>
                                        <u>เส้นทางการวิ่ง</u>
                                            <div> <img src="image/recommend/RecPopUp/PopUpSport/Road1.jpg"> <br> </div>
                                            <div> <img src="image/recommend/RecPopUp/PopUpSport/Road2.jpg"> <br> </div>
                                      </div>

                                            <div>
                                              <u>กำหนดการ</u>
                                                  <b>รับเบอร์วิ่งและของที่ระลึก:</b> เสาร์ที่ 16 ธันวาคม 2560 เวลา 11.00 – 20.00 น. ซีคอนสแควร์ ศรีนครินทร์ 17 ธันวาคม 2560  <br>
                                                  <b>จุดปล่อยตัวและเส้นชัย: </b> ซีคอนสแควร์ ศรีนครินทร์ <br>
                                                  06:00น. ปล่อยตัว 10กม. (Cut off time: 2.20 ชั่วโมง) <br>
                                                  06.30น. ปล่อยตัว 3กม. (Cut off time: 1 ชั่วโมง) <br>
                                                  <b>สถานที่จอดรถ: </b> จอดรถได้ภายในห้างซีคอนสแควร์ ศรีนครินทร์ ไม่เสียค่าใช้จ่าย
                                                  <b>มีจุดรับฝากของ </b> 
                                            </div>

                                                 <div>
                                                  <u><เงื่อนไข:</u>
                                                     ทางทีมงานขอสงวนสิทธิ์ในการคืนเงินทุกกรณี
                                                 </div>

                                                      <div>
                                                        <u>การรับเบอร์วิ่งและของที่ระลึก</u>
                                                           เตรียม Qr Code + บัตรประชาชนตามชื่อบนบัตร<br>
                                                           (Qr Code จะได้รับจากอีเมล หรือ My Wallet สามารถ Print/Capture หน้าจอมาแสดงได้)
                                                      </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.16 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili16">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>HONDA GET GLOW RUN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                      <h5><b>HONDA GET GLOW RUN</b></h5>
                      กลับมาอีกครั้งกับการรวมพลังชาวกรุงเทพฯ กิจกรรมวิ่งการกุศลเพื่อมอบรายได้ส่วนหนึ่งหลังหักค่าใช้จ่ายสมทบทุนมูลนิธิกรุงเทพมหานคร 2552สำหรับจัดซื้ออุปกรณ์ทางการแพทย์ให้กับโรงพยาบาลผู้สูงอายุบางขุนเทียน <br>
                    </div>

                         <div>
                          <h5>มหกรรมวิ่งเรืองแสงบนสะพานพระราม 8  สนุกไปกับการวิ่งกลางคืนพร้อมกิจกรรมต่าง ๆ ที่ให้นักวิ่งทุกคน ได้ร่วมสนุก เช่น</h5>
                          <ul>
                            <li>
                            Boost up ร่างกายไปกับบีทดนตรีก่อนออกวิ่งโดยดีเจชื่อดังจาก Trasher Bangkok </li>
                            <li>
                            Booth Activity จากผู้สนับสนุนการวิ่งที่นำรางวัลมาแจกในวันงาน </li>
                            <li>
                            Selfie  Awards กิจกรรมถ่ายภาพสำหรับผู้ซื้อบัตร ลุ้นรางวัลมูลค่ารวมกว่า 1 แสนบาท </li></ul>
                         </div>


                              <div>
                                วันจัดงาน    :  13 มกราคม 2561 <br>
                                เส้นทาง      :  สะพานพระราม 8 และทางคู่ขนานลอบฟ้าบรมราชชนนี <br>
                                ระยะทาง     :  MINI MARATHON และ FUN RUN <br>
                                (เนื่องจากเป็นการวิ่งการกุศลไม่มีการจับเวลาและการแข่งขัน ) <br>
                                ค่าสมัคร :  ราคา  500 บาท  <br>
                                ผู้สมัครจะได้รับ  :  เสื้อวิ่ง  1  ตัว   +   BIB   + เหรียญ <br>
                                ค่าสมัคร :  ราคา  400 บาท  <br>
                                ผู้สมัครจะได้รับ  :  BIB   + เหรียญ <br>
                              ( ยังไม่รวมค่าธรรมเนียมการสมัครและค่าธรรมเนียมบัตรเครดิต และภาษี / ไม่สามรถเปลี่ยนแปลงแก้ไขหรือเรียกร้องคืนค่าสมัครได้ )
                              </div>


                                   <div>
                                    <h5><u>วันรับเสื้อและหมายเลขประจำตัว :</u></h5>
                                    6 - 7 มกราคม 2561   พารากอน ซีนีเพล็กซ์    ชั้น 5  สยามพารากอน เวลา  11.00  - 21.00 น. 
                                   </div>


                                        <div>
                                          <h5><u>Size เสื้อ</u></h5>
                                          <ul>
                                            <li>
                                            S       :  รอบอก 36” </li>
                                            <li>
                                            M      :  รอบอก 38” </li>
                                            <li>
                                            L       :  รอบอก 40” </li>
                                            <li>
                                            XL     :  รอบอก 42” </li>
                                            <li>
                                            XXL   :  รอบอก 44” </li></ul>
                                        </div>


                                             <div>
                                              <h5><u>กำหนดการวิ่ง</u></h5>
                                              21.00            เริ่มกิจกรรมบริเวณงานและกิจกรรมของผู้สนับสนุน <br>
                                              21.10 – 21.40    DJ ON GROUND BY DJ GET 102.5 <br>
                                              21.40 – 22.00    เปิดงานอย่างทางการ <br>
                                              22.00 – 22.30    DJ ON GROUND  BY DJ GET 102.5 <br>
                                              22.30 – 23.30    DJ SPIN BY BANGKOK TRASHER <br>
                                              23.30 – 24.00    DJ ON GROUND  BY DJ GET 102.5 <br> 
                                              24.00 – 24.10    DJ ON STAGE BY DJ GET 102.5 <br>
                                              24.10 – 24.20    WARM UP <br>
                                              24.20 – 24.30    ตั้งแถวปล่อยตัว MINI MARATHON  <br>
                                              24.30               ปล่อยตัวประเภท MINI MARATHON <br>
                                              24.30 – 24.40    ตั้งแถวปล่อยตัว FUN RUN <br>
                                              24.40               ปล่อยตัวประเภท MINI FUN RUN <br>
                                              เข้าเส้นชัยรับเหรียญที่ระลึกและถ่ายภาพตามอัธยาศัย <br>
                                              <b>*** หมายเหตุเวลาอาจมีการเปลี่ยนแปลงอันเนื่องมาจากเหตุสุดวิสัยจากทางราชการ</b>
                                             </div>


                                                 <div>
                                                  <h5><u>PROMOTION</u></h5>
                                                  <u>10-30 พฤศจิกายน 2560</u>
                                                  ผู้ที่สมัครได้รับสิทธิ์ละเว้นค่าธรรมเนียมในการสมัคร <br>
                                                  และ ผู้ใช้บัตรเดบิตและบัตรเครดิตกรุงศรี ได้รับส่วนลดเพิ่ม 10 % ไม่รวมภาษี 
                                                 </div>


                                                      <div>
                                                        <h3><u>ผู้ที่สมัครจะได้รับ</u></h3>
                                                        <ol>
                                                          <li>
                                                          หมายเลขประจำตัวการวิ่ง </li>
                                                          <li>
                                                          เหรียญที่ระลึก <br>
                                                          ( เหรียญ Zinc รมควันสีดำขนาดเส้นผ่านศูนย์กลาง  7 ซม ด้านหน้า ปั้มโลโก้ใส่สี และพิเศษพรายน้ำเรืองแสงคำว่า GET GLOW RUN  ด้านหลังปั้มโลโก้คลื่น พร้อมสายคล้องคอแบบทอพิมพ์สี่ 4 ) </li>
                                                          <li>
                                                          เสื้อ <br>
                                                          ( สำหรับผู้สมัครแบบมีเสื้อ : เสื้อคอกลมสีส้มกรีนโลโก้กิจกรรม โลโก้ผู้สนับสนุนและโลโก้คลื่น สีขาว ) </li>
                                                          <li>
                                                          น้ำดื่ม </li>
                                                          <li>
                                                          น้ำเกลือแร่  1 ขวด </li>
                                                          <li>
                                                          สิ่งอำนวยความสะดวกพื้นฐานสำหรับการวิ่ง อาทิ จุดบริการน้ำดื่มระหว่างเส้นทาง หน่วยรักษาความปลอดภัย  หน่วยรักษาพยาบาล ห้องสุขาเคลื่อนที่  ตู้เอทีเอ็มสำหรับเบิกเงินสด  จุดฝากของ เป็นต้น </li> </ol>
                                                          <div><img src="image/ImageEvent/sport2/image1.jpg"> <br> </div>
                                                          <div><img src="image/ImageEvent/sport2/image2.jpg"> <br> </div>
                                                      </div>


                                                           <div><h5><u>เส้นทาง</u></h5>
                                                               <div><img src="image/ImageEvent/sport2/image3.jpg"> <br> </div>
                                                           </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.17 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili17">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>Happy Kinder Running</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                          <h5>“Happy Kinder Running” วิ่งด้วยใจ ไปด้วยกัน</h5>
                          งานวิ่งที่น้องๆจะจูงมือพ่อแม่มาวิ่งด้วยกัน ชิงรางวัล ทุนการศึกษาทั้งหมด 9 รางวัล และโล่ชนะเลิศ 3 รางวัล <br>
                          นอกจากวิ่งแล้วยังมีกิจกรรม Work Shop เล่นเกมลุ้นของรางวัล ภายในงานให้นักวิ่งได้ร่วมสนุก พร้อมทั้งชมนิทรรศการความรู้ ชมนิทานพระราชา เวลา 10.00น. อีกด้วย <br>รายได้หลังหักค่าใช้จ่าย ร่วมสมทบทุนบริจาค บูธ รับบริจาค สิ่งของ เสื้อผ้า อุปกรณ์ สำหรับเด็ก มอบให้แก่มูลนิธิรักษ์เด็ก <br>
                          ในวันอาทิตย์ที่ 12 พฤศจิกายน 2560 <br>
                          ณ สวนจตุจักร เริ่มปล่อยตัว ตั้งแต่เวลา 08.00 น. <br>
                          กิจกรรมตั้งแต่เวลา 07.00 – 12.00 น. <br> 
                    </div>


                           <div><h5><u>รางวัล</u></h5>
                                <div>
                                    <b>1K</b> <br>
                                    เด็ก อายุ 3-7 ปี 3 รางวัล <br>
                                    อันดับที่ 1 ถ้วยรางวัลชนะเลิศ <br>
                                    อันดับที่ 2-3 หนังสือการ์ตูนความรู้ "ในหลวงรัชกาลที่ ๙" <br>
                                </div>

                                    <div>
                                        <b>2K</b> <br>
                                        เด็ก อายุ 8-14 ปี 3 รางวัล <br>
                                        อันดับที่ 1 ถ้วยรางวัลชนะเลิศ <br>
                                        อันดับที่ 2-3 หนังสือการ์ตูนความรู้ "ในหลวงรัชกาลที่ ๙" <br>
                                    </div>

                                        <div>
                                            <b>ประเภทเดี่ยว 4K</b><br>
                                            เด็ก 3-12 ปี อับดับที่ 1-3 ถ้วยรางวัลเกียรติยศ และ หนังสือการ์ตูนความรู้ "ในหลวงรัชกาลที่ ๙" <br>
                                            เด็ก 13 ปี และประชาชนทั่วไป อันดับที่ 1-3 ถ้วยรางวัลเกียรติยศ <br>
                                        </div>

                                            <div>
                                                <b>ประเภทครอบครัว 4K</b><br>
                                                อันดับที่ 1-2 ถ้วยรางวัลเกียรติยศ<br>
                                                อันดับที่ 3 ชุด Gift Set รางวัล <br>
                                            </div>

                                                  <div><img src="image/ImageEvent/sport3/image1.jpg"> <br> </div>
                                                  <div><img src="image/ImageEvent/sport3/image2.jpg"> <br> </div>
                           </div>


                                     <div>
                                          <h5><u>ราคาบัตร</u></h5>
                                          ผู้ใหญ่ (อายุ 15 ปี) 200 บาท <br>
                                          Adult (15 y.) 200 B. <br>
                                          เด็ก (อายุ 3-14 ปี) 150 บาท <br>
                                          Child (3-14 y.) 150 B. <br>
                                     </div>


                                         <div><h5><u>ระยะทาง</u></h5>
                                              ระยะทาง : 1 KM สำหรับเด็ก 3 - 7 ปี และครอบครัว <br>
                                              ระยะทาง : 2 KM สำหรับเด็ก 8 – 12 ปี และครอบครัว <br>
                                              ระยะทาง : 4 KM สำหรับทุกครอบครัว <br>
                                              <div><img src="image/ImageEvent/sport3/image3.jpg"> <br> </div>
                                         </div>

                                              <div>
                                                 <h5><u>การปล่อยตัวผู้วิ่ง</u></h5>
                                                 - 08:00 ปล่อยตัว 4K <br>
                                                 - 08:30 ปล่อยตัว 2K <br>
                                                 - 09:00 ปล่อยตัว 1K  <br> 
                                              </div>


                                                  <div>
                                                      <h5><u>รางวัล</u></h5>
                                                      <div>
                                                           <b>ประเภทเดี่ยว 4K</b> <br>
                                                           เด็ก อายุ - 12 ปี <br>
                                                           ถ้วยรางวัล อันดับที่ 1-3<br>
                                                           เด็ก อายุ ตั้งแต่ 13 ปี ขึ้นไป และประชาชนทั่วไป <br>
                                                           ถ้วยรางวัล อันดับที่ 1-3 <br>
                                                      </div>

                                                               <div>
                                                                    <b>ประเภทครอบครัว 4K</b><br>
                                                                    อับดับที่ 1 ถ้วยรางวัล<br>
                                                                    อันดับที่ 2-3 ชุด Gift set ครอบครัว <br>
                                                               </div>
                                                      <b>**** ประเภทเดี่ยว อายุตั้งแต่ 15 ปี ขึ้นไป กำหนดระยะ 4K </b>
                                                  </div>

                                                        <div><h5><u>เสื้อ และ BIB</u></h5>
                                                             <div><img src="image/ImageEvent/sport3/image4.jpg"> <br> </div>
                                                             <div><img src="image/ImageEvent/sport3/image5.jpg"> <br> </div>
                                                             <div><img src="image/ImageEvent/sport3/image6.jpg"> <br> </div>
                                                        </div>

                                                            <div>
                                                                <h5><u>เงื่อนไขการวิ่ง </u></h5>
                                                                <ul>
                                                                  <li>
                                                                  ปิดลงทะเบียน ภายในวันที่ 31 ตุลาคม 2560 หรือจนกว่าจะเต็ม </li>
                                                                  <li>
                                                                  ไม่มีการคืนเงินค่าลงทะเบียนทุกกรณี </li>
                                                                  <li>
                                                                  ห้ามโอนสิทธิให้แก่ผู้อื่น ห้ามจำหน่ายหรือการเปลี่ยนแปลงชื่อผู้เข้าร่วมงาน </li>
                                                                  <li>
                                                                  ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว </li>
                                                                  <li>
                                                                  งดลงทะเบียนภายในงานทุกกรณี </li></ul>
                                                            </div>


                                                            <div>
                                                                <h5><u>PROMOTION CODE</u>SCHOOLTICKET </h5>
                                                                <u>วิธีการรับเสื้อที่ระลึก และหมายเลขประจำตัว (BIB No.) </u> <br>
                                                                สามารถรับเสื้อที่ระลึกของงาน Happy Kinder Running และ หมายเลขประจำตัว (BIB No.) <br>
                                                                ในวันที่ 11 พฤศจิกายน 2560 เวลา และ สถานที่ จะอัพเดตหลังวันที่ 31 ตุลาคม 2560 <br>
                                                                โดยเตรียม QR Code + บัตรประชาชน (สามารถ Print , Capture หน้าจอมาได้ค่ะ) <br>
                                                            </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!--   Ticket NO.18 -->
    <div class="modal" tabindex="-1" role="dialog" id="ticket-hili18">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id='ticket-head'>6-FEET RUN 2017</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="ticket-body" src="...">
                    <div>
                         <h4>6-FEET RUN 2017</h4>
                         <h5>"จูงน้องหมา...พามาวิ่ง"</h5>
                         <div><img src="image/ImageEvent/sport4/image1.jpg"> <br> </div>
                         วิ่งไปพร้อมกัน กับสุนัขตัวโปรด ในบรรยากาศสวนสุดร่มรื่น <br>
                         พร้อมท้าทายความสามารถของน้องหมาในด่านทดสอบต่างๆ <br>
                         และ ร่วมสนุกกับกิจกรรมในบูธสปอนเซอร์ <br>
                         <h5>ในวันอาทิตย์ที่ 26 พฤศจิกายน 2560</h5>
                         ณ สวนสมเด็จพระศรีนครินทร์  จ.นนทบุรี <br>
                         เริ่มปล่อยตัวตั้งแต่เวลา 16.00 น. <br>
                         <u>วิ่งทั้งหมด 2 รอบ รวมระยะทาง 3.6 km</u>
                         <h5>บัตรราคา 400 บาท</h5>
                         (จำนวนจำกัดเพียง 400 คู่เท่านั้น!) <br>
                         รายได้ส่วนหนึ่งจากการจำหน่ายบัตร มอบให้กับ <br>
                         สำนักงานควบคุมสัตว์จรจัด (เทศบาลนครปากเกร็ด) <br>
                    </div>

                         <div><h5><u>รายละเอียดการวิ่ง</u></h5>
                          <ul>
                            <li>
                            หมายเลขประจำตัว (BIB No.) 1-200 : เริ่มปล่อยตัวเวลา 16.00 น. </li>
                            <li>
                            หมายเลขประจำตัว (BIB No.) 201-400 : เริ่มปล่อยตัวเวลา 17.00 น. </li></ul>
                         </div>

                              <div><h5><u>เส้นทางการวิ่ง</u></h5>
                                  <div><img src="image/ImageEvent/sport4/image2.jpg"> <br> </div>
                              </div>


                                  <div>
                                       <h5><u>สิ่งอำนวยความสะดวก</u></h5>
                                       <ul>
                                        <li>
                                        จุดดื่มน้ำในเส้นทางการวิ่ง </li>
                                        <li>
                                        จุดปฐมพยาบาลในเส้นทางการวิ่ง </li></ul>
                                  </div>


                                       <div>
                                            <h5><u>สิ่งที่ผู้สมัครจะได้รับ</u></h5>
                                            <ul>
                                              <li>
                                              เสื้อที่ระลึกงาน 6-FEET RUN </li>
                                              <li>
                                              หมายเลขประจำตัว (BIB No.) </li>
                                              <li>
                                              เหรียญรางวัล </li> </ul>
                                              <div><img src="image/ImageEvent/sport4/image3.jpg"> <br> </div>
                                       </div>


                                             <div>
                                                  <h5>Size Chart</h5>
                                                  ขนาดเสื้อ<br>
                                                  <div><img src="image/ImageEvent/sport4/image4.jpg"> <br> </div>
                                             </div>

                                                 <div>
                                                     <div><img src="image/ImageEvent/sport4/image5.jpg"> <br> </div>

                                                          <div>
                                                                <h5><u>วิธีการรับเสื้อที่ระลึก และหมายเลขประจำตัว (BIB No.)</u></h5>
                                                                สามารถรับเสื้อที่ระลึกของงาน 6-FEET RUN 2017 และ หมายเลขประจำตัว (BIB No.) ได้ในวันอาทิตย์ที่ 26 พฤศจิกายน 2560 <br> บริเวณจุดลงทะเบียน ณ สวนสาธารณะสมเด็จพระศรีนครินทร์ จังหวัดนนทบุรี เพียงแสดง QR Codes <br> 
                                                                และ สำเนาบัตรประชาชน ที่ลงทะเบียนไว้ (สามารถ print หรือ save QR Codes โดยใช้มือถือมาแสดงได้เช่นกัน)
                                                          </div>

                                                 </div>
                    <h2 id='ticket-price'></h2>
                </div>
                <div class="modal-footer">
                    <div class="alert alert-warning" role="alert" style="width: 100%; margin-top:17px; ">Please login before take the tickets!</div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Sport-->
 
<!--Ticketzone End-->
    
  <!-- Small modal for register-->
    <dizv class="modal hide fade login_or_register_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="padding: 0 0 0 0;">
              <div style="height: 100px; width: 50%; margin: 0 0 0 0;" class="block btn-dark login_btn">
                <center><h2><br>Login</h2></center>
              </div>
              <div style="height: 100px; width: 50%; margin: 0 0 0 0;" class="block btn-dark register_btn">
                <center><h2><br>Register</h2></center>
              </div>
          </div> 
                  <!-- Login -->
                  <div class="modal-body login_form" style="height: 300px;">
                  <form action="/home" method="post">
                        <h1 style="color: gray;">Login</h1>
                        <!--username-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Username</span>
                          <input type="text" name="username" class="form-control" placeholder="Username or E-mail" aria-label="Username or E-mail" aria-describedby="basic-addon1">
                        </div>
                        <!--END username-->
                        <br>
                        <!--password-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Password</span>
                          <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <!--END password-->
                        <div><br>
                        <button  type="submit" name="send" value="login" class="btn btn-outline-success btn-lg">Loginnnnnnnn
                        </button>
                        </div>
                  </form>
                  </div>
                  <!-- Register -->
                  <div class="modal-body register_form" style="height: 400px;">
                  <form action="/register" method="post">
                        <h1 style="color: gray;">Register</h1>
                        <!--username-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">E-mail</span>
                          <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <!--END username-->
                        <br>
                        <!--username-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Username</span>
                          <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <!--END username-->
                        <br>
                        <!--password-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Password</span>
                          <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <!--END password-->
                        <br>
                        <!--confirm password-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
                          <input type="password" name="conpassword" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <!--END confirm password-->
                        <div><br>
                        <button type="submit" name="send" value="register" class="btn btn-outline-success btn-lg">Register</button> 
                        </div>
                  </form>
                  </div>

        </div>
      </div>
    </div>
  <!--End model for register-->

    



    <!---->
      <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/client.js')}}"></script>

    <script>
        $(function() {
            $('.sidenavbutton').on('click', function() {
                var currentpanel = $(this).attr('data-activbutton');
                $('#navbar-status').html(currentpanel);
            });
        });
        function ticket() {
                var images = $(this).attr('src');
                var ticketname = $(this).attr('data-ticketname');
                var ticketprice = $(this).attr('data-ticketprice');
                $('#ticket-head').html(ticketname);
                $('.modal-body' + ' #ticket-body').attr('src', images);
                $('.modal-body' + ' #ticket-price').html(ticketprice);
            }
    </script>

    <script>

    function openNav() {
        document.getElementById("menunav").style.width = "250px";
        document.getElementById("main").style.marginRight = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("menunav").style.width = "0px";
        document.getElementById("main").style.marginRight = "0px";
        document.body.style.backgroundColor = "white";
    }


    $('.login_btn').click(function(){
        $('.login_form').show();
        $('.register_form').hide();
    });
    $('.register_btn').click(function(){
        $('.login_form').hide();
        $('.register_form').show();
    });
    $('.hideit').click(function(){
        $('.register_form').hide();
    });
    </script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    </body>
</html>
