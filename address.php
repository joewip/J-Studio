<?php
session_start();
// Retrieve user_id from the form submission

$user_id = $_GET['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adress - J Studio</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="addresstyle.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>


</head>

<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address-form floating-element">
                <h2 style="font-weight: bold;">Address Details</h2>
                <form method="post" action="addressdb.php">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                    <div class="form-group">
                        <label for="country">Country *</label>
                        <select class="form-control" id="country" name="country" required>
                            <option selected disabled>Select Country</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="lotBlock" id="lotBlock" placeholder="Lot/Block">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="street" id="street" placeholder="Street">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="phase" id="phase" placeholder="Subdivision">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="province">Province *</label>
                            <select class="form-control" name="province" id="province" required>
                                <option selected disabled>Select Province</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cityMunicipality">City *</label>
                            <select class="form-control" name="cityMunicipality" id="cityMunicipality" required>
                                <option selected disabled>Select City</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="barangay">Barangay *</label>
                        <select class="form-control" name="barangay" id="barangay" required>
                            <option selected disabled>Select Barangay</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-dark">Finish</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<script>
$(document).ready(function() {
    // Load countries into the country dropdown
    $.getJSON('country.json', function(data) {
        $.each(data.countries, function(key, value) {
            $('#country').append('<option value="' + value.code + '">' + value.name + '</option>');
        });
    });

    // Handle country selection
    $('#country').change(function() {
    var country_code = $(this).val();
    $('#province').empty(); // Clear existing options
    $('#province').append('<option selected disabled>Select Province</option>'); // Add default option
    $('#cityMunicipality').empty(); // Clear city options
    $('#barangay').empty(); // Clear barangay options

    if (country_code === 'PH') { // Assuming 'PH' is the country code for the Philippines
        $('#barangayField').show();
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province_name, province) {
                    $('#province').append('<option value="' + province_name + '">' + province_name + '</option>');
                });
            });
        });
    } else {
        $('#barangayField').hide();
        // Load provinces based on the selected country
        $.getJSON('country.json', function(data) {
            $.each(data.countries, function(key, value) {
                if (value.code === country_code) {
                    $.each(value.states, function(index, state) {
                        $('#province').append('<option value="' + state.code + '">' + state.name + '</option>');
                    });
                }
            });
        });
    }
});

    // Handle province selection
    $('#province').change(function() {
        var province_name = $(this).val();
        var country_code = $('#country').val();
        $('#cityMunicipality').empty(); // Clear existing options
        $('#cityMunicipality').append('<option selected disabled>Select City</option>'); // Add default option
        $('#barangay').empty(); // Clear barangay options

        if (country_code === 'PH') { // Assuming 'PH' is the country code for the Philippines
            $.getJSON('philippines.json', function(data) {
                // Load cities for the selected province in the Philippines
                $.each(data, function(region_code, region) {
                    $.each(region.province_list, function(province, province_data) {
                        if (province === province_name) {
                            $.each(province_data.municipality_list, function(city, city_data) {
                                $('#cityMunicipality').append('<option value="' + city + '">' + city + '</option>');
                            });
                        }
                    });
                });
            });
        } else {
            // Load cities for the selected province in other countries
            $.getJSON('country.json', function(data) {
                $.each(data.countries, function(key, value) {
                    if (value.code === country_code) {
                        $.each(value.states, function(index, state) {
                            if (state.code === province_name) {
                                $.each(state.cities, function(index, city) {
                                    $('#cityMunicipality').append('<option value="' + city.id + '">' + city.name + '</option>');
                                });
                            }
                        });
                    }
                });
            });
        }
    });

// Handle city selection
$('#cityMunicipality').change(function() {
    var city_name = $(this).val();
    $('#barangay').empty(); // Clear existing options
    $('#barangay').append('<option selected disabled>Select Barangay</option>'); // Add default option

    if ($('#country').val() === 'PH') { // Assuming 'PH' is the country code for the Philippines
        $.getJSON('philippines.json', function(data) {
            $.each(data, function(region_code, region) {
                $.each(region.province_list, function(province, province_data) {
                    $.each(province_data.municipality_list, function(city, city_data) {
                        if (city === city_name) {
                            $.each(city_data.barangay_list, function(index, barangay) {
                                $('#barangay').append('<option value="' + barangay + '">' + barangay + '</option>');
                            });
                        }
                    });
                });
            });
        });
    } else {
        // Load barangays based on the selected city
        $.getJSON('country.json', function(data) {
        $.each(data.countries, function(key, value) {
            $.each(value.states, function(index, state) {
                $.each(state.cities, function(index, city) {
                    if (city.id == city_id) {
                        $.each(city.barangays, function(index, barangay) {
                            $('#barangay').append('<option value="' + barangay.id + '">' + barangay.name + '</option>');
                            });
                        }
                    });
                });
            });
        });
    }
});
}
)

document.addEventListener('DOMContentLoaded', function() {
            // Get the element with the floating-element class
            var floatingElement = document.querySelector('.floating-element');
            // Add the floating-animation class to trigger the animation
            floatingElement.classList.add('floating-animation');
        });

</script>




</html>
