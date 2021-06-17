let map;

function initMap() {
  const braintech = { lat: 23.780287, lng: 90.422699 };
  map = new google.maps.Map(document.getElementById("map"), {
    center: braintech,
    zoom: 13,
  });
  const marker = new google.maps.Marker({
    position: braintech,
    map: map,
  });
}