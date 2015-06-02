<form action='http://localhost/delete/delete' method=post>
	<h2>Are you sure?</h2>
	<ul>
	<?php
		foreach($data as $row)
		{
			echo '<li>'.$row->getFirstName().' ' .$row->getLastName().'<input name=stud[] type=text hidden=true value='.$row->getId().'></li>';
		}
	?>
	</ul>
	<input type=submit value="Delete"></input> <A HREF="http://localhost/" TITLE="Back to students list">Cancel</A>;
</form>