function add() {
	let input = prompt("Add a todo");
	if (input != '')
	{
		const newDiv = document.createElement("div");
		const newContent = document.createTextNode(input);
		newDiv.appendChild(newContent);
		newDiv.className = "todo";
		const list = document.getElementById("ft_list");
		list.prepend(newDiv);
	}
}

/* 
	Each Todo must be nside the FT_List div. A todo is addedd to the top .
	New button prompts a text window to give the todo input and if its not empty and validated it will
	be added to the top of hte list. 

	Clicking on the todo task will pprompt the user yes or no if they want to delete the task. If yes delete the 
	element (not hiddden). 

	Save todo list as a cookie and load it. iif the cookie doesnt exist the list will be empty.
 */