<?php
	class DbComponent {
		var $settings;
		function getSettings() {
			// Database variables
			$settings["dbhost"] = "79.170.40.41";
			$settings["dbusername"] = "web41-swift";
			$settings["dbpassword"] = "dBaseLocked!";
			$settings["dbname"] = "web41-swift";
			return $settings;
		}
	}
?>