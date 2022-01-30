<?php

$base_text = implode( "\n", [
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

print_assembled_texts( $base_text, $placeholder, $contacts, $assembled_texts );

function permutation_mail_merge( $base_text, $placeholder, $contacts ) {

	$amount_of_placeholders_in_base_text = substr_count( $base_text, $placeholder );
	$amount_of_contacts                  = count( $contacts );

	if ( $amount_of_placeholders_in_base_text != $amount_of_contacts ) {
		// The permutation will work only if the amount of placeholders in the base_text is equal to the amount of contacts
		throw new Exception( "The amount of placeholders in the base_text is different from the amount of contacts" );
	}


	$start_position_of_first_placeholder_of_base_text = strpos( $base_text, $placeholder );
	$length_of_placeholder                            = strlen( $placeholder );
	$assembled_texts                                  = [];

	// Each contact will be inserted in the first free position marked with a placeholder
	foreach ( $contacts as $contact ) {

		$assembled_text = substr_replace( $base_text, $contact, $start_position_of_first_placeholder_of_base_text, $length_of_placeholder );

		// Other free positions in $assembled_text will be filled by other contacts recalling the function recursively
		$other_contacts            = array_diff( $contacts, [ $contact ] );
		$recursive_assembled_texts = permutation_mail_merge( $assembled_text, $placeholder, $other_contacts );
		$assembled_texts           = array_merge( $assembled_texts, $recursive_assembled_texts );

		// Each assembled text will be inserted in the assembled texts array only if all placeholders have been replaced
		$start_position_of_first_placeholder_of_assembled_text = strpos( $assembled_text, $placeholder );
		if ( $start_position_of_first_placeholder_of_assembled_text === false ) {
			$assembled_texts[] = $assembled_text;
		}

	}

	return $assembled_texts;

}

function print_assembled_texts( $base_text, $placeholder, $contacts, $assembled_texts ) {

	print( "<!DOCTYPE html>" );
	print( "<html lang='en'>" );
	print( "<head><title>Permutation Mail Merge</title> <meta charset='UTF-8'></head>" );

	print( "<body>" );

	print( "<h1>Permutation Mail Merge</h1>" );

	print( "<h3>Base Text</h3>" );
	print( "<pre>" . $base_text . "</pre>" );

	print( "<h3>Placeholder</h3>" );
	print( "<pre>" . $placeholder . "</pre>" );

	print( "<h3>Contacts</h3>" );
	print( "<ul>" );
	foreach ( $contacts as $contact ) {
		print( "<li><pre>" . $contact . "</pre></li>" );
	}
	print( "</ul>" );

	print '<h1>Assembled Texts</h1>';
	print( "<ol>" );
	foreach ( $assembled_texts as $assembled_text ) {
		print( "<li><pre>" . $assembled_text . "</pre></li>" );
	}
	print( "</ol>" );

	print( "</body>" );
	print( "</html>" );

}
