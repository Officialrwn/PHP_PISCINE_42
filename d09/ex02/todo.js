console.log(document.cookie.split(';'));
var cookies = document.cookie.split(';');
var ret = '';
var id = 0;
let retval;
for(var i = 1; i <= cookies.length; i++) 
{
	ret = cookies[i - 1];
	retval = ret.split('=');
	if (retval[0] != '')
		add(retval[1], retval[0]);
}

function newitem() {
	let input = prompt("Add a todo");
	if (input != '' && input != null)
	{
		setCookie(id.toString(10), input, 7);
		add(input, id);
		id++;
		alert(id);
	}
}

function deleteCookie(name) {
	var name = name + "=";
	let ca = document.cookie.split(';');
	for(let i = 0; i <ca.length; i++) 
	{
		let c = ca[i];
		while (c.charAt(0) == ' ') 
		{
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) 
		{
			document.cookie = name + ';expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
			return ;
		}	
	}
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
	
}

function add(input, id) {
	const newDiv = document.createElement("div");
	const newContent = document.createTextNode(input);
	newDiv.appendChild(newContent);
	newDiv.className = "todo";
	newDiv.id = id;
	newDiv.onclick = function() { remove(this); };
	const list = document.getElementById("ft_list");
	list.prepend(newDiv);
}

function remove(element) {
	if(confirm("Are you sure you want to remove the todo task?"))
	{
		alert(element.id);
		deleteCookie(element.id.toString(10));
		element.remove();
	}	
}
