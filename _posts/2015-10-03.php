<?php


$postno = "2015-10-03";
$myposttitle = "CSS selectors";
$mypostauthor = "Marta Pleszynska";
$mypostdate = "Oct 03, 2015";
$mypostcontent = "<p>Here are some noted selector we have talked about:</p>
<p>
For element(s) with specified class:\n
<code>.classname{}</code>\n
For element(s) with specified id:\n
<code>#idname {}</code>\n
For all elements:\n
<code>* {}</code>
</p>
<p>The same style for different elements:\n
<code>selector1, selector2 {attribute:value;}</code>\n
Example: <code>p, a {text-decoration:underline;}</code> - will apply underline to all p and a elements.<br>
For all elements(2) inside another element(1):\n
<code>selector1 selector2 {attribute:value;}</code><br>
For all elements (2) that is a direct children of its parent element(1):\n
<code>selector1 > selector2 {attribute:value;}</code><br>
For every element(2) that has a direct parent element(1):\n
<code>selector1 ~ selector2 {attribute:value;}</code><br></p>
<p>Selector with specific attribute:\n
<code>selector[attribute]{attribute:value;}</code>\n
<code>selector[attribute=value]{attribute:value;}</code>\n
Example: <code>input[type=radio]{}</code>\n
Specific selector inside another selector:\n
<code>selector1 selector2+selector2+selector2 {attribute:value;}</code>\n
(third selector2 inside selector1 - must be directly after...)</p>
<p><code>selector:hover{}</code> - for the elements on mouse over\n
<code>selector:active{}</code> - for an active link\n
<code>selector:focus{}</code> - for the element which has focus\n
<code>selector:selected{}</code> - (for radio buttons, dropdown)\n
<code>selector:checked{}</code> - (for check boxes)\n
<code>selector:visited{}</code> - for all visited links\n
<code>selector:required{}</code> - for input elements with the \"required\" attribute specified\n
<code>selector:empty{}</code> - for every element that has no children\n
<code>selector:nth-child(n){}</code> - for every element that is the n-th child of its parent\n
<code>selector:nth-of-type(n){}</code> - for every selected element that is the n-th element of its parent of the same type\n
Example: <code>p:nth-of-type(4)</code> -	selects every <p> element that is the fourth <p> element of its parent\n
<code>selector:first-child{}</code> - for the first child of the selected element\n
<code>selector:last-child{}</code> - for the last child of the selected element (not widely supported yet)\n
<code>selector::before{}</code> - inserts something directly before the content of selected element but after the previous one.\n
<code>selector::after{}</code> - inserts something directly after the content of selected element but before the next one.\n
Example:\n
<code>li::before{content:\">\"}</code>\n
inserts '>' before each list element</p>
<p>For more about selectors and more example checkout following links:
<ul class=\"list\">
<li><a href=\"http://www.w3schools.com/cssref/css_selectors.asp\">w3schools-selector reference</a></li>
<li><a href=\"http://www.w3schools.com/cssref/trysel.asp\">w3schools-try it</a></li>
<li><a href=\"http://www.w3.org/TR/css3-selectors/\">w3-css3 selectors</a></li>
</ul></p>";

// $currentpost = $_GET['currentpost'];
//
// if($currentpost == NULL){
//   $currentpost = $postno;
// }
?>
