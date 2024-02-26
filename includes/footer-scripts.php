<?php include("includes/career-form.php"); ?>
<?php include("includes/lead-form.php"); ?>
<!-- library files start =-->
<script src="assets/js/libs.js"></script>
<!-- library files end =-->

<!-- local files start =-->
<script src="assets/js/functions.js?v=<?php echo time(); ?>"></script>
<script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
<!-- local files end =-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

<script src="assets/multi-select/multi-select.js"></script>
<link rel="stylesheet" href="assets/multi-select/multi-select.css">



<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">-->
<!-- SPLIDE SLIDER -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

<script>
  $('.scopeOfWorkSelect').multiselect({
    columns: 1,
    texts: {
      placeholder: '',
      search: 'Search'
    },
    search: true,
    selectAll: false
  });
</script>