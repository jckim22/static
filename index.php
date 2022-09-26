<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 웹페이지에게 UTF-8방식으로 문서를 읽어달라고 요청 -->
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 제목 -->
    <title>WEB - welcome</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <h1 class="saw"><a href="index.php">Ju Chan's WEB</a></h1>
    <div class="toggle">
        <input id="night-day" type="button" value="night" onclick="nightHandle()">
    </div>
    <div id="grid">
        <ol>
            <p style="margin:0; font-size: 30px; border-bottom:1px solid gray">List</p>
            <?php
                $list = scandir('./data');
                $cnt = 2;
                while($cnt < count($list)){
                    echo '<li"><a href="index.php?id=' . $list[$cnt] . '"><div class="saw active">' . $list[$cnt] . '</div></a></li>';
                    $cnt++;
                }
            ?>
        </ol>

        <div class="article">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5LRO2I65aR8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h2>
                <?php
                if (isset($_GET['id'])) {
                    echo $_GET['id'];
                } else {
                    echo 'WEB';
                }
                ?>

            </h2>

            <?php
            if (isset($_GET['id'])) {
                echo file_get_contents("data/" . $_GET['id']);
            }else{
                echo file_get_contents("data/WEB");
            }
            ?>

            <div class="saw2" id="disqus_thread"></div>
            <script>
                discuss();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                    by
                    Disqus.</a></noscript>

            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                twak();
            </script>
            <!--End of Tawk.to Script-->

            </p>
        </div>
    </div>
</body>

</html>