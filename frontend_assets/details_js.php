<script src="frontend_assets/js/jquery-1.12.4.min.js"></script>
<script src="frontend_assets/js/bootstrap.min.js"></script>
<script src="frontend_assets/js/slick.js"></script>
<script src="frontend_assets/js/jquery.countdown.min.js"></script>
<script src="frontend_assets/js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="frontend_assets/js/jquery.elevatezoom.js"></script>
<script src="frontend_assets/js/jquery.fancybox.pack.js"></script>
<script src="frontend_assets/js/handleCounter.js"></script>
<script src="frontend_assets/js/xzoom.min.js"></script>
<script src="frontend_assets/js/setup.js"></script>
<script src="frontend_assets/js/jquery.meanmenu.min.js"></script>
<script src="frontend_assets/js/main.js"></script>
<script>
 $(function ($) {
        var options = {
            minimum: 1,
            maximize: 100,
            onChange: valChanged,
            onMinimum: function(e) {
                console.log('reached minimum: '+e)
            },
            onMaximize: function(e) {
                console.log('reached maximize'+e)
            }
        }
        $('#handleCounter').handleCounter(options)
        $('#handleCounter2').handleCounter(options)
  $('#handleCounter3').handleCounter({maximize: 100})
    })
    function valChanged(d) {
//            console.log(d)
    }
</script>
