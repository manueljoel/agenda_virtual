<!--<footer class="footer mt-auto text-white">
    <div class="rodape py-4">
        <div class="container-fluid">
            <span class=" m-4 text">@Agenda-virtual | Todos os direitos para-se.</span>
        </div>
    </div>
</footer>-->

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.5.1.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap5.min.js"></script>
<script src="/js/crud_completo.js"></script>

<script>
$(document).ready(function() {
    $('#Tabela').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
        }
    });
});
</script>
</body>

</html>