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

/* blog/index.html.twig */
class __TwigTemplate_098a87ec9d14f4b841822dbac950d0d66f1c0c653354869a2d95dcb188d28d3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<script> 
        jQuery(function(){
            \$(function () {
                \$(window).scroll(function () { //Fonction appelée quand on descend la page
                    if (\$(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                        \$('#scrollUp').css('right','10px'); // Replace à 10pixels de la droite l'image
                    } else { 
                        \$('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
                    }
                });
            });
        });
</script>



<div class=\"container-figure\">
    <figure>
      <figcaption>
        <div class=\"container-title\">
          <strong class=\"title\">SnowTricks</strong>
          <p>Découvre les meilleurs tricks de snowboard</p>
        </div>
      </figcaption>
        <img src=\"img1.jpg\" alt=\"\">
    </figure>
</div>


<div class=\"container\">

  <section class=\"articles\">
  <h2 id=\"top\">Les articles</h2>
    <div class=\"row\">
      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 42
            echo "
  
      <!--div class=\"col-lg-2\"-->
        <div class=\"col-2_4\">
            <h2>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
                // line 48
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"><img src=\"icone_modif_2.png\"  alt=\"\"></a>
              <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\"><img src=\"icone_suppr_2.png\"  alt=\"\"></a>
            ";
            }
            // line 51
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"\" style=\"width:100%; height:auto\">
              <p>";
            // line 52
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 52), 0, 55), "html", null, true);
            echo "...</p>
              <a href=\" ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo " \" class=\"btn btn-primary\">Lire la suite</a>
              <div class=\"metadata\">Ecrit le ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 54), "H:i"), "html", null, true);
            echo "</div>
        </div>


      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    </div>

  </section>

</div>

<div id=\"scrollUp\">
<a href=\"#top\"><img src=\"to_top.png\"/></a>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 59,  164 => 54,  160 => 53,  156 => 52,  151 => 51,  146 => 49,  141 => 48,  139 => 47,  135 => 46,  129 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<script> 
        jQuery(function(){
            \$(function () {
                \$(window).scroll(function () { //Fonction appelée quand on descend la page
                    if (\$(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                        \$('#scrollUp').css('right','10px'); // Replace à 10pixels de la droite l'image
                    } else { 
                        \$('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
                    }
                });
            });
        });
</script>



<div class=\"container-figure\">
    <figure>
      <figcaption>
        <div class=\"container-title\">
          <strong class=\"title\">SnowTricks</strong>
          <p>Découvre les meilleurs tricks de snowboard</p>
        </div>
      </figcaption>
        <img src=\"img1.jpg\" alt=\"\">
    </figure>
</div>


<div class=\"container\">

  <section class=\"articles\">
  <h2 id=\"top\">Les articles</h2>
    <div class=\"row\">
      {% for article in articles %}

  
      <!--div class=\"col-lg-2\"-->
        <div class=\"col-2_4\">
            <h2>{{ article.title }}</h2>
            {% if app.user %}
              <a href=\"{{ path('blog_edit', {'id': article.id}) }}\"><img src=\"icone_modif_2.png\"  alt=\"\"></a>
              <a href=\"{{ path('blog_delete', {'id': article.id}) }}\"><img src=\"icone_suppr_2.png\"  alt=\"\"></a>
            {% endif %}
              <img src=\"{{ article.image }}\" alt=\"\" style=\"width:100%; height:auto\">
              <p>{{ article.content |slice(0,55)}}...</p>
              <a href=\" {{ path('blog_show', {'id': article.id}) }} \" class=\"btn btn-primary\">Lire la suite</a>
              <div class=\"metadata\">Ecrit le {{ article.createdAt | date('d/m/Y')}} à {{ article.createdAt | date('H:i')}}</div>
        </div>


      {% endfor %}

    </div>

  </section>

</div>

<div id=\"scrollUp\">
<a href=\"#top\"><img src=\"to_top.png\"/></a>
</div>

{% endblock %}", "blog/index.html.twig", "/Users/joris/Desktop/Openclassroom/Projet 6/projet6/templates/blog/index.html.twig");
    }
}
