<?php
$name = "Nathan"; 
?>

<h1>Passing PHP variable to JavaScript</h1>
<h2 id="result"></h2>
<script>
    const data = "<?php echo $name; ?>";
    const result = document.getElementById("result");
    result.innerText = data;
</script>