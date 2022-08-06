function myFunction2(viewSta) {
  if (viewSta.matches) {
    var header__container = document.querySelector(".container__header");
    var left__container = document.querySelector(".container__left");
    var right__container = document.querySelector(".container__right");
    var footer__container = document.querySelector(".footer__main");
    var img__holder = document.querySelector(".img__parent");

    var homeIcon = document.querySelector(
      ".direction_icon-home"
    );
    
    var iconLeftSmall1 = document.querySelector(
      ".direction_icon__left-small1"
    );
    var iconLeftSmall2 = document.querySelector(
      ".direction_icon__left-small2"
    );
   
 

    var iconRightSmall1 = document.querySelector(
      ".direction_icon__right-small1"
    );
  
    var iconRightSmall3 = document.querySelector(
      ".direction_icon__right-small3"
    );
  

    iconLeftSmall1.setAttribute("style", `
    display:none;
    `)
    iconLeftSmall2.setAttribute("style", `
    display:none;
    `)
   
  
    iconRightSmall1.setAttribute("style", `
    display:none;
    `)
  
    iconRightSmall3.setAttribute("style", `
    display:none;
    `)
  

    homeIcon.setAttribute("style", `
    position: absolute;
  top: 30%;
  right: 8.5%;
  fill: blue;
  width: 2rem;
  height: 2rem;
    `)

    var btnDirectionLeft1 = document.querySelector(
      ".direction_icon-left1"
    );
    var btnDirectionLeft2 = document.querySelector(
      ".direction_icon-left2"
    );
    var btnDirectionLeft3 = document.querySelector(
      ".direction_icon-left3"
    );
    var btnDirectionRight1 = document.querySelector(
      ".direction_icon-right1"
    );

    var btnDirectionRight2 = document.querySelector(
      ".direction_icon-right2"
    );
    var btnDirectionRight3 = document.querySelector(
      ".direction_icon-right3"
    );
    var container__inner1__left = document.querySelector(
      ".container__inner1__left"
    );
    var container__inner1__right = document.querySelector(
      ".container__behave__right"
    );
    var container__inner2__left = document.querySelector(
      ".container__inner2__left"
    );
    var container__inner2__right = document.querySelector(
      ".container__inner2__right"
    );

    img__holder.addEventListener("click", openNext);

    function openNext() {
      header__container.setAttribute(
        "style",
        `
    transform:translateY(-110%);
    `
      );

      left__container.setAttribute(
        "style",
        `
      transform:translateX(-120%);
      `
      );

      right__container.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );

      footer__container.setAttribute(
        "style",
        `
    transform:translateY(100%);
    `
      );
    }
    btnDirectionLeft1.addEventListener("click", returnHome);
    function returnHome() {
      header__container.setAttribute(
        "style",
        `
    transform:translateY(0);
    `
      );

      left__container.setAttribute(
        "style",
        `
      transform:translateX(0%);
      `
      );

      right__container.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );

      footer__container.setAttribute(
        "style",
        `
    transform:translateY(0%);
    `
      );
    }

    btnDirectionRight1.addEventListener("click", openNextInner);

    function openNextInner() {
      container__inner1__left.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );

      container__inner1__right.setAttribute(
        "style",
        `

    transform:translateX(120%);
    `
      );
    }

    btnDirectionLeft2.addEventListener("click", closeNextInner);

    function closeNextInner() {
      container__inner1__left.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );

      container__inner1__right.setAttribute(
        "style",
        `

    transform:translateX(0%);
    `
      );
    }

    

    btnDirectionRight2.addEventListener("click", openNextInner2);

    function openNextInner2() {
      container__inner2__left.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );

      container__inner2__right.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );
    }

    btnDirectionLeft3.addEventListener("click", closeNextInner2);

    function closeNextInner2() {
      container__inner2__left.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );

      container__inner2__right.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );
    }
  }
}
viewSta = window.matchMedia("(min-width:820px)");
myFunction2(viewSta);
viewSta.addListener(myFunction2);

function myFunction(viewStat) {
  if (viewStat.matches) {
    var header__container = document.querySelector(".container__header");
    var left__container = document.querySelector(".container__left");
    var right__container = document.querySelector(".container__right");
    var footer__container = document.querySelector(".footer__main");
    var img__holder = document.querySelector(".img__parent");


    
    var btnDirectionLeftSsmall1 = document.querySelector(
      ".direction_icon-left1"
    );
    var homeIcone = document.querySelector(
      ".direction_icon-home"
    );
    
    var btnDirectionRightSmall1 = document.querySelector(
      ".direction_icon-right1"
    );
    var btnDirectionLeftSmall2 = document.querySelector(
      ".direction_icon-left2"
    );

    var btnDirectionLeft3 = document.querySelector(
      ".direction_icon-left3"
    );

    var btnDirectionRightSmall1 = document.querySelector(
      ".direction_icon-right1"
    );

    var btnDirectionRight2 = document.querySelector(
      ".direction_icon-right2"
    );

    var iconLeftSmall1 = document.querySelector(
      ".direction_icon__left-small1"
    );
    var iconLeftSmall2 = document.querySelector(
      ".direction_icon__left-small2"
    );
   
 

    var iconRightSmall1 = document.querySelector(
      ".direction_icon__right-small1"
    );
  
    var iconRightSmall3 = document.querySelector(
      ".direction_icon__right-small3"
    );
    var iconRightSmall1 = document.querySelector(
      ".direction_icon__right-small1"
    );


    iconRightSmall1.setAttribute("style", `
    display:block;
    `)
    homeIcone.setAttribute("style", `
    position: absolute;
    top: 30%;
    right: 28.5%;
    width: 1.5rem;
    height: 1.5rem;
    `)

    var innerContainerLeft1 = document.querySelector(
      ".container__inner1__left"
    );
    var InnerRight1 = document.querySelector(".container__behave__right");
  
    var containerInner2Left = document.querySelector(
      ".container__inner2__left"
    );
    var containerInner2Right = document.querySelector(
      ".container__inner2__right"
    );




    img__holder.addEventListener("click", openNext);

    function openNext() {
      header__container.setAttribute(
        "style",
        `
    transform:translateY(-110%);
    `
      );

      left__container.setAttribute(
        "style",
        `
      transform:translateX(-120%);
      `
      );

      right__container.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );

      footer__container.setAttribute(
        "style",
        `
    transform:translateY(100%);
    `
      );
    }

    btnDirectionLeftSsmall1.addEventListener("click", closeNextHome);

    function closeNextHome() {
      header__container.setAttribute(
        "style",
        `
    transform:translateY(0%);
    `
      );

      left__container.setAttribute(
        "style",
        `
      transform:translateX(0%);
      `
      );

      right__container.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );

      footer__container.setAttribute(
        "style",
        `
    transform:translateY(0%);
    `
      );
    }
    iconRightSmall1.addEventListener("click", openNextInner);
    function openNextInner() {
      innerContainerLeft1.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );
    }

    iconLeftSmall1.addEventListener("click", closeNextInner);
    function closeNextInner() {
      innerContainerLeft1.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );
    }


    
    var InnerRight1 = document.querySelector(".container__behave__right");
    btnDirectionRightSmall1.addEventListener("click", openThird);
    function openThird() {
      InnerRight1.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );
    }


    btnDirectionLeftSmall2.addEventListener("click", closeopenThird);
    function closeopenThird() {
      InnerRight1.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );
    }

    iconRightSmall3.addEventListener("click", openFourth2);
    function openFourth2() {
      containerInner2Left.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );
    }

    iconLeftSmall2.addEventListener("click", closeFourth2);
    function closeFourth2() {
      containerInner2Left.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );
    }

    btnDirectionRight2.addEventListener("click", openFourth22);
    function openFourth22() {
      containerInner2Right.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );
    }

    btnDirectionLeft3.addEventListener("click", closeFourth22);
    function closeFourth22() {
      containerInner2Right.setAttribute(
        "style",
        `
    transform:translateX(0%);
    `
      );
    }


    
  }
}
viewStat = window.matchMedia("(max-width:375px)");
myFunction(viewStat);
viewStat.addListener(myFunction);
