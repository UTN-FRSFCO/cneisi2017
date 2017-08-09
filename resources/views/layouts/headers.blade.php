<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<title>@yield('title')</title>
<meta name="description" content="@yield('description')" />
<meta name="keywords" content="@yield('keywords')" />
<meta name="author" content="@yield('author')" />
<meta name="robots" content="@yield('robots')" />

<!-- Open Graph data -->
<meta property="og:type" content="@yield('og:type')" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="@yield('og:url')" />
<meta property="og:site_name" content="CNEISI2017" />
<meta property="og:image" content="http://cneisi.sanfrancisco.utn.edu.ar/img/utn-entrance.jpg" />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="@yield('title')">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="http://cneisi.sanfrancisco.utn.edu.ar/img/utn-entrance.jpg">

<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="@yield('title')"/>
<meta name="twitter:description" content="@yield('description')"/>
<meta name="twitter:site" content="@utnsanfco"/>
<meta name="twitter:image" content="http://cneisi.sanfrancisco.utn.edu.ar/img/utn-entrance.jpg"/>

<link rel="stylesheet" type="text/css" href="{{asset('/css/custom-animations.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('/css/style-mod.css')}}" />

@stack('styles')

<!--[if lt IE 9]>
<script src="{{asset('/js/html5shiv.js')}}"></script>
<script src="{{asset('/js/respond.min.js')}}"></script>
<![endif]-->