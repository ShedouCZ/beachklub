<article id="node-81" class="node node-maps node-odd published with-comments clearfix">

    <header>
        <h2><a href="/node/81"></a></h2>
    </header>

    <div class="content">
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
              center: new google.maps.LatLng(50.131984, 14.475362),
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div id="map-canvas" style="height:300px"></div>
        <script>
            initialize();
        </script>
    </div><!-- /.content -->

    <footer>
    </footer>

</article><!-- /.node -->
