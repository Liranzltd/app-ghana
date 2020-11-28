<?php

/* email/renewal_notification.html.twig */
class __TwigTemplate_73424cbc385d5f5d04d3e2c93bcd49332f1371d152e112b5488e9b575e99861e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/renewal_notification.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/renewal_notification.html.twig"));

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
              <span class=\"text_container\">African Partner Pool - Renewal Reminder.</span>
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
              Dear ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 25, $this->source); })()), "company", array()), "registeredBy", array()), "firstName", array()), "html", null, true);
        echo ",
              </p>
              <p class=\"text_container\">
                <span style=\"color:#FEFEFE\">The annual renewal of your subscription on the African Partner Pool is due on <strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 28, $this->source); })()), "expiryDate", array()), "html", null, true);
        echo "</strong>.</span>
              </p>
              <p class=\"text_container\">
                To ensure you do not miss out on the opportunities available to you and over 1000 other Ghanaian businesses, please complete your payment by clicking on the link below.
              </p>
              <p class=\"text_container\">
                <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("portal");
        echo "\">Renew your subscription</a>
              </p>
              <p class=\"text_container\">
                Renewing only takes 2 minutes and costs just GHS ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->source); })()), "company", array()), "amountDue", array()), "html", null, true);
        echo " for the whole year.
              </p>
              <p class=\"text_container\">
                For more information, contact the APP team by email <a href=\"mailto::app@investinafrica.com\">app@investinafrica.com</a> or call 0303938751 / 0303935284.
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
        // line 51
        echo twig_include($this->env, $context, "email/footer.html.twig");
        echo "


";
        // line 54
        echo twig_include($this->env, $context, "email/footer.html.twig");
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/renewal_notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 54,  94 => 51,  77 => 37,  71 => 34,  62 => 28,  56 => 25,  29 => 1,);
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
              <span class=\"text_container\">African Partner Pool - Renewal Reminder.</span>
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
              Dear {{ options.company.registeredBy.firstName }},
              </p>
              <p class=\"text_container\">
                <span style=\"color:#FEFEFE\">The annual renewal of your subscription on the African Partner Pool is due on <strong>{{ options.expiryDate }}</strong>.</span>
              </p>
              <p class=\"text_container\">
                To ensure you do not miss out on the opportunities available to you and over 1000 other Ghanaian businesses, please complete your payment by clicking on the link below.
              </p>
              <p class=\"text_container\">
                <a href=\"{{ url('portal') }}\">Renew your subscription</a>
              </p>
              <p class=\"text_container\">
                Renewing only takes 2 minutes and costs just GHS {{ options.company.amountDue }} for the whole year.
              </p>
              <p class=\"text_container\">
                For more information, contact the APP team by email <a href=\"mailto::app@investinafrica.com\">app@investinafrica.com</a> or call 0303938751 / 0303935284.
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


{{ include('email/footer.html.twig') }}
", "email/renewal_notification.html.twig", "/home/admin/web/appghana.com/public_html/app/Resources/views/email/renewal_notification.html.twig");
    }
}
