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

	// TODO This function will recursively call itself
	return [];

}

function print_assembled_texts( $base_text, $placeholder, $contacts, $assembled_texts ) {

	// TODO This function will print the input parameters as a proper html page
	print '';

}
