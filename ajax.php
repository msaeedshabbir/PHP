<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Search</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <script>
    $(document).ready(function() {
        // Clear the #abc div initiallyN
        $("#abc").html('');

        $("#txt").keyup(function() {
            var v = $("#txt").val();
            if (v.trim() !== "") {
                $("#abc").load("test.php?con_name=" + v, function(response, status, xhr) {
                    if (status == "error") {
                        var msg = "Sorry but there was an error: ";
                        $("#abc").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            } else {
                $("#abc").html(''); // Clear the #abc div if the input is empty
            }
        });
    });
    </script>
    <input type="text" id="txt" placeholder="Search for a country...">
    <div id="abc"></div>
</body>

</html>