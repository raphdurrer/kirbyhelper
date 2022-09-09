(function() {
  "use strict";
  const AccordionBlock_vue_vue_type_style_index_0_scoped_58c1fc04_lang = "";
  function normalizeComponent(scriptExports, render, staticRenderFns, functionalTemplate, injectStyles, scopeId, moduleIdentifier, shadowMode) {
    var options = typeof scriptExports === "function" ? scriptExports.options : scriptExports;
    if (render) {
      options.render = render;
      options.staticRenderFns = staticRenderFns;
      options._compiled = true;
    }
    if (functionalTemplate) {
      options.functional = true;
    }
    if (scopeId) {
      options._scopeId = "data-v-" + scopeId;
    }
    var hook;
    if (moduleIdentifier) {
      hook = function(context) {
        context = context || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext;
        if (!context && typeof __VUE_SSR_CONTEXT__ !== "undefined") {
          context = __VUE_SSR_CONTEXT__;
        }
        if (injectStyles) {
          injectStyles.call(this, context);
        }
        if (context && context._registeredComponents) {
          context._registeredComponents.add(moduleIdentifier);
        }
      };
      options._ssrRegister = hook;
    } else if (injectStyles) {
      hook = shadowMode ? function() {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        );
      } : injectStyles;
    }
    if (hook) {
      if (options.functional) {
        options._injectStyles = hook;
        var originalRender = options.render;
        options.render = function renderWithStyleInjection(h, context) {
          hook.call(context);
          return originalRender(h, context);
        };
      } else {
        var existing = options.beforeCreate;
        options.beforeCreate = existing ? [].concat(existing, hook) : [hook];
      }
    }
    return {
      exports: scriptExports,
      options
    };
  }
  const _sfc_main$1 = {
    computed: {
      items() {
        return this.content.accordion || {};
      }
    }
  };
  var _sfc_render$1 = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("k-grid", _vm._l(_vm.items, function(item) {
      return _c("k-column", { key: item.id, attrs: { "width": "12/12" } }, [_vm._v(" " + _vm._s(item.title) + " "), _c("hr")]);
    }), 1);
  };
  var _sfc_staticRenderFns$1 = [];
  _sfc_render$1._withStripped = true;
  var __component__$1 = /* @__PURE__ */ normalizeComponent(
    _sfc_main$1,
    _sfc_render$1,
    _sfc_staticRenderFns$1,
    false,
    null,
    "58c1fc04",
    null,
    null
  );
  __component__$1.options.__file = "/Users/raphi/Server/bctec/site/plugins/kirbyhelper/src/components/AccordionBlock.vue";
  const AccordionBlock = __component__$1.exports;
  const _sfc_main = {
    data() {
      return {
        useglobalteam: this.content.useglobalteam
      };
    },
    computed: {
      blockitems() {
        return this.content.teammembers || {};
      }
    }
  };
  var _sfc_render = function render() {
    var _vm = this, _c = _vm._self._c;
    return _c("div", [_vm.useglobalteam ? _c("k-grid", [_c("k-column", { attrs: { "width": "12/12" } }, [_c("k-info-field", { attrs: { "label": "Team", "text": "Das Team wird von den Seiteneinstellungen geladen und kann auch dort\n        ge\xE4ndert werden." } })], 1)], 1) : _c("k-grid", _vm._l(_vm.blockitems, function(item) {
      return _c("k-column", { key: item.id, attrs: { "width": "4/12" } }, [item.portrait[0] ? _c("k-image", { attrs: { "src": item.portrait[0].url, "width": "365", "height": "260", "ratio": "73/52", "cover": "true" } }) : _vm._e(), _c("k-headline", [_vm._v(" " + _vm._s(item.name) + " ")]), _c("k-text", [_vm._v(" " + _vm._s(item.email) + " "), _c("br"), _vm._v(" " + _vm._s(item.phone) + " ")])], 1);
    }), 1)], 1);
  };
  var _sfc_staticRenderFns = [];
  _sfc_render._withStripped = true;
  var __component__ = /* @__PURE__ */ normalizeComponent(
    _sfc_main,
    _sfc_render,
    _sfc_staticRenderFns,
    false,
    null,
    null,
    null,
    null
  );
  __component__.options.__file = "/Users/raphi/Server/bctec/site/plugins/kirbyhelper/src/components/TeamBlock.vue";
  const TeamBlock = __component__.exports;
  panel.plugin("docono/kirbyhelper", {
    blocks: {
      accordion: AccordionBlock,
      team: TeamBlock
    }
  });
})();
