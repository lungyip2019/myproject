define([
    'jquery'
], function($){

    $.widget('Venice_Form.form', {

        _copyForms: function($form1, $form2) {
            $('div.form-input', $form2).each(function (e) {
                var value = $(':input[name=' + $(this).data("name") + ']', $form1).val();
                $(this).html(value);
             });
        },

        _next: function() {
            var self = this;
            $('#next').on('click', function (e) {
                e.preventDefault();
                if (!self._checkAll()) {
                    self._copyForms($('#input_form'), $('#show_detail'));
                    $('#input_form').hide();
                    $('#show_detail').show();
                }
            })
        },

        _submit: function() {

        },

        _checkAll: function () {
            var mistake = false;
            var self =this;
            $(':input[name]', $('#input_form')).each(function () {
                var value = $(this).val();
                var regex = $(this).data('pattern');
                var errorMessage = $(this).data('message');
                if (!self._validation(value, regex)) {
                    $(this).parents('li').children('.errorMessageBox').html(errorMessage);
                    mistake = true;
                }
                if ($.trim(value) === "") {
                    $(this).parents('li').children('.errorMessageBox').html("This is a required field.");
                    mistake = true;
                }
            });
            return mistake;
        },
        //

        _validation: function (value, regexString) {
            var regExp = new RegExp(regexString);
            return regExp.test(value);
        },

        _create: function() {// special method of jQuery UI Widgets
            var self = this;
            $(':input[name]', $('#input_form')).each(function () {
                var errorMsgElement = document.createElement('div');
                errorMsgElement.className = "errorMessageBox";
                $(this).parents('li').append(errorMsgElement);

                $(this).keydown(function () {

                    var value = $(this).val();

                    var regex = $(this).data('pattern');

                    var errorMessage = $(this).data('message');

                    if (!self._validation(value, regex)) {
                        $(errorMsgElement).html(errorMessage);
                    } else {
                        $(errorMsgElement).html('');
                    }
                });
            });
            this._next();

            $('#submit').on('click', function () {
                $('#input_form').submit();
            });
        }
    });

    return $.Venice_Form.form;
});