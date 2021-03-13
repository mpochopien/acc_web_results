<?php


/**
 * Class Results
 * Gets and handles results from data base
 */
class Results
{
    /**
     * Results constructor.
     * @param PDO $db
     * @param CarsDict $carData
     * @param TracksDict $trackData
     */
    public function __construct(
        private PDO $db,
        private CarsDict $carData,
        private TracksDict $trackData
    ){}

    /**
     * @return array|null return array with results or null
     */
    private function getResultsFromDB(): ?array
    {
        $trackFilter = $this->getTrackFilter();

        $res = $this->db->prepare("SELECT concat(last_name, ' ', first_name) as driver, drivers.id, car, time, s1, s2, s3, track FROM `laps`
                JOIN drivers on laps.driver = drivers.id
                $trackFilter
                ORDER BY driver, car, time, track;");
        $res->execute();

        $resArray = array();
        $prevCar = null;
        $prevDriver = null;
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $row['time'] = $this->formatTime($row['time']);
            $row['s1'] = $this->formatTime($row['s1']);
            $row['s2'] = $this->formatTime($row['s2']);
            $row['s3'] = $this->formatTime($row['s3']);
            $carDataTmp = $this->carData->getCarName($row['car']);
            $row['carName'] = $carDataTmp['name']." [".$carDataTmp['year']."]";
            $row['class'] = $carDataTmp['class'];
            $row['track'] = $this->trackData->getTrackName($row['track'])['name'] ?? null;

            if((empty($prevDriver) || $prevDriver!=$row['id']) || empty($prevCar) || $prevCar!=$row['car']){
                $prevDriver = $row['id'];
                $prevCar = $row['car'];
                $resArray[] = array(
                    'driver' => $row['driver'],
                    'car' => $row['carName'],
                    'class' => $row['class'],
                    'time' => $row['time'],
                    's1' => $row['s1'],
                    's2' => $row['s2'],
                    's3' => $row['s3'],
                    'track' => $row['track'],
                    '_children' => array()
                );

                end($resArray);
                $pushIndex = key($resArray);
            }

            $resArray[$pushIndex]['_children'][] = array(
                'driver' => $row['driver'],
                'car' => $row['carName'],
                'class' => $row['class'],
                'time' => $row['time'],
                's1' => $row['s1'],
                's2' => $row['s2'],
                's3' => $row['s3']
            );
        }

        return $resArray;
    }

    /**
     * @param string $sort either ASC or DESC - sorting records by time
     * @return bool|string
     */
    public function getResultJson(string $sort = 'ASC'): bool|string
    {
        $sort = strtoupper($sort);

        $result = $this->getResultsFromDB($sort);

        return json_encode($result);
    }

    /**
     * @param int $time in miliseconds
     * @return string formated time
     */
    private function formatTime(int $time): string
    {
        $ms = $time % 1000;
        $ms = ($ms<100 && $ms>=10) ? "0".$ms : $ms;
        $ms = ($ms<10) ? "00".$ms : $ms;
        $time = floor($time / 1000);

        $seconds = $time % 60;
        $seconds = ($seconds<10) ? "0".$seconds : $seconds;
        $time = floor($time / 60);

        $minutes = $time % 60;

        return $minutes.":".$seconds.".".$ms;
    }

    /**
     * @return string|null return track name to use in filter from GET
     */
    private function getTrackFilter(): ?string
    {
        return (!empty($_GET['track'])) ? "WHERE track like '" . htmlspecialchars($_GET['track'], ENT_QUOTES) ."%'" : null;
    }
}