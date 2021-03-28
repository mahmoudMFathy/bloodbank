<?php
     include 'task2.html';
    	                        // *b 2 s
echo"<div class='starasc'>";
    for ($i=1; $i<=8; $i++)	
    {	 
    for($j=1;$j<=$i;$j++)	  
    {	  	
    echo " * ";	 
    }	  	
    echo "<br/>";   	
    }  
echo"</div>";

                                //  s 2 b
echo"<div class='stardes'>";
    for ($i=8; $i>=1; $i--)	
    {	 
    for($j=1;$j<=$i;$j++)	  
    {	  	
    echo " * ";	 
    }	  	
    echo "<br/>";   	
    }
echo"</div>";
                                //  * b 2 s
echo"<div class='starascr'>";
    for ($i=1; $i<=8; $i++)	
    {	 
    for($j=1;$j<=$i;$j++)	  
    {	  	
    echo " * ";	 
    }	  	
    echo "<br/>";   	
    }  
echo"</div>";
                                //  s 2 b
echo"<div class='stardesr'>";
    for ($i=8; $i>=1; $i--)	
    {	 
    for($j=1;$j<=$i;$j++)	  
    {	  	
    echo " * ";	 
    }	  	
    echo "<br/>";   	
    }
echo"</div>";
