function goBack() {
    window.history.back();
}
$(document).ready(function () {

    $('#rootwizard').bootstrapWizard();

    /* blur on modal open, unblur on close */
    $('.modal').on('show.bs.modal', function () {
        $('.wrapper').addClass('blur');
    });

    $('.modal').on('hide.bs.modal', function () {
        $('.wrapper').removeClass('blur');
    });

    $('#loading').fadeOut(100, function () {
        $('.page').fadeIn(200);
    });

    $(document).on('click', '.form-submit-action', function (e) {
        e.preventDefault();
        //Grab the selector to identify related elements
        var selector = $(this).data('selector');
        //Find the form using the selector
        var form = $('.' + selector + '.form');
        var validate = $(this).data('validate');
        submitForm(form, null, $(this), validate);
    });

    $(document).on('click', '.content-load-action', function (e) {
        e.preventDefault();
        //Init data
        var data = [];
        var btn = $(this);
        //For each data attribute on the control
        $.each($(this).data(), function (i, v) {
            //Strip unsavoury characters from data attributes and convert - to _
            i = i.replace(/(?:^|\.?)([A-Z])/g, function (x, y) {
                return "_" + y.toLowerCase()
            }).replace(/^_/, "");
            //Create an object using the key val pairs
            obj = {name: i, value: v};
            //Add this object to the data array
            data.push(obj);
        });
        $(btn).attr('disabled', true);

        let contentElement = $('#' + $(this).data('content'));
        addLoader(contentElement);
        ajaxRequest(data, $(contentElement));
        $(btn).removeAttr('disabled');
    });

    $(document).on('change', '.form-submit-onchange', function (e) {
        e.preventDefault();
        //Grab the selector to identify related elements
        var selector = $(this).data('selector');
        //Find the form using the selector
        var form = $('.' + selector + '.form');
        var validate = $(this).data('validate');
        submitForm(form, null, $(this), validate);
    });

    triggerElements();

    $(document).on('click', '.file-upload-submit', function (e) {
        e.preventDefault();
        var data = new FormData();
        //Grab the selector to identify related elements
        let selector = $(this).data('selector');
        //Find the form using the selector
        let form = $('.' + selector + '.form');
        let control = $(this);

        $('.' + selector + '.form *').filter(':input').each(function () {
            //Removes the disabled attribute to allow disabled values to be posted
            if (control.attr('disabled')) {
                control.removeAttr('disabled');
            }
            if (control.hasClass('uk-form-danger')) {
                control.removeAttr('data-uk-tooltip');
                control.removeAttr('title');
                control.removeClass('uk-form-danger');
            }
        });
        //Files
        $.each($(form).find('input[type=file]'), function(i, file) {
            data.append('file' + i, $(file).prop('files')[0]);
        });
        //Data Attributes
        $.each($(control).data(), function (i, v) {
            //Strip unsavoury characters from data attributes and convert - to _
            i = i.replace(/(?:^|\.?)([A-Z])/g, function (x, y) {
                return "_" + y.toLowerCase()
            }).replace(/^_/, "");
            data.append(i,v)
        });
        //Serialize the form data
        serialized = form.serializeArray();
        serialized.forEach(function (formElement) {
            data.append(formElement.name, formElement.value);
        });
        let contentElement = $('#' + $(this).data('content'));
        //If no control has been passed through loop the data anc check for the name "content"
        if (contentElement.length === 0) {
            $.grep(data, function (element, index) {
                if (element.name === 'content') {
                    contentElement = $('#' + element.value);
                }
            });
        }
        addLoader(contentElement);
        $.ajax({
            url: '/ajax',
            method: 'POST',
            dataType: 'json',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (resp) {
                switch (resp.status) {
                    case 1:
                        if (contentElement != null) {
                            contentElement.fadeOut(300, function () {
                                contentElement.html(resp.html);
                                contentElement.fadeIn(700);
                            });
                        }
                        valid = true;
                        break;
                    case 2:
                        if (contentElement != null) {
                            contentElement.html(content);
                        }
                        //Errors
                        if (resp.errors) {
                            displayFormErrors(form, resp.errors);
                        }
                        break;
                }
            }
        });
    });

    $('#minimizeSidebar').on('click', function () {
        setTimeout(function () {
            if ($('body').hasClass('sidebar-mini')) {
                createCookie('sideBarMini', true, 1000);
            } else {
                eraseCookie('sideBarMini');
            }
        }, 1000);
    })
});

function submitForm(form, callBack = null, control = null, validate = true) {
    //Serialize the form data
    var data = form.serializeIncludeDisabled();

    // $.each($(form).find('.selectpicker'), function (key, value) {
    //     data.push({name: key, value:$(value).children('option:selected')});
    // })

    //All Data attr from button
    let errors = validateInputs(data, form);

    if (!errors) {
        if (control !== null) {
            $.each($(control).data(), function (i, v) {
                i = i.replace(/(?:^|\.?)([A-Z])/g, function (x, y) {
                    return "_" + y.toLowerCase()
                }).replace(/^_/, "");
                obj = {name: i, value: v};
                data.push(obj);
            });
        }
        //All Form Data attr
        $.each($(form).data(), function (i, v) {
            i = i.replace(/(?:^|\.?)([A-Z])/g, function (x, y) {
                return "_" + y.toLowerCase()
            }).replace(/^_/, "");
            obj = {name: i, value: v};
            data.push(obj);
        });
        data.push({name: 'form-submit', value: true});

        let contentElement = $('#' + $(control).data('content'));
        addLoader(contentElement);

        ajaxRequest(data, $(contentElement), form);
    }
}

function validateInputs(data, form) {
    let errors = false;
    let repeatValue = '';
    $(data).each(function (a) {
        let input = form.find('[name="' + data[a].name + '"]');
        if ($(input).attr('required') && $(input).val() == '' && !$(input).hasClass('hidden')) {
            addErrorMessage(input, 'Please input a value');
            errors = true;
        } else {
            removeFormError(form, input);
        }
        if (typeof $(input).attr('repeattype') !== 'undefined') {
            if (repeatValue === '') {
                repeatValue = data[a].value;
            } else if (repeatValue !== data[a].value) {
                addErrorMessage(input, 'Repeated values do not match');
                errors = true;
            }
        }
    });
    return errors
}


function addErrorMessage(input, message) {

    //Remover the old message
    removeErrorMessage(input);

    if ($(input).type !== 'hidden' && !$(input).hasClass('hidden')) {
        $(input).parent().find('.material-icons').remove();
        $(input).parent().append('<span class="material-icons form-control-feedback" rel="tooltip" title="' + message + '">clear</span>')
        $(input).parent().addClass('has-danger');
        if (message) {
            $(input).parent().append(
                '<label id="' + input.attr('name') + '-error" class="error" for="' + input.attr('name') + '">' + message + '</label>'
            )
        }

    }
}


function removeFormError(form, input) {
    if ($(form).find(input).attr('type') !== 'hidden') {
        removeErrorMessage($(form).find(input))
    }
}

function removeErrorMessage(input) {
    $(input).removeClass('parsley-error');
    $(input).parent().find('.material-icons').remove();
    $(input).parent().removeClass('has-danger');
    $(input).parent().find('.error').remove();
}

function ajaxRequest(data, contentElement, form = null) {
    $.ajax({
        url: '/ajax',
        type: 'post',
        data: data,
        dataType: "json",
        success: function (resp) {
            switch (resp.status) {
                case 1:
                    contentElement.fadeOut(300, function () {
                        contentElement.html(resp.html);
                        contentElement.fadeIn(700);
                    });
                    break;
                case 2:
                    //Failed Display Errors.
                    var errors = resp.errors;
                    for (var key in errors) {
                        var input = form.find('input[name*="[' + key + ']"]');
                        if (errors.hasOwnProperty(key)) {
                            for (var value in errors[key]) {
                                if (errors[key].hasOwnProperty(value)) {
                                    addErrorMessage(form, input, errors[key][value]);
                                }
                            }
                        }
                    }
                    triggerElements();
                    break;
                case 3:
                    //Redirect
                    window.location = resp.redirect;
                    break;
            }
        }
    });
}

function ajaxGetData(control, callBack, data = []) {
    if (control) {
        $.each($(control).data(), function (i, v) {
            //Strip unsavoury characters from data attributes and convert - to _
            i = i.replace(/(?:^|\.?)([A-Z])/g, function (x, y) {
                return "_" + y.toLowerCase()
            }).replace(/^_/, "");
            //Create an object using the key val pairs
            obj = {name: i, value: v};
            //Add this object to the data array
            data.push(obj);
        });
        //Other Triggers
        if (control.is('select')) {
            data.push({name: 'select', value: $(control).children("option:selected").val()});
        }
        $(control).addClass('disabled');
    }
    $.ajax({
        url: '/ajax',
        type: 'post',
        data: data,
        dataType: "json",
        async: true,
        success: function (resp) {
            callBack(resp, control);
            triggerElements();
            if (control) {
                $(control).removeClass('disabled');
            }
        }
    });
}

$(document).ajaxComplete(function () {
    window.setTimeout(function () {
        triggerElements();
    }, 701);
});

$.fn.serializeIncludeDisabled = function () {
    let disabled = this.find(":input:disabled").removeAttr("disabled");
    let serialized = this.serializeArray();
    disabled.attr("disabled", "disabled");
    return serialized;
};

function triggerElements() {

    $('[data-toggle="tooltip"]').tooltip();
    $('.selectpicker:not(.hidden)').selectpicker('refresh');
}

function addLoader(contentElement) {
    if ($(contentElement).parent().hasClass('modal')) {
        $(contentElement).html('<div class="modal-content">' +
            '<div class="modal-body">' +
            '<div class="row justify-content-center mainColor"><i class="fa fa-3x fa-spinner loadingIcon"></i></div>' +
            '</div></div>');
    } else {
        $(contentElement).html('<div class="row justify-content-center mainColor"><i class="fa fa-3x fa-spinner loadingIcon"></i></div>');
    }
}

function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}


$(document).on('click', '.goUrl', function () {
    //Can't use location.reload as it can subit the post data again.
    let url = $(this).data('href');
    if (event.ctrlKey || event.which === 2 || $(this).data('tab')) {
        window.open(url, '_blank');
    } else {
        window.location.href = url;
    }
});

$(document).on('click', '.customNav ul li', function () {
    $.each($(this).parent().children(), function (key, value) {
        $(this).removeClass('active');
    });
    $(this).addClass('active');
});

$(document).ready(function () {
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };


    if (getUrlParameter('click')) {
        $('#' + getUrlParameter('click')).click();
    }
});

function reloadPage(element, getParms) {
    let location = window.location.href;

    var n = location.indexOf('?');
    location = location.substring(0, n != -1 ? n : location.length);

    location += '?'

    $.each(getParms, function (key, value) {
        location += key + '=' + value;
    });
    window.location.href = location;
}


// Custom Navigations
$(document).on('click', '.navigation li', function () {
    //Hide all other Tab Content
    let content = $($(this).data('href'));

    let contentParent = $(content).parent();

    //Hide all divs within the parent
    $.each($(contentParent).children(), function (key, value) {
        $(value).addClass('hidden');
    });

    //Remove Active class from every li
    $.each($(this).parent().children(), function (key, value) {
        $(value).removeClass('active');
    });

    //Add Active to clicked LI
    $(this).addClass('active');
    //Display li content
    $(content).removeClass('hidden');

});
