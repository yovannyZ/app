<script>
    $(document).ready(function() {
    $.ajax({
        url : "<?=base_url('acceso/get')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('#titulo').text(data.descripcion);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
});
</script>


   