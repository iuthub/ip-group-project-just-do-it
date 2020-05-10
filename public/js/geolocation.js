document.addEventListener('DOMContentLoaded', () => {
    getLocation();
});
function getLocation() {
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, positionError);
} else { 
    alert("Geolocation is not supported in your devise. Please, write comment about where to deliver your order");
}
}
function showPosition(position) {
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value =position.coords.longitude;
}
function positionError(error){
    if (error.PERMISSION_DENIED) alert('Please, accept geolocation from browser or write comment about where to deliver your order for food');
    hideLoadingDiv();
    showError('Geolocation is not enabled. Please enable to use this feature');
}