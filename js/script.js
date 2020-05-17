
function ajax(){
	var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
			}
		}
	req.open('GET', '../src/index.php', true);
	req.send();

	setInterval(function(){ajax();}, 1000);
}

function abaixarscroll(){
	var height = document.getElementById('chat').scrollHeight;
	document.getElementById('chat').scrollTop = height;
}