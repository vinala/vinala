$( document ).ready(function() {


	var Timer1;
	var Timer2;

	// var Timer1 = setInterval(function(){ fade1() }, 1000);
	// var Timer2 = setInterval(function(){ fade2() }, 1500);

	function fade1 () 
	{
		$( "#welcom" ).fadeTo( "slow", 1 );
		clearInterval(Timer1);
	}

	function fade2 () 
	{
		$( "#bottom_panel" ).fadeTo( "slow", 1 );
        $( "bottom_panel_2" ).fadeTo( "slow", 1 );
		clearInterval(Timer2);
	}

	function fade3 () 
	{
		$( "#hello_logo" ).fadeTo( "slow", 1 );
		clearInterval(Timer3);
	}

	$('#form_1').submit(function () {
        $.post('hello/1',$('#form_1').serialize(),function(data)
            {
                if(data=="ok")
                {
                	document.getElementById('dev_nom').innerHTML=document.getElementById('dev_name').value;

                	$( "#etap_1" ).fadeOut( 300, function(){ $( "#etap_2" ).fadeIn( 300 ); } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });

    $('#form_2').submit(function () {
        $.post('hello/2',$('#form_2').serialize(),function(data)
            {
                if(data=="ok")
                {
                	$( "#etap_2" ).fadeOut( 300, function(){ $( "#etap_3" ).fadeIn( 300 ); } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });

    $('#form_3').submit(function () {
        $.post('hello/3',$('#form_3').serialize(),function(data)
            {
                if(data=="ok")
                {
                	$( "#etap_3" ).fadeOut( 300, function(){ $( "#etap_4" ).fadeIn( 300 ); } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });

    $('#form_4').submit(function () {
        $.post('hello/4',$('#form_4').serialize(),function(data)
            {
                if(data=="ok")
                {
                	if(document.getElementById('pnl_route').value!="")
                	   document.getElementById('fst_panel').href=document.getElementById('pnl_route').value;
                    	else  document.getElementById('fst_panel').href="fiesta";
                	$( "#config_logo" ).fadeOut( 300);
                	$( "#etap_4" ).fadeOut( 300, function(){ 
                		Timer3 = setInterval(function(){ fade3() }, 200);
						Timer1 = setInterval(function(){ fade1() }, 400);
						Timer2 = setInterval(function(){ fade2() }, 800);
                	 } );
                }
                else alert('Un erreur est survenue');
            });
        //
        return false;
    });
});
