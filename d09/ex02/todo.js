function add() {
	const newDiv = document.createElement("div");
	const newContent = document.createTextNode("HelloWorld!\n");
	newDiv.appendChild(newContent);
	newDiv.className = "list";
	const list = document.getElementById("ft_list");
	document.body.insertBefore(newDiv, list);
}