<?php


/**
 * Class CarsDict
 * Dictionary containing infos about cars
 */
class CarsDict
{
    /**
     * @param int $carId ID of a car
     * @return array car data (name, year and class)
     */
    public function getCarName(int $carId): array
    {
        return match($carId) {
            0 => array(
                "name" => "Porsche 911 GT3 R",
                "year" => 2018,
                "class" => "GT3"
            ),
            1 => array(
                "name" => "Mercedes-AMG GT3",
                "year" => 2015,
                "class" => "GT3"
            ),
            2 => array(
                "name" => "Ferrari 488 GT3",
                "year" => 2018,
                "class" => "GT3"
            ),
            3 => array(
                "name" => "Audi R8 LMS",
                "year" => 2015,
                "class" => "GT3"
            ),
            4 => array(
                "name" => "Lamborghini Huracan GT3",
                "year" => 2015,
                "class" => "GT3"
            ),
            5 => array(
                "name" => "McLaren 650S GT3",
                "year" => 2015,
                "class" => "GT3"
            ),
            6 => array(
                "name" => "Nissan GT-R Nismo GT3",
                "year" => 2018,
                "class" => "GT3"
            ),
            7 => array(
                "name" => "BMW M6 GT3",
                "year" => 2017,
                "class" => "GT3"
            ),
            8 => array(
                "name" => "Bentley Continental GT3",
                "year" => 2018,
                "class" => "GT3"
            ),
            9 => array(
                "name" => "Porsche 991 II GT3 Cup",
                "year" => 2017,
                "class" => "CUP"
            ),
            10 => array(
                "name" => "Nissan GT-R Nismo GT3",
                "year" => 2015,
                "class" => "GT3"
            ),
            11 => array(
                "name" => "Bentley Continental GT3",
                "year" => 2015,
                "class" => "GT3"
            ),
            12 => array(
                "name" => "AMR V12 Vantage GT3",
                "year" => 2013,
                "class" => "GT3"
            ),
            13 => array(
                "name" => "Reiter Engineering R-EX GT3",
                "year" => 2017,
                "class" => "GT3"
            ),
            14 => array(
                "name" => "Emil Frey Jaguar G3",
                "year" => 2012,
                "class" => "GT3"
            ),
            15 => array(
                "name" => "Lexus RC F GT3",
                "year" => 2016,
                "class" => "GT3"
            ),
            16 => array(
                "name" =>  "Lamborghini Huracan GT3 Evo",
                "year" => 2019,
                "class" => "GT3"
            ),
            17 => array(
                "name" => "Honda NSX GT3",
                "year" => 2017,
                "class" => "GT3"
            ),
            18 => array(
                "name" => "Lamborghini Huracan SuperTrofeo",
                "year" => 2015,
                "class" => "ST"
            ),
            19 => array(
                "name" => "Audi R8 LMS Evo",
                "year" => 2019,
                "class" => "GT3"
            ),
            20 => array(
                "name" => "AMR V8 Vantage",
                "year" => 2019,
                "class" => "GT3"
            ),
            21 => array(
                "name" => "Honda NSX GT3 Evo",
                "year" => 2019,
                "class" => "GT3"
            ),
            22 => array(
                "name" => "McLaren 720S GT3",
                "year" => 2019,
                "class" => "GT3"
            ),
            23 => array(
                "name" => "Porsche 911 II GT3 R",
                "year" => 2019,
                "class" => "GT3"
            ),
            24 => array(
                "name" => "Ferrari 488 GT3 Evo",
                "year" => 2020,
                "class" => "GT3"
            ),
            25 => array(
                "name" => "Mercedes-AMG GT3",
                "year" => 2020,
                "class" => "GT3"
            ),
            26 => array(
                "name" => "Ferrari 488 Challenge Evo",
                "year" => 2020,
                "class" => "CHL"
            ),
            27 => array(
                "name" => "BMW M2 CS Racing",
                "year" => 2020,
                "class" => "TCX"
            ),
            28 => array(
                "name" => "Porsche 911 GT3 Cup (Type 992)",
                "year" => 2021,
                "class" => "CUP"
            ),
            29 => array(
                "name" => "Lamborghini Huracan Super Trofeo EVO2",
                "year" => 2021,
                "class" => "ST"
            ),
            30 => array(
                "name" => "BMW M4 GT3",
                "year" => 2022,
                "class" => "GT3"
            ),
            31 => array(
                "name" => "Audi R8 LMS GT3 evo II",
                "year" => 2022,
                "class" => "GT3"
            ),
            50 => array(
                "name" => "Alpine A110 GT4",
                "year" => 2018,
                "class" => "GT4"
            ),
            51 => array(
                "name" => "Aston Martin Vantage GT4",
                "year" => 2018,
                "class" => "GT4"
            ),
            52 => array(
                "name" => "Audi R8 LMS GT4",
                "year" => 2018,
                "class" => "GT4"
            ),
            53 => array(
                "name" => "BMW M4 GT4",
                "year" => 2018,
                "class" => "GT4"
            ),
            55 => array(
                "name" => "Chevrolet Camaro GT4",
                "year" => 2017,
                "class" => "GT4"
            ),
            56 => array(
                "name" => "Ginetta G55 GT4",
                "year" => 2012,
                "class" => "GT4"
            ),
            57 => array(
                "name" => "KTM X-Bow GT4",
                "year" => 2016,
                "class" => "GT4"
            ),
            58 => array(
                "name" => "Maserati MC GT4",
                "year" => 2016,
                "class" => "GT4"
            ),
            59 => array(
                "name" => "McLaren 570S GT4",
                "year" => 2016,
                "class" => "GT4"
            ),
            60 => array(
                "name" => "Mercedes AMG GT4",
                "year" => 2016,
                "class" => "GT4"
            ),
            61 => array(
                "name" => "Porsche 718 Cayman GT4 Clubsport",
                "year" => 2019,
                "class" => "GT4"
            )
        };
    }
}