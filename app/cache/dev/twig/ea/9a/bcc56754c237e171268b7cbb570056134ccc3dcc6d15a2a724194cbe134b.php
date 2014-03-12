<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
          Lire le tutoriel »
        </a></p>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
            
          </ul>
                    
          ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>The Rémy limit © 2014</p>
      </footer>
    </div>

  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "          ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        // line 51
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  123 => 51,  121 => 50,  118 => 49,  114 => 38,  111 => 37,  104 => 11,  101 => 10,  95 => 8,  89 => 54,  87 => 49,  75 => 39,  73 => 37,  67 => 34,  56 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  63 => 18,  60 => 30,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  49 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
