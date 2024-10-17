<script>

const text_entrada = document.getElementById('text_entrada');

text_entrada.addEventListener('keypress', function(event) {

        if (!/[0-9]/.test(event.key)) {
            event.preventDefault(); // Impede a entrada
        }
    });


</script>