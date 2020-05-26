"use strict";

function is_display_type(e) {
    return $(".display-type").css("content") == e || $(".display-type").css("content") == '"' + e + '"'
}

function not_display_type(e) {
    return $(".display-type").css("content") != e && $(".display-type").css("content") != '"' + e + '"'
}

function os_init_sub_menus() {
    var e;
    $(".menu-activated-on-hover").on("mouseenter", "ul.main-menu > li.has-sub-menu", (function () {
        var t = $(this);
        clearTimeout(e), t.closest("ul").addClass("has-active").find("> li").removeClass("active"), t.addClass("active")
    })), $(".menu-activated-on-hover").on("mouseleave", "ul.main-menu > li.has-sub-menu", (function () {
        var t = $(this);
        e = setTimeout((function () {
            t.removeClass("active").closest("ul").removeClass("has-active")
        }), 30)
    })), $(".menu-activated-on-click").on("click", "li.has-sub-menu > a", (function (e) {
        var t = $(this).closest("li");
        return t.hasClass("active") ? t.removeClass("active") : (t.closest("ul").find("li.active").removeClass("active"), t.addClass("active")), !1
    }))
}

$((function () {
    function e(e) {
        $(".chat-content").append('<div class="chat-message self"><div class="chat-message-content-w"><div class="chat-message-content">' + e.val() + '</div></div><div class="chat-message-date">1:23pm</div><div class="chat-message-avatar"><img alt="" src="img/avatar1.jpg"></div></div>'), e.val("");
        var t = $(".chat-content-w");
        t.scrollTop(t[0].scrollHeight)
    }

    var t, o, a, s, n, r;
    ($(".floated-chat-btn, .floated-chat-w .chat-close").on("click", (function () {
        return $(".floated-chat-w").toggleClass("active"), !1
    })), $(".message-input").on("keypress", (function (e) {
        if (13 == e.which) {
            $(".chat-messages").append('<div class="message self"><div class="message-content">' + $(this).val() + "</div></div>"), $(this).val("");
            var t = $(".floated-chat-w .chat-messages");
            return t.scrollTop(t.prop("scrollHeight")), t.perfectScrollbar("update"), !1
        }
    })), $(".floated-chat-w .chat-messages").perfectScrollbar(), $("#fullCalendar").length) && (o = (a = new Date).getDate(), s = a.getMonth(), n = a.getFullYear(), t = $("#fullCalendar").fullCalendar({
        header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay"
        },
        selectable: !0,
        selectHelper: !0,
        select: function e(o, a, s) {
            var n;
            return (n = prompt("Event Title:")) && t.fullCalendar("renderEvent", {
                title: n,
                start: o,
                end: a,
                allDay: s
            }, !0), t.fullCalendar("unselect")
        },
        editable: !0,
        events: [{title: "Long Event", start: new Date(n, s, 3, 12, 0), end: new Date(n, s, 7, 14, 0)}, {
            title: "Lunch",
            start: new Date(n, s, o, 12, 0),
            end: new Date(n, s, o + 2, 14, 0),
            allDay: !1
        }, {title: "Click for Google", start: new Date(n, s, 28), end: new Date(n, s, 29), url: "http://google.com/"}]
    }));
    if ($("#formValidate").length && $("#formValidate").validator(), $("input.single-daterange").daterangepicker({
        singleDatePicker: !0,
        locale: {format: "DD/MM/YYYY"}
    }), $("input.multi-daterange").daterangepicker({
        startDate: "03/28/2017",
        endDate: "04/06/2017"
    }), $("#formValidate").length && $("#formValidate").validator(), $("#dataTable1").length && $("#dataTable1").DataTable({buttons: ["copy", "excel", "pdf"]}), $("#editableTable").length && $("#editableTable").editableTableWidget(), $(".step-trigger-btn").on("click", (function () {
        var e = $(this).attr("href");
        return $('.step-trigger[href="' + e + '"]').click(), !1
    })),
    os_init_sub_menus(), $(".content-panel-toggler, .content-panel-close, .content-panel-open").on("click", (function () {
        $(".all-wrapper").toggleClass("content-panel-active")
    })), $(".more-messages").on("click", (function () {
        return $(this).hide(), $(".older-pack").slideDown(100), $(".aec-full-message-w.show-pack").removeClass("show-pack"), !1
    })), $(".ae-list").perfectScrollbar({wheelPropagation: !0}), $(".ae-list .ae-item").on("click", (function () {
        return $(".ae-item.active").removeClass("active"), $(this).addClass("active"), !1
    })), "undefined" != typeof CKEDITOR && (CKEDITOR.disableAutoInline = !0, $("#ckeditorEmail").length && (CKEDITOR.config.uiColor = "#ffffff", CKEDITOR.config.toolbar = [["Bold", "Italic", "-", "NumberedList", "BulletedList", "-", "Link", "Unlink", "-", "About"]], CKEDITOR.config.height = 110, CKEDITOR.replace("ckeditor1"))), $(".ae-side-menu-toggler").on("click", (function () {
        $(".app-email-w").toggleClass("compact-side-menu")
    })), $(".ae-item").on("click", (function () {
        $(".app-email-w").addClass("forse-show-content")
    })), $(".app-email-w").length && (is_display_type("phone") || is_display_type("tablet")) && $(".app-email-w").addClass("compact-side-menu"), $(".chat-btn a").on("click", (function () {
        return e($(".chat-input input")), !1
    })), $(".chat-input input").on("keypress", (function (t) {
        if (13 == t.which) return e($(this)), !1
    })), $(".pipeline").length) var E = dragula($(".pipeline-body").toArray(), {}).on("drag", (function () {
    })).on("drop", (function (e) {
    })).on("over", (function (e, t) {
        $(t).closest(".pipeline-body").addClass("over")
    })).on("out", (function (e, t, o) {
        var a;
        $(t).closest(".pipeline-body").removeClass("over");
        var s = $(o).closest(".pipeline-body")
    }));
    if ($(".os-dropdown-trigger").on("mouseenter", (function () {
        $(this).addClass("over")
    })), $(".os-dropdown-trigger").on("mouseleave", (function () {
        $(this).removeClass("over")
    })), $('[data-toggle="tooltip"]').tooltip(), $('[data-toggle="popover"]').popover(), $(".tasks-header-toggler").on("click", (function () {
        return $(this).closest(".tasks-section").find(".tasks-list-w").slideToggle(100), !1
    })), $(".todo-sidebar-section-toggle").on("click", (function () {
        return $(this).closest(".todo-sidebar-section").find(".todo-sidebar-section-contents").slideToggle(100), !1
    })), $(".todo-sidebar-section-sub-section-toggler").on("click", (function () {
        return $(this).closest(".todo-sidebar-section-sub-section").find(".todo-sidebar-section-sub-section-content").slideToggle(100), !1
    })), $(".tasks-list").length) var J = dragula($(".tasks-list").toArray(), {
        moves: function e(t, o, a) {
            return a.classList.contains("drag-handle")
        }
    }).on("drag", (function () {
    })).on("drop", (function (e) {
    })).on("over", (function (e, t) {
        $(t).closest(".tasks-list").addClass("over")
    })).on("out", (function (e, t, o) {
        var a;
        $(t).closest(".tasks-list").removeClass("over");
        var s = $(o).closest(".tasks-list")
    }));
    $(".task-btn-done").on("click", (function () {
        return $(this).closest(".draggable-task").toggleClass("complete"), !1
    })), $(".task-btn-star").on("click", (function () {
        return $(this).closest(".draggable-task").toggleClass("favorite"), !1
    })), $(".task-btn-delete").on("click", (function () {
        if (confirm("Are you sure you want to delete this task?")) {
            var e = $(this).closest(".draggable-task");
            e.addClass("pre-removed"), e.append('<a href="#" class="task-btn-undelete">Undo Delete</a>'), r = setTimeout((function () {
                e.slideUp(300, (function () {
                    $(this).remove()
                }))
            }), 5e3)
        }
        return !1
    })), $(".tasks-list").on("click", ".task-btn-undelete", (function () {
        return $(this).closest(".draggable-task").removeClass("pre-removed"), $(this).remove(), void 0 !== r && clearTimeout(r), !1
    })), $(".fs-selector-trigger").on("click", (function () {
        $(this).closest(".fancy-selector-w").toggleClass("opened")
    })), $(".close-ticket-info").on("click", (function () {
        return $(".support-ticket-content-w").addClass("folded-info").removeClass("force-show-folded-info"), !1
    })), $(".show-ticket-info").on("click", (function () {
        return $(".support-ticket-content-w").removeClass("folded-info").addClass("force-show-folded-info"), !1
    })), $(".support-index .support-tickets .support-ticket").on("click", (function () {
        return $(".support-index").addClass("show-ticket-content"), !1
    })), $(".support-index .back-to-index").on("click", (function () {
        return $(".support-index").removeClass("show-ticket-content"), !1
    })), $(".onboarding-modal.show-on-load").modal("show"), $(".onboarding-modal .onboarding-slider-w").length && ($(".onboarding-modal .onboarding-slider-w").slick({
        dots: !0,
        infinite: !1,
        adaptiveHeight: !0,
        slidesToShow: 1,
        slidesToScroll: 1
    }), $(".onboarding-modal").on("shown.bs.modal", (function (e) {
        $(".onboarding-modal .onboarding-slider-w").slick("setPosition")
    }))), $(".floated-colors-btn").on("click", (function () {
        return $("body").hasClass("color-scheme-dark") ? ($(".menu-w").removeClass("color-scheme-dark").addClass("color-scheme-light").removeClass("selected-menu-color-bright").addClass("selected-menu-color-light"), $(this).find(".os-toggler-w").removeClass("on")) : ($(".menu-w, .top-bar").removeClass((function (e, t) {
            return (t.match(/(^|\s)color-scheme-\S+/g) || []).join(" ")
        })), $(".menu-w").removeClass((function (e, t) {
            return (t.match(/(^|\s)color-style-\S+/g) || []).join(" ")
        })), $(".menu-w").addClass("color-scheme-dark").addClass("color-style-transparent").removeClass("selected-menu-color-light").addClass("selected-menu-color-bright"), $(".top-bar").addClass("color-scheme-transparent"), $(this).find(".os-toggler-w").addClass("on")), $("body").toggleClass("color-scheme-dark"), !1
    })), $(".autosuggest-search-activator").on("click", (function () {
        var e = $(this).offset();
        $(this).find('input[type="text"]') && (e = $(this).find('input[type="text"]').offset());
        var t = e.left, o = e.top;
        return $(".search-with-suggestions-w").css("left", t).css("top", o).addClass("over-search-field").fadeIn(300).find(".search-suggest-input").focus(), !1
    })), $(".search-suggest-input").on("keydown", (function (e) {
        27 == e.which && $(".search-with-suggestions-w").fadeOut(), 46 != e.which && 8 != e.which || ($(".search-with-suggestions-w .ssg-item:last-child").show(), $(".search-with-suggestions-w .ssg-items.ssg-items-blocks").show(), $(".ssg-nothing-found").hide()), 27 != e.which && 8 != e.which && 46 != e.which && ($(".search-with-suggestions-w .ssg-item:last-child").hide(), $(".search-with-suggestions-w .ssg-items.ssg-items-blocks").hide(), $(".ssg-nothing-found").show())
    })), $(".close-search-suggestions").on("click", (function () {
        return $(".search-with-suggestions-w").fadeOut(), !1
    })), $(".element-action-fold").on("click", (function () {
        var e = $(this).closest(".element-wrapper");
        e.find(".element-box-tp, .element-box").toggle(0);
        var t = $(this).find("i");
        return e.hasClass("folded") ? (t.removeClass("os-icon-plus-circle").addClass("os-icon-minus-circle"), e.removeClass("folded")) : (t.removeClass("os-icon-minus-circle").addClass("os-icon-plus-circle"), e.addClass("folded")), !1
    }))
}));
