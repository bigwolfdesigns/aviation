<?php

	$index = "yes";
	$pagename = 'Aviation Metals';

	include("header.php");
	include("control.php");

?>
<style>
	a {
		text-decoration:none;
	}
  a:hover div {
	  background-color: #5790c5;
	  color: black;
  }
  
</style>
<br />
<h1>Choose a Category to Browse</h1>
<table width="560" border="0" cellpadding="4" cellspacing="10" align="left">
	

<?php
			// get the subcategories for this category
			$getsubs = mysql_query("SELECT * FROM categories WHERE cat_parent < '1' ORDER BY cat_name ASC");
			if ($srow = mysql_fetch_array($getsubs))
				{
				do
					{
					$col++;
					if ($col == "1") $xhtml .= '<tr valign="top">';
					$xhtml .= '
	<td width="20%" class="bucket">
	
	<a href="/products/category/' . $srow["cat_id"] . '"><div class="bucket_head style5"><span class="cat_lev_0 cat_lev_0">' . $srow["cat_name"] . '</span></div></a>
	

	<!-- <div class="bucket_image">
	<a href="/products/category/' . $srow["cat_id"] . '"><img src="/images/bucket-metal-background.jpg" /></a>
	</div> -->

	<div class="bucket_text">
	
	</div>
	</td>';
					if ($col == "3")
						{ 
						$xhtml .= "</tr>";
						$col = "0";
						}
					}
				while ($srow = mysql_fetch_array($getsubs));
				//$cf = "1";
				echo $xhtml;
				}
?>

	</tr>
</table>

<script>

</script>

<?php include("footer.php"); ?>
