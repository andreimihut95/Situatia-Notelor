jQuery(document).ready(function($){
	$('#nume').autocomplete({source:'sugest_zip.php', minLength:1});
});
