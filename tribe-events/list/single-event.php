<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<!-- Event Title -->
				<?php do_action( 'tribe_events_before_the_event_title' ) ?>
				<h2 class="tribe-events-list-event-title">
					<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
						<?php the_title() ?>
					</a>
				</h2>
				<?php do_action( 'tribe_events_after_the_event_title' ) ?>
				
				<div class="tribe-event-schedule-details">
							<?php echo tribe_events_event_schedule_details() ?>
						</div>
				
				<!-- Event Meta -->
				<?php do_action( 'tribe_events_before_the_meta' ) ?>
				<div class="tribe-events-event-meta">
					<div class="author <?php echo esc_attr( $has_venue_address ); ?>">
				
						<!-- Schedule & Recurrence Details -->
						
				
						<?php if ( $venue_details ) : ?>
							<!-- Venue Display Info -->
							<div class="tribe-events-venue-details"><br>
								
								
							<?php
								$address_delimiter = empty( $venue_address ) ? ' ' : ', ';
				
								// These details are already escaped in various ways earlier in the process.
								echo implode( $address_delimiter, $venue_details );
								?>
							</div>
					</div>
				</div>
		</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">

			<?php if ( tribe_get_cost() ) : ?>
	<div class="tribe-events-event-cost">
		<span class="ticket-cost">Entree: <?php echo tribe_get_cost( null, true ); ?> </span>
		<?php
		/**
		 * Runs after cost is displayed in list style views
		 *
		 * @since 4.5
		 */
		do_action( 'tribe_events_inside_cost' )
		?>
	</div>
<?php endif; ?>	</div>
<div class="col-md-6">

<?php
				if ( tribe_show_google_map_link() ) {
					echo tribe_get_map_link_html();
				}
			?>
			<?php endif; ?>
			</div> <!-- .tribe-events-venue-details -->
				</div>
			</div>
	</div>
</div><!-- .tribe-events-event-meta -->

<!-- Event Cost -->

<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ); ?>

<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ); ?>

<?php
do_action( 'tribe_events_after_the_content' );