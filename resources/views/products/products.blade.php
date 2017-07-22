<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zando Online Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href="/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" id="camera-css"  href="/css/camera.css" type="text/css" media="all">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/skins/tango/skin.css" />
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/mycss.css" rel="stylesheet">
    <!--[if lt <div class="fright">
                            <form action="#" method="post">
                                <input class="inp_search" name="name" type="text" value="Search the Site" onfocus="if (this.value == 'Search the Site') this.value = '';" onblur="if (this.value == '') this.value = 'Search the Site';" />
                            </form>
                        </div> IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
                                <img src="{{$product->image_url}}">
                            </div>
                            <br>
                            <label>Price: R {{$product->price}}</label>
                            <div class="page_container">
                                <div class="breadcrumb">
                                    <div class="wrap">
                                        <div class="container">
                                            <h4 class="title"><span>Available Products</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="container">
                                        <section>
                                            <p>
                                            </p>
                                            <div class="row">
                                                @foreach($products as $key=>$product)
                                                    <div class="span4">
                                                        <div class="resize">
                            <label>Name: {{$product->name}}</label>
                            <label>Brand: {{$product->brand}}</label>
                        </div>
                    @endforeach

                </div>
            </section>
        </div>
    </div>
</div>
<!--//page_container-->

<div class="footer_bottom">
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="span5">
                    <div class="foot_logo"></div>
                    <div class="copyright">&copy; 2017 Zando. All Rights Reserved.</div>
                </div>
                <div class="span7">
                    <div class="foot_right_block">
                        <div class="follow_us">
                            <ul>
                                <li><a rel="tooltip" href="#" title="Facebook" class="facebook">Facebook</a></li>
                                <li><a rel="tooltip" href="#" title="Twitter" class="twitter">Twitter</a></li>
                                <li><a rel="tooltip" href="#" title="Tumbrl" class="tumbrl">Tumbrl</a></li>
                                <li><a rel="tooltip" href="#" title="Vimeo" class="vimeo">Vimeo</a></li>
                                <li><a rel="tooltip" href="#" title="Delicious" class="delicious">Delicious</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>

                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--//footer-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="/js/camera.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>