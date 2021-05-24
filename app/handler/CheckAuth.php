<?php

namespace Handler;

class CheckAuth {
 
   public function auth($token)
   {
   	  
   	  if($token!="!@#"){

   	  	return false;
   	  
   	  }else{
   	  
   	    return true;
   	  
   	  }
   	  
   }

}

?>