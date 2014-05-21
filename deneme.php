<html>
<?php include ('config.php'); ?>

<?php define_jQuery(2); ?> 


<p id="p2">Gizlenecek yazı...</p>
<button id="btn2">Beni Gizle!</button>
<script>
$("#btn2").click(function(){
   $("#p2").toggle(1000);
});
</script><br /><br />

</html>
