<html>
<head>
    <title>SPPN</title>
</head>
<body>
    <table>
        <tr>
            <td>NUPTK</td>
            <td>NRG</td>
            <td>Nama</td>
        </tr>
        <?php foreach($posts as $post){ ?>
        <tr>
            <td><?php echo $post->NUPTK ?></td>
            <td><?php echo $post->NRG ?></td>
            <td><?php echo $post->STATUS ?></td>
        </tr> 
        <?php } ?>
    </table>
</body>
</html>