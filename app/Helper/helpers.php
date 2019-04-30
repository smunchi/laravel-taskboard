<?php

function visual_number_format($value)
{
    if (is_integer($value)) {
        return number_format($value, 2, '.', '');
    } elseif (is_string($value)) {
        $value = floatval($value);
    }
    $number = explode('.', number_format($value, 10, '.', ''));
    $intVal = (int)$value;
    if ($value > $intVal || $value < 0) {
        $intPart = $number[0];
        $floatPart = substr($number[1], 0, 8);
        $floatPart = rtrim($floatPart, '0');
        if (strlen($floatPart) < 2) {
            $floatPart = substr($number[1], 0, 2);
        }
        return $intPart . '.' . $floatPart;
    }
    return $number[0] . '.' . substr($number[1], 0, 2);
}

function getTaksStatus($input = null)
{
    $output = ['todo', 'inprogress', 'done'];
    return $output[$input];
}

function searchTaskStatus($keyword)
{
    $st = [];
    if (strpos('_todo', strtolower($keyword)) != false) {
        array_push($st, 1);
    }
    if (strpos('_inprogress', strtolower($keyword)) != false) {
        array_push($st, 2);
    }
    if (strpos('_lost', strtolower($keyword)) != false) {
        array_push($st, 3);
    }

    return $st;
}

function allsetting($array = null)
{
    if (!isset($array[0])) {
        $allsettings = \App\Models\AdminSetting::get();
        if ($allsettings) {
            $output = [];
            foreach ($allsettings as $setting) {
                $output[$setting->slug] = $setting->value;
            }
            return $output;
        }
        return false;
    } elseif (is_array($array)) {
        $allsettings = \App\Models\AdminSetting::whereIn('slug', $array)->get();
        if ($allsettings) {
            $output = [];
            foreach ($allsettings as $setting) {
                $output[$setting->slug] = $setting->value;
            }
            return $output;
        }
        return false;
    } else {
        $allsettings = \App\Models\AdminSetting::where(['slug' => $array])->first();
        if ($allsettings) {
            $output = $allsettings->value;
            return $output;
        }
        return false;
    }
}