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

/* themes/contrib/sp_theme/templates/_includes/global/footer.html.twig */
class __TwigTemplate_90c2bdcba3dfb143993c1cf30227f304c57bd3fafdc6db39f15ab1ac13c6c7de extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24];
        $filters = ["escape" => 7, "date" => 53];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
        echo "<footer class=\"page-footer\">
    <div class=\"footer-menus navbar-dark bg-dark\">
     <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-4 col-sm-12 left_side\">
           <address class=\"grey-text text-lighten-4\">
            ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_organization_name"] ?? null)), "html", null, true);
        echo "<br/>
            ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_street"] ?? null)), "html", null, true);
        echo ", <br/>
            ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_city_state_zipcode"] ?? null)), "html", null, true);
        echo "<br/>
            ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_phone"] ?? null)), "html", null, true);
        echo "<br/>
            ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_email"] ?? null)), "html", null, true);
        echo "<br/>
           </address>   
         </div>
         <div class=\"col-md-8 col-sm-12 right_side\">
         <div class=\"col-md-4 col-sm-12 float-left\">
           ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
           ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
          <div class=\" col-12 social-links\">

            ";
        // line 24
        if (($context["facebook_link"] ?? null)) {
            // line 25
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-facebook\" target=\"_blank\"></a>
            ";
        }
        // line 27
        echo "            
            ";
        // line 28
        if (($context["twitter_link"] ?? null)) {
            // line 29
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            ";
        }
        // line 31
        echo "
            ";
        // line 32
        if (($context["instagram_link"] ?? null)) {
            // line 33
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if (($context["linkedin_link"] ?? null)) {
            // line 37
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            ";
        }
        // line 39
        echo "
            ";
        // line 40
        if (($context["youtube_link"] ?? null)) {
            // line 41
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            ";
        }
        // line 43
        echo "
          </div>
          <div class=\"col-12\"></div>
        </div>
       </div>
     </div>
    </div>
    </div>
     <div class=\"footer-copyright \">
       <div class=\"container\">
       <div class=\"copyright float-left\"> ©";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright&nbsp;";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_organization_name"] ?? null)), "html", null, true);
        echo ".</div>     
       <aside class=\"float-right legal\"> ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "</aside>
       </div>
     </div>
   </footer>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/sp_theme/templates/_includes/global/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  165 => 53,  153 => 43,  147 => 41,  145 => 40,  142 => 39,  136 => 37,  134 => 36,  131 => 35,  125 => 33,  123 => 32,  120 => 31,  114 => 29,  112 => 28,  109 => 27,  103 => 25,  101 => 24,  93 => 19,  87 => 16,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer\">
    <div class=\"footer-menus navbar-dark bg-dark\">
     <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-4 col-sm-12 left_side\">
           <address class=\"grey-text text-lighten-4\">
            {{ address_organization_name }}<br/>
            {{ address_street }}, <br/>
            {{ address_city_state_zipcode }}<br/>
            {{ address_phone }}<br/>
            {{ address_email }}<br/>
           </address>   
         </div>
         <div class=\"col-md-8 col-sm-12 right_side\">
         <div class=\"col-md-4 col-sm-12 float-left\">
           {{ page.footer_first}}
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
           {{ page.footer_second}}
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
          <div class=\" col-12 social-links\">

            {% if facebook_link %}
            <a href=\"{{ facebook_link }}\" class=\"fa fa-facebook\" target=\"_blank\"></a>
            {% endif %}
            
            {% if twitter_link %}
            <a href=\"{{ twitter_link }}\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            {% endif %}

            {% if instagram_link %}
            <a href=\"{{ instagram_link }}\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            {% endif %}

            {% if linkedin_link %}
            <a href=\"{{ linkedin_link }}\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            {% endif %}

            {% if youtube_link %}
            <a href=\"{{ youtube_link }}\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            {% endif %}

          </div>
          <div class=\"col-12\"></div>
        </div>
       </div>
     </div>
    </div>
    </div>
     <div class=\"footer-copyright \">
       <div class=\"container\">
       <div class=\"copyright float-left\"> ©{{ \"now\"|date(\"Y\") }} Copyright&nbsp;{{ address_organization_name }}.</div>     
       <aside class=\"float-right legal\"> {{ page.footer_third}}</aside>
       </div>
     </div>
   </footer>", "themes/contrib/sp_theme/templates/_includes/global/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/sippingandpainting.com/themes/contrib/sp_theme/templates/_includes/global/footer.html.twig");
    }
}
