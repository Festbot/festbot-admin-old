
<?php
    include "php/mail.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Festbot</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  <style type="text/css">

    .jumbotron {
      background-image: url("hands-festival1.jpg");
      background-size: cover;
      text-align:center;
    }


    .gradientBg {
      background: -moz-linear-gradient(135deg, rgba(203,216,233,1) 0%, rgba(107,157,201,0) 61%, rgba(119,176,222,0) 87%, rgba(125,185,232,0) 100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(135deg, rgba(203,216,233,1) 0%,rgba(107,157,201,0) 61%,rgba(119,176,222,0) 87%,rgba(125,185,232,0) 100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(300deg, rgba(203,216,233,1) 0%,rgba(107,157,201,0) 61%,rgba(119,176,222,0) 87%,rgba(125,185,232,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4f7199', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }

    .separate{

      margin-bottom: 20px;
    }

    .rsating:hover:before {

      content: "\2605";
      color: #edd850;
   position: absolute;
      top:1px;
      left: 1px;
    }
    .rating {
      color:#dddddd;
      font-size: 2em;
      float: right;
      margin:0px 5px;

      position: absolute;
      right:0;

    }

    .event {

      display: inline-block;
      float: left;


    }

    .date {
      display: inline-block;
      //float: right;
      //margin-right: 110px;

    }

    .location{
      clear:both;
    }

    .event-row {
      border:1px solid #dddddd;
      padding: 5px;
      margin:0px 5px;
      border-bottom: none;
    }


  </style>

  </head>

  <body>
    <h1 class="text-hide">Music Festival Chatbot</h1>

    <nav class="navbar navbar-light border-bottom box-shadow">
      <img class="" src="logo-simple-01.png" alt="" width="240">

      <ul class="nav navbar-navform-inline mx-auto">
        <li class="nav-item"><a class="nav-link" href="#first">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Enterprise</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
      </ul>
      <form class="form-inline pull-xs-right ">
<!--         <input class="form-control mr-sm-2 " type="email" placeholder="Email" aria-label="Email">
        <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
-->        <a class="btn btn-primary" href="#">Dashboard</a>
      </form>
    </nav>


    <div id="errorBody"><? echo $error.$successMessage; ?></div>



     <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Industry leading technology to inform your attendees.</h1>
          <p style="color:white; background-color:rgba(0, 0, 0, 0.6);border-radius: 5px; padding: 20px;"><em>The Festbot&reg; is an Artifical Intelligence driven Data Analyser chatbot service for support your venue. We offer the smartest and simplest way for engaging your visitors. Just a few esay steps and you ready to go.</em></p>
          <p><a class="btn btn-primary btn-lg" href="#first" role="button">Learn more &raquo;</a></p>
        </div>
      </div>


    <h1 class="text-hide col-12 col-md-8 col-lg-8 mt-3 mb -3 pt-3 pb-3 row mx-auto separate"><em >Why Festbot is so awesome?</em></h1>

    <div id="first" >
    <div class="row mx-auto align-items-center"  style="width: 80%;">
      <div  class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <img src="festbot_home.png" class="col-sm-12 rounded mx-auto" alt=""></div>
      <div class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto  mt-3 mb-3 pt-3 pb-3 ">
        <h1 class="text-primary ">CREATE A MESSENGER CHATBOT FOR YOUR EVENT.</h1>
        <p>Personalize your lineup, showcase your performers and provide smart search for your attendees!</p>
      </div>
    </div>
    </div>

    <div id="second" class="gradientBg">
      <div class="row mx-auto align-items-center"  style="width: 80%;">
      <div class="col-12 col-sm-8 col-md-7 col-lg-4  mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <h1 class="text-primary">CREATE YOUR LINEUP<br><small class="text-muted"><em>A schedule tailored to your attendees interest.</em></small></h1>
        <p>Your guests can completely personalize their schedule! Try this out: simply mark a concert or workshop with a star. Your smart chatbot will send you a friendly reminder when the session is about to start so you’ll never miss it! Using AI Data Analysis we can collect performers/events for your attendees, based on their musical taste or on other preferences and add them to their hand!</p>
      </div>
      <div  class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <img src="festbot-agenda-list-50p.png" class="col-12 col-sm-12 rounded" alt="">
      </div>
    </div>
  </div>


   <div >
    <div class="row mx-auto align-items-center "  style="width: 80%;">
      <div  class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <img src="festbot-menu-50p.png" class="col-12 col-sm-12 rounded" alt=""></div>
      <div class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <h1 class="text-primary">FORGET ABOUT APPS<br><small class="text-muted"><em>Chatbots and AI are the future.</em></small></h1>
        <p>80 percent of smartphone users mainly use their phone for messaging. Chatbots are direct-to-consumer bots and instantly accessible. No downloads. No apps. No storage space needed. Engage with your attendees before, during and after the event.</p>
      </div>
    </div>
  </div>


  <div class="gradientBg">
    <div class="row mx-auto align-items-center "  style="width: 80%;">
      <div class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <h1 class="text-primary">GO EASY WITH NLP<br><small class="text-muted"><em>Hey, what’s the WiFi password?</em></small></h1>
        <p>Attendees usually ask the same questions all over again. When is the afterparty? How do I get to your venue? Where do I find booze? Automate those answers with our sophisticated natural language processing algorithms. Manage everything from ticketing and side event questions to performers and floor plans.</p>
      </div>
      <div  class="col-12 col-sm-8 col-md-7 col-lg-4 mx-auto mt-3 mb-3 pt-3 pb-3 ">
        <img src="festbot-nlp-50p.png" class="col-12 col-sm-12 rounded" alt="">
      </div>
    </div>
  </div>


    <div></div>


    <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p id="pricing" class="lead">___</p>
    </div>






<div class="row col-sm-12 mx-auto text-center">

        <div class="card col-xs-10 col-sm-10 col-md-6 col-lg-3 mx-auto box-shadow">
          <div class="card-header text-white bg-success">
            <h4 class="my-0 font-weight-normal">Community</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro; 0 <small class="text-muted"><em> forever</em></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="list-group-item d-flex justify-content-between align-items-center">Attendees<span class="badge badge-primary badge-pill">100</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Performers<span class="badge badge-primary badge-pill">20</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Single Day Event</li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Announcements<span class="badge badge-primary badge-pill">10</span></li>

            </ul>
            </div>
            <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#contactUsFreeModal">Sign up for free</button>
          </div>
        </div>

        <div class="card col-xs-10 col-sm-10 col-md-6 col-lg-3 mx-auto box-shadow">
          <div class="card-header text-white bg-primary">
            <h4 class="my-0 font-weight-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro; 390 <small class="text-muted"><em>per event</em></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">Attendees<span class="badge badge-primary badge-pill">500</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Performers<span class="badge badge-primary badge-pill">25</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Single Day Event</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Announcements<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Additional days<span class="badge badge-primary badge-pill">&euro; 190/day</span></li>
            </ul>
            </div>
            <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>


        <div class="card col-xs-10 col-sm-10 col-md-6 col-lg-3 mx-auto box-shadow">
          <div class="card-header text-white bg-danger">
            <h4 class="my-0 font-weight-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro; 1590 <small class="text-muted"><em>per event</em></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
               <li class="list-group-item d-flex justify-content-between align-items-center">Attendees<span class="badge badge-primary badge-pill">3000</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Performers<span class="badge badge-primary badge-pill">100</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Single Day Event</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Announcements<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Additional days<span class="badge badge-primary badge-pill">&euro; 290/day</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Active Data Analysis (AI/ML)</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">API integration</li>
            </ul>
            </div>
            <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>

        <div class="card col-xs-10 col-sm-10 col-md-6 col-lg-3 mx-auto box-shadow">
          <div class="card-header text-white bg-dark">
            <h4 class="my-0 font-weight-normal">Unlimited</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Ask for <small class="text-muted"><em>tailored solutions</em></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
               <li class="list-group-item d-flex justify-content-between align-items-center">Attendees<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Performers<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Multi Day Event</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Events<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Announcements<span class="badge badge-primary badge-pill">Unlimited</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Active Data Analysis (AI/ML)</li>
                <li class="list-group-item d-flex justify-content-between align-items-center">API integration</li>
            </ul>
            </div>
            <div class="card-footer">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#contactUsModal">Contact us</button>
          </div>
        </div><!--pricing-->


      </div>



</div> <!--footer-->

      <footer class="pt-4 my-md-5 p-3 m-3 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="http://1data.hu/images/1data_logo-grey1-dark.png" alt="" width="140">
            <small class="d-block mb-3 text-muted">&copy; 2018 1data Solutions</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>



 <!--
Event list
 -->
<div class="m-2">

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Balaton Sound</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Zamardi, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 6-11. June 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Sziget Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Budapest, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 11-18. August 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Volt Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Sopron, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 6-11. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Ozora Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>

        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Ozora, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 8-16. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Exit Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Novi Sad, Serbia</em></small>
          <div class="date"><small class="text-muted">  &#128338; 12-15. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Telekom Electronic Beats</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Budapest, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 12-15. October 2018 </small></div>
        </div>
    </div>

        <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Balaton Sound</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Zamardi, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 6-11. June 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Sziget Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Budapest, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 11-18. August 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Volt Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Sopron, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 6-11. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Ozora Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>

        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Ozora, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 8-16. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Exit Festival</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Novi Sad, Serbia</em></small>
          <div class="date"><small class="text-muted">  &#128338; 12-15. July 2018 </small></div>
        </div>
    </div>

    <div class="event-row col-md-6 col-lg-4">
        <div>
          <div class="event">
          Telekom Electronic Beats</div>
          <div class="rating"><input  type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="On" data-off="Off"></div>


        </div>
        <div class="location">
          <span><img src="poi.png" style="width:20px;"></span ><small class="text-muted"><em>Budapest, Hungary</em></small>
          <div class="date"><small class="text-muted">  &#128338; 12-15. October 2018 </small></div>
        </div>
    </div>
  </div>


<!-- Modal -->

<div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="errorEnterprise" ></div>

      <div class="modal-body">

          <form method="post" class="enterprise">

            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" name="email" id="emailEnterprise" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Visitors expected?</label>
              <select class="form-control" id="visitors" name="visitors">
                <option>< 5000</option>
                <option>< 20000</option>
                <option>< 100000</option>
                <option>100000+</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Events / year?</label>
              <select class="form-control" id="eventNumber" name="eventNumber">
                <option>1</option>
                <option>2-5</option>
                <option>6+</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">What kind of event?</label>
              <select class="form-control" id="kindOf" name="kindOf">
                <option>Music Festival</option>
                <option>Conference</option>
                <option>Exhibition</option>
                <option>Goverment</option>
                <option>Other</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Notes</label>
              <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Apply</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>




    <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="js/custom/validation.js"></script>


    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });

//notification bar close on relodad
      $(document).ready(function() {
      // show the alert
      setTimeout(function() {
          $(".alert").alert('close');
      }, 4000);

      });


    </script>
  </body>
</html>
