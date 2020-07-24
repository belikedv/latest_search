<?php
 

// DB table to use
$table = 'mssales';
 
// Table's primary key
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'id',   'dt' => 0 ),
    array( 'db' => 'Rev Sum Division', 'dt' => 1 ),
    array( 'db' => 'End Customer City',  'dt' => 2 ),
    array( 'db' => 'Product Family',   'dt' => 3 ),
    array( 'db' => 'Part Description', 'dt' => 4,),
    array( 'db' => 'Summary Pricing Level','dt' => 5,),
    array( 'db' => 'Sales Date','dt' => 6,),
    array( 'db' => 'Reseller Organization Name',  'dt' => 7 ),
    array( 'db' => 'Reported Segment',   'dt' => 8 ),
    array( 'db' => 'Version', 'dt' => 9,),
    array( 'db' => 'Std Rptg Reported Subsegment','dt' => 10,),
    array( 'db' => 'Fiscal Year', 'dt' => 11 ),
    array( 'db' => 'End Customer Orgainztion Name',  'dt' => 12 ),
    array( 'db' => 'End Customer Orgainztion Id',   'dt' => 13 ),
    array( 'db' => 'Credited Region', 'dt' => 14,),
    array( 'db' => 'MS Sales Amount Const $','dt' => 15,),
    array( 'db' => 'MS Sales Quantity', 'dt' => 16 ),
    array( 'db' => 'Enrollment',  'dt' => 17 ),
    array( 'db' => 'Fiscal Quarter',   'dt' => 18 ),

);


 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'project',
    'host' => 'localhost'
);
  
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);