<?php 
include('header.php');
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
		 $("#panel").hide();
    });
	
	
	 $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
		
    });
	
	
	
	
});
</script>

<style> 
#panel,#flip {
    padding: 5px;
    text-align: left;
    background-color: #9b9b9b;
    
}

#panel{
    padding: 10px;
    display: none;
}

#panel1,#flip1 {
    padding: 5px;
    text-align: left;
    background-color: #9b9b9b;
    
}

#panel1{
    padding: 10px;
    display: none;
}


</style>
</head>
<!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBannercareer">
      <h2>Career</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row">
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="courseArchive_content">
              <!-- start blog archive  -->
              <div class="row">
                <!-- start single blog archive -->
               <!-- <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp"  >
                    <div class="blogimg_container"  id="IP">
                      <a href="#" class="blog_img">
                        <img alt="img" src="img/ip.jpg">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="#"> Internship Program</a></h2>
                    
                    <p class="blog_summary">
We offer Internships for student community who are pursuing the degree and masters in Electronics, Communication, Computer science, Information science.....</p>
                   <a class="blog_readmore" id="flip">Read More</a>
					<div class="blog_summary" id="panel">
					<p>
1.The company is engaged in various product development across various 
   platforms in IT software real time and embedded systems development.
   Trainings on Computer languages like Java, Advance Java, Dotnet,
   Android , PHP , Cloud Computing ,  Web  Desinging with internship are provided with implementation on live projects.
   <p> 
  <p>
2.We would like to collaborate with engineering colleges for our research
    and development work so that we can support the  student community of   their  development  and  we  can  create  skilled        manpower to the     industry.
  </p><p>
3.Our aim to provide young professionals to gain exposure  to challenging work  environment during their academics.
</p>
<p>
4.<b>Duration of the internship: 3 to 6 months.</b>
  
					</p>
					
					
					</div>
                  </div>
				  
                </div>-->
               <!-- End single blog archive -->
                <!-- start single blog archive -->
                
                <div class="col-lg-12 col-12 col-sm-12">
                  <div class="single_blog_archive wow fadeInUp"  >
                    <div class="blogimg_container"  id="TP">
                      <a href="#" class="blog_img">
                        <img alt="img" src="img/ip.jpg">
                      </a>
                    </div>
                    <h2 class="blog_title"><a href="#"> Internship Program</a></h2>
                    
                    <p class="blog_summary">As an intern at OMM Software innovations you will great opportunity to jumpstart your career by applying your technical knowledge into real life applications like web application, prototype development, technical documentation, application development for different verticals. You will have the opportunity to be part of companies live project where you will learn to make decisions about design and feature implementation......</p>
                    <a class="blog_readmore" id="flip1">Read More</a><br><br>
					<div class="blog_summary" id="panel1">
					<P>1.The company is engaged in various product development across various 
   platforms in IT software real time and embedded systems development.
   Trainings on Computer languages like Java, Advance Java, Dotnet,
   Android , PHP , Cloud Computing ,  Web  Desinging with internship are provided with implementation on live projects.
   </p> 
  <p>
2.We would like to collaborate with engineering colleges for our research
    and development work so that we can support the  student community of   their  development  and  we  can  create  skilled        manpower to the     industry.
  </p><p>
3.Our aim to provide young professionals to gain exposure  to challenging work  environment during their academics.
</p>
<p>
4.<b>Duration of the internship: 3 to 6 months.</b></p>
					<pre>

Qualifications:

1. Pursuing a degree in Computer Science / IT engineering , or related field.
2. Creative and innovative.
3. Quick learners with a proven record of ramping up on new   concepts and    technologies.
4. Excellent communication, interpersonal and team building skills.
5. Leadership qualities and flexibility to adapt to new situations. 

					</pre>
					
					<a class="blog_readless" id="flip11">Read Less</a><br><br>
					</div>
                  </div>
				  
                </div>
				<!-- End single blog archive -->
				
              </div>
              <!-- end blog archive  -->
              <!-- start previous & next button -->
            <!--   <div class="single_blog_prevnext">
                <a href="#" class="prev_post wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"><i class="fa fa-angle-left"></i>Previous</a>
                <a href="#" class="next_post wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Next<i class="fa fa-angle-right"></i></a>
              </div> -->
            </div>
          </div> 
          <!-- End course content -->

          <!-- start course archive sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="courseArchive_sidebar">
              <!-- start single sidebar -->
               <!-- <div class="single_sidebar">
                <h2>Popular Events <span class="fa fa-angle-double-right"></span></h2>
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="img/news.jpg" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="img/news.jpg" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>                
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a href="#" class="news_img">
                          <img alt="img" src="img/news.jpg" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>                
                      </div>
                    </div>
                  </li>                  
                </ul>
              </div> -->
              <!-- End single sidebar -->
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Career Section <span class="fa fa-angle-double-right"></span></h2>
                <ul>
                  <li><a href="#IP">Internship Program</a></li><br>
                  <li><a href="#TP">Traning & Placement</a></li>
                 
				  
                </ul>
              </div>
              <!-- End single sidebar -->
              
              <!-- start single sidebar -->
              <div class="single_sidebar">
                <h2>Career Opportunities <span class="fa fa-angle-double-right"></span></h2>
                <a class="side_add" href="#"><img src="img/side-add5.jpg" alt="img"></a>
              </div>
              <!-- End single sidebar -->
            </div>
          </div>
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
	
	<?php 
include('footer.php');
?>