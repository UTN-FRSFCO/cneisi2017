<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<title>@yield('title')</title>
<meta name="description" content="@yield('description')" />
<meta name="keywords" content="@yield('keywords')" />
<meta name="author" content="@yield('author')" />
<meta name="robots" content="@yield('robots')" />

<meta property="og:locale" content="es_AR" />
<meta property="og:type" content="@yield('og:type')" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('og:url')" />
<meta property="og:site_name" content="CNEISI2017" />
<meta property="og:image" content="http://localhost:8000/img/logo-utn.png" />

<meta name="twitter:card" content="content"/>
<meta name="twitter:title" content="@yield('title')"/>
<meta name="twitter:description" content="@yield('description')"/>
<meta name="twitter:site" content="@utnsanfco"/>
<meta name="twitter:image" content="http://localhost:8000/img/logo-utn.png"/>
<meta name="twitter:creator" content="@utnsanfco"/>

<link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}">
<link rel="apple-touch-icon" href="{{asset('/img/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('/img/apple-touch-icon-114x114.png')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/css/custom-animations.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/style-mod.css')}}" />

<!--[if lt IE 9]>
<script src="{{asset('/js/html5shiv.js')}}"></script>
<script src="{{asset('/js/respond.min.js')}}"></script>
<![endif]-->