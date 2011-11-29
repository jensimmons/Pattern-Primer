<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Pattern Primer</title>
<link rel="stylesheet" href="stylesheets/html.css">
<link rel="stylesheet" href="stylesheets/layout.css">
<link rel="stylesheet" href="stylesheets/backgrounds.css">
<link rel="stylesheet" href="stylesheets/typography.css">
<link rel="stylesheet" href="stylesheets/links.css">
<link rel="stylesheet" href="stylesheets/forms.css">
<link rel="stylesheet" href="stylesheets/messages.css">
<style>
.pattern {
    clear: both;
    overflow: hidden;
}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}
</style>

<script type="text/javascript" src="http://use.typekit.com/ziw3iob.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>

<?php
$files = array();
$handle=opendir('patterns');
while (false !== ($file = readdir($handle))):
    if(stristr($file,'.html')):
        $files[] = $file;
    endif;
endwhile;
sort($files);
foreach ($files as $file):
    echo '<div class="pattern">';
    echo '<div class="display">';
    include('patterns/'.$file);
    echo '</div>';
    echo '<div class="source">';
    echo '<textarea rows="6" cols="30">';
    echo htmlspecialchars(file_get_contents('patterns/'.$file));
    echo '</textarea>';
    echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
    echo '</div>';
    echo '</div>';
endforeach;
?>

</body>
</html>