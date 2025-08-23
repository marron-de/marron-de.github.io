
$(document).ready(function () {
  const chatWrap = $(".clvr_chat");
  const chatBtn = $(".clvr_btn");

  chatBtn.on("click", function (e) {
    e.stopPropagation();
    chatWrap.toggleClass("show");
  });

  $(document).on("click", function (e) {
    if (!chatWrap.is(e.target) && chatWrap.has(e.target).length === 0) {
      chatWrap.removeClass("show");
    }
  });
});
