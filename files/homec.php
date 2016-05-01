<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
$(document).ready(function () {
    
    $('a.topOfPage').click(function () {
        $.scrollTo(0, 1200);
        return false;
    });
    $("#tabcontainer").tabs({
        event: "click"
    });
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
</head>
<body>



 <?php getCom();?>


</body>
</html>	



