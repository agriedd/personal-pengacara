<?php

namespace App\Helpers;

class Number{
    public static function short($number, $precision = 3, $divisors = null){
        if(!isset($divisors)){
            $divisors = array(
                pow(1000, 0) => '', // 1000^0 == 1
                pow(1000, 1) => 'K', // 1000^1
                pow(1000, 2) => 'M', // 1000^2
                pow(1000, 3) => 'B', // 1000^3
                pow(1000, 4) => 'T', // 1000^4
                pow(1000, 5) => 'Qa', // 1000^5 Quadrilliun
                pow(1000, 6) => 'Qi', // 1000^6 Quintillion
            );
        }
        /**
         * looping divisor dan mencari bagian divisor yang
         * setelah looping (x 1000) lebih besar dari nilai number
         * 
         */
        foreach($divisors as $divisor => $shorthand){
            if(abs($number) < ($divisor * 1000)){
                /**
                 * jika ketemu break
                 */
                break;
            }
        }

        return number_format($number / $divisor, $precision) . $shorthand;
    }
}
