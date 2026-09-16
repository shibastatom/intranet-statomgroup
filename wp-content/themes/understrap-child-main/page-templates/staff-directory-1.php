<?php
/**
 * Template Name: Staff Directory 1 Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<?php
// SHAREPOINT - START
function get_staff_data() {
    $cached = get_transient( 'staff_directory_data_v3' );
    if ( $cached !== false ) {
        return $cached;
    }

    $csv_url = 'https://intranet.statomgroup.co.uk/wp-content/uploads/2026/09/Staff-Directory-1.csv'; // replace with your actual link

    $response = wp_remote_get( $csv_url, [ 'timeout' => 10 ] );

    if ( is_wp_error( $response ) ) {
        return [];
    }

    $status_code = wp_remote_retrieve_response_code( $response );
    if ( $status_code !== 200 ) {
        return [];
    }

    $body = wp_remote_retrieve_body( $response );

    // Strip the UTF-8 BOM Excel/SharePoint exports add, or it becomes part of the first column name.
    $body = preg_replace( '/^\xEF\xBB\xBF/', '', $body );

    // The export uses CRLF, so split on either ending rather than leaving \r on the last column.
    $rows = array_map( 'str_getcsv', preg_split( '/\r\n|\r|\n/', trim( $body ) ) );

    $header = array_map( 'trim', array_shift( $rows ) );
    $staff  = [];

    foreach ( $rows as $row ) {
        if ( count( $row ) === count( $header ) ) {
            $staff[] = array_combine( $header, $row );
        }
    }

    set_transient( 'staff_directory_data_v3', $staff, MINUTE_IN_SECONDS );
    return $staff;
}
// SHAREPOINT - END
?>

<?php
$staff = get_staff_data();
?>


<style>
    .staff-directory {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
        color: white;
    }

    .staff-directory th,
    .staff-directory td {
        padding: 0.6rem 0.9rem;
        text-align: left;
        /* border: 1px solid #ddd; */
    }

    .staff-directory thead th {
        /* background-color: #f3f3f3; */
        font-weight: 600;
    }

    .staff-directory tbody tr {
        /* background-color: lightblue; */
        background-color: rgba(25, 25, 25, 0.9);
    }
    .staff-directory tbody tr:nth-child(even) {
        /* background-color: #191919; */
        background-color: rgba(25, 25, 25, 1);
    }

    .staff-directory tbody tr:hover {
        background-color: #f0f4ff;
    }
</style>

 <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x dark:text-white dark:bg-gray-900">
            <div class="section py-4 lg:py-6 xl:py-8">
                <div class="container max-w-lg">
                    <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                        <div class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                            <div class="panel">
                                <h1 class="h3 lg:h1">Staff Directory 1 Template</h1>
                                <p>Last updated: <?php echo esc_html( date_i18n( 'j F Y, g:i a', filemtime( __FILE__ ) ) ); ?></p>
                                <p class="fs-6 sm:fs-5 opacity-60">This is a simple staff directory template.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container max-w-lg">
                    <!-- table to be here -->
                    <table 
                    class="staff-directory table align-middle overflow-auto m-0 fs-6 dark:text-white dark:border-gray-700"
                    >
                        <thead class="sticky-top ft-secondary bg-black text-yellow z-1">
                            <tr>
                                <th>Full Name</th>
                                <th>Company</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ( empty( $staff ) ) : ?>
                                <tr><td colspan="7">Staff data is currently unavailable.</td></tr>
                            <?php else : ?>
                                <?php foreach ( $staff as $person ) : ?>
                                    <tr>
                                        <td><?php echo esc_html( $person['Full Name'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Company'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Job Title'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Department'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Email'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Phone Number'] ?? '' ); ?></td>
                                        <td><?php echo esc_html( $person['Location'] ?? '' ); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>

        <!-- Wrapper end -->

        <div>
        </div>


