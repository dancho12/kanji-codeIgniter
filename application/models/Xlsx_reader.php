<?php

//require_once __DIR__ . '/simplexlsx.class.php';
require_once APPPATH . '/libraries/simplexlsx.class.php';

class Xlsx_reader extends CI_Model
{
    public function getKanji($xlsx_file)
    {
        $mas;

        $xlsx = new SimpleXLSX(FCPATH . "assets/xlsx/$xlsx_file");
        $sheet = $xlsx->rows();

        $full = count($sheet);
        $last_row = (intval($full / 12) * 12);
        $left_side = 12;
        $right_side = 23;
        // $row_val = 0;
        // $row_h = 0;
        foreach ($sheet as $i => $row) {

            $stl = "";

            if ($i == 0) {
                $stl = ' border-left: solid 1px grey;
                border-top: solid 1px grey;/*1*/';
            } elseif ($i > 0 && $i < 11) {
                $stl = 'border-top: solid 1px grey;/*2*/';
            } elseif ($i == 11) {
                $stl = ' border-right: solid 1px grey;
                border-top: solid 1px grey;/*3*/';
            } elseif ($i == $left_side) {
                $stl = ' border-left: solid 1px grey;/*4*/';
                if ($left_side < $last_row - 24) {
                    $left_side = $left_side + 12;
                }
            } elseif ($i == $right_side) {
                $stl = ' border-right: solid 1px grey;/*5*/';
                if ($right_side < $last_row - 13) {
                    $right_side = $right_side + 12;
                }
            } elseif ($i > $last_row - 12 && $i < $last_row - 1) {
                $stl = 'border-bottom: solid 1px grey;/*6*/';
            } elseif ($i > $last_row && $i < $full - 1) {
                $stl = 'border-top: solid 0px grey;
                border-bottom: solid 1px grey;/*7*/';
            } elseif ($i == $last_row - 12) {
                $stl = 'border-bottom: solid 1px grey;
                border-left: solid 1px grey;/*8*/';
            } elseif ($i == $last_row - 1) {
                $stl = 'border-bottom: solid 1px grey;
                border-right: solid 1px grey;/*9*/';
            } elseif ($i == $last_row) {
                $stl = 'border-top: solid 0px grey;
                border-bottom: solid 1px grey;
                border-left: solid 1px grey;/*10*/';
            } elseif ($i == $full - 1) {
                $stl = 'border-top: solid 0px grey;
                border-bottom: solid 1px grey;
                border-right: solid 1px grey;/*11*/';
            }
            $mas[$i][0] = $stl;
            $mas[$i][1] = $row[1];
            $mas[$i][2] = $row[0];

            $h_str = $row[2];

            $h_str = str_replace(" ", "", $h_str);
            $h_str = str_replace("%", '<span style="text-decoration: underline; ">', $h_str);
            $h_str = str_replace("&", '</span>', $h_str);

            $mas[$i][3] = $h_str;
        }

        return $mas;
    }

}
