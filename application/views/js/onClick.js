
function buttonClicked(action){
	var form = "http://localhost/" + action.id;
	document.getElementById("form").action = form;
}

function countChecked() {
    var i, j=0, len, inputs = document.getElementsByTagName("input");
    for (i = 0, len = inputs.length; i < len; i++) {
        if (inputs[i].type === "checkbox"
            && inputs[i].checked)
            j++;
	}
    isEditEnabled(j);
	isDeleteEnabled(j);
}

function isEditEnabled(j) {
    if (j===1){
		document.getElementById("services/show_edit_view").disabled = false;
	}else{	
		document.getElementById("services/show_edit_view").disabled = true;
	}
}

function isDeleteEnabled(j) {
    if (j===0){
		document.getElementById("delete").disabled = true;
	}else{	
		document.getElementById("delete").disabled = false;
	}
}