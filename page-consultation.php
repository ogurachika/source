<?php
include(locate_template('parts/contact-form.php'));

$partyspace_id = isset($_GET['_partyspace']) ? $_GET['_partyspace'] : null;
if($partyspace_id){
	$partyspace = get_post($partyspace_id);
	if($partyspace->post_type == Party2::PARTYSPACE){
?>
<script type="text/javascript">
$(function(){
	var name = <?php echo json_encode($partyspace->post_title)?>;
	if($('[name="f_partyspace"]').text() == ''){
		$('[name="f_partyspace"]').text(name);
	}
});
</script>
<?php
	}
}