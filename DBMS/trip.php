


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trip Advisor</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">  
    <link rel="stylesheet" href="assets/css/main.css" />  
         
          <style>
          p{text-align: right;
        
        }
        </style>
</head>

    <body>
        

        <!-- Nav -->
            
                <p>
        <a href="home2.html">Home--</a>
                    <a href="http://localhost/DBMS/search.php">Search--</a>
                    <a href="http://localhost/DBMS/trip.php">Trip Advisor--</a>
                    <a href="\template3\photogallery.html">Photo Gallery--</a>
                    <a href="http://localhost/DBMS/login.php">Log out</a>
        </p>
        

        
                    
             

        <div class="container-fluid">
            
            
            <!-- Section 1 -->
            <section class="tm-section tm-section-info1" id="about">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Bandipur National Park, Karnataka</h2>
                            <p>Bandipur National Park established in 1974 as a tiger reserve under Project Tiger.</p>
                            <p>Bandipur National Park helps protect several species of India's
                             endangered wildlife and also provides refuge to other threatened 
                             and vulnerable species of flora and fauna.</p> 
                            <p>Main attractions are Bandipur endangered and vulnerable
                             species like Indian elephants, gaurs, tigers, sloth bears
                             muggers, Indian rock pythons, four-horned antelopes, jackals
                              and dholes.The commonly seen mammals along the public access
                               roads in the park include chital, gray langurs,
                                Indian giant squirrels and elephants. </p> 
                        </div>                        
                    </div>                    
                </div>
                
            </section>
            
            <!-- Section 2 -->
            <section class="tm-section tm-section-info2" id="services">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title"> Keoladeo Ghana National Park – Bharatpur, Rajasthan</h2>
                            <p>It's one of the historical national park in India.
                            It is a famous avifauna sanctuary that hosts
                               thousands of birds, especially during the winter season.
                                Over 230 species of birds are known to be resident. </p>
                            <p>It is also a major tourist centre
                             with scores of ornithologists arriving here
                              in the hibernal season.</p>
                            <p>Attractions are Nilgai, feral cattle, 
                                and chital deer.Wild boar and Indian 
                                porcupine are often spotted sneaking out 
                                of the Park to raid crop fields. Cat species
                                 present include the jungle cat and the fishing cat. 
                                 
                                  </p>
                        </div>                        
                    </div> 
                </div>                
            </section>

            <!-- Section 3 -->
            <section class="tm-section tm-section-info3" id="about">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Nagarhole National Park, Karnataka</h2>
                            <p>It is a national park located in Kodagu district and 
                                Mysore district in Karnataka state in South India.</p>
                            <p>The park has rich forest cover, small streams, 
                                hills, valleys and waterfalls. The park has 
                                 healthy predator-prey ratio, with many tigers, 
                                 Indian bison and elephants.</p> 
                            <p>he park protects the wildlife of Karnataka. 
                                The important predators and carnivores in 
                                Nagarhole National Park are the Bengal tiger, 
                                Indian leopard, Ussuri dhole , 
                                sloth bear and the striped hyena 
                                The herbivores are chital, sambar deer, barking deer, 
                                four-horned antelope, gaur 
                                  , wild boar and Indian elephant.
                                 </p>  
                        </div>                        

                    </div>                    
                </div>
                
            </section>
            
            <!-- Section 4 -->
            <section class="tm-section tm-section-info4" id="services">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Corbett National Park,Uttrakhand</h2>
                            
                            
                            <p>It was established in 1936 to protect
                             the imposing Bengal Tigers. Located at the 
                             foothills of the Himalayan range of Uttarakhand, 
                             Corbett National Park is one of the hot spots of 
                             the wildlife lovers.</p>
                            <p>Main attractions are Corbett Safari,
                                Go Wild Adventure Park,Kosi River,Gayatri Devi Temple</p>
                            <p>More than 586 species of resident and
                             migratory birds have been categorised, 
                             including the crested serpent eagle, 
                             blossom-headed parakeet and the red junglefowl — 
                             ancestor of all domestic fowl.

                             </p>
                        </div>                        
                    </div> 
                </div>                
            </section>
            

            <!-- Section 5 -->
            <section class="tm-section tm-section-search" id="contact">
                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact tm-content-box  tm-content-box-right">
                        <h2 class="tm-section-title">Search</h2>
                        
                        <!-- contact form -->
                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <div class="form-group">

                                <input type="text" id="contact_name" name="search-item" class="form-control" placeholder="Find"  required/>
                                <br>

                                
                                <input type="submit" class="tm-submit-btn" value="GO">
                            </div>

                
                            
                        
                        </form>  
                    </div>

                </div>
    </div>

    <?php 

    $para1 = $name = $loc = $info = "";

    $search = $_POST["search-item"];

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $sql = new mysqli("localhost","root","system","wildandfree");

        $found=$sql->query("select * from parks where name='$search'");
    if($found->num_rows>0)
    {
        $q=$sql->query("select * from parks where name='$search'");
        $out=$q->fetch_assoc();
        $para1 = $out["attractions"];
    $name=$out["name"];
    $loc=$out["location"];
    $info = $out["info"];
    }
    }


    ?>
                                
            </section>
            


            <section class="tm-section tm-section-result" id="services">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-flex-center">
                        <div class="tm-content-box-inner"> 
                             
                            <h2 class="tm-section-title"></h2>
                            <p><?php echo $name; ?></p>
                            <p><?php echo $loc; ?></p>
                            <p><?php echo $para1; ?></p>
                            <p><?php echo $info; ?></p>
                        </div>                        
                    </div> 
                </div> 
                
                
                             
            </section>

        
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <script>     
          
            // Check scroll position and add/remove background to navbar
            function checkScrollPosition() {
                
                if($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if($(window).scrollTop() > 50) {
                  $(".tm-nav").addClass("scroll");
              } else {        
                  $(".tm-nav").removeClass("scroll");
              }
            }

            $(document).ready(function () {   
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true        
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function(){
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function(){
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function() {
                checkScrollPosition();    
            });

            $('#tmNavbar a').click(function(){
                $('#tmNavbar').collapse('hide');
            });
        </script>

        <footer id="footer">
                <div class="copyright">
                    IWP project by<br> Ishita Jaju<br>Meghna Lohani<br> Pooja Uplanchiwar
                </div>
            </footer>
       
</body>
</html>