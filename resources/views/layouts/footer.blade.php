@include('partials.footer')

    <!--[if lt IE 9]>
<script type="text/javascript" src="{{asset('/js/jquery-1.11.3.min.js?ver=1')}}"></script>
<![endif]-->
<!--[if (gte IE 9) | (!IE)]><!-->
<script type="text/javascript" src="{{asset('/js/jquery-2.1.4.min.js?ver=1')}}"></script>
<!--<![endif]-->

@if(Session::has( 'warning' ))
    <script>
        $(function() {
            $('#showError').click();
        });
    </script>
@endif
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/localization/messages_es_AR.js')}}"> </script>
<script type="text/javascript" src="{{asset('/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.countdown.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/modal-box.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/ventcamp.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/cneisi.js')}}"></script>