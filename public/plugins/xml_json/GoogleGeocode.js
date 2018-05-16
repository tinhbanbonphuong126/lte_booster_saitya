/**
* Google Geocode HTTP API via AJAX v0.1
* (c)2009 Petar Strinic (http://petarstrinic.com)
*/
function GoogleGeocode(apiKey) {
    this.apiKey = apiKey;
    this.geocode = function(address, callbackFunction) {
        jQuery.ajax({
            dataType: 'jsonp',
            url: 'http://maps.google.com/maps/geo?output=json&oe=utf8&sensor=false'
                    + '&key=' + this.apiKey + '&q=' + address,
            cache: false,
            success: function(data){
                if(data.Status.code==200) {
                    var result = {};
                    var ad = data.Placemark[0].AddressDetails.Country.AdministrativeArea;
                    result.streetAddress = ad.Locality.Thoroughfare && ad.Locality.Thoroughfare.ThoroughfareName ? ad.Locality.Thoroughfare.ThoroughfareName : '';
                    result.city = ad.Locality && ad.Locality.LocalityName ? ad.Locality.LocalityName : '';
                    result.state = ad && ad.AdministrativeAreaName ? ad.AdministrativeAreaName : '';
                    result.zip = ad.Locality.PostalCode && ad.Locality.PostalCode.PostalCodeNumber ? ad.Locality.PostalCode.PostalCodeNumber : '';
                    result.longitude = data.Placemark[0].Point.coordinates[0];
                    result.latitude = data.Placemark[0].Point.coordinates[1];
                    callbackFunction(result);
                } else {
                    callbackFunction(null);
                }
            }
          });
    };
}
