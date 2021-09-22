<?php include 'header.php' ?>

<head>
  <style>
    .admissions .card {
  border: 0;
  margin-bottom: 60px;
  padding: 0 30px;
  position: relative;
}

.admissions .card-body {
  background: #fff;
  border-top: 4px solid #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-top: -30px;
  padding: 30px;
  transition: 0.3s;
  z-index: 10;
}

.admissions .card:hover .card-body {
  border-color: #15A1DD;
}

.admissions .card-img {
  border-radius: 0;
  margin-left: -30px;
  overflow: hidden;
  width: calc(100% + 60px);
  z-index: 9;
}

.admissions .card-img img {
  max-width: 100%;
  transition: all 0.3s ease-in-out;
}

.admissions .card:hover img {
  transform: scale(1.1);
}

.admissions .card-text {
  color: #5e5e5e;
}

.admissions .card-title {
  font-weight: 700;
  margin-bottom: 20px;
  text-align: center;
}


/* Buttons in Cards */
.admissions .get-started-button {
  background: #15A1DD;
  border-radius: 50px;
  color: #fff;
  display: inline-block;
  font-size: 14px;
  margin-top: 5%;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
}

.admissions .get-started-button:hover {
  background: #15A1DD;
  color: #fff;
  text-decoration: none;
  transform: scale(1.1);
}

.trainers .member .ins_img {
            border-radius: 100%;
            width: 50%;
        }
  </style>
</head>


 <main id="main">
     <br></br>

     <!-- ======= Admission Tiles Section ======= -->
     <section id="admission-tiles">
        <div class="admissions container" data-aos="fade-up">
            <div class="row">
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                     <div class="card">
                         <div class="card-img">
                             <img src="assets/img/adm/4022164.jpg" alt="">
                         </div>
                         <div class="card-body">
                             <form action="" method="post">
                                 <h4 class="card-title">Request for Consultation</h1>
                                 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                     aliquip ex ea commodo consequat.</p>
                                 <div class='text-center'>
                                     <a href='#' class='get-started-button' id='buy' name='buy' type='submit'>Request</a>
                                 </div>
                             </form>                        
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                     <div class="card">
                         <div class="card-img">
                             <img src="assets/img/adm/4119036.jpg" alt="">
                         </div>
                         <div class="card-body">
                             <form action="" method="post">
                                 <h4 class="card-title">Take a Test</h1>                    
                                 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                     aliquip ex ea commodo consequat.</p>
                                 <div class='text-center'>
                                     <a href='test-form.html' class='get-started-button' id='buy' name='buy' type='submit'>Take Test</a>
                                 </div>
                             </form>                       
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                     <div class="card">
                         <div class="card-img">
                             <img src="assets/img/adm/applying.jpeg" alt="">
                         </div>
                         <div class="card-body">
                             <form action="" method="post">
                                 <h4 class="card-title">Apply for Program</h1>                       
                                 <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                                     ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                     aliquip ex ea commodo consequat.</p>
                                 <div class='text-center'>
                                     <a href='#' class='get-started-button' id='buy' name='buy' type='submit'>Apply</a>
                                 </div>
                             </form>                        
                         </div>
                     </div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Admissions</h2>
          <p>11th & 12th Grade</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/adm/adm1.png" class="img-fluid" alt="">
		
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Admissions by Utkarshini Edutech provides guidance and help that you need to get into Premier Institutes of Your choice for Undergrad degree!</h3>
            <p class="font-italic">
              We provide a range of course material made from our experts who have travelled the same path and succeeded in it.
	      <br>Our services include:
            </p>
            <ul>
			  <li><i class="icofont-check-circled"></i> For IPM, JIPMAT and other entrance exams.</li>
              <li><i class="icofont-check-circled"></i> Course Material.</li>
              <li><i class="icofont-check-circled"></i> Live Doubt Clearing Sessions.</li>
              <li><i class="icofont-check-circled"></i> Expert Guidance.</li>
              <li><i class="icofont-check-circled"></i> Resume and SOP Support.</li>
            </ul>
           <p>
              *No fees for students based on merits and financial background.
            </p>
            <a hreflang="en" href="https://api.whatsapp.com/send?phone=919889338610&text=Hi,%20can%20you%20please%20tell%20me%20more%20about%20the%20admission%20program%20for%2011th%20and%2012th%20grade%20students." class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	
	 <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Admissions</h2>
          <p>Undergraduate Students</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/adm/adm2.png" class="img-fluid" alt="">
		
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Admissions by Utkarshini Edutech provides guidance and help that you need to get into Premier Institutes of Your choice for postgraduate degree!</h3>
            <p class="font-italic">
              We provide a range of course material made from our experts who have travelled the same path and succeeded in it.
	      <br>Our services include:
            </p>
            <ul>
			  <li><i class="icofont-check-circled"></i> For MSc, BCA, MA, PGDBA other degree's.</li>
              <li><i class="icofont-check-circled"></i> Course Material.</li>
              <li><i class="icofont-check-circled"></i> Live Doubt Clearing Sessions.</li>
              <li><i class="icofont-check-circled"></i> Expert Guidance.</li>
              <li><i class="icofont-check-circled"></i> Resume and SOP Support.</li>
            </ul>
           <p>
              *No fees for students based on merits and financial background.
            </p>
            <a href="https://api.whatsapp.com/send?phone=919889338610&text=Hi,%20can%20you%20please%20tell%20me%20more%20about%20the%20admission%20program%20for%20undergraduate%20students." class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>About Us</h2>
            <p>Program Management</p>
            <h3>We have guidance providers from IITs and IIMs along with Direct Interaction with Students who have qualified for the programs in past years.</h3>
          </div>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="assets/img/adm/ins1.png" class="img-fluid ins_img" alt="">
                <div class="member-content">
                  <h4>Abhishek Kumar Jha</h4>
                  <span>Program Incharge</span>
                  <p>
                    
                  </p>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/abhishek-kumar-jha-1a0869122/"><i class="fab fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="assets/img/adm/ins2.png" class="img-fluid ins_img" alt="">
                <div class="member-content">
                  <h4>Manya Dubey</h4>
                  <span>Academic Associate</span>
                  <p>
                  </p>
                  <div class="social">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid ins_img" alt="">
                  <div class="member-content">
                    <h4>Kreena Shah</h4>
                    <span>Program Manager</span>
                    <p>
                      
                    </p>
                    <div class="social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                  <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid ins_img" alt="">
                  <div class="member-content">
                    <h4>Simran Khera</h4>
                    <span>Program Manager</span>
                    <p>
                      
                    </p>
                    <div class="social">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            
             </div>
  
        </div>
      </section><!-- End Trainers Section -->
	
	  </main><!-- End #main -->
  <?php include 'footer.php' ?>