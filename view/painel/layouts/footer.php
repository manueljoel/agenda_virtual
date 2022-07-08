<!--<footer class="footer mt-auto text-white">
    <div class="rodape py-4">
        <div class="container-fluid">
            <span class=" m-4 text">@Agenda-virtual | Todos os direitos para-se.</span>
        </div>
    </div>
</footer>-->

<script src="/../agenda_virtual/assets/js/bootstrap.bundle.min.js"></script>
<script src="/../agenda_virtual/assets/js/jquery-3.5.1.js"></script>
<script src="/../agenda_virtual/assets/js/jquery.dataTables.min.js"></script>
<script src="/../agenda_virtual/assets/js/dataTables.bootstrap5.min.js"></script>
<script src="/../agenda_virtual/assets/js/crud_completo.js"></script>



<script>
    $(document).ready(function() {
        $('#Tabela').DataTable({
            "language": {
                "url": "../../../pt-BR.json"
            }
        });
    });
</script>


</body>

</html>