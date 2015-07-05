$( document ).ready(function() {


	var Timer1 = setInterval(function(){ fade1() }, 1000);
	var Timer2 = setInterval(function(){ fade2() }, 1500);

	function fade1 () 
	{
		$( "#welcom" ).fadeTo( "slow", 1 );
		clearInterval(Timer1);
	}

	function fade2 () 
	{
		$( "#bottom_panel" ).fadeTo( "slow", 1 );
		clearInterval(Timer2);
	}
});