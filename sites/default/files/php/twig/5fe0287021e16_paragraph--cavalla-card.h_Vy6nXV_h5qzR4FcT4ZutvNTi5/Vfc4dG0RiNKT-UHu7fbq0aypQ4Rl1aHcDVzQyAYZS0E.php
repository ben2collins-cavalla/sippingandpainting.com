<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/sp_theme/templates/paragraphs/paragraph--cavalla-card.html.twig */
class __TwigTemplate_b4beb76fe4a19b59ff51f94e8db9a0fdcf7b44edf54b210ac4af5f0333e8ab58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "for" => 16];
        $filters = ["escape" => 1, "length" => 16];
        $functions = ["range" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"card_bundle\" data-animate-card=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_animation", []), 0, [], "array")), "html", null, true);
        echo "\" class=\"py-3\">
    <section class=\"container\">
      <section class=\"text-center\">
        ";
        // line 4
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_card_header", []), 0, [], "array"))) {
            // line 5
            echo "        <h1 class=\"header_text\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_card_header", []), 0, [], "array")), "html", null, true);
            echo "</h1>
        ";
        }
        // line 7
        echo "        ";
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_card_text", []), 0, [], "array"))) {
            // line 8
            echo "          <p class=\"lead\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_card_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
        ";
        }
        // line 10
        echo "      </section>
      <section class=\"card-deck\">
          ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_card_field", [])), "html", null, true);
        echo "
      </section>
      ";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_link", []), 0, [], "array")) {
            // line 15
            echo "      <section class=\"text-center hyperlinks mt-4\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, $this->getAttribute(($context["content"] ?? null), "field_card_link", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                echo "          ";
                if ( !(null === $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_link", []), $context["i"], [], "array"))) {
                    // line 18
                    echo "            <a class=\"btn btn-dark\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_link", []), $context["i"], [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_card_link", []), $context["i"], [], "array"), "#title", [], "array")), "html", null, true);
                    echo "&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
          ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </section>
      ";
        }
        // line 23
        echo "    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/sp_theme/templates/paragraphs/paragraph--cavalla-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  114 => 21,  108 => 20,  100 => 18,  97 => 17,  93 => 16,  90 => 15,  88 => 14,  83 => 12,  79 => 10,  73 => 8,  70 => 7,  64 => 5,  62 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"card_bundle\" data-animate-card=\"{{ content.field_card_animation[0] }}\" class=\"py-3\">
    <section class=\"container\">
      <section class=\"text-center\">
        {%  if true in content.field_cavalla_card_header[0] %}
        <h1 class=\"header_text\">{{ content.field_cavalla_card_header[0] }}</h1>
        {% endif %}
        {%  if true in content.field_cavalla_card_text[0] %}
          <p class=\"lead\">{{ content.field_cavalla_card_text[0] }}</p>
        {% endif %}
      </section>
      <section class=\"card-deck\">
          {{ content.field_card_field }}
      </section>
      {% if content.field_card_link[0] %}
      <section class=\"text-center hyperlinks mt-4\">
        {% for i in 0..content.field_card_link|length %}
          {% if content.field_card_link[i] is not null %}
            <a class=\"btn btn-dark\" href=\"{{ content.field_card_link[i]['#url'] }}\">{{ content.field_card_link[i]['#title'] }}&nbsp;<i class=\"fa fa-arrow-circle-right\"></i></a>
          {% endif %}
        {% endfor %}
      </section>
      {% endif %}
    </section>
</section>
", "themes/contrib/sp_theme/templates/paragraphs/paragraph--cavalla-card.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/sp_theme/templates/paragraphs/paragraph--cavalla-card.html.twig");
    }
}
