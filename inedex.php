<html>
<head>
    <script src="https://unpkg.com/popper.js"></script>
    <script src="https://unpkg.com/tooltip.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<button class="button is-success" data-tooltip="Only $5 one-time payment!">Add to basket</button>
<script>
    var ref = $('#button-a');
    var popup = $('#popup');
    popup.hide();

    ref.click(function(){
        popup.show();
        var popper = new Popper(ref,popup,{
            placement: 'top',
            onCreate: function(data){
                console.log(data);
            },
            modifiers: {
                flip: {
                    behavior: ['left', 'right', 'top','bottom']
                },
                offset: {
                    enabled: true,
                    offset: '0,10'
                }
            }
        });
    });
</script>
</body>
</html>