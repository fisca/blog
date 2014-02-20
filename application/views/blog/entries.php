<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1></h1>

        <ul>
            <?php foreach ($query as $item):  /* These are an object. */ ?>

                <li>                   
                    Id: <?php echo $item->id; ?>.<br> 
                    Title: <?php echo $item->title; ?>.<br> 
                    Content: <?php echo $item->content; ?><br>
                    Date: <?php echo $item->date; ?>
                </li>

            <?php endforeach; ?>

        </ul>

    </body>
</html>