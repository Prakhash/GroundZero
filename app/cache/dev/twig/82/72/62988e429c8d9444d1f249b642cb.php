<?php

/* VolunteerManagementSystemProfileBundle:Profile:profilepage.html.twig */
class __TwigTemplate_827262988e429c8d9444d1f249b642cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'selectprofile' => array($this, 'block_selectprofile'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Volma - Profile";
    }

    // line 4
    public function block_selectprofile($context, array $blocks = array())
    {
        echo "class=\"active\" ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"inner\">
    
                          <table width=\"92%\" border=\"1\">
  <tr>
    <td height=\"50\" colspan=\"4\" class=\"ab\">Frofile Informations</td>
  </tr>
  <tr>
  <tr>
    <td width=\"25%\" rowspan=\"7\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/volunteermanagementsystemstyles/images/dewmal.jpg"), "html", null, true);
        echo "\" width=\"200\" height=\"200\" /></td>
    <td width=\"21%\" height=\"56\">User Name</td>
    <td width=\"41%\">:";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
    <td width=\"10%\" class=\"ee\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("edit_name");
        echo "\">edit</a></td>
  </tr>
  <tr>
    <td height=\"48\">Password</td>
    <td>:";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td height=\"47\">First Name</td>
    <td>:";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td height=\"46\">Last Name</td>
    <td>:";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td height=\"52\">Email Address</td>
    <td>:";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td height=\"48\">Contact Number</td>
    <td>:";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td height=\"46\">Gender</td>
    <td>:";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
  <tr>
    <td width=\"28%\" height=\"41\">&nbsp;</td>
    <td>Birthday </td>
    <td>:";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateOfBirth"), "m/d/Y"), "html", null, true);
        echo "</td>
    <td class=\"fffg\">edit</td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemProfileBundle:Profile:profilepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  112 => 48,  104 => 43,  96 => 38,  88 => 33,  80 => 28,  72 => 23,  65 => 19,  61 => 18,  56 => 16,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
