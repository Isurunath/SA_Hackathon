<!doctype html>
<html>
<head>

</head>
<body>
    <!--<table>
        <tr>
            <th>User Information</th>
        </tr>

        <?php /*foreach($result  as $r): */?>
            <tr><?php /*echo $r->content; */?></tr>
        <?php /*endforeach; */?>
    </table>-->

    <table>
        <tr>
            <th>User Information</th>
        </tr>
        <?php foreach($posts as $post){?>
            <tr>
                <td><?php echo $post->user_id;?></td>
                <td><?php echo $post->user_name;?></td>
                <td><?php echo $post->email;?></td>
                <td><input type="button" value="Update"></td>
                <td><input type="button" value="Delete"></td>
            </tr>
        <?php }?>
    </table>

</body>

</html>