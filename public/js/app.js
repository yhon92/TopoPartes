function validateString (string) {
	if(tourString(string) === false ) {
			return false
	} else {
		return true
	}
}

function tourString(string) {
	for ( i = 0; i < string.length; i++ ) {
		if ( string.charAt(i) != " " ) {
			return true
		}
	}
	return false
}