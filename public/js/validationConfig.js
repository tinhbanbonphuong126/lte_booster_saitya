/**
 * Created by QUE on 9/1/2017.
 */

function addMethodValidator() {
    jQuery.validator.addMethod(
        "regex_phone",
        function (value, element, regexp) {
            if (regexp.constructor != RegExp)
                regexp = new RegExp(regexp);
            else if (regexp.global)
                regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        }, "正しくありません"
    );

}


$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, "サイズ5MB未満でなければなりません");



function validateForm(formSelector, rules, messages) {

    $(formSelector).validate({
        rules: rules,
        messages: messages,
        // errorClass: "err-msg",

        // errorPlacement: function (error, element) {
        //         error.insertAfter(element);
        // },
        //
        // errorElement: "span",
        invalidHandler: function (form, validator) {
            // $('#btnSubmitForm').removeAttr('disabled'); // Enable submit button when form has errors
            var errors = validator.numberOfInvalids();
            if (errors) {
                validator.errorList[0].element.focus();
            }
        }
    });
}


function validateFormBunjouchi(formSelector, rules, messages) {

    $(formSelector).validate({
        rules: rules,
        messages: messages,
        // errorClass: "err-msg",

        // errorPlacement: function (error, element) {
        //         error.insertAfter(element);
        // },
        //
        // errorElement: "span",
        invalidHandler: function (form, validator) {
            // $('#btnSubmitForm').removeAttr('disabled'); // Enable submit button when form has errors
            var errors = validator.numberOfInvalids();
            if (errors) {
                validator.errorList[0].element.focus();
            }


            $.each($(".boundOutPrice .bound_price .m_loop .m_both input"), function (index, element) {
                console.log(this);
                if ($(this).val().trim() == "") {
                    $(this).css("border", "1px solid red");
                }
            });
        },
        submitHandler: function (form) {

            var count = 0;

            $.each($(".boundOutPrice .bound_price .m_loop .m_both input"),function(index, element) {
                console.log(this);
                if($(this).val().trim() == ""){
                    $(this).css("border", "1px solid red");
                    count++;
                }
            });

            if(count) {
                return false;
            }

            return true;
        }

    });
}

function validateFormAjax(formSelector, rules, messages) {

    $(formSelector).validate({
        rules: rules,
        messages: messages,
        // errorClass: "err-msg",

        // errorPlacement: function (error, element) {
        //         error.insertAfter(element);
        // },
        //
        // errorElement: "span",
        invalidHandler: function (form, validator) {
            // $('#btnSubmitForm').removeAttr('disabled'); // Enable submit button when form has errors
            var errors = validator.numberOfInvalids();
            if (errors) {
                validator.errorList[0].element.focus();
            }
        },
        submitHandler: function (form) {

            $.ajax({
                url: $("#formSubmit").attr("action"),
                type: "POST",
                data: $("#formSubmit").serialize(),
                cache: false,
                success: function(response) {

                    console.log(response);

                    $("#successModal").modal("show");

                    setTimeout(function () {
                        $("#successModal").modal("hide");
                    }, 3000);

                    $.LoadingOverlay("hide");
                }

            });

            $.LoadingOverlay("show");

            return false;
        },

    });
}


/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: JA (Japanese; 日本語)
 */
$.extend($.validator.messages, {
    required: "必須項目です",
    normalizer: "必須項目です",
    email: "メール形式が正しくありません。",
    // url: "有効なURLを入力してください。",
    // date: "有効な日付を入力してください。",
    // dateISO: "有効な日付（ISO）を入力してください。",
    // number: "有効な数字を入力してください。",
    // digits: "数字のみを入力してください。",
    // creditcard: "有効なクレジットカード番号を入力してください。",
    // equalTo: "同じ値をもう一度入力してください。",
    // extension: "有効な拡張子を含む値を入力してください。",
    // maxlength: $.validator.format("{0} 文字以内で入力してください。"),
    // minlength: $.validator.format("{0} 文字以上で入力してください。"),
    // rangelength: $.validator.format("{0} 文字から {1} 文字までの値を入力してください。"),
    // range: $.validator.format("{0} から {1} までの値を入力してください。"),
    // step: $.validator.format("{0} の倍数を入力してください。"),
    // max: $.validator.format("{0} 以下の値を入力してください。"),
    // min: $.validator.format("{0} 以上の値を入力してください。")
});
