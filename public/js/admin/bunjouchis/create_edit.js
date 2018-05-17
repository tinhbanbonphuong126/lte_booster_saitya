$(function () {
    // jQuery goes here...

    //Get base url base sent to Google Map API.
    var API_KEY = "AIzaSyCwlkTA1L6lLnp76nr6LZ22ebIXMXNxxUY";

    reset();

    handleAddBlock();
    handleDeleteBlock();

    getLocationAPI();
    // formValidation();




    //Define function here.

    function reset() {

        $.each($(".prices_bangou"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][bangou]");
        });

        $.each($(".prices_description"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][description]");
        });
    }

    function handleAddBlock() {
        $(".bound_price").on("click", ".ion-md-add", function () {

            var source = $("#price-template").html();
            var template = Handlebars.compile(source);

            var $current = $(this).closest(".m_line");
            $(template({})).insertAfter($current);

            reset();
        });
    }

    function handleDeleteBlock() {
        $(".bound_price").on("click", ".ion-md-remove", function () {
            var $current = $(this).closest(".m_line");

            if ($(".m_line").length > 1) {
                $current.remove();

                reset();
            }
        });
    }

    //Function handle send and get Ajax Google Map API XML
    function getLocationAPI() {

        geoLocatorConfig();

        $("#address[name='address']").on("focusout", function (event) {
            var address = $(this).val();

            if (address = address.trim()) {

                console.log(address);

                geolocator.geocode(address, function (err, location) {

                    if(err) {
                        console.log(err);

                        $("#address[name='address']").css("border", "1px solid red");
                    } else {
                        console.log(location);
                        console.log(location.address.country);

                        if ((location.address.country == "日本")) {
                            $("#address[name='address']").css("border", "1px solid green");
                            $("#latitude[name='latitude']").val(location.coords.latitude);
                            $("#longitude[name='longitude']").val(location.coords.longitude);
                        } else {
                            $("#address[name='address']").css("border", "1px solid red");
                            $("#latitude[name='latitude']").val("");
                            $("#longitude[name='longitude']").val("");

                        }
                    }
                });
            } else {
                $("#address[name='address']").css("border", "1px solid red");
            }
        });
    }

    function geoLocatorConfig() {
        geolocator.config({
            language: "ja",
            https: true,
            google: {
                version: 3,
                key: API_KEY || '' // YOUR-GOOGLE-API-KEY
            }
        });
    }

    function formValidation()
    {
        initial();
        validateForm('#formSubmit', rules, messages);
    }

    function initial() {
        rules = {
            title: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            map_url: {
                required: true
            },
            document_url: {
                required: true
            },
            address: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            land_area: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            ground: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            total_parcel: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            construction_pay_rate: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            floor_area_ratio: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            drainage: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            dealing_status: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            region_id: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            school_id: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            route_id: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            station_id: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            status: {
                required: true
            }
        };
        messages = {};

    }
});
