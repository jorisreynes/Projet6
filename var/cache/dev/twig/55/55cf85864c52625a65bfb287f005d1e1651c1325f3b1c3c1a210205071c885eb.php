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

/* blog/create.html.twig */
class __TwigTemplate_e4952f86de08719cc4d2a94c5b22b266ea0778f7f7f3fd3f72b68f256bd2a77f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
<div class=\"container\">

";
        // line 9
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "
    <h1>Modification d'un trick</h1>

";
        } else {
            // line 13
            echo " 

    <h1>Création d'un trick</h1>

";
        }
        // line 18
        echo "

";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 20, $this->source); })()), 'form_start');
        echo "


";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholer" => "Titre de l'article"]]);
        echo "
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 24, $this->source); })()), "category", [], "any", false, false, false, 24), 'row');
        echo "
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), 'row', ["attr" => ["placeholer" => "Contenu de l'article"]]);
        echo "
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), 'row', ["attr" => ["placeholer" => "Image de l'article"]]);
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 27, $this->source); })()), "video", [], "any", false, false, false, 27), 'row', ["attr" => ["placeholer" => "Video de l'article"]]);
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 28, $this->source); })()), "createdBy", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholer" => "Autheur de l'article"]]);
        echo "



<button type=\"submit\" class=\"btn btn-success\">

";
        // line 34
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "
    Enregistrer

";
        } else {
            // line 38
            echo "    

    Ajouter l'article</button>

";
        }
        // line 43
        echo "
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new RuntimeError('Variable "formArticle" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  145 => 43,  138 => 38,  132 => 35,  130 => 34,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  95 => 20,  91 => 18,  84 => 13,  78 => 10,  76 => 9,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formArticle 'bootstrap_4_layout.html.twig' %}

{% block body %}

<div class=\"container\">

{% if editMode %}

    <h1>Modification d'un trick</h1>

{% else %} 

    <h1>Création d'un trick</h1>

{% endif %}


{{ form_start(formArticle) }}


{{ form_row(formArticle.title, {'attr': {'placeholer': \"Titre de l'article\"} } ) }}
{{ form_row(formArticle.category) }}
{{ form_row(formArticle.content, {'attr': {'placeholer': \"Contenu de l'article\"} } ) }}
{{ form_row(formArticle.image, {'attr': {'placeholer': \"Image de l'article\"} } ) }}
{{ form_row(formArticle.video, {'attr': {'placeholer': \"Video de l'article\"} } ) }}
{{ form_row(formArticle.createdBy, {'attr': {'placeholer': \"Autheur de l'article\"} } ) }}



<button type=\"submit\" class=\"btn btn-success\">

{% if editMode %}

    Enregistrer

{% else %}    

    Ajouter l'article</button>

{% endif %}

{{ form_end(formArticle) }}

</div>

{% endblock %}
", "blog/create.html.twig", "/Users/joris/Desktop/Openclassroom/Projet 6/projet6/templates/blog/create.html.twig");
    }
}
