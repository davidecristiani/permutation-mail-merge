<?php

$base_text = implode( '\n', [
	"Dear manager,",
	"This a possible combination of the new work team.",
	"The team leader will be [contact_placeholder].",
	"Engineering will be carried out by [contact_placeholder].",
	"The product manager is a role for [contact_placeholder].",
	"The online marketer will be [contact_placeholder].",
	"Our account manager that will keep in touch with customer will be [contact_placeholder].",
] );

$placeholder = "[contact_placeholder]";

$contacts = [ "Yu", "John", "Tony", "Maria", "Rakshith" ];

$assembled_texts = permutation_mail_merge( $base_text, $placeholder, $contacts );

function permutation_mail_merge( $base_text, $placeholder, $contacts ) {

	$amount_of_placeholders_in_base_text = substr_count( $base_text, $placeholder );
	$amount_of_contacts                  = count( $contacts );

	if ( $amount_of_placeholders_in_base_text != $amount_of_contacts ) {
		// The permutation will work only if the amount of placeholders in the base_text is equal to the amount of contacts
		throw new Exception( "The amount of placeholders in the base_text is different from the amount of contacts" );
	}


	$start_position_of_first_placeholder_of_base_text = strpos( $base_text, $placeholder );
	$length_of_placeholder = strlen( $placeholder );
	$assembled_texts  = [];

	// Each contact will be inserted in the first free position marked with a placeholder
	foreach ( $contacts as $contact ) {

		$assembled_text            = substr_replace( $base_text, $contact, $start_position_of_first_placeholder_of_base_text, $length_of_placeholder );

		// TODO This function will recursively call itself

	}

	return [];

}

function print_assembled_texts( $base_text, $placeholder, $contacts, $assembled_texts ) {

	// TODO This function will print the input parameters as a proper html page
	print '';

}
