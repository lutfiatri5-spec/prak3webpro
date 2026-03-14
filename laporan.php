<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laporan Sampah - Smart Waste</title>

<script src="https://cdn.tailwindcss.com"></script>

<!-- Leaflet Maps -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

</head>

<body class="bg-gray-100 min-h-screen font-sans pt-20">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full bg-blue-700 text-white shadow">

<div class="max-w-6xl mx-auto px-6">

<div class="flex items-center justify-between py-3">

<div class="flex items-center gap-3">

<div class="w-10 h-10 bg-white text-blue-700 rounded-full flex items-center justify-center font-bold">
FS
</div>

<span class="text-xl font-bold">Smart Waste</span>
</a>

<div class="hidden md:flex items-center gap-6">

<a href="beranda.php">Beranda</a>
<a href="laporan.php" class="font-bold">Laporan</a>
<a href="#">Edukasi</a>
<a href="#">Peta</a>
<a href="#">Kamera</a>


</div>

</div>

</div>

</nav>


<!-- FORM -->
<div class="max-w-4xl mx-auto px-6 mt-10">

<h2 class="text-2xl font-bold mb-4">
Laporan Sampah
</h2>

<div class="bg-white p-6 rounded-lg shadow">

<form>

<div class="grid md:grid-cols-2 gap-6">

<!-- FOTO -->
<div>

<label class="font-semibold text-gray-700">
Upload Foto
</label>

<input type="file"
accept="image/*"
class="w-full border rounded-lg p-2 mt-2">

</div>


<!-- DESKRIPSI -->
<div>

<label class="font-semibold text-gray-700">
Deskripsi Masalah
</label>

<textarea
class="w-full border rounded-lg p-3 mt-2"
rows="4"
placeholder="Tuliskan masalah..."></textarea>

</div>

</div>


<!-- LOKASI -->
<div class="mt-6">

<label class="font-semibold text-gray-700">
Lokasi Laporan
</label>

<!-- TOMBOL PILIHAN -->
<div class="flex gap-3 mt-2">

<button type="button"
onclick="showMap()"
class="bg-gray-300 px-4 py-2 rounded">
Pilih Lokasi
</button>

<button type="button"
onclick="showInput()"
class="bg-blue-600 text-white px-4 py-2 rounded">
Masukkan Lokasi
</button>

</div>

<!-- MAP -->
<div id="mapContainer" class="hidden mt-3">
<div id="map" class="h-64 w-full rounded-lg"></div>
</div>

<!-- INPUT LOKASI -->
<div id="inputLokasi" class="mt-3">
<input
type="text"
id="lokasi"
placeholder="Masukkan alamat lokasi..."
class="w-full border rounded-lg p-2">
</div>

</div>


<!-- BUTTON -->
<button
type="submit"
class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700">

Submit Laporan ➤

</button>

</form>

</div>

</div>


<script>

var map = L.map('map').setView([-6.200000,106.816666],12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
attribution:'© OpenStreetMap'
}).addTo(map);

var marker;

map.on('click',function(e){

if(marker){
map.removeLayer(marker);
}

marker=L.marker(e.latlng).addTo(map);

document.getElementById("lokasi").value=
e.latlng.lat + ", " + e.latlng.lng;

});


function showMap(){
document.getElementById("mapContainer").classList.remove("hidden");
}

function showInput(){
document.getElementById("mapContainer").classList.add("hidden");
}

</script>

</body>
</html>