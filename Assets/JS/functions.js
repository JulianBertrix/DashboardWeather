function createCity() {
    console.log($("#city").val());
    $.ajax({
        url: "./Assets/PHP/query.php",
        type: "POST",
        data: {
            city: $("#city").val(),
        },
        success: function() {
            window.location.reload();
            alert("ok");
        },
        error: function() {
            alert("nop");
        }
    });
}

function deleteCity(city) {
    console.log($(city).attr('value'));
    $.ajax({
        url: "./Assets/PHP/query.php",
        type: "POST",
        data: {
            cityName: $(city).attr('value'),
        },
        success: function() {
            window.location.reload();
            alert("ok");
        },
        error: function() {
            alert("nop");
        }
    });
}