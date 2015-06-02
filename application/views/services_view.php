<form method='post' accept-charset="windows-1251" id="form">
	<p><h2><?php echo $this->header;?></h2></p>
	<table>
		<tr>
			<td></td>
			<td><input name=id type=text hidden=true value=<?php echo $data['id'];?>></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input name=firstName type=text value=<?php echo $data['firstName'];?>></td>
		</tr>
		<tr>
			<td>Surname</td>
			<td><input name=lastName type=text value=<?php echo $data['lastName'];?>></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input name=age type=text value=<?php echo $data['age'];?>></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input name=gender type=text value=<?php echo $data['gender'];?>></td>
		</tr>
		<tr>
			<td>Group</td>
			<td><input name=group type=text value=<?php echo $data['sgroup'];?>></td>
		</tr>
		<tr>
			<td>Faculty</td>
			<td><input name=faculty type=text value=<?php echo $data['faculty'];?>></td>
		</tr>
	</table>
	<p>
	<input type="submit" id="<?php echo $this->action;?>" value="OK" onclick="buttonClicked(this);"></input>
	<A HREF="http://localhost/" TITLE="Back to students list">Cancel</A>
	
</form>
<script>
	function buttonClicked(action){
		var form = "http://localhost/services/" + action.id;
		document.getElementById("form").action = form;
	}
</script>