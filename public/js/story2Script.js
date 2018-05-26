var bg1 = new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        duration: 500
    })
    .setTween("#bg1", {
        opacity: 0
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var serveerster = new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        duration: 500
    })
    .setTween("#serveerster", {
        left: "55%",
        top: "80%",
        scale: 1.2
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var text1 = new ScrollMagic.Scene({
        triggerElement: "#trigger2",
        duration: 200
    })
    .setTween("#text1", {
        left: "5%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var serveerster2 = new ScrollMagic.Scene({
        triggerElement: "#trigger3",
        duration: 500
    })
    .setTween("#serveerster", {
        opacity: 0
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var frame1 = new ScrollMagic.Scene({
        triggerElement: "#trigger3",
        duration: 500
    })
    .setTween("#fdiv1", {
        left: "5%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var mannen = new ScrollMagic.Scene({
        triggerElement: "#trigger3",
        duration: 500
    })
    .setTween("#mannen", {
        top: "6%"
    }) // the tween durtion can be omitted and defaults to 1
.addTo(controller);

var text2 = new ScrollMagic.Scene({
        triggerElement: "#trigger4",
        duration: 200
    })
    .setTween("#text2", {
        left:"60%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var frame2 = new ScrollMagic.Scene({
        triggerElement: "#trigger5",
        duration: 500
    })
    .setTween("#fdiv2", {
        left: "50%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var man = new ScrollMagic.Scene({
        triggerElement: "#trigger5",
        duration: 600
    })
    .setTween("#man", {
        left: "-20%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var text3 = new ScrollMagic.Scene({
        triggerElement: "#trigger6",
        duration: 200
    })
    .setTween("#text3", {
        left:"5%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var bigMan = new ScrollMagic.Scene({
        triggerElement: "#trigger7",
        duration: 400
    })
    .setTween("#bigMan", {
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var text4 = new ScrollMagic.Scene({
        triggerElement: "#triggertext4",
        duration: 200
    })
    .setTween("#text4", {
        opacity: 1,
        top: "410%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var bg = new ScrollMagic.Scene({
        triggerElement: "#trigger8",
        duration: 100
    })
    .setTween("body", {
        backgroundColor: "black"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var text5 = new ScrollMagic.Scene({
        triggerElement: "#trigger9",
        duration: 200
    })
    .setTween("#text5", {
        top: "510%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var frame3 = new ScrollMagic.Scene({
        triggerElement: "#trigger10",
        duration: 500
    })
    .setTween("#fdiv3", {
        left: "5%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var man3 = new ScrollMagic.Scene({
        triggerElement: "#trigger10",
        duration: 500
    })
    .setTween("#man3", {
        left: "0%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var text6 = new ScrollMagic.Scene({
        triggerElement: "#trigger11",
        duration: 200
    })
    .setTween("#text6", {
        left: "55%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);

var frame4 = new ScrollMagic.Scene({
        triggerElement: "#trigger12",
        duration: 500
    })
    .setTween("#fdiv4", {
        left: "50%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var bg4 = new ScrollMagic.Scene({
        triggerElement: "#trigger12",
        duration: 500
    })
    .setTween("#bg4", {
        right: "-15%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var text7 = new ScrollMagic.Scene({
        triggerElement: "#trigger13",
        duration: 200
    })
    .setTween("#text7", {
        left:"5%",
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var body = new ScrollMagic.Scene({
        triggerElement: "#trigger15",
        duration: "20%"
    })
    .setTween("#whiteScreenEnd", {
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var body = new ScrollMagic.Scene({
        triggerElement: "#trigger15",
        duration: "20%"
    })
    .setTween("body", {
        backgroundColor: "white"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
var text8 = new ScrollMagic.Scene({
        triggerElement: "#trigger16",
        duration: "70%"
    })
    .setTween("#text8", {
        opacity: 1,
        top: "760%"
    }) // the tween durtion can be omitted and defaults to 1
    .addTo(controller);
