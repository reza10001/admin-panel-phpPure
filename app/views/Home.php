<!DOCTYPE html>
    <head>
	<style src="../../../public/ckeditor/ckeditor.js"></style>

    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
 
        
    </head>
    <body>
        <div>
            fdsfds
            <ul>
                <?php foreach($data as $val){ ?>
                <li><?php echo $val['title']; ?></li>
                <li><?php echo $val['user_id']; ?></li>
               <?php } ?>
            </ul>
        </div>
    </body>
</html>