// Purpose: Updates dynamic cells in the demo index with their data-val attribute.
// Usage: Ensure this script is enqueued via $mwLoad->js('sample.js') so demo lists refresh labels.
function myUpdateDyna ( $el ) {

	var $val = $el.data('val');
	$el.html($val);

} //FUNC myUpdateDyna
