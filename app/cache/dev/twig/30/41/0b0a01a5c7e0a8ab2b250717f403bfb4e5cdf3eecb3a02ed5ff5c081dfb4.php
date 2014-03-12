<?php

/* SdzBlogBundle:blog:voir.html.twig */
class __TwigTemplate_30410b0a01a5c7e0a8ab2b250717f403bfb4e5cdf3eecb3a02ed5ff5c081dfb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        $this->env->loadTemplate("SdzBlogBundle:Blog:article.html.twig")->display($context);
        // line 13
        echo "
  <p>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  113 => 31,  84 => 31,  77 => 27,  53 => 16,  126 => 52,  118 => 49,  114 => 38,  104 => 11,  23 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 24,  63 => 20,  59 => 19,  38 => 17,  94 => 28,  89 => 54,  85 => 19,  75 => 39,  68 => 16,  56 => 29,  87 => 49,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 12,  27 => 9,  44 => 12,  31 => 9,  28 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 34,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 5,  25 => 6,  19 => 2,  79 => 28,  72 => 16,  69 => 25,  47 => 13,  40 => 9,  37 => 10,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 29,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 19,  52 => 15,  50 => 10,  43 => 10,  41 => 7,  35 => 5,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 30,  103 => 32,  99 => 31,  95 => 8,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 37,  64 => 17,  60 => 23,  57 => 11,  54 => 18,  51 => 14,  48 => 13,  45 => 12,  42 => 10,  39 => 9,  36 => 10,  33 => 6,  30 => 5,);
    }
}
