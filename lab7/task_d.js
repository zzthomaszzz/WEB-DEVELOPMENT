function printWords() {
    var input = prompt("Enter a string of words separated by single spaces:", "");
    if (input == null || input === "") return;

    var words = input.split(" ");
    var output = document.getElementById("output");
    output.innerHTML = "";
    for (var i = 0; i < words.length; i++) {
        output.innerHTML += "<p>" + words[i] + "</p>";
    }
}
