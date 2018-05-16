$(function () {

    function initial() {
        rules = {
            name: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            furigana: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            },
            mail_address: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                },
                email: true,
            },
            toiawase_content: {
                required: true,
                normalizer: function (value) {
                    return $.trim(value);
                }
            }
        };
        messages = {};

    }


    initial();
    validateForm('#formSubmit', rules, messages);
});