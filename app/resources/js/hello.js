$( document ).ready(function() {


	var Timer1;
	var Timer2;
    var Timer4;
    
    //
    Timer0 = setInterval(function(){ fade1() }, 200);
	Timer1 = setInterval(function(){ fade_() }, 400);
    //
    function fade_ () 
    {
        $( "#content" ).fadeTo( "slow", 1 );
        clearInterval(Timer1);
    }

	function fade1 () 
    {
        $({blurRadius: 0}).animate({blurRadius: 5}, {
            duration: 600,
            easing: 'linear', // "swing"
            //
            step: function() {
                $('#bg').css({
                    "-webkit-filter": "blur("+this.blurRadius+"px)",
                    "filter": "blur("+this.blurRadius+"px)"
                });
            }
        });
        clearInterval(Timer0);
	}

	function fade2 () 
	{
		$( "#bottom_panel" ).fadeTo( "slow", 1 );
        $( "#bottom_panel_2" ).fadeTo( "slow", 1 );
		clearInterval(Timer2);
	}

	function fade3 () 
	{
		$( "#hello_logo" ).fadeTo( "slow", 1 );
		clearInterval(Timer3);
	}

    function fade4 () 
    {
        $( "#welcom" ).fadeTo( "slow", 1 );
        clearInterval(Timer4);
    }
});
