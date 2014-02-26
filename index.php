<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php


function Readhtml()
{
	# code...

	@$doc->loadhtmlfile('index.html');
	//@$doc->loadhtmlfile($value);
	//echo 1;
	$p = $doc->getElementsByTagName('p');
	if ( $p && 0<$p->length ) {
		// وجدت أن الفقرة التي نريدها ترتيبها الرابع
	    $p = $p->item(3);
	    echo $doc->savehtml($p);
		echo 2;
	    // اذا أردت حذف  الوسوم
	    //echo strip_tags($doc->savehtml($p))
	}
	
};






function DirParc($path){

	$_dir = opendir($path) ;
	while(false !==($_file= readdir($_dir))){
		if (is_dir($path.$_file) &&  $_file!=".." &&  $_file!="."  ) {
			print $_file;
			//Readhtml($_file);
			DirParc($path.$_file.'/');
		} else if(is_file($path.$_file) && $_file!=".." &&  $_file!="."   )
		{ 
			print $_file."<br/>";
			//echo 0;
			$doc = new DOMDocument;
			@$doc->loadhtmlfile('index6.html');
			//echo 1;		
			$p = $doc->getElementsByTagName('p');
			//echo 2;		
			if ( $p && 0 < $p->length ) {
				// وجدت أن الفقرة التي نريدها ترتيبها الرابع
				
				$p = $p->item(3);
				//echo 3;
				echo $doc->savehtml($p);
				//echo 4;
				
				// اذا أردت حذف  الوسوم
				//echo strip_tags($doc->savehtml($p))
			}			
		}
	};
}
//   'pan/' هذا مجلد html 
DirParc('pan/');

//Readhtml('index.html');



?>