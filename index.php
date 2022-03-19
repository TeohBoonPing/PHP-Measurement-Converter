<?php 

session_start();
include("functions.php"); 

if($_SERVER["REQUEST_METHOD"] == "POST") {

    extract($_POST);

    if(!is_numeric($from_value)) {
        echo "<script>alert('Please Provide a Valid Number!'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($from_unit)) {
        echo "<script>alert('Please Select a From Unit Value!'); window.history.go(-1);</script>";
        exit();
    }

    if(empty($to_unit)) {
        echo "<script>alert('Please Select a To Unit Value!'); window.history.go(-1);</script>";
        exit();
    }

    switch($from_unit) {
        case "meter":
            $converted_value = convert_from_meter($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "kilometer":
            $converted_value = convert_from_kilometer($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "nanometer":
            $converted_value = convert_from_nanometer($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "micrometer":
            $converted_value = convert_from_micrometer($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "centimeter":
            $converted_value = convert_from_centimeter($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "decimeter":
            $converted_value = convert_from_decimeter($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "inch":
            $converted_value = convert_from_inch($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "foot":
            $converted_value = convert_from_foot($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "yard":
            $converted_value = convert_from_yard($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "mile":
            $converted_value = convert_from_mile($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "nautical_mile":
            $converted_value = convert_from_nautical_mile($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
        case "league":
            $converted_value = convert_from_league($from_value, $from_unit, $to_unit) . " " .ucwords(str_replace("_", " ", $to_unit));
            break;
    }

    $_SESSION["from_value"] = $from_value;
    $_SESSION["from_unit"] = $from_unit;
    $_SESSION["to_unit"] = $to_unit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Measurement</title>
  </head>
  <body>
    <div class="container">

        <div style="margin: 170px;">
            <h2 class="text-center">Measurement Converter</h2>
            
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>From:</label>
                        <input type="text" class="form-control" name="from_value" id="from_value" value="<?php echo (isset($_SESSION["from_value"])) ? $_SESSION["from_value"] : ''; ?>" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label>To:</label>
                        <input type="text" class="form-control" name="to_value" disabled value="<?php echo (isset($converted_value)) ? $converted_value : ''; ?>">
                    </div>
                </div>
        
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select class="custom-select from_unit" name="from_unit" size="12">
                            <option value="meter" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "meter") ? 'selected' : ''; ?>>Meter (m)</option>
                            <option value="kilometer" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "kilometer") ? 'selected' : ''; ?>>Kilometer (km)</option>
                            <option value="nanometer" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "nanometer") ? 'selected' : ''; ?>>Nanometer (nm)</option>
                            <option value="micrometer" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "micrometer") ? 'selected' : ''; ?>>Micrometer (μm)</option>
                            <option value="centimeter" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "centimeter") ? 'selected' : ''; ?>>Centimeter (cm)</option>
                            <option value="decimeter" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "decimeter") ? 'selected' : ''; ?>>Decimeter (dm)</option>
                            <option value="inch" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "inch") ? 'selected' : ''; ?>>Inch (in)</option>
                            <option value="foot" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "foot") ? 'selected' : ''; ?>>Foot (ft)</option>
                            <option value="yard" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "yard") ? 'selected' : ''; ?>>Yard (yd)</option>
                            <option value="mile" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "mile") ? 'selected' : ''; ?>>Mile (mi)</option>
                            <option value="nautical_mile" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "nautical_mile") ? 'selected' : ''; ?>>Nautical Mile</option>
                            <option value="league" <?php echo (isset($_SESSION["from_unit"]) && $_SESSION["from_unit"] == "league") ? 'selected' : ''; ?>>League (int.)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="custom-select to_unit" name="to_unit" size="12">
                            <option value="meter" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "meter") ? 'selected' : ''; ?>>Meter (m)</option>
                            <option value="kilometer" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "kilometer") ? 'selected' : ''; ?>>Kilometer (km)</option>
                            <option value="nanometer" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "nanometer") ? 'selected' : ''; ?>>Nanometer (nm)</option>
                            <option value="micrometer" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "micrometer") ? 'selected' : ''; ?>>Micrometer (μm)</option>
                            <option value="centimeter" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "centimeter") ? 'selected' : ''; ?>>Centimeter (cm)</option>
                            <option value="decimeter" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "decimeter") ? 'selected' : ''; ?>>Decimeter (dm)</option>
                            <option value="inch" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "inch") ? 'selected' : ''; ?>>Inch (in)</option>
                            <option value="foot" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "foot") ? 'selected' : ''; ?>>Foot (ft)</option>
                            <option value="yard" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "yard") ? 'selected' : ''; ?>>Yard (yd)</option>
                            <option value="mile" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "mile") ? 'selected' : ''; ?>>Miles (mi)</option>
                            <option value="nautical_mile" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "nautical_mile") ? 'selected' : ''; ?>>Nautical Mile</option>
                            <option value="league" <?php echo (isset($_SESSION["to_unit"]) && $_SESSION["to_unit"] == "league") ? 'selected' : ''; ?>>League (int.)</option>
                        </select>
                    </div>
                </div>
                
                <center>
                    <button type="submit" class="btn btn-primary">Convert</button>
                </center>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        // PREVENT FORM RESUBMISSION
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

    <?php 
    unset($_SESSION["from_value"]);
    unset($_SESSION["from_unit"]);
    unset($_SESSION["to_unit"]);
    ?>
  </body>
</html>


