//TEMPLATES

###
uebersicht
###

<html>
<head>
<title>{$mybb->settings['bbname']} - Übersicht der Gruppen</title>
{$headerinclude}
</head>
<body>
{$header}
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
<tr>
<td class="thead"><h2>Übersicht der Gruppen</h2></td>
</tr>
<tr>
<td class="trow1" align="center"><div style="font-size: 20px;">
<a href="groups.php?action=bewerber"><s>Bewerber</s></a><br />
	<font class="gry"><a href="groups.php?action=gryffindor">Gryffindor</a></font> 
	<font class="huf"><a href="groups.php?action=hufflepuff">Hufflepuff</a></font> 
	<font class="rav">  <a href="groups.php?action=ravenclaw">Ravenclaw</a> </font>
	<font class="sly"> <a href="groups.php?action=slytherin">Slytherin</a></font> <br/>
	<font class="hog"> <a href="groups.php?action=hogwartspersonal">Hogwartspersonal</a></font> 
	<font class="son"> <a href="groups.php?action=sonstige">Sonstige</a></font> 
	<font class="tod"> <a href="groups.php?action=todesser">Todesser</a> </font> 
	<font class="ave"> <a href="groups.php?action=aversio">Aversio</a> </font> 
</div>
</td>
</tr>
</table>
{$footer}
</body>
</html>

###
uebersicht_bit
###

<div class="mitglied" style="height: 360px">
	<div class="username">{$user}</div>
	<div class="postbituser" style="width:250px; margin: 3px 0;">{$row['fid40']}</div>
	<div>{$user_ava}</div>
		
	<div class="postbituser" style="width:250px; margin: 3px 0;">gespielt von <i>{$row['fid4']}</i></div>	
	<div class="postbituser" style="width:250px; margin: 3px 0;">Seit <i>{$row['regdate']}</i> || Posts <i>{$row['postnum']}</i> </div>
	<div class="postbituser" style="width:250px; margin: 3px 0;">Letzte Aktivität {$row['lastvisit']}</div>
</div>

###
uebersicht_gruppen
###

<html>
<head>
<title>{$mybb->settings['bbname']} - Übersicht der {$gruppe}</title>
{$headerinclude}
</head>
<body>
{$header}
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
<tr>
<td class="thead"><h2>{$gruppe}</h2></td>
</tr>
<tr>
<td class="trow1" align="center">
{$user_bit}
</td>
</tr>
</table>
{$footer}
</body>
</html>
