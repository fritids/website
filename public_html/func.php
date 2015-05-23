<?php

	/**
	 * Quote variable to make safe
	 * $value	Value to be quoted
	 */
	function quote_safe($value) {
	
		// Stripslashes
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		
		// Quote if not integer
		if (!is_numeric($value)) {
			//$value = "'" . mysql_real_escape_string($value) . "'";
			$value = "'" . $value . "'";
		}
		return $value;
	}	

	/**
	 *	Makes a date selector
	 *	One Year, One Month, One Day
	 *	Named with $inName.Year/Month/Day
	 */
	function DateSelector($inName, $useDate=0) { 
		/* create array so we can name months */ 
		$monthName = array(1=> "January", "February", "March", 
		"April", "May", "June", "July", "August", 
		"September", "October", "November", "December"); 
	
		/* if date invalid or not supplied, use current time */ 
		if($useDate == 0) { 
			$useDate = Time(); 
		} 
		
		/* make month selector */ 
		echo "<SELECT NAME=" . $inName . "Month>\n"; 
		for($currentMonth = 1; $currentMonth <= 12; $currentMonth++) { 
			echo "<OPTION VALUE=\""; 
			echo intval($currentMonth); 
			echo "\""; 
			if(intval(date( "m", $useDate))==$currentMonth){ 
				echo " selected=\"selected\""; 
			} 
			echo ">" . $monthName[$currentMonth] . "\n"; 
		} 
		echo "</SELECT>"; 
		
		/* make day selector */ 
		echo "<SELECT NAME=" . $inName . "Day>\n"; 
		for($currentDay=1; $currentDay <= 31; $currentDay++) { 
			echo "<OPTION VALUE=\"$currentDay\""; 
			if(intval(date( "d", $useDate))==$currentDay) { 
				echo " selected=\"selected\""; 
			} 
			echo ">$currentDay\n"; 
		} 
		echo "</SELECT>"; 
		
		/* make year selector */ 
		echo "<SELECT NAME=" . $inName . "Year>\n"; 
		$startYear = date( "Y", $useDate); 
		for($currentYear = $startYear-5; $currentYear <= $startYear;$currentYear++) { 
			echo "<OPTION VALUE=\"$currentYear\""; 
			if(date( "Y", $useDate)==$currentYear) { 
				echo " selected=\"selected\""; 
			} 
			echo ">$currentYear\n"; 
		} 
		echo "</SELECT>"; 
	}

?>