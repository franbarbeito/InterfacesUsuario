$(document).ready(function(){
    
	//Homepage Slider
    var options = {
        nextButton: false,
        prevButton: false,
        pagination: true,
        animateStartingFrameIn: true,
        autoPlay: false,
        autoPlayDelay: 600,
        preloader: true
    };
    var mySequence = $("#sequence").sequence(options).data("sequence");
});