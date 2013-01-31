<?php
  echo "Hiiii";	
  if(isset($_REQUEST[session_name()])) {
    // There is a session already available
    session_start();
  } else {
    session_name('crc');
    session_start();
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<HEAD>
    <?php
    	include_once('classes/crc_constants.mod.php');
    ?>
		<TITLE>
			[FreeSMS: Welcome to the FreeSMS Website]
		</TITLE>
		<LINK HREF="styles/crc_main.css" REL="stylesheet" TYPE="text/css">
		<SCRIPT src="../scripts/tools.js" language="JavaScript" type="text/javascript"></SCRIPT>
	</HEAD>
	<BODY>
		<CENTER>

			<!----------------------------------------------------
			// This is the main bosy of the web page. The page
			// is broken down into 3 groups as follows:
			//
			// - The "Page Header" where the logo should be placed
			//   and anything else that is to be seen on every page.
			//
			// - The "Page Content" where the content text of the
			//   page is to be placed for users to see.
			//
			// - The "Page Footer" where the closing statements
			//   such as webmaster email and any closing statements
			//   should be placed. Again this will be seen on every page.
			//
			// Note that all this should be placed within a table
			// containing 3 rows respectively.
			------------------------------------------------------>

			<TABLE width="100%">
				<!-- The Page Header -->
				<TR CLASS="OUTER">
					<?php
						include "pages/data/crc_page_header_band.html";
					?>
				</TR>

				<!-- The Page Content -->
				<TR CLASS="OUTER">
					<?php
						//include "crc_index_main.html";
						echo '<meta http-equiv="refresh"' . 'content="0;URL=pages/crc_login.php">';
					?>
				</TR>
				<!-- The Page Footer -->
				<TR CLASS="OUTER">
					<?php
						include "pages/data/crc_page_footer_band.html";
					?>
				</TR>
			</TABLE>

		</CENTER>
	</BODY>
</HTML>

