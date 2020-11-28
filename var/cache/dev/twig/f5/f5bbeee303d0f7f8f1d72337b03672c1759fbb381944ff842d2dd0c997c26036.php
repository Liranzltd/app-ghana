<?php

/* email/request-notification.html.twig */
class __TwigTemplate_6969ee821179bf2301c4a022e62b10ac74102dcbf3d1a482dcf4ca92f2817849 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/request-notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/request-notification.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 13, $this->source); })()), "intro", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 26, $this->source); })()), "buyer", array()), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <b>Name</b>: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 29, $this->source); })()), "name", array()), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <b>Scope</b>: ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 32, $this->source); })()), "description", array());
        echo "
              </p>
              <p class=\"text_container\">
                <b>Application Deadline</b>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 35, $this->source); })()), "deadline", array()), "html", null, true);
        echo "
              </p>
              <p class=\"text_container\">
                <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 38, $this->source); })()), "link", array()), "html", null, true);
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
        return array (  98 => 49,  84 => 38,  78 => 35,  72 => 32,  66 => 29,  60 => 26,  44 => 13,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('email/header.html.twig') }}
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
