<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>goosh.org - the unofficial google shell.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />  
<style type="text/css">
html { height: 100%; }
body { background: #fff; font-size: 12px; font-family: monospace; height: 99%; margin:0px; padding: 0px; }
form { padding: 0px; margin: 0px; }
pre { font-size: 12px; }
br { clear: both; }
:focus { outline: 0; }
input.cmdline { border: none; border: 0px; font-size: 12px; font-family: monospace; padding: 0px; margin:0px; width:100%; }
table.inputtable { width:100%; vertical-align:top; }
td.inputtd { width:100%; }
#input { margin-left: 8px; color: #666; overflow: hidden; }
#output{ margin-left: 8px; margin-top: 8px; }
.less { color: #666; }
.info { color: #090; }
table { padding: 0px; margin: 0px; border-collapse: collapse; border-spacing: 0px; }
td { padding: 0px; margin: 0px; vertical-align: top; font-size: 12px; font-family: monospace; }
.help td { padding-right: 25px; font-size: 12px; }
div#prompt { display: inline; white-space:nowrap; padding:0px; margin:0px; }
img { border: none; }
</style>
<script type="text/javascript">
//<!--
/*
 Goosh.org (c) 2008 - Stefan Grothkopp

 This script is a google-interface that behaves similar to a unix-shell.

 goosh is written by Stefan Grothkopp (grothkopp (at) gmail (dot) com)
 it is NOT an official google product!

 If you want to extend goosh.org, please take a look at the load command.
 You can see an example module at http://goosh.org/ext/spon.js

 Uncompressed source can be found at:
 http://code.google.com/p/goosh/
 Instructions for svn access are at:
 http://code.google.com/p/goosh/source/checkout

 If you have problems/bug reports/etc please write me an email.

*/

</script>
<meta name="description" content="goosh is a google-interface that behaves similar to a unix-shell."/>
<meta name="keywords" content="google, shell, google shell, commandline, cli, bash, interface, ajax, api, unix, search"/>
<meta name="author" content="Stefan Grothkopp"/>
</head>
<body id="body">
<div id="output">

 
<span class='less'>Goosh goosh.org 0.5.0-beta #1 Mon, 23 Jun 08 12:32:53 UTC Google/Ajax</span><br/> 
 <br/>
<span class='info'>Welcome to goosh.org - the unofficial google shell.</span><br/>
 <br/>
This google-interface behaves similar to a unix-shell.<br/>
You type commands and the results are shown on this page.<br/>
<br/>
goosh is powered by <a href='http://code.google.com/apis/ajax/' target='_blank'>google</a>.
<br/>
<br/>
goosh is written by <a href='http://stefan.grothkopp.com/tag/goosh'>Stefan Grothkopp</a> 
<script type="text/javascript">
// <!--
var gmail = "gmail.com";
document.write("&lt;<a href='mailto:grothkopp"+"@"+gmail+"?subject=goosh.org' style='text-decoration:none; color: #000;'>grothkopp"+"@"+gmail+"</a>&gt;");
//-->
</script>
<br/>
it is NOT an official google product!<br/>
goosh is <a href='http://code.google.com/p/goosh/' target='_blank'>open source</a> under the Artistic License/GPL.<br/>
<br/>
 Enter <span class='info'>help</span> or <span class='info'>h</span> for a list of commands.
<br/>
 <br/>
</div>
<div id="input">
<form name='f' onsubmit='return false;' class='cmdline' action=''>
<table class="inputtable"><tr><td><div id='prompt' class='less'></div></td><td class="inputtd"><input id='inputfield' name='q' type='text' class='cmdline' autocomplete='off' value="" /></td></tr></table>
</form>
</div>
</body>
</html>
