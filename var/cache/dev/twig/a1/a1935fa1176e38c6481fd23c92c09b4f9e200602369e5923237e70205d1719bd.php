<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* email/request-notification.html.twig */
class __TwigTemplate_ca9234b3201a40f8f89c4061b5f409b6f739b82a7974876c5712190d885161c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/request-notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/request-notification.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "email/header.html.twig");
        echo "
<!-- section-7 -->
<table class=\"table_full editable-bg-color bg_color_ffffff editable-bg-image\" bgcolor=\"#ffffff\" width=\"100%\" align=\"center\"  mc:repeatable=\"castellab\" mc:variant=\"Header\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"  style=\"border-bottom: 1px solid #e1e1e1;background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" background=\"#\">
  <tr>
    <td>
      <table class=\"table1\" width=\"600\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0 auto;\">
        <!-- padding-top -->
        <tr><td height=\"60\"></td></tr>
        <!-- heading -->
        <tr>
          <td mc:edit=\"text702\" align=\"center\" class=\"text_color_282828\" style=\"color: #282828; font-size: 24px;letter-spacing: 1px; font-weight: 800; font-family: Raleway, Helvetica, sans-serif; mso-line-height-rule: exactly;\">
            <div class=\"editable-text\">
              <span class=\"text_container\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })()), "intro", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
            </div>
          </td>
        </tr>

        <!-- horizontal gap -->
        <tr><td height=\"45\"></td></tr>

        <!-- details -->
        <tr>
          <td mc:edit=\"text703\" align=\"center\" class=\"text_color_c2c2c2\" style=\"color: #131313; font-size: 13px;line-height: 2; font-weight: 400; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;\">
            <div class=\"editable-text\" style=\"line-height: 2;\">
              <p class=\"text_container\">
                <b>Buyer</b>: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 26, $this->source); })()), "buyer", [], "any", false, false, false, 26), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <b>Name</b>: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <b>Scope</b>: ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32);
        echo "
              </p>
              <p class=\"text_container\">
                <b>Application Deadline</b>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 35, $this->source); })()), "deadline", [], "any", false, false, false, 35), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })()), "link", [], "any", false, false, false, 38), "html", null, true);
        echo "\" target=\"_blank\">View Tender</a>
              </p>
            </div>
          </td>
        </tr>
        <!-- padding-bottom -->
        <tr><td height=\"20\"></td></tr>
      </table><!-- END container -->
    </td>
  </tr>
</table><!-- END wrapper -->
";
        // line 49
        echo twig_include($this->env, $context, "email/footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/request-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 49,  98 => 38,  92 => 35,  86 => 32,  80 => 29,  74 => 26,  58 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('email/header.html.twig') }}
<!-- section-7 -->
<table class=\"table_full editable-bg-color bg_color_ffffff editable-bg-image\" bgcolor=\"#ffffff\" width=\"100%\" align=\"center\"  mc:repeatable=\"castellab\" mc:variant=\"Header\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"  style=\"border-bottom: 1px solid #e1e1e1;background-image: url(#); background-position: top center; background-repeat: no-repeat; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" background=\"#\">
  <tr>
    <td>
      <table class=\"table1\" width=\"600\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"margin: 0 auto;\">
        <!-- padding-top -->
        <tr><td height=\"60\"></td></tr>
        <!-- heading -->
        <tr>
          <td mc:edit=\"text702\" align=\"center\" class=\"text_color_282828\" style=\"color: #282828; font-size: 24px;letter-spacing: 1px; font-weight: 800; font-family: Raleway, Helvetica, sans-serif; mso-line-height-rule: exactly;\">
            <div class=\"editable-text\">
              <span class=\"text_container\">{{ options.intro }}</span>
            </div>
          </td>
        </tr>

        <!-- horizontal gap -->
        <tr><td height=\"45\"></td></tr>

        <!-- details -->
        <tr>
          <td mc:edit=\"text703\" align=\"center\" class=\"text_color_c2c2c2\" style=\"color: #131313; font-size: 13px;line-height: 2; font-weight: 400; font-family: 'Open Sans', Helvetica, sans-serif; mso-line-height-rule: exactly;\">
            <div class=\"editable-text\" style=\"line-height: 2;\">
              <p class=\"text_container\">
                <b>Buyer</b>: {{ options.buyer }}
              </p>
              <p class=\"text_container\">
                <b>Name</b>: {{ options.name }}
              </p>
              <p class=\"text_container\">
                <b>Scope</b>: {{ options.description|raw }}
              </p>
              <p class=\"text_container\">
                <b>Application Deadline</b>: {{ options.deadline }}
              </p>
              <p class=\"text_container\">
                <a href=\"{{ options.link }}\" target=\"_blank\">View Tender</a>
              </p>
            </div>
          </td>
        </tr>
        <!-- padding-bottom -->
        <tr><td height=\"20\"></td></tr>
      </table><!-- END container -->
    </td>
  </tr>
</table><!-- END wrapper -->
{{ include('email/footer.html.twig') }}
", "email/request-notification.html.twig", "/home/admin/web/appghana.com/public_html/app/Resources/views/email/request-notification.html.twig");
    }
}
