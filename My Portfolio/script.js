var typed = new Typed(".multiple-text",{
    strings:["Web Designer","Graphic Designer"],
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true

})

$(document).ready(function(){
    $(".counter").counterUp({
        delay:10,
        time:1200
    });
});