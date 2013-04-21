<?php
class ResizeCode {
	function resizeMarkup($markup, $dimensions) {
		$w = $dimensions['width'];
		$h = $dimensions['height'];

		$patterns = array();
		$replacements = array();
		if (!empty($w)) {
			$patterns[] = '/width="([0-9]+)"/';
			$patterns[] = '/width:([0-9]+)/';

			$replacements[] = 'width="' . $w . '"';
			$replacements[] = 'width:' . $w;
		}

		if (!empty($h)) {
			$patterns[] = '/height="([0-9]+)"/';
			$patterns[] = '/height:([0-9]+)/';

			$replacements[] = 'height="' . $h . '"';
			$replacements[] = 'height:' . $h;
		}

		return preg_replace($patterns, $replacements, $markup);
	}

}
?>