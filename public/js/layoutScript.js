var skipStory = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween(".skipStory", {
        left: "150%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "opacity skip text"
    }) // add indicators (requires plugin)
    .addTo(controller);
var stats1 = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween("#percentage1", {
        width: "3%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "percentage 1"
    }) // add indicators (requires plugin)
    .addTo(controller);
var stats2 = new ScrollMagic.Scene({
        triggerElement: "#triggeri1",
        duration: "20%"
    })
    .setTween("#percentage2", {
        width: "15%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "percentage 2"
    }) // add indicators (requires plugin)
    .addTo(controller);

var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers1",
        duration: "20%"
    })
    .setTween(".storyNumber1", {
        opacity: 1,
        left: "5%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "div 1 forum (opacity: 1)"
    }) // add indicators (requires plugin)
    .addTo(controller);
var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers2",
        duration: "20%"
    })
    .setTween(".storyNumber2", {
        opacity: 1,
        left: "55%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "div 1 forum (opacity: 1)"
    }) // add indicators (requires plugin)
    .addTo(controller);
var forum = new ScrollMagic.Scene({
            triggerElement: "#triggers3",
            duration: "20%"
        })
        .setTween(".storyNumber3", {
            opacity: 1,
            left: "5%"
        }) // the tween durtion can be omitted and defaults to 1
        .addIndicators({
            name: "div 1 forum (opacity: 1)"
        }) // add indicators (requires plugin)
        .addTo(controller);
var forum = new ScrollMagic.Scene({
        triggerElement: "#triggers4",
        duration: "20%"
    })
    .setTween(".storyNumber4", {
        opacity: 1,
        left: "55%"
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "div 1 forum (opacity: 1)"
    }) // add indicators (requires plugin)
    .addTo(controller);
var forumMore = new ScrollMagic.Scene({
        triggerElement: "#triggers8",
        duration: "20%"
    })
    .setTween(".zieMeer", {
        opacity: 1
    }) // the tween durtion can be omitted and defaults to 1
    .addIndicators({
        name: "div 1 forum (opacity: 1)"
    }) // add indicators (requires plugin)
    .addTo(controller);
