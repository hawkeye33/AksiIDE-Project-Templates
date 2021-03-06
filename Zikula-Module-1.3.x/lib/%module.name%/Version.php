<?php
%header%

class %module.name%_Version extends Zikula_AbstractVersion {

	/**
	 * Module meta data.
	 *
	 * @return array Module metadata.
	*/
	public function getMetaData() {
  	$meta = array();
		$meta["displayname"]    = $this->__( "%module.name%");
		$meta["description"]    = $this->__( "%description%");

		//! module name that appears in URL
    // your module page : http://....../%module.id%
		$meta["url"]            = $this->__( "%module.id%");

		$meta["version"]        = "0.0.1";
		$meta["securityschema"] = array(
    	"%module.name%::"      => "::",
	    "%module.name%:User:"  => "UserName::"
    );
		return $meta;
	}
}
