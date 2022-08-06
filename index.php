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

<body>
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
      <!--h1 class="heading__name">I AM CHINONSO EGWUAKA</h1-->
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
  <!-- <div class="kl">
    f
  </div> -->
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
          <input type="button" id="submit" value="submit" name="go">
        </div>
      </form>
    </div>
  </div>

  <div class="container__inner1__left">
    <div class="inner__left">

      <svg class='direction_icon-left1'>
        <use xlink:href='spritee.svg#icon-cheveron-left'></use>
      </svg>
      <div class="headingInner__parent">
        <h1 class="cv_heading">CURRICULLUM VITAE</h1>
      </div>
      <div class="name_parent">
        <h4 class="name_text">CHINONSO EGWUAKA</h4>
      </div>
      <p class="addres">Block 11, Flat C, Kontagora Estate, Isheri Olofin,</p>
      <p class="address__city"> Alimosho Lagos.</p>
      <p class="contact__no"><span>Tel: </span>08037714029</p>
      <p class="contact__no"><span>Email: </span>Chinonso_patrick@yahoo.com</p>
      <h2>
        <p class="sub_header"><span>Goal:</span></p>
      </h2>
      <p>To work as a part of a well structured, dynamic and competitive organization and To make a significant contribution while developing skills yet further.
      </p>
      <h2>
        <p class="sub_header"><span>BIO-DATA:</span></p>
      </h2>
      <p class="bio__flex "><span>SEX:</span> <span>Male</span></p>
      <p class="bio__flex"><span>DATE OF BIRTH:</span> <span>20th July, 1987</span></p>
      <p class="bio__flex"><span>STATE OF ORIGIN:</span> <span>Enugu State</span></p>
      <p class="bio__flex"><span>MARITAL STATUS:</span> <span>Single</span></p>
      <p class="bio__flex"><span>DISABILITY:</span> <span>Non</span></p>
      <p class="bio__flex"><span>RELIGION:</span> <span>Christianity</span></p>
      <p class="bio__flex"><span>NATIONALITY:</span> <span>Nigeria</span></p>


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
        <p class="sub_header-EB">EDUCATIONAL BACKGROUND:</p>
      </h2>
      <p>University Of Lagos, Lagos State. (B.ED Physics) 2021</p>
      <p>The Association of Accountancy Bodies of West Africa. (Member) 2011.</p>
      <p>Institute Of Chartered Accountant of Nigeria (ICAN) (Professional Accountant in View).</p>
      <p>E-Accountants & Associates, Lagos State. 2012.</p>
      <p>Father Ogbonna Memorial Comprehensive College Okpatu, Enugu State. 2000 - 2006.</p>
      <p>Central School Okpatu, Enugu State. 1995 - 2000.</p>
      <h2>
        <p class="sub_header">QUALIFICATION:</p>
      </h2>
      <p>Bachelor of Education in Physics </p>
      <p>Certificate in Peachtree Accounting.</p>
      <p>Certificate in Accounting Technicians.</p>
      <p>Senior School Certificate.</p>
      <p>First School Leaving Certificate.</p>

      <h2>
        <p class="sub_header">HOBBIES:</p>
      </h2>
      <p> Reading, Listening and Computing</p>

      <h2>
        <p class="sub_header"> MOTTO:</p>
      </h2>
      <p>What Worth Doing, Is Worth Doing With Passion.</p>



      <svg class='direction_icon-right1'>
        <use xlink:href='spritee.svg#icon-cheveron-right'></use>
      </svg>
    </div>
  </div>

  <div class="container__inner2__left">
    <div class="inner__left2">
      <svg class='direction_icon-left2'>
        <use xlink:href='spritee.svg#icon-cheveron-left'></use>
      </svg>
      <h2>
        <p class="sub_header__PH">Philosophy: </p>
      </h2>
      <p>Life Is a School, the more you live, the more you learn!</p>

      <h2>
        <p class="sub_header">WORK EXPERIENCE :</p>
      </h2>
      <p>Milestone Capital Management LTD. 2014-2016.</p>
      <p>Eletu junior high school Abule Oja Lagos (3 months Teaching Practice) </p>
      <h2>
        <p class="sub_header">REFEREES:</p>
      </h2>
      <p>MR ATHAN OGBOZOR</p>
      <p>Block 17, flat A, Kontagora state Isheri Olofin,</p>
      <p>Lagos.</p>
      <p><span> Tele: </span> 08022037007</p>

      <p>MR OFFIONO SIMON .O.</p>
      <p>Block 11, flat B, Kontagora Estate Isheri Olofin,</p>
      <p>Lagos.</p>
      <p><span> Tele: </span> 08028307909</p>

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
        <p class="sub_header__PH">SOFTWARE DEVELOPMENT PROJECTS: </p>
      </h2>
      <p>MY PORTFOLIO: <a href="https://nexiworld.herokuapp.com/">NexiWorld.com</a></p>
      <p>Developed With:</p>
      <p>JavaScritp</p>
      <p>HTML</p>
      <p>CSS</p>
      <p>PHP: For Backend</p>
      <p>MYSQL: For Backend Data Storage.</p>

      <p class="proj">IZUGODELECTRONICS: <a href="www.IzuGodElectronics.com">IzuGodElectronics.com</a></p>
      <p>Not yet hosted though</p>
      <p>Developed With:</p>
      <p>JavaScritp</p>
      <p>HTML</p>
      <p>CSS</p>
      <p>PHP: For Backend</p>
      <p>MYSQL: For Backend Data Storage.</p>
      <p>An Online Shopping Site For All Kinds of Electronics Dealings.</p>

      <p class="proj">Nexiworld Tesla-Clone: <a href="https://neixworld-tesla-clone.web.app/">My Tesla Clone</a></p>
      <p>Cloned with:</p>
      <p>React.js</p>
      <p>React redux</p>




      <p class="proj">Next PROJECT: ?</p>
      <p>I am currently learning Julia programming language and my next project will include Julia </p>



      <svg class='direction_icon-right2'>
        <use xlink:href='spritee.svg#icon-cheveron-right'></use>
      </svg>
    </div>

  </div>
  <div class="container__inner3__left">
    <div class="inner__left3">
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
</body>

</html>
