<?php

namespace App\Helpers;

use ParseCsv\Csv;

class ProvinceHelper
{
    /**
     * Raw Data file path.
     *
     * @return string
     */
    protected static $path = 'data/csv';

    /**
     * Get provinces data.
     *
     * @return array
     */
    public static function getProvinces()
    {
        $result = self::getCsvData(self::$path.'/provinces.csv');

        return $result;
    }

    /**
     * Get regencies data.
     *
     * @return array
     */
    public static function getRegencies()
    {
        $result = self::getCsvData(self::$path.'/regencies.csv');

        return $result;
    }

    /**
     * Get districts data.
     *
     * @return array
     */
    public static function getDistricts()
    {
        $result = self::getCsvData(self::$path.'/districts.csv');

        return $result;
    }

    /**
     * Get villages data.
     *
     * @return array
     */
    public static function getVillages()
    {
        $result = self::getCsvData(self::$path.'/villages.csv');

        return $result;
    }

    /**
     * Get Data from CSV.
     *
     * @param string $path File Path.
     *
     * @return array
     */
    public static function getCsvData($path = '')
    {
        $csv = new Csv();
        $csv->auto($path);

        return $csv->data;
    }
}

?>
