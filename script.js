function retrieveInformation() {
    var username = document.getElementById('username').value;

    // Make an AJAX request to the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('result').innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', 'retrieve.php?username=' + username, true);
    xhr.send();
}
