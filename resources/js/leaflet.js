var mymap = L.map('map', { zoomControl: false }).setView([50.69600809170083, 9.75045018142161], 11);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {

    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
L.marker([50.69600809170083, 9.75045018142161]).addTo(mymap);


