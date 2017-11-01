<?php

/* index.html */
class __TwigTemplate_6594c5d80e9834c0feea5061e5014b559dac2b62754509548b752ad44009a60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>User List</h1>
<ul>
    <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile", array("name" => "josh")), "html", null, true);
        echo "\" ";
        if ($this->env->getExtension('Slim\Views\TwigExtension')->isCurrentPath("profle", array("name" => "josh"))) {
            echo "class=\"active\"";
        }
        echo ">Josh</a></li>
    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profile", array("name" => "andrew")), "html", null, true);
        echo "\">Andrew</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "C:\\xampp\\htdocs\\protal-design\\templates\\index.html");
    }
}
