<?php 

include("formula.php");

function convert_from_meter($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_METER)) {
        return $from_value * LENGTH_FROM_METER[$to_unit];
    }
}

function convert_from_kilometer($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_KILOMETER)) {

        $multiply_unit_from_kilometer_conversion = array("mile", "nautical_mile");

        if(in_array($to_unit, $multiply_unit_from_kilometer_conversion)) {
            return $from_value / LENGTH_FROM_KILOMETER[$to_unit];
        }

        return $from_value * LENGTH_FROM_KILOMETER[$to_unit];
    }
}

function convert_from_nanometer($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_NANOMETER)) {
        return $from_value / LENGTH_FROM_NANOMETER[$to_unit];
    }
        
}

function convert_from_micrometer($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_MICROMETER)) {

        $multiply_unit_from_micrometer_conversion = array("nanometer");

        if(in_array($to_unit, $multiply_unit_from_micrometer_conversion)) {
            return $from_value * LENGTH_FROM_MICROMETER[$to_unit];
        }

        return $from_value / LENGTH_FROM_MICROMETER[$to_unit];
    }
        
}

function convert_from_centimeter($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_CENTIMETER)) {

        $multiply_unit_from_micrometer_conversion = array("nanometer", "micrometer");

        if(in_array($to_unit, $multiply_unit_from_micrometer_conversion)) {
            return $from_value * LENGTH_FROM_CENTIMETER[$to_unit];
        }

        return $from_value / LENGTH_FROM_CENTIMETER[$to_unit];
    }
        
}

function convert_from_decimeter($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_DECIMETER)) {

        $multiply_unit_from_decimeter_conversion = array("inch", "nanometer", "micrometer", "centimeter");

        if(in_array($to_unit, $multiply_unit_from_decimeter_conversion)) {
            return $from_value * LENGTH_FROM_DECIMETER[$to_unit];
        }

        return $from_value / LENGTH_FROM_DECIMETER[$to_unit];
    }
        
}

function convert_from_inch($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_INCH)) {
        return $from_value * LENGTH_FROM_INCH[$to_unit];
    }
}

function convert_from_foot($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_FOOT)) {

        $multiply_unit_from_foot_conversion = array("inch", "nanometer", "micrometer", "centimeter", "decimeter");

        if(in_array($to_unit, $multiply_unit_from_foot_conversion)) {
            return $from_value * LENGTH_FROM_FOOT[$to_unit];
        }

        return $from_value / LENGTH_FROM_FOOT[$to_unit];
    }
}

function convert_from_yard($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_YARD)) {
        
        $multiply_unit_from_yard_conversion = array("inch", "foot", "nanometer", "micrometer", "centimeter", "decimeter");

        if(in_array($to_unit, $multiply_unit_from_yard_conversion)) {
            return $from_value * LENGTH_FROM_YARD[$to_unit];
        }

        return $from_value / LENGTH_FROM_YARD[$to_unit];
    }
}

function convert_from_mile($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_MILE)) {
        
        $multiply_unit_from_mile_conversion = array("inch", "foot", "yard", "micrometer", "centimeter", "decimeter", "meter", "kilometer");

        if(in_array($to_unit, $multiply_unit_from_mile_conversion)) {
            return $from_value * LENGTH_FROM_MILE[$to_unit];
        }

        return $from_value / LENGTH_FROM_MILE[$to_unit];
    }
}

function convert_from_nautical_mile($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_NAUTICAL_MILE)) {
        
        $multiply_unit_from_nautical_mile_conversion = array("inch", "foot", "yard", "mile", "nanometer", "micrometer", "centimeter", "decimeter", "meter");

        if(in_array($to_unit, $multiply_unit_from_nautical_mile_conversion)) {
            return $from_value * LENGTH_FROM_NAUTICAL_MILE[$to_unit];
        }

        return $from_value / LENGTH_FROM_NAUTICAL_MILE[$to_unit];
    }
}

function convert_from_league($from_value, $from_unit, $to_unit) {
    if(array_key_exists($from_unit, LENGTH_FROM_LEAGUE)) {

        return $from_value * LENGTH_FROM_LEAGUE[$to_unit];
    }
}



?>

