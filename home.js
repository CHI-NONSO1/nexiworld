function myFunction2(viewSta) {
  if (viewSta.matches) {
    var header__container = document.querySelector(".container__header");
    var left__container = document.querySelector(".container__left");
    var right__container = document.querySelector(".container__right");
    var footer__container = document.querySelector(".footer__main");
    var img__holder = document.querySelector(".img__parent");
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

    container__inner1__left.addEventListener("click", openNextInner);

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

    container__inner2__right.addEventListener("click", openNextInner2);

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

    innerContainerLeft1.addEventListener("click", openNextInner);

    function openNextInner() {
      innerContainerLeft1.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );
    }
    var InnerRight1 = document.querySelector(".container__behave__right");
    InnerRight1.addEventListener("click", openThird);
    function openThird() {
      InnerRight1.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );
    }

    containerInner2Left.addEventListener("click", openFourth2);
    function openFourth2() {
      containerInner2Left.setAttribute(
        "style",
        `
    transform:translateX(-120%);
    `
      );
    }
    containerInner2Right.addEventListener("click", openFourth22);
    function openFourth22() {
      containerInner2Right.setAttribute(
        "style",
        `
    transform:translateX(120%);
    `
      );
    }
  }
}
viewStat = window.matchMedia("(max-width:375px)");
myFunction(viewStat);
viewStat.addListener(myFunction);
