<?php include 'header.php' ?>

<head>
  <style>

.test-form-bg-div h1,
h2,
h3,
h4,
h5,
h6 {
  color: rgb(8, 68, 129);
  font-family: 'Raleway', sans-serif;
  font-weight: 700;
}

.test-form-bg-div p,
input,
label {
  color: rgb(8, 68, 129);
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}

.test-form-bg-div .about-test {
  padding-top: 2.2%;
  text-align: left;
}

.test-form-bg-div .about-test h2 {
  margin-bottom: 5%;
}

.test-form-bg-div .about-test p {
  line-height: 1.8;
}

.test-form-bg-div {
  height: 100vh;
}

.test-form-bg-div .container {
  padding: 5% 0 3%;
}

.test-form-bg-div .header-img {
  border-radius: 5px;
  height: 200px;
  width: 100%;
}

.test-form-bg-div .info-card {
  background-image: linear-gradient(to right top, #4d79ffbf, #00a3ffbf, #00c6ffbf, #00e4ffbf, #00ffffbf);
  border-radius: 5px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin: 10px auto;
  padding-bottom: 2%;
  text-align: center;
  width: 90%;
}

.test-form-bg-div .test-form {
  background-color: white;
  border-radius: 20px;
  margin-left: 3%;
  margin-top: 5%;
  padding: 6% 3% 3%;
}

.test-form-bg-div .test-form input[type=text],
input[type=email],
input[type=tel],
input[type=date] {
  background-color: white;
  border: 1px solid rgb(8, 68, 129);
  border-radius: 5px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  display: block;
  margin: 4% auto;
  padding: 5px;
  width: 90%;
}

.test-form-bg-div .test-form input[type=text]:focus {
  background-color: aliceblue;
  outline: none;
}

.test-form-bg-div #formbox {
  margin: 5% 2% 3% 0;
}

.test-form-bg-div input[type=email]:focus {
  background-color: aliceblue;
  outline: none;
}

.test-form-bg-div input[type=date]:focus {
  background-color: aliceblue;
  outline: none;
}

.test-form-bg-div input[type=tel]:focus {
  background-color: aliceblue;
  outline: none;
}

.test-form-bg-div .test-form input[type=submit] {
  cursor: pointer;
  display: block;
  margin: 3% auto;
}

.test-form-bg-div .test-form input[type=submit]:hover {
  transform: scale(1.05);
}


.test-form-bg-div .test-form input[type=submit] {
  background: #5279f0 !important;
  background-image: -webkit-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -moz-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -ms-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: -o-linear-gradient(top, #5279f0, #1f6dba) !important;
  background-image: linear-gradient(to bottom, #5279f0, #1f6dba) !important;
  border: 1px solid black;
  border-radius: 5px;
  color: white;
  padding: 5px !important;
  width: 30%;
}

@media (max-width: 770px) {
  .test-form-bg-div .about-test {
    text-align: center;
  }

  .test-form-bg-div .test-form {
    margin-left: 0px;
  }
}



  </style>
</head>


 <main id="main">
 <section id="test-form">
        <div class="test-form-bg-div">
            <div class="info-card">
                <img class="header-img" src="assets/img/adm/vector-art_P4_720x350.jpg.img.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 about-test">
                            <h2>About the Test</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                                magna aliqua. Tellus id interdum velit laoreet id donec. Ullamcorper a lacus vestibulum sed. Ornare arcu odio ut 
                                sem nulla pharetra diam. Neque sodales ut etiam sit. Porta nibh venenatis cras sed felis eget velit. Blandit 
                                turpis cursus in hac habitasse platea dictumst quisque sagittis. Fermentum posuere urna nec tincidunt praesent. 
                                Sollicitudin nibh sit amet commodo nulla facilisi nullam. Montes nascetur ridiculus mus mauris vitae ultricies 
                                leo integer malesuada. Augue lacus viverra vitae congue eu consequat ac felis donec.</p>
                            <p>Laoreet non curabitur gravida arcu ac tortor dignissim convallis. Sollicitudin aliquam ultrices sagittis orci. Aliquet eget sit 
                                amet tellus cras adipiscing enim. Libero nunc consequat interdum varius sit amet mattis. Eu non diam phasellus vestibulum lorem 
                                sed risus ultricies tristique. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Sed lectus vestibulum mattis 
                                ullamcorper. Feugiat in fermentum posuere urna nec tincidunt. Egestas egestas fringilla phasellus faucibus.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="test-form">
                                <!-- <form id="test-form" action="#" method="post" autocomplete="on"> -->
                                    <input id="name" type="text" class="input-field" name="name" placeholder="Full Name">
                                    <input id="email" type="email" class="input-field" name="email" placeholder="Email">
                                    <input id="dob" type="text" class="input-field" name="dob" placeholder="Date of Birth" onfocus="(this.type = 'date')">
                                    <input id="phone" type="tel" class="input-field" name="number" placeholder="Contact Number" pattern="[6-9]{1}[0-9]{9}">
                                    <input id="college" type="text" class="input-field" name="school" placeholder="School/College, Eg : 'DPS, Mumbai, Maharashtra' or 'IIT, Mumbai, Maharashtra'">
                                    <input id="standard" type="text" class="input-field" name="standard" placeholder="Standard/Year of study, Eg : 'GRADE: 12' or 'YEAR: 2'">
                                    <input id="stream" type="text" class="input-field" name="stream" placeholder="Stream/Specialisation/Degree, Eg : 'Science' or 'BTECH: CSE' or 'BBA'">
                                    <input type="checkbox" name="formbox" id="formbox">
                                    <label for="formbox">I agree to submit the above information.</label>
                                    <input id="submit-btn" type="submit" value="Take Test">
                                <!-- </form>                      -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
	
	</main><!-- End #main -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var data;
        document.getElementById("submit-btn").addEventListener("click", function(){
            var filled = true;
            for(var i = 0; i < document.getElementsByClassName("input-field").length; ++i){
                if(document.getElementsByClassName("input-field")[i].value == ""){
                    filled = false;
                    break;
                }   
            }
            if(!filled) {
                alert("All fields must be filled!");
            } else if(document.getElementById("formbox").checked == false){
                alert("Kindly agree to submit the information!")
            }
            else {
                localStorage.setItem("firstname", $("#name").val().split(' ')[0]);
                data = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    dob: $("#dob").val(),
                    phone: $("#phone").val(),
                    college: $("#college").val(),
                    standard: $("#standard").val(),
                    stream: $("#stream").val()
                };
                location.href = "test-page.html";
            }           
        })
    </script>
<?php include 'footer.php' ?>