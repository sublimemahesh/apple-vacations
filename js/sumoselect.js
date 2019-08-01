/*!
 * jquery.sumoselect - v3.0.3
 * http://hemantnegi.github.io/jquery.sumoselect
 */

!function (e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function (e) {
    "namespace sumo";
    e.fn.SumoSelect = function (t) {
        var l = e.extend({
            placeholder: "Select Here",
            csvDispCount: 3,
            captionFormat: "{0} Selected",
            captionFormatAllSelected: "{0} all selected!",
            floatWidth: 400,
            forceCustomRendering: !1,
            nativeOnDevice: ["Android", "BlackBerry", "iPhone", "iPad", "iPod", "Opera Mini", "IEMobile", "Silk"],
            outputAsCSV: !1,
            csvSepChar: ",",
            okCancelInMulti: !1,
            isClickAwayOk: !1,
            triggerChangeCombined: !0,
            selectAll: !1,
            search: !1,
            searchText: "Search...",
            noMatch: 'No matches for "{0}"',
            prefix: "",
            locale: ["OK", "Cancel", "Select All"],
            up: !1,
            showTitle: !0
        }, t),
                s = this.each(function () {
                    var t = this;
                    !this.sumo && e(this).is("select") && (this.sumo = {
                        E: e(t),
                        is_multi: e(t).attr("multiple"),
                        select: "",
                        caption: "",
                        placeholder: "",
                        optDiv: "",
                        CaptionCont: "",
                        ul: "",
                        is_floating: !1,
                        is_opened: !1,
                        mob: !1,
                        Pstate: [],
                        createElems: function () {
                            var t = this;
                            return t.E.wrap('<div class="SumoSelect" tabindex="0" role="button" aria-expanded="false">'), t.select = t.E.parent(), t.caption = e("<span>"), t.CaptionCont = e('<p class="CaptionCont SelectBox" ><label><i></i></label></p>').attr("style", t.E.attr("style")).prepend(t.caption), t.select.append(t.CaptionCont), t.is_multi || (l.okCancelInMulti = !1), t.E.attr("disabled") && t.select.addClass("disabled").removeAttr("tabindex"), l.outputAsCSV && t.is_multi && t.E.attr("name") && (t.select.append(e('<input class="HEMANT123" type="hidden" />').attr("name", t.E.attr("name")).val(t.getSelStr())), t.E.removeAttr("name")), t.isMobile() && !l.forceCustomRendering ? void t.setNativeMobile() : (t.E.attr("name") && t.select.addClass("sumo_" + t.E.attr("name").replace(/\[\]/, "")), t.E.addClass("SumoUnder").attr("tabindex", "-1"), t.optDiv = e('<div class="optWrapper ' + (l.up ? "up" : "") + '">'), t.floatingList(), t.ul = e('<ul class="options">'), t.optDiv.append(t.ul), l.selectAll && t.is_multi && t.SelAll(), l.search && t.Search(), t.ul.append(t.prepItems(t.E.children())), t.is_multi && t.multiSelelect(), t.select.append(t.optDiv), t.basicEvents(), void t.selAllState())
                        },
                        prepItems: function (t, l) {
                            var i = [],
                                    s = this;
                            return e(t).each(function (t, n) {
                                n = e(n), i.push(n.is("optgroup") ? e('<li class="group ' + (n[0].disabled ? "disabled" : "") + '"><label>' + n.attr("label") + "</label><ul></ul></li>").find("ul").append(s.prepItems(n.children(), n[0].disabled)).end() : s.createLi(n, l))
                            }), i
                        },
                        createLi: function (t, l) {
                            var i = this;
                            t.attr("value") || t.attr("value", t.val());
                            var s = e('<li class="opt"><label>' + t.text() + "</label></li>");
                            return s.data("opt", t), t.data("li", s), i.is_multi && s.prepend("<span><i></i></span>"), (t[0].disabled || l) && (s = s.addClass("disabled")), i.onOptClick(s), t[0].selected && s.addClass("selected"), t.attr("class") && s.addClass(t.attr("class")), t.attr("title") && s.attr("title", t.attr("title")), s
                        },
                        getSelStr: function () {
                            return sopt = [], this.E.find("option:selected").each(function () {
                                sopt.push(e(this).val())
                            }), sopt.join(l.csvSepChar)
                        },
                        multiSelelect: function () {
                            var t = this;
                            t.optDiv.addClass("multiple"), t.okbtn = e('<p tabindex="0" class="btnOk">' + l.locale[0] + "</p>").click(function () {
                                t._okbtn(), t.hideOpts()
                            }), t.cancelBtn = e('<p tabindex="0" class="btnCancel">' + l.locale[1] + "</p>").click(function () {
                                t._cnbtn(), t.hideOpts()
                            });
                            var i = t.okbtn.add(t.cancelBtn);
                            t.optDiv.append(e('<div class="MultiControls">').append(i)), i.on("keydown.sumo", function (l) {
                                var i = e(this);
                                switch (l.which) {
                                    case 32:
                                    case 13:
                                        i.trigger("click");
                                        break;
                                    case 9:
                                        if (i.hasClass("btnOk"))
                                            return;
                                    case 27:
                                        return t._cnbtn(), void t.hideOpts()
                                }
                                l.stopPropagation(), l.preventDefault()
                            })
                        },
                        _okbtn: function () {
                            var e = this,
                                    t = 0;
                            l.triggerChangeCombined && (e.E.find("option:selected").length != e.Pstate.length ? t = 1 : e.E.find("option").each(function (l, i) {
                                i.selected && e.Pstate.indexOf(l) < 0 && (t = 1)
                            }), t && (e.callChange(), e.setText()))
                        },
                        _cnbtn: function () {
                            var e = this;
                            e.E.find("option:selected").each(function () {
                                this.selected = !1
                            }), e.optDiv.find("li.selected").removeClass("selected");
                            for (var t = 0; t < e.Pstate.length; t++)
                                e.E.find("option")[e.Pstate[t]].selected = !0, e.ul.find("li.opt").eq(e.Pstate[t]).addClass("selected");
                            e.selAllState()
                        },
                        SelAll: function () {
                            var t = this;
                            t.is_multi && (t.selAll = e('<p class="select-all"><span><i></i></span><label>' + l.locale[2] + "</label></p>"), t.optDiv.addClass("selall"), t.selAll.on("click", function () {
                                t.selAll.toggleClass("selected"), t.toggSelAll(t.selAll.hasClass("selected"), 1)
                            }), t.optDiv.prepend(t.selAll))
                        },
                        Search: function () {
                            var t = this,
                                    i = t.CaptionCont.addClass("search"),
                                    s = e('<p class="no-match">');
                            t.ftxt = e('<input type="text" class="search-txt" value="" placeholder="' + l.searchText + '">').on("click", function (e) {
                                e.stopPropagation()
                            }), i.append(t.ftxt), t.optDiv.children("ul").after(s), t.ftxt.on("keyup.sumo", function () {
                                var i = t.optDiv.find("ul.options li.opt").each(function (l, i) {
                                    var i = e(i),
                                            s = i.data("opt")[0];
                                    s.hidden = i.text().toLowerCase().indexOf(t.ftxt.val().toLowerCase()) < 0, i.toggleClass("hidden", s.hidden)
                                }).not(".hidden");
                                s.html(l.noMatch.replace(/\{0\}/g, "<em></em>")).toggle(!i.length), s.find("em").text(t.ftxt.val()), t.selAllState()
                            })
                        },
                        selAllState: function () {
                            var t = this;
                            if (l.selectAll && t.is_multi) {
                                var i = 0,
                                        s = 0;
                                t.optDiv.find("li.opt").not(".hidden").each(function (t, l) {
                                    e(l).hasClass("selected") && i++, e(l).hasClass("disabled") || s++
                                }), i == s ? t.selAll.removeClass("partial").addClass("selected") : 0 == i ? t.selAll.removeClass("selected partial") : t.selAll.addClass("partial")
                            }
                        },
                        showOpts: function () {
                            var t = this;
                            t.E.attr("disabled") || (t.E.trigger("sumo:opening", t), t.is_opened = !0, t.select.addClass("open").attr("aria-expanded", "true"), t.E.trigger("sumo:opened", t), t.ftxt ? t.ftxt.focus() : t.select.focus(), e(document).on("click.sumo", function (e) {
                                if (!t.select.is(e.target) && 0 === t.select.has(e.target).length) {
                                    if (!t.is_opened)
                                        return;
                                    t.hideOpts(), l.okCancelInMulti && (l.isClickAwayOk ? t._okbtn() : t._cnbtn())
                                }
                            }), t.is_floating && (H = t.optDiv.children("ul").outerHeight() + 2, t.is_multi && (H += parseInt(t.optDiv.css("padding-bottom"))), t.optDiv.css("height", H), e("body").addClass("sumoStopScroll")), t.setPstate())
                        },
                        setPstate: function () {
                            var e = this;
                            e.is_multi && (e.is_floating || l.okCancelInMulti) && (e.Pstate = [], e.E.find("option").each(function (t, l) {
                                l.selected && e.Pstate.push(t)
                            }))
                        },
                        callChange: function () {
                            this.E.trigger("change").trigger("click")
                        },
                        hideOpts: function () {
                            var t = this;
                            t.is_opened && (t.E.trigger("sumo:closing", t), t.is_opened = !1, t.select.removeClass("open").attr("aria-expanded", "true").find("ul li.sel").removeClass("sel"), t.E.trigger("sumo:closed", t), e(document).off("click.sumo"), t.select.focus(), e("body").removeClass("sumoStopScroll"), l.search && (t.ftxt.val(""), t.ftxt.trigger("keyup.sumo")))
                        },
                        setOnOpen: function () {
                            var e = this,
                                    t = e.optDiv.find("li.opt:not(.hidden)").eq(l.search ? 0 : e.E[0].selectedIndex);
                            t.hasClass("disabled") && (t = t.next(":not(disabled)"), !t.length) || (e.optDiv.find("li.sel").removeClass("sel"), t.addClass("sel"), e.showOpts())
                        },
                        nav: function (e) {
                            var t, l = this,
                                    i = l.ul.find("li.opt:not(.disabled, .hidden)"),
                                    s = l.ul.find("li.opt.sel:not(.hidden)"),
                                    n = i.index(s);
                            if (l.is_opened && s.length) {
                                if (e && n > 0)
                                    t = i.eq(n - 1);
                                else {
                                    if (!(!e && n < i.length - 1 && n > -1))
                                        return;
                                    t = i.eq(n + 1)
                                }
                                s.removeClass("sel"), s = t.addClass("sel");
                                var a = l.ul,
                                        o = a.scrollTop(),
                                        c = s.position().top + o;
                                c >= o + a.height() - s.outerHeight() && a.scrollTop(c - a.height() + s.outerHeight()), o > c && a.scrollTop(c)
                            } else
                                l.setOnOpen()
                        },
                        basicEvents: function () {
                            var t = this;
                            t.CaptionCont.click(function (e) {
                                t.E.trigger("click"), t.is_opened ? t.hideOpts() : t.showOpts(), e.stopPropagation()
                            }), t.select.on("keydown.sumo", function (e) {
                                switch (e.which) {
                                    case 38:
                                        t.nav(!0);
                                        break;
                                    case 40:
                                        t.nav(!1);
                                        break;
                                    case 65:
                                        if (t.is_multi && e.ctrlKey) {
                                            t.toggSelAll(!e.shiftKey, 1);
                                            break
                                        }
                                        return;
                                    case 32:
                                        if (l.search && t.ftxt.is(e.target))
                                            return;
                                    case 13:
                                        t.is_opened ? t.optDiv.find("ul li.sel").trigger("click") : t.setOnOpen();
                                        break;
                                    case 9:
                                        return void(l.okCancelInMulti || t.hideOpts());
                                    case 27:
                                        return l.okCancelInMulti && t._cnbtn(), void t.hideOpts();
                                    default:
                                        return
                                }
                                e.preventDefault()
                            }), e(window).on("resize.sumo", function () {
                                t.floatingList()
                            })
                        },
                        onOptClick: function (t) {
                            var i = this;
                            t.click(function () {
                                var t = e(this);
                                if (!t.hasClass("disabled")) {
                                    i.is_multi ? (t.toggleClass("selected"), t.data("opt")[0].selected = t.hasClass("selected"), i.selAllState()) : (t.parent().find("li.selected").removeClass("selected"), t.toggleClass("selected"), t.data("opt")[0].selected = !0), i.is_multi && l.triggerChangeCombined && (i.is_floating || l.okCancelInMulti) || (i.setText(), i.callChange()), i.is_multi || i.hideOpts()
                                }
                            })
                        },
                        setText: function () {
                            var t = this;
                            if (t.placeholder = "", t.is_multi) {
                                for (sels = t.E.find(":selected").not(":disabled"), i = 0; i < sels.length; i++) {
                                    if (i + 1 >= l.csvDispCount && l.csvDispCount) {
                                        sels.length == t.E.find("option").length && l.captionFormatAllSelected ? t.placeholder = l.captionFormatAllSelected.replace(/\{0\}/g, sels.length) + "," : t.placeholder = l.captionFormat.replace(/\{0\}/g, sels.length) + ",";
                                        break
                                    }
                                    t.placeholder += e(sels[i]).text() + ", "
                                }
                                t.placeholder = t.placeholder.replace(/,([^,]*)$/, "$1")
                            } else
                                t.placeholder = t.E.find(":selected").not(":disabled").text();
                            var s = !1;
                            t.placeholder || (s = !0, t.placeholder = t.E.attr("placeholder"), t.placeholder || (t.placeholder = t.E.find("option:disabled:selected").text())), t.placeholder = t.placeholder ? l.prefix + " " + t.placeholder : l.placeholder, t.caption.html(t.placeholder), l.showTitle && t.CaptionCont.attr("title", t.placeholder);
                            var n = t.select.find("input.HEMANT123");
                            return n.length && n.val(t.getSelStr()), s ? t.caption.addClass("placeholder") : t.caption.removeClass("placeholder"), t.placeholder
                        },
                        isMobile: function () {
                            for (var e = navigator.userAgent || navigator.vendor || window.opera, t = 0; t < l.nativeOnDevice.length; t++)
                                if (e.toString().toLowerCase().indexOf(l.nativeOnDevice[t].toLowerCase()) > 0)
                                    return l.nativeOnDevice[t];
                            return !1
                        },
                        setNativeMobile: function () {
                            var e = this;
                            e.E.addClass("SelectClass"), e.mob = !0, e.E.change(function () {
                                e.setText()
                            })
                        },
                        floatingList: function () {
                            var t = this;
                            t.is_floating = e(window).width() <= l.floatWidth, t.optDiv.toggleClass("isFloating", t.is_floating), t.is_floating || t.optDiv.css("height", ""), t.optDiv.toggleClass("okCancelInMulti", l.okCancelInMulti && !t.is_floating)
                        },
                        vRange: function (e) {
                            var t = this,
                                    l = t.E.find("option");
                            if (l.length <= e || 0 > e)
                                throw "index out of bounds";
                            return t
                        },
                        toggSel: function (t, l) {
                            var i, s = this;
                            "number" == typeof l ? (s.vRange(l), i = s.E.find("option")[l]) : i = s.E.find('option[value="' + l + '"]')[0] || 0, i && !i.disabled && i.selected != t && (i.selected = t, s.mob || e(i).data("li").toggleClass("selected", t), s.callChange(), s.setPstate(), s.setText(), s.selAllState())
                        },
                        toggDis: function (e, t) {
                            var l = this.vRange(t);
                            l.E.find("option")[t].disabled = e, e && (l.E.find("option")[t].selected = !1), l.mob || l.optDiv.find("ul.options li").eq(t).toggleClass("disabled", e).removeClass("selected"), l.setText()
                        },
                        toggSumo: function (e) {
                            var t = this;
                            return t.enabled = e, t.select.toggleClass("disabled", e), e ? (t.E.attr("disabled", "disabled"), t.select.removeAttr("tabindex")) : (t.E.removeAttr("disabled"), t.select.attr("tabindex", "0")), t
                        },
                        toggSelAll: function (t, l) {
                            var i = this;
                            i.E.find("option:not(:disabled,:hidden)").each(function (l, i) {
                                var s = i.selected,
                                        i = e(i).data("li");
                                i.hasClass("hidden") || (t ? s || i.trigger("click") : s && i.trigger("click"))
                            }), l || (!i.mob && i.selAll && i.selAll.removeClass("partial").toggleClass("selected", !!t), i.callChange(), i.setText(), i.setPstate())
                        },
                        reload: function () {
                            var t = this.unload();
                            return e(t).SumoSelect(l)
                        },
                        unload: function () {
                            var e = this;
                            return e.select.before(e.E), e.E.show(), l.outputAsCSV && e.is_multi && e.select.find("input.HEMANT123").length && e.E.attr("name", e.select.find("input.HEMANT123").attr("name")), e.select.remove(), delete t.sumo, t
                        },
                        add: function (l, i, s) {
                            if ("undefined" == typeof l)
                                throw "No value to add";
                            var n = this;
                            if (opts = n.E.find("option"), "number" == typeof i && (s = i, i = l), "undefined" == typeof i && (i = l), opt = e("<option></option>").val(l).html(i), opts.length < s)
                                throw "index out of bounds";
                            return "undefined" == typeof s || opts.length == s ? (n.E.append(opt), n.mob || n.ul.append(n.createLi(opt))) : (opts.eq(s).before(opt), n.mob || n.ul.find("li.opt").eq(s).before(n.createLi(opt))), t
                        },
                        remove: function (e) {
                            var t = this.vRange(e);
                            t.E.find("option").eq(e).remove(), t.mob || t.optDiv.find("ul.options li").eq(e).remove(), t.setText()
                        },
                        selectItem: function (e) {
                            this.toggSel(!0, e)
                        },
                        unSelectItem: function (e) {
                            this.toggSel(!1, e)
                        },
                        selectAll: function () {
                            this.toggSelAll(!0)
                        },
                        unSelectAll: function () {
                            this.toggSelAll(!1)
                        },
                        disableItem: function (e) {
                            this.toggDis(!0, e)
                        },
                        enableItem: function (e) {
                            this.toggDis(!1, e)
                        },
                        enabled: !0,
                        enable: function () {
                            return this.toggSumo(!1)
                        },
                        disable: function () {
                            return this.toggSumo(!0)
                        },
                        init: function () {
                            var e = this;
                            return e.createElems(), e.setText(), e
                        }
                    }, t.sumo.init())
                });
        return 1 == s.length ? s[0] : s
    }
});

$(document).on('ready', function () {
    $('.SlectBox').SumoSelect();
});