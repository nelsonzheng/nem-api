<?php

class Api extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'directory', 'file', 'date'));
        $this->load->model(array('nem_model'));
    }

    public function index() {
        $this->load->view('api/documentation');
    }

    public function demand() {
        $region = $this->uri->segment(3);
        $period = $this->uri->segment(4);
        $year = $this->uri->segment(5);

        if ($year != NULL) {
            $offset = ($year - 2009) * 8760 * 2;
        } else {
            $offset = 2 * 8760 * 2;
        }

        $region = $region . "1";
        $limit = 8760 * 2; // 2 times 8760 hours per year.
        $data = $this->api_model->get_demand($region, $limit, $offset);

        $months = array(
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12"
        );

        if ($period == NULL) {
            
        } elseif ($period == 'yearly') {
            echo $this->average_calc($data);
            $start_date = $this->uri->segment(6);
            $end_date = $this->uri->segment(7);
        } elseif ($period == 'monthly') {
            $year = $this->uri->segment(5);

            if ($year == NULL) {
                $year = date('Y');
            }
            $output = array();
            $i = 0;
            foreach ($months as $month) {
                $days = days_in_month($month, $year);
                $demands = array();
                foreach ($data as $datapoint) {
                    if (date('m', strtotime($datapoint->settlementdate)) == $month) {
                        array_push($demands, $datapoint->totaldemand);
                    }
                }
                $sum = 0;
                $average = array_sum($demands) / count($demands);
                $output[$i] = array('x' => $month, 'y' => $average);
                $i++;
            }
            echo json_encode($output);
        } elseif ($period == 'weekly') {
            
        } elseif ($period == 'daily') {
            
        } elseif ($period == 'hourly') {
            
        }

        //$data = json_encode($data);
    }

    public function consumption() {
        $region = $this->uri->segment(3);
        $period = $this->uri->segment(4);

        $limit = 8760 * 2; // 2 times 8760 hours per year.

        if ($region == "nem") {
            $regions = array(
                array("state" => "act1", "id" => "01"),
                array("state" => "nsw1", "id" => "02"),
                array("state" => "nt1", "id" => "03"),
                array("state" => "qld1", "id" => "04"),
                array("state" => "sa1", "id" => "05"),
                array("state" => "tas1", "id" => "06"),
                array("state" => "vic1", "id" => "07"),
                array("state" => "wa1", "id" => "08"));

            $output = array();
            foreach ($regions as $region) {
                $data = $this->api_model->get_demand($region["state"], $limit, 0);

                $consumption = 0;
                foreach ($data as $point) {
                    $consumption += $point->totaldemand * 0.5;
                }
                $output[$region["id"]] = $consumption;
            }
            echo json_encode($output);
        } else {
            $region = $region . "1";
        }
    }

    public function supply() {
        
    }

    public function request() {
        
    }

    public function rrp() {
        $region = $this->uri->segment(3);
        $period = $this->uri->segment(4);
        $year = $this->uri->segment(5);

        if ($year != NULL) {
            $offset = ($year - 2009) * 8760 * 2;
        } else {
            $offset = 2 * 8760 * 2;
        }
        $region = $region . "1";
        $limit = 8760 * 2; // 2 times 8760 hours per year.
        $data = $this->api_model->get_rrp($region, $limit, $offset);

        $months = array(
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12"
        );

        if ($period == NULL) {
            
        } elseif ($period == 'yearly') {
            echo $this->average_calc($data);
            $start_date = $this->uri->segment(6);
            $end_date = $this->uri->segment(7);
        } elseif ($period == 'monthly') {
            $year = $this->uri->segment(5);

            if ($year == NULL) {
                $year = date('Y');
            }
            $output = array();
            $i = 0;
            foreach ($months as $month) {
                $days = days_in_month($month, $year);
                $demands = array();
                foreach ($data as $datapoint) {
                    if (date('m', strtotime($datapoint->settlementdate)) == $month) {
                        array_push($demands, $datapoint->rrp);
                    }
                }
                $sum = 0;
                $average = array_sum($demands) / count($demands);
                $output[$i] = array('x' => $month, 'y' => $average);
                $i++;
            }
            echo json_encode($output);
        } elseif ($period == 'weekly') {
            
        }
    }

    private function average_calc($data) {
        $sum = 0;
        foreach ($data as $point) {
            $sum += $point->rrp;
        }
        $count = count($data);
        $average = $sum / $count;
        return $average;
    }

}