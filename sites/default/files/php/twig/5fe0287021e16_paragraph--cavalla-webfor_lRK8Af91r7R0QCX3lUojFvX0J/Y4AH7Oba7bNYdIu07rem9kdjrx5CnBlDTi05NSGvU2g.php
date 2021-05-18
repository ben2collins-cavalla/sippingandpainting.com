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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_webform/templates/paragraph--cavalla-webform.html.twig */
class __TwigTemplate_f9ff48e0289117d92d441be7f5382f620c79cf0ffe7b1f145685285d73760ecd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
        echo "<section class=\"webform_bundle\">
    <aside class=\"w-50 position-relative d-table-cell webform_section\">
        <section class=\"webform\">
          ";
        // line 4
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_title", []), 0, [], "array"))) {
            // line 5
            echo "            <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_title", []), 0, [], "array")), "html", null, true);
            echo "</h1>
          ";
        }
        // line 7
        echo "          ";
        if (twig_in_filter(true, $this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_text", []))) {
            // line 8
            echo "            <p class=\"lead\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_intro_text", []), 0, [], "array")), "html", null, true);
            echo "</p>
          ";
        }
        // line 10
        echo "          <section class=\"my-4\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_webform", []), 0, [], "array")), "html", null, true);
        echo " </section>
        </section>
    </aside>
    <aside class=\"w-50 position-relative d-table-cell contactInfo_section\">
        ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_map", []), 0, [], "array")), "html", null, true);
        echo "
        <div class=\"contactInfo\">
          <address>
            <h1>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_company_name", []), 0, [], "array")), "html", null, true);
        echo "</h1>
            <p>
              <b><u>Address</u></b></br>
              ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_street", []), 0, [], "array")), "html", null, true);
        echo "</br>
              ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_city", []), 0, [], "array")), "html", null, true);
        echo ",";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_state", []), 0, [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_address_zipcode", []), 0, [], "array")), "html", null, true);
        echo "</br>
            </p>
             <p>
              <b><u>Hours</u></b></br>
               ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_work_hours", []), 0, [], "array")), "html", null, true);
        echo "
             </p>
             <p>
              <b><u>Email</u></b> </br>
              <a href=\"mailto:";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_email", []), 0, [], "array")), "html", null, true);
        echo "?subject=Inquiry\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_email", []), 0, [], "array")), "html", null, true);
        echo "</a>
            </p>
            <p>
              <b><u>Telephone</u></b></br>
              ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_telephone", []), 0, [], "array")), "html", null, true);
        echo "
            </p>
            ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_wf_link", []), 0, [], "array")), "html", null, true);
        echo "
          </address>
        </div>
    </aside>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_webform/templates/paragraph--cavalla-webform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  128 => 33,  119 => 29,  112 => 25,  101 => 21,  97 => 20,  91 => 17,  85 => 14,  77 => 10,  71 => 8,  68 => 7,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"webform_bundle\">
    <aside class=\"w-50 position-relative d-table-cell webform_section\">
        <section class=\"webform\">
          {%  if true in content.field_cavalla_wf_intro_title[0] %}
            <h1>{{ content.field_cavalla_wf_intro_title[0] }}</h1>
          {% endif %}
          {%  if true in content.field_cavalla_wf_intro_text %}
            <p class=\"lead\">{{ content.field_cavalla_wf_intro_text[0] }}</p>
          {% endif %}
          <section class=\"my-4\"> {{ content.field_cavalla_wf_webform[0] }} </section>
        </section>
    </aside>
    <aside class=\"w-50 position-relative d-table-cell contactInfo_section\">
        {{ content.field_cavalla_wf_map[0] }}
        <div class=\"contactInfo\">
          <address>
            <h1>{{ content.field_cavalla_wf_company_name[0] }}</h1>
            <p>
              <b><u>Address</u></b></br>
              {{ content.field_cavalla_wf_address_street[0] }}</br>
              {{ content.field_cavalla_wf_address_city[0] }},{{ content.field_cavalla_wf_address_state[0] }} {{ content.field_cavalla_wf_address_zipcode[0] }}</br>
            </p>
             <p>
              <b><u>Hours</u></b></br>
               {{ content.field_cavalla_wf_work_hours[0] }}
             </p>
             <p>
              <b><u>Email</u></b> </br>
              <a href=\"mailto:{{ content.field_cavalla_wf_email[0] }}?subject=Inquiry\">{{ content.field_cavalla_wf_email[0] }}</a>
            </p>
            <p>
              <b><u>Telephone</u></b></br>
              {{ content.field_cavalla_wf_telephone[0] }}
            </p>
            {{ content.field_cavalla_wf_link[0] }}
          </address>
        </div>
    </aside>
</section>
", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_webform/templates/paragraph--cavalla-webform.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_webform/templates/paragraph--cavalla-webform.html.twig");
    }
}
