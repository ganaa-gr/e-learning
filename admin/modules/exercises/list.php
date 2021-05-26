<?php
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
      <div class="module-head"> 
            <h1 class="page-header">Асуултуудын жагсаалт <a href="index.php?view=add" class="btn btn-primary">Нэмэх</a> </h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class=" datatable-1 table table-bordered table-hover" cellspacing="0" style="font-size:12px" >
				
				  <thead>
				  	<tr> 
				  		<th>Хичээл</th>
				  		<th>Асуулт</th>
				  		<th>A</th>
				  		<th>B</th>
				  		<th>C</th>
				  		<th>D</th>
				  		<th>Answer</th>
				  		<th width="10%">Үйлдэл</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  
				  		$mydb->setQuery("SELECT * FROM `tbllesson` l, `tblexercise` e WHERE l.`LessonID`=e.`LessonID`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->LessonTitle.'</a></td>'; 
				  		echo '<td>' . $result->Question.'</a></td>'; 
				  		echo '<td>' . $result->ChoiceA.'</a></td>'; 
				  		echo '<td>' . $result->ChoiceB.'</a></td>'; 
				  		echo '<td>' . $result->ChoiceC.'</a></td>'; 
				  		echo '<td>' . $result->ChoiceD.'</a></td>'; 
				  		echo '<td>' . $result->Answer.'</a></td>'; 
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->ExerciseID.'" class="btn btn-primary btn-xs" >Засах</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->ExerciseID.'" class="btn btn-danger btn-xs" >Устгах</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				 
			
				</form>
	 