    var bg1 = new ScrollMagic.Scene({
            triggerElement: "#trigger1",
            duration: 500
        })
        .setTween("#bg1", {
            opacity: 0
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "bg1 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var tram = new ScrollMagic.Scene({
            triggerElement: "#trigger1",
            duration: "50%"
        })
        .setTween("#tram", {
            left: "10%",
            top: "75%",
            scale: 1.3
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "tram (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);

    var text1 = new ScrollMagic.Scene({
            triggerElement: "#trigger2",
            duration: "20%"
        })
        .setTween("#text1", {
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text1 (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);



    var frame1 = new ScrollMagic.Scene({
            triggerElement: "#trigger3",
            duration: "50%"
        })
        .setTween("#fdiv1", {
            left: "5%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "frame 1 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);

    var text2 = new ScrollMagic.Scene({
            triggerElement: "#trigger4",
            duration: "20%"
        })
        .setTween("#text2", {
            left:"60%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text2 (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);


    var frame2 = new ScrollMagic.Scene({
            triggerElement: "#trigger5",
            duration: "50%"
        })
        .setTween("#fdiv2", {
            left: "50%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "frame 2 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var man = new ScrollMagic.Scene({
            triggerElement: "#trigger5",
            duration: "60%"
        })
        .setTween("#man", {
            right: "1%"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "man (duration: 200)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text3 = new ScrollMagic.Scene({
            triggerElement: "#trigger6",
            duration: "20%"
        })
        .setTween("#text3", {
            left:"5%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text3 (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);

    var face = new ScrollMagic.Scene({
            triggerElement: "#trigger7",
            duration: "30%"
        })
        .setTween("#face", {
            opacity: 1
        })// the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "face (duration: 300)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text4 = new ScrollMagic.Scene({
            triggerElement: "#trigger8",
            duration: "20%"
        })
        .setTween("#text4", {
            top: "365%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text4 (duration: 200)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var body = new ScrollMagic.Scene({
            triggerElement: "#trigger8",
            duration: "10%;"
        })
        .setTween("body", {
            backgroundColor: "black"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "body (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text5 = new ScrollMagic.Scene({
            triggerElement: "#trigger9",
            duration: "30%"
        })
        .setTween("#text5", {
            top: "470%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text5 (duration: 200)"
        }) // add indicators (requires plugin)
        .addTo(controller);


    var frame3 = new ScrollMagic.Scene({
            triggerElement: "#trigger10",
            duration: "50%"
        })
        .setTween("#fdiv3", {
            left: "5%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "frame 3 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var man2 = new ScrollMagic.Scene({
            triggerElement: "#trigger10",
            duration: "50%"
        })
        .setTween("#man2", {
            left: "0%"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "man 2 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text6 = new ScrollMagic.Scene({
            triggerElement: "#trigger11",
            duration: "20%"
        })
        .setTween("#text6", {
            left: "55%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text 6 (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);


    var frame4 = new ScrollMagic.Scene({
            triggerElement: "#trigger12",
            duration: "50%"
        })
        .setTween("#fdiv4", {
            left: "50%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "frame 4 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var bg4 = new ScrollMagic.Scene({
            triggerElement: "#trigger12",
            duration: "50%"
        })
        .setTween("#bg4", {
            right: "-15%"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "bg 4 (duration: 500)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text7 = new ScrollMagic.Scene({
            triggerElement: "#trigger13",
            duration: "20%"
        })
        .setTween("#text7", {
            left:"5%",
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text7 (duration: 50)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var frame4WhiteScreen = new ScrollMagic.Scene({
            triggerElement: "#trigger14",
            duration: "20%"
        })
        .setTween("#whiteScreenEnd", {
            opacity: 1
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "frame 4 white screen (duration: 200)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var body = new ScrollMagic.Scene({
            triggerElement: "#trigger15",
            duration: "10%"
        })
        .setTween("body", {
            backgroundColor: "white"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "body (duration: 100)"
        }) // add indicators (requires plugin)
        .addTo(controller);
    var text8 = new ScrollMagic.Scene({
            triggerElement: "#trigger16",
            duration: "70%"
        })
        .setTween("#text8", {
            opacity: 1,
            top: "760%"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "text8 (duration: 700)"
        }) // add indicators (requires plugin)
        .addTo(controller);