<?php

namespace DailyProgrammer\Challenge257;

class PresidentsAlive
{
    private $data = [];

    public function file(string $file)
    {
        $file = file($file);

        unset($file[0]);

        $years = $this->generateRangeOfYears($file);

        $years = $this->generateCountsForYearsGrouped($years);

        $this->data = $this->getMostCommonYears($years);
    }

    public function output() : array
    {
        return $this->data;
    }

    private function generateRangeOfYears(array $file) : array
    {
        $years = [];

        foreach ($file as $line) {

            $columns = array_map('trim', explode(',', $line));

            $start = date('Y', strtotime($columns[1]));
            $end = !empty($columns[3]) ? date('Y', strtotime($columns[3])) : $start;

            foreach (range($start, $end) as $year) {
                $years[] = $year;
            }

        }
        return $years;
    }

    private function generateCountsForYearsGrouped($years) : array
    {
        $years = array_count_values($years);

        natsort($years);

        return $years;
    }

    private function getMostCommonYears($years) : array
    {
        $years_grouped = [];

        foreach ($years as $year => $count) {
            $years_grouped[$count][] = $year;
        }

        $majority = end($years_grouped);

        sort($majority);

        return $majority;
    }
}