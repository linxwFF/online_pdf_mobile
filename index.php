<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>在线浏览pdf</title>
</head>
<body>
<button onclick="browserPdf()">在线浏览pdf</button>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
    function browserPdf()
    {
        var url = "../test.pdf";
        $.ajax({
            url: url,
            type: "get",
            success: function(xhr, data){
                if (navigator.userAgent.indexOf('Android') > -1) {
                    //判断移动端是android 还是ios ，若是android 则要借助pdf插件
                    window.location.href = "../web/viewer.html?file="+'../test.pdf';
                } else {
                    //ios直接打开pdf
                    //window.location.href = url;
                    window.location.href = "../web/viewer.html?file="+'../test.pdf';
                }
            }
        });
    }
</script>
</html>