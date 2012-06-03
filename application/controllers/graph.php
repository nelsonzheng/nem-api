<?php

class Graph extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'directory', 'file', 'date'));
        $this->load->model(array('nem_model'));
    }

    function index() {
        $limit = $this->uri->segment(3);
        $offset = $this->uri->segment(4);
        if ($limit == NULL) {
            $limit = 1488;
        }
        if ($offset == NULL) {
            $offset = 0;
        }
        $data['nsw'] = $this->nem_model->get_nem('pandd', $limit, $offset, 'NSW1');
        $data['qld'] = $this->nem_model->get_nem('pandd', $limit, $offset, 'QLD1');
        $data['sa'] = $this->nem_model->get_nem('pandd', $limit, $offset, 'SA1');
        $data['tas'] = $this->nem_model->get_nem('pandd', $limit, $offset, 'TAS1');
        $data['vic'] = $this->nem_model->get_nem('pandd', $limit, $offset, 'VIC1');
        $this->load->view('graph', $data);
    }

    function pie() {
        $this->load->view('pie');
    }

    function map() {
        $this->load->view('map');
    }

    function convert_svg() {
        $filename = $this->uri->segment(3);
        $filename = 'http://graph.nelsonzheng.com/svg/' . $filename;
        $output = $this->convert($filename);
        print $output;
    }
    
    public static function convert($filename, $to_json = true) {
        // Make sure the file was readable, if not die.
        if (!$contents = file_get_contents($filename))
            die('Could not open the file.');

        // Get array of graphical paths from svg content.
        $graphical_paths = self::get_graphical_paths($contents);

        // Iterates with every path in the svg file.
        $path_iterator = 0;

        // The output array.
        $output = array();

        // Regex to match svg attributes.
        $regex = '/\b(id|fill|d|name|stroke|stroke-width)\b=["|\']([^"\']*)["|\']/';

        // Loops through paths.
        foreach ($graphical_paths as $path) {
            // If matche not found & match doesn't contains a path attr, skip.
            if (!preg_match_all($regex, $path, $matches) OR !in_array('d', $matches[1]))
                continue;

            // Iterates for every attr found.
            $attr_iterator = 0;

            // Loops through attributes and adds to output array.
            foreach ($matches[1] as $match) {
                $output[$path_iterator][$match] = $matches[2][$attr_iterator];
                $attr_iterator++;
            }
            $path_iterator++;
        }
        // return either json or raw array.
        return $to_json ? json_encode($output) : $output;
    }

    /**
     * Extract graphical paths from SVG. These are the paths that are direct 
     * children of the <svg> tag.
     *
     *     PeachSVG::get_graphical_paths($svg_content); 
     *
     * @param   string   <svg>.....</svg>
     * @return  array
     */
    protected static function get_graphical_paths($svg) {
        // Remove all types of line breaks and tabs.
        $contents = str_replace(array("\r", "\r\n", "\n", "\t"), '', $svg);

        // Get all of the paths.
        return explode('<path', $contents);
    }

}