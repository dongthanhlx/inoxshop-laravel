    <footer class="col border-top text-center pt-3">
        <strong>Bản quyền thuốc về Công Ty TNHH MTV sản xuất và thương mại Hải Oanh</strong>
        <address>
            <ul class="list-unstyled">
                <li><strong>Địa chỉ:</strong> Khu 3 - Tứ Trưng - Vĩnh Tường - Vĩnh Phúc</li>
                <li><strong>Điện thoại:</strong> 02113 839 186. Fax: 02113 780 712</li>
                <li>
                    <strong>Email:</strong>
                    <a href="mailto:Inoxhaioanh@gmail.com">
                        Inoxhaioanh@gmail.com
                    </a>
                </li>
            </ul>
        </address>
    </footer>

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
