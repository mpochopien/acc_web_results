<?php


/**
 * Class TracksDict
 * Dictionary containing infos about tracks
 */
class TracksDict
{
    /**
     * @param string $trackId
     * @return array track data (name, year and class)
     */
    public function getTrackName(string $trackId): array
    {
        return match ($trackId) {
            'barcelona' => array(
                "name" => "Circuit de Barcelona-Catalunya",
                "year" => 2018,
                "country" => "Spain",
                "location" => "Montmeló"
            ),
            'brand_hatch' => array(
                "name" => "Brands Hatch",
                "year" => 2018,
                "country" => "United Kingdom",
                "location" => "West Kingsdown"
            ),
            'hungaroring' => array(
                "name" => "Hungaroring",
                "year" => 2018,
                "country" => "Hungary",
                "location" => "Mogyoród"
            ),
            'misano' => array(
                "name" => "Misano World Circuit Marco Simoncelli",
                "year" => 2018,
                "country" => "Italy",
                "location" => "Misano Adriatico"
            ),
            'monza' => array(
                "name" => "Autodromo Nazionale di Monza",
                "year" => 2018,
                "country" => "Italy",
                "location" => "Monza"
            ),
            'nurburgring' => array(
                "name" => "Nürburgring",
                "year" => 2018,
                "country" => "Germany",
                "location" => "Nürburg"
            ),
            'paul_ricard' => array(
                "name" => "Circuit Paul Ricard",
                "year" => 2018,
                "country" => "France",
                "location" => "Le Castellet"
            ),
            'silverstone' => array(
                "name" => "Silverstone Circuit",
                "year" => 2018,
                "country" => "United Kingdom",
                "location" => "Silverstone"
            ),
            'spa' => array(
                "name" => "Circuit de Spa-Francorchamps",
                "year" => 2018,
                "country" => "Belgium",
                "location" => "Stavelot"
            ),
            'zolder' => array(
                "name" => "Circuit Zolder",
                "year" => 2018,
                "country" => "Belgium",
                "location" => "Heusden-Zolder"
            ),
            'zandvoort' => array(
                "name" => "Circuit Zandvoort",
                "year" => 2018,
                "country" => "Netherlands",
                "location" => "Zandvoort"
            ),
            'barcelona_2019' => array(
                "name" => "Circuit de Barcelona-Catalunya",
                "year" => 2019,
                "country" => "Spain",
                "location" => "Montmeló"
            ),
            'brand_hatch_2019' => array(
                "name" => "Brands Hatch",
                "year" => 2019,
                "country" => "United Kingdom",
                "location" => "West Kingsdown"
            ),
            'kylami_2019' => array(
                "name" => "Kyalami Grand Prix Circuit",
                "year" => 2019,
                "country" => "South Africa",
                "location" => "Midrand"
            ),
            'laguna_seca_2019' => array(
                "name" => "WeatherTech Raceway Laguna Seca",
                "year" => 2019,
                "country" => "United States",
                "location" => "Monterey County"
            ),
            'hungaroring_2019' => array(
                "name" => "Hungaroring",
                "year" => 2019,
                "country" => "Hungary",
                "location" => "Mogyoród"
            ),
            'misano_2019' => array(
                "name" => "Misano World Circuit Marco Simoncelli",
                "year" => 2019,
                "country" => "Italy",
                "location" => "Misano Adriatico"
            ),
            'monza_2019' => array(
                "name" => "Autodromo Nazionale di Monza",
                "year" => 2019,
                "country" => "Italy",
                "location" => "Monza"
            ),
            'mount_panorama_2019' => array(
                "name" => "Mount Panorama",
                "year" => 2019,
                "country" => "Australia",
                "location" => "Bathurst"
            ),
            'nurburgring_2019' => array(
                "name" => "Nürburgring",
                "year" => 2019,
                "country" => "Germany",
                "location" => "Nürburg"
            ),
            'paul_ricard_2019' => array(
                "name" => "Circuit Paul Ricard",
                "year" => 2019,
                "country" => "France",
                "location" => "Le Castellet"
            ),
            'silverstone_2019' => array(
                "name" => "Silverstone Circuit",
                "year" => 2019,
                "country" => "United Kingdom",
                "location" => "Silverstone"
            ),
            'spa_2019' => array(
                "name" => "Circuit de Spa-Francorchamps",
                "year" => 2019,
                "country" => "Belgium",
                "location" => "Stavelot"
            ),
            'suzuka_2019' => array(
                "name" => "Suzuka International Racing Course",
                "year" => 2019,
                "country" => "Japan",
                "location" => "Suzuka"
            ),
            'zolder_2019' => array(
                "name" => "Circuit Zolder",
                "year" => 2019,
                "country" => "Belgium",
                "location" => "Heusden-Zolder"
            ),
            'zandvoort_2019' => array(
                "name" => "Circuit Zandvoort",
                "year" => 2019,
                "country" => "Netherlands",
                "location" => "Zandvoort"
            ),
            'barcelona_2020' => array(
                "name" => "Circuit de Barcelona-Catalunya",
                "year" => 2020,
                "country" => "Spain",
                "location" => "Montmeló"
            ),
            'brand_hatch_2020' => array(
                "name" => "Brands Hatch",
                "year" => 2020,
                "country" => "United Kingdom",
                "location" => "West Kingsdown"
            ),
            'hungaroring_2020' => array(
                "name" => "Hungaroring",
                "year" => 2020,
                "country" => "Hungary",
                "location" => "Mogyoród"
            ),
            'misano_2020' => array(
                "name" => "Misano World Circuit Marco Simoncelli",
                "year" => 2020,
                "country" => "Italy",
                "location" => "Misano Adriatico"
            ),
            'monza_2020' => array(
                "name" => "Autodromo Nazionale di Monza",
                "year" => 2020,
                "country" => "Italy",
                "location" => "Monza"
            ),
            'nurburgring_2020' => array(
                "name" => "Nürburgring",
                "year" => 2020,
                "country" => "Germany",
                "location" => "Nürburg"
            ),
            'paul_ricard_2020' => array(
                "name" => "Circuit Paul Ricard",
                "year" => 2020,
                "country" => "France",
                "location" => "Le Castellet"
            ),
            'silverstone_2020' => array(
                "name" => "Silverstone Circuit",
                "year" => 2020,
                "country" => "United Kingdom",
                "location" => "Silverstone"
            ),
            'spa_2020' => array(
                "name" => "Circuit de Spa-Francorchamps",
                "year" => 2020,
                "country" => "Belgium",
                "location" => "Stavelot"
            ),
            'zolder_2020' => array(
                "name" => "Circuit Zolder",
                "year" => 2020,
                "country" => "Belgium",
                "location" => "Heusden-Zolder"
            ),
            'zandvoort_2020' => array(
                "name" => "Circuit Zandvoort",
                "year" => 2020,
                "country" => "Netherlands",
                "location" => "Zandvoort"
            ),
            'imola_2020' => array(
                "name" => "Autodromo Internazionale Enzo e Dino Ferrari",
                "year" => 2020,
                "country" => "Italy",
                "location" => "Imola"
            )
        };
    }
}