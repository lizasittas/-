var s = location.href.split('#');
var slast = "start";
var sslast;

if(s.length > 1)
{	
	$("."+slast).hide(250);
	$("."+s[1]).show(250);
	slast = s[1];
	
	if(s[1] == 'profile')
		if(!nProf())
		{
			go('auth');
		}
}

function go(j)
{
if(j==slast)return;

	location.href = s[0] + "#" + j;
	$("."+slast).hide(250);
	$("."+j).show(250);
	sslast = slast;
	slast = j;
}

function nProf()
{
	if(localStorage['nick'] != null && localStorage['pass'] != null)
	{		
		$.ajax({
			url: "auth.php",
			type: "POST",
			data: {
			  nick:localStorage['nick'],
			  pass:localStorage['pass']
			},
			success:auth_2part
		});
		
		return true;
	}
	else return false;
}