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
     */
    public function __construct(
        private PDO $db
    ){}

    /**
     * @param string $sort either ASC or DESC - sorting records by time
     * @return array|null return array with results or null
     */
    private function getResultsFromDB(string $sort): ?array
    {
        $sort = htmlspecialchars($sort, ENT_QUOTES);
        if($sort == 'ASC' || $sort == 'DESC'){
            $res = $this->db->prepare("SELECT first_name, last_name, car, time, s1, s2, s3 FROM `laps`
                    JOIN drivers on laps.driver = drivers.id
                    ORDER BY time $sort;");
            $res->execute();

            $resArray = array();
            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $row['time'] = $this->formatSeconds($row['time']); //to parse
                $resArray[] = $row;
            }

            return $resArray;
        } else
            return null;
    }

    /**
     * @param string $sort either ASC or DESC - sorting records by time
     * @return bool|string
     */
    public function getResultJson($sort = 'ASC'): bool|string
    {
        $sort = strtoupper($sort);

        $result = $this->getResultsFromDB($sort);

        return json_encode($result);
    }

    private function formatSeconds( $seconds )
    {
        $hours = 0;
        $milliseconds = str_replace( "0.", '', $seconds - floor( $seconds ) );

        if ( $seconds > 3600 )
        {
            $hours = floor( $seconds / 3600 );
        }
        $seconds = $seconds % 3600;


        return str_pad( $hours, 2, '0', STR_PAD_LEFT )
            . gmdate( ':i:s', $seconds )
            . ($milliseconds ? ".$milliseconds" : '')
            ;
    }
}