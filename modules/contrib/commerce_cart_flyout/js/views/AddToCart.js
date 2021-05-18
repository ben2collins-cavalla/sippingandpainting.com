/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Backbone, _, Drupal) {
  Drupal.addToCart.AddToCartView = Backbone.View.extend({
    initialize: function initialize() {
      var _this = this;

      var defaultVariation = this.model.getVariation(this.model.getDefaultVariation());
      _.each(this.model.getAttributes(), function (attribute, i) {
        var attributeFieldName = 'attribute_' + attribute.id;
        if (defaultVariation.hasOwnProperty(attributeFieldName)) {
          _this.selectedAttributes[attributeFieldName] = defaultVariation[attributeFieldName];
        }
      });
      this.render();
    },

    events: {
      'click .form-submit': 'addToCart',
      'change .attribute-widgets input[type="radio"]': 'onAttributeChange',
      'change .attribute-widgets select': 'onAttributeChange',
      'change .variations-select select': 'onVariationTitleChange'
    },
    onVariationTitleChange: function onVariationTitleChange(event) {
      Drupal.detachBehaviors();
      var selectedVariation = this.model.getVariation(event.target.value);
      this.model.setSelectedVariation(selectedVariation.uuid);
      var injectedFields = this.model.getInjectedFieldsForVariation(selectedVariation.uuid);
      Object.values(injectedFields).map(function (injectedField) {
        $('.' + injectedField.class).html(injectedField.output);
      });
      Drupal.attachBehaviors();
    },
    onAttributeChange: function onAttributeChange(event) {
      Drupal.detachBehaviors();
      this.selectedAttributes[event.target.name] = event.target.value;
      var selectedVariation = this.model.getResolvedVariation(this.selectedAttributes);
      this.model.setSelectedVariation(selectedVariation.uuid);
      var injectedFields = this.model.getInjectedFieldsForVariation(selectedVariation.uuid);
      Object.values(injectedFields).map(function (injectedField) {
        $('.' + injectedField.class).html(injectedField.output);
      });
      Drupal.attachBehaviors();
    },
    addToCart: function addToCart() {
      var selectedVariation = this.model.getSelectedVariation();
      $.ajax({
        url: Drupal.url('cart/add?_format=json'),
        method: 'POST',
        data: JSON.stringify([{
          purchased_entity_type: 'commerce_product_variation',
          purchased_entity_id: selectedVariation.variation_id,
          quantity: 1
        }]),
        contentType: 'application/json;',
        dataType: 'json'
      }).done(function () {
        Drupal.cartFlyout.fetchCarts();
        Drupal.cartFlyout.flyoutOffcanvasToggle();
      });
    },
    render: function render() {
      if (this.model.getVariationCount() === 1) {
        this.$el.html(Drupal.theme('addToCartButton'));
      } else if (this.model.getAttributes().length === 0 || this.model.getType() !== 'commerce_product_variation_attributes') {
        var html = ['<div class="variations-select form-group">'];

        var variations = this.model.getVariations();
        html.push(Drupal.theme('addToCartVariationSelect', {
          variations: Object.keys(variations).map(function (uuid) {
            return variations[uuid];
          })
        }));

        html.push('</div>');
        html.push(Drupal.theme('addToCartButton'));
        this.$el.html(html.join(''));
      } else {
        var view = this;
        var _html = ['<div class="attribute-widgets form-group">'];
        this.model.getAttributes().forEach(function (entry) {
          var defaultArgs = {
            label: entry.label,
            attributeId: entry.id,
            attributeValues: entry.values,
            activeValue: view.selectedAttributes['attribute_' + entry.id]
          };

          if (entry.element_type === 'select') {
            _html.push(Drupal.theme('addToCartAttributesSelect', defaultArgs));
          } else if (entry.element_type === 'radios') {
            _html.push(Drupal.theme('addToCartAttributesRadios', defaultArgs));
          } else if (entry.element_type === 'commerce_product_rendered_attribute') {
            _html.push(Drupal.theme('addToCartAttributesRendered', Object.assign({}, defaultArgs, {
              attributeValues: view.model.getRenderedAttribute('attribute_' + entry.id)
            })));
          }
        });
        _html.push('</div>');
        _html.push(Drupal.theme('addToCartButton'));
        this.$el.html(_html.join(''));
      }
    }
  });
  Drupal.addToCart.AddToCartView.prototype.selectedAttributes = {};
})(jQuery, Backbone, _, Drupal);