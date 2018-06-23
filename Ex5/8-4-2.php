<?php
	$sInput = $_REQUEST["sColor"];
	if(strlen($sInput) == 0)
		return;
	$sResult = "";
	
	$aColors = array("aliceblue","antiquewith","aquamarine","azure","beige", "bisque","black","blanchedalmond","blue","blueviolet","brass","bronze","brown","burlywood","cadetblue","chartreuse","chocolate","copper","coral","cornfloewrblue","cornsilk","cyan","darkblue","darkcyan","darkgoldenrod","darkgray","darkgreen","darkhaki","darkmagenta","darkolivegreen","darkorchid","darkorenge","darkred","darksalmon","darkseagreen","darkslateblue","darkslategray","darkturquoise","darkviolet","deeppink","deepskyblue","dimgray","dodgerblue","feldspar","firebrick","floralwhite","forestgreen","fuchsia","gainsboro","gold","goldenrod","golenrod","gostwhite","gray","green","greenyellow","honeydew","hotpink","indianred","inen","ivory","khaki","lavender","lavenderblush","lawngreen","lemonchiffon","lightblue","lightcoral","lightcyan","lightgodenrod","lightgodenrodyellow","lightgray","lightgreen","lightpink","lightsalmon","lightseagreen","lightskyblue","lightslateblue","lightslategray","lightsteelblue","lightyellow","lime","limegreen","magenta","magenta","maroom","maroon","mediumaquamarine","mediumblue","mediumorchid","mediumpurpul","mediumseagreen","mediumslateblue","mediumspringgreen","mediumturquoise","mediumvioletred","midnightblue","mintcream","mistyrose","moccasin","navajowhite","navy","navyblue","oldlace","olivedrab","orange","orchid","orengered","palegodenrod","palegreen","paleturquoise","palevioletred","papayawhip","peachpuff","peru","pink","plum","powderblue","purple","quartz","red","rosybrown","royalblue","saddlebrown","salmon","sandybrown","scarlet","seagreen","seashell","sienna","silver","skyblue","slategray","snow","springgreen","steelblue","tan","thistle","tomato","turquoise","violet","violetred","wheat","whitesmoke","yellow","yellowgreen");

	for($i=0;$i<count($aColors);$i++){
		if(strstr($aColors[$i],$sInput) != "")
			$sResult .= $aColors[$i] . ",";
	}
	if(strlen($sResult)> 0)									//如果有匹配项
		$sResult = substr($sResult,0,-1);	//去掉最后的“,”号
	echo $sResult;
?>
