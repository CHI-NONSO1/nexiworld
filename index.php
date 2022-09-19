<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="inner__left.css">
  <link rel="stylesheet" href="inner2.css">
  <link rel="stylesheet" href="inner3.css">
  <script src="home.js" defer></script>
  <script type="text/javascript" src="submit_form.js" defer></script>
</head>

<body class="body__Container">
  <div class="main__container">
    <div class="container__header">
      <div class="heading__parent">
        <!---------------------------------------------------------------------->
        <h1 class="heading-primary">
          <span class="heading-primary-main1">I</span>
          <span class="heading-primary-main2">AM</span>
          <!--------------------------------------------------------------------->
          <div class="text-box-inner">
            <span class="heading-primary-main3">CHINONSO</span>
            <span class="heading-primary-main4">EGWUAKA</span>
          </div>
        </h1>
        <!------------------------------------------------------------------------->

      </div>

    </div>

    <div class="container__left">
      <div class="pointer_arow">
        <svg class='direction_icon-home'>
          <use xlink:href='spritee.svg#icon-cheveron-down'></use>
        </svg>
      </div>
      <div class="img__parent">
        <img class="img" src="chinonso.jpeg" alt="image">
      </div>
    </div>

    <div class="container__right">

      <div class="msg__heading">
        <span class="msg">Leave A Message</span>
      </div>
      <div class="slide">
        <form action="#" method="POST" id="contact">

          <div class="form__control">
            <div class="err__parent">
              <span class="name__err">Enter Full Name!</span>
            </div>
            <div class="name__parent">
              <input type="text" class="name" id="name__label" required placeholder="Your Name" value="" />
              <label for="name__label" class="form__label">Your Name</label>
            </div>
          </div>

          <div class="form__control">
            <div class="err__parent">
              <span class="email__err">Enter Email!</span>
            </div>
            <div class="email__parent">
              <input type="email" class="email" id="email__label" placeholder="Your Email" value="" required />
              <label for="email__label" class="form__label">Your Email</label>
            </div>
          </div>

          <div class="form__control">
            <div class="err__parent">
              <span class="message__err">Enter Message</span>
            </div>
            <div class="message__parent">
              <textarea name="message" form="contact" id="message__label" required placeholder="Write Your Message Here" value=""></textarea>
              <label for="message__label" class="form__label">Your Message Here</label>
            </div>
          </div>
          <div class="confirm"></div>
          <div class="sub_parent">
            <a href="https://wa.me/message/Q5U5MFFUW6NVO1">
              <input type="button" id="submit" value="submit" name="go">
            </a>

          </div>
        </form>
      </div>
    </div>
    <div class="container__first">
      <div class="container__inner1__left">
        <div class="inner__left">

          <svg class='direction_icon-left1'>
            <use xlink:href='spritee.svg#icon-cheveron-left'></use>
          </svg>
          <div class="headingInner__parent">
            <h1 class="cv_heading"></h1>
          </div>
          <div class="name_parent">
            <h4 class="name_text">CHINONSO EGWUAKA</h4>
          </div>
          <div class="descri__wrap">
            <p class="job__position">Web Developer, UI Designer</p>
            <p class="address__city">Lagos Nigeria</p>
            <p class="contact__no">
              <svg class='phone_icon'>
                <use xlink:href='spritee.svg#icon-phone'></use>
              </svg>
              2348037714029
            </p>
            <p class="contact__no">
              <svg class='email_icon'>
                <use xlink:href='spritee.svg#icon-envelope'></use>
              </svg>

              Chinonso_patrick@yahoo.com
            </p>
            <p class="contact__no">
              <svg class='github_icon'>
                <use xlink:href='spritee.svg#icon-github'></use>
              </svg>
              <a href="https://github.com/CHI-NONSO1 ">Github</a>
            </p>

            <p class="contact__no">
              <svg class='linkedin_icon'>
                <use xlink:href='spritee.svg#icon-linkedin'></use>
              </svg>
              <a href="https://www.linkedin.com/in/chinonso-egwuaka-a831634b/">Linkedin</a>
            </p>
          </div>
          <h2>
            <p class="sub_header"><span>EDUCATION</span></p>
          </h2>
          <p>
            <span>B.ED. Physics</span>
            <span>University Of Lagos,</span>
            <span>December 2016 - Novmber 2021</span>
            <span>Lagos State.</span>


          </p>
          <h2>
            <p class="sub_header"><span>CAREER OBJECTIVE</span></p>
          </h2>

          <p>
            I wanted to study computer science at the university as an undergraduate to pursue my dreams and love for science and computing but I was told that without further mathematics in my O-level result, I will not be given admission to study any science related course but I chose physics Education just to remain in the arena of science and experimental based field and hope that some how, I will find my way home(computing).
            According to a NASA poster, "Aerodynamically a bee`s body is not made to fly; the good thing is that the bee doesn`t know". This is to say that aerodynamically the breadth of the bee`s wing is too small to keep its huge body in flight but a bee does not know anything about physics or aerodynamic principles and fly.
            Even though I know, I refused to accept that I must possess a computer science degree in other to be a computer programmer/ web developer, just as the bee tried and fly, so do I and was able to design and develop a website at Coolcash Savings and loan a subsidiary of First Contributions and Multipurpose LTD. which did not only save money but also lots of valuable time required to carry out paper financial records keeping and customers transaction processing.It was GRIT, self motivating, passion and a proven record of getting things done that I made that happen. I believe in team work and inspiring others to get things done.

          </p>

          <svg class='direction_icon__right-small1'>
            <use xlink:href='spritee.svg#icon-cheveron-right'></use>
          </svg>
        </div>

      </div>

      <div class="container__behave__right">
        <div class="inner__behave">

          <svg class='direction_icon__left-small1'>
            <use xlink:href='spritee.svg#icon-cheveron-left'></use>
          </svg>
          <h2>
            <p class="sub_header-EB">WORK EXPERIENCE </p>
          </h2>
          <p>Web Developer and UI Designer</p>
          <p>First Contributions and Multipurpose Ltd</p>
          <p>March 2022 - Remote.</p>
          <p>Design and develop site end user with ReactJS for data entring and customers transaction request processing by the tellers.</p>
          <p>Design and develop the site backend using NodeJS and ExpressJS for easy communication as an API between the fronend and the backend.</p>
          <p>Design the Database using MYSQL relational database and Sequelize ORM for record keeping and retrievals.</p>
          <p>Host the site on Cpanel shared hosting platform and monitor performance through the teller admins feedback.</p>
          <p>Integrate an SMS alert API with the site for customers transaction alert notifications.</p>
          <p>Conducting remote training for the site teller admins for efficient use of the site.</p>
          <p>Carrying out site routine maintenance and reporting to the management team.</p>
          <p>Collaborating with the management for a full implementations of user interface for customers signup and a dashboard for managing their account activties.</p>

          <svg class='direction_icon-right1'>
            <use xlink:href='spritee.svg#icon-cheveron-right'></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="container__second">
      <div class="container__inner2__left">
        <div class="inner__left2">
          <svg class='direction_icon-left2'>
            <use xlink:href='spritee.svg#icon-cheveron-left'></use>
          </svg>
          <h2>
            <p class="sub_header__PH">SKILLS</p>
          </h2>
          <p>HTML, CSS, JavaScript</p>
          <p>ReactJS, React-redux,ExpressJS, Laravel, GenieJL, StippleJL,DashJL</p>
          <p>NodeJS, PHP, Julia</p>
          <p> MYSQL</p>
          <p>Sequelize</p>
          <p>Plotly, D3, ChartJS</p>
          <p>FluxJL</p>
          <p>Styled-Components</p>


          <svg class='direction_icon__right-small3'>
            <use xlink:href='spritee.svg#icon-cheveron-right'></use>
          </svg>
        </div>

      </div>
      <div class="container__inner2__right">
        <div class="inner__right2">

          <svg class='direction_icon__left-small2'>
            <use xlink:href='spritee.svg#icon-cheveron-left'></use>
          </svg>
          <h2>
            <p class="sub_header__PH">PROJECTS</p>
          </h2>
          <p> <a href="https://nexiworld.herokuapp.com/">NexiWorld.com</a></p>
          <p>Developed With:</p>
          <p>JavaScritp</p>
          <p>HTML</p>
          <p>CSS</p>
          <p>PHP: For Backend</p>
          <p>MYSQL: For Backend Data Storage.</p>

          <p class=""><a href="https://coolcash.ng">Coolcash.ng</a></p>
          <p>Developed With:</p>
          <p>ReactJS</p>
          <p>HTML</p>
          <p>CSS</p>
          <p>NodeJS: For Backend</p>
          <p>MYSQL: For Backend Data Storage.</p>
          <p>Savings and Loan website</p>

          <p class=""><a href="https://neixworld-tesla-clone.web.app/">My Tesla Clone</a></p>
          <p>Cloned with:</p>
          <p>React.js</p>
          <p>React redux</p>

          <p class=""><a href="https://cwebtracker.web.app/">CwebTracker</a></p>
          <p>Developed With:</p>
          <p>React.js</p>
          <p>Here Geocoder API</p>
          <p>Here Geosearch API</p>
          <p>Usage:</p>
          <p>1. Enter an address from the dashboard</p>
          <p>2. Enable location service on the phone to be track from the dashbord as well</p>
          <p>3. Watch in the map as the phone changes location</p>
          <p>3.1. Can be used as ride direction as well</p>



          <svg class='direction_icon-right2'>
            <use xlink:href='spritee.svg#icon-cheveron-right'></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="container__third">
      <div class="container__inner3__left">
        <div class="inner__left3">
          <h1>Thank you for stopping by...</h1>
          <svg class='direction_icon-left3'>
            <use xlink:href='spritee.svg#icon-cheveron-left'></use>
          </svg>

          <h1>
            <p class="blogpost"></p>

          </h1>
        </div>
      </div>
      <div class="container__inner3__right">
        <div class="inner__right3">
          <!-- <svg class='direction_icon-right3'>
        <use xlink:href='spritee.svg#icon-cheveron-right'></use>
      </svg> -->
        </div>
      </div>
    </div>
    <footer class="footer__main">
      <div class="site_policy_social-parent">
        <div class="fb_connect">
          <svg class='social_icon'>
            <use xlink:href='sprite.svg#icon-facebook'></use>
          </svg>
        </div>
        <div class="twitter_connect">
          <svg class='social_icon'>
            <use xlink:href='sprite.svg#icon-twitter'></use>
          </svg>
        </div>
        <div class="whatsapp_connect">
          <a href="https://wa.me/message/Q5U5MFFUW6NVO1">
            <svg class='social_icon'>
              <use xlink:href='sprite.svg#icon-whatsapp'></use>
            </svg>
          </a>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>
