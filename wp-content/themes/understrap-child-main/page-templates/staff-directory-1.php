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

function get_staff_filter_options( $staff, $column ) {
    $values = array_filter( array_unique( array_column( $staff, $column ) ) );
    sort( $values );
    return $values;
}

$staff_companies   = get_staff_filter_options( $staff, 'Company' );
$staff_job_titles  = get_staff_filter_options( $staff, 'Job Title' );
$staff_departments = get_staff_filter_options( $staff, 'Department' );
$staff_locations   = get_staff_filter_options( $staff, 'Location' );
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
        text-tranmsform: uppercase;
        font-size: 1.05rem;
        
    }

    .staff-directory tbody tr {
        /* background-color: lightblue; */
        background-color: rgba(25, 25, 25, 0.95);
    }
    .staff-directory tbody tr:nth-child(even) {
        /* background-color: #191919; */
        background-color: rgba(25, 25, 25, 1);
    }

    .staff-directory tbody tr:hover {
        /* background-color: #f0f4ff; */
        background-color: #FAA501;
        color: black;
    }

    .staff-directory-search {
        width: 100%;
        max-width: 320px;
        margin-bottom: 1rem;
        padding: 0.5rem 0.9rem;
        font-size: 0.95rem;
        color: white;
        background-color: rgba(25, 25, 25, 0.9);
        border: 1px solid #444;
        border-radius: 4px;
    }

    .staff-directory-search::placeholder {
        color: #aaa;
    }

    .staff-directory-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .staff-directory-filters select {
        padding: 10px 20px;
        font-size: 0.95rem;
        color: white;
        background-color: rgba(25, 25, 25, 0.9);
        border: 1px solid #444;
        border-radius: 4px;

        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }
    .staff-directory-filters select:hover {
        background-color: #FAA501;
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
                    <input
                        type="text"
                        id="staff-directory-search"
                        class="staff-directory-search"
                        placeholder="Search staff..."
                        aria-label="Search staff directory"
                    >

                    <div class="staff-directory-filters">
                        <select id="staff-directory-filter-company" aria-label="Filter by company">
                            <option value="">All Companies</option>
                            <?php foreach ( $staff_companies as $company ) : ?>
                                <option value="<?php echo esc_attr( $company ); ?>"><?php echo esc_html( $company ); ?></option>
                            <?php endforeach; ?>
                        </select>

                        <select id="staff-directory-filter-job-title" aria-label="Filter by job title">
                            <option value="">All Job Titles</option>
                            <?php foreach ( $staff_job_titles as $job_title ) : ?>
                                <option value="<?php echo esc_attr( $job_title ); ?>"><?php echo esc_html( $job_title ); ?></option>
                            <?php endforeach; ?>
                        </select>

                        <select id="staff-directory-filter-department" aria-label="Filter by department">
                            <option value="">All Departments</option>
                            <?php foreach ( $staff_departments as $department ) : ?>
                                <option value="<?php echo esc_attr( $department ); ?>"><?php echo esc_html( $department ); ?></option>
                            <?php endforeach; ?>
                        </select>

                        <select id="staff-directory-filter-location" aria-label="Filter by location">
                            <option value="">All Locations</option>
                            <?php foreach ( $staff_locations as $location ) : ?>
                                <option value="<?php echo esc_attr( $location ); ?>"><?php echo esc_html( $location ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- table to be here -->
                    <table
                    id="staff-directory-table"
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
                                    <tr
                                        data-company="<?php echo esc_attr( $person['Company'] ?? '' ); ?>"
                                        data-job-title="<?php echo esc_attr( $person['Job Title'] ?? '' ); ?>"
                                        data-department="<?php echo esc_attr( $person['Department'] ?? '' ); ?>"
                                        data-location="<?php echo esc_attr( $person['Location'] ?? '' ); ?>"
                                    >
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
                            <tr id="staff-directory-no-results" hidden>
                                <td colspan="7">No staff match your search.</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

        <!-- Wrapper end -->

        <script>
        (function () {
            var searchInput = document.getElementById( 'staff-directory-search' );
            var table = document.getElementById( 'staff-directory-table' );
            if ( ! searchInput || ! table ) {
                return;
            }

            var noResultsRow = document.getElementById( 'staff-directory-no-results' );
            var rows = Array.prototype.filter.call(
                table.querySelectorAll( 'tbody tr' ),
                function ( row ) { return row !== noResultsRow; }
            );

            var filterSelects = {
                company: document.getElementById( 'staff-directory-filter-company' ),
                jobTitle: document.getElementById( 'staff-directory-filter-job-title' ),
                department: document.getElementById( 'staff-directory-filter-department' ),
                location: document.getElementById( 'staff-directory-filter-location' )
            };

            function applyFilters() {
                var query = searchInput.value.trim().toLowerCase();
                var company = filterSelects.company ? filterSelects.company.value : '';
                var jobTitle = filterSelects.jobTitle ? filterSelects.jobTitle.value : '';
                var department = filterSelects.department ? filterSelects.department.value : '';
                var location = filterSelects.location ? filterSelects.location.value : '';
                var visibleCount = 0;

                rows.forEach( function ( row ) {
                    var matchesSearch = row.textContent.toLowerCase().indexOf( query ) !== -1;
                    var matchesCompany = ! company || row.dataset.company === company;
                    var matchesJobTitle = ! jobTitle || row.dataset.jobTitle === jobTitle;
                    var matchesDepartment = ! department || row.dataset.department === department;
                    var matchesLocation = ! location || row.dataset.location === location;

                    var matches = matchesSearch && matchesCompany && matchesJobTitle && matchesDepartment && matchesLocation;
                    row.hidden = ! matches;
                    if ( matches ) {
                        visibleCount++;
                    }
                } );

                if ( noResultsRow ) {
                    noResultsRow.hidden = visibleCount !== 0;
                }
            }

            searchInput.addEventListener( 'input', applyFilters );
            Object.keys( filterSelects ).forEach( function ( key ) {
                if ( filterSelects[ key ] ) {
                    filterSelects[ key ].addEventListener( 'change', applyFilters );
                }
            } );
        })();
        </script>

        <div>
        </div>


