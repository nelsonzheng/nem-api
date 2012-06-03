<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'directory', 'file', 'date'));
        $this->load->model(array('nem_model'));
    }

    public function index() {
        $this->load->view('upload/upload_form', array('error' => ' '));
    }

    public function upload_supply() {
        $this->load->view('upload/upload_supply_form', array('error' => ' '));
    }

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload/upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('/upload/upload_success', $data);
        }
    }

    function do_upload_supply() {
        $config['upload_path'] = './uploads/supply/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload/upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('/upload/upload_success', $data);
        }
    }

    function explore() {
        $data['filenames'] = get_filenames('uploads');

        $this->load->view('directory', $data);
    }

    public function explore_supply() {
        $data['filenames'] = get_filenames('uploads/supply');

        $this->load->view('supply_directory', $data);
    }

    function view() {
        $filename = $this->uri->segment(3);
        $row = 1;
        if (($handle = fopen("uploads/" . $filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c = 0; $c < $num; $c++) {
                    echo $c . ": ";
                    echo $data[$c] . "<br />\n";
                }
                echo strtotime($data[1]);
                echo br();
                echo date('Y/n/j H:i:s', strtotime($data[1]));
            }
            fclose($handle);
        }
    }

    function view_supply() {
        $filename = $this->uri->segment(3);
        $row = 1;
        if (($handle = fopen("uploads/supply/" . $filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                for ($c = 0; $c < $num; $c++) {
                    echo $c . ": ";
                    echo $data[$c] . "<br />\n";
                }
                echo strtotime($data[1]);
                echo br();
                echo date('Y/n/j H:i:s', strtotime($data[1]));
            }
            fclose($handle);
        }
    }

    function import() {
        $filename = $this->uri->segment(3);
        $this->import_file_batch($filename);
    }

    function import_supply() {
        $filename = $this->uri->segment(3);
        $this->import_supply_file($filename);
    }

    function importall() {
        $file_list = get_filenames('uploads');

        foreach ($file_list as $filename) {
            $this->import_file($filename);
        }
    }

    private function import_file($filename) {
        $row = 1;
        if (($handle = fopen("uploads/" . $filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row > 1) {
                    $entry = array(
                        'region' => $data[0],
                        'settlementdate' => $data[1],
                        'totaldemand' => $data[2],
                        'rrp' => $data[3],
                    );
                    $check = $this->nem_model->check_repeat($entry['settlementdate'], $entry['region']);
                    if ($check == TRUE) {
                        echo "Entry at time ";
                        echo $entry['settlementdate'];
                        echo " already exists.";
                        echo br();
                    } else {
                        $this->nem_model->insert_row($entry);
                    }
                }
                $row++;
            }
            fclose($handle);
        }
    }

    private function import_file_batch($filename) {
        $row = 1;
        $i = 0;
        if (($handle = fopen("uploads/" . $filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                if ($row > 1) {
                    $output[$i] = array(
                        'region' => $data[0],
                        'settlementdate' => $data[1],
                        'totaldemand' => $data[2],
                        'rrp' => $data[3],
                    );
                    $i++;
                }
                $row++;
            }
            fclose($handle);
        }
        $this->nem_model->insert_batch($output);
    }

    private function import_supply_file($filename) {
        $row = 1;
        if (($handle = fopen("uploads/supply/" . $filename, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 255, ",")) !== FALSE) {
                $num = count($data);
                if ($row > 1) {
                    $entry = array(
                        'settlementdate' => $data[0],
                        'supply' => $data[1],
                        'type' => $data[2],
                        'region' => $data[3],
                        'name' => $data[4]
                    );
                    $check = $this->nem_model->check_repeat($entry['settlementdate'], $entry['region']);
                    if ($check == TRUE) {
                        echo "Entry at time ";
                        echo $entry['settlementdate'];
                        echo " already exists.";
                        echo br();
                    } else {
                        $this->nem_model->insert_supply_row($entry);
                    }
                }
                $row++;
            }
            fclose($handle);
        }
    }

    function delete() {
        $filename = $this->uri->segment(3);
        unlink('uploads/' . $filename);
    }

}

?>