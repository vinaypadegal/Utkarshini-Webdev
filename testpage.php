<?php include 'header.php' ?>

<head>
  <style>
    .test-page-back-div h1,
h2,
h3,
h4,
h5,
h6 {
  color: rgb(8, 68, 129);
  font-family: 'Raleway', sans-serif;
  font-weight: 700;
}

.test-page-back-div p,
label {
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}

.test-page-back-div {
  background-image: linear-gradient(to top right, #4d79ff, #00ffff);
  border-radius: 1%;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin: auto;
  width: 80%;
}

.test-page-back-div .carousel-item {
  margin: 6% auto 8%;
  padding: 0 8% 8% 12%;
  width: 100%;
}

/* Progress Bar */

.test-page-back-div .prog {
  margin: auto;
  padding: 3% 0 0;
  text-align: center;
}

.test-page-back-div .progbar {
  color: rgb(8, 68, 129);
  /* #084581 */
  margin-top: 1%;
  width: 90%;
}

/* Question */

.test-page-back-div .question {
  margin-bottom: 5%;
}

/* MCQ Option */

.test-page-back-div .qinp {
  background-color: white;
  border-radius: 5px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  max-width: 70%;
  min-width: 50%;
  padding: 1% 1% 0.5%;
  position: relative;
}

/* Hide the browser's default radio button */
.test-page-back-div .qinp input {
  cursor: pointer;
  height: 0;
  opacity: 0;
  position: absolute;
  width: 0;
}

.test-page-back-div .qinp:hover {
  cursor: pointer;
  transform: scale(1.01);
}

.test-page-back-div .qinp span:hover {
  cursor: pointer;
}

.test-page-back-div .qinp label:hover {
  cursor: pointer;
}

.test-page-back-div .label-option {
  margin-left: 40px;
  margin-top: 3px;
}

.test-page-back-div .rd-btn {
  background-color: aliceblue;
  border-radius: 50%;
  color: rgb(8, 68, 129);
  height: 22px;
  position: absolute;
  left: 11px;
  top: 10px;
  text-align: center;
  width: 22px;
}

/* Previous and Next Buttons */

.test-page-back-div .btn-primary.btn {
  background: #5279f0 !important;
  background-image: -webkit-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -moz-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -ms-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -o-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: linear-gradient(to bottom, #5279f0, #1f6dba) !important;
}

.test-page-back-div .btn-primary.btn:hover {
  transform: scale(1.05);
}

.test-page-back-div .btn {
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  font-size: 20px;
  padding: 5px 30px 5px 30px;
  text-decoration: none;
  text-shadow: 0px 0px 3px #666666;
}

.test-page-back-div .btn h5 {
  color: white;
  margin-top: 10%;
}

.test-page-back-div .nextbtn {
  position: absolute;
  bottom: -25px;
  right: 24%;
}

/* .test-page-back-div .prevbtn {
  position: absolute;
  bottom: -25px;
  left: 23%;
} */

/* Slider */

.test-page-back-div .range-value {
  margin: 4% auto 2%;
  text-align: center;
}

.test-page-back-div .slide-container {
  background-color: white;
  border-radius: 5px;
  margin: 3%;
  padding: 6% 2% 2%;
  width: 90%;
}

.test-page-back-div .slider {
  -webkit-appearance: none;
  background: linear-gradient(to right, rgb(66, 204, 66) 0%, rgb(66, 204, 66) 50%, aliceblue 50%, aliceblue 100%);
  border-radius: 10px;
  height: 10px;
  outline: none;
  width: 100%;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.test-page-back-div .slider::-webkit-slider-thumb:hover {
  transform: scale(1.05);
}

.test-page-back-div .slider::-webkit-slider-thumb {
  appearance: none;
  -webkit-appearance: none;
  background: rgb(8, 68, 129);
  border-radius: 100%;
  cursor: pointer;
  height: 20px;
  width: 20px;
}

.test-page-back-div .slider::-moz-range-thumb {
  cursor: pointer;
  height: 25px;
  width: 25px;
}

.test-page-back-div .slider::-moz-range-progress {
  background-color: rgb(66, 204, 66);
}

@media (max-width: 770px) {

  .test-page-back-div {
    padding-top: 25px;
  }

.test-page-back-div .carousel-item {
  text-align: center;
  padding: 0 8% 8%;
  margin-bottom: 0;
}

.test-page-back-div .btn {
  position: static;
  display: block;
}

/* .test-page-back-div .prevbtn {
  margin: 10% auto 0;
} */

.test-page-back-div .nextbtn {
  margin: 6% auto 0;
}

.test-page-back-div .qinp {
  margin: auto;
}

.test-page-back-div .label-option {
  margin-left: 0;
}

}
  </style>
</head>


<main id="main">
<section id="test-page">
    <div class="test-page-back-div">
        <div id="questionCarousel" class="carousel slide" data-interval="false">
            <div class="prog">
              <h4 id="qtitle">Question 1/15</h4>
              <progress class="progbar" id="progbar" value="0" max="100"></progress>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">              
                <h3 class="question">Q1)  A does a work in 5 days. B days the same work in 6 days. If they start the work together, 
                  how many days will they take to finish it?</h3>
                <div class="qinp">                
                  <label class="label-option" for="q1o1">15/4
                    <input type="radio" name="q1" id="q1o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q1o2">22/5
                    <input type="radio" name="q1" id="q1o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q1o3">30/11
                    <input type="radio" name="q1" id="q1o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q1o4">11/30
                    <input type="radio" name="q1" id="q1o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <!-- <button type="button" class="btn btn-primary btn-lg prevbtn" href="#questionCarousel" role="button" data-slide="prev"><h5>Previous</h5></button>  kept this commented just in case you decide to include the prev button back-->
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q2)  If a number x when divided by 2 leaves a remainder 1, and when divided by 5 leaves a 
                  remainder 3, then what is the remainder it leaves when divided by 10?</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q2o1">2
                    <input type="radio" name="q2" id="q2o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q2o2">3
                    <input type="radio" name="q2" id="q2o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q2o3">7
                    <input type="radio" name="q2" id="q2o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q2o4">4
                    <input type="radio" name="q2" id="q2o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">                
                <h3 class="question">Q3)  (43)<sub>x</sub> = (23)<sub>10</sub>. Find x.</h3>
                <div class="qinp">
                  <label class="label-option" for="q3o1">2
                    <input type="radio" name="q3" id="q3o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">
                  <label class="label-option" for="q3o2">6
                    <input type="radio" name="q3" id="q3o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                  
                  <label class="label-option" for="q3o3">8
                    <input type="radio" name="q3" id="q3o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>              
                <br>
                <div class="qinp">                 
                  <label class="label-option" for="q3o4">5
                    <input type="radio" name="q3" id="q3o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>  
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">            
                <h3 class="question">Q4)  An intelligent agency forms a code from 2 distinct digits from 0, 1, 2...9 such that
                  first digit of the code is non-zero. The code, handwritten on a slip, can however potentially create confusion; 
                  for eg, the code 91 may appear as 16. How many codes are there for which no confusion can arise?</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q4o1">61
                    <input type="radio" name="q4" id="q4o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q4o2">71
                    <input type="radio" name="q4" id="q4o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q4o3">69
                    <input type="radio" name="q4" id="q4o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q4o4">65
                    <input type="radio" name="q4" id="q4o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q5)  When asked as to how many guavas Lovely has, she replies "If you add three quarters of 
                  the number of guavas that I have to three quarters of 1, then you will get the number of guavas that I have." How
                  many guavas does Lovely have?</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q5o1">3
                    <input type="radio" name="q5" id="q5o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q5o2">6
                    <input type="radio" name="q5" id="q5o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q5o3">4
                    <input type="radio" name="q5" id="q5o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q5o4">5
                    <input type="radio" name="q5" id="q5o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q6)  As the airplane sped toward Earth during the dardevil air acrobatics show, the crowd grew
                  more ______ with each passing moment.</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q6o1">apprehensive
                    <input type="radio" name="q6" id="q6o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q6o2">weary
                    <input type="radio" name="q6" id="q6o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q6o3">distraught
                    <input type="radio" name="q6" id="q6o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q6o4">confounded
                    <input type="radio" name="q6" id="q6o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q7)  The ______ effects of smoking have costs untold sums, both personal and societal, 
                  notwithstanding the Surgeon General's ______ warning on each package for years.</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q7o1">negative, modest
                    <input type="radio" name="q7" id="q7o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q7o2">unhealthy, understated
                    <input type="radio" name="q7" id="q7o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q7o3">addictive, poignant
                    <input type="radio" name="q7" id="q7o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q7o4">deleterious, blatant
                    <input type="radio" name="q7" id="q7o4" oninput="handle(this.name)">
                    <span class="rd-btn">D</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q8)  There is a growing belief among psychologists that the ______ shown the first time 
                  offender tends to do little but ______ many youths to begin a pattern of breaking the law.</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q8o1">loathing, foster
                    <input type="radio" name="q8" id="q8o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q8o2">clemency, encourage
                    <input type="radio" name="q8" id="q8o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q8o3">nurturing, thwart
                    <input type="radio" name="q8" id="q8o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q8o4">harshness, predispose
                    <input type="radio" name="q8" id="q8o4" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q9)  Her ______ demeanour was understandable given the loss of her brother; indeed, most
                  of us were rather ______.</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q9o1">lachrymose, dolorous
                    <input type="radio" name="q9" id="q9o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q9o2">reprehensible, enigmatic
                    <input type="radio" name="q9" id="q9o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q9o3">determined, committed
                    <input type="radio" name="q9" id="q9o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q9o4">displaced, focused
                    <input type="radio" name="q9" id="q9o4" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">             
                <h3 class="question">Q10)  As I was describing my encounter with the alien, he had the most ______ stare, as if
                  he didn't believe a word i was saying.</h3>
                <div class="qinp">                 
                  <label class="label-option" for="q10o1">dumbfounded
                    <input type="radio" name="q10" id="q10o1" oninput="handle(this.name)">
                    <span class="rd-btn">A</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q10o2">amazing
                    <input type="radio" name="q10" id="q10o2" oninput="handle(this.name)">
                    <span class="rd-btn">B</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q10o3">incredulous
                    <input type="radio" name="q10" id="q10o3" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <br>
                <div class="qinp">                
                  <label class="label-option" for="q10o4">obdurate
                    <input type="radio" name="q10" id="q10o4" oninput="handle(this.name)">
                    <span class="rd-btn">C</span>
                  </label>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q11)  How much do you like/understand probability?</h3>
                <div class="slide-container">
                  <input type="range" min="0" max="10" value="5" class="slider" id="q11range">
                  <h4 class="range-value" id="q11num">5/10</h4>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">                
                <h3 class="question">Q12)  How much do you like/understand algebra?</h3>
                <div class="slide-container">
                  <input type="range" min="0" max="10" value="5" class="slider" id="q12range">
                  <h4 class="range-value" id="q12num">5/10</h4>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">              
                <h3 class="question">Q13)  How much do you like/understand business and its working?</h3>
                <div class="slide-container">
                  <input type="range" min="0" max="10" value="5" class="slider" id="q13range">
                  <h4 class="range-value" id="q13num">5/10</h4>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">                
                <h3 class="question">Q14)  How much do you like/understand economics?</h3>
                <div class="slide-container">
                  <input type="range" min="0" max="10" value="5" class="slider" id="q14range">
                  <h4 class="range-value" id="q14num">5/10</h4>
                </div>
                <button type="button" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Next    </h5></button>
              </div>

              <div class="carousel-item">                
                <h3 class="question">Q15)  How much do you like/understand literature and novels?</h3>
                <div class="slide-container">
                  <input type="range" min="0" max="10" value="5" class="slider" id="q15range">
                  <h4 class="range-value" id="q15num">5/10</h4>
                </div>
                <button type="button" id="test-submit" class="btn btn-primary btn-lg nextbtn" role="button"><h5>Submit    </h5></button>
              </div>
            </div>

            <!-- <a class="carousel-control-prev" href="#questionCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#questionCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>  -->
        </div>
    </div>
  </section>
     
	
</main><!-- End #main -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="testpage.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include 'footer.php' ?>