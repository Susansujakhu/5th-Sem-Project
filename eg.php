
LVL 38
Tom BeckCommented: 2010-09-08
The better way to do this is to avoid popup windows and use divs that you toggle visibility when needed. Then there are no problems with users who have popups blocked. Plus you can disable the underlying content by covering it with a semi-transparent div that makes your "pop up" div demand attention.

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
<title>Untitled</title>
<style type="text/css">
  <!--
    .contain
    {
        position:fixed;
        top:0px;
        left:0px;
        display:none;
	    width:100%;
	    height:100%;
        background-color: #333; 
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; 
        filter: alpha(opacity=50); 
        opacity: 0.5;
        z-index:200;
        visibility:hidden;
    }
    .popup {
        position: absolute;
        top: 100px;
        left: 425px;
        width: 120px;
        height: 120px; 
        background-color:#fff;
        z-index:300;
        visibility:hidden;
    }
  -->
</style>
</head>
<body>
<br />
<p>
<a href="javascript:show();">Show</a>
</p>
<br />
<div id="screen" class="screen"></div>
<div id="popup" class="popup"><a href="javascript:hide();">Hide</a></div>
<script language="javascript" type="text/javascript">
function show() {
    document.getElementById("screen").style.display = 'block';
    document.getElementById("screen").style.visibility = 'visible';
    document.getElementById("popup").style.visibility = 'visible';
}
function hide() {
    document.getElementById("screen").style.display = 'none';
    document.getElementById("screen").style.visibility = 'hidden';
    document.getElementById("popup").style.visibility = 'hidden';
}
</script>
</body>
</html>

