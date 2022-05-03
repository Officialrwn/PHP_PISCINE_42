$(document).ready(function(){
	$.add = function(idnum, input) {
		var decoded = decodeURIComponent(input);
		var newdiv = "<div class=\"todo\" id=\"" + idnum + "\">" + decoded + "</div>";
		$("#ft_list").prepend(newdiv);
	}

	var cookies = $.cookie();
	if ($.cookie()){
		$.each(cookies, function(key, value){
			$.add(key, value);
		});
	}

	$("#new").on({
		click: function() {
			let input = prompt("Add a todo");
			let encoded = encodeURIComponent(input);
			let ran_num = Math.floor(Math.random() * 4096) + 1;
			let is_only_space = new RegExp(/^[\s]*$/);
			if (input != '' && input != null && !is_only_space.test(input))
			{
				$.cookie("cookie id " + ran_num, encoded);
				$.add("cookie id " + ran_num, input);
			}
		}
	})

	$(".todo").on({
		click: function() {
			if(confirm("Are you sure you want to remove the todo task?"))
			{
				var key = $(this).attr("id");
				var value = $(this).text();
				$(this).remove();
				$.removeCookie(key, value, { path: '/'});
			}
		}
	})
});
