<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="ManyMeanings">
    <base href="index.hml">
    <title>个人中心</title>
    <link rel="short icon" href="../assets/image/club.ico">
    <link rel="stylesheet" type="text/css" href="../assets/css/mycss.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/userzone.css">
</head>
<body>
<div class="content">
    <!--上方导航栏-->
    <div class="global-nav">
        <ul>
            <li><a href="../index.php">主页</a></li>
            <li><a href="show.php">用户</a></li>
            <li><a href="../about.html">关于</a></li>
            <li style="float:right; padding-right: 15px"><a href="show.php">ManyMeanings</a></li>
        </ul>
    </div>

    <div class="club-nav">
        <ul>
            <li><img src="../assets/image/title.png" alt="mangyuan" style="margin-top: 5px; margin-left: 307px;"/></li>
            <li style="float:right; margin-top: 22px; margin-right: 290px;" >
                <div><form action="index.php" method="post">
                    <input class="search" type="text" placeholder="搜索你想知道的..." name="s" autocomplete="off">
                    <input class="button" type="submit" value="">
                </form>
                </div>
            </li>

        </ul>
    </div>
    <div class="center">
    <--正文栏-->
    <div class="message">
        <--头-->
        <div class="head-in-message">
            <img src="../assets/image/my.jpg" class="img-in-headmsg">
            <span class="name-in-message">ManyMeanings</span><br>
            <span class="sth-to-say">吾好梦中杀人</span>
        </div>

        <--文章-->
        <div class="articles-to-show">
            <div class="title-in-this">ManyMeanings的文章&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="show.php">(全部)</a></div>
            <div class="show-articles-blocks">
                <a class="title-in-show">孤独有毒</a>
                <div class="time-in-show">2018-10-02 00:00:00</div>
                <p>现在好多视频网站都有弹幕，刚知道有那玩意儿时我还不懂，为什么看个视频还要忍受被一排排字挡住画面的痛苦，后来渐渐明白，这是一群孤独的人相拥取暖的地方。一个人低头数着进度条，看到精彩处，浑身寒毛炸起，可是身边却没有一个能听你吐槽的人。</p>
            </div>
            <div class="show-articles-blocks">
                <a class="title-in-show">孤独有毒</a>
                <div class="time-in-show">2018-10-02 00:00:00</div>
                <p>现在好多视频网站都有弹幕，刚知道有那玩意儿时我还不懂，为什么看个视频还要忍受被一排排字挡住画面的痛苦，后来渐渐明白，这是一群孤独的人相拥取暖的地方。一个人低头数着进度条，看到精彩处，浑身寒毛炸起，可是身边却没有一个能听你吐槽的人。</p>
            </div>
            <div class="show-articles-blocks">
                <a class="title-in-show">孤独有毒</a>
                <div class="time-in-show">2018-10-02 00:00:00</div>
                <p>现在好多视频网站都有弹幕，刚知道有那玩意儿时我还不懂，为什么看个视频还要忍受被一排排字挡住画面的痛苦，后来渐渐明白，这是一群孤独的人相拥取暖的地方。一个人低头数着进度条，看到精彩处，浑身寒毛炸起，可是身边却没有一个能听你吐槽的人。</p>
            </div>
        </div>

        <div class="books-to-show">
            <div class="title-in-this">ManyMeanings的书&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="show.php">(全部)</a></div>
            <div>
                <span class="book-tip">读过</span>
                <img src="../assets/image/book.jpg">
                <img src="../assets/image/book.jpg">
                <img src="../assets/image/book.jpg">
                <img src="../assets/image/book.jpg">
                <img src="../assets/image/book.jpg">
            </div>
        </div>

        <div class="tv-to-show">
            <div class="title-in-this">ManyMeanings的影视&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="show.php">(全部)</a></div>
            <div>
                <span class="book-tip">看过</span>
                <img src="../assets/image/break.jpg">
                <img src="../assets/image/break.jpg">
                <img src="../assets/image/break.jpg">
                <img src="../assets/image/break.jpg">
                <img src="../assets/image/break.jpg">
            </div>
        </div>


    </div>
    <--侧边栏-->
    <div class="message-in-aside">
        <div class="msg-card">
            <img src="../assets/image/my.jpg">
            <span class="place">常居：浙江台州</span><br>
            <span class="time-to-join">2018-10-02&nbsp;加入</span><br>
            <span class="star">星辰：2颗</span>
            <div class="line"></div>
            <div class="word">本来以为是很简单的网站，但是要把所有的功能都做出来还是很麻烦的。github地址：https://github.com/ManyMeanings</div>
        </div>

        <div class="books-in-read">
            <div class="title-in-aside">ManyMeanings正在读的书&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="../index.php">(全部)</a></div>
            <img src="../assets/image/book.jpg">
            <img src="../assets/image/book.jpg">
        </div>

        <div class="articles-in-aside">
            <div class="title-in-aside">ManyMeanings的热门文章&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="show.php">(全部)</a></div>
            <div class="new-articles"><a href="show.php">孤独有毒</a>&nbsp;(5颗星星)</div>
            <div class="new-articles"><a href="show.php">第二篇文章</a>&nbsp;(6颗星星)</div>
            <div class="new-articles"><a href="show.php">The Third Article</a>&nbsp;(7颗星星)</div>
            <div class="new-articles"><a href="show.php">123456</a>&nbsp;(8颗星星)</div>
            <div class="new-articles"><a href="show.php">凑数的</a>&nbsp;(123颗星星)</div>
        </div>

        <div class="articles-in-aside">
            <div class="title-in-aside">ManyMeanings喜欢的文章&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;.&nbsp;<a href="../index.php">(去主页)</a></div>
            <div class="hot-articles"><a href="show.php">孤独有毒</a><p>ManyMeanings&nbsp;10086人浏览<p></div>
            <div class="hot-articles"><a href="show.php">第二篇文章</a><p>ManyMeanings&nbsp;233人浏览<p></div>
            <div class="hot-articles"><a href="show.php">The Third Article</a><p>ManyMeanings&nbsp;8888人浏览<p></div>
            <div class="hot-articles"><a href="show.php">123456</a><p>ManyMeanings&nbsp;12345人浏览<p></div>
            <div class="hot-articles"><a href="show.php">凑数的</a><p>ManyMeanings&nbsp;555555人浏览<p></div>
        </div>

    </div>
    </div>
</div>
<div class="footer">© 2001－2018 mangyuan.com, all rights reserved 杭州电子科技大学莽原文学社</div>
</body>
</html>