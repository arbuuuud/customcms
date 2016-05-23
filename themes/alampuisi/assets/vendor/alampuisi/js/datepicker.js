! function (e) {
    function t() {
        return new Date(Date.UTC.apply(Date, arguments))
    }

    function n(t, n) {
        var i, r = e(t).data(),
            a = {}, o = new RegExp("^" + n.toLowerCase() + "([A-Z])"),
            n = new RegExp("^" + n.toLowerCase());
        for (var s in r) n.test(s) && (i = s.replace(o, function (e, t) {
            return t.toLowerCase()
        }), a[i] = r[s]);
        return a
    }

    function i(t) {
        var n = {};
        if (c[t] || (t = t.split("-")[0], c[t])) {
            var i = c[t];
            return e.each(d, function (e, t) {
                t in i && (n[t] = i[t])
            }), n
        }
    }
    var r = e(window),
        a = function (t, n) {
            this._process_options(n), this.element = e(t), this.isInline = !1, this.isInput = this.element.is("input"), this.component = this.element.is(".date") ? this.element.find(".input-group-addon, .btn") : !1, this.hasInput = this.component && this.element.find("input").length, this.component && 0 === this.component.length && (this.component = !1), this.picker = e(u.template), this._buildEvents(), this._attachEvents(), this.isInline ? this.picker.addClass("datepicker-inline").appendTo(this.element) : this.picker.addClass("datepicker-dropdown dropdown-menu"), this.o.rtl && (this.picker.addClass("datepicker-rtl"), this.picker.find(".prev i, .next i").toggleClass("icon-arrow-left icon-arrow-right")), this.viewMode = this.o.startView, this.o.calendarWeeks && this.picker.find("tfoot th.today").attr("colspan", function (e, t) {
                return parseInt(t) + 1
            }), this._allow_update = !1, this.setStartDate(this._o.startDate), this.setEndDate(this._o.endDate), this.setDaysOfWeekDisabled(this.o.daysOfWeekDisabled), this.fillDow(), this.fillMonths(), this._allow_update = !0, this.update(), this.showMode(), this.isInline && this.show()
        };
    a.prototype = {
        constructor: a,
        _process_options: function (t) {
            this._o = e.extend({}, this._o, t);
            var n = this.o = e.extend({}, this._o),
                i = n.language;
            switch (c[i] || (i = i.split("-")[0], c[i] || (i = l.language)), n.language = i, n.startView) {
            case 2:
            case "decade":
                n.startView = 2;
                break;
            case 1:
            case "year":
                n.startView = 1;
                break;
            default:
                n.startView = 0
            }
            switch (n.minViewMode) {
            case 1:
            case "months":
                n.minViewMode = 1;
                break;
            case 2:
            case "years":
                n.minViewMode = 2;
                break;
            default:
                n.minViewMode = 0
            }
            n.startView = Math.max(n.startView, n.minViewMode), n.weekStart %= 7, n.weekEnd = (n.weekStart + 6) % 7;
            var r = u.parseFormat(n.format);
            n.startDate !== -1 / 0 && (n.startDate = n.startDate ? n.startDate instanceof Date ? this._local_to_utc(this._zero_time(n.startDate)) : u.parseDate(n.startDate, r, n.language) : -1 / 0), 1 / 0 !== n.endDate && (n.endDate = n.endDate ? n.endDate instanceof Date ? this._local_to_utc(this._zero_time(n.endDate)) : u.parseDate(n.endDate, r, n.language) : 1 / 0), n.daysOfWeekDisabled = n.daysOfWeekDisabled || [], e.isArray(n.daysOfWeekDisabled) || (n.daysOfWeekDisabled = n.daysOfWeekDisabled.split(/[,\s]*/)), n.daysOfWeekDisabled = e.map(n.daysOfWeekDisabled, function (e) {
                return parseInt(e, 10)
            });
            var a = String(n.orientation).toLowerCase().split(/\s+/g),
                o = n.orientation.toLowerCase();
            if (a = e.grep(a, function (e) {
                return /^auto|left|right|top|bottom$/.test(e)
            }), n.orientation = {
                x: "auto",
                y: "auto"
            }, o && "auto" !== o)
                if (1 === a.length) switch (a[0]) {
                case "top":
                case "bottom":
                    n.orientation.y = a[0];
                    break;
                case "left":
                case "right":
                    n.orientation.x = a[0]
                } else o = e.grep(a, function (e) {
                    return /^left|right$/.test(e)
                }), n.orientation.x = o[0] || "auto", o = e.grep(a, function (e) {
                    return /^top|bottom$/.test(e)
                }), n.orientation.y = o[0] || "auto";
                else;
        },
        _events: [],
        _secondaryEvents: [],
        _applyEvents: function (e) {
            for (var t, n, i = 0; i < e.length; i++) t = e[i][0], n = e[i][1], t.on(n)
        },
        _unapplyEvents: function (e) {
            for (var t, n, i = 0; i < e.length; i++) t = e[i][0], n = e[i][1], t.off(n)
        },
        _buildEvents: function () {
            this.isInput ? this._events = [
                [this.element, {
                    focus: e.proxy(this.show, this),
                    keyup: e.proxy(this.update, this),
                    keydown: e.proxy(this.keydown, this)
                }]
            ] : this.component && this.hasInput ? this._events = [
                [this.element.find("input"), {
                    focus: e.proxy(this.show, this),
                    keyup: e.proxy(this.update, this),
                    keydown: e.proxy(this.keydown, this)
                }],
                [this.component, {
                    click: e.proxy(this.show, this)
                }]
            ] : this.element.is("div") ? this.isInline = !0 : this._events = [
                [this.element, {
                    click: e.proxy(this.show, this)
                }]
            ], this._secondaryEvents = [
                [this.picker, {
                    click: e.proxy(this.click, this)
                }],
                [e(window), {
                    resize: e.proxy(this.place, this)
                }],
                [e(document), {
                    mousedown: e.proxy(function (e) {
                        this.element.is(e.target) || this.element.find(e.target).length || this.picker.is(e.target) || this.picker.find(e.target).length || this.hide()
                    }, this)
                }]
            ]
        },
        _attachEvents: function () {
            this._detachEvents(), this._applyEvents(this._events)
        },
        _detachEvents: function () {
            this._unapplyEvents(this._events)
        },
        _attachSecondaryEvents: function () {
            this._detachSecondaryEvents(), this._applyEvents(this._secondaryEvents)
        },
        _detachSecondaryEvents: function () {
            this._unapplyEvents(this._secondaryEvents)
        },
        _trigger: function (t, n) {
            var i = n || this.date,
                r = this._utc_to_local(i);
            this.element.trigger({
                type: t,
                date: r,
                format: e.proxy(function (e) {
                    var t = e || this.o.format;
                    return u.formatDate(i, t, this.o.language)
                }, this)
            })
        },
        show: function (e) {
            this.isInline || this.picker.appendTo("body"), this.picker.show(), this.height = this.component ? this.component.outerHeight() : this.element.outerHeight(), this.place(), this._attachSecondaryEvents(), e && e.preventDefault(), this._trigger("show")
        },
        hide: function () {
            this.isInline || this.picker.is(":visible") && (this.picker.hide().detach(), this._detachSecondaryEvents(), this.viewMode = this.o.startView, this.showMode(), this.o.forceParse && (this.isInput && this.element.val() || this.hasInput && this.element.find("input").val()) && this.setValue(), this._trigger("hide"))
        },
        remove: function () {
            this.hide(), this._detachEvents(), this._detachSecondaryEvents(), this.picker.remove(), delete this.element.data().datepicker, this.isInput || delete this.element.data().date
        },
        _utc_to_local: function (e) {
            return new Date(e.getTime() + 6e4 * e.getTimezoneOffset())
        },
        _local_to_utc: function (e) {
            return new Date(e.getTime() - 6e4 * e.getTimezoneOffset())
        },
        _zero_time: function (e) {
            return new Date(e.getFullYear(), e.getMonth(), e.getDate())
        },
        _zero_utc_time: function (e) {
            return new Date(Date.UTC(e.getUTCFullYear(), e.getUTCMonth(), e.getUTCDate()))
        },
        getDate: function () {
            return this._utc_to_local(this.getUTCDate())
        },
        getUTCDate: function () {
            return this.date
        },
        setDate: function (e) {
            this.setUTCDate(this._local_to_utc(e))
        },
        setUTCDate: function (e) {
            this.date = e, this.setValue()
        },
        setValue: function () {
            var e = this.getFormattedDate();
            this.isInput ? this.element.val(e).change() : this.component && this.element.find("input").val(e).change()
        },
        getFormattedDate: function (e) {
            return void 0 === e && (e = this.o.format), u.formatDate(this.date, e, this.o.language)
        },
        setStartDate: function (e) {
            this._process_options({
                startDate: e
            }), this.update(), this.updateNavArrows()
        },
        setEndDate: function (e) {
            this._process_options({
                endDate: e
            }), this.update(), this.updateNavArrows()
        },
        setDaysOfWeekDisabled: function (e) {
            this._process_options({
                daysOfWeekDisabled: e
            }), this.update(), this.updateNavArrows()
        },
        place: function () {
            if (!this.isInline) {
                var t = this.picker.outerWidth(),
                    n = this.picker.outerHeight(),
                    i = 10,
                    a = r.width(),
                    o = r.height(),
                    s = r.scrollTop(),
                    l = parseInt(this.element.parents().filter(function () {
                        return "auto" != e(this).css("z-index")
                    }).first().css("z-index")) + 10,
                    d = this.component ? this.component.parent().offset() : this.element.offset(),
                    c = this.component ? this.component.outerHeight(!0) : this.element.outerHeight(!1),
                    u = this.component ? this.component.outerWidth(!0) : this.element.outerWidth(!1),
                    h = d.left,
                    p = d.top;
                this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"), "auto" !== this.o.orientation.x ? (this.picker.addClass("datepicker-orient-" + this.o.orientation.x), "right" === this.o.orientation.x && (h -= t - u)) : (this.picker.addClass("datepicker-orient-left"), d.left < 0 ? h -= d.left - i : d.left + t > a && (h = a - t - i));
                var f, g, m = this.o.orientation.y;
                "auto" === m && (f = -s + d.top - n, g = s + o - (d.top + c + n), m = Math.max(f, g) === g ? "top" : "bottom"), this.picker.addClass("datepicker-orient-" + m), "top" === m ? p += c : p -= n + parseInt(this.picker.css("padding-top")), this.picker.css({
                    top: p,
                    left: h,
                    zIndex: l
                })
            }
        },
        _allow_update: !0,
        update: function () {
            if (this._allow_update) {
                var e, t = new Date(this.date),
                    n = !1;
                arguments && arguments.length && ("string" == typeof arguments[0] || arguments[0] instanceof Date) ? (e = arguments[0], e instanceof Date && (e = this._local_to_utc(e)), n = !0) : (e = this.isInput ? this.element.val() : this.element.data("date") || this.element.find("input").val(), delete this.element.data().date), this.date = u.parseDate(e, this.o.format, this.o.language), n ? this.setValue() : e ? t.getTime() !== this.date.getTime() && this._trigger("changeDate") : this._trigger("clearDate"), this.date < this.o.startDate ? (this.viewDate = new Date(this.o.startDate), this.date = new Date(this.o.startDate)) : this.date > this.o.endDate ? (this.viewDate = new Date(this.o.endDate), this.date = new Date(this.o.endDate)) : (this.viewDate = new Date(this.date), this.date = new Date(this.date)), this.fill()
            }
        },
        fillDow: function () {
            var e = this.o.weekStart,
                t = "<tr>";
            if (this.o.calendarWeeks) {
                var n = '<th class="cw">&nbsp;</th>';
                t += n, this.picker.find(".datepicker-days thead tr:first-child").prepend(n)
            }
            for (; e < this.o.weekStart + 7;) t += '<th class="dow">' + c[this.o.language].daysMin[e++ % 7] + "</th>";
            t += "</tr>", this.picker.find(".datepicker-days thead").append(t)
        },
        fillMonths: function () {
            for (var e = "", t = 0; 12 > t;) e += '<span class="month">' + c[this.o.language].monthsShort[t++] + "</span>";
            this.picker.find(".datepicker-months td").html(e)
        },
        setRange: function (t) {
            t && t.length ? this.range = e.map(t, function (e) {
                return e.valueOf()
            }) : delete this.range, this.fill()
        },
        getClassNames: function (t) {
            var n = [],
                i = this.viewDate.getUTCFullYear(),
                r = this.viewDate.getUTCMonth(),
                a = this.date.valueOf(),
                o = new Date;
            return t.getUTCFullYear() < i || t.getUTCFullYear() == i && t.getUTCMonth() < r ? n.push("old") : (t.getUTCFullYear() > i || t.getUTCFullYear() == i && t.getUTCMonth() > r) && n.push("new"), this.o.todayHighlight && t.getUTCFullYear() == o.getFullYear() && t.getUTCMonth() == o.getMonth() && t.getUTCDate() == o.getDate() && n.push("today"), a && t.valueOf() == a && n.push("active"), (t.valueOf() < this.o.startDate || t.valueOf() > this.o.endDate || -1 !== e.inArray(t.getUTCDay(), this.o.daysOfWeekDisabled)) && n.push("disabled"), this.range && (t > this.range[0] && t < this.range[this.range.length - 1] && n.push("range"), -1 != e.inArray(t.valueOf(), this.range) && n.push("selected")), n
        },
        fill: function () {
            var n, i = new Date(this.viewDate),
                r = i.getUTCFullYear(),
                a = i.getUTCMonth(),
                o = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCFullYear() : -1 / 0,
                s = this.o.startDate !== -1 / 0 ? this.o.startDate.getUTCMonth() : -1 / 0,
                l = 1 / 0 !== this.o.endDate ? this.o.endDate.getUTCFullYear() : 1 / 0,
                d = 1 / 0 !== this.o.endDate ? this.o.endDate.getUTCMonth() : 1 / 0;
            this.date && this.date.valueOf(), this.picker.find(".datepicker-days thead th.datepicker-switch").text(c[this.o.language].months[a] + " " + r), this.picker.find("tfoot th.today").text(c[this.o.language].today).toggle(this.o.todayBtn !== !1), this.picker.find("tfoot th.clear").text(c[this.o.language].clear).toggle(this.o.clearBtn !== !1), this.updateNavArrows(), this.fillMonths();
            var h = t(r, a - 1, 28, 0, 0, 0, 0),
                p = u.getDaysInMonth(h.getUTCFullYear(), h.getUTCMonth());
            h.setUTCDate(p), h.setUTCDate(p - (h.getUTCDay() - this.o.weekStart + 7) % 7);
            var f = new Date(h);
            f.setUTCDate(f.getUTCDate() + 42), f = f.valueOf();
            for (var g, m = []; h.valueOf() < f;) {
                if (h.getUTCDay() == this.o.weekStart && (m.push("<tr>"), this.o.calendarWeeks)) {
                    var v = new Date(+h + 864e5 * ((this.o.weekStart - h.getUTCDay() - 7) % 7)),
                        y = new Date(+v + 864e5 * ((11 - v.getUTCDay()) % 7)),
                        b = new Date(+(b = t(y.getUTCFullYear(), 0, 1)) + 864e5 * ((11 - b.getUTCDay()) % 7)),
                        x = (y - b) / 864e5 / 7 + 1;
                    m.push('<td class="cw">' + x + "</td>")
                }
                if (g = this.getClassNames(h), g.push("day"), this.o.beforeShowDay !== e.noop) {
                    var w = this.o.beforeShowDay(this._utc_to_local(h));
                    void 0 === w ? w = {} : "boolean" == typeof w ? w = {
                        enabled: w
                    } : "string" == typeof w && (w = {
                        classes: w
                    }), w.enabled === !1 && g.push("disabled"), w.classes && (g = g.concat(w.classes.split(/\s+/))), w.tooltip && (n = w.tooltip)
                }
                g = e.unique(g), m.push('<td class="' + g.join(" ") + '"' + (n ? ' title="' + n + '"' : "") + ">" + h.getUTCDate() + "</td>"), h.getUTCDay() == this.o.weekEnd && m.push("</tr>"), h.setUTCDate(h.getUTCDate() + 1)
            }
            this.picker.find(".datepicker-days tbody").empty().append(m.join(""));
            var T = this.date && this.date.getUTCFullYear(),
                C = this.picker.find(".datepicker-months").find("th:eq(1)").text(r).end().find("span").removeClass("active");
            T && T == r && C.eq(this.date.getUTCMonth()).addClass("active"), (o > r || r > l) && C.addClass("disabled"), r == o && C.slice(0, s).addClass("disabled"), r == l && C.slice(d + 1).addClass("disabled"), m = "", r = 10 * parseInt(r / 10, 10);
            var k = this.picker.find(".datepicker-years").find("th:eq(1)").text(r + "-" + (r + 9)).end().find("td");
            r -= 1;
            for (var _ = -1; 11 > _; _++) m += '<span class="year' + (-1 == _ ? " old" : 10 == _ ? " new" : "") + (T == r ? " active" : "") + (o > r || r > l ? " disabled" : "") + '">' + r + "</span>", r += 1;
            k.html(m)
        },
        updateNavArrows: function () {
            if (this._allow_update) {
                var e = new Date(this.viewDate),
                    t = e.getUTCFullYear(),
                    n = e.getUTCMonth();
                switch (this.viewMode) {
                case 0:
                    this.o.startDate !== -1 / 0 && t <= this.o.startDate.getUTCFullYear() && n <= this.o.startDate.getUTCMonth() ? this.picker.find(".prev").css({
                        visibility: "hidden"
                    }) : this.picker.find(".prev").css({
                        visibility: "visible"
                    }), 1 / 0 !== this.o.endDate && t >= this.o.endDate.getUTCFullYear() && n >= this.o.endDate.getUTCMonth() ? this.picker.find(".next").css({
                        visibility: "hidden"
                    }) : this.picker.find(".next").css({
                        visibility: "visible"
                    });
                    break;
                case 1:
                case 2:
                    this.o.startDate !== -1 / 0 && t <= this.o.startDate.getUTCFullYear() ? this.picker.find(".prev").css({
                        visibility: "hidden"
                    }) : this.picker.find(".prev").css({
                        visibility: "visible"
                    }), 1 / 0 !== this.o.endDate && t >= this.o.endDate.getUTCFullYear() ? this.picker.find(".next").css({
                        visibility: "hidden"
                    }) : this.picker.find(".next").css({
                        visibility: "visible"
                    })
                }
            }
        },
        click: function (n) {
            n.preventDefault();
            var i = e(n.target).closest("span, td, th");
            if (1 == i.length) switch (i[0].nodeName.toLowerCase()) {
            case "th":
                switch (i[0].className) {
                case "datepicker-switch":
                    this.showMode(1);
                    break;
                case "prev":
                case "next":
                    var r = u.modes[this.viewMode].navStep * ("prev" == i[0].className ? -1 : 1);
                    switch (this.viewMode) {
                    case 0:
                        this.viewDate = this.moveMonth(this.viewDate, r), this._trigger("changeMonth", this.viewDate);
                        break;
                    case 1:
                    case 2:
                        this.viewDate = this.moveYear(this.viewDate, r), 1 === this.viewMode && this._trigger("changeYear", this.viewDate)
                    }
                    this.fill();
                    break;
                case "today":
                    var a = new Date;
                    a = t(a.getFullYear(), a.getMonth(), a.getDate(), 0, 0, 0), this.showMode(-2);
                    var o = "linked" == this.o.todayBtn ? null : "view";
                    this._setDate(a, o);
                    break;
                case "clear":
                    var s;
                    this.isInput ? s = this.element : this.component && (s = this.element.find("input")), s && s.val("").change(), this._trigger("changeDate"), this.update(), this.o.autoclose && this.hide()
                }
                break;
            case "span":
                if (!i.is(".disabled")) {
                    if (this.viewDate.setUTCDate(1), i.is(".month")) {
                        var l = 1,
                            d = i.parent().find("span").index(i),
                            c = this.viewDate.getUTCFullYear();
                        this.viewDate.setUTCMonth(d), this._trigger("changeMonth", this.viewDate), 1 === this.o.minViewMode && this._setDate(t(c, d, l, 0, 0, 0, 0))
                    } else {
                        var c = parseInt(i.text(), 10) || 0,
                            l = 1,
                            d = 0;
                        this.viewDate.setUTCFullYear(c), this._trigger("changeYear", this.viewDate), 2 === this.o.minViewMode && this._setDate(t(c, d, l, 0, 0, 0, 0))
                    }
                    this.showMode(-1), this.fill()
                }
                break;
            case "td":
                if (i.is(".day") && !i.is(".disabled")) {
                    var l = parseInt(i.text(), 10) || 1,
                        c = this.viewDate.getUTCFullYear(),
                        d = this.viewDate.getUTCMonth();
                    i.is(".old") ? 0 === d ? (d = 11, c -= 1) : d -= 1 : i.is(".new") && (11 == d ? (d = 0, c += 1) : d += 1), this._setDate(t(c, d, l, 0, 0, 0, 0))
                }
            }
        },
        _setDate: function (e, t) {
            t && "date" != t || (this.date = new Date(e)), t && "view" != t || (this.viewDate = new Date(e)), this.fill(), this.setValue(), this._trigger("changeDate");
            var n;
            this.isInput ? n = this.element : this.component && (n = this.element.find("input")), n && n.change(), !this.o.autoclose || t && "date" != t || this.hide()
        },
        moveMonth: function (e, t) {
            if (!t) return e;
            var n, i, r = new Date(e.valueOf()),
                a = r.getUTCDate(),
                o = r.getUTCMonth(),
                s = Math.abs(t);
            if (t = t > 0 ? 1 : -1, 1 == s) i = -1 == t ? function () {
                return r.getUTCMonth() == o
            } : function () {
                return r.getUTCMonth() != n
            }, n = o + t, r.setUTCMonth(n), (0 > n || n > 11) && (n = (n + 12) % 12);
            else {
                for (var l = 0; s > l; l++) r = this.moveMonth(r, t);
                n = r.getUTCMonth(), r.setUTCDate(a), i = function () {
                    return n != r.getUTCMonth()
                }
            }
            for (; i();) r.setUTCDate(--a), r.setUTCMonth(n);
            return r
        },
        moveYear: function (e, t) {
            return this.moveMonth(e, 12 * t)
        },
        dateWithinRange: function (e) {
            return e >= this.o.startDate && e <= this.o.endDate
        },
        keydown: function (e) {
            if (this.picker.is(":not(:visible)")) return 27 == e.keyCode && this.show(), void 0;
            var t, n, i, r = !1;
            switch (e.keyCode) {
            case 27:
                this.hide(), e.preventDefault();
                break;
            case 37:
            case 39:
                if (!this.o.keyboardNavigation) break;
                t = 37 == e.keyCode ? -1 : 1, e.ctrlKey ? (n = this.moveYear(this.date, t), i = this.moveYear(this.viewDate, t), this._trigger("changeYear", this.viewDate)) : e.shiftKey ? (n = this.moveMonth(this.date, t), i = this.moveMonth(this.viewDate, t), this._trigger("changeMonth", this.viewDate)) : (n = new Date(this.date), n.setUTCDate(this.date.getUTCDate() + t), i = new Date(this.viewDate), i.setUTCDate(this.viewDate.getUTCDate() + t)), this.dateWithinRange(n) && (this.date = n, this.viewDate = i, this.setValue(), this.update(), e.preventDefault(), r = !0);
                break;
            case 38:
            case 40:
                if (!this.o.keyboardNavigation) break;
                t = 38 == e.keyCode ? -1 : 1, e.ctrlKey ? (n = this.moveYear(this.date, t), i = this.moveYear(this.viewDate, t), this._trigger("changeYear", this.viewDate)) : e.shiftKey ? (n = this.moveMonth(this.date, t), i = this.moveMonth(this.viewDate, t), this._trigger("changeMonth", this.viewDate)) : (n = new Date(this.date), n.setUTCDate(this.date.getUTCDate() + 7 * t), i = new Date(this.viewDate), i.setUTCDate(this.viewDate.getUTCDate() + 7 * t)), this.dateWithinRange(n) && (this.date = n, this.viewDate = i, this.setValue(), this.update(), e.preventDefault(), r = !0);
                break;
            case 13:
                this.hide(), e.preventDefault();
                break;
            case 9:
                this.hide()
            }
            if (r) {
                this._trigger("changeDate");
                var a;
                this.isInput ? a = this.element : this.component && (a = this.element.find("input")), a && a.change()
            }
        },
        showMode: function (e) {
            e && (this.viewMode = Math.max(this.o.minViewMode, Math.min(2, this.viewMode + e))), this.picker.find(">div").hide().filter(".datepicker-" + u.modes[this.viewMode].clsName).css("display", "block"), this.updateNavArrows()
        }
    };
    var o = function (t, n) {
        this.element = e(t), this.inputs = e.map(n.inputs, function (e) {
            return e.jquery ? e[0] : e
        }), delete n.inputs, e(this.inputs).datepicker(n).bind("changeDate", e.proxy(this.dateUpdated, this)), this.pickers = e.map(this.inputs, function (t) {
            return e(t).data("datepicker")
        }), this.updateDates()
    };
    o.prototype = {
        updateDates: function () {
            this.dates = e.map(this.pickers, function (e) {
                return e.date
            }), this.updateRanges()
        },
        updateRanges: function () {
            var t = e.map(this.dates, function (e) {
                return e.valueOf()
            });
            e.each(this.pickers, function (e, n) {
                n.setRange(t)
            })
        },
        dateUpdated: function (t) {
            var n = e(t.target).data("datepicker"),
                i = n.getUTCDate(),
                r = e.inArray(t.target, this.inputs),
                a = this.inputs.length;
            if (-1 != r) {
                if (i < this.dates[r])
                    for (; r >= 0 && i < this.dates[r];) this.pickers[r--].setUTCDate(i);
                else if (i > this.dates[r])
                    for (; a > r && i > this.dates[r];) this.pickers[r++].setUTCDate(i);
                this.updateDates()
            }
        },
        remove: function () {
            e.map(this.pickers, function (e) {
                e.remove()
            }), delete this.element.data().datepicker
        }
    };
    var s = e.fn.datepicker;
    e.fn.datepicker = function (t) {
        var r = Array.apply(null, arguments);
        r.shift();
        var s;
        return this.each(function () {
            var d = e(this),
                c = d.data("datepicker"),
                u = "object" == typeof t && t;
            if (!c) {
                var h = n(this, "date"),
                    p = e.extend({}, l, h, u),
                    f = i(p.language),
                    g = e.extend({}, l, f, h, u);
                if (d.is(".input-daterange") || g.inputs) {
                    var m = {
                        inputs: g.inputs || d.find("input").toArray()
                    };
                    d.data("datepicker", c = new o(this, e.extend(g, m)))
                } else d.data("datepicker", c = new a(this, g))
            }
            return "string" == typeof t && "function" == typeof c[t] && (s = c[t].apply(c, r), void 0 !== s) ? !1 : void 0
        }), void 0 !== s ? s : this
    };
    var l = e.fn.datepicker.defaults = {
        autoclose: !1,
        beforeShowDay: e.noop,
        calendarWeeks: !1,
        clearBtn: !1,
        daysOfWeekDisabled: [],
        endDate: 1 / 0,
        forceParse: !0,
        format: "mm/dd/yyyy",
        keyboardNavigation: !0,
        language: "en",
        minViewMode: 0,
        orientation: "auto",
        rtl: !1,
        startDate: -1 / 0,
        startView: 0,
        todayBtn: !1,
        todayHighlight: !1,
        weekStart: 0
    }, d = e.fn.datepicker.locale_opts = ["format", "rtl", "weekStart"];
    e.fn.datepicker.Constructor = a;
    var c = e.fn.datepicker.dates = {
        en: {
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            today: "Today",
            clear: "Clear"
        }
    }, u = {
            modes: [{
                clsName: "days",
                navFnc: "Month",
                navStep: 1
            }, {
                clsName: "months",
                navFnc: "FullYear",
                navStep: 1
            }, {
                clsName: "years",
                navFnc: "FullYear",
                navStep: 10
            }],
            isLeapYear: function (e) {
                return 0 === e % 4 && 0 !== e % 100 || 0 === e % 400
            },
            getDaysInMonth: function (e, t) {
                return [31, u.isLeapYear(e) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][t]
            },
            validParts: /dd?|DD?|mm?|MM?|yy(?:yy)?/g,
            nonpunctuation: /[^ -\/:-@\[\u3400-\u9fff-`{-~\t\n\r]+/g,
            parseFormat: function (e) {
                var t = e.replace(this.validParts, "\0").split("\0"),
                    n = e.match(this.validParts);
                if (!t || !t.length || !n || 0 === n.length) throw new Error("Invalid date format.");
                return {
                    separators: t,
                    parts: n
                }
            },
            parseDate: function (n, i, r) {
                if (n instanceof Date) return n;
                if ("string" == typeof i && (i = u.parseFormat(i)), /^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(n)) {
                    var o, s, l = /([\-+]\d+)([dmwy])/,
                        d = n.match(/([\-+]\d+)([dmwy])/g);
                    n = new Date;
                    for (var h = 0; h < d.length; h++) switch (o = l.exec(d[h]), s = parseInt(o[1]), o[2]) {
                    case "d":
                        n.setUTCDate(n.getUTCDate() + s);
                        break;
                    case "m":
                        n = a.prototype.moveMonth.call(a.prototype, n, s);
                        break;
                    case "w":
                        n.setUTCDate(n.getUTCDate() + 7 * s);
                        break;
                    case "y":
                        n = a.prototype.moveYear.call(a.prototype, n, s)
                    }
                    return t(n.getUTCFullYear(), n.getUTCMonth(), n.getUTCDate(), 0, 0, 0)
                }
                var p, f, o, d = n && n.match(this.nonpunctuation) || [],
                    n = new Date,
                    g = {}, m = ["yyyy", "yy", "M", "MM", "m", "mm", "d", "dd"],
                    v = {
                        yyyy: function (e, t) {
                            return e.setUTCFullYear(t)
                        },
                        yy: function (e, t) {
                            return e.setUTCFullYear(2e3 + t)
                        },
                        m: function (e, t) {
                            if (isNaN(e)) return e;
                            for (t -= 1; 0 > t;) t += 12;
                            for (t %= 12, e.setUTCMonth(t); e.getUTCMonth() != t;) e.setUTCDate(e.getUTCDate() - 1);
                            return e
                        },
                        d: function (e, t) {
                            return e.setUTCDate(t)
                        }
                    };
                v.M = v.MM = v.mm = v.m, v.dd = v.d, n = t(n.getFullYear(), n.getMonth(), n.getDate(), 0, 0, 0);
                var y = i.parts.slice();
                if (d.length != y.length && (y = e(y).filter(function (t, n) {
                    return -1 !== e.inArray(n, m)
                }).toArray()), d.length == y.length) {
                    for (var h = 0, b = y.length; b > h; h++) {
                        if (p = parseInt(d[h], 10), o = y[h], isNaN(p)) switch (o) {
                        case "MM":
                            f = e(c[r].months).filter(function () {
                                var e = this.slice(0, d[h].length),
                                    t = d[h].slice(0, e.length);
                                return e == t
                            }), p = e.inArray(f[0], c[r].months) + 1;
                            break;
                        case "M":
                            f = e(c[r].monthsShort).filter(function () {
                                var e = this.slice(0, d[h].length),
                                    t = d[h].slice(0, e.length);
                                return e == t
                            }), p = e.inArray(f[0], c[r].monthsShort) + 1
                        }
                        g[o] = p
                    }
                    for (var x, w, h = 0; h < m.length; h++) w = m[h], w in g && !isNaN(g[w]) && (x = new Date(n), v[w](x, g[w]), isNaN(x) || (n = x))
                }
                return n
            },
            formatDate: function (t, n, i) {
                "string" == typeof n && (n = u.parseFormat(n));
                var r = {
                    d: t.getUTCDate(),
                    D: c[i].daysShort[t.getUTCDay()],
                    DD: c[i].days[t.getUTCDay()],
                    m: t.getUTCMonth() + 1,
                    M: c[i].monthsShort[t.getUTCMonth()],
                    MM: c[i].months[t.getUTCMonth()],
                    yy: t.getUTCFullYear().toString().substring(2),
                    yyyy: t.getUTCFullYear()
                };
                r.dd = (r.d < 10 ? "0" : "") + r.d, r.mm = (r.m < 10 ? "0" : "") + r.m;
                for (var t = [], a = e.extend([], n.separators), o = 0, s = n.parts.length; s >= o; o++) a.length && t.push(a.shift()), t.push(r[n.parts[o]]);
                return t.join("")
            },
            headTemplate: '<thead><tr><th class="prev">&laquo;</th><th colspan="5" class="datepicker-switch"></th><th class="next">&raquo;</th></tr></thead>',
            contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>',
            footTemplate: '<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'
        };
    u.template = '<div class="datepicker"><div class="datepicker-days"><table class=" table-condensed">' + u.headTemplate + "<tbody></tbody>" + u.footTemplate + "</table>" + "</div>" + '<div class="datepicker-months">' + '<table class="table-condensed">' + u.headTemplate + u.contTemplate + u.footTemplate + "</table>" + "</div>" + '<div class="datepicker-years">' + '<table class="table-condensed">' + u.headTemplate + u.contTemplate + u.footTemplate + "</table>" + "</div>" + "</div>", e.fn.datepicker.DPGlobal = u, e.fn.datepicker.noConflict = function () {
        return e.fn.datepicker = s, this
    }, e(document).on("focus.datepicker.data-api click.datepicker.data-api", '[data-provide="datepicker"]', function (t) {
        var n = e(this);
        n.data("datepicker") || (t.preventDefault(), n.datepicker("show"))
    }), e(function () {
        e('[data-provide="datepicker-inline"]').datepicker()
    })
}(window.jQuery);