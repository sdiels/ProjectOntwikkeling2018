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
