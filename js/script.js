function abaixarbarra() {
  var div = document.getElementById("chat");
  div.scrollTo(0, 1000);
}

function ajax() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function () {
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById("chat").innerHTML = req.responseText;
    }
  };
  req.open("GET", "php/chat.php", true);
  req.send();
}

window.onload = (event) => {
  ajax();
};

$(function () {
  $("#btnEnviar").click(function () {
    if ($("#msg").val() === "" || $("#nome").val() === "") {
    } else {
      var data = {
        nome: $("#nome").val(),
        mensagem: $("#msg").val(),
      };

      $.post("php/sendmessage.php", data);

      $("#msg").val("");
    }
  });
});

setInterval(function () {
  ajax();
}, 1000);
