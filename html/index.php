<?php file_put_contents("time.php", time()."\nEND"); ?>
<html>

<div id="lastonline"></div>
<pre><div id="status"></div></pre>

<script src="https://code.jquery.com/jquery-3.1.0.min.js" type="text/javascript"></script>
 
<script type="text/javascript">
 
$(function() {
 
    getStatus();
 
});

$(function() {
 
    getOnline();
 
});

$(function() {
 
    getLocal();
 
});
 
function getStatus() {
 
    $('div#status').load('show_output.php');
    setTimeout("getStatus()",2000);
 
}

function getOnline() {
 
    $('div#lastonline').load('lastonline.php');
    setTimeout("getOnline()",2000);
 
}

function getLocal() {
 
    $('div#localfiles').load('list.php');
    setTimeout("getLocal()",2000);
 
}
 
</script>
 

<form action="cmd.php" method="post">
Command: <input type="text" name="cmd" id="cmd"><br>
Spec command: <input type="text" name="spec" id="spec"><br>
</form>


<script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
				
               $.post( 
                  "cmd.php",
                  { cmd: $("#cmd").val(),spec: $("#spec").val() },
                  function(data) {
                     $('#stage').html(data);
                  }
               );
					
            });
				
         });
      </script>
   </head>
	
   <body>
	
      <input type = "button" id = "driver" value = "send" />

   </body>
<font size="1" color="red">Warning! If spec command is specified, all others are forced null</font>
<pre>files on server:</pre>
<pre><div id="localfiles"></div></pre>

</html>



