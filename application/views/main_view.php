<form method='post' accept-charset="windows-1251" id="form">
	<table border=1>
		<tr>
			<td></td>
			<td>Name</td>
			<td>Surname</td>
			<td>Gender</td>
			<td>Age</td>
			<td>Group</td>
			<td>Department</td>
		</tr>
		<?php
			foreach($data as $row)
				{
					echo '<tr><td><input type=checkbox onClick=countChecked() name=\'stud[]\' value='.$row->getId().'></td><td>'.$row->getFirstName().'</td><td>'.$row->getLastName().'</td><td>'.$row->getGender().'</td><td>'.$row->getAge().'</td><td>'.$row->getGroup().'</td><td>'.$row->getFaculty().'</td></tr>';
				}
		?>
	</table>
	<p>
	<input type=submit value="Create" id='services/show_add_view' onclick="buttonClicked(this);">
    <input type=submit value="Edit" id='services/show_edit_view' onclick="buttonClicked(this);" disabled = true>
    <input type=submit value="Delete" id="delete" onclick="buttonClicked(this);" disabled = true> 
</form>
<script src="application/views/js/onClick.js"></script>