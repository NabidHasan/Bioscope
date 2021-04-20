
<?php
  session_start();
  
  $newName= $_SESSION["name"] ;
  if(empty($_SESSION["name"])){
    header("Location: loginpage.php");
  }
 
  


  ?>

<!doctype html>
<html lang="en">
  <head>

  

    <title>www.Bioscope.com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Clientsite.css">
  </head>
  <body>
    <video id="backgroundVideo" autoplay muted loop>
      <source src="videos/MONSTER HUNTER Official Trailer (2020) Milla Jovovich, Action Movie HD.mp4" />

  </video>

  <div class="container-flued mainBody">



      <!--free space-->
      <div class="row ">

          <div class=" MainHeader ">
              <div align="right" id="loginsection">
              <h8 id="name"><?php echo($newName)  ?></h8>

                  <a href="logout.php" action="logout.php" onclick="clickEvent" id="loginbutton" class="btn btn-outline-light loginbtn">Log Out</a>

              </div>
              <div aligh="center" style="padding:200px;font-size:18px;background-color:black;opacity:1;">
                  <p>After watching the movie Zombieland I noticed that it was a very gory film, but I didn’t find it scary just very disgusting. It was interesting to see that only a hand full of humans survived the violence from the zombies. In the movie Columbus struggled to survive because before the zombies took over he was full of anxiety and was very fearful of being around people. He made a list of things on what to do to survive in the world, but the zombies overrode everything that was on his list. For example the comedy part in the movie had to do with these items that he has listed like, #1 Cardio- he said that if you can’t run then you can’t outrun a bear just your buddy and he said that the fatties were among the first to go because they are easy to catch. A few of the other list was “Beware of the bathroom” and always “Double tap.” That’s more of a comedy part of the movie. Columbus had other things that he had written on his list that made me laugh and that were very comical in the entire movie. The horror part of the movie had to do with the character Tallahassee was the guy that no one wanted to mess with, his job was shooting and killing zombies he had more of the horror parts of this movie and his character clearly enjoyed killing these zombies. But in all of this violence all he really wanted was his twinkles. This film was a lot of fun, but the ending dragged on they could have cut out a few scene. The next film was Shaun of the dead, this movie was a little different I thought this movie was more horror instead of comedy and it also had a few romance scene that kind of threw me off. The details in this film were great, especially in the scene where they are in the bar and Kevin is fed up with everything and he goes out the doors and the zombies attack him they start to rip Kevin’s limbs apart as if his body was piece of paper and eating his guts. I think this movie offered a lot of entertainment when it comes to a little bit of romance a lot of horror scene and when it comes to the realistic interpretation of these zombies. The director really took pride in this movie and in making these zombies come to life. The language and the facial expressions that the character used in this film made it really funny and extremely amusing. Clearly after watching both of these amazing films I think that my reason for selecting the genre that I did is because I don’t think that these movies can fall under comedy genre. I laughed a lot and saw gory things in both movies. But it does not fall into a specific existing genre it falls into a mixture of comedy, horror and zombie which I would define it as a horror; zombie comedy genre assuming it’s a genre. There were moments in each film that did scare me but not enough to call it a horror film.</p>
              </div>

          </div>
      </div>


      <!--Main logo-->
      <h1 class="logo">Bioscope</h1>

      <!--navigation barr div-->
      <div class="row navbarr">
          <nav class="navbar navbar-expand-lg  ">
              <a class="navbar-brand brandname" href="Index.html">Bioscope</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse navitems" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                          <a href="Index.html" class="nav-link nv" href="/Views/HtmlPage1.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                          <a href="Index.html" id="all"class="nav-link nv" href="#">All <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                          <a href="#" id="hollywood"  class="nav-link  nv">Hollywood</a>
                      </li>

                      <li class="nav-item ">
                          <a href="#" id="bollywood" class="nav-link  nv">Bollywood</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" id="tamil" class="nav-link  nv">Tamil</a>
                      </li>
                      <li class="nav-item">
                          <a href="#" id="bangla" class="nav-link  nv">Bangla</a>
                      </li>

                      <li class="nav-item">
                          <a href="#" id="about" class="nav-link  nv">About us</a>
                      </li>

                  </ul>
                  
              </div>
          </nav>
          <form  class="form-inline my-2 my-lg-0 " id="search">
            <input style="width:500px ;" class="form-control mr-sm-2"  type="search"  placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>

        <!--main container-->
        <div id="container" class="row sticky">
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Monster Hunter.jpeg" style="height:auto;width:100%" controls>
                    <source src="videos/MONSTER HUNTER Official Trailer (2020) Milla Jovovich, Action Movie HD.mp4" />
        
                </video>
                <div class="card-body">
                    <h4>Monster hunter</h4>
                   
        
                </div>
            </div>
        </div>
        
        
        <!--tow-->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/battleship.jpg"height:auto;width:100%" controls>
               
                        <source src="videos/Battleship _ The Final Battle in 4K HDR.mp4" type="video/mp4" />
                   
                </video>
                <div class="card-body">
                    <h4>BAttleship_The final Battle</h4>
        
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/Highway.JPG" style="height:auto;width:100%" controls>
                  
                      <source src="videos/Bollywood/yt1s.com - Highway  Official Trailer  Alia Bhatt Randeep Hooda  Imtiaz Ali_720p.mp4" type="video/mp4" />
                  </video>
                  
              <div class="card-body">
                  <h4>Highway</h4>
      
      
              </div>
          </div>
       </div>
      
      
       <!--tow-->
       <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/de de pyaar de.JPG" style="height:auto;width:100%" controls>
      
                      <source src="videos/Bollywood/De De Pyaar De - Official Trailer _ Ajay Devgn, Tabu, Rakul Preet Singh _ Akiv Ali _ 17 May.mp4" type="video/mp4" />
                 
              </video>
              <div class="card-body">
                  <h4>De De Pyaar De </h4>
      
              </div>
          </div>
       </div>

          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/ayaalan.JPG" style="height:auto;width:100%" controls>
                    <source src="videos/Tamil/AYALAAN Official Trailer I Sivakarthikayan I Rakul Preeth Singh I A.R.Rahman I R.Ravi.mp4" />

                </video>
                <div class="card-body">
                    <h4>AYALAAN </h4>
                   

                </div>
            </div>
        </div>
        <!--three-->
<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/Avater2.jpg" controls="controls" style="height:auto;width:100%" controls>
              <source src="videos/AVATAR 2 - Official Trailer _ James Cameron _ Avatar 2 _ Official _ Trailer.mp4" type="video/mp4" />                         
      </video>

      <div class="card-body">
          <h4>Avater 2</h4>

      </div>
  </div>
</div>

<!--four-->


<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/kong.jpg" style="height:auto;width:100%" controls>                           
              <source src="videos/Kong_ Skull Island (2017) - Kong vs. Giant Squid Scene (3_10) _ Movieclips (1).mp4" type="video/mp4" />                        
      </video>
      <div class="card-body">
          <h4>Kong Skull Island(2017)</h4>

      </div>
  </div>
</div>

<!--five-->


<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/mortal combat.jpg" style="height:auto;width:100%" controls>                          
              <source src="videos/MORTAL KOMBAT Trailer (2021).mp4" type="video/mp4" />
          </video>
      <div class="card-body">
          <h4>Mortal Kombat (2021)</h4>

      </div>
  </div>
</div>


        <!--tow-->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/baghera.JPG"  height:auto;width:100%" controls>
               
                        <source src="videos/Tamil/Bagheera Official Teaser _ Prabhu Deva _ Amrya Dastur _ Adhik Ravichandran _ Bharathan Pictures.mp4" type="video/mp4" />
                   
                </video>
                <div class="card-body">
                    <h4>Bagheera </h4>

                </div>
            </div>
        </div>


        <!--three-->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/carnan.JPG" controls="controls" style="height:auto;width:100%" controls>
                        <source src="videos/Tamil/CHAKRA - Tamil Sneak Peek _ Vishal _ Shraddha Srinath _ Yuvan Shankar Raja _ VFF.mp4" type="video/mp4" />                         
                </video>

                <div class="card-body">
                    <h4>Chakra</h4>

                </div>
            </div>
        </div>
<!--three-->
 <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <video poster="Poster/bollywood/kgf.JPG" style="height:auto;width:100%" controls >

                <source src="videos/Bollywood/KGF Trailer Hindi _ Yash _ Srinidhi _ 21st Dec 2018.mp4" type="video/mp4" />
        </video>

        <div class="card-body">
            <h4>KGF</h4>

        </div>
    </div>
 </div>

 <!--four-->


 <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <video poster="Poster/bollywood/coli no 1.JPG" style="height:auto;width:100%" controls>

           
                <source src="videos/Bollywood/Coolie No 1 _ Official Trailer _ Varun Dhawan _ Sara Ali Khan _ David Dhawan _ 25th December 2020.mp4" type="video/mp4" />
            </video>
        
        <div class="card-body">
            <h4>COLI NO 1</h4>

        </div>
    </div>
 </div>

  <!--five-->


 <div class="col-12 col-md-6 col-lg-4 mb-4">
    <div class="card">
        <video poster="Poster/bollywood/fighter.JPG" style="height:auto;width:100%" controls>

          
                <source src="videos/Bollywood/Fighter _ Official Trailer _ Hrithik Roshan (2022) - Siddharth Anand _ Action thriller.mp4" type="video/mp4" />
            </video>
        
        <div class="card-body">
            <h4>FIGHTER</h4>

        </div>
    </div>
 </div>
        <!--four-->


        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/Eeswaran.JPG" style="height:auto;width:100%" controls>                           
                        <source src="videos/Tamil/Eeswaran Official Trailer _ Silambarasan TR _ Susienthiran _ Thaman S _ #Eeswaran.mp4" type="video/mp4" />                        
                </video>
                <div class="card-body">
                    <h4>Eeswaran</h4>

                </div>
            </div>
        </div>

        <!--five-->


        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/introduching pushpa.JPG" style="height:auto;width:100%" controls>                          
                        <source src="videos/Tamil/Introducing Pushpa Raj _ Allu Arjun _ Pushpa _ Rashmika _ Fahadh Faasil _ DSp _ Sukumar.mp4" type="video/mp4" />
                    </video>
                <div class="card-body">
                    <h4>Introducing Pushpa</h4>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/transformer.jpeg" style="height:auto;width:100%" controls>
      
                  
                      <source src="videos/Transformers_ Dark of the Moon (2011) - Freeway Chase - Only Action [4K].mp4" type="video/mp4" />
                 
      
              </video>
              <div class="card-body">
                  <h4>Transformer - dark of the moon</h4>
      
              </div>
          </div>
      </div>
      
      <!--seven-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/Ramy 2.JPG" style="height:auto;width:100%" controls>
      
                  
                      <source src="videos/RAMY 2 Trailer (2020).mp4" type="video/mp4" />
                  
      
              </video>
              <div class="card-body">
                  <h4>RAmy -2 (2020)</h4>
      
              </div>
          </div>
      </div>
      
      <!--eight-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/the great wall.jpeg" style="height:auto;width:100%" controls>
      
                      <source src="videos/The Great Wall - Opening Battle (2016).mp4" type="video/mp4" />
                  
      
              </video>
              <div class="card-body">
                  <h4>The Great Wall -Opening Bettle(2016)</h4>
      
              </div>
          </div>
      </div>
      
      <!--nine-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/Thor 4 love and thunder.jpg" style="height:auto;width:100%" controls>
      
                      <source src="videos/Thor 4 love and thunder Official Trailer _ new movie 2021 hollywood Concept.mp4" type="video/mp4" />
                  
              </video>
              <div class="card-body">
                  <h4>Thor 4 love and thunder</h4>
      
              </div>
          </div>
      </div>
      
      <!--ten-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/venom 2.jpg" style="height:auto;width:100%" controls>
      
                      <source src="videos/VENOM 2 (2021) LET THERE BE CARNAGE — First Trailer Concept _ Tom Hardy _ Woody Harrelson.mp4" type="video/mp4" />
              </video>
      
              <div class="card-body">
                  <h4>Venom 2 (2021) Let ther carnage</h4>
      
              </div>
          </div>
      </div>
      
      <!--eliven-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/Logan.jpeg" style="height:auto;width:100%" controls>
                
                      <source src="videos/Logan_ The Wolverine Return 'Teaser Trailer'(2021) Hugh Jackman, Ryan Reynolds, Dafne Knee _Concept_.mp4" type="video/mp4" />
                  </video>
              
              <div class="card-body">
                  <h4>Logan The Wolverne Return (2021)</h4>
      
              </div>
          </div>
      </div>
      
      <!--twelve-->
      
      <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/justice.jpg" style="height:auto;width:100%" controls>
                
                      <source src="videos/JUSTICE LEAGUE_ The Snyder Cut Trailer 2 (2021).mp4" type="video/mp4" />
                  </video>
             
              <div class="card-body">
                  <h4>Justice League_The Snyder cut(2021)</h4>
      
              </div>
          </div>
      </div>

        <!--six-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/jagame.JPG" style="height:auto;width:100%" controls>

                    
                        <source src="videos/Tamil/Jagame Thandhiram _ Teaser _ Dhanush, Aishwarya Lekshmi _ Karthik Subbaraj _ Netflix India.mp4" type="video/mp4" />
                   

                </video>
                <div class="card-body">
                    <h4>Jahame</h4>

                </div>
            </div>
        </div>

        <!--seven-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/carnan.JPG" style="height:auto;width:100%" controls>

                    
                        <source src="videos/Tamil/Karnan Official Teaser _ Dhanush _ Mari Selvaraj _ Santhosh Narayanan _ V Creations.mp4" type="video/mp4" />
                    

                </video>
                <div class="card-body">
                    <h4>Karnan</h4>

                </div>
            </div>
        </div>

        <!--eight-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/Queen.JPG" style="height:auto;width:100%" controls>

                        <source src="videos/Tamil/QUEEN _ Official Trailer _ MX Original Series _ Ramya Krishnan _ Gautham Vasudev Menon.mp4" type="video/mp4" />
                    

                </video>
                <div class="card-body">
                    <h4>Queen</h4>

                </div>
            </div>
        </div>

        <!--nine-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/sima.JPG" style="height:auto;width:100%" controls>

                        <source src="videos/Tamil/Sema Thimiru 4K Tamil Trailer _ Dhruva Sarja _ Rashmika Mandanna _ Nanda Kishore _ Chandan Shetty.mp4" type="video/mp4" />
                    
                </video>
                <div class="card-body">
                    <h4>Sema Thimiru</h4>

                </div>
            </div>
        </div>

        <!--ten-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/sultan.JPG" style="height:auto;width:100%" controls>

                        <source src="videos/Tamil/SULTHAN - Official Trailer (Tamil) _ Karthi, Rashmika _ Vivek - Mervin _ Bakkiyaraj Kannan _ 4K.mp4" type="video/mp4" />
                </video>

                <div class="card-body">
                    <h4>Sultan</h4>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/kgf 2.JPG" style="height:auto;width:100%" controls>
      
                      <source src="videos/Bollywood/K.G.F Chapter 2 Official Trailer _ Yash _ Srinidhi Shetty _ Sanjay Dutt _ Prashanth N _ Concept 2020.mp4" type="video/mp4" />
                  </video>
              <div class="card-body">
                  <h4>KGF - 2</h4>
      
              </div>
          </div>
       </div>
      
        <!--seven-->
      
       <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/time to dance.JPG" style="height:auto;width:100%" controls>
      
                      <source src="videos/Bollywood/Time To Dance_ Official Trailer _ Sooraj Pancholi _ Isabelle Kaif _ T-Series _ Releasing 12th March (1).mp4" type="video/mp4" />
                  </video>
              <div class="card-body">
                  <h4>Time to dance</h4>
      
              </div>
          </div>
       </div>
      
       <!--eight-->
      
       <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/shandaar.JPG" style="height:auto;width:100%" controls>
                      <source src="videos/Bollywood/Shaandaar _ Official Trailer _ Alia Bhatt & Shahid Kapoor.mp4" type="video/mp4" />
                  </video>
              <div class="card-body">
                  <h4>Shaandaar </h4>
      
              </div>
          </div>
       </div>
      
       <!--nine-->
      
       <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card">
              <video poster="Poster/bollywood/good newz.JPG" style="height:auto;width:100%" controls>
                      <source src="videos/Bollywood/Good Newwz - Official Trailer _ Akshay, Kareena, Diljit, Kiara _ Raj Mehta _ In cinemas 27th Dec.mp4" type="video/mp4" />
                  </video>
              <div class="card-body">
                  <h4>Good Newwz</h4>
      
              </div>
          </div>
       </div>
      

        <!--eliven-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/tedy.JPG" style="height:auto;width:100%" controls>
                  
                        <source src="videos/Tamil/Teddy Official Trailer 🧸 - Tamil _ Arya, Sayyeshaa _ D. Imman _ Shakti Soundar Rajan.mp4" type="video/mp4" />
                    </video>
                
                <div class="card-body">
                    <h4>Teddy</h4>

                </div>
            </div>
        </div>
        <!--ten-->

 <div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/bollywood/flesh.JPG" style="height:auto;width:100%" controls>

              <source src="videos/Bollywood/FLESH Official Trailer _ Eros Now Originals _ Swara Bhasker _ Streaming Now.mp4" type="video/mp4" />
          </video>

      <div class="card-body">
          <h4>FLESH</h4>

      </div>
  </div>
</div>

<!--eliven-->

<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/bollywood/Mahavarat.JPG" style="height:auto;width:100%" controls>

              <source src="videos/Bollywood/Mahabharat - Trailer _ Aamir Khan _ Hrithik Roshan _ Prabhas _ Deepika Padukone _ Rajamouli.mp4" type="video/mp4" />
          </video>

      <div class="card-body">
          <h4>Mahavarat</h4>

      </div>
  </div>
</div>

<!--twelve-->

<div class="col-12 col-md-6 col-lg-4 mb-4">
  <div class="card">
      <video poster="Poster/bollywood/herro.JPG" style="height:auto;width:100%" controls>

          
      
          <source src="videos/Bollywood/Hero _ Official Trailer With English Subtitles _ Sooraj Pancholi & Athiya Shetty _ Salman Khan.mp4" type="video/mp4" />
      </video>

      <div class="card-body">
          <h4>HERRO</h4>

      </div>
  </div>
</div>

        <!--twelve-->

        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <video poster="Poster/Tamil/wild dog.JPG" style="height:auto;width:100%" controls>
                  
                        <source src="videos/Tamil/Wild Dog Trailer _ AkkineniNagarjuna _ Saiyami Kher _ Ahishor Solomon _ Niranjan Reddy.mp4" type="video/mp4" />
                    </video>
               
                <div class="card-body">
                    <h4>Wild Dog</h4>

                </div>
            </div>
        </div>



         </div>
         <!--end main container-->
          


     

    </div>



  
  
 

    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="scriptone.js"></script>
  </body>
</html>