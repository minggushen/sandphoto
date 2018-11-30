<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <title>wyz照片生成器</title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="/css/style.css"/>
    <!--<link rel="pingback" href="http://www.sandcomp.com/blog/xmlrpc.php"/>-->

    <script type='text/javascript'
            src='/js/comment-reply.js?ver=3.4.2'></script>
    <script type='text/javascript'
            src='/js/jquery/jquery.js?ver=1.7.2'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/blog/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="/blog/wp-includes/wlwmanifest.xml"/>
    <!--<link rel='prev' title='关于' href='http://www.sandcomp.com/blog/about/'/>-->
    <!--<link rel='next' title='SandGeoTag' href='http://www.sandcomp.com/blog/sandgeotag/'/>-->
    <meta name="generator" content="WordPress 3.4.2"/>

    <!-- All in One SEO Pack 1.6.14.3 by Michael Torbert of Semper Fi Web Design[82,134] -->
    <meta name="description" content="可以上传一张照片自动生成所需尺寸的的拼接照片, 洗出来后剪一下即可"/>
    <meta name="keywords" content="证件照,一寸照片, 两寸,生成器 "/>
    <!-- /all in one seo pack -->
</head>

<body class="page page-id-15 page-template-default">
    <div id="main">
        <div id="container">
            <div id="content" role="main">
                <div id="post-15" class="post-15 page type-page status-publish hentry">
                    <h1 class="entry-title">证件照片排版在线生成器</h1>

                    <div class="entry-content">


                        <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script></p>
                        <p><script type="text/javascript" src="http://www.sandcomp.com/sandphoto/jquery-1.4.4.min.js"></script><br />
                        <script type="text/javascript" src="http://www.sandcomp.com/sandphoto/sandphoto.js"></script></p>

                        <form id="sandphotoform" action="/sandphoto/sandphoto.php" method="POST"
                              enctype="multipart/form-data"><strong>第一步</strong>, 选择你要冲洗的证件照片的尺寸：
                              <br/>
                            <select name='target_type' id='target_type'>
                                <option value='0'>1寸 (2.50cm * 3.50cm)</option>
                                <option value='1'>大一寸 (3.30cm * 4.80cm)</option>
                                <option value='2'>小一寸 (2.20cm * 3.20cm)</option>
                                <option value='3'>彩色大一寸 (4.00cm * 5.50cm)</option>
                                <option value='4'>彩色小一寸 (2.70cm * 3.80cm)</option>
                                <option value='5'>黑白大一寸 (3.30cm * 4.80cm)</option>
                                <option value='6'>黑白小一寸 (2.20cm * 3.20cm)</option>
                                <option value='7'>2寸 (3.80cm * 5.10cm)</option>
                                <option value='8'>大二寸 (3.50cm * 5.00cm)</option>
                                <option value='9'>小二寸 (3.50cm * 4.50cm)</option>
                                <option value='10'>身份证 (2.20cm * 3.20cm)</option>
                                <option value='11'>第二代身份证 (2.60cm * 3.20cm)</option>
                                <option value='12'>驾驶证 (2.20cm * 3.20cm)</option>
                                <option value='13'>中国护照 (3.30cm * 4.80cm)</option>
                                <option value='14'>赴美非移民签证 (5.10cm * 5.10cm)</option>
                                <option value='15'>赴美移民签证 (3.50cm * 4.00cm)</option>
                                <option value='16'>加拿大签证 (3.50cm * 4.50cm)</option>
                                <option value='17'>英国签证 (3.50cm * 4.50cm)</option>
                                <option value='18'>澳大利亚签证 (3.50cm * 4.50cm)</option>
                                <option value='19'>日本签证 (4.50cm * 4.50cm)</option>
                                <option value='20'>港澳通行证 (3.30cm * 4.80cm)</option>
                                <option value='21'>香港特区护照 (4.00cm * 5.00cm)</option>
                                <option value='22'>普通证件照 (3.30cm * 4.80cm)</option>
                                <option value='23'>机动车行驶证 (6.00cm * 8.80cm)</option>
                                <option value='24'>毕业生照 (3.30cm * 4.80cm)</option>
                                <option value='25'>在美申请申根签证 (3.00cm * 4.00cm)</option>
                                <option value='26'>中国国家司法考试报名照片2寸 (3.20cm * 4.60cm)</option>
                                <option value='33'>阿根廷签证 (4.00cm * 4.00cm)</option>
                                <option value='34'>意大利签证 (3.40cm * 4.00cm)</option>
                                <option value='42'>日本资格考试报名 (2.40cm * 3.00cm)</option>
                                <option value='43'>加拿大签证B (5.00cm * 7.00cm)</option>
                                <option value='44'>结婚证照片 (6.00cm * 4.00cm)</option>
                            </select><br/>
                            <strong>第二步
                                <strong>, 选择用多大的照片冲洗（一般选择6寸的就好，这个价格最合适）:<br/><select
                                        name='container_type' id='container_type'>
                                    <option value='27'>5寸(3R) (12.70cm * 8.90cm)</option>
                                    <option value='28'>6寸(4R) (15.20cm * 10.20cm)</option>
                                    <option value='29'>7寸(5R) (17.80cm * 12.70cm)</option>
                                    <option value='30'>8寸(6R) (20.30cm * 15.20cm)</option>
                                    <option value='31'>10寸(8R) (25.40cm * 20.30cm)</option>
                                    <option value='32'>12寸 (25.40cm * 30.48cm)</option>
                                    <option value='35'>A3 (29.70cm * 42.00cm)</option>
                                    <option value='36'>A4 (21.00cm * 29.70cm)</option>
                                    <option value='37'>A5 (14.80cm * 21.00cm)</option>
                                    <option value='38'>B3 (50.00cm * 70.70cm)</option>
                                    <option value='39'>B4 (25.00cm * 35.30cm)</option>
                                    <option value='40'>B5 (17.60cm * 25.00cm)</option>
                                    <option value='41'>Letter (21.59cm * 27.94cm)</option>
                                </select></p>
                                    <p><strong>第三步</strong>, 选择分割线的颜色：</p>
                                    <p><input id="bgcolorid" type="radio" name="bgcolorid" value="blue"
                                              checked="checked"/>
                                        蓝色 <input id="bgcolorid" type="radio" name="bgcolorid" value="white"/>白色 <input
                                                id="bgcolorid" type="radio" name="bgcolorid" value="gray"/> 灰色</p>
                                    <p>将来的照片就是这个样子的：</p>
                                    <p><img id="previewImg" alt=""/></p>
                                    <p><strong>第四步</strong>, 选择你的证件照片：</p>
                                    <p><input id="filename" type="file" name="filename"/></p>
                                    <p><strong>最后一步</strong>, 点击下载，照片就可以去冲印了：</p>
                                    <p><input type="submit" value="下载"/></p>
                                    <p>如果你的照片比较大， 上传会花一些时间， 别着急， 请耐心等待。</p>
                                </strong>
                            </strong>
                        </form>

                    </div><!-- .entry-content -->
                </div><!-- #post-## -->
                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style_32x32">
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_douban"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_fb"></a>
                    <a class="jiathis_button_twitter"></a>
                    <a class="jiathis_button_evernote"></a>
                    <a class="jiathis_button_pocket"></a>
                    <a href="http://www.jiathis.com/share"
                       class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                    <a class="jiathis_counter_style"></a>
                </div>
                <script type="text/javascript">
                    var jiathis_config = {
                        sm: "tsina,weixin,douban",
                        summary: "",
                        ralateuid: {
                            "tsina": "工具帝"
                        },
                        appkey: {
                            "tsina": "2034477911"
                        },
                        shortUrl: false,
                        hideMore: false
                    }
                </script>

            </div>
        </div><!-- #primary .widget-area -->

    </div><!-- #main -->

    <div id="footer" role="contentinfo">
    </div><!-- #footer -->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#commentform').submit(function() {
                _gaq.push(
                    ['_setAccount','UA-19950260-1'],
                    ['_trackEvent','comment','submit']
                );
            });
        });
    </script>

</div><!-- #wrapper -->


</body>
</html>
