$(document).ready(function() {
    //cache a few static values
    var box = $('#box');
    var width = box.width();
    var height = box.height();
    var beer = $('.beer');
    var count = 0;
    var startdate = encodeURI(new Date().toString());

    //our main animation "loop"

    beer.each(function foo() {

        //generate random values
        var top = (Math.random() * height) | 0;
        var left = (Math.random() * width) | 0;
        var time = Math.random() * (800 - 400) + 1600 | 0;

        //animate
        //we introduce a random value so that they aren't moving together
        //after the animation, we call foo for the current element
        //to animate the current element again
        $(this).animate({
            left: left,
            top: top
        }, time, foo);
    });

    $(".beer").on("click", function()
    {
        count++;
        if(count==10){
            console.log('#winning like charlie sheen');
            var stupidjavascript = encodeURI(new Date().toString());
            window.location.href = "game3.php?start="+startdate+"&end=" + stupidjavascript;
        }
        $(this).remove(); 
        console.log('clicked beer!');
    });
});