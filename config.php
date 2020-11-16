<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-3-233-236-188.compute-1.amazonaws.com');
$CFG->dbname    = getenv('d9bmikti5oh7r0');
$CFG->dbuser    = getenv('vubugeunhoovpp');
$CFG->dbpass    = getenv('2b9b041c22f0ac098f5fe725e66bedac2a16998aba5a0c98f21b12842e87ef24');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://ska-assist.herokuapp.com/');
$CFG->dataroot  = getenv('try /tmp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
