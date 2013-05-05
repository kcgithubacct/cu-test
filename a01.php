<html>
<head>    
<style>
body,p {
  color: rgb(26, 84, 136);
  display: inline;
  font-family: arial, helvetica, verdana, sans-serif;
  font-size: 16px;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  height: auto;
  line-height: 16px;
  margin-left: 8px;
  margin-right: 8px;
  text-align: left;
  text-decoration: none;
}
h3
{
text-shadow: 2px 2px 6px #aaaaaa;
}
   div  
   {  
   border:2px solid #a1a1a1;  
   padding:10px 40px;
   background:#dddddd;
   width:300px;
   border-radius:25px;
   -moz-border-radius:25px; /* Old Firefox */
   width:100px;
   height:75px;
   background-color:#dddddd;
   }
   div#div2
   {  
   transform:rotate(30deg);
   -ms-transform:rotate(30deg); /* IE 9 */  
   -moz-transform:rotate(30deg); /* Firefox */  
   -webkit-transform:rotate(30deg); /* Safari and Chrome */  
   -o-transform:rotate(30deg); /* Opera */
   }
   </style>
</head>
<body>
<h3>This page is create using text editor on github site  name is kcgithubacct</h3>
<h3>H3 style read: text-shadow: 2px 2px 6px #aaaaaa</h3>
<p>It works! set lot of CSS style too. You have to go to your github account under master dir. add new or edit web page , Once you commit then you can view your new page right away at  cu-test.azurewebsites.net/a01.php  This is this page and just example</p>

<?php
echo ("Hello World!");
echo ("\nThis one is an echo by php\n");

echo "This spans
multiple lines. The newlines will be
output as well";

echo "This spans\nmultiple lines. The newlines will be\noutput as well.";

echo "Escaping characters is done \"Like this\".";

// You can use variables inside of an echo statement
$foo = "foobar";
$bar = "barbaz";

echo "foo is $foo"; // foo is foobar

?>

<p>I will add some formatting now</p>
<div>Hello. This is a DIV element.</div>
<div id="div2">Hello. This is a tilt DIV ID div2 element.</div>
</body>
</html>
