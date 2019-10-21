$(document).ready(function () {
    $("#search").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "{{ url('autocomplet') }}"
            })
        }
    })
})
