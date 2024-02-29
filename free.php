<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Search</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h2>Live Search</h2>
    <input type="text" id="search" placeholder="Type to search">
    <div id="result"></div>

    <script>
        $(document).ready(function () {
            $("#search").on("keyup", function () {
                var query = $(this).val();
                if (query !== '') {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {query: query},
                        success: function (data) {
                            $("#result").html(data);
                        }
                    });
                } else {
                    $("#result").html('');
                }            });
        });
    </script>
</body>
</html>
