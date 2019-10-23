
</body>
</html>

<script>
    $(document).ready(function () {
        $('#search').keyup(function () {
            var query = $(this).val();
            let countspace = 0;
            countspace = (query == '') ? countspace+1: 0;
            if (countspace < 2)
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('autocomplete.fetch') }}",
                    method: "POST",
                    data: {query: query, _token: _token},
                    success: function (data) {
                        $('#productList').fadeIn();
                        $('#productList').html(data);
                    }
                });
            }
        });

        $(document).on('click', 'li', function () {
            $('#search').val($(this).text());
            $('#productList').fadeOut();
        });
    });
</script>
