<?php


/**
 * Class TracksDict
 * Dictionary containing infos about tracks
 */
class TracksDict
{
    /**
     *  Regular expression used to separate track name and year
     */
    private const TRACK_NAME_REGEX = '/[_]\d{4}/';

    /**
     *  Array containing track list
     */
    private const TRACK_LIST = [
        'barcelona' => array(
            "name" => "Circuit de Barcelona-Catalunya",
            "country" => "Spain",
            "location" => "Montmeló"
        ),
        'brands_hatch' => array(
            "name" => "Brands Hatch",
            "country" => "United Kingdom",
            "location" => "West Kingsdown"
        ),
        'hungaroring' => array(
            "name" => "Hungaroring",
            "country" => "Hungary",
            "location" => "Mogyoród"
        ),
        'kylami' => array(
            "name" => "Kyalami Grand Prix Circuit",
            "country" => "South Africa",
            "location" => "Midrand"
        ),
        'laguna_seca' => array(
            "name" => "WeatherTech Raceway Laguna Seca",
            "country" => "United States",
            "location" => "Monterey County"
        ),
        'misano' => array(
            "name" => "Misano World Circuit Marco Simoncelli",
            "country" => "Italy",
            "location" => "Misano Adriatico"
        ),
        'monza' => array(
            "name" => "Autodromo Nazionale di Monza",
            "country" => "Italy",
            "location" => "Monza"
        ),
        'mount_panorama' => array(
            "name" => "Mount Panorama",
            "country" => "Australia",
            "location" => "Bathurst"
        ),
        'nurburgring' => array(
            "name" => "Nürburgring",
            "country" => "Germany",
            "location" => "Nürburg"
        ),
        'paul_ricard' => array(
            "name" => "Circuit Paul Ricard",
            "country" => "France",
            "location" => "Le Castellet"
        ),
        'silverstone' => array(
            "name" => "Silverstone Circuit",
            "country" => "United Kingdom",
            "location" => "Silverstone"
        ),
        'spa' => array(
            "name" => "Circuit de Spa-Francorchamps",
            "country" => "Belgium",
            "location" => "Stavelot"
        ),
        'suzuka' => array(
            "name" => "Suzuka International Racing Course",
            "country" => "Japan",
            "location" => "Suzuka"
        ),
        'zolder' => array(
            "name" => "Circuit Zolder",
            "country" => "Belgium",
            "location" => "Heusden-Zolder"
        ),
        'zandvoort' => array(
            "name" => "Circuit Zandvoort",
            "country" => "Netherlands",
            "location" => "Zandvoort"
        ),
        'imola' => array(
            "name" => "Autodromo Internazionale Enzo e Dino Ferrari",
            "country" => "Italy",
            "location" => "Imola"
        ),
        'oulton_park' => array(
            "name" => "Oulton Park Race Circuit",
            "country" => "United Kingdom",
            "location" => "Cheshire"
        ),
        'donington' => array(
            "name" => "Donington Park",
            "country" => "United Kingdom",
            "location" => "Leicestershire"
        ),
        'snetterton' => array(
            "name" => "Snetterton Circuit",
            "country" => "United Kingdom",
            "location" => "Snetterton"
        )
    ];

    /**
     * @param string $trackName track name incl. year etc.: barcelona_2020
     * @return array|null track data (name, year and location)
     */
    public function getTrackName(string $trackName): array|null
    {
        return $this->translateTrackName(preg_replace(self::TRACK_NAME_REGEX, '', $trackName));
    }

    /**
     * @param string $trackId track name excl. year etc.: barcelona
     * @return array|null track data (name, year and location)
     */
    private function translateTrackName(string $trackId): array|null
    {
        if (!empty(self::TRACK_LIST[$trackId])) {
            return self::TRACK_LIST[$trackId];
        }
        else {
            return null;
        }
    }

    /**
     * @return string[][] Reaturns array containing track infos
     */
    public function getTrackList(): array
    {
        return self::TRACK_LIST;
    }
}