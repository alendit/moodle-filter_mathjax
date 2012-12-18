<?php
defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Display maths using MathJax';
$string['distroothttp'] = 'MathJax base URL (http)';
$string['distroothttp_descr'] = 'HTTP URL to a preferred MathJax distribution. When left empty, the MathJax.org CDN will be used.';
$string['distroothttps'] = 'MathJax base URL (https)';
$string['distroothttps_descr'] = 'HTTPS URL to a preferred MathJax distribution. When left empty, the MathJax.org CDN will be used.';
$string['singledollar'] = 'Parse single-dollar';
$string['singledollar_descr'] = 'Accept inline math in  single-dollar delimiters.';
$string['parentheses'] = 'Parse escaped parentheses';
$string['parentheses_descr'] = 'Accept inline math in escaped parentheses ( \\\\(...\\\\ ) ) delimiters';
$string['doubledollar'] = 'Parse double-dollar';
$string['doubledollar_descr'] = 'Accept block math in double-dollar delimiters.';
$string['bracket'] = 'Parse bracket';
$string['bracket_descr'] = 'Accept block math in escaped bracket delimiters.';
$string['mathtag'] = 'Parse math element';
$string['mathtag_descr'] = 'Accept block math in <math /> element.';
$string['begintag'] = 'Parse \\begin tag';
$string['begintag_descr'] = 'Parse latex code enclosed in \\begin...\\end tags';