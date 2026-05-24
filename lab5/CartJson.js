function AddRemoveItem(action, bookTitle) {
    var url = "ManageCartJson.php?action=" + action + "&book=" + encodeURIComponent(bookTitle) + "&value=" + Number(new Date);

    fetch(url)
        .then(function(response) {
            return response.text();
        })
        .then(function(text) {
            var spantag = document.getElementById("cart");
            var serverResponse = (text !== "") ? JSON.parse(text) : null;

            spantag.innerHTML = "";
            if (serverResponse != null) {
                var keys = Object.keys(serverResponse);
                for (var i = 0; i < keys.length; i++) {
                    spantag.innerHTML += keys[i] + " x" + serverResponse[keys[i]] +
                        " <a href='#' onclick='AddRemoveItem(\"Remove\", \"" + keys[i].replace(/"/g, '\\"') + "\"); return false;'>Remove</a><br>";
                }
            }
        })
        .catch(function(error) {
            console.error("Error:", error);
        });
}
