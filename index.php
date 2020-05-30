<?php
include 'db_connection.php';
$conn = OpenCon();

//queries
// ------------------------------------------------

// variables to hold all the choice_IDs for question 1
$choice_id1 = "SELECT choice_id FROM Question_choices WHERE choice_id = '1'";
$choice_idResult1 = $conn->query($choice_id1);

$choice_id2 = "SELECT choice_id FROM Question_choices WHERE choice_id = '2'";
$choice_idResult2 = $conn->query($choice_id2);

$choice_id3 = "SELECT choice_id FROM Question_choices WHERE choice_id = '3'";
$choice_idResult3 = $conn->query($choice_id3);

// ------------------------------------------------

// variables to hold the text for the choice for question 1

$sql = "SELECT question FROM Question WHERE question_id = '1'";
$result = $conn->query( $sql );

$sql2 = "SELECT choice_text FROM Question_choices WHERE choice_id = '1' AND question_id = '1'";
$result2 = $conn->query( $sql2 );

$sql3 = "SELECT choice_text FROM Question_choices WHERE choice_id = '2' AND question_id = '1'";
$result3 = $conn->query( $sql3 );

$sql4 = "SELECT choice_text FROM Question_choices WHERE choice_id = '3' AND question_id = '1'";
$result4 = $conn->query( $sql4 );

// ------------------------------------------------

// variables to hold all the choice_IDs for question 2
$choice_id4 = "SELECT choice_id FROM Question_choices WHERE choice_id = '4'";
$choice_idResult4 = $conn->query($choice_id4);

$choice_id5 = "SELECT choice_id FROM Question_choices WHERE choice_id = '5'";
$choice_idResult5 = $conn->query($choice_id5);

$choice_id6 = "SELECT choice_id FROM Question_choices WHERE choice_id = '6'";
$choice_idResult6 = $conn->query($choice_id6);

// ------------------------------------------------

// variables to hold the text for the choice for question 2

$sql5 = "SELECT question FROM Question WHERE question_id = '2'";
$result5 = $conn->query( $sql5 );

$sql6 = "SELECT choice_text FROM Question_choices WHERE choice_id = '4' AND question_id = '2'";
$result6 = $conn->query( $sql6 );

$sql7 = "SELECT choice_text FROM Question_choices WHERE choice_id = '5' AND question_id = '2'";
$result7 = $conn->query( $sql7 );

$sql8 = "SELECT choice_text FROM Question_choices WHERE choice_id = '6' AND question_id = '2'";
$result8 = $conn->query( $sql8 );

// ------------------------------------------------

// variables to hold all the choice_IDs for question 3
$choice_id7 = "SELECT choice_id FROM Question_choices WHERE choice_id = '7'";
$choice_idResult7 = $conn->query($choice_id7);

$choice_id8 = "SELECT choice_id FROM Question_choices WHERE choice_id = '8'";
$choice_idResult8 = $conn->query($choice_id8);

$choice_id9 = "SELECT choice_id FROM Question_choices WHERE choice_id = '9'";
$choice_idResult9 = $conn->query($choice_id9);

// ------------------------------------------------

// variables to hold the text for the choice for question 3
 
$sql9 = "SELECT question FROM Question WHERE question_id = '3'";
$result9 = $conn->query( $sql9 );

$sql10 = "SELECT choice_text FROM Question_choices WHERE choice_id = '7' AND question_id = '3'";
$result10 = $conn->query( $sql10 );

$sql11 = "SELECT choice_text FROM Question_choices WHERE choice_id = '8' AND question_id = '3'";
$result11 = $conn->query( $sql11 );

$sql12 = "SELECT choice_text FROM Question_choices WHERE choice_id = '9' AND question_id = '3'";
$result12 = $conn->query( $sql12 );

// ------------------------------------------------

$totalCorrect = 0;
$test = 1;

CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

    <!-- my css here to override bootstrap -->
    <link rel="stylesheet" href="css/main.css" type="text/css" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Exo&display=swap"
      rel="stylesheet"
    />

    <title>Education on Substance Abuse</title>
  </head>

  <header>
          <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.html">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sources.html">Sources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/portfolio.html">Portfolio</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <body>
    <!-- container for entire page, padding to seperate it from the navbar -->
    <div class="container-fluid" style="padding-top: 25px;">
      <!-- container for the header text -->
      <div class="container-fluid shadow rounded">
        <div class="row d-flex justify-content-center bg-light">
          <div class="col-md-10 text-black text-center">
            <h1>
              Class A drug use among 16 to 24 year olds has been increasing
              every year since 2011/2012
            </h1>
            <h2>
              and almost 1 in 5 16 to 24 year olds had taken a drug in the last
              year, around 1.2 million people.
            </h2>
            <p style="font-size: x-large;">
              This website aims to educate young adults aged 18 and above on the
              statistics, effects and realities of substance abuse in a way that
              I believe is not currently available to them.
            </p>
          </div>
        </div>
      </div>

      <!-- container with 2 rows, 3 columns -->
      <div
        class="container-fluid"
        style="padding-top: 25px; padding-bottom: 25px;"
      >
      <div class="row justify-content-center bg-light text-black shadow rounded">
        <div class="col-sm-4 text-center"><h1>The Current Approach</h1></div>
        <div class="col-sm-4 text-center"><h1>Problems With This Approach</h1></div>
        <div class="col-sm-4 text-center"><h1>What I Believe We Need</h1></div>
      </div>
        <div class="row d-flex justify-content-left bg-dark shadow rounded">
          
          <div class="col-sm-4 text-white text-center">
            <p class="pLeftLarge">
              The government advises schools when it comes to educating young
              people on drugs that the schools have a clear role to play in
              preventing drug misuse as part of their pastoral responsibilities.
              They make sure the school staff have the information, advice and
              power to:
              <ul class="ulLeftLarge">
                <li>Provide accurate information on drugs and alcohol through education and targeted information, including via the FRANK service</li>
                <li>
                Tackle problem behaviour in schools, with wider powers of search and confiscation
                </li>
                <li>
                  Work with local voluntary organisations, health partners, the police and others to prevent drug or alcohol misuse
                </li>
              </ul>
            </p>
            <p class="pLeftLarge">
            Schools may also:
            </p>
            <ul class="ulLeftLarge">
                <li>Develop a drugs policy which sets out their role in relation to all drug matters</li>
                <li>Have a designated senior member of staff with responsibility for the drug policy and all drug issues within the school</li>
              </ul>
            </p>
          </div>
          <div class="col-sm-4 text-white text-center">
            <p class="pLeftLarge">
              I think there are a few fundamental problems with this approach, it places all of the 
              responsibilities of developing a drug policy, forming an education and gathering information on 
              one person. If this person is chosen without much thought it could lead to an unenthusiastic 
              approach to the policy which directly effects the quality of the education. 
            </p>
            <p class="pLeftLarge">
              This leads to approaches to educating children and young adults on drugs, and the effects they have 
              mentally and physically, that are insufficient, outdated and ineffective. 
              Common strategies such as “Just say no” and “shock/scare” do little to educate people and have been 
              pushed and designed by people who don’t understand the subject area.
            </p>
          </div>
          <div class="col-sm-4 text-white text-center">
            <p class="pLeftLarge">
              Better quality drug education and more engagement with young adults on the subject will result in a reduction of drug abuse and its associated mental and physical problems.
              Drug abuse is a broad problem, while there is certainly evidence that specific factors in an individuals life can increase or decrease their chances on engaging in illicit drug use (such as their family environment, affluence and the area they live in) no one is invulnerable to the possibility of becoming addicted to drugs.
              </p>
              <p class="pLeftLarge">
                With this website, I hope to fill a gap wherein somebody of the same age group and with personal ties to these problems is presenting valid and relevant information in a way that is not condescending to young adults. I strongly believe that this difference in the style of education will help the users to connect with and take in the information presented to them.
              </p>
          </div>
        </div>
      </div>

      <!-- container with 2 rows, 3 columns -->
      <div
      class="container-fluid"
      style="padding-bottom: 25px;"
      >
      <div class="row justify-content-center bg-light text-black shadow rounded">
        <h1>My Approach</h1>
      </div>
      <div class="row d-flex justify-content-center bg-dark shadow rounded">
        <div class="col-sm-4 p-2 text-white">
        <p class="pLeftLarge">
          On this website, I am going to explore the three most common recreationally used drugs in the UK: 
          <ul class="ulLeftLarge">
            <li>Marijuana</li>
            <li>Cocaine</li>
            <li>Ecstasy</li>
          </ul>
        </p>
        <p class="pLeftLarge">
          For each drug, I will present the usage statistics, common misconceptions and important information plainly for young adults to read.
        </p>
        <p class="pLeftLarge">Each section will have a quiz at the end of it that will test the information presented in it. </p>
        </div>
        <div class="col-sm-4 p-2 text-white text-center">
          <p class="pLeftLarge">My goal with these quizzes is to engage the user and encourage them to 
            really read and take in the information I present in each section.</p>
          <p class="pLeftLarge">I hope that this approach will help the people who visit this website truly 
            understand the reality of the drug in question and the issues surrounding it and to deliver this information in a more casual way than other sources.</p>
        </div>
        <div class="col-sm-4 p-2 text-white">
          <p class="pLeftLarge">Use the links below to navigate to the pages that talk about each drug, or follow the links at the top of the page.</p>
          <ul class="ulLarger">
            <li><a href="/marijuana.html">Marijuana</a></li>
          </ul>
        </div>
      </div>

     <div class="container-fluid" style="padding-top: 25px;">
      <div class="row d-flex justify-content-left bg-dark shadow rounded">
        <div class="col-lg-12 text-white">
        <p class="pLeftLarge">
          The National Drug Treatment Monitoring System (NDTMS) statistics
          report 2017/18 presents information on adults (aged 18 and over) who were
          receiving help in England for problems with drugs and alcohol
          during 2017-18. You will see this report, and most likely some of
          the same statistics, being used on all three of the substance pages.
          <br />This is because of the way it presents its more general
          statistics. It does, however, contain specific statistics on each
          drug too.
        </p>
        <p class="pLeftLarge">
          This report divides those adults into four clear groups:
        </p>
        <ul class="ulLeftLarge">
          <li>
            Opiate - people who are dependent on or have problems with
            opiates, mainly heroin
          </li>
          <li>
            Non-opiate - people who are dependent on or have problems with
            non-opiate drugs, such as cannabis, crack and ecstasy
          </li>
          <li>
            Non-opiate and alcohol - people who are dependent on or have
            problems with both non-opiate drugs and alcohol
          </li>
          <li>
            Alcohol only - people who are dependent on or have problems with
            alcohol but don’t have problems with any other substances
          </li>
        </ul>
        <img 
        src= "images/numbers_in_treatment.png"
        class="img-fluid mx-auto d-block"
        alt="statistics1"
        style="padding-bottom: 25px; align-content: center;"
        >
        <p style="text-align: center;">(Public Health England, 2018)</p></p>
      </div>
      </div>
    </div>
      

      <!-- Trigger/Open The Modals -->
      <button id="myBtn">Open Modal 1</button>

      <!-- The Modals -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <h2>Modal Header</h2>
            <button id="close1" class="close">&times;</button>
          </div>
          <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <button id="myBtn2">Open Modal 2</button>
          </div>
        </div>
      </div>

      <div id="myModal2" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <h2>Modal Header</h2>
            <button id="close2" class="close">&times;</button>
          </div>
          <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <button id="myBtn3">Open Modal 3</button>
          </div>
        </div>
      </div>

      <div id="myModal3" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <h2>Modal Header</h2>
            <button id="close3" class="close">&times;</button>
          </div>
          <div class="modal-body">
            <p>Some text in the Modal Body</p>
            <p>Some other text...</p>
          </div>
          <div class="modal-footer">
            <h1>This is the last modal</h1>
          </div>
        </div>
      </div>

      // #region [rgba(0, 205, 30, 0.1) ]
      <!-- scripts here -->
      <!-- modal1 JS -->
      <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modal2 = document.getElementById("myModal2");
        var modal3 = document.getElementById("myModal3");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        var btn2 = document.getElementById("myBtn2");
        var btn3 = document.getElementById("myBtn3");

        // Get the <span> element that closes the modal
        var close1 = document.getElementById("close1");
        var close2 = document.getElementById("close2");
        var close3 = document.getElementById("close3");

        // When the user clicks on the button, open the modal
        btn.onclick = function () {
          modal.style.display = "block";
        };
        btn2.onclick = function () {
          modal.style.display = "none";
          modal2.style.display = "block";
        };
        btn3.onclick = function () {
          modal2.style.display = "none";
          modal3.style.display = "block";
        };

        // When the user clicks on (x), close the modal
        close1.onclick = function () {
          modal.style.display = "none";
        };
        close2.onclick = function () {
          modal2.style.display = "none";
        };
        close3.onclick = function () {
          modal3.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          } else if (event.target == modal2) {
            modal2.style.display = "none";
          } else if (event.target == modal3) {
            modal3.style.display = "none";
          }
        };
      </script>
      <!-- bootstrap 4 scripts -->
      <script src="jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- icons -->
      <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

      // #endregion
    </div>
  </body>
</html>