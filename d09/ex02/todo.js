var cookies = document.cookie.split(';');
for (i = 0; i < cookies.length; i++) 
{
	let ret = cookies[i];
	if (ret == '')
		break ;
	let retval = ret.split('=');
	if (retval[0] != '')
	{
		let decoded = decodeURIComponent(retval[1]);
		add(retval[0], decoded);
	}
}

function newitem() {
	let input = prompt("Add a todo");
	let encoded = encodeURIComponent(input);
	let ran_num = Math.floor(Math.random() * 4096) + 1;
	if (input != '' && input != null && input.search(/^[\s]*$/) < 0)
	{
		setCookie(" #" + ran_num, encoded, 7);
		add(" #" + ran_num, input);
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

function add(idnum, input) {
	const newDiv = document.createElement("div");
	const newContent = document.createTextNode(input);
	newDiv.appendChild(newContent);
	newDiv.className = "todo";
	newDiv.id = idnum;
	newDiv.onclick = function() { remove(this); };
	const list = document.getElementById("ft_list");
	list.prepend(newDiv);
}

function remove(element) {
	if(confirm("Are you sure you want to remove the todo task?"))
	{
		document.cookie = element.id + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
		element.remove();
	}	
}
