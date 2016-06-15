<!DOCTYPE html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Date Function</TITLE>
</HEAD>
<BODY>
<?php

		echo '<h4>Date Format(March 10, 2001, 5:16 pm) :';
		echo date("F j, Y, g:i a");
		echo "<br/>";

		echo 'Date Format(03.10.01): ';
		echo date("m.d.y");
		echo "<br/>";

		echo 'Date Format(Monday 8th of August 2005 03:12:46 PM):';
		echo date('l jS \of F Y h:i:s A');
		echo "<br/>";

		echo 'Date Format(10-March-2001):';
		echo date("j-F-Y");
		echo "<br/>";

		echo 'Date Format(July 1, 2000 is on a Saturday):';
		echo date("l", mktime(0, 0, 0, 7, 1, 2000));
		echo "<br/>";

		echo 'Date Format(Sat Mar 10 17:16:18 MST 2001):';
		echo date("D M j G:i:s T Y");
		echo "<br/>";
		echo 'Date Format(2001-03-10 17:16:18):';
		echo date("Y-m-d H:i:s"); 
		echo "<br/>";

		echo 'Date Format(10, 3, 2001):';
		echo date("j, n, Y");
		echo "<br/>";

		echo "<h4>";
?>
</BODY>	
</HTML>