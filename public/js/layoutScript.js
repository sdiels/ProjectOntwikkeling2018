//automatic scroll
var scroll;
var viewportTop;
function automaticScroll() {
  scroll = setInterval(function(){ window.scrollBy(0,1); }, 6);
}
function automaticScrollFast() {
  scroll = setInterval(function(){ window.scrollBy(0,50); }, 1);
}

//stop scrolling
var x = $('.OtherContent').position();
viewportTop = $(window).scrollTop();

setInterval(function(){ viewportTop = $(window).scrollTop();
  if (viewportTop > (x.top - 120)) {
    clearInterval(scroll);
  }
}, 10);

//scroll triggers
var scrollButton = new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        duration: "20%"
    })
    .setTween(".scrollStory", {
        opacity: 0,
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var skipStory = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween(".skipStory", {
        left: "150%",
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var stats1 = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween("#percentage1", {
        width: "14%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var stats2 = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween("#percentage2", {
        width: "15%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers1",
        duration: "20%"
    })
    .setTween(".storyNumber1", {
        opacity: 1,
        left: "5%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers2",
        duration: "20%"
    })
    .setTween(".storyNumber2", {
        opacity: 1,
        left: "55%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var forum = new ScrollMagic.Scene({
            triggerElement: "#triggers3",
            duration: "20%"
        })
        .setTween(".storyNumber3", {
            opacity: 1,
            left: "5%"
        }) // the tween durtion can be omitted and defaults to 1
        .addTo(controller);
var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers4",
        duration: "20%"
    })
    .setTween(".storyNumber4", {
        opacity: 1,
        left: "55%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
/*****************************************
 *   Collapsable
 *****************************************/

var coll = document.getElementsByClassName("collapsible");
var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }