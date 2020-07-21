<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'source2';
 
// Table's primary key
$primaryKey = 'Version';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'Enrollment', 'dt' => 0 ),
    array( 'db' => 'End Customer Top Parent Organization ID',  'dt' => 1 ),
    array( 'db' => 'End Customer Top Parent Organization Name',   'dt' => 2 ),
    array( 'db' => 'End Customer Top Organization ID', 'dt' => 3,),
    array( 'db' => 'End Customer Top Organization Name','dt' => 4,),
    array( 'db' => 'End Cust Purchase Amount Const $','dt' => 5,),
    array( 'db' => 'Program',  'dt' => 6 ),
    array( 'db' => 'Product Family',   'dt' => 7 ),
    array( 'db' => 'Version', 'dt' => 8,),
    array( 'db' => 'End Cust Purchase Licenses','dt' => 9,),
    array( 'db' => 'Purchase Type', 'dt' => 10 ),
    array( 'db' => 'Product Type',  'dt' => 11 ),
    array( 'db' => 'End Customer Customer Segment',   'dt' => 12 ),
    array( 'db' => 'End Customer Customer SubSegment', 'dt' => 13,),
    array( 'db' => 'End Customer City','dt' => 13,),
    array( 'db' => 'End Customer Region', 'dt' => 15 ),
    array( 'db' => 'Fiscal Quarter',  'dt' => 16 ),
    array( 'db' => 'Fiscal Month',   'dt' => 17 ),
    array( 'db' => 'Sales Date',   'dt' => 18 ),
    array( 'db' => 'Product Division', 'dt' => 19,),
    array( 'db' => 'Business Unit','dt' => 20,),
    array( 'db' => 'Product Unit', 'dt' => 21 ),
    array( 'db' => 'Rev Sum Division',  'dt' => 22 ),
    array( 'db' => 'Detail User Type',   'dt' => 23 ),
    array( 'db' => 'Reporting Pricing Level', 'dt' => 24 ),
    array( 'db' => 'Enrollment Contract Type',  'dt' => 25 ),
    array( 'db' => 'Detail Pricing Level',   'dt' => 26 )
);


 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'kpmg',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'vendor/DataTables/server-side/scripts/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);