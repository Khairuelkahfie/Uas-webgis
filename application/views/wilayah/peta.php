<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta Lombok Tengah</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/style.css">
</head>

<body>
    <div id="mapku">

    </div>

    <script type="text/javascript" src="<?= base_url('assets/') ?>leaflet/leaflet.js"></script>

    <?php $no = 1;
    foreach ($wilayah as $wil) { ?>
        <script src="<?= base_url('assets/js/') . $wil->wilayah ?>"></script>
    <?php } ?>
    <script src="<?= base_url('assets/') ?>js/loteng.js"></script>

    <script>
        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var streets = L.tileLayer(mbUrl, {
            id: 'mapbox.streets',
            attribution: mbAttr
        });
        var peta = L.map('mapku', {
            center: [-8.6821963, 115.9888736],
            zoom: 10,
            layers: [streets]
        });

        var baseLayers = {
            "Streets": streets,
        };

        //json batas wilayah kecamatan
        <?php
        foreach ($wilayah as $wil) { ?>

            L.geoJSON([<?= $wil->datawilayah[$janapria] ?>], {
                style: function(featur) {
                    return featur.properties && featur.properties.style;
                }
            }).addTo(peta);
        <?php } ?>
        L.geoJSON([btskab], {
            style: function(feature) {
                return feature.properties && feature.properties.style;
            }
        }).addTo(peta);
    </script>


</body>

</html>