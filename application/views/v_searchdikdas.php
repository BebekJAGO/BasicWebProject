<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/main.css">

    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
    <title>SPPN</title>
</head>
<body>
    <div id="cover">
        <form method="post" action="<?php echo site_url('c_dikdas/searchdikdas'); ?>">
            <div class="tb">
                <div class="td"><input name="keyword" type="text" placeholder="NUPTK" required></div>
                    <div class="td" id="s-cover">
                        <button type="submit" name="submit" value="Enter">
                            <div id="s-circle"></div>
                            <span></span>
                        </button>
                    </div>
                </div>
        </form>
    </div>
</body>
</html>