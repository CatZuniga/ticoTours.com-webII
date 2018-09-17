<?php

function createTable($rides){
	 foreach($rides as $ride){
		 
		echo '	<tr>
		<td> <input  type="button" name="view" value="&#xf2c0;  '.$ride['username'].'" id='.$ride['id_user'].' class="fa btn-info btn-xs view_data" /></td>  
		<td>'.$ride['start'].'</td>
		<td>'.$ride['end'].'</td>			
		 <td> 
		 <input  type="button" name="view" value= "&#xf0a4; View"  id='.$ride['id_ride'].' class=" fa btn-info btn-xs view_ride" /></div>
		 </td>  
		 </tr>
		';

		
}	
}


function createTableUser($rides){

	foreach($rides as $ride){
		
	   echo '	<tr>
	   <td>'.$ride['name'].'</td>
	   <td>'.$ride['start'].'</td>
	   <td>'.$ride['end'].'</td>			
	
	   <td>  <input type="submit"  name="update['.$ride['id'].']" value="Edit" /> 
	   <input type="submit"  name="delete" value="Delete" />	
			 </td>
		</tr>
	   ';   
}	
}


?>