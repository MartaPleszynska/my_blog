<?php
$postno = "2015-10-01";
$myposttitle = "More CSS notes - display, float and position properties";
$mypostauthor = "Marta Pleszynska";
$mypostdate = "Oct 01, 2015";
$mypostcontent = "<p>Display property - describes the way an element is displayed in a browser, defines the style of a box the element it is using.</p>
<p>Values:\n
<code>block</code> - takes up a full width of a body which means it will not allow another element sit next it even when it width is less than the <code> body </code> width; you can define padding, width, height, margin; height will expand depend on the content;\n
HTML tags with <code>display:block;</code> by default: <code>div, header, footer, section, main</code> and <code>p</code>.\n
<code>inline</code> - does not fill whole width; cannot apply <code>width, height or margin</code> unless applied float property;\n
HTML tags with <code>display:inline;</code> by default: <code>strong, span, input, label</code>.\n
<code>inline-block</code> - treats block element like inline element;\n
note: little space appears between blocks because it takes to account white spaces in html.</p>
<p>Float property - puts an element in their own flow, it is used to create layout (like multiple columns); when applied parent tag/element will not see children elements with float property, to avoid that apply <code>overflow:auto;</code> to the parent; element with absolute position will ignore float property (tbc).\n
Values:left, right</p>
<p>Position property - describes type of positioning method for an element.\n
Values:\n
<code>static</code> - default value.\n
<code>relative</code> - creates new document flow inside original document flow; visually changes position but other elements think that previous position is still occupied and cannot see any child elements within element with position set to relative.\n
<code>fixed</code> - relatively to viewport, lies on top of document flow, has no relationship with parent element.\n
<code>absolute</code> - it is fixed to its first non static parent element, if none found will fix to the body.</p>
<p>Let see how it will look in a browser: black border is the body, dotted blue border represents first parent which is non static, dotted green border is static parent.<br>
Display values:\n
<code>div</code> is by default block so appears in browser like this:\n
<img src=\"img/block.png\" alt=\"display:block\">
When inline-block applied:\n
<img src=\"img/inline-block.png\" alt=\"display:inline-block\">
When inline  and float: left applied:\n
<img src=\"img/inline-float.png\" alt=\"display:inline and float:left\">
It is visible that parent2 does not see children divs.<br>
Here is how it look the overflow: auto is applied and blue and purple divs are floated to the left:\n
<img src=\"img/overflow.png\" alt=\"overflow:auto\">
Position values: Red div has position value static, blue div-relative, green div-fixed and  purple div-absolute; all with <code>top:15px; left:25px;</code>\n
<img  src=\"img/positionbrowser.jpg\" alt=\"different position values in browser\">
Base html used:\n
<img class=\"halfsize\" src=\"img/htmlcode.png\" alt=\"HTML code\">
Base CSS used:\n
<img class=\"halfsize\" src=\"img/csscode.png\" alt=\"CSS code\">";
?>
