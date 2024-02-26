function tabbingByTarget(options, callback) {
    const selector = {
        button: options.buttonAttr ? options.buttonAttr : "rf-tabbing-button",
        target: options.targetAttr ? options.targetAttr : "rf-tabbing-target",
    }
    const buttons = $(`[${selector.button}]`);
    const targets = $(`[${selector.target}]`);
    if (options.initialHideAll) {
        buttons.removeClass("active");
        targets.removeClass("active").hide();
    }
    else if (options.initialHide) {
        buttons.eq(0).addClass("active");
        targets.not(":first-of-type").hide();
        targets.eq(0).addClass("active").show();
    }
    let clickCount = 1;
    buttons.click(function () {
        let wasActive = $(this).hasClass("active");
        if (options.nothingOnActive && wasActive) {
            return;
        }
        if (wasActive & clickCount < 4) {
            clickCount++;
        } else {
            clickCount = 1;
        }

        let thisButton = $(this);
        let target = thisButton.attr(`${selector.button}`);
        let allElementsToShow = targets.filter(`[${selector.target}="${target}"]`);
        if (allElementsToShow.length != 0) {
            buttons.removeClass("active");
            thisButton.addClass("active");
            targets.removeClass("active").hide();
            allElementsToShow.each(function () {
                $(this).show();
            });
            if (callback) {
                callback(thisButton, allElementsToShow, clickCount, target);
            }
        } else {
            thisButton.addClass("disabled")
        }
        thisButton.removeClass("disabled");
    });
}


function validateForm(options, action) {
    let errorClass = options.errorClass || "error";
    let disableClass = options.disableClass || "disabled";

    let isValid = false;
    let form = $(options.form);
    let button = options.button ? $(options.button) : form.find("button[type='submit']");
    let inputs = $(options.inputs);

    let specialFields = options?.specialFields?.selector;

    function checkInputs(_this) {
        let isSpecial = undefined;

        function checkIfSpecialFields(input) {
            isSpecial = input.attr(specialFields) !== undefined;
            let regexString = input.attr(specialFields);

            if (isSpecial) {
                let regex = new RegExp(regexString);
                validateSpecialFields(input, regex);
            }
        }

        function validateSpecialFields(field, regex) {
            let fieldValue = field.val().trim();
            let test = regex.test(fieldValue) && fieldValue !== "";
            if (!test) {
                field.addClass(errorClass);
            } else {
                field.removeClass(errorClass);
            }
        }

        if (_this) {
            checkIfSpecialFields(_this);
            if (!isSpecial) {
                if (_this.val().trim() == "") {
                    _this.addClass(errorClass);
                } else {
                    _this.removeClass(errorClass);
                }
            }
        } else {
            inputs.each(function () {
                checkIfSpecialFields($(this));
                if (!isSpecial) {
                    if ($(this).val().trim() == "") {
                        $(this).addClass(errorClass);
                    } else {
                        $(this).removeClass(errorClass);
                    }
                }
            });
        }
    }

    function checkErrorClass() {
        isValid = inputs
            .toArray()
            .every((input) => !$(input).hasClass(errorClass));

        if (isValid) {
            button.removeClass(disableClass);
        }
    }

    inputs.on("change", function () {
        checkInputs($(this));
        checkErrorClass();
    });

    form.on("submit", function (e) {
        e.preventDefault();
        checkInputs();
        checkErrorClass();

        if (isValid) {
            action();
        } else {
            button.addClass(disableClass);
        }
    });
}

