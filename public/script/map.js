function initMap() {
    // The location of Uluru
    const uluru = { lat: 50.424232675954414, lng: 30.46788082561673 };
    //50.424232675954414, 30.46788082561673
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}