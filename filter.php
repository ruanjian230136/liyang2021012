<html>
    <head>
            <meta charset="UTF-8">
            <title>敏感词过滤</title>
    </head>
    <style>
        div{
            margin: 10px;
        }
    </style>
    <body>
        <?php
            if(isset($_POST['submit'])){
                //获取多行文本输入框的内容
                $content = $_POST['content'];
                //设置正则表达式,存放需要过滤的敏感词
                $pattern = '/傻逼|色情|暴力/';
                //使用preg_replace()函数完成敏感词的替换,默认全局替换 不支持'/g
                //模式，替换的字符串,要被替换的数组
                $result = preg_replace($pattern,"*",$content);
            }
        ?>
        <form action="" method="POST">
            <div>
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" name="submit" value="提交">
            </div>
            <div>
                <textarea name="result" cols="30" rows="10" disabled><?php if (isset($result)) { echo $result; } ?></textarea>
            </div>
        </form>      
    </body>
    <style>

    </style>
</html>