<?php
$person=array(array("name"=>"Professor",
		    "mob"=>"7887445234",
		    "email"=>"professor042@gmail.com",),
	      array("name"=>"Berlin",
		    "mob"=>"7448553452",
		    "email"=>"berlin252@gmail.com",),
	      array("name"=>"Tokyo",
		    "mob"=>"8245365210",
		    "email"=>"tokyo458@gmail.com",)
	      );

echo "Email";
echo "Professor's Email-ID is: ",$person[0]["email"],"<br>";
echo "Berlin's Email-ID is: ",$person[1]["email"],"<br>";
echo "Tokyo's Email-ID is: ",$person[2]["email"],"<br>";
"<br>";
echo "Mobile No.","<br>";
echo "Professor's Mobile No. is: ",$person[0]["mob"],"<br>";
echo "Berlin's Mobile No. is: ",$person[1]["mob"],"<br>";
echo "Tokyo's Mobile No. is: ",$person[2]["mob"],"<br>";

?>