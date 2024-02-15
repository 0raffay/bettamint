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