<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

   <title>HTML5Sticky - Sticky Notes for the Web !</title>

   <!-- Meta tags -->
   <meta name="description" content="HTML5 sticky notes application. Create sticky notes for the web !" />
   <meta name="keywords" content="HTML5,sticky,notes,stickynote,note,stickies,css3,localstorage,offline,sticky-notes" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico?v=1">

   <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
   <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
   <!-- For first-generation iPad: -->
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
   <!-- For iPhone 4 with high-resolution Retina display: -->
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">

   <!-- CSS -->
   <link rel="stylesheet" href="{{asset('doctorTheme/css/main.css?version=1')}}" />
   <link rel="stylesheet" href="{{asset('doctorTheme/css/html5sticky.css?version=1')}}" />

   <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' />

   <!-- JavaScript -->
   <!--[if IE]><![endif]-->
   <!--[if lt IE 9]>
   <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
    
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   <script>!window.jQuery && document.write(unescape('%3Cscript src="doctorTheme/js/jquery1.6.2.js"%3E%3C/script%3E'))</script>

   <script src="{{asset('doctorTheme/js/respond.min.js')}}"></script>
   <script src="{{asset('doctorTheme/js/modernizr.custom.23610.js')}}"></script>
   <script src="{{asset('doctorTheme/js/html5sticky.js')}}"></script>
   <script src="{{asset('doctorTheme/js/prettyDate.js')}}"></script>
</head>

<body>

	<!-- First header has an ID so you can give it individual styles, and target stuff inside it -->
	<header id="head">

      <a href="index.html">
         <h1>HTML5Sticky <br /><small>sticky notes for web !</small></h1>
      </a>

      <div class="left topsection">
         <a href="#" id="addnote" class="tooltip blue-tooltip"><img src="{{asset('doctorTheme/img/add.png')}}" alt="Add a new sticky note"><span>Add a new sticky note</span></a>
         <a href="#" id="removenotes" class="tooltip blue-tooltip"><img src="{{asset('doctorTheme/img/remove.png')}}" alt="Remove all sticky notes"><span>Remove all sticky notes</span></a>
      </div>

      <div class="left topsection">
         <a href="#" id="shrink" class="tooltip blue-tooltip"><img src="{{asset('doctorTheme/img/decrease.png')}}" alt="Shrink"><span>Shrink sticky notes</span></a>
         <a href="#" id="expand" class="tooltip blue-tooltip"><img src="{{asset('doctorTheme/img/increase.png')}}" alt="Expand"><span>Expand sticky notes</span></a>
      </div>

	</header><!-- #head -->

   <div id="main"></div>

   <div class="clear">&nbsp;</div>
   <div class="clear">&nbsp;</div>

   <footer>
      <a href="http://twitter.com/share" class="twitter-share-button" data-text="#HTML5Sticky - #Sticky #Notes for the #Web ! An #HTML5 App" data-count="horizontal" data-via="sarfraznawaz">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

      <!-- Place this tag where you want the +1 button to render -->
   
      <!-- Place this tag after the last plusone tag -->
      <script>
        (function() {
          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
          po.src = 'https://apis.google.com/js/plusone.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
      </script>      
   </footer>

</body>
</html>