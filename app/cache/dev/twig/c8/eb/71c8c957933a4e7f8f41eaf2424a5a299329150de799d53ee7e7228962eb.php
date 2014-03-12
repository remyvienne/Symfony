<?php

/* SdzBlogBundle:Blog:formulaire.html.twig */
class __TwigTemplate_c8eb71c8c957933a4e7f8f41eaf2424a5a299329150de799d53ee7e7228962eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 5
        echo "
<h3>Formulaire d'article</h3>

";
        // line 9
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
  
  ";
        // line 13
        echo "
<h3>Formulaire d'article</h3>

<div class=\"well\">
  <form method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  22 => 5,  19 => 2,  126 => 52,  123 => 51,  121 => 50,  118 => 49,  114 => 38,  111 => 37,  104 => 11,  101 => 10,  95 => 8,  89 => 54,  87 => 49,  75 => 39,  73 => 37,  67 => 34,  56 => 29,  38 => 17,  36 => 10,  31 => 8,  23 => 2,  63 => 18,  60 => 30,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  49 => 14,  47 => 13,  42 => 18,  39 => 9,  32 => 13,  29 => 5,);
    }
}
