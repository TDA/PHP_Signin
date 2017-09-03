<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
hi
<br>

<div class="summary">hi</div>
<script>
$(document).ready(function() {
    $('div.summary a').click(function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        updateDB(e.type, this);
    });
    // Do similar for the other event handlers


    function updateDB(type, element) {
        $.ajax({
            url: '/updateDB.php',
            method: 'post',
            data: {
                eventName: type,
                element: element
            },
            onError: function (error) {
                alert(error)
            }
        }).done(function() {
           console.log("Done")
        });
    }
});

</script>
	
</body>
</html>