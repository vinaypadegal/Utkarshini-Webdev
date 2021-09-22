<?php include 'header.php' ?>

<head>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous"> 

  <style>
      .result h1,
h2,
h3,
h4,
h5,
h6 {
  color: rgb(8, 68, 129);
  font-family: 'Raleway', sans-serif;
  font-weight: 700;
}

.result p,
span,
li {
  color: rgb(8, 68, 129);
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}


/* Sidebar */

.result .sidebar {
  background-color: rgb(8, 68, 129);
  /* background-image: linear-gradient(to bottom right, #4d79ff, #00ffff); */
  height: 1080px;
  width: 21%;
  padding-right: 0;
  /* display: none; */
}

.result #side-img {
  border-radius: 100%;
  margin: 8% 0 0 6%;
  width: 90%;
}

.result #sidebar-heading {
  margin-top: 10%;
  padding: 10%;
  line-height: 1.4;
}

.result .sidebar p {
  color: white;
  font-size: 140%;
  text-align: center;
}

.result #apply {
  position: relative;
  top: 435px;
}

.result .sidebar #apply:hover {
  color: rgb(170, 165, 165);
  cursor: pointer;
}

.result #book {
  position: relative;
  top: 445px;
}

.result .sidebar #book:hover {
  color: rgb(170, 165, 165);
  cursor: pointer;
}


/* Result Content */

.result .content-box {
  padding: 0 4%;
  width: 79%;
  /* text-align: center; */
}

.result #mobile-p {
  display: none;
}

.result .heading {
  font-size: 400%;
  margin: 3% 0 5%;
}

.result .analysis {
  margin: 5% 0;
}

.result .pointer {
  color: rgb(8, 68, 129);
}

.result .pointer-div {
  height: 50px;
  position: relative;
  /* bottom: 18%; */
  bottom: 15px;
  /* left: 98.6%; */
  right: 1%;
}

/* Recommended Courses */

.result .course-li {
  margin-bottom: 30px;
  width: 70%;
}

.result .courses-recom {
  margin-top: 5%;
}

.result .courses-recom h2 {
  margin-bottom: 40px;
}

.result .mobile-btn {
  display: none;
}

@media (max-width: 1000px) {
  .result .sidebar {
    display: none;
  }

  .result .content-box {
    width: 100%;
    padding:  0 8%;
  }

  .result #mobile-p {
    background-color: rgb(8, 68, 129);
    color: white;
    display: block;
    font-size: 150%;
    margin-bottom: 5%;
    padding: 3% 5%;
  }

  .result .mobile-btn {
    display: block;
    background-color: rgb(8, 68, 129);
    color: white;
    margin: auto;
    padding-top: 2.5%;
  }

  .result .mobile-btn:hover {
    transform: scale(1.02);
  }

  .result .mobile-btn p{
    color: white;
    /* font-size: 150%; */
  }

  .result #applybtn {
    margin-top: 70px;
  }

  .result #bookbtn {
    margin-top: 30px;
  }
}
  </style>
</head>


 <main id="main">
     <br></br>

     <section id="results">
        <div class="result">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <img src="assets/img/adm/Add a subheading (1).png" alt="" id="side-img">
                    <p id="sidebar-heading"></p>
                    <!-- <p id="download" onclick="javascript:demoFromHTML();">Download as PDF<p> -->
                    <p id="book">Book a session</p>
                </div>
                <div class="col-md-9 content-box">
                    <h1 class="heading">Analysis Report</h1>
                    <h2>Questionnaire Analysis</h2>
                    <div class="analysis">
                        <h3>Aptitude Skills<span id="apt-span" style="color: rgb(66, 204, 66);"></span></h3>
                        <div class="progress" style="height: 30px;">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:25%; background-color: #d9534f;"></div>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:25%; background-color: #f0ad4e;"></div>
                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:25%; background-color: #5bc0de;"></div>
                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%; background-color: #5cb85c;"></div>
                        </div>
                        <div id="apt-pointer" class="pointer-div"><i class="pointer fas fa-hand-pointer fa-3x"></i></div>
                    </div>
                    <div class="analysis">
                        <h3 id="verbal-h3">Verbal Skills<span id="verbal-span" style="color: rgb(66, 204, 66);"></span></h3> 
                        <div class="progress" style="height: 30px;">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:25%; background-color: #d9534f;"></div>
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:25%; background-color: #f0ad4e;"></div>
                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" style="width:25%; background-color: #5bc0de;"></div>
                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%; background-color: #5cb85c;"></div>
                        </div>
                        <div id="verbal-pointer" class="pointer-div"><i class="pointer fas fa-hand-pointer fa-3x"></i></div>
                    </div>  
                    <div class="courses-recom">
                        <h2>Courses Recommended</h2>
                        <div>
                            <ol>
                                <li class="course-li">
                                    <h4 id="item1"></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info"  id="progbar1" role="progressbar" style="width:25%;"></div>
                                    </div>
                                </li>
                                <li class="course-li">
                                    <h4 id="item2"></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info"  id="progbar2" role="progressbar" style="width:25%;"></div>
                                    </div>
                                </li>
                                <li class="course-li">
                                    <h4 id="item3"></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info"  id="progbar3" role="progressbar" style="width:25%;"></div>
                                    </div>
                                </li>
                                <li class="course-li">
                                    <h4 id="item4"></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info"  id="progbar4" role="progressbar" style="width:25%;"></div>
                                    </div>
                                </li>
                                <li class="course-li">
                                    <h4 id="item5"></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info"  id="progbar5" role="progressbar" style="width:25%;"></div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	  </main><!-- End #main -->

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            // retrieve stored data (stored in testpage.js)
            var apt = localStorage.getItem("apt");
            var verbal = localStorage.getItem("verbal");
            var courses = localStorage.getItem("courses"); 
            var tot_sum = localStorage.getItem("totsum");

            var firstname = localStorage.getItem("firstname");

            document.getElementById("sidebar-heading").innerHTML = "Hi " + firstname + "! We have analysed your answers and have created these personalised recommendations for you!";

            // move the thumb pointers to the right location (left = 98.6% will move it to the end of progress bar)
            document.getElementById("apt-pointer").style.left = ((apt/5)*98.6) + '%';
            document.getElementById("verbal-pointer").style.left = ((verbal/5)*98.6) + '%';

            var mycourses = JSON.parse(courses)

            // sort descending
            mycourses.sort(function(a, b){
                return b[1] - a[1]; 
            })

            // set aptitude and verbal results
            document.getElementById("apt-span").innerHTML = "<strong> (" + (apt/5)*100 + "%)</strong>";
            document.getElementById("verbal-span").innerHTML = "<strong> (" + (verbal/5)*100 + "%)</strong>";

            // render recommended courses (i starts from 1 because mycourses[0] will always be ['Courses, Recommendation'] after sorting)
            for(var i=1; i <= 5; ++i){
                document.getElementById("item" + i).innerHTML = mycourses[i][0];  // because after sort, mycourses[0] is always ["courses", "recommendation"]
                document.getElementById("progbar" + i).style.width = Math.round((mycourses[i][1]/tot_sum) * 100) + '%';
                document.getElementById("progbar" + i).innerHTML = Math.round((mycourses[i][1]/tot_sum) * 100) + '%';
            }
        }

        document.getElementById("book").addEventListener("click", function(){
            location.href = "#";    // put link here
        })
    </script>
  <?php include 'footer.php' ?>