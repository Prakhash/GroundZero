<?php

/* VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig */
class __TwigTemplate_b065fcf2c25e7d6bde72e39ce88408e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig");

        $this->blocks = array(
            'adminpromotion' => array($this, 'block_adminpromotion'),
            'adminevent' => array($this, 'block_adminevent'),
            'adminreport' => array($this, 'block_adminreport'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VolunteerManagementSystemPagesBundle:Homepage:homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_adminpromotion($context, array $blocks = array())
    {
        // line 3
        echo "
<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("just");
        echo "\" method=\"post\" >
<p align=\"right\">
            <button type=\"submit\">Promote Administrator</button>
 </p>
</form>
";
    }

    // line 10
    public function block_adminevent($context, array $blocks = array())
    {
        // line 11
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("just");
        echo "\" method=\"post\" >
        <p align=\"right\">
            <button type=\"submit\">Manage Events</button>
       </p>
</form>
";
    }

    // line 17
    public function block_adminreport($context, array $blocks = array())
    {
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "VolunteerManagementSystemPagesBundle:Homepage:homepageadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  60 => 17,  49 => 11,  46 => 10,  36 => 4,  33 => 3,  30 => 2,);
    }
}
