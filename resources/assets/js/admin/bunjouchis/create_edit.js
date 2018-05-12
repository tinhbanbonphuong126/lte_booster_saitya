$(function() {
  // jQuery goes here...

    reset();

    handleAddBlock();
    handleDeleteBlock();



    function reset() {

        $.each($(".prices_bangou"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][bangou]");
        });

        $.each($(".prices_description"), function (index, element) {
            $(element).attr("name", "prices[" + index + "][description]");
        });
    }

    function handleAddBlock() {
        $(".bound_price").on("click", ".ion-md-add", function () {

            var source = $("#price-template").html();
            var template = Handlebars.compile(source);

            var $current = $(this).closest(".m_line");
            $(template({})).insertAfter($current);

            reset();

        });
    }

    function handleDeleteBlock() {
        $(".bound_price").on("click", ".ion-md-remove", function () {
            var $current = $(this).closest(".m_line");

            if($(".m_line").length > 1) {
                $current.remove();

                reset()
            }
        });
    }

});