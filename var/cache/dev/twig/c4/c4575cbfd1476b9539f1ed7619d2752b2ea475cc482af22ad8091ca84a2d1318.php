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

/* blog/show.html.twig */
class __TwigTemplate_125f8d0f28188190b2f5635114172acbc1450ba36730daaf136b1fe86330d10d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">



   <article>
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "createdAt", [], "any", false, false, false, 11), "H:i"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "createdBy", [], "any", false, false, false, 11), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "category", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\">
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>
    </article>


    <!--section class=\"photos\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 27
        echo "            </div>
        </div>
    </section-->








    <section id=\"commentaires\">

        <h1>";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "comments", [], "any", false, false, false, 40)), "html", null, true);
        echo " commentaires :</h1>




<!-- Nouvelle partie ajoutée pour la pagination des commentaires -->
        <div class=\"count\">
    ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 47, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 47), "html", null, true);
        echo "
</div>
<table>
    <tr>
        ";
        // line 52
        echo "        <th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "Id", "a.id");
        echo "</th>
        <th";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "isSorted", [0 => "a.Title"], "method", false, false, false, 53)) {
            echo " class=\"sorted\"";
        }
        echo ">
            ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 54, $this->source); })()), "Title", "a.title");
        echo "
        </th>
        <th";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()), "isSorted", [0 => [0 => "a.date", 1 => "a.time"]], "method", false, false, false, 56)) {
            echo " class=\"sorted\"";
        }
        echo ">
            ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "Release", [0 => "a.date", 1 => "a.time"]);
        echo "
        </th>
    </tr>
    ";
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 61, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 62
            echo "        <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62) % 2 != 0)) {
                echo "class=\"color\"";
            }
            echo ">
        
            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "createdAt", [], "any", false, false, false, 66), "d/m/Y à H:i"), "html", null, true);
            echo " </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</table>
";
        // line 71
        echo "<div class=\"navigation\">
    ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 72, $this->source); })()));
        echo "
</div>





        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 79, $this->source); })()), "comments", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 80
            echo "
        <br><div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-4\"> 
                    <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 84), "image", [], "any", false, false, false, 84), "html", null, true);
            echo "\" alt=\"\" style=\"width:50px; height:auto\">
      
                        ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 86), "d/m/Y à H:i"), "html", null, true);
            echo " </small>)
                                      <a href=\"\"><img src=\"/icone_modif_2.png\"  alt=\"\" style=\"width:30px; height:auto\"></a>
                                      <a href=\"\"><img src=\"/icone_suppr_2.png\"  alt=\"\" style=\"width:30px; height:auto\"></a>
                </div>
                <div class=\"col-8\">
                    ";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 91);
            echo "
                    
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98)) {
            // line 99
            echo "
        ";
            // line 100
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 100, $this->source); })()), 'form_start');
            echo "
        ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), 'row');
            echo "
        ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 102, $this->source); })()), "content", [], "any", false, false, false, 102), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

        <button type=\"submit\" class=\"btn btn-success\">Commenter</button>

        ";
            // line 106
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 106, $this->source); })()), 'form_end');
            echo "

        ";
        } else {
            // line 109
            echo "
            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecté</h2>
            <a href=\"";
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
        ";
        }
        // line 113
        echo "
    </section>

    

</div>












";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 113,  303 => 111,  299 => 109,  293 => 106,  286 => 102,  282 => 101,  278 => 100,  275 => 99,  273 => 98,  270 => 97,  258 => 91,  248 => 86,  243 => 84,  237 => 80,  233 => 79,  223 => 72,  220 => 71,  217 => 69,  200 => 66,  196 => 65,  192 => 64,  184 => 62,  166 => 61,  160 => 57,  154 => 56,  149 => 54,  143 => 53,  138 => 52,  131 => 47,  121 => 40,  106 => 27,  95 => 14,  91 => 13,  80 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">



   <article>
        <h2>{{ article.title }}</h2>
        <div class=\"metadata\">Ecrit le {{ article.createdAt | date('d/m/Y')}} à {{ article.createdAt | date('H:i')}} par {{ article.createdBy }} dans la catégorie {{ article.category.title }}</div>
        <div class=\"content\">
            <img src=\"{{ article.image }}\" alt=\"\">
            <p>{{ article.content }}</p>
        </div>
    </article>


    <!--section class=\"photos\">
        <div class=\"container\">
            <div class=\"row\">
                {#% for photos in photoss %}
                    <div class=\"col-2_4\">
                        <img src=\"{{ article.photos.url }}\" alt=\"\" style=\"width:100%; height:auto\">
                    </div>
                {% endfor %#}
            </div>
        </div>
    </section-->








    <section id=\"commentaires\">

        <h1>{{ article.comments | length }} commentaires :</h1>




<!-- Nouvelle partie ajoutée pour la pagination des commentaires -->
        <div class=\"count\">
    {{ comment.getTotalItemCount }}
</div>
<table>
    <tr>
        {# sorting of properties based on query components #}
        <th>{{ knp_pagination_sortable(comment, 'Id', 'a.id') }}</th>
        <th{% if comment.isSorted('a.Title') %} class=\"sorted\"{% endif %}>
            {{ knp_pagination_sortable(comment, 'Title', 'a.title') }}
        </th>
        <th{% if comment.isSorted(['a.date', 'a.time']) %} class=\"sorted\"{% endif %}>
            {{ knp_pagination_sortable(comment, 'Release', ['a.date', 'a.time']) }}
        </th>
    </tr>
    {# table body #}
    {% for com in comment %}
        <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
        
            <td>{{ com.id }}</td>
            <td>{{ com.content }}</td>
            <td>{{ com.createdAt | date('d/m/Y à H:i') }} </td>
        </tr>
    {% endfor %}
</table>
{# display navigation #}
<div class=\"navigation\">
    {{ knp_pagination_render(comment) }}
</div>





        {% for comment in article.comments %}

        <br><div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-4\"> 
                    <img src=\"{{ comment.user.image }}\" alt=\"\" style=\"width:50px; height:auto\">
      
                        {{ comment.user.username }} (<small>{{ comment.createdAt | date('d/m/Y à H:i') }} </small>)
                                      <a href=\"\"><img src=\"/icone_modif_2.png\"  alt=\"\" style=\"width:30px; height:auto\"></a>
                                      <a href=\"\"><img src=\"/icone_suppr_2.png\"  alt=\"\" style=\"width:30px; height:auto\"></a>
                </div>
                <div class=\"col-8\">
                    {{ comment.content | raw }}
                    
                </div>
            </div>
        </div>
        {% endfor %}

        {% if app.user %}

        {{ form_start(commentForm) }}
        {{ form_row(commentForm.user ) }}
        {{ form_row(commentForm.content, {'attr': {'placeholder': \"Votre commentaire\"}})}}

        <button type=\"submit\" class=\"btn btn-success\">Commenter</button>

        {{ form_end(commentForm)}}

        {% else %}

            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecté</h2>
            <a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">Connexion</a>
        {% endif %}

    </section>

    

</div>












{% endblock %}", "blog/show.html.twig", "/Users/joris/Desktop/Openclassroom/Projet 6/projet6/templates/blog/show.html.twig");
    }
}
