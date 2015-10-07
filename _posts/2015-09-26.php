<?php
$postno = "2015-09-26";
$myposttitle = "Form validation - some code behind the Belbin Test website";
$mypostauthor = "Marta Pleszynska";
$mypostdate = "Sep 26, 2015";
$mypostcontent = "<p>I thought I will share some code which have been used for validation on registration page to create Belbin 1.0.</p>
<p>JavaScript can be used validate forms on client side, before the request is sent to the server. By using regular expressions, we can check value inputed in text boxes against the valid characters. Here are two simple funtions in JavaScript that will validate first and last name.</p>
<img class=\"halfsize\" src=\"img/validateFirstName.jpg\" alt=\"First Name Validation\">
<img class=\"halfsize\" src=\"img/validateLastName.jpg\" alt=\"Last Name Validation\">
<p>Both functions will validate input text from a text boxes and checked them against set of agreed characters. Values will be cleared if entered incorrectly and it will not allow to submit a form - which in this case, to register.</p>
<p>If you try to register with empty fields you will get alert message:</p>
<img class=\"halfsize\" src=\"img/alertmsg.jpg\" alt=\"Alert message\">
<p>Which another JavaScript function is responsible for.</p>
<img class=\"halfsize\" src=\"img/validateOnSubmit.jpg\" alt=\"Alert message on submitted\">
<p>Where JavaScript does not work correctly in a browser or it is switched off, validation is done using php and this is a server side validation.</p>
<img class=\"halfsize\" src=\"img/phpfunction.jpg\" alt=\"PHP function\">
<p>This php function has the same purpose as javascript one.</p>
<p>Validation of forms is important. By restricting input of characters and their length you can avoid incorrect entries being submitted to the database but also it can help defend against malicious attacks like SQL injections.</p>
<p><a href=\"https://validator.w3.org/docs/why.html\">Read more</a> about why validate websites.</p>";
?>
