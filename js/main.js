function select() {
    var search = document.getElementById("searchParam").value;
    var obj = {"search": search};
    var myJSON = JSON.stringify(obj);
    $.ajax({
        url: "php/selectDB.php",
        dataType: "html",
        type: 'POST',
        data: myJSON,
        success: function (data) {
            $("#results").html(data);
        }
    });
}

function send() {
    var author = document.getElementById("author").value;
    var title = document.getElementById("title").value;
    var genre = document.getElementById("genre").value;
    var price = document.getElementById("price").value;
    var obj = {"author": author , "title" : title, "genre" : genre, "price": price};
    var myJSON = JSON.stringify(obj);
    if (isNaN(price)){
        alertify.alert("Update","Price field must be a number");
    } else {
        $.ajax({
            url: "php/insertDB.php",
            dataType: "html",
            type: 'POST',
            data: myJSON,
            success: function (data) {
                $("#result").html(data);
            }
        });
    }
}