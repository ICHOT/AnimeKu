

<div class="container">
<?php echo $video;?>
</div>

<div class="container">


<button class="btn btn-danger" onclick="goBack()">Kembali</button>






<button type="button" class="btn btn-success">
    Download Episode
</button>

</div>
<br>
<!-- JS -->
<script>
    function goBack() {
        window.history.back();
    }
</script>