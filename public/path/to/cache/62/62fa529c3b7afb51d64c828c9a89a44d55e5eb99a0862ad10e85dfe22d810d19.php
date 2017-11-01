<?php

/* layout.html */
class __TwigTemplate_c5be53f7f815fa068c01386757ccedb4335360700223a8513fd52f29c7f7174c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <link rel=\"stylesheet\" href=\"style.css\" />
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
    </head>
    <body>
        <div id=\"content\">";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 10
        $this->displayBlock('footer', $context, $blocks);
        // line 13
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "                &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  58 => 10,  53 => 8,  48 => 5,  41 => 13,  39 => 10,  34 => 8,  28 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "C:\\xampp\\htdocs\\protal-design\\templates\\layout.html");
    }
}
