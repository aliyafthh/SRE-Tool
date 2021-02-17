! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e((t = t || self).bootstrap = {}, t.jQuery)
  }(this, (function(t, e) {
    "use strict";
  
    function n(t, e) {
        for (var n = 0; n < e.length; n++) {
            var i = e[n];
            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
        }
    }
  
    function i(t, e, i) {
        return e && n(t.prototype, e), i && n(t, i), t
    }
  
    function o(t, e, n) {
        return e in t ? Object.defineProperty(t, e, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : t[e] = n, t
    }
  
    function r(t, e) {
        var n = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var i = Object.getOwnPropertySymbols(t);
            e && (i = i.filter((function(e) {
                return Object.getOwnPropertyDescriptor(t, e).enumerable
            }))), n.push.apply(n, i)
        }
        return n
    }
  
    function s(t) {
        for (var e = 1; e < arguments.length; e++) {
            var n = null != arguments[e] ? arguments[e] : {};
            e % 2 ? r(Object(n), !0).forEach((function(e) {
                o(t, e, n[e])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : r(Object(n)).forEach((function(e) {
                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
            }))
        }
        return t
    }
    
n.show = function() {
    var n, i, o = this;
    if (!this._isTransitioning && !e(this._element).hasClass("show") && (this._parent && 0 === (n = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter((function(t) {
            return "string" == typeof o._config.parent ? t.getAttribute("data-parent") === o._config.parent : t.classList.contains("collapse")
        }))).length && (n = null), !(n && (i = e(n).not(this._selector).data("bs.collapse")) && i._isTransitioning))) {
        var r = e.Event("show.bs.collapse");
        if (e(this._element).trigger(r), !r.isDefaultPrevented()) {
            n && (t._jQueryInterface.call(e(n).not(this._selector), "hide"), i || e(n).data("bs.collapse", null));
            var s = this._getDimension();
            e(this._element).removeClass("collapse").addClass("collapsing"), this._element.style[s] = 0, this._triggerArray.length && e(this._triggerArray).removeClass("collapsed").attr("aria-expanded", !0), this.setTransitioning(!0);
            var a = "scroll" + (s[0].toUpperCase() + s.slice(1)),
                c = l.getTransitionDurationFromElement(this._element);
            e(this._element).one(l.TRANSITION_END, (function() {
                e(o._element).removeClass("collapsing").addClass("collapse show"), o._element.style[s] = "", o.setTransitioning(!1), e(o._element).trigger("shown.bs.collapse")
            })).emulateTransitionEnd(c), this._element.style[s] = this._element[a] + "px"
        }
    }
}

n.hide = function() {
    var t = this;
    if (!this._isTransitioning && e(this._element).hasClass("show")) {
        var n = e.Event("hide.bs.collapse");
        if (e(this._element).trigger(n), !n.isDefaultPrevented()) {
            var i = this._getDimension();
            this._element.style[i] = this._element.getBoundingClientRect()[i] + "px", l.reflow(this._element), e(this._element).addClass("collapsing").removeClass("collapse show");
            var o = this._triggerArray.length;
            if (o > 0)
                for (var r = 0; r < o; r++) {
                    var s = this._triggerArray[r],
                        a = l.getSelectorFromElement(s);
                    if (null !== a) e([].slice.call(document.querySelectorAll(a))).hasClass("show") || e(s).addClass("collapsed").attr("aria-expanded", !1)
                }
            this.setTransitioning(!0);
            this._element.style[i] = "";
            var c = l.getTransitionDurationFromElement(this._element);
            e(this._element).one(l.TRANSITION_END, (function() {
                t.setTransitioning(!1), e(t._element).removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
            })).emulateTransitionEnd(c)
        }
    }
}