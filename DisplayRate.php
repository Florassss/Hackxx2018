<!DOCTYPE html>
<html lang="en-US">

	<head>
  		<title>Rate!</title>
  		<meta charset="UTF-8">
	</head>

	<body>

   <style type="text/css">
   body{
         background-color:#6D6868;
         margin:200px 200px 200px 200px;
   }
   </style>

  		<h1 style="color:#FFFFFF;"><font face="Arial">Rate!</font></h1>

		<form action="DisplayRate.php" id="form1" name="form1" method="POST">
			<h3 style="color:#FFFFFF;">You are taking this class for...</h3>
				<lable style="color:#FFFFFF;">
					<input type="radio" name="Poll" value="major" id="Poll1" />
					Major
				</lable>

				<lable style="color:#FFFFFF;">
					<input type="radio" name="Poll" value="minor" id="Poll2" />
					Minor
				</lable>

				<lable style="color:#FFFFFF;">
					<input type="radio" name="Poll" value="other" id="Poll3" />
					Other
				</lable>
            <br><br>

  			<label style="color:#FFFFFF;"> Comment: <br>
  				<textarea name="Comment" class="Input" style="width: 300px"></textarea>
  			</label>
  			<br><br>

        	<input type="submit" name="Submit" value="Submit" class="Submit">
		</form>




  		<h1 style="color:#FFFFFF;"><font face="Arial">Existing Ratings</font></h1>
		
		<?php

			if($_POST['Submit']){

				$Purpose = $_POST['Poll'];
				$Comment = $_POST['Comment'];

				$rFile = fopen ("ratings.txt", "r+t");
				$rFile_old = fread ($rFile, 1024);

				$rFile_w = fopen ("ratings.txt", "w+");
				$curr = "Taking this class for: "."<b>".$Purpose."</b><br>"."Opinions:"."<br>"."	".$Comment."<br>\n".$rFile_old."\n";
				fwrite($rFile_w, $curr);
				echo $curr;
				echo "\n";
				fclose($rFile_w);
				fclose($rFile);
			}

		?>



	</body>
</html>