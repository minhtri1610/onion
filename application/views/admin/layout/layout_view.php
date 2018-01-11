<!DOCTYPE html>
<html lang="ja">
<head>
    <title>管理画面</title>
    <meta charset="utf-8">

    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta name="viewport" content="width=device-width,user-scalable=yes,maximum-scale=1" />
    <meta http-equiv="content-language" content="ja">

    <!-- jQuery (necessary for Bootstrap JavaScript plugins) -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/admin.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/jquery-ui.css">

<script type="text/javascript"> 
<!-- 
function execute_precheck(){
    if (window.confirm('ＯＫをクリックすると処理を実行します')) {
        return true;
    } else {
        window.alert('処理を中断しました');
        return false;
    }
}
function conlog(msg) {
    if (window.console){
        console.log(msg);
    }
}
// -->
</script>

</head>
<body>

<div id="wrapper">
    <div id="wrapper-inner">
        <header>
            <div id="header">
<?php echo $content_header; ?>
            </div>
        </header>

        <div id="content">
            <div id="content-inner" class="clearfix">
<?php if (!isset($disable_sidebar) || $disable_sidebar == FALSE): ?>
                <div class="content-left">
<?php echo $content_sidebar; ?>
                </div>
<?php endif; ?>
                <div class="content-right">
<?php echo $content_body; ?>
                </div>
            </div>
        </div>

        <footer>
            <div id="footer">
                <div id="footer-inner">
<?php echo $content_footer; ?>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>
</html>
