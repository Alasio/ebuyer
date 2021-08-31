var autocomplete;
var countries = [
    'uk'
];

function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById('autocomplete'));
    autocomplete.setComponentRestrictions(
        {'country': countries});
    autocomplete.setFields(['address_component']);
    autocomplete.addListener('place_changed', fillInAddress);
}

/**
 * A simple function to take the results, transform them into a formatted
 * address and then update our form inputs as applicable.  Also removes
 * the placeholders for all form components.
 */
function fillInAddress() {
    var place = autocomplete.getPlace();
    var address = formatAddress(place.address_components);

    var name = document.getElementById('autocomplete').value;

    name = name.substr(0, name.indexOf(','));

    if (name !== address['address_line_1'] && name.trim()) {
        address['site_name'] = name;
    }
    //If the site name is empty remove it!
    //  Fixed issue where the user can put in a name then lookup the address
    //  Also fixes issue with labels not being moved correctly if the name was null / ""
    if(!address['site_name'] || !address['site_name'].trim()) {
        delete address[['site_name']];
    }

    for (var key in address) {
        $('.'+key).val(address[key]);
        $('.'+key).attr("placeholder",'');
        $('.'+key).trigger("change");
    }

    $('#autocomplete').val('');
}

/**
 * A function to format our address search return (the address_components) into
 * a more manageable address array based on how many components in our address_components
 *
 * @param address_components
 *
 * @returns array address
 *
 * @author AC a.clark@crownoil.co.uk
 */
function formatAddress(address_components) {
    var searchResult = [];

    // Our places search result is a multi-dimensional array.  We need to switch
    // this to a single keyed array with the information we require:
    for (var i = 0; i < address_components.length; i++) {
        searchResult[address_components[i]["types"][0]] = address_components[i]["long_name"];
    }

    // Start out with a blank address array with all our components
    var address = {
        site_name: null,
        address_line_1 : null,
        address_line_2 : null,
        address_line_3 : null,
        address_line_4 : null,
        town : null,
        county : null,
        postcode : null
    };

    // Now, we check our place
    // Ok, so do we have a sub premise?
    if ("subpremise" in searchResult) {
        address = setAddressLine(address, searchResult, "subpremise");
    }

    // Next, do we have premise?
    if ("premise" in searchResult) {
        address = setAddressLine(address, searchResult, "premise")
    }

    // Third, do we have an address, including street numbers?
    if ("route" in searchResult) {
        // Route == street name - Check for a street number!
        if ("street_number" in searchResult) {
            // We have both, so create a single line:
            searchResult["street_number"] = searchResult["street_number"].concat(" ", searchResult["route"]);
            address = setAddressLine(address, searchResult, "street_number");
        } else {
            address = setAddressLine(address, searchResult, "route");
        }
    }

    // Fourth, we check our Neighborhood
    if ("neighborhood" in searchResult) {
        address = setAddressLine(address, searchResult, "neighborhood");
    }

    // Fifth, we set our locality
    if ("locality" in searchResult) {
        address = setAddressLine(address, searchResult, "locality");
    }

    // Now, we set our town
    if ("postal_town" in searchResult) {
        address["town"] = searchResult["postal_town"];
    }

    // And our county
    if ("administrative_area_level_2" in searchResult) {
        address["county"] = searchResult["administrative_area_level_2"];
    }

    // Finally, our post code
    if ("postal_code" in searchResult) {
        address["postcode"] = searchResult["postal_code"];
    }

    return address;
}

/**
 * Function to set our Address array, based on what is already filled in
 *
 * @param address
 * @param searchResult
 * @param value
 *
 * @returns array
 *
 * @author AC a.clark@crownoil.co.uk
 */
function setAddressLine(address, searchResult, value) {

    switch (true) {
        case (address["address_line_1"] === null):
            address["address_line_1"] = searchResult[value];
            break;
        case (address["address_line_2"] === null):
            address["address_line_2"] = searchResult[value];
            break;
        case (address["address_line_3"] === null):
            address["address_line_3"] = searchResult[value];
            break;
        case (address["address_line_4"] === null):
            address["address_line_4"] = searchResult[value];
            break;
    }

    return address;
}